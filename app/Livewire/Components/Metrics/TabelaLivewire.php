<?php

namespace App\Livewire\Components\Metrics;

use Livewire\Component;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class TabelaLivewire extends Component
{
    use WithPagination; // Use a trait WithPagination

    public $colunas = [];
    public $dados = [];

    public function mount($colunas, $dados)
    {
        $this->colunas = $colunas;
        $this->dados = $dados;
    }

    public function render()
    {
        return view('livewire.components.metrics.tabela-livewire');
    }
    
}




