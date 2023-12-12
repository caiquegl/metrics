<div>
    {{json_encode($open)}}

    <div class="{{$open}} container-menu-mobile">
            <i class="fas fa-times" wire:click="closeMeny"></i>
            <ul class="nav">
                <li>
                    <a  href="/metrics/workspace" class="side-link">
                        <img src="{{ asset('/icon/metrics/Grupo 43.svg') }}" />
                        <p>Minha Área</p>
                    </a>
                </li>
                <li>
                    <a href="/metrics/start-points">
                        <i class="far fa-star"></i>
                        <p>StarPoints</p>
                    </a>
                </li>
                <li>
                    <a href="/metrics/produtos">
                        <img src="{{ asset('/icon/metrics/007-beer box.svg') }}" />
                        <p>Produtos</p>
                    </a>
                </li>
                <li>
                    <a href="/metrics/performance">
                        <img src="{{ asset('/icon/metrics/Vector Smart Object1.svg') }}" />
                        <p>Performance</p>
                    </a>
                </li>
            </ul>
    
            <ul class="nav">
                <li>
                    <a href="/metrics/calendario">
                        <i class="far fa-star"></i>
                        <p>Calendário</p>
                    </a>
                </li>
                <li>
                    <a href="/metrics/news">
                        <img src="{{ asset('/icon/metrics/007-beer box.svg') }}" />
                        <p>News</p>
                    </a>
                </li>
            </ul>
    
            <ul class="nav">
                <li>
                    <a href="/metrics/">
                        <img src="{{ asset('/icon/metrics/Grupo 87.svg') }}" />
                        <p>Configurações</p>
                    </a>
                </li>
                <li>
                    <a href="/metrics/news">
                        <img src="{{ asset('/icon/metrics/Grupo 89.svg') }}" />
                        <p>Sair</p>
                    </a>
                </li>
            </ul>
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    </div>
</div>
