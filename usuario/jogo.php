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
<body style="background-image: url('../back2.jpg'); background-repeat: no-repeat; background-size: 100%;">
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
<br>
<br>
<div class="container">
  <div class="row">
     <div align="left">
        <div class="btn-large">
         <a href="#">Fase 1</a>
       </div>
       <br>
       <br>
       <br>
       <br>
       <br>
       <div class=" col s12 m6 push-m1">
         <div class="btn-large">
         <a href="#">Fase 2</a>
         </div>
       <br>
       <br>
       <br>
       <br>
           <div class=" col s12 m6 push-m1">
           <div class="btn-large" >
           <a href="#">Fase 3</a>
           </div>
           </div>
        </div>
       <br>
       <br>
       
       <div class="btn-large">
         <a href="#">Fase 4</a>
       </div>
       
       <br>
       <br>
       <div class="btn-large">
         <a href="#">Fase 5</a>
       </div>
     </div>
   </div>
</div>

<?php
}
}
?>
</body>
</html>