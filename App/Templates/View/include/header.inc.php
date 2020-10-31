<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<nav class="navbar navbar-expand-sm navbar-light fixed-top nav-transparente">
    <div class="container ">
        <!--Logo-->
        <a  href="#" class="navbar-brand" style="color: white;">
        <img src="../public/images/logo/logo-removebg-preview.png" width="120px" alt="">
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
            <li class="">
                <span class="text-warning font-weight-bold my-2 cashback">Bônus R$ 10,00</span>
            </li>
            <li class="nav-item mx-4 bonus">
                <a href="bill.php" class="text-warning mx-2 my-2 cart "> <i class="fas fa-shopping-cart mx-2"></i>10</a>
            </li>
            
            <li class="nav-link format-link">
                <div class="dropdown ">
                    <span class="dropdown-toggle text-white d-flex" data-toggle="dropdown">
                     <i class="far fa-user"></i> 
                    </span>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="./registerProducts.php" class="dropdown-item nav-item format-link ">Cadastrar produtos</a>
                        <div class="dropdown-divider"></div>
                        <a href="./orders.php" class="dropdown-item nav-item format-link">Visualizar pedidos</a>
                        <div class="dropdown-divider"></div>
                        <a href="./bill.php" class="dropdown-item nav-item format-link">Minha Comanda</a>
                        <div class="dropdown-divider"></div>
                        <a href="./editarCadastro.php" class="dropdown-item nav-item format-link">Editar Cadastro</a>
                        <div class="dropdown-divider"></div>
                        <a href="./login.php" class="dropdown-item nav-item format-link">Sair</a>
                    </div>                                                            
                </div>   
            </li>             
            </ul>
        </div>
    </div>
</nav>