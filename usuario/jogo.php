<!DOCTYPE html>
<html>
<head>
	<title>HipoGame</title>
	<meta charset="utf-8">
    <script type="text/javascript" src="../jquery-3.4.1.js"></script>
	<script src="../materialize/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="icon" href="../fav.png" />
    <style type="text/css">

      body{
        background-image: url('../back/background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }

       @keyframes nivel{
        0%{
          border-radius: 14px;
        }
        50%{
          border-radius: 50px;
        }
        100%{
          border-radius: 14px;
        }
       }

       #bot:hover{
        top: -5px;
       }
       .textPont{
        text-align: center;
        vertical-align: middle;
       }
       .pont{
        background-color: white;
        width: 220px;
        height: 50px;
        margin-left: 80%;
        border:2px;
        border-style: solid;
        animation: border 5s infinite;
        border-radius: 8px;
        position: absolute;
        top: 12%;
       }
       .pont:hover{
        border-color: green;
        top: 11%;
       }

       #niveis{
        margin-top: 5%
       }

       @keyframes border {
          0% {
            border-color: blue;
            border-radius: 8px;
          }
          25%{
            border-color: green;
            border-radius: 15px;
            
          }
          50%{
            border-color: red;
            border-radius: 20px;
           
          }
          75%{
            border-color: brown;
            border-radius: 30px;
            
          }
        }


    </style>

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

$sql = "UPDATE cadastro SET recfase = 1 WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

$sql = "SELECT * FROM cadastro WHERE email='$email'";
$foto = mysqli_query($connect, $sql);
if(mysqli_num_rows($foto) > 0){
while ($dados = mysqli_fetch_array($foto)) {



$nivel = $dados['nivel'];

$pontuacao = $dados['p1'] + $dados['p2'] + $dados['p3'] + $dados['p4'] + $dados['p5'] + $dados['p6'] + $dados['p7'] + $dados['p8'] + $dados['p9'] + $dados['p10'];

$sql = "UPDATE cadastro SET recfase = 1, pontuacao = $pontuacao WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

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
      
      <span class="white-text name" style="font-family: arial; font-weight: bold; font-size: 20px;">
      <blockquote><?php echo $dados['nick']; ?> </blockquote>
      </span>
      <span class="white-text email" style="font-size: 17px;">
      <?php echo "$email" ?></span>
      <a href="../actions/sair.php" style="color: white;">Sair</a>
      </div>
   </li>
</ul>

<div class="pont"><p class="textPont">Sua pontuação: <b> <?php echo $pontuacao; ?> </b></p></div>

<br>
<br>
<div class="row" id="niveis">
<div class=" col s4 push-m3">

<?php

if ($nivel == 1) {
?>


<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite; "> 1</a>
</div>

<?php
} if ($nivel > 1) {
?>

<div class="section">
    <button id="bot" data-target="modal1" class="waves-effect waves-light btn modal-trigger" href="#modal1" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 1</button>
</div>
<?php 
}

if ($nivel == 2) {
?>

<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;"> 2</a>
</div>

<?php
} if ($nivel > 2) {
?>

<div class="section">
    <button data-target="modal2" id="bot" class="waves-effect waves-light btn modal-trigger" href="#modal2" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 2</button>
</div>

<?php 
} if ($nivel < 2) {
?>

<div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
} if ($nivel == 3) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;"> 3</a>
</div>
<?php
} if ($nivel > 3) {
?>
<div class="section">
    <button id="bot" data-target="modal3" class="waves-effect waves-light btn modal-trigger" href="#modal3" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 3</button>
</div>
<?php
} if ($nivel < 3) {
?>
<div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
} if ($nivel == 4) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;">4</a>
</div>
<?php
} if ($nivel > 4) {
?>
<div class="section">
    <button id="bot" data-target="modal4" class="waves-effect waves-light btn modal-trigger" href="#modal4" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 4</button>
</div>
<?php
} if ($nivel < 4) {
?>
<div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
} if ($nivel == 5) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;"> 5</a>
</div>
<?php
} if ($nivel > 5) {
?>
<div class="section">
    <button id="bot" data-target="modal5" class="waves-effect waves-light btn modal-trigger" href="#modal5" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 5</button>
</div>
<?php
} if ($nivel < 5) {
?>
<div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
}
?>
</div>

<div class="col s4 push-m4">

<?php 

if ($nivel == 6) {
?>

<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;"> 6</a>
</div>

<?php
} if ($nivel > 6) {
?>

<div class="section">
    <button id="bot" data-target="modal6" class="waves-effect waves-light btn modal-trigger" href="#modal6" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 6</button>
</div>

<?php 
} if ($nivel < 6) {
?>

<div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
} if ($nivel == 7) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;"> 7</a>
</div>
<?php
} if ($nivel > 7) {
?>
<div class="section">
    <button id="bot" data-target="modal7" class="waves-effect waves-light btn modal-trigger" href="#modal7" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 7</button>
</div>
<?php
} if ($nivel < 7) {
?>
<div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
} if ($nivel == 8) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;"> 8</a>
</div>
<?php
} if ($nivel > 8) {

?>
<div class="section">
    <button id="bot" data-target="modal8" class="waves-effect waves-light btn modal-trigger" href="#modal8" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 8</button>
</div>
<?php
} if ($nivel < 8) {
?>
<div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
} if ($nivel == 9) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;"> 9</a>
</div>
<?php
} if ($nivel > 9) {
 
?>
<div class="section">
    <button id="bot" data-target="modal9" class="waves-effect waves-light btn modal-trigger" href="#modal9" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 9</button>
</div>
<?php
} if ($nivel < 9) {
?>
<div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
} if ($nivel == 10) {
?>
    <div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php?rec=10" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px; animation: nivel 4s infinite;"> 10</a>
</div>
<?php
} if ($nivel < 10) {
?>
    <div class="section">
    <button id="bot" data-target="modal11" href="#modal11" class="waves-effect waves-light btn modal-trigger" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></button>
</div>
<?php
} if ($nivel > 10) {
 
?>
<div class="section">
    <button id="bot" data-target="modal12" class="waves-effect waves-light btn modal-trigger" href="#modal12" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 10</button>
</div>
<?php
} 
?>

</div>
</div>




<?php
}
}

?>

<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=1" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>


<!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=2" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal3" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=3" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>

<!-- Modal Structure -->
  <div id="modal4" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=4" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>

<!-- Modal Structure -->
  <div id="modal5" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=5" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>


  <!-- Modal Structure -->
  <div id="modal6" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=6" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>


<!-- Modal Structure -->
  <div id="modal7" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=7" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal8" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=8" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>

<!-- Modal Structure -->
  <div id="modal9" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=9" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal12" class="modal">
    <div class="modal-content">
      <h4>Refazer Nível</h4>
      <p>Você deseja refazer esse nível? Caso você refaça, sua pontuação nesse nível começará a partir do zero.</p>
    </div>
    <div class="modal-footer">
      <a href="../fases/fase1/recform.php?rec=10" class="modal-close waves-effect waves-green btn-flat green white-text">Recomeçar Nível</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red white-text">Cancelar</a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal11" class="modal">
    <div class="modal-content">
      <h4>Nível bloqueado!</h4>
      <p>Esse nível ainda está bloqueado, complete os níveis anteriores para liberá-lo!</p>
    </div>
    <div class="modal-footer">
      <a href="#" class="modal-close waves-effect waves-green btn-flat green white-text">Ok</a>
    </div>
  </div>


<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
</script>

</body>
</html>