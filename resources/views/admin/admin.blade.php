<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Administração</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('vendor/select2/select2.min.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="">
    
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                            <a class="js-arrow" href="#">Cadastros </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                 <li>
                                    <a href="{{route('cadastrarPessoalclinico')}}">Pessoal Clinico</a>
                                </li>
                                <li>
                                    <a href="{{route('criarPessoalAdmin')}}">Pessoal administrativo</a>
                                </li>
                                <li>
                                   <a href="{{route('cadastrarEspecialidade')}}">Especialidade</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">Listar </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                 <li>
                                    <a href="{{route('verPessoalclinico')}}">Pessoal Clinico</a>
                                </li>
                                <li>
                                         <a href="{{route('verPessoalAdmin')}}">Pessoal administrativo</a>
                                </li>
                                <li>
                                    <a href="{{route('verEspecialidade')}}">Especialidade</a>
                                </li>
                                <li>
                                    <a href="">Exames</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                </i>Consultar RCU</a>
                        </li>
                        <li>
                            <a href="">Enviar notificação</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">Gestão de Marcação <br> de Consulta / exame </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('verconsulat')}}">Consulta</a>
                                </li>
                                <li>
                                    <a href="">Exames</a>
                                </li>
                            </ul>
                        </li>
                    </ul> 
                  </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    PDC Saúde
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                
                    <ul class="list-unstyled navbar__list">
                    @can('adminMaster')
                        <li class="has-sub">
                            <a class="js-arrow" href="#">Cadastros </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('cadastrarPessoalclinico')}}">Pessoal Clinico</a>
                                </li>
                                
                                <li>
                                    <a href="{{route('criarPessoalAdmin')}}">Pessoal administrativo</a>
                                </li>
                               
                                <li>
                                   <a href="{{route('cadastrarEspecialidade')}}">Especialidade</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="has-sub">
                            <a class="js-arrow" href="#">Listar </i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="{{route('verPessoalclinico')}}">Pessoal Clinico</a>
                                </li>
                                
                                <li>
                                         <a href="{{route('verPessoalAdmin')}}">Pessoal administrativo</a>
                                </li>
                                <li>
                                    <a href="{{route('verEspecialidade')}}">Especialidade</a>
                                </li>
                            </ul>
                        </li>@endcan
                        
                        <li>
                            <a href="">
                                </i>Consultar RCU</a>
                        </li>
                        @can('adminMaster')
                        <li>
                            <a href="">Enviar notificação</a>
                        </li>
                        @endcan
                        <li>
                            <a class="js-arrow" href="#">Gestão de Marcação <br> de Consulta / exame </i></a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{route('verconsulat')}}">Consulta</a>
                                    </li>
                                    <li>
                                        <a href="">Exames</a>
                                    </li>
                                    
                                </ul>
                        </li>
                    </ul>
                </nav>
            </div>
                                                	
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="{{route('pesquizar')}}" method="POST">
                                @csrf
                                <input class="au-input au-input--xl" type="text" name="pesquisa" placeholder="pesquizar" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
 
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        
                                            <img src="{{asset(Auth::user()->imagem)}}"  alt="Administrator" />
                                            
                                        </div>
                                        <div class="content">
                                        <p>{{Auth::user()->name}}</p>
                                            <a class="js-acc-btn" href="#"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                       
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset(Auth::user()->imagem)}}"/>
                                                    </a>
                                                </div>
                                            @can('pclinico')
                                                <div class="content">
                                                <a href="{{route('especificarHorario',Crypt::encryptString(Auth::user()->email))}}">Alterar Hora</a>
                                                    <a href="{{route('atualizarpass')}}">Alterar Palavra Passe</a>
                                                    <a href="{{route('atualizarPessaolClinico',Crypt::encryptString(Auth::user()->email))}}">Editar Meus Dados</a>
                                                    <a href="{{route('verPessoalclinico')}}">Ver Meus Dados</a>
                                                   
                                                    <span class="email"></span>
                                                </div>
                                                @endcan
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                               
                                                <a href="{{route('logaut')}}" >
                                                    <i class="zmdi zmdi-power"></i>Sair</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row" >
                          @yield('conteudo')
                        </div>               
                    </div>
                </div>
            </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/js/main.js')}}"></script>

</body>

</html>