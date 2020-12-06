<?php 
if ($_SESSION['user-type'] === 'Cliente') {
    if (empty($_SESSION['order'])) {
        echo 'Não há nenhum pedido em aberto';
    } else {

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
    }
} else {
    if (empty($_SESSION['all-orders-open'])) {
        echo 'Não há nenhum pedido em aberto';
    } else {
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
                            <button type="button" class="btn btn-md btn-warning font-weight-bold" id="change" onclick=changeStatus() value="Em aberto" style="width: 152px"></button>
                        </td>
                    </tr>
                </div>
            </div>
        </tbody>
<?php
        }
    }
}
?>
