<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/estiloLogin.css')}}">
    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <title></title>
</head>
<body>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h2>Login</h2>
            </div>
            <form  action="{{route('logar')}}" method="post"  class="form">
                @csrf
                <div class="form-control ">
                    <label for="username">Nome de utilizador</label>
                    <input type="text" name ="user" id="username" placeholder="Digite seu nome de usuario...">
                    @error('user')
                         <span class = "text-danger">{{ $message }}</span>
                    @enderror
               </div>
               <div class="form-control ">
                    <label for="senha">Senha</label>
                    <input type="text" id="senha"  name ="password" placeholder="Digite sua Senha...">
                    @error('password')
                         <span class = "text-danger" >{{ $message }}</span>
                    @enderror 
                </div>
                <button type="submit">Enviar</button>
                <a href="{{route('create/Utente')}}">Craiar conta</a>
            </form>
        </div>
     </div>
    </div>
        <script src="{{asset('js/jsLogin.js')}}"></script>
</body>
</html>