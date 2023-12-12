<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }} "> --}}
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
</head>
<body id="admin-body">
<!-- Side bar start -->
<aside class="aside-content">
    <section class="side-bar-icon">
        <img src="{{ asset('/images/metrics/icon.png') }}" alt="icon user access">
    </section>
    <!-- Sider menu 01 start -->
    <section class="side-menu-elements">
        <div class="sider">
            <ul>
                <li>
                    <a href="" class="side-link">
                        <span>
                            <i class="fa fa-store"></i> Minha Área
                        </span>
                        <span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="" class="side-link">
                        <span>
                            <i class="far fa-star"></i> StarPoints
                        </span>
                        <span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section><!-- Sider menu 01 end -->
    <!-- Sider menu 02 start -->
    <section class="side-menu-elements">
        <div class="sider">
            <ul>
                <li>
                    <a href="" class="side-link">
                        <span>
                            <i class="fab fa-bitbucket"></i> Produtos
                        </span>
                        <span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="" class="side-link">
                        <span>
                            <i class="far fa-chart-bar"></i> Performance
                        </span>
                        <span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="" class="side-link">
                        <span>
                            <i class="far fa-calendar-alt"></i> Calendário
                        </span>
                        <span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section><!-- Sider menu 02 end -->
    <!-- Sider menu 03 start -->
    <section class="side-menu-elements">
        <div class="sider">
            <ul>
                <li>
                    <a href="" class="side-link">
                        <span>
                            <i class="fas fa-cog"></i> Configurações
                        </span>
                        <span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="" class="side-link">
                        <span>
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </span>
                        <span>
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section><!-- Sider menu 03 end -->
</aside><!-- Side bar end -->

</body>
</html>