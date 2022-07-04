<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')Loja De Vinhos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>

<div class="content text-light p-5">

<div>
  <div class="modal-dialog" role="document">
    <div class="modal-content style="background-color: #efefef;>
    <div class="modal-body text-dark">
        <h1 class="mb-3">Login</h1>

        <form class="pl-4 pr-4">
            <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" placeholder="Digite seu email">
            </div>

            <div class="form-group">
                <label>Senha</label>
                <a href="#" class="float-right">
                    <i class="fa fa-eye"></i>
                </a>
                 <input type="Senha" class="form-control" placeholder="Digite sua senha">
               </div>

                <button type="submit" class="btn btn-primary btn-block" >Entrar</button>

            <div class="row mt-3">
                    <div class="col">
                        <input type="checkbox">Lembrar me
                </div>
                  <div class="col">
                        <a href="#">Esqueci minha senha</a>
                  </div>
                </div>

                   <div class="text-center mt-4 mb-1">
                     <span>Não possui cadastro? </span>&nbsp;
                     <a href="#">Cadastre-se aqui</a>
                   </div>
        </form>
            </div>
            </div>
        </div>
    </div>

</div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>


  </body>
</html>
