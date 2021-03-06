<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha comanda</title>

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Jquery início -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="/Wep/App/Templates/style/bill.css">
    
</head>

<body>

    <header><!--Inicio Header-->
    <!-- Isso é um problema -->
        <nav class="navbar navbar-expand-sm navbar-light fixed-top bg-dark nav-transparente">
            <div class="container">
              <!--Logo-->
              <a  href="/Wep/home" class="navbar-brand" style="color: white;">
                <img src="/Wep/App/Templates/images/logo/logo-removebg-preview.png" width="120px" alt="">
              </a>    
              <!--Menu Hamburguer-->
              <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <i class="fas fa-bars text-dark"></i>
              </button>
              <!--Navegação-->
         
              <form action="/Wep/home/pratos"  method="GET">
        <div class="  mx-5 text-center pesquisa " style="width:550px; "><!--inicio pesquisa-->
        <div class="input-group">
            <input name="search" class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" style="border-right: none;">
            <div class="input-group-append">
            <div class="input-group-text" ><button type="submit" class="btn btn-md btn-white"> <i class="fas fa-search"></i></button></div>
            </div>
        </div>
        </div><!--Fim  pesquisa-->
        </form>
              <div class="collapse navbar-collapse " id="nav-principal">              
                  <ul class="navbar-nav ml-auto   ">  
                    <li>
                      <span class="text-warning font-weight-bold my-2 cashback">Bonus R$ <?php echo number_format($_SESSION['user-Bonus'], 2, ',', '.'); ?></span>
                    </li> 
                    <li class="nav-item mx-4 bonus">
                        <a href="/Wep/home/minha-comanda" class="text-warning mx-2 my-2 cart"> <i class="fas fa-shopping-cart mx-2"></i><?php echo $_SESSION['cart-items-quantity']; ?></a>
                  </li>
                  
                    <li class="nav-link format-link">
                        <div class="dropdown ">
                            <span class="dropdown-toggle" data-toggle="dropdown">
                            <i class="far fa-user"></i> 
                            </span>
                            <div class="dropdown-menu dropdown-menu-right">                                
                                <a href="/Wep/home" class="dropdown-item nav-item format-link">Home</a>
                                <div class="dropdown-divider"></div>        
                                <a href="/Wep/home/acompanhar-pedidos" class="dropdown-item nav-item format-link">Visualizar Pedidos</a>
                                <div class="dropdown-divider"></div>                        
                                <a href="/Wep/home/editar-cadastro" class="dropdown-item nav-item format-link">Editar Cadastro</a>
                                <div class="dropdown-divider"></div>
                                <a href="/Wep/" class="dropdown-item nav-item format-link">Sair</a>
                            </div>
                        </div>                                                        
                        </div>
                    </li>             
                  </ul>
              </div>
            </div>
        </nav>        
    </header><!--Fim Header-->
    

    <section id="home" class="d-flex "> 
        <div class="container align-self-center"  >
          <div class="container" style="height:500px">
            <div class="row">
              <div class="col" >  
                <h1 class="display-3  text-dark">Meus pedidos</h1>
                    <table class="table"> 
                      <thead class="thead-dark text-white">                                        
                        <tr>
                          <th scope="col">Id do pedido</th>                          
                          <th scope="col">Nome do prato </th>
                          <th scope="col">Quantidade</th>
                          <th scope="col">Situação do pedido</th>
                        </tr>              
                      </thead>                      
                      <tbody>
                        <?php
                        include './App/Templates/View/include/trackProducts.inc.php';
                        ?>
                      <tbody>
                    </table>
                    <div class="col-md-3 mt-2">
                <div class="total">
                    
                        <a href="/Wep/home/acompanhar-pedidos/realizar-pagamento"><button type="submit" name="payment" class="btn btn-block btn-lg btn-warning font-weight-bold" style="width: 1070px; margin-right:5px">Fechar conta</button></a>
                  </div>
                </div>
              </div>
             </div>
            <div>
            </div>
           </div>
          </div>
      </section>
    <?php include "./App/Templates/View/include/footer.inc.php" ?>
    
    <script src="/Wep/App/Templates/View/scripts/search.js"> </script>
</body>
</html>