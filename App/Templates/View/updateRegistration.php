<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar produtos</title>

     <!-- Bootstrap início -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

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
        <div class="container" style="height: 650px">
            <div class="row">
                <div class="col-md-12 login  ">                                    
                    <h2 class="text-center lables">Editar Cadastro</h2>                   
                    <p class="text-center lables my-3">Informe os dados no campo apenas se quiser alterá-los</p>
                    <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
                            <div id="info"class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                <strong > <?php echo $_SESSION['error']; ?> </strong>                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        } else if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
                            <div id="info"class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                <strong > <?php echo $_SESSION['success']; ?> </strong>                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        $_SESSION['success'] = "";
                        $_SESSION['error'] = "";
                        ?>                    
                    <form action="/Wep/home/editar-cadastro" method="POST">
                        <div class="form-group input-group"><!--inicio user-->
                                                   
                        <div class="form-group input-group"><!--inicio email-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                             </div>
                            <input id="email" name="new-Email" value="" class="form-control" placeholder="Novo E-mail" type="email">
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
                            <input id="Confirmpassword" value="" name="re-newPassword" class="form-control" placeholder="Confirmar nova senha" type="password">
                        </div><!--fim confirma password-->
                         <p><!--inicio botões-->                                   
                            <button type="submit"  class="btn btn-block btn-facebook  bg-success text-white btn-weight" style="width:350px">Salvar alterações</button>
                            <button type="reset"  class="btn btn-block btn-facebook  bg-danger text-white btn-weight" style="width:350px">Cancelar</button>
                        </p><!--fim botões-->
                        
                        <p class="text-center lables" style="margin-left: 115px">Voltar para <a href="/Wep/home">Home</a> </p>           
                    </form><!--fim form-->   
                </div>

                
    </section>

    <script src="./App/Templates/View/scripts/validaForm.js"></script>
</body>
</html>