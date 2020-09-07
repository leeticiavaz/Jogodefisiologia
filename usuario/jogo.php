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



<map name="rotas"> 
       
      <?php 
      if ($nivel == 1) {
      ?>
      <img src="../back/back1.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <?php
      } 
      if ($nivel == 2) {
      ?>
      <img src="../back/back2.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <?php
      }
      if ($nivel == 3) {
      ?>
      <img src="../back/back3.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="230, 286, 401, 355" href="../fases/fase1/nivel1.php" />
      <?php
      }
    
      if ($nivel == 4) {
      ?>
      <img src="../back/back4.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="230, 286, 401, 355" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="337, 382, 509, 459" href="../fases/fase1/nivel1.php" />
      <?php
      }
       
      if ($nivel == 5) {
      ?>
      <img src="../back/back5.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="230, 286, 401, 355" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="337, 382, 509, 459" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="352, 506, 540, 586" href="../fases/fase1/nivel1.php" />
      <?php
      }
      
      if ($nivel == 6) {
      ?>
      <img src="../back/back6.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="230, 286, 401, 355" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="337, 382, 509, 459" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="352, 506, 540, 586" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="666, 511, 839, 581" href="../fases/fase1/nivel1.php" />
      <?php
      }
        
      if ($nivel == 7) {
      ?>
      <img src="../back/back7.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="230, 286, 401, 355" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="337, 382, 509, 459" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="352, 506, 540, 586" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="666, 511, 839, 581" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="661, 381, 840, 461" href="../fases/fase1/nivel1.php" />
      <?php
      }
         
      if ($nivel == 8) {
      ?>
      <img src="../back/back8.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="230, 286, 401, 355" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="337, 382, 509, 459" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="352, 506, 540, 586" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="666, 511, 839, 581" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="661, 381, 840, 461" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="703, 281, 878, 361" href="../fases/fase1/nivel1.php" />
      <?php
      }

      if ($nivel == 9) {
      ?>
      <img src="../back/back9.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="230, 286, 401, 355" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="337, 382, 509, 459" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="352, 506, 540, 586" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="666, 511, 839, 581" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="661, 381, 840, 461" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="703, 281, 878, 361" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="840, 192, 1015, 267" href="../fases/fase1/nivel1.php" />
      <?php
      }

      if ($nivel == 10) {
      ?>
      <img src="../back/back10.jpg" id="back" usemap="#rotas">
      <area shape="rect" alt="botao1" coords="93, 53, 274, 133" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="163, 162, 331, 236" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="230, 286, 401, 355" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="337, 382, 509, 459" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="352, 506, 540, 586" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="666, 511, 839, 581" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="661, 381, 840, 461" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="703, 281, 878, 361" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="840, 192, 1015, 267" href="../fases/fase1/nivel1.php" />
      <area shape="rect" alt="botao1" coords="1022, 117, 1200, 193" href="../fases/fase1/nivel1.php" />
      <?php
      }
      ?>
   



</map>

<?php
}
}
?>
</body>
</html>