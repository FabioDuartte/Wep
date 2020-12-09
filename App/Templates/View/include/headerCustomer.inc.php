<div class="collapse navbar-collapse" id="nav-principal">  
    <ul class="navbar-nav ml-auto">  
    <li class="">
        <span class="text-warning font-weight-bold my-2 cashback">Bônus R$ <?php echo number_format($_SESSION['user-Bonus'], 2, ',', '.'); ?> </span>
    </li>
    <li class="nav-item mx-4 bonus">
        <a href="/Wep/home/minha-comanda" class="text-warning mx-2 my-2 cart "> <i class="fas fa-shopping-cart mx-2"></i><?php echo $_SESSION['cart-items-quantity']; ?></a>
    </li>
    <li class="nav-link format-link">
        <div class="dropdown ">
            <span class="dropdown-toggle text-white d-flex" data-toggle="dropdown">
                <i class="far fa-user"></i>
            </span>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="/Wep/home/minha-comanda" class="dropdown-item nav-item format-link">Minha Comanda</a>
                <div class="dropdown-divider"></div>
                <a href="/Wep/home/acompanhar-pedidos" class="dropdown-item nav-item format-link">Visualizar Pedidos</a>
                <div class="dropdown-divider"></div>
                <a href="/Wep/home/editar-cadastro" class="dropdown-item nav-item format-link">Editar Cadastro</a>
                <div class="dropdown-divider"></div>
                <a href="/Wep/" class="dropdown-item nav-item format-link">Sair</a>
            </div>
        </div>
    </li>
    </ul>
</div>
