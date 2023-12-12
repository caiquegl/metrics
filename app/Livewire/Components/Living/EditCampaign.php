<?php

namespace App\Livewire\Components\Living;

use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class EditCampaign extends Component
{
    use WithFileUploads;
    public $campaign;

    public $limitador = false;
    public $noLimitador = true;
    public $limit_default = 1;
    public $dateRangeVisual;
    public $name;
    public $category;
    public $subcategory;
    public $description;
    public $file;
    public $dateIni;
    public $dateEnd;

    protected $rules = [
        'name' => ['required', 'string'],
        'category' => ['required', 'string'],
        //'subcategory' => ['required', 'string'],
        //'description' => ['required', 'string'],
        'dateIni' => ['required', 'string'],
    ];

    protected $listeners = ['file-selected' => 'updateFile'];

    public function updateFile($data)
    {
        $this->file = $data['file'];
    }

    public function setCompany(){

        try {
            //code...
            $this->validate();
          
            $fileUrl = '';
            $existingCompany = Company::find($this->campaign->id);

            if ($this->file) {
                $path = $this->file->store('public/uploads');
                $fileUrl = Storage::url($path);
            }
    
            $conflictingCampaign = Company::where('is_active', true)
            ->where('id', '!=',$this->campaign->id)
            ->where(function ($query) {
                $query->whereBetween('date_ini', [$this->dateIni, $this->dateEnd])
                        ->orWhereBetween('date_end', [$this->dateIni, $this->dateEnd]);
            })
            ->first();
            
            if ($conflictingCampaign) {
                return redirect('/living/campaign')->with('erro', 'Já existe uma campanha ativa durante esse período');
            }
    
            if ($existingCompany) {
                $existingCompany->name = $this->name;
                $existingCompany->category = $this->category;
                $existingCompany->subcategory = $this->subcategory;
                $existingCompany->description = $this->description;
                $existingCompany->limit_default = $this->limit_default;
                $existingCompany->is_active = true;
                $existingCompany->date_ini = $this->dateIni;
                $existingCompany->date_end = $this->dateEnd;
                if ($this->file) $existingCompany->url = $fileUrl;
                $existingCompany->save();
            }

            session()->flash('success', 'Sucesso ao editar campanha');

            return redirect()->route('edit-campaign', ['id' => $this->campaign->id]);
        } catch (\Exception $e) {
            //throw $th;
            return ['err' => $e->getLine() . $e->getMessage()];
        }
    }

    public function mount($id)
    {
        $this->campaign = Company::find($id);

        $this->name = $this->campaign->name;
        $this->category = $this->campaign->category;
        $this->subcategory = $this->campaign->subcategory;
        $this->description = $this->campaign->description;  
        
        //$this->dateRangeVisual = Carbon::parse($this->campaign->date_ini)->format('d-m-Y') . ' - ' . Carbon::parse($this->campaign->date_end)->format('d-m-Y');

        $this->dateIni = $this->campaign->date_ini;
        $this->dateEnd = $this->campaign->date_end;

    }

    public function render()
    {
        return view('livewire.components.living.edit-campaign');
    }
}
