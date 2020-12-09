<?php if (isset($_SESSION['cart-items']) && !empty($_SESSION['cart-items'])) {
    foreach ($_SESSION['cart-items'] as $item) {
        $src = '/Wep/App/Templates/Gallery/' . $item['product-img'];
?>
    <div class="cart-row ">
        <div>
            <tr>
                <th scope="row">
                    <?php echo "<img src='$src' class='img'>" ?>
                    <span class="ml-2"><?php echo $item['product-name'] ?></span>
                </th>
                <td class="cart-price">R$ <?php echo number_format($item['product-price'], 2, ',', '.')?></td>
                <td>
                <div class="d-flex">
                    <form action="/Wep/home/minha-comanda" method="POST">
                        <button type="submit" id="decrease-quantity" name="decrease-quantity" class="btn btn-sm btn-danger font-weight-bold">-</button>
                        <input hidden type="text" name="product-id" value="<?php echo $item['product-id'] ?>">
                    </form>

                    <input disabled="" value="<?php echo $item['product-quantity']; ?>" id="product-quantity" name="product-quantity" min="1" max="200" class="cart-quantity" type="number">
                    
                    <form action="/Wep/home/minha-comanda" method="POST">
                        <button type="submit" id="increase-quantity" name="increase-quantity" class="btn btn-sm btn-success font-weight-bold">+</button>
                        <input hidden type="text" name="product-id" value="<?php echo $item['product-id'] ?>">
                    </form>
                </div>
                    <td class="text-right remove">
                        <form method="POST" action="/Wep/home/minha-comanda">
                            <input hidden type="text" name="product-id" value="<?php echo $item['product-id'] ?>">
                            <button type="submit" name="remove-cart-item" class="btn btn-sm btn-danger font-weight-bold ">X</button>
                        </form>
                    </td>
                </td>
            </tr>
        </div>
    </div>
<?php
    }
} else {
    ?>
    <tr>
        <th>
        <div class="row justify-content-end" >
            <div class="mr-5" style="order: 1px solid red"><img  class="mx-5"src="/Wep/App/Templates/images/background/emptyCart.png" alt="Carrinho vazio"></div>
            <span class="row justify-content-end text-secondary"><br>Seu carrinho está vazio,<a class="mx-1"href="/Wep/home">clique aqui</a><br>para realizar um pedido</span>
        </div>
        </th>
    </tr>
<?php
}
?>
