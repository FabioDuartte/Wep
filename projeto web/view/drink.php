<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>

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
    <link rel="stylesheet" type="text/css" href="../public/style/drink.css">

    
    
</head>

<body>
    <header><!--Inicio Header-->
        <nav class="navbar navbar-expand-sm navbar-light fixed-top nav-transparente">
            <div class="container">
              <!--Logo-->
              <a  href="#" class="navbar-brand  " style="color: white;">
               <img src="../public/imagens/logo/logo-removebg-preview.png" width="120px" alt="">
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
                <li>
                  <span class="text-warning font-weight-bold my-2 cashback">R$ 50,00</span>
                </li>       
                  <ul class="navbar-nav ml-auto   ">  
                    <li class="nav-item mx-4 bonus">
                      <a href="bill.php" class="text-warning mx-2 my-2 cart "> <i class="fas fa-shopping-cart mx-2"></i>3</a>
                  </li>
                    <img src="../public/imagens/perfil.jpg" id="foto">
                    <li class="nav-link format-link">
                        <div class="dropdown ">
                            <span class="dropdown-toggle" data-toggle="dropdown">
                                Perfil
                            </span>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="../view/registerProducts.php" class="dropdown-item nav-item format-link ">Cadastrar produtos</a>
                                <div class="dropdown-divider"></div>
                                <a href="../view/orders.php" class="dropdown-item nav-item format-link">Visualizar pedidos</a>
                                <div class="dropdown-divider"></div>
                                <a href="../view/bill.php" class="dropdown-item nav-item format-link">Minha Comanda</a>
                                <div class="dropdown-divider"></div>
                                <a href="editarCadastro.php" class="dropdown-item nav-item format-link">Editar Cadastro</a>
                                <div class="dropdown-divider"></div>
                                <a href="../view/login.php" class="dropdown-item nav-item format-link">Sair</a>
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
            <div class="row">
            <div class="col-md-12 capa">
              <h1 class="display-2">Bebidas</h1>
           </div>    
    </section>

    <section id="menu" class="mt-5">
      <div class="container " >
        <ul class="nav justify-content-center">
          <li class="  nav-item">
            <a class="nav-link " href="pagelanding.php">Home</a>
          </li>
          <li class="  nav-item">
            <a class="nav-link" href="breakfest.php">Café</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="lunch.php">Almoço</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link " href="dinner.php">Jantar</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link active" href="drink.php">Bebidas</a>
          </li>
        </ul>
        </div>
      </div>
    </section>

    <section id="cafe" class="d-flex">
        <div class="container ">
            <div id="card" class="row">
                <div class="col-md-12 ">
                    <div class="card-deck my-5">
                        <div class="card ">
                          <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                          <div class="card-body">
                            <h5 class="cardheader">Omelete</h5>
                            <div class="d-flex my-4 ">
                                <i class="star fas fa-star text-warning "></i>
                                <i class="star fas fa-star text-warning "></i>
                                <i class="star fas fa-star text-warning "></i>
                                <i class="star fas fa-star text-warning "></i>
                                <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                            </div>
                            <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                            <div >
                                <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                            </div>
                          </div>
                          <div class="card-footer">
                            <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                          </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                            <div class="card-body ">
                              <h5 class="cardheader">Omelete</h5>
                              <div class="d-flex my-4 ">
                                  <i class="star fas fa-star text-warning "></i>
                                  <i class="star fas fa-star text-warning "></i>
                                  <i class="star fas fa-star text-warning "></i>
                                  <i class="star fas fa-star text-warning "></i>
                                  <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                              </div>
                              <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                              <div >
                                  <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                              </div>
                            </div>
                            <div class="card-footer " >
                              <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                            </div>
                          </div>

                          <div class="card">
                            <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                            <div class="card-body">
                              <h5 class="cardheader">Omelete</h5>
                              <div class="d-flex my-4 ">
                                  <i class="star fas fa-star text-warning "></i>
                                  <i class="star fas fa-star text-warning "></i>
                                  <i class="star fas fa-star text-warning "></i>
                                  <i class="star fas fa-star text-warning "></i>
                                  <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                              </div>
                              <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                              <div >
                                  <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                              </div>
                            </div>
                            <div class="card-footer">
                              <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                            </div>
                          </div>                        
                </div>
                <div class="card-deck my-5">
                    <div class="card">
                      <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="cardheader">Omelete</h5>
                        <div class="d-flex my-4 ">
                            <i class="star fas fa-star text-warning "></i>
                            <i class="star fas fa-star text-warning "></i>
                            <i class="star fas fa-star text-warning "></i>
                            <i class="star fas fa-star text-warning "></i>
                            <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                        </div>
                        <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                        <div >
                            <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                        </div>
                      </div>
                      <div class="card-footer">
                        <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                      </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="cardheader">Omelete</h5>
                          <div class="d-flex my-4 ">
                              <i class="star fas fa-star text-warning "></i>
                              <i class="star fas fa-star text-warning "></i>
                              <i class="star fas fa-star text-warning "></i>
                              <i class="star fas fa-star text-warning "></i>
                              <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                          </div>
                          <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                          <div >
                              <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                        </div>
                      </div>
                      
                      <div class="card">
                        <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="cardheader">Omelete</h5>
                          <div class="d-flex my-4 ">
                              <i class="star fas fa-star text-warning "></i>
                              <i class="star fas fa-star text-warning "></i>
                              <i class="star fas fa-star text-warning "></i>
                              <i class="star fas fa-star text-warning "></i>
                              <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                          </div>
                          <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                          <div >
                              <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                        </div>
                      </div>                        
            </div>
            <div class="card-deck">
                <div class="card">
                  <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h5 class="cardheader">Omelete</h5>
                    <div class="d-flex my-4 ">
                        <i class="star fas fa-star text-warning "></i>
                        <i class="star fas fa-star text-warning "></i>
                        <i class="star fas fa-star text-warning "></i>
                        <i class="star fas fa-star text-warning "></i>
                        <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                    </div>
                    <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                    <div >
                        <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                  </div>
                </div>

                <div class="card">
                    <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                    <div class="card-body">
                      <h5 class="cardheader">Omelete</h5>
                      <div class="d-flex my-4 ">
                          <i class="star fas fa-star text-warning "></i>
                          <i class="star fas fa-star text-warning "></i>
                          <i class="star fas fa-star text-warning "></i>
                          <i class="star fas fa-star text-warning "></i>
                          <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                      </div>
                      <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                      <div >
                          <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                    </div>
                  </div>
                  
                  <div class="card">
                    <img class="card-img-top " src="../public/imagens/drink/breakfest5.png" alt="Imagem de capa do card">
                    <div class="card-body">
                      <h5 class="cardheader">Omelete</h5>
                      <div class="d-flex my-4 ">
                          <i class="star fas fa-star text-warning "></i>
                          <i class="star fas fa-star text-warning "></i>
                          <i class="star fas fa-star text-warning "></i>
                          <i class="star fas fa-star text-warning "></i>
                          <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
                      </div>
                      <p class="card-text description">Omelete de forno com tomate, abobrinha, cenoura</p>
                      <div >
                          <p class="h5 font-weight-bold text-dark">Preço: R$ 8,50 </p>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
                    </div>
                  </div>                        
        </div>
            </div>
        </div>
      
        <!--Fim Paginação-->
    </section>

    <section id="depoimentos" >
      <div class="container  ">
        <p class="text-center display-4 text-white">Depoimentos</p>
        <div class="row ">
          <div class="col-sm-12 my-4">
              <div class="card">                
                <div class="card-body text-center">
                  <h5 class="card-title font-weight-bold">Britney Spears</h5>
                  <p class="card-text text-center font-italic font-weight-bold"><i class="fas fa-quote-left"></i><span>&nbsp;&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in doloremque corrupti maiores temporibus? Iste eaque quo aperiam ipsam. Repudiandae adipisci quo quidem porro obcaecati culpa consectetur alias asperiores eveniet..&nbsp;&nbsp;</span> <i class="fas fa-quote-right"></i></p>            
                </div>
              </div>
            </div>
            <div class="col-sm-4 my-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center  font-weight-bold">Albert Einstein</h5>
                  <p class="card-text text-center font-italic font-weight-bold"><i class="fas fa-quote-left"></i><span>&nbsp;&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio delectus, placeat magni debitis aliquid explicabo non quod temporibus asperiores facilis et blanditiis, deserunt harum, ipsam vero maxime quidem inventore voluptatem!.&nbsp;&nbsp;</span> <i class="fas fa-quote-right"></i></p>            
                </div>
              </div>
            </div>
            <div class="col-sm-4 my-4">
              <div class="card">
                <div class="card-body text-center ">
                  <h5 class="card-title font-weight-bold">Clarice Lispector</h5>
                  <p class="card-text text-center font-italic font-weight-bold"><i class="fas fa-quote-left"></i><span>&nbsp;&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sint doloremque accusamus ad cum aperiam! Dolorem repudiandae aut culpa nostrum ipsam error, cupiditate officia, optio rem dolorum repellendus, totam beatae..&nbsp;&nbsp;</span> <i class="fas fa-quote-right"></i></p>            
                </div>
              </div>
            </div>
            <div class="col-sm-4 my-4">
              <div class="card">
                <div class="card-body  text-center">
                  <h5 class="card-title font-weight-bold">Carl Sagan</h5>
                  <p class="card-text text-center font-italic font-weight-bold"><i class="fas fa-quote-left"></i><span>&nbsp;&nbsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore aut error fuga ipsa molestias ipsam quod assumenda accusantium doloribus debitis veritatis rem, facere ipsum rerum neque iste in. Facere, omnis.&nbsp;&nbsp;</span> <i class="fas fa-quote-right"></i></p>            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        
      

       
    </section>

    <footer class="rodape ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <ul class="nav justify-content-center ">
              <li class="  nav-item">
                <a class="nav-link " href="pagelanding.php">Home</a>
              </li>
              <li class="  nav-item">
                <a class="nav-link" href="breakfest.php">Café</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link" href="lunch.php">Almoço</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link " href="dinner.php">Jantar</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link " href="drink.php">Bebidas</a>
              </li>
            </ul>
          </div> 
          <div class="col-md-12 my-2 notas">
            <div class="text-center ">
              <p>Endereço: Rua dos alfeneiros nº 4</p>
              <p>Tel.: (xx) xxxx-xxxx</p>
              <p>&copy; Copyright Caldeirão Furado </p>
          </div>
        </div>
    
          </div>  
        </div>
        
    </footer>

    
    
</body>
</html>