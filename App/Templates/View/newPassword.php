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
    <link rel="stylesheet" type="text/css" href="/App/Templates/style/editarCadastro.css">
    
    
</head>
<body>
    <section class="login-form">
        <div class="container" style="height: 350px">
            <div class="row">
                <form action="">

                <div class="col-md-12 login  ">                                    
                    <h2 class="text-center lables">Cadastrar nova senha</h2>
                    <form action="" ><!--inicio form-->

                        <div class="form-group input-group"><!--inicio password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="password"  required="required" name="password" class="form-control" placeholder="Criar nova Senha" type="password">
                        </div><!--fim password-->

                        
                        <div class="form-group input-group"><!--inicio confirma password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="password"  required="required" name="password" class="form-control" placeholder="Repita a nova Senha" type="password">
                        </div><!--fim confirma password-->

                        <p><!--inicio botões-->
                            <a href="login.php" type="submit" class="btn btn-sucess btn-block bg-success text-white btn-weight"></i>Salvar Alterações</a>
                            
                        </p><!--fim botões-->
                        
   
                        
                                         
                    </form><!--fim form-->   
                </div>

                <div >

                </div>
                

            </div>
        </div>
    </section>
</body>
</html>