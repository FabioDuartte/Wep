<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Restaurante - Cadastro</title>

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!--login.css-->
    <link rel="stylesheet" type="text/css" href="/Wep/App/Templates/style/cadastro.css">
    
    <style>
        body,html{
            overflow-y: visible;
        }

    </style>
    
</head>
<body>
    <section class="login-form">
        <div class="container" style="height: 550px">
            <div class="row">
                <div class="col-md-12 login  ">                                    
                    <h2 class="text-center lables">Editar Cadastro</h2>                   
                    <form action="/Wep/home/editar-cadastro" method="POST">
                        <div class="form-group input-group"><!--inicio user-->
                                                   
                        <div class="form-group input-group"><!--inicio email-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                             </div>
                            <input id="email" name="new-Email" value="" class="form-control" placeholder="Novo e-mail" type="email">
                        </div><!--fim email-->                                                
      
                        <div class="form-group input-group"><!--inicio password atual-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="CurrentPassword" value="" required="required" name="old-Password" class="form-control" placeholder="Informe sua Senha atual" type="password">
                        </div><!--fim password atual-->

                        <div class="form-group input-group"><!--inicio password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="password" value="" name="new-Password" class="form-control" placeholder="Digite sua nova senha" type="password">
                        </div><!--fim password-->
                        
                        <div class="form-group input-group"><!--inicio confirma password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="Confirmpassword" value="" name="re-newPassword" class="form-control" placeholder="Re-escreva a nova senha" type="password">
                        </div><!--fim confirma password-->
                         <p><!--inicio botões-->                                   
                            <button type="submit"  class="btn btn-block btn-facebook  bg-success text-white btn-weight" style="width:350px">Salvar alterações</button>
                            <button type="reset"  class="btn btn-block btn-facebook  bg-danger text-white btn-weight" style="width:350px">Cancelar</button>
                        </p><!--fim botões-->
                        
                        <p class="text-center lables" style="margin-left: 115px">Voltar para <a href="/Wep/home">Home</a> </p>           
                    </form><!--fim form-->   
                </div>

                <div >

                </div>
                
            </div>
        </div>
    </section>

    <script src="./App/Templates/View/scripts/validaForm.js"></script>
</body>
</html>