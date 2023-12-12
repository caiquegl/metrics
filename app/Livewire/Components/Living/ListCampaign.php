<?php

namespace App\Livewire\Components\Living;

use Livewire\Component;
use App\Models\Company;
class ListCampaign extends Component
{
    public function renderNewCampaign(){
        return redirect()->route('campaign');
    }

    public function renderEdit($id)
    {
        return redirect()->route('edit-campaign', ['id' => $id]);
    }

    public function delete($id){
        $existingCompany = Company::find($id);

        $existingCompany->is_active = false;
        $existingCompany->save();
    }

    public function getCampaigns(){
         $campaigns = Company::where('is_active', true)
        ->get();

        return $campaigns;
    }
    
    public function render()
    {
        $campaigns = self::getCampaigns();
        
        return view('livewire.components.living.list-campaign', compact('campaigns'));
    }
}
