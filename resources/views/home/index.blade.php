<!DOCTYPE html>
<html lang="en">
<head>

     <title>PDC Saúde</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link href="{{asset('css/css/font-face.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('css/css/theme.css')}}" rel="stylesheet" media="all">





     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/animate.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
     
    <!-- <link rel="stylesheet" href="{{asset('css/css/style.css')}}">-->
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}">

     <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css" rel="stylesheet')}}" media="all">
    


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                       
                    </div>
                    @auth()
                    <div class="header__tool">
                        
                        
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{asset(Auth::user()->imagem)}}" alt="John Doe" />
                                </div>
                               
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{asset(Auth::user()->imagem)}}" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{Auth::user()->name}}</a>
                                            </h5>
                                            <span class="email">{{Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                </i>Atualizar RCU</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                               Consultar RCU</a>
                                        </div>
                                        
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{route('logaut')}}">
                                            <i class="zmdi zmdi-power"></i>Sair</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </header>



     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{route('index_home')}}" class="navbar-brand">PDC Saúde</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    @auth()
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Exames</a></li>
                         <li><a href="#appointment-btn" class="smoothScroll">Consultas</a></li>
                         <li><a href="#team" class="smoothScroll">Meu RCU</a></li>                   </ul>
                    @else
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Inicio</a></li>
                         <li><a href="#about" class="smoothScroll">Sobre nós</a></li>
                         <li><a href="#team" class="smoothScroll">Medicos</a></li>
                         <li><a href="#exames" class="smoothScroll">Exames Complementar</a></li>
                         <li><a href="#appointment" class="smoothScroll">Especialidade</a></li>
                         <li><a href="#falaconosco" class="smoothScroll">Fala Conosco</a></li>
                         <li class="appointment-btn "><a href="{{route('login.index')}}">Gestão Marcar Exame/Consulta</a></li>
                         <li class="appointment-btn "><a href="{{route('login.index')}}">Entrar</a></li>
                    </ul>
                    @endif
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Vamos tornar sua vida mais feliz</h3>
                                             <h1>Vida Saudável</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Conheça nossos médicos</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Aenean luctus lobortis tellus</h3>
                                             <h1>Novo estilo de vida</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Mais sobre nós</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Pellentesque nec libero nisi</h3>
                                             <h1>Seus benefícios para a saúde</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Ler histórias</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- Sobre -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Bem-vindo ao seu Centro de Saúde</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Projectada e construída de raiz, a Clínica PDC.ao é uma das mais modernas unidades hospitalares de Angola.</p>
                                   <p>Instituição do ramo da saúde de capital público pertencente ao Grupo U.A.N. Iniciou as suas actividades a 22 de Setembro de 2001, com grande foco na qualidade dos serviços prestados. A clínica comporta 10 unidades de negócios distribuídos em 5 províncias: 6 Centros médicos (Huambo, Benguela, Lubango, Namibe, Cabinda e Luanda) e 11 Postos Médicos ( Bié, Malange, Kwanza Sul).</p>
                                   <p>A Clínica PDC.ao assume o compromisso de dar uma resposta abrangente e de elevada qualidade às mais variadas e complexas necessidades de saúde dos nossos clientes. Para manter o elevado padrão de atendimento médico hospitalar, o corpo clínico é constituído por especialistas de praticamente todas as valências médicas e cirúrgicas.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Lussevádio Bernardo</h3>
                                        <p>Diretor Geral</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
   

     <!-- Equipa -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Nossos médicos</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>
               @foreach($dados as $usuario)
                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                               <div class="">
                                    <img src="{{ asset('/'.$usuario->imagem)}}" class="w-1" alt="" width="60px" height="60px" >
                                    </div>
                                     <hr>
                                     <div class="team-info">
                                      <h3>{{$usuario->name}}</h3>
                                      <p>Especialista em {{$usuario->nome_especialidade}}</p>
                                       <p><i class="fa fa-phone"></i> {{$usuario->telemovel}}</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">{{$usuario->email}}</a></p>
                                         <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                          </ul>
                               </div>
                         </div>
                    </div> 
               @endforeach
               </div>
          </div>
     </section>


     <!-- Noticias -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Últimas notícias</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img src="images/news-image1.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>March 08, 2018</span>
                                   <h3><a href="news-detail.html">Sobre tecnologia incrível</a></h3>
                                   <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jeremie Carlson</h5>
                                             <p>CEO / Founder</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                   <img src="images/news-image2.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>February 20, 2018</span>
                                   <h3><a href="news-detail.html">Apresentando um novo processo de cura</a></h3>
                                   <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Jason Stewart</h5>
                                             <p>General Director</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <img src="images/news-image3.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>January 27, 2018</span>
                                   <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                                   <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Andrio Abero</h5>
                                             <p>Online Advertising</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- Especialidades -->

      <section id="appointment" data-stellar-background-ratio="3">
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Nossas especialidade</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>
                    @foreach($dados as $espe)
                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                                   <div class="team-info">
                                        <h3>{{$espe->nome_especialidade}}</h3>
                                        <p>{{$espe->descricao}}</p>
                                   </div>
                         </div>
                    </div> 
                    @endforeach
               </div>
          </div>
     </section>

     <section id="exames" data-stellar-background-ratio="3">
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Exames </h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>
                  
                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                                   <div class="team-info">
                                        <h3></h3>
                                   </div>
                         </div>
                    </div> 
                   
               </div>
          </div>
     </section>

      <!-- Marcar consultas -->
      @auth()
      <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form action="{{route('Consulta')}} "id="appointment-form" role="form" method="post">
                         @csrf
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Marque uma consulta</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo">
                                        @error('name')
                                               <span class = "text-danger">{{ $message }}</span>
                                        @enderror
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email">
                                        @error('email')
                                           <span class = "text-danger">{{ $message }}</span>
                                        @enderror
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Seleciona Departamento</label>
                                        <select class="form-control" name="departamento">
                                             <option>Geral</option>
                                             @foreach($dados as $espe)
                                             <option>{{$espe->nome_especialidade}}</option>
                                             @endforeach
                                        </select>
                                   </div>       
                                  
                                   <div class="col-md-6 col-sm-12">
                                         <label for="telephone">Contacto</label>
                                        <input type="tel" class="form-control" id="phone" name="contacto" placeholder="Contacto">
                                        @error('contacto')
                                              <span class = "text-danger">{{ $message }}</span>
                                        @enderror
                                   </div>
                                   
                                   <div class="col-md-12 col-sm-12">
                                        <label for="Message">Editar uma Mensagem</label>
                                        <textarea class="form-control"  type="text" rows="5" id="message" name="messagem" placeholder="Messagem"></textarea>
                                        @error('messagem')
                                              <span class = "text-danger">{{ $message }}</span>
                                         @enderror
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Enviar</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section> 
@endif

 <!-- Sobre -->
 <section id="falaconosco">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Fala conosco</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Contacto Telefonico: 945831977 ou 940166746</p>
                                   <p>WhatsApp: 945831977 ou 939237887</p>
                                   <p></i>facebook: pdcAo</p>
                                   <p></p>
                              </div>
                              
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- Roda pé -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informação e contacto</h4>
                              <p></p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 945-831-977</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">lussebadio1996@gmail.com</a></p>
                                   <p><i class="fa fa-phone"></i> 937-597-518</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">rosariofra199@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Últimas notícias</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Tecnologia incrível</h5></a>
                                        <span> 08 de março de 2023</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Novo Processo de Cura</h5></a>
                                        <span>20 de fevereiro de 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Horário de funcionamento</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2018 Your Company 
                                   
                                   | Design: <a rel="nofollow" href="https://www.facebook.com/tooplate" target="_parent">Placa de ferramenta</a></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Testes laboratoriais</a>
                                   <a href="#">Departamentos</a>
                                   <a href="#">Apólice de seguro</a>
                                   <a href="#">Carreiras</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="{{asset('js/jquery.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="{{asset('js/jquery.sticky.js')}}"></script>
     <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
     <script src="{{asset('js/wow.min.js')}}"></script>
     <script src="{{asset('js/smoothscroll.js')}}"></script>
     <script src="{{asset('js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('js/custom.js')}}"></script>


     
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
   

    <!-- Main JS-->
    <script src="{{asset('js/js/main.js')}}"></script>
     



</body>
</html>