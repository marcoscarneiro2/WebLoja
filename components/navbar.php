<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
  </body>
</html>
  <title>Av1 Web2</title>
</head>
<?php 
  session_start();
?>
<body>
<nav class="dp-menu">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <img style="height:25px" src="./img/icon/bars-solid.svg" alt="meu icone">
      </label>
      <label class="logo">Av1 Web2</label>
      <ul>
        <li><a href="./index.php">
            <img style="height:25px" src="./img/icon/home-solid.svg" alt="meu icone">
           <b> Home</b>
        </a></li>
      <?php if(!isset($_SESSION['email'])): ?>
         <li><a style="background-color:brown;color:white;" class="active" class="botao" href="./EntrarSistema.php">Cadastrar / Login</a></li>              
      <?php endif; ?> 

      <?php
        if(isset($_SESSION['email'])): 
        include('./php/verifica_login.php');
      ?>
        <li><a href="#"><img style="height:35px" src="./img/icon/user-circle-regular.svg" alt="meu icone"></a>
          <ul>
	          <li><a id="sm" href="./Telaperfil.php"><b>Perfil</b></a></li>
              <?php
                if($_SESSION['nivel'] == 2 ): 
              ?>
	          <li><a id="sm" href="./cadastrarproduto.php?id= <?= $_SESSION["id_usuario"] ?>"><b>Cadastrar Produto</b></a></li>
              <?php endif; ?> 
	          <li><a id="sm" href="./php/logout.php"><b>Logout</b></a></li>
	       	</ul> 
        </li>
      <?php endif; ?> 

      </ul>
    </nav>