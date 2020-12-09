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
        <div class="container align-self-center"  style="max-height: 200px">
          <div class="container" style="max-height:500px;">
            <div class="row">
              <div class="col" >  
                <h1 class="display-3  text-dark my-5">Pagamento</h1>
                <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
                            <div id="info"class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                <strong > <?php echo $_SESSION['error']; ?> </strong>                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                    }
                        $_SESSION['error'] = "";
                        ?> 
               <!-- INICIO FORMAS DE PAGAMENTO--> 
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                      <th class="text-center" scope="col">Pagar no Crédito</th>
                      <th class="text-center" scope="col">Pagar no Débito</th>                  
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <?php $src = ($_SESSION['customer-card']['bandeiraCartao'] === "Visa") ? 'https://img.icons8.com/fluent/45/000000/visa.png' : 'https://img.icons8.com/fluent/45/000000/mastercard.png'; ?>
                        <td scope="row text-center">
                            <div class="form-check text-center">
                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="opcao1" aria-label="..." style="font-size: 20px">
                                <?php echo "<img class='my-2' src='$src'/>" ?>
                                <span class="font-weight-bold" style="font-size: 20px">Crédito</span>
                            </div>
                        </td>
                        <td scope="row text-center">
                            <div class="form-check text-center">
                                <input checked="" class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="opcao1" aria-label="...">
                                <?php echo "<img class='my-2' src='$src'/>" ?>
                                <span class="font-weight-bold" style="font-size: 20px">Débito</span>
                            </div>
                        </td>  
                    <tr>
                </tbody>
                </table>
                <!-- FIM FORMAS DE PAGAMENTO-->
                
                <!-- INICIO DADOS DA CONTA-->
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Id do pedido</th>
                    <th scope="col">Nome do prato</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Valor unitário</th>
                    </tr>
                </thead>
                <tbody>
                <?php include "./App/Templates/View/include/itensOnBill.inc.php" ?>
                        <th colspan="4">Valor total da conta: R$ <?php echo number_format($_SESSION['bill-total-amount'], 2, ',', '.'); ?> </th>
                    </tr>
                    <tr>
                        <th colspan="4">Valor do desconto aplicado: R$ <?php echo ($_SESSION['bonus-apply']) ? number_format($_SESSION['bonus-apply'], 2, ',', '.') : '0.00';?> 
                            <form method="POST" action="/Wep/home/acompanhar-pedidos/realizar-pagamento">
                              <input type="submit" name="clean-bonus" class="d-flex btn btn-sm btn-sm  btn-danger font-weight-bold" value="Limpar bônus"></input>
                            </form>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-danger">Valor total a pagar: R$ <?php echo number_format($_SESSION['bill-total-amount-with-bonus'], 2, ',', '.'); ?></th>                   
                    </tr>
                    <tr>
                        <th colspan="4">Valor do bônus que você recebera: R$ <?php echo number_format($_SESSION['cashback'], 2, ',', '.'); ?></th>                   
                    </tr>
                </thead> 
                </tbody>
                </table>
                <!-- FIM DADOS DA CONTA-->

                <div class=" mt-2">                
                <div class="total" style="margin-bottom:50px">
                    <form class="input-group-prepend" method="POST" action="/Wep/home/acompanhar-pedidos/realizar-pagamento">
                        <input name="bonus-to-apply" placeholder="Não use símbolo nos milhares Ex: 00000.00"  type="text" class="my-2"style="width: 650px;">
                        <button type="submit" name="bonus-btn" id="checkout" class="btn btn-block btn-lg btn-primary font-weight-bold my-2 mx-1" style="width: 780px; margin-right:5px">Aplicar Bônus</button>
                    </form>
                    <form method="POST" action="/Wep/home/acompanhar-pedidos/realizar-pagamento">
                        <input type="submit" name="pay" id="checkout" class="btn btn-block btn-lg btn-success font-weight-bold" style="width: 1078px; margin-right:5px" value="Pagar"></input>
                    </form>
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