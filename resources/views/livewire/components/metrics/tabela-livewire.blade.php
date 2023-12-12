<div  class="responsivo-table  scrolling-mobile-carousel">
        <div class="header-table">
            <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                @foreach($colunas as $coluna)
                    <div style="width: 100%;"class="font-s-book-rgular gap-mobile">{{ $coluna }}</div>
                @endforeach
            </div>
        </div>
        <div class="flex-table">
            @foreach($dados as $item)
                <div class="row-table" data-anime-popup  data-pop="high">
                    @foreach($colunas as $coluna)
                        <div style="width: 100%;" class="font-s-book-rgular gap-mobile">
                            @if (isset($item[$coluna]['type']) && $item[$coluna]['type'] == 'html')
                                {!! html_entity_decode($item[$coluna]['render']) !!}
                            @elseif (isset($item[$coluna]['type']) && $item[$coluna]['type'] === 'date')
                                <p  class="font-s-book-rgular" style="color: #ABAFB3">{{ Carbon::parse($item[$coluna]['render'])->format('d/m/Y') }}</p>
                            @elseif (isset($item[$coluna]['type']) && $item[$coluna]['type'] === 'status')
                                <div class="table-status" style="background: {{ $item[$coluna]['color'] }}">
                                    <p class="font-s-book-rgular">{{ $item[$coluna]['render'] }}</p>
                                </div>
                            @else
                                {{ $item[$coluna] }}
                            @endif
                        </div>

                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="pagination-table ">
            <button class="pagination-button back-table">
                <i class="fas fa-angle-double-left"></i>
            </button>
            <button class="pagination-button">
                1
            </button>
            <button class="pagination-button">
                2
            </button>
            <button class="pagination-button active-pagination">
                3
            </button>
            <button class="pagination-button">
                4
            </button>
            <button class="pagination-button">
                5
            </button>
            <button class="pagination-button next-table">
                <i class="fas fa-angle-double-right"></i>
            </button>
        </div>
</div>
