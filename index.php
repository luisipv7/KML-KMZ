<?php

  session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta lang="pt-br">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tela Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Entrar Agora</h2>
		    <form class="login-form" method="POST" action="validar.php">
  <div class="form-group">
    <label   class="text-uppercase">Usuário</label>
    <input type="text" name="usuario" class="form-control" placeholder="Fulano">
    
  </div>
  <div class="form-group">
    <label  class="text-uppercase">Senha</label>
    <input type="password" name="senha"  class="form-control" placeholder="******">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" class="btn btn-login float-right">Entrar</button>
  </div>
  
</form>

		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/samuel-scrimshaw-76649-unsplash.jpg" alt="Photo by Samuel Scrimshaw on Unsplash">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Ideal</h2>
            <p>Conserve os olhos fixos num ideal sublime, e lute sempre pelo que deseja, pois só os fracos desistem e só quem luta é digno de vida.</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/samuel-scrimshaw-168189-unsplash.jpg" alt="Photo by Samuel Scrimshaw on Unsplash">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Força</h2>
            <p>A vida é cheia de tentativas, então levante e diga: eu vou tentar e eu vou conseguir.</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/christian-joudrey-63586-unsplash.jpg" alt="Foto de Christian Joudrey no Unsplash">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Curta a vista</h2>
            <p>Durante a sua jornada, não esqueça de olhar ao redor e apreciar a vista.</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>

<p>
            <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>