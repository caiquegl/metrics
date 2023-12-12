<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }} "> --}}
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 

    </head>
    <body id="home_app">

      <div class="home_content">
        {{-- Header  --}}
        <div class="header">
          <div class="logo"></div>
  
          <div class="right-header">
            <div class="actions"></div>
            <div class="list-workspaces"></div>
            <div class="tenant-logo"></div>
          </div>
        </div>
  
  
        {{-- Menu --}}
        <nav class="menu">
          <ul>
            <li><a href="#">Minha Área</a></li>
            <li><a href="#">StarPoints</a></li>
            <li><a href="#">Performance</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Promoções</a></li>
            <li><a href="#">News</a></li>
          </ul>
        </nav>
  
        {{-- Banner --}}
        <div class="banner"></div>
        
        {{-- Home Cards --}}
        <section class="home_cards">
          <div class="card"></div>
          <div class="card"></div>
          <div class="card"></div>
        </section>
      </div>

      <div id="home_cards_bottom"></div>

      <div class="home_content">
        {{-- Brand Navigate  --}}
        <h2>Navegue por marcas</h2>
        <section class="brand_navigate">
          
          <div class="card">
            <div class="card_img"></div>
            <div class="card_footer">
              Todas <span>></span>
            </div>
          </div>
          <div class="card">
            <div class="card_img"></div>
            <div class="card_footer">
              Heineken <span>></span>
            </div>
          </div>
          <div class="card">
            <div class="card_img"></div>
            <div class="card_footer">
              Amstel <span>></span>
            </div>
          </div>
          <div class="card">
            <div class="card_img"></div>
            <div class="card_footer">
              Baden Baden <span>></span>
            </div>
          </div>
        </section>

        {{-- Home Products --}}
        <h2>Mais vendidos da loja</h2>
        <section class="home_products">
          <div class="card">
            <div class="card_img"></div>
            <div class="product_name">Heineken 330ml</div>
            <div class="product_price">R$ 14,50</div>
            <div class="product_info">Qtde. | 330ml - 350und.</div>

            <a href="#" class="product_button">Detalhes</a>
          </div>
          <div class="card">
            <div class="card_img"></div>
            <div class="product_name">Heineken 330ml</div>
            <div class="product_price">R$ 14,50</div>
            <div class="product_info">Qtde. | 330ml - 350und.</div>

            <a href="#" class="product_button">Detalhes</a>
          </div>
          <div class="card">
            <div class="card_img"></div>
            <div class="product_name">Heineken 330ml</div>
            <div class="product_price">R$ 14,50</div>
            <div class="product_info">Qtde. | 330ml - 350und.</div>

            <a href="#" class="product_button">Detalhes</a>
          </div>
          <div class="card">
            <div class="card_img"></div>
            <div class="product_name">Heineken 330ml</div>
            <div class="product_price">R$ 14,50</div>
            <div class="product_info">Qtde. | 330ml - 350und.</div>

            <a href="#" class="product_button">Detalhes</a>
          </div>
        </section>
      </div>


      <div id="home_products_bottom"></div>


      {{-- News --}}
      <section id="news"></section>

      <div class="home_content">
        {{-- Contact --}}
        <section id="contact">
          <p>Dúvidas ou <br> sugestões?</p>
          <button class="contact_button">Entre em contato</button>
        </section>
      </div>
      
      <footer>
        <div id="logo_app_footer"></div>
        <p>Desenvolvido para Heineken® e Dominos. Todos os direitos reservados 2023</p>
        <div id="logo_hkn_footer"></div>
      </footer>

    </body>
</html>
