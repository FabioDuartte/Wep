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
    
        
    
    <!-- Bootstrap fim -->

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="../public/style/pagelanding.css">
</head>
<body>
    <header><!--Inicio Header-->
        <?php include './include/header.inc.php'; ?>        
    </header><!--Fim Header-->

    <section id="destaques">
		<div class="container ">
			<div class="row  ">
				<div class="col-md-12  texto ">
					<div class="justify-content-center">
						<h1 class="display-1 welcome" style="font-family:'Courgette', cursive;  ">Seja bem-vindo</h1>						  
					</div>
        </div>
		</div>
		
	</section>

    <section id="cardapios" class="caixa d-flex ml-auto">
        <div class="container">
            <h1>Cardápios</h1>
            <div class="row justify-content-around">
                 
                <div class="col-md-3 ">
                    <a href="">

                        <div > 
                            <a href="../view/breakfest.php"><img class="cardapio  img-fluid" src="../public/imagens//breakfest/breakfest2.jpg" alt="café"></a>
                        </div>

                        <div >                            
                            <a href="../view/breakfest.php"><p class="legenda">café</p></a>
                        </div>
                    </a>                                     
                </div>     

                <div class="col-md-3 " >
                    <a href="">
                        <div >
                           <a href="../view/lunch.php" ><img class="cardapio  img-fluid" src="../public/imagens/lunch/lunch2.jpg" alt="almoço"></a>
                        </div>

                        <div >
                            <a href="../view/lunch.php"><p class="legenda ">almoço</p></a>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 " >
                    <a href="">
                        <div >
                            <a href="../view/dinner.php"><img class="cardapio img-fluid " src="../public/imagens/dinner/dinner2.jpg" alt="jantar"></a>
                        </div>

                        <div >
                            <a href="../view/dinner.php"><p class="legenda ">jantar</p></a>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 " >
                    <a href="">
                        <div >
                            <a href="../view/drink.php"><img class="cardapio  img-fluid" src="../public/imagens/drink/drink.jpg" alt="bebidas"></a>
                        </div>
                       <div >
                           <a href="../view/drink.php"><p class="legenda ">bebidas</p></a>
                        <div>
                    </a>
                </div>
            </div>

        </div>

    </section>

    <footer class="rodape ">
        <div class="container">
          <div class="row">
            <div class="col-md-12 my-2 notas">
              <div class="text-center ">
                <p>Endereço: Rua dos alfeneiros nº 4</p>
                <p>Tel.: (xx) xxxx-xxxx</p>
                <p>&copy; Copyright Caldeirão Furado </p>
               </div>
          </div>
            </div>  
          </div>
          
      </footer>
    
    
    
    
</body>
</html>