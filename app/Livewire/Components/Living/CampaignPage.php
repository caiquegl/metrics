<?php

namespace App\Livewire\Components\Living;

use Livewire\Component;
use Livewire\Attributes\Rule; 
use App\Models\Company;
use App\Models\QrCode;
use App\Models\Customer;
use Ramsey\Uuid\Uuid;
use App\Http\Controllers\TwilioController;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CampaignPage extends Component
{
    use WithFileUploads;

    public $limitador = false;
    public $noLimitador = true;
    public $limit_default = 1;

 
    public $name = '';
    public $category = '';
    public $file;
    public $dateIni = '';
    public $dateEnd = '';

    protected $rules = [
        'name' => ['required', 'string'],
        'category' => ['required', 'string'],
        'file' => ['required','image'],
        //'subcategory' => ['required', 'string'],
        //'description' => ['required', 'string'],
        'dateIni' => ['required', 'string'],
    ];

    protected $listeners = ['file-selected' => 'updateFile'];

    public function updateFile($data) : array
    {
        dd($this->file);
        $this->file = $data['file'];
    }

    public function delete($id){
        $existingCompany = Company::find($id);

        $existingCompany->is_active = false;
        $existingCompany->save();
    }

    public function setCompany(){
        $this->validate();

        $fileUrl = '';
        
        if ($this->file) {
            $path = $this->file->store('public/uploads');
            // Gere a URL para o arquivo
            $fileUrl = Storage::url($path);
        } else {
            $fileUrl = null;
        }

        // $conflictingCampaign = Company::where('is_active', true)
        // ->where(function ($query) {
        //     $query->whereBetween('date_ini', [$this->dateRange->start, $this->dateRange->end])
        //             ->orWhereBetween('date_end', [$this->dateRange->start, $this->dateRange->end]);
        // })
        // ->first();

        // if ($conflictingCampaign) {
        //     return redirect('/living/campaign')->with('erro', 'Já existe uma campanha ativa durante esse período');
        //     //$fail('Já existe uma campanha ativa durante esse período.');  
        // }

        $company = new Company();
        $company->name = $this->name;
        $company->category = $this->category;
        // $company->subcategory = $this->subcategory;
        $company->description = '';
        $company->limit_default = $this->limit_default;
        $company->is_active = true;
        $company->date_ini = $this->dateIni;
        $company->date_end = $this->dateEnd;
        $company->url = $fileUrl;
        $company->save();

        $custumers = Customer::where('is_active', true)->get();
        
        foreach ($custumers as $key => $value) {
            $timestamp = time();
            $uuid = Uuid::uuid1($timestamp);

            $uuid = sprintf(
                '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                ($timestamp >> 32) & 0xFFFFFFFF,
                ($timestamp >> 16) & 0xFFFF,
                ($timestamp >> 0) & 0xFFFF,
                rand(0, 0xFFFF),
                rand(0, 0xFFFF),
                rand(0, 0xFFFF),
                $value->id,
                $company->id,
                rand(0, 0xFF),
                rand(0, 0xFF)
            );

            $qr = new QrCode;
            $qr->uuid = $uuid;
            $qr->customer_id = $value->id;
            $qr->company_id = $company->id;
            $qr->used = false;
            $qr->save();

            $twillo = new TwilioController();
            $twillo->enviarEmailModel($value->email, $uuid, $value->phone_number);
        }

        $this->limitador = false;
        $this->noLimitador = true;
        $this->limit_default = 1;
        $this->reset('name');
        $this->reset('category');
        // $this->reset('subcategory');
        //$this->reset('description');
        $this->reset('file');
        session()->flash('success', 'Sucesso ao criar nova campanha');

        return redirect()->route('campaign');
    }

    public function editPage($id) {
        return redirect()->route('edit-campaign', ['id' => $id]);
    }

    public function resetLimit(){
        if($this->noLimitador) $this->limit_default = 1;
    }


    public function getCampaign() {
        $campaigns = Company::where('is_active', true)->orderBy('id','DESC')
        ->paginate(5);

        return $campaigns;
    }

    public function render()
    {
        $campaignsList = $this->getCampaign();

        return view('livewire.components.living.campaign-page', compact('campaignsList'));
    }
}
