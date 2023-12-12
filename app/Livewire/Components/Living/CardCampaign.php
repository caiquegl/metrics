<?php

namespace App\Livewire\Components\Living;

use Livewire\Component;

class CardCampaign extends Component
{
    public $icon;
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.components.living.card-campaign');
    }
}
