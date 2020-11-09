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
    <style type="text/css">
       #bot:hover{
           top: -5px;
       }
    </style>
</head>
<!--
<body style="background-image: url('../back2.jpg'); background-repeat: no-repeat; background-size: 100%;">
-->
<body style="background-image: url('../back/background.jpg');">  
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
      
      <span class="white-text name" style="font-family: arial; font-weight: bold; font-size: 20px;">
      <blockquote><?php echo "$nome" ?> </blockquote>
      </span>
      <span class="white-text email" style="font-size: 17px;">
      <?php echo "$email" ?></span>
      <a href="../actions/sair.php" style="color: white;">Sair</a>
      </div>
   </li>
</ul>

<br>
<br>
<div class="row">
<div class=" col s4 push-m3">

<?php

if ($nivel == 1) {
?>


<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 1</a>
</div>

<?php
} if ($nivel > 1) {
?>

<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 1</a>
</div>
<?php 
}

if ($nivel == 2) {
?>

<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 2</a>
</div>

<?php
} if ($nivel > 2) {
?>

<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 2</a>
</div>

<?php 
} if ($nivel < 2) {
?>

<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
</div>
<?php
} if ($nivel == 3) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 3</a>
</div>
<?php
} if ($nivel > 3) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 3</a>
</div>
<?php
} if ($nivel < 3) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
</div>
<?php
} if ($nivel == 4) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 4</a>
</div>
<?php
} if ($nivel > 4) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 4</a>
</div>
<?php
} if ($nivel < 4) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
</div>
<?php
} if ($nivel == 5) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 5</a>
</div>
<?php
} if ($nivel > 5) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 5</a>
</div>
<?php
} if ($nivel < 5) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
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
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 6</a>
</div>

<?php
} if ($nivel > 6) {
?>

<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 6</a>
</div>

<?php 
} if ($nivel < 6) {
?>

<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
</div>
<?php
} if ($nivel == 7) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 7</a>
</div>
<?php
} if ($nivel > 7) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 7</a>
</div>
<?php
} if ($nivel < 7) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
</div>
<?php
} if ($nivel == 8) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 8</a>
</div>
<?php
} if ($nivel > 8) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 8</a>
</div>
<?php
} if ($nivel < 8) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
</div>
<?php
} if ($nivel == 9) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 9</a>
</div>
<?php
} if ($nivel > 9) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 9</a>
</div>
<?php
} if ($nivel < 9) {
?>
<div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
</div>
<?php
} if ($nivel == 10) {
?>
    <div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: green; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> 10</a>
</div>
<?php
} if ($nivel < 10) {
?>
    <div class="section">
    <a id="bot" href="../fases/fase1/nivel1.php" class="waves-effect waves-light btn" style="background-color: red; color: white;  width: 15%; height: 60px; font-family: arial; font-size: 15px; border-radius: 8px;"> <i class="Large material-icons">lock</i></a>
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
</body>
</html>