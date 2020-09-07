<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
	<meta charset="utf-8">
    <script type="text/javascript" src="../jquery-3.4.1.js"></script>
	<script src="../materialize/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<!--
<body style="background-image: url('../back2.jpg'); background-repeat: no-repeat; background-size: 100%;">
-->
<body>  
	<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<?php 

session_start();

$email = $_SESSION['email'];
$nome = $_SESSION['nome'];

require "../bd.php";

$sql = "SELECT * FROM cadastro WHERE email='$email'";
$foto = mysqli_query($connect, $sql);
if(mysqli_num_rows($foto) > 0){ 
while ($dados = mysqli_fetch_array($foto)) { 

$resultFoto = $dados['foto'];

$nivel = $dados['nivel'];



?>
<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">
      
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a></li>
      </ul>
    </div>
</nav>

<ul id="slide-out" class="sidenav" style="background-color: #fb8c00;">
    <li>
      <div class="user-view">
      <img  class="circle" style="width: 240px; height: 240px;" src="../fotos/<?php echo $resultFoto; ?>">
      <span class="white-text name" style="font-family: arial; font-weight: bold; font-size: 20px;">
      <blockquote><?php echo "$nome" ?> </blockquote>
      </span>
      <span class="white-text email" style="font-size: 17px;">
      <?php echo "$email" ?></span>
      <a href="../actions/sair.php" style="color: white;">Sair</a>
      </div>
   </li>
</ul>

<img src="../back3.jpg" id="back" usemap="#rotas">

<map id="rotas">
  

<div class="container">
  <div class="row">
    <div class="col s6 m6">
     <div align="left">
        <div>
         <area shape="rect" class="btn-large green" coords="34,44,270,350" href="../fases/fase1/nivel1.php"><i class="material-icons left">lock_open</i>Fase 1
       </div>
      <?php 
      if ($nivel < 2) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i> Fase 2</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 2</a>
      </div>
      <?php
      }
      ?>
       <br>
       <br>
       <br>
       <br>
      <?php 
      if ($nivel < 3) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i>Fase 3</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 3</a>
      </div>
      <?php
      }
      ?>
       <br>
       <br>
       <br>
       <br>
       <?php 
      if ($nivel < 4) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i>Fase 4</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 4</a>
      </div>
      <?php
      }
      ?>
       <br>
       <br>
       <br>
       <br>
       <?php 
      if ($nivel < 5) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i>Fase 5</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 5</a>
      </div>
      <?php
      }
      ?>
     </div>
   </div>

   <div class="col s6 m6">
    <div align="right">
         <?php 
      if ($nivel < 6) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i>Fase 6</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 6</a>
      </div>
      <?php
      }
      ?>
       <br>
       <br>
       <br>
       <br>
       <?php 
      if ($nivel < 7) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i>Fase 7</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 7</a>
      </div>
      <?php
      }
      ?>
       <br>
       <br>
       <br>
       <br>
       <?php 
      if ($nivel < 8) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i>Fase 8</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 8</a>
      </div>
      <?php
      }
      ?>
       <br>
       <br>
       <br>
       <br>
        <?php 
      if ($nivel < 9) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i>Fase 9</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 9</a>
      </div>
      <?php
      }
      ?>
       <br>
       <br>
       <br>
       <br>
        <?php 
      if ($nivel < 10) {
      ?>
      <div class="btn-large red">
      <a href="#" style="color: black"><i class="material-icons left">lock_outline</i>Fase 10</a>
      </div>
      <?php
      }else{ 
      ?>
      <div class="btn-large">
      <a href="#" style="color: black"><i class="material-icons left">lock_open</i>Fase 10</a>
      </div>
      <?php
      }
      ?>
     </div>
   </div>

 </div>
</div>

</map>

<?php
}
}
?>
</body>
</html>