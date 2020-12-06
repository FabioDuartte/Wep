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
                            <?php if ($item['statusPedido'] === '0') { ?>
                                <input type="button" disabled="" class="btn btn-md btn-secondary font-weight-bold" value="Finalizado" style="width: 152px">
                            <?php } else { ?>
                                <form method="GET" action="/Wep/home/minha-conta/acompanhar-pedidos">
                                <!--Tenho que fazer ainda-->
                                    <input type="submit" name="customer-btn" class="btn btn-md btn-danger font-weight-bold" id="change" value="Cancelar" style="width: 152px">
                                </form>
                            <?php } ?>
                            </td>
                        </tr>
                    </div>
                </div>
            </tbody>
        <?php
        }
    } else {
        echo 'Não há nenhum pedido em aberto';
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
                            <form method="GET" action="/Wep/home/pedidos-feito">
                                <input type="text" hidden name="id-pedido" value="<?php echo $item['idPedido']; ?>">
                                <input type="submit" class="btn btn-md btn-success font-weight-bold" style="width: 152px" value="Fechar Pedido">
                            </form>
                        </td>
                    </tr>
                </div>
            </div>
        </tbody>
    <?php
        }
    } else {
        echo 'Não há nenhum pedido em aberto';
?>
<?php
    }
}
?>

