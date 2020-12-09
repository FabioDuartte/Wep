<?php 
if (isset($_SESSION['orders-to-pay']) && !empty($_SESSION['orders-to-pay'])) {
foreach ($_SESSION['orders-to-pay'] as $item) {
    ?>
    <tr>
        <th scope="row"><?php echo $item['idPedido']; ?></th>
        <td><?php echo $item['nomeProduto']; ?></td>
        <td ><?php echo $item['qtdItensPedidos']; ?></td>
        <td>R$ <?php echo $item['precoProduto']; ?></td>
    </tr>
<?php
    }
} else {
    echo "Você ainda não criou um pedido";
?>
<?php 
}
$_SESSION['orders-to-pay'] = array();
?>