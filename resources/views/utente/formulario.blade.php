<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/estiloFormulario.css')}}">
    
    <title>Cadastrar Utente</title>
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
<body>

   <div class="col-lg-10">
            <div class="card">
            <div class="header">
                <h2>Registrar Utente</h2>
            </div>
                    <div class="card-body">
                        <hr>
                            <form action="{{route('utenteCriar')}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                               @csrf
                                <div class="form-group">
                                         <label for="cc-payment" class="control-label mb-1">Nome de utilizador</label>
                                        <input id="cc-pament" type="hour" id="username" name="username" class="form-control"   placeholder="Digite seu nome de usuario...">
                                        @error('username')
                                             <span class = "text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                                           
                                 <div class="row">
                                 <div class="col-4">
                                       <div class="form-group">
                                       <label for="cc-name" class="control-label mb-1">E-mail</label>
                                    <input id="cc-name" name="email" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Email">
                                
                                     </div>
                                     @error('email')
                                             <span class = "text-danger">{{ $message }}</span>
                                     @enderror
                                 </div>
                                    <div class="col-4">
                                       <div class="form-group">
                                             <label for="cc-exp" class="control-label mb-1">Telemovel</label>
                                               <input id="cc-exp" name="telefone" type="tel" class="form-control cc-exp" placeholder="Digite sua Telefone..." data-val="true" data-val-required="Please enter the card expiration"
                                                data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                        </div>
                                        @error('telefone')
                                             <span class = "text-danger">{{ $message }}</span>
                                         @enderror
                                     </div>
                                     <div class="col-4">
                                        <label for="exampleSelectGender">Genero</label>
                                        <div class="input-group">
                                            <select name="genero" class="form-control" id="exampleSelectGender">
                                                            <option>Masculino</option>
                                                            <option>Femenino</option>
                                                            <option>Outros</option>
                                                          </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="exampleInputCity1">Número do BI</label>
                                                    <div class="input-group">  
                                                        <input type="text" class="form-control" id="exampleInputCity1" name="nbi" placeholder="Digite seu numero do bi...">
                                                    </div>
                                                    @error('nbi')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                
                    
                                            <div class="col-4">
                                                    <label for="exampleInputCity1">Data de nascimento</label>
                                                    <div class="input-group">  
                                                       <input class="form-control" type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                                                    </div>
                                                    @error('data_nascimento')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <div class="input-group">
                                                        <label>Escolha a Imagem</label>
                                                        <input type="file" name="image" id="image" > 
                                                    </div>
                                                    @error('image')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="exampleInputCity1">Morada</label>
                                                    <div class="input-group">  
                                                        <input type="text" class="form-control" id="exampleInputCity1" name="morada" placeholder="Digite sua morada...">
                                                    </div>
                                                    @error('morada')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                       <label for="localidade">Localidade</label>
                                                    <div class="input-group">
                                                        <input class="form-control"type="texte" id="localidade" name="localidade" placeholder="Digite sua localidade...">
                                                    </div>
                                                    @error('localidade')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="entidade_financeira">Entidade Financeira</label>
                                                    <div class="input-group">
                                                        <input  class="form-control" type="entidade_financeira" id="entidade_financeira" name="entidade_financeira" placeholder="Digite sua entidade financeira...">
                                                    </div>
                                                    @error('entidade_financeira')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="n_entidade_financeira">Nº Entidade Financeira</label>
                                                     <div class="input-group">
                                                          <input class="form-control" type="namber" id="n_entidade_financeira" name ="n_entidade_financeira" placeholder="Digite Número entidade financeira...">
                                                    </div>
                                                    @error('n_entidade_financeira')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-4">
                                                    <label for="entidade_financeira">Código Postal</label>
                                                    <div class="input-group">
                                                        <input  class="form-control" type="namber" id="entidade_financeira" name="codigo_postal" placeholder="Digite seu código postal...">
                                                    </div>
                                                    @error('entidade_financeira')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                        <label for="password">Palavra Passe</label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="password" id="password" name="password" placeholder="Digite sua palavra passe...">
                                                        </div>
                                                        @error('password')
                                                             <br> <span class = "text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                    <label for="entidade_financeira">Confirmar palavra passe </label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="password" id="password" name="password_confirma" placeholder="Confirmar a palavra passe ...">  
                                                        </div>
                                                        @error('password_confirma')
                                                             <br> <span class = "text-danger" >{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            <div><br>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <span id="payment-button-amount">Cadastrar</span>
                                                </button>
                                            </div>
                                        </form>
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
    <script src="{{asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('js/js/main.js')}}"></script>
</body>
</html>