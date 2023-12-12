<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }} "> --}}
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    </head>
    <body id="home_app">

      <section class="next-stage">
          <div class="rows">
            <div class="next-title">
                <h3 class="tt-campaigns">
                    Próximas campanhas
                </h3>
            </div>
            <div class="row scrolling-carousel" data-perfect-scroll="true">
                <!-- Card 01 start --> 
                <div class="card-stage">
                    <div class="card-body">
                            <div class="row">
                                <span class="dialog">
                                    <h1>10</h1>
                                </span>
                                <span class="dialog">
                                    <h4>Dia do Rock</h4>
                                    <p>10/06/2023</p>
                                </span>
                            </div>
                            <div class="row">
                                <div class="brand">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="client">
                                    <span class="collapse orange">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <p class="client-name">Heineken, Amstel, Eisenbahn</p>
                                </div>
                            </div>
                    </div>
                </div><!-- Card 01 end --> 
                
                <!-- Card 02 start --> 
                <div class="card-stage">
                    <div class="card-body">
                        <div class="book">
                            <div class="row">
                                <span class="dialog">
                                    <h1 class="text-cyan">14</h1>
                                </span>
                                <span class="dialog">
                                    <h4>Oktoberfest</h4>
                                    <p>14/10/2023</p>
                                </span>
                            </div>
                            <div class="row">
                                <div class="brand">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="client">
                                    <span class="collapse cyan">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <p class="client-name">Heineken e Craft</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Card 02 end --> 

                <!-- Card 03 start --> 
                <div class="card-stage">
                    <div class="card-body card-royal-green">
                        <div class="book">
                            <div class="row">
                                <span class="dialog">
                                    <h1 class="text-white">15</h1>
                                </span>
                                <span class="dialog">
                                    <h4 class="text-white">Heineken 150 anos</h4>
                                    <p class="text-white">15/11/2023</p>
                                </span>
                            </div>
                            <div class="row">
                                <div class="brand">
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="client">
                                    <span class="collapse white">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <p class="client-name text-white">Heineken</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Card 03 end -->
                
                <!-- Card 04 start --> 
                <div class="card-stage">
                    <div class="card-body">
                        <div class="book">
                            <div class="row">
                                <span class="dialog">
                                    <h1>19</h1>
                                </span>
                                <span class="dialog">
                                    <h4>Champions League</h4>
                                    <p>19/11/2023</p>
                                </span>
                            </div>
                            <div class="row">
                                <div class="brand">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.London</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="client">
                                    <span class="collapse orange">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                    <p class="client-name">Heineken</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Card 04 end --> 
            </div>
        </div>
      </section>

    </body>
</html>
