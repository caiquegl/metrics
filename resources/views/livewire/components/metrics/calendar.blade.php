<div class="container-page">
    <div class="next-company" data-anime-popup  data-pop="fade">
        <p class="font-s-book-rgular">
            Próximas Campanhas
        </p>
        <div class="checkbox-list" data-anime-popup  data-pop="slide">
            <div class="company-checkbox" >
                <input type="checkbox" id="Heineken" name="Heineken" />
                <label for="Heineken" class="bool green-evt"></label>
                <label for="Heineken" class="label-event font-s-book-rgular">Heineken</label>
            </div>
            <div class="company-checkbox">
                <input type="checkbox" id="Amstel" name="Amstel" />
                <label for="Amstel" class="bool red-evt"></label>
                <label for="Amstel" class="label-event font-s-book-rgular">Amstel</label>
            </div>
            <div class="company-checkbox">
                <input type="checkbox" id="Eisenbahn" name="Eisenbahn" />
                <label for="Eisenbahn" class="bool blue-evt"></label>
                <label for="Eisenbahn" class="label-event font-s-book-rgular">Eisenbahn</label>
            </div>
            <div class="company-checkbox">
                <input type="checkbox" id="Lagunitas" name="Lagunitas" />
                <label for="Lagunitas" class="bool violet-evt"></label>
                <label for="Lagunitas" class="label-event font-s-book-rgular">Lagunitas</label>
            </div>
            <div class="company-checkbox">
                <input type="checkbox" id="Baden Baden" name="Baden Baden" />
                <label for="Baden Baden" class="bool orange-evt"></label>
                <label for="Baden Baden" class="label-event font-s-book-rgular">Baden Baden</label>
            </div>
        </div>
        <div class="company-checkbox ocult-mobile" style="margin-top: 30px; margin-bottom: 30px">
            <input type="checkbox" id="Limpar filtros" name="Limpar filtros" />
            <label for="Limpar filtros" class="label-event font-s-book-rgular">Limpar filtros</label>
        </div>
        <button class="btn-company font-s-book-rgular ocult-mobile">
            Atualizar
        </button>
    </div>
    <div class="calendar-container" data-anime-popup  data-pop="fade">
        <!-- Container com o seletor de anos e navegação de mês -->
        <div class="calendar-header">
            <div>
                <select class="year-select font-s-book-rgular">
                    @for ($year = date('Y'); $year >= date('Y') - 2; $year--)
                        <option>{{ $year }}</option>
                    @endfor
                </select>
            </div>
            <div class="month-select">
                <button wire:click="previousMonth" class="navigation-buttons">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <span class="font-s-book-rgular">{{ $currentMonthDisplay }}</span>
                <button wire:click="nextMonth" class="navigation-buttons">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            <div class="btn-options">
                <button class="calendar-button today font-s-book-rgular">Hoje</button>
                <button class="calendar-button day font-s-book-rgular">Dia</button>
                <button class="calendar-button mounth font-s-book-rgular">Mês</button>
                <button class="calendar-button week font-s-book-rgular">Semana</button>
            </div>
        </div>
        
        <!-- Calendário -->
        <div class="calendar-grid" data-anime-popup  data-pop="slide">
            @foreach ($daysOfWeek as $day)
                <div class="day-card-header font-s-book-rgular">{{ $day }}</div>
            @endforeach
            @foreach ($calendar as $day)
                <div class="day-card">
                    <div class="day-number {{ is_string($day) ? 'inactive-day' : ($day['isCurrentMonth'] ? '' : 'inactive-day') }}">{{ is_string($day) ? $day : $day['day'] }}</div>
                    @if(isset($day['event']) && count($day['event']) > 0)
                        <div class="list-events">
                            @foreach ($day['event'] as $evt)
                                <div class="card-event {{ $evt['color'] }} font-s-book-rgular">{{ $evt['name'] }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('livewire:initialized', () => {
        @this.on('post-created-calendar', (event) => {
            onActionAnimation()
        });
  });
    </script>
</div>
