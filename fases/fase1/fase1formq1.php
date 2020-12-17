<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
	<meta charset="utf-8">
    <script type="text/javascript" src="../../jquery-3.4.1.js"></script>
	<script src="../../materialize/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../materialize/css/materialize.min.css">
</head>
<body>
<?php

session_start();

require "../../bd.php";

$resultado = $_POST['q1'];
$email = $_SESSION['email'];
$correta = $_POST['correta'];
$tentativa = $_POST['tentativa'];

$sql1 = "SELECT * FROM cadastro WHERE email = '$email'";
$result1 = mysqli_query($connect, $sql1);
while ($linha = mysqli_fetch_array($result1)) {
  $fase = $linha['fase'];
  $nivel_jogador = $linha['nivel'];
  $fase_jogador = $linha['fase'];
  $string = strval($nivel_jogador);
  $pontuacao = $linha['p'.$string];
  if ($pontuacao > 100) {
    $pontuacao = 0;
  }
}





$sql1 = "SELECT * FROM questoes WHERE nivel = '$nivel_jogador' AND fase = '$fase_jogador'";
$result1 = mysqli_query($connect, $sql1);
while ($linha = mysqli_fetch_array($result1)) {
  $nivel_questao = $linha['nivel'];
  $fase_questao = $linha['fase'];
  $texto = $linha['texto'];
  $opcao1 = $linha['opcao1'];
  $opcao2 = $linha['opcao2'];
  $opcao3 = $linha['opcao3'];
  $opcao4 = $linha['opcao4'];
  $opcao5 = $linha['opcao5'];
  $correta = $linha['correta'];
  $texto_ajuda = $linha['textoajuda'];
  $categoria = $linha['categoria'];
  $corretaVouf = $linha['corretaVouf'];
}

if ($categoria == 'quest') {
  if ($resultado == $correta) {

  $fase = $fase + 1;

  if ($tentativa == 1) {
    $pontuacao = $pontuacao + 10;
  }else{
    $pontuacao = $pontuacao + 5;
  }
  
  
  
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para avançar para a próxima questão!</p>
    </div>
    <div class="modal-footer">
      <a href="nivel1.php" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>
<?php

switch ($nivel_jogador) {
    case 1:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p1 = $pontuacao WHERE email = '$email'";
      break;
    
    case 2:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p2 = $pontuacao WHERE email = '$email'";
      break;
    case 3:
     $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p3 = $pontuacao WHERE email = '$email'";
      break;
    case 4:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p4 = $pontuacao WHERE email = '$email'";
      break;
    case 5:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p5 = $pontuacao WHERE email = '$email'";
      break;
    case 6:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p6 = $pontuacao WHERE email = '$email'";
      break;
    
    case 7:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p7 = $pontuacao WHERE email = '$email'";
      break;
    case 8:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p8 = $pontuacao WHERE email = '$email'";
      break;
    case 9:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p9 = $pontuacao WHERE email = '$email'";
      break;
    case 10:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p10 = $pontuacao WHERE email = '$email'";
      break;
  }
  $result = mysqli_query($connect, $sql);

if ($fase > 10) {
  $nivel_jogador = $nivel_jogador + 1;
  $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = 1 WHERE email = '$email'";
  $result = mysqli_query($connect, $sql);
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para avançar para o próximo nível!</p>
    </div>
    <div class="modal-footer">
      <a href="nivel1.php" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>
<?php
}
}else{
$fase = $fase + 1;
$sql = "UPDATE cadastro SET fase = $fase WHERE email = '$email'";
$result = mysqli_query($connect, $sql);
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta errada!</h4>
      <p>Infelizmente você errou essa questão!</p>
    </div>
    <div class="modal-footer">
      <a href="nivel1.php" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>
<?php
if ($fase > 10) {
  $nivel_jogador = $nivel_jogador + 1;
  $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = 1 WHERE email = '$email'";
  $result = mysqli_query($connect, $sql);
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta errada!</h4>
      <p>Infelizmente você errou essa questão! Clique em Ok para avançar de nível</p>
    </div>
    <div class="modal-footer">
      <a href="nivel1.php" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>
<?php
}
}
}else{
  if ($resultado == $correta) {

  $fase = $fase + 1;

  if ($tentativa == 1) {
       $pontuacao = $pontuacao + 10; 
    }else{
      $pontuacao = $pontuacao + 5; 
    }
 
  
  
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para avançar para a próxima questão!</p>
    </div>
    <div class="modal-footer">
      <a href="nivel1.php" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>
<?php

switch ($nivel_jogador) {
    case 1:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p1 = $pontuacao WHERE email = '$email'";
    break;
    case 2:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p2 = $pontuacao WHERE email = '$email'";
      break;
    case 3:
     $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p3 = $pontuacao WHERE email = '$email'";
      break;
    case 4:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p4 = $pontuacao WHERE email = '$email'";
      break;
    case 5:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p5 = $pontuacao WHERE email = '$email'";
      break;
    case 6:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p6 = $pontuacao WHERE email = '$email'";
      break;
    
    case 7:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p7 = $pontuacao WHERE email = '$email'";
      break;
    case 8:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p8 = $pontuacao WHERE email = '$email'";
      break;
    case 9:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p9 = $pontuacao WHERE email = '$email'";
      break;
    case 10:
      $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = $fase, p10 = $pontuacao WHERE email = '$email'";
      break;
  }
  $result = mysqli_query($connect, $sql);
  if ($fase > 10) {
  $nivel_jogador = $nivel_jogador + 1;
  $sql = "UPDATE cadastro SET nivel = $nivel_jogador, fase = 1 WHERE email = '$email'";
  $result = mysqli_query($connect, $sql);
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para avançar para o próximo nível!</p>
    </div>
    <div class="modal-footer">
      <a href="nivel1.php" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>
<?php
}
}
}

?>


<script type="text/javascript">
	$(document).ready(function(){
	$('.modal').modal();
    $('#modal1').modal('open');
  });
</script>

</body>
</html>