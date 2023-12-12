<?php

namespace App\Livewire\Components\Living;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $dataAtual = Carbon::now()->toDateString();

        // Consulta para encontrar registros vigentes
        $vigente = DB::table('companies')
            ->select('url', 'date_ini', 'date_end', 'description', 'name')
            ->where('is_active', true)
            ->whereRaw('date_ini <= ? AND date_end >= ?', [$dataAtual, $dataAtual])
            ->orderBy('date_ini')
            ->first(); // Obtém o primeiro resultado vigente

        // Consulta para encontrar as próximas 4 campanhas após a data fim do vigente
        
        $campanhas = [];
        if ($vigente) {
            $proximoVigente = Carbon::parse($vigente->date_end)->addDay(); // Adiciona 1 dia à data fim do vigente
        }else{
            $proximoVigente = strtotime($dataAtual);
        }
        if(!isset($vigente))$vigente = '/assets/images/vigent.png';
        $campanhas = DB::table('companies')
        ->select('url', 'date_ini', 'date_end', 'description', 'name')
        ->where('is_active', true)
        ->where('date_ini', '>', Carbon::parse($proximoVigente)->toDateTimeString())
        ->orderBy('date_ini')
        ->limit(2)
        ->get();
        for ($i = 0; $i < 2 ; $i++) {
            
            if (!isset($campanhas[$i])) {
                $campanha = new \stdClass();
                $campanha->url = '/assets/images/campanha02.png';
                $campanha->description = 'Uma nova Campanha sera adicionada em breve';
                $campanha->name = 'Heineken';
                $campanhas[] = $campanha;
            }
        }

        $vips = count(DB::table('customers')->select('id')->get());
        $visits = count(DB::table('qr_code_validations')->select('id')->whereMonth('created_at', '=', date('m', strtotime($dataAtual)))
        ->whereYear('created_at', '=', date('Y', strtotime($dataAtual)))->get());
//dd($vips);
        //dd($campanhas);
        return view('livewire.components.living.home-page', [
            'vigente' => $vigente == '/assets/images/vigent.png' ? $vigente : $vigente->url ,
            'campanhas' => $campanhas,
            'vips' => $vips,
            'visits' => $visits
        ]);
    }
}
