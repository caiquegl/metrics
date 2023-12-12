<div>

 
    <div class="{{$open ? "open-menu" : "close-menu"}} container-menu-mobile">
        <i class="fas fa-times" wire:click="closeMeny"></i>
        <ul class="nav">
            <li>
                <a  href="/metrics/workspace" class="side-link">
                    <img src="{{ asset('icon/metrics/Grupo 43.svg') }}" />
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
                    <img src="{{ asset('icon/metrics/007-beer box.svg') }} " />
                    <p>Produtos</p>
                </a>
            </li>
            <li>
                <a href="/metrics/performance">
                <img src="{{ asset('icon/metrics/Vector Smart Object5.svg') }}" />
                    <p>Performance</p>
                </a>
            </li>
        </ul>

        <ul class="nav">
            <li>
                <a href="/metrics/calendario">
                    <img src="{{ asset('icon/metrics/Vector Smart Object1.svg') }}" />
                    <p>Calendário</p>
                </a>
            </li>
            <li>
                <a href="/metrics/news">
                    <img src="{{ asset('icon/metrics/007-beer box.svg') }}" />
                    <p>News</p>
                </a>
            </li>
        </ul>

        <ul class="nav">
            <li>
                <a href="/metrics/">
                    <img src="{{ asset('icon/metrics/Grupo 87.svg') }}" />
                    <p>Configurações</p>
                </a>
            </li>
            <li>
                <a href="/metrics/news">
                    <img src="{{ asset('icon/metrics/Grupo 89.svg') }}" />
                    <p>Sair</p>
                </a>
            </li>
        </ul>
      </div>
    <div class="header-logo ocult-desktop">
        <img src="{{ asset('assets/metrics/logo-heineken.png') }}" alt="logo">
    </div>
    <div class="ocult-tablet">
        <i class="fas fa-bars" wire:click="openMeny"></i>
    </div>
    <div class="header-container ocult-desktop">
        <div class="flex-b">
            <div class="flex">
                <i class="fas fa-bars" wire:click="openMeny"></i>
                                <img src="{{ asset('/icon/metrics/Grupo 120.svg') }}" alt="icon user access">

            </div>

            <div>
                <div class="header-menu">
                    <a href="/metrics/home" style="color: white">
                        <img src="{{ asset('icon/metrics/Grupo 94.svg') }}" />
                    </a>
                    <div class="notification-icon" >
                        {{-- <i class="fas fa-bell"></i> --}}
                        <img src="{{ asset('icon/metrics/Grupo 58.svg') }}" />
                        @if ($notifications > 0)
                            <span class="notification-badge">{{ $notifications }}</span>
                        @endif
                    </div>
                    <div class="header-user-dropdown">
                        <div class="header-user-info" wire:click="toggleDropdown">
                            <div class="header-avatar"></div>
                            {{-- <i class="fas fa-caret-down"></i> <!-- Ícone da seta para baixo --> --}}
                        </div>
        
                        @if ($showDropdown)
                            <div class="header-dropdown">
                                <!-- Conteúdo do dropdown -->
                                <ul>
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                    <li><a href="#">Menu 3</a></li>
                                    <!-- Adicione mais itens de menu conforme necessário -->
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="header-content">
                    <span class="header-icon">
                        <i class="fas fa-search"></i> 
                    </span>
                    <input type="text"
                        wire:model="search"
                        class="header-input"
                        placeholder="Procurar...">
                </div>
            </div>
        </div>
    </div>


    <div class="header-container ocult-mobile">
        <div class="header-content">
            <span class="header-icon">
                <i class="fas fa-search"></i> 
            </span>
            <input type="text"
                wire:model="search"
                class="header-input"
                placeholder="Procurar...">
        </div>

        <div class="header-menu">
            <a href="/metrics/home" style="color: white">
                <img src="{{ asset('icon/metrics/Grupo 94.svg') }}" />
            </a>
            <div class="notification-icon" >
                {{-- <i class="fas fa-bell"></i> --}}
                <img src="{{ asset('icon/metrics/Grupo 58.svg') }}" />
                @if ($notifications > 0)
                    <span class="notification-badge">{{ $notifications }}</span>
                @endif
            </div>
            <div class="header-user-dropdown">
                <div class="header-user-info" wire:click="toggleDropdown">
                    <div class="header-avatar"></div>
                    <span>Nome do Usuário</span>
                    {{-- <i class="fas fa-caret-down"></i> <!-- Ícone da seta para baixo --> --}}
                </div>

                @if ($showDropdown)
                    <div class="header-dropdown">
                        <!-- Conteúdo do dropdown -->
                        <ul>
                            <li><a href="#">Menu 1</a></li>
                            <li><a href="#">Menu 2</a></li>
                            <li><a href="#">Menu 3</a></li>
                            <!-- Adicione mais itens de menu conforme necessário -->
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:initialized', () => {
        @this.on('post-created', (event) => {
            onActionAnimation()
        });
  });
    </script>
</div>



