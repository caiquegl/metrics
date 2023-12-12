<?php

namespace App\Livewire\Pages\Living;

use Livewire\Component;

class Campaign extends Component
{
    public $campaignId;
    public function mount($id = null)
    {
        $this->campaignId = $id;
    }
    public function render()
    {
        $currentRoute = request()->route()->getName();
        $campaignId = $this->campaignId;
        return view('livewire.pages.living.campaign', compact('currentRoute'),compact('currentRoute', 'campaignId'));
    }
}
