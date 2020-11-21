<nav class="navbar navbar-expand-sm navbar-light fixed-top nav-transparente">
    <div class="container ">
        <!--Logo-->
        <a  href="#" class="navbar-brand" style="color: white;">
        <a href="/Wep/home"><img src="/Wep/App/Templates/images/logo/logo-removebg-preview.png" width="120px" alt=""></a>
        </a>
        <!--Menu Hamburguer-->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-dark"></i>
        </button>
        <!--Navegação-->
        <div class="  mx-5 text-center pesquisa " style="width:550px; "><!--inicio pesquisa-->
        <div class="input-group">
            <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" style="border-right: none;">
            <div class="input-group-append">
            <div class="input-group-text" ><button type="submit" class="btn btn-md btn-white"> <i class="fas fa-search"></i></button></div>
            </div>
        </div>
        </div><!--Fim  pesquisa-->
        <?php 
            switch ($_SESSION['user-type'])
            {
                case 'Gerente':
                    include './App/Templates/View/include/headerManager.inc.php';
                break;
                case 'Cliente':
                    include './App/Templates/View/include/headerCustomer.inc.php';
                break;
                case 'Funcionario':
                    include './App/Templates/View/include/headerEmployee.inc.php';
                break;
                default:
                    include './App/Templates/View/include/headerAnon.inc.php';
                break;
            }
        ?>
    </div>
</nav>