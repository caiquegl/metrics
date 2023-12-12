<?php

namespace App\Livewire\Components\Metrics;
 
use Livewire\Component;
use Carbon\Carbon;
use Carbon\CarbonInterface;

class Calendar extends Component
{
    public $currentMonth;
    public $currentYear;
    public $currentMonthDisplay;
    public $daysOfWeek = [];
    public $calendar = [];
    public $firstDayOfWeek;
    public $previousMonthDays = [];
    

    public function mount()
    {
        $this->currentYear = now()->year;
        $this->currentMonth = now()->format('m');
        $this->currentMonthDisplay = now()->translatedFormat('M Y'); // Defina o valor inicial aqui
        $this->daysOfWeek = ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom'];
    
        $this->generateCalendar(Carbon::createFromDate($this->currentYear, $this->currentMonth, 1));
    }
    

    public function generateCalendar($dateParam)
    {
        $firstDayOfMonth = $dateParam->copy()->startOfMonth();
        $lastDayOfMonth = $dateParam->copy()->endOfMonth();
    
        // Determinar o dia da semana do primeiro dia do mês (1 = segunda-feira, 0 = domingo)
        $firstDayOfWeek = $firstDayOfMonth->dayOfWeekIso;
    
        $this->calendar = [];
        $dayCounter = 1;
        $previousMonthDays = []; // Inicialize como um array vazio
    
        // Adicionar os dias do mês anterior na ordem correta
        $currentDay = $firstDayOfMonth->copy();
        while ($dayCounter < $firstDayOfWeek) {
            $previousMonthDays[] = $currentDay->copy()->subDay()->format('d');
            $currentDay->subDay();
            $dayCounter++;
        }

        $previousMonthDays = array_reverse($previousMonthDays);
    
        // Adicionar os dias do mês atual
        $currentDay = $firstDayOfMonth->copy();
        while ($currentDay->lte($lastDayOfMonth)) {

            $result = [
                'day' => $currentDay->format('d'),
                'isCurrentMonth' => true,
            ];
            
            if ($currentDay->format('d') == 26) {
                $result['event'] = [
                    [
                        'color'=> 'blue-evt',
                        'name'=> 'Desconto Pilsen'
                    ],
                    [
                        'color'=> 'orange-evt',
                        'name'=> 'Kits com desconto'
                    ]
                ];
            } elseif ($currentDay->format('d') == 7) {
                $result['event'] = [
                    [
                        'color'=> 'orange-evt',
                        'name'=> 'Kits com desconto'
                    ]
                ];
            } elseif ($currentDay->format('d') == 15) {
                $result['event'] = [
                    [
                        'color'=> 'green-evt',
                        'name'=> 'Leve 3 pague 2'
                    ]
                ];
            }
            
            $this->calendar[] = $result;
            $currentDay->addDay();
            $dayCounter++;
        }

         // Completar com os primeiros dias do próximo mês, se necessário
        while ($dayCounter % 7 != 1) { // Preencher os últimos quadrados até que a semana termine na segunda-feira
            $this->calendar[] = [
                'day' => $currentDay->copy()->format('d'),
                'isCurrentMonth' => false, // Isso representa o próximo mês
            ];
            $currentDay->addDay();
            $dayCounter++;
        }
    
        // Combinar os dias do mês anterior e do mês atual
        $this->calendar = array_merge($previousMonthDays, $this->calendar);

        // dd($this->calendar);
    }

    public function previousMonth()
    {
        $currentDate = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->subMonth();
        $this->generateCalendar($currentDate);
        $this->currentYear = $currentDate->year;
        $this->currentMonth = $currentDate->format('m');
        $this->currentMonthDisplay = $currentDate->translatedFormat('M Y');
        $this->dispatch('post-created-calendar');
    }
    
    public function nextMonth()
    {
        $currentDate = Carbon::createFromDate($this->currentYear, $this->currentMonth, 1)->addMonth();
        $this->generateCalendar($currentDate);
        $this->currentYear = $currentDate->year;
        $this->currentMonth = $currentDate->format('m');
        $this->currentMonthDisplay = $currentDate->translatedFormat('M Y');
        $this->dispatch('post-created-calendar');
    }
    
    
    
    
    
    
    

    public function render()
    {

        return view('livewire.components.metrics.calendar');
    }
}
