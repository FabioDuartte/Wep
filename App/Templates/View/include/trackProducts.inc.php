<?php 
if ($_SESSION['user-type'] === 'Cliente') {
    if (!empty($_SESSION['order'])) {
        foreach ($_SESSION['order'] as $item) {
        ?>
            <tbody>
                <div>
                    <div>
                        <tr>

                            <td class="cart-price">#<?php echo $item['idPedido']; ?></td>
                            <td><?php echo $item['nomeProduto']; ?></td>
                            <td><?php echo $item['qtdItensPedidos']; ?></td>
                            <td>
                            <form action="#">
                                <input type="submit" class="btn btn-md btn-warning font-weight-bold" id="change" onclick=changeStatus() value="Em aberto" style="width: 152px">
                            </form>
                            </td>
                        </tr>
                    </div>
                </div>
            </tbody>
        <?php
        }
    } else {
    ?>
   
        <tr>
        <th>
            <div class="row justify-content-end" >
                <div class="mr-5" style="order: 1px solid red"><img  class="mx-5"src="/Wep/App/Templates/images/background/emptyCart.png" alt="Carrinho vazio"></div>
                <span class="row justify-content-end text-secondary"><br>Sua lista está vazia,<br><a class="mx-1"href="/Wep/home">clique aqui</a><br>para realizar um pedido</span>
            </div>
            </th>
        </tr>
       
    <?php

    }
} else {
    if (!empty($_SESSION['all-orders-open'])) {
        foreach ($_SESSION['all-orders-open'] as $item) {
    ?>
        <tbody>
            <div>
                <div>
                    <tr>
                        <td>#<?php echo $item['Cliente_idCliente']; ?></td>
                        <td><?php echo $item['nomeProduto']; ?></td>
                        <td><?php echo $item['qtdItensPedidos']; ?></td>
                        <td>
                        <form method="POST" action="/Wep/home/pedidos-feito">
                            <input type="submit" class="btn btn-md btn-warning font-weight-bold" id="change" onclick=changeStatus() value="Em aberto" style="width: 152px">
                        </form>
                        </td>
                    </tr>
                </div>
            </div>
        </tbody>
    <?php
        }
    } else {
        
?>

    
<tr>
        <th>
            <div class="row justify-content-end" >
                <div class="mr-5" style="order: 1px solid red"><img  class="mx-5"src="/Wep/App/Templates/images/background/cozinhaPedidos.png" alt="Carrinho vazio"></div>
                <span class="row justify-content-end text-secondary mx-2"><br>lista está vazia, nenhum cliente realizou um pedido</span>
            </div>
            </th>
        </tr>
    <?php


    }
}
?>
