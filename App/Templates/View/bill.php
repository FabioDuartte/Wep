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
         
              <div class="  mx-5 text-center pesquisa "><!--inicio pesquisa-->
                <div class="input-group">
                  <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" style="border-right: none;">
                  <div class="input-group-append">
                    <div class="input-group-text" ><button type="submit" class="btn btn-md btn-white"> <i class="fas fa-search"></i></button></div>
                  </div>
                </div>

              </div><!--Fim  pesquisa-->
              <div class="collapse navbar-collapse " id="nav-principal">              
                  <ul class="navbar-nav ml-auto   ">  
                    <li>
                      <span class="text-warning font-weight-bold my-2 cashback">Bonus R$ <?php echo $_SESSION['user-Bonus']; ?></span>
                    </li> 
                    <li class="nav-item mx-4 bonus">
                        <a href="bill.php" class="text-warning mx-2 my-2 cart"> <i class="fas fa-shopping-cart mx-2"></i>3</a>
                  </li>
                  
                    <li class="nav-link format-link">
                        <div class="dropdown ">
                            <span class="dropdown-toggle" data-toggle="dropdown">
                            <i class="far fa-user"></i> 
                            </span>
                            <div class="dropdown-menu dropdown-menu-right">                                
                                <a href="/Wep/home" class="dropdown-item nav-item format-link">Home</a>
                                <div class="dropdown-divider"></div>                                
                                <a href="/Wep/home/editar-cadastro" class="dropdown-item nav-item format-link">Editar Cadastro</a>
                                <div class="dropdown-divider"></div>
                                <a href="/Wep/" class="dropdown-item nav-item format-link">Sair</a>
                            </div>                                                            
                        </div>   
                    </li>             
                  </ul>
              </div>
            </div>
        </nav>        
    </header><!--Fim Header-->

    <section id="home" class="d-flex my-5 "> 
        <div class="container align-self-center my-5"  >
            <div class="row">
           <div class="container my-5">
             <div class="row cart-items  ">
               <div class="col-md-9">
                <table class="table table my-2 ">
                  <thead>
                    <tr class="thead-dark text-white">
                      <th scope="col">Item</th>
                      <th scope="col">Preço</th>
                      <th scope="col">Quantidade</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                        include './App/Templates/View/include/billProducts.inc.php';
                    ?>

                  </tbody >                  
                </table>               
               </div>
               <div class="col-md-3 mt-2">
                <div class="total">

                   <div class="my-2"> <span class="totalPrice font-weight-bold totalAPagar">Total R$ 28,00</span></div>
                   <div class="my-2">
                     <a href="/Wep/home"><button type="button" name="keep" id="keep" class="btn btn-block btn-lg btn-info font-weight-bold">Adicionar mais itens</button></a>
                   </div>
                   <div class="my-2">
                    <button type="button" name="close" id="close" class="btn btn-block btn-lg btn-success  font-weight-bold">Efetuar pedido</button>
                    <button type="button" name="close" id="close" data-toggle="modal" data-target="#modal-finalizarCompra" class="btn btn-block btn-lg btn-warning font-weight-bold">Finalizar Conta</button>
                  </div>
                </div>
              </div>             
             </div>
             <div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="font-weight-bold">Observações</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" style="width: 840px;" rows="3" placeholder="Nos informe caso tenha alguma restrição alimentar" ></textarea>
              </div>
            </div>
           </div>

     
    </section>

        <section>
           <!-- Modal -->
              <div class="modal fade" id="modal-finalizarCompra" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-center letterSpacing ">CONTA</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <h5 class="letterSpacing">Formas de pagamento</h5>
                        <div class="form-check">
                          <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="opcao1" aria-label="...">
                          <img class="my-2" src="https://img.icons8.com/fluent/35/000000/visa.png"/>
                          <span class="font-weight-bold">Crédito *** *** 1234 | 2x de R$ 14,00 </span>
                          <a href="#"><i class=" mx-2 far fa-edit"></i></a>                          
                        </div>
                        <div class="form-check">
                          <input class="form-check-input position-static"  type="radio" name="blankRadio" id="blankRadio1" value="opcao1" aria-label="...">
                          <img class="my-2" src="https://img.icons8.com/fluent/35/000000/mastercard.png"/>
                          <span class="font-weight-bold">Débito *** *** 4598 | R$ 28,00</span>
                          <a href="#"><i class=" mx-2 far fa-edit"></i></a>                          
                        </div>
                      </div>
                      <div>
                        <button class="btn btn-block btn-outline-warning font-weight-bold my-4">Adicionar outro cartão +</button>

                      </div>
                      <h5 class=" font-weight-bold mb-3 letterSpacing">Deseja aplicar seu bônus?</h5>                  
                  <div class="input-group prepend">
                    <input type="text" placeholder=" Aplicar bônus"  style="width: 360.9px;">
                    <input type="submit" class="btn btn-primary btn-md font-weight-bold text-white space2 mx-1" value="APLICAR">
                   </div> 
                   <div class="my-2"> <span class="font-weight-bold totalAPagar ">Sub-Total R$ 28,00</span></div>
                   <div class="my-2"> <span class="font-weight-bold totalAPagar ">Desconto R$ 00,00</span></div>
                   <div class="my-2"> <span class="font-weight-bold totalAPagar ">Bônus Obtido R$ 2,80</span></div>
                   <div class="my-2"> <span class="font-weight-bold totalAPagar ">Total R$ 28,00</span></div>
                  
                    </div>
                    <div class="modal-footer">
                      <a href="bill.php"><button type="button" class="btn btn-secondary font-weight-bold" data-target="">Fechar</button></a>
                      <a href="pagelanding.php"><button type="button" class="btn btn-success font-weight-bold" >Pagar</button></a>
                    </div>
                  </div>
                </div>
              </div>
           </section>


        <?php include "./App/Templates/View/include/footer.inc.php" ?>

    
    <script src="./App/Templates/View/scripts/bill.js"></script>
</body>
</html>