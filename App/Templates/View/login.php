<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Restaurante - Login</title>

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!--login.css-->

    <link rel="stylesheet"  href="../style/login.css">

    
</head>
<body>
    <section class="login-form">
        <div class="container" style="height: 600px">
            <div class="row" >

                <div class="col-md-12 login  "> 
                                   
                    <a href="frontpage.php"><i class="fas fa-long-arrow-alt-left text-white back my-2" style="font-size:40px "></i></a>
                    <h2 class="text-center lables">Login</h2>
                
                    <form method="POST" action="">  <!--inicio form-->

                        <div class="form-group input-group"><!--inicio user-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                            <input id="email" required="required" name="email" class="form-control" placeholder="E-mail" type="text">
                        </div><!--fim user-->

                        <div class="form-group input-group"><!--inicio passowrd-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="password"  required="required" name="password" class="form-control" placeholder="Senha" type="password">
                        </div><!--fim password-->
                
                        <div class="form-group"><!--inicio remember-->
                            <label class="form-check-lable check">
                                <input type="checkbox" class="form-check-input ">
                                <small class="lables remember-size" >Lembrar-me</small>                                                           
                            </label><!--fim remember-->

                            <p><!--inicio botões-->
                                <a href="comingSoon.php" type="submit" class="btn btn-primary btn-block bg-primary text-white mb-2 btn-weight"> <i class="fab fa-twitter "></i>          Entrar com o Twitter  </a>
                                <a href="comingSoon.php" type="submit" class="btn btn-primary btn-block bg-primary text-white  mb-2 btn-weight"> <i class="fab fa-facebook-f "></i>       Entrar com o facebook  </a>
                                <a href="comingSoon.php" type="submit" class="btn btn-danger btn-block bg-danger text-white  mb-2 btn-weight"> <i class="fab fa-google-plus"></i>       Entrar com o google  </a>       
                                <a button type="submit"  class="btn btn-block btn-facebook  bg-success text-white btn-weight" href="pagelanding.php">Logar</button>  </a>
                            </p><!--fim botões-->
                           
    
   
                            <p class="text-center lables">Não possui uma conta? 
                                 <a href="cadastro.php" class="lables-link">Cadastre-se</a><br>
                                 <a href="recovery.php" class="lables-link" >Esqueci minha senha</a><br>

                            </p>   
                                                
                        </div><!--fim remember-->                       
                    </form><!--fim form--> 
                    <section>
           
                </div>

                <div >

                </div>
                

            </div>
        </div>
    </section>
</body>
</html>