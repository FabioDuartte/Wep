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
        <div class="container" style="height: 750px">
            <div class="row">
                <div class="col-md-12 login  ">                                    
                    <h2 class="text-center lables">Cadastro</h2>
                    <?php if ($_SESSION['error-register']) 
                            echo $_SESSION['error-register'];
                            $_SESSION['error-register'] = ''; ?>
                    <form action="/Wep/cadastro" method="POST">
                        <div class="form-group input-group"><!--inicio user-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                            <input id="user" required="required" name="username" class="form-control" placeholder="Nome completo" type="text">
                        </div><!--fim user-->
                       
                        <div class="form-group input-group"><!--inicio email-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                             </div>
                            <input id="email"  required="required" name="email" class="form-control" placeholder="E-mail" type="email">
                        </div><!--fim email-->                        
                        
                        <div class="form-group input-group"><!--inicio CPF-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                             </div>
                            <input id="cpf"  required="required" name="CPF" class="form-control" placeholder="CPF: 000.000.000-00" maxlength="14" type="cpf">
                        </div><!--fim CPF-->    
                      
                        <div class="form-group input-group"><!--inicio card-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
                             </div>
                             <select required="required" name="card-brand" id="cartoes" style="max-width: 120px">
                                <option value="">Selecione</option>
                                <option value="Visa">Visa</option>
                                <option value="Mastercard">Mastercard</option>

                            </select>
                            
                            <input  required="required" id="card" name="card-number" class="form-control"  placeholder="Número do cartão" type="text" maxlength="19"><!--isso talvez dê erro depois por causa do tipo-->
                        </div><!--fim card-->

                         <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group input-group "><!--inicio CVV-->
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
                                    </div>
                                <input required="required" id="cvv"  name="card-cvv" class="form-control"  placeholder="CVV" maxlength="3" type="">
                              </div><!--fim CVV-->
                            </div>
                            
                            <div class="col-md-6" >
                                <div class="form-group input-group "><!--inicio Validade -->
                                    
                                <input required="required" id="validade"  name="card-expiring" class="form-control"  placeholder="validade MM/AA"  maxlength="5" type="">
                            </div><!--fim validade-->
                            </div>
                        </div>
                        
                        <div class="form-group input-group"><!--inicio password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="password"  required="required" name="password" class="form-control" placeholder="Criar a Senha" type="password">
                        </div><!--fim password-->
                        
                        <div class="form-group input-group"><!--inicio confirma password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="Confirmpassword" required="required" name="re-password" class="form-control" placeholder="Repita a Senha" type="password">
                        </div><!--fim confirma password-->
                         <p><!--inicio botões-->
                            <a href="/Wep/login/nada-para-ver-aqui" class="btn btn-primary btn-block bg-primary text-white mb-2 btn-weight"> <i class="fab fa-twitter "></i>          Entrar com o Twitter  </a>
                            <a href="/Wep/login/nada-para-ver-aqui" class="btn btn-primary btn-block bg-primary text-white  mb-2 btn-weight"> <i class="fab fa-facebook-f "></i>       Entrar com o facebook  </a>
                            <a href="/Wep/login/nada-para-ver-aqui" class="btn btn-danger btn-block bg-danger text-white  mb-2 btn-weight"> <i class="fab fa-google-plus"></i>       Entrar com o google  </a>       
                            <button type="submit"  class="btn btn-block btn-facebook  bg-success text-white btn-weight">Criar conta</button>
                        </p><!--fim botões-->
                        
                        <p class="text-center lables">Já possui uma conta? <a href="/Wep/login">Login</a> </p>           
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