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
    <link rel="stylesheet" type="text/css" href="/Wep/App/Templates/style/drink.css">

   <style>
      #depoimentos {
          background: url(./App/Templates/imagens/drink/drink.jpg) no-repeat;    
          background-size: cover;
      }
   </style>
</head>
<body>
    <header><!--Inicio Header-->
       <?php include "./App/Templates/View/include/header.inc.php";?>
    </header><!--Fim Header-->

    <section id="home" class="d-flex "> 
        <div class="container align-self-center"  >
            <div class="row">
            <div class="col-md-12 capa">
              <h1 class="display-2" style="font-family:'Courgette', cursive;  ">Bebidas</h1>
           </div>    
    </section>

    <section id="menu" class="mt-5">
      <div class="container " >
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link " href="/Wep/home">Home</a>
          </li>

          <li class=" nav-item">
            <a class="nav-link" href="/Wep/home/pratos">Pratos</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link active" href="/Wep/home/bebidas">Bebidas</a>
          </li>
        </ul>
        </div>
      </div>
    </section>

    <section id="cafe" class="d-flex">
        <div class="container">
            <div id="card" class="row justify-content-center">
                  <?php include "./App/Templates/View/include/products.inc.php" ?>                        
            </div>
         </div>
    </section>

    <!--INICIO DEPOIMENTOS-->
    <?php include "./App/Templates/View/include/depoimentos.inc.php" ?>    
    <!--FIM DEPOIMENTOS-->

    <!--INICIO RODAPÉ-->
    <?php include "./App/Templates/View/include/footer.inc.php" ?>
    <!-- FIM RODAPÉ-->
</body>
</html>