<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar produtos</title>

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
    <link rel="stylesheet" type="text/css" href="/Wep/App/Templates/style/registerProducts.css">

    <style>
     .format-link{
        font-size: 1.2em;
        font-weight: bold;
        cursor: pointer;
        color: white;
      }
      .format-link:hover{
        color: #ffc107;    
        /*background:#ffc107;*/
      }
      a{
        text-decoration:none;
      }

    </style>

</head>

<body>
<header ><!--Inicio Header-->
     
        <nav class="class=navbar navbar-expand-sm navbar-warning nav-bg  nav-transparente">
        <div class="container">
          <!--Logo-->
          <a  href="#" class="navbar-brand" style="color: white;">
           <img src="/Wep/App/Templates/images/logo/logo-removebg-preview.png" alt="" width="120px" class="logo" >
          </a>
          <!--Menu Hamburguer-->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-dark"></i>
          </button>
          <!--Navegação-->
          <div class="collapse navbar-collapse " id="nav-principal">
            <ul class="navbar-nav ml-auto">
                <a href="/Wep/home" class=" nav-link nav-item format-link" >Home</a>
                <a href="" class=" nav-link nav-item format-link text-decoration-none" >|</a>                 
                <a href="/Wep/home/cadastrar-produtos" class=" nav-link nav-item format-link">Cadastrar Produto</a>                
                <a href="" class=" nav-link nav-item format-link text-decoration-none" >|</a>
                <a href="/Wep/home/alterar-produto" class=" nav-link nav-item format-link">Alterar Produto</a>                  
                <a href="" class=" nav-link nav-item format-link text-decoration-none" >|</a>
                <a href="/Wep/home/deletar-produto" class=" nav-link nav-item format-link">Excluir Produto</a>                  
                <a href="" class=" nav-link nav-item format-link text-decoration-none" >|</a>
                <a href="/Wep/" class=" nav-link nav-item format-link">Sair</a>
            </ul>            
          </div>
        </nav>
    </div>
</header><!--Fim Header-->

    <section id="home" class="d-flex "> 
        <div class="container align-self-center"  >
          <div class="container">
            <div class="row ">
              <div class="col">
                
                <form method="POST" action="/Wep/home/cadastrar-produtos">
                <h1 class="display-3  text-dark my-2" style="padding-top:25px">Alterar produtos</h1>
                
                  <div class="form-group">
                    <label for="tipo">Tipo do produto</label>
                    <select name="product-type" class="form-control" id="tipo" onchange="disableInput()">
                    <option value="">Selecione uma opção</option>
                      <option value="mainCourse">Alterar Prato</option>
                      <option value="drink"> Bebida</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="fornecedor">Nome do produto</label>
                      <input disabled="" name="product-name" type="text" value='' class="form-control" id="nome">
                  </div>
                  <div class="form-group">
                    <label for="fornecedor">Nome do novo produto</label>
                      <input name="product-newName" type="text" value='' class="form-control" id="novo-nome">
                  </div>
                  <div class="form-group">
                    <label for="fornecedor">Preço</label>
                      <input disabled="" placeholder="00.00" name="product-price" type="text" value='' class="form-control" id="preco">
                  </div>
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <label class="custom-file-label" for="addImg" aria-describedby="addImg">Adcionar imagem do produto</label>
                      <input type="file" name="product-src" value='' class="custom-file-input" id="addImg">               
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label for="fornecedor">Fornecedor</label>
                      <input disabled="" name="drink-supplier" type="text" value='' class="form-control" id="fornecedor">
                  </div>
                  <div class="form-group">
                    <label for="descricao">Ingredientes</label>
                    <textarea disabled="" placeholder="Adicione os ingredientes separados por virgula" value='' name="food-ingredients" class="form-control" id="ingredientes" ></textarea>
                  </div>
                  <input disabled="" id="submitAlter" type="submit" class="btn btn-lg  btn-success bg-success btn-block font-weight-bold" value="Salvar alterações" style="background: yellow">
                  <input type="reset" class="btn  btn-lg cancel btn-block font-weight-bold" value="Cancelar">
                </form>
                <div>
                  
                </div>
              </div>
            </div>
    </section>

    <footer class="rodape my-5 ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <ul class="nav justify-content-center ">
              <li class="  nav-item">
                <a class="nav-link " href="/Wep/home">Home</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link " href="/Wep/home/pratos">Pratos</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link " href="/Wep/home/bebidas">Bebidas</a>
              </li>
            </ul>
          </div> 
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

    <script src="/Wep/App/Templates/View/scripts/disableButtons.js"> </script>
    
</body>
</html>