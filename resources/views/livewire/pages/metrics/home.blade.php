<div>
    <div class="home_content">
        {{-- Header  --}}

      <div class="{{$open ? "open-menu" : "close-menu"}} container-menu-mobile">
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
      </div>

        <div class="header ocult-mobile">
          <div class="logo" data-anime-popup  data-pop="slide">
            <img src="{{ asset('/assets/metrics/logo_home.png') }}" alt="logo">
          </div>
  
          <div class="right-header">
            <div class="actions ">
              <div class="flex-action">
                <i class="far fa-star"></i>
                <p>864 PTS</p>
              </div>
              <div class="flex-action">
                {{-- <i class="fas fa-cog"></i> --}}
                <img src="{{ asset('/icon/metrics/Grupo 4.svg') }}" />
              </div>
              <div class="flex-action">
                {{-- <i class="fas fa-bell"></i> --}}
                <img src="{{ asset('/icon/metrics/Grupo 8.svg') }}" />
              </div>
            </div>
            <div class="list-workspaces">
              <span class="home-icon">
                <img src="{{ asset('/icon/metrics/Grupo 6.svg') }}" />
              </span>
              <input type="text"
                  wire:model="search"
                  class="home-input"
                  placeholder="Selecionar Loja">
            </div>
            <div class="tenant-logo">
              <img src="{{ asset('/assets/metrics/dominos.png') }}" alt="logo">
            </div>
          </div>
        </div>

        <div class="header ocult-desktop">
          <div class="flex">
            <div class="logo" data-anime-popup  data-pop="slide">
              <i class="fas fa-bars" wire:click="openMeny"></i>
              <img src="{{ asset('/assets/metrics/logo_home.png') }}" alt="logo">
            </div>
            <div class="actions">
              <img src="{{ asset('/icon/metrics/Grupo 95.svg') }}" />

              <img src="{{ asset('/icon/metrics/Grupo 8.svg') }}" />

            </div>
          </div>
  
          <div class="right-header">
          
            <div class="list-workspaces">
              <span class="home-icon">
                <img src="{{ asset('/icon/metrics/Grupo 6.svg') }}" />
              </span>
              <input type="text"
                  wire:model="search"
                  class="home-input"
                  placeholder="Selecionar Loja">
            </div>
            <div class="tenant-logo">
              <img src="{{ asset('/icon/metrics/Grupo 92.svg') }}" alt="logo">
            </div>
          </div>
        </div>
  
  
        {{-- Menu --}}
        <nav class="menu  ocult-mobile">
          <ul>
            <li><a  href="/metrics/workspace">Minha Área</a></li>
            <li><a  href="/metrics/start-points">StarPoints</a></li>
            <li><a  href="/metrics/performance">Performance</a></li>
            <li><a  href="/metrics/produtos">Produtos</a></li>
            <li><a href="/metrics/#">Promoções</a></li>
            <li><a href="/metrics/#">News</a></li>
          </ul>
        </nav>
  
        {{-- Banner --}}
        <div class="banner"  data-anime-popup data-pop="fade">
          <img src="{{ asset('/assets/metrics/banner.png') }}" alt="logo">
        </div>
        
        {{-- Home Cards --}}
        <section class="home_cards">
          <a class="card"  href="/metrics/start-points" data-anime-popup data-pop="high">
            <i class="far fa-star"></i>
            <div>
              <p>StarPoints</p>
              <p class="pt">864 PTS</p>
            </div>
          </a>
          <a class="card"  href="/metrics/workspace" data-anime-popup data-pop="high">
            <img src="{{ asset('/icon/metrics/Grupo 43.svg') }}" />
            <p>Minha Área</p>
          </a>
          <a class="card"  href="/metrics/produtos" data-anime-popup data-pop="high">
            <img src="{{ asset('/icon/metrics/007-beer box.svg') }}" />

            <p>Produtos</p>
          </a>
          <a class="ocult-desktop card"  href="/metrics/performance" data-anime-popup data-pop="high">
            <img src="{{ asset('/icon/metrics/007-beer box.svg') }}" />

            <p>Performance</p>
          </a>
        </section>
      </div>

      <div id="home_cards_bottom"></div>

      <div class="home_content">
        {{-- Brand Navigate  --}}
        <div class="brands">
          <h2>Navegue por marcas</h2>
          <section class="section-controller-carousel pos-relative">
            <button class="arrow-left" data-perfect-action="left" data-perfect-ref="#product">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="arrow-right" data-perfect-action="right" data-perfect-ref="#product">
              <i class="fas fa-chevron-right"></i>
            </button>
          </section>
          <section class="brand_navigate scrolling-carousel" 
            data-anime-popup  
            data-pop="slide" 
            data-perfect-scroll="true"
            id="product"
            >
            
            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src='/assets/metrics/P3K_blog_heineken-1-1-1.png' class="card_img"/>
              </div>
              <div class="card_footer">
                Todas <span>></span>
              </div>
            </div>
            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src='/assets/metrics/heineken.png' class="card_img"/>
              </div>
              <div class="card_footer">
                Heineken <span>></span>
              </div>
            </div>
            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src='/assets/metrics/amstel.png' class="card_img"/>
              </div>
              <div class="card_footer">
                Amstel <span>></span>
              </div>
            </div>
            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src='/assets/metrics/tango-baden15591_16x9-1.png' class="card_img"/>
              </div>
              <div class="card_footer">
                Baden Baden <span>></span>
              </div>
            </div>
            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src='/assets/metrics/tango-baden15591_16x9-1.png' class="card_img"/>
              </div>
              <div class="card_footer">
                Baden Baden <span>></span>
              </div>
            </div>
            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src='/assets/metrics/tango-baden15591_16x9-1.png' class="card_img"/>
              </div>
              <div class="card_footer">
                Baden Baden <span>></span>
              </div>
            </div>
            
          </section>
        </div>

        {{-- Home Products --}}
        <div class="brands pos-relative scroll-container">
          <h2>Mais vendidos da loja</h2>
          <section class="section-controller-carousel pos-relative">
            <button class="arrow-left" data-perfect-action="left" data-perfect-ref="#card-stage">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="arrow-right" data-perfect-action="right" data-perfect-ref="#card-stage">
              <i class="fas fa-chevron-right"></i>
            </button>
          </section>
          <section class="home_products scrolling-carousel" 
            data-anime-popup  
            data-pop="slide" 
            data-perfect-scroll="true" 
            id="card-stage">

            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src="{{ asset('/assets/metrics/long-h.png') }}" />
              </div>
              <div class="product_name">Heineken 330ml</div>
              <div class="product_price">R$ 14,50</div>
              <div class="product_info">Qtde. | 330ml - 350und.</div>

              <a href="#" class="product_button">Detalhes</a>
            </div>

            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src="{{ asset('/assets/metrics/l-a.png') }}" />
              </div>
              <div class="product_name">Amstel 350ml</div>
              <div class="product_price">R$5,50</div>
              <div class="product_info">Qtde. | 350ml - 296und..</div>

              <a href="#" class="product_button">Detalhes</a>
            </div>

            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src="{{ asset('/assets/metrics/la-a.png') }}" />
              </div>
              <div class="product_name">Amstel 600ml</div>
              <div class="product_price">R$12,50</div>
              <div class="product_info">Qtde. | 600ml - 230und.</div>

              <a href="#" class="product_button">Detalhes</a>
            </div>

            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src="{{ asset('/assets/metrics/baden-la.png') }}" />
              </div>
              <div class="product_name">Baden IPA 350ml</div>
              <div class="product_price">R$7,50</div>
              <div class="product_info">Qtde. | 350ml - 120und.</div>

              <a href="#" class="product_button">Detalhes</a>
            </div>

            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src="{{ asset('/assets/metrics/baden-la.png') }}" />
              </div>
              <div class="product_name">Baden IPA 350ml</div>
              <div class="product_price">R$7,50</div>
              <div class="product_info">Qtde. | 350ml - 120und.</div>

              <a href="#" class="product_button">Detalhes</a>
            </div>
            
            <div class="card card-stage" data-perfect-item data-anime-popup  data-pop="high">
              <div class="card_img">
                <img src="{{ asset('/assets/metrics/baden-la.png') }}" />
              </div>
              <div class="product_name">Baden IPA 350ml</div>
              <div class="product_price">R$7,50</div>
              <div class="product_info">Qtde. | 350ml - 120und.</div>

              <a href="#" class="product_button">Detalhes</a>
            </div>

          </section>
          
        </div>
      </div>


      <div id="home_products_bottom">
         {{-- News --}}
        <section id="news">
          {{-- Home Products --}}
          <div class="p-news">
            <h2>News</h2>
          
            <section class="home_news">
              <div class="card" data-anime-popup  data-pop="slide">
                <div class="card_img">
                  <img src="{{ asset('/assets/metrics/heineken-5@2x.png') }}" />
                </div>
                <div class="description">
                  <div class="title">Green your City</div>
                  <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat, ortor in dapibus efficitur.</div>
                  <div class="footer-news ocult-mobile">
                    <div class="date">10-02-2023 | 2 dias atrás</div>
                    <div class="next-news">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card ocult-mobile" data-anime-popup  data-pop="slide">
                <div class="card_img">
                  <img src="{{ asset('/assets/metrics/HEINEKEN_UEFA_1.jpg')}}" />
                </div>
                <div class="description">
                  <div class="title">Green your City</div>
                  <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat, ortor in dapibus efficitur.</div>
                  <div class="footer-news">
                    <div class="date">10-02-2023 | 2 dias atrás</div>
                    <div class="next-news">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
       
      </section>
      </div>


     

      <div class="home_content">
        {{-- Contact --}}
        <section id="contact" data-anime-popup  data-pop="slide">
          <p>Dúvidas ou <br> sugestões?</p>
          <button class="contact_button">Entre em contato</button>
        </section>
      </div>
      
      @livewire('components.metrics.footer')

      <script>
          document.addEventListener('livewire:initialized', () => {
          @this.on('post-created', (event) => {
              onActionAnimation()
          });
    });
      </script>
</div>
