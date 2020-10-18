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
    <link rel="stylesheet" type="text/css" href="../public/style/drink.css">

    
    
</head>

<body>
    <header><!--Inicio Header-->
       <?php include "./include/header.inc.php";?>
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
          <li class="  nav-item">
            <a class="nav-link " href="pagelanding.php">Home</a>
          </li>
          <li class="  nav-item">
            <a class="nav-link" href="breakfest.php">Café</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="lunch.php">Almoço</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link " href="dinner.php">Jantar</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link active" href="drink.php">Bebidas</a>
          </li>
        </ul>
        </div>
      </div>
    </section>

    <section id="cafe" class="d-flex">
        <div class="container ">
            <div id="card" class="row">
                <div class="col-md-12 ">
                    <div class="card-deck my-5">
                        <?php include "./include/products.inc.php" ?>
                        <?php include "./include/products.inc.php" ?>
                        <?php include "./include/products.inc.php" ?>
                    </div>
                    <div class="card-deck my-5">
                        <?php include "./include/products.inc.php" ?>
                        <?php include "./include/products.inc.php" ?>
                        <?php include "./include/products.inc.php" ?>
                    </div>
                    <div class="card-deck my-5">
                        <?php include "./include/products.inc.php" ?>
                        <?php include "./include/products.inc.php" ?>
                        <?php include "./include/products.inc.php" ?>
                    </div>
                  </div>
                </div>  
              </div>
            <div>
         </div>
    </section>

    <section id="depoimentos" >
      <div class="container  ">
        <p class="text-center display-4 text-white">Depoimentos</p>
        <div class="row ">
          <div class="col-sm-12 my-4">
              <div class="card">                
                <div class="card-body text-center">
                  <h5 class="card-title font-weight-bold">Britney Spears</h5>
                  <p class="card-text text-center font-italic font-weight-bold"><i class="fas fa-quote-left"></i><span>&nbsp;&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in doloremque corrupti maiores temporibus? Iste eaque quo aperiam ipsam. &nbsp;&nbsp;</span> <i class="fas fa-quote-right"></i></p>            
                </div>
              </div>
            </div>
            <div class="col-sm-4 my-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center  font-weight-bold">Albert Einstein</h5>
                  <p class="card-text text-center font-italic font-weight-bold"><i class="fas fa-quote-left"></i><span>&nbsp;&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio delectus&nbsp;&nbsp;</span> <i class="fas fa-quote-right"></i></p>            
                </div>
              </div>
            </div>
            <div class="col-sm-4 my-4">
              <div class="card">
                <div class="card-body text-center ">
                  <h5 class="card-title font-weight-bold">Clarice Lispector</h5>
                  <p class="card-text text-center font-italic font-weight-bold"><i class="fas fa-quote-left"></i><span>&nbsp;&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio delectus &nbsp;&nbsp;</span> <i class="fas fa-quote-right"></i></p>            
                </div>
              </div>
            </div>
            <div class="col-sm-4 my-4">
              <div class="card">
                <div class="card-body  text-center">
                  <h5 class="card-title font-weight-bold">Carl Sagan</h5>
                  <p class="card-text text-center font-italic font-weight-bold"><i class="fas fa-quote-left"></i><span>&nbsp;&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio delectus Facere, omnis.&nbsp;&nbsp;</span> <i class="fas fa-quote-right"></i></p>            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="rodape ">
      <div class="container">
      <div class="row">
        <?php include "./include/footer.inc.php" ?>
      </div>  
        </div>        
    </footer>

    
    
</body>
</html>