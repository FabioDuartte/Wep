<?php foreach ($_SESSION['lista-item'] as $item) {
$src = '/Wep/App/Templates/Gallery/' . $item['imgProduto'];
?>
    <div class="card">
        <?php echo "<img class='card-img-top' src='$src' alt='Imagem de capa do card'>" ?>
        <div class="card-body">
        <h5 class="cardheader"> <?php echo $item['nomeProduto']; ?> </h5>
        <div class="d-flex my-4 ">
            <i class="star fas fa-star text-warning "></i>
            <i class="star fas fa-star text-warning "></i>
            <i class="star fas fa-star text-warning "></i>
            <i class="star fas fa-star text-warning "></i>
            <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
        </div>
        <p class="card-text description">Ingredientes: <?php echo $item['ingredientes']; ?> </p>
        <div>
            <p class="h5 font-weight-bold text-dark">Preço: R$ <?php echo $item['precoProduto']; ?> </p>
        </div>
        </div>
        <div class="card-footer">
        <button class="btn btn-success btn-lg btn-block">Adicionar à comanda</button>
        </div>
    </div>
<?php
}
?>