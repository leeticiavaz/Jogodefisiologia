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

$sql1 = "SELECT * FROM cadastro WHERE email = '$email'";
$result1 = mysqli_query($connect, $sql1);
while ($linha = mysqli_fetch_array($result1)) {
  $fase = $linha['recfase'];
  $nivel_jogador = $linha['recnivel'];
  $fase_jogador = $linha['recfase'];
  $string = strval($nivel_jogador);
  $pontuacao = $linha['p'.$string];
  if ($pontuacao > 100) {
    $pontuacao = 0;
  }

$somapont = $linha['p1'] + $linha['p2'] + $linha['p3'] + $linha['p4'] + $linha['p5'] + $linha['p6'] + $linha['p7'] + $linha['p8'] + $linha['p9'] + $linha['p10'];

$sql = "UPDATE cadastro SET pontuacao = $somapont WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

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
  $pontuacao = $pontuacao + 10;
  
if ($fase != 11) {

?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para avançar para a próxima questão!</p>
    </div>
    <div class="modal-footer">
      <a href="recform.php?rec=<?php echo $nivel_jogador; ?>" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>
<?php
}

switch ($nivel_jogador) {
    case 1:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p1 = $pontuacao WHERE email = '$email'";
      break;
    
    case 2:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p2 = $pontuacao WHERE email = '$email'";
      break;
    case 3:
     $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p3 = $pontuacao WHERE email = '$email'";
      break;
    case 4:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p4 = $pontuacao WHERE email = '$email'";
      break;
    case 5:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p5 = $pontuacao WHERE email = '$email'";
      break;
    case 6:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p6 = $pontuacao WHERE email = '$email'";
      break;
    
    case 7:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p7 = $pontuacao WHERE email = '$email'";
      break;
    case 8:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p8 = $pontuacao WHERE email = '$email'";
      break;
    case 9:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p9 = $pontuacao WHERE email = '$email'";
      break;
    case 10:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p10 = $pontuacao WHERE email = '$email'";
      break;
  }
  $result = mysqli_query($connect, $sql);

if ($fase > 10) {
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para voltar ao menu principal!</p>
    </div>
    <div class="modal-footer">
      <a href="recindex.php" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>
<?php
}
}else{
  $fase = $fase + 1;
$sql = "UPDATE cadastro SET recfase = $fase WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

if ($fase > 10) {
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta errada!</h4>
      <p>Infelizmente você errou essa questão! Clique em Ok para voltar ao menu principal</p>
    </div>
    <div class="modal-footer">
      <a href="recindex.php" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>
<?php
}

?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta errada!</h4>
      <p>Infelizmente você errou essa questão!</p>
    </div>
    <div class="modal-footer">
      <a href="recform.php?rec=<?php echo $nivel_jogador; ?>" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>
<?php

}
}else{
  if ($resultado == $corretaVouf) {

  $fase = $fase + 1;
  $pontuacao = $pontuacao + 10;
  
if ($fase != 11) {

?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para avançar para a próxima questão!</p>
    </div>
    <div class="modal-footer">
      <a href="recform.php?rec=<?php echo $nivel_jogador; ?>" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>
<?php
}

switch ($nivel_jogador) {
    case 1:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p1 = $pontuacao WHERE email = '$email'";
    break;
    case 2:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p2 = $pontuacao WHERE email = '$email'";
      break;
    case 3:
     $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p3 = $pontuacao WHERE email = '$email'";
      break;
    case 4:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p4 = $pontuacao WHERE email = '$email'";
      break;
    case 5:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p5 = $pontuacao WHERE email = '$email'";
      break;
    case 6:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p6 = $pontuacao WHERE email = '$email'";
      break;
    
    case 7:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p7 = $pontuacao WHERE email = '$email'";
      break;
    case 8:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p8 = $pontuacao WHERE email = '$email'";
      break;
    case 9:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p9 = $pontuacao WHERE email = '$email'";
      break;
    case 10:
      $sql = "UPDATE cadastro SET recnivel = $nivel_jogador, recfase = $fase, p10 = $pontuacao WHERE email = '$email'";
      break;
  }
  $result = mysqli_query($connect, $sql);

  if ($fase > 10) {
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para voltar ao menu principal!</p>
    </div>
    <div class="modal-footer">
      <a href="recindex.php" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>
<?php
}
}else{
$fase = $fase + 1;
$sql = "UPDATE cadastro SET recfase = $fase WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

if ($fase > 10) {
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta errada!</h4>
      <p>Infelizmente você errou essa questão! Clique em Ok para voltar ao menu principal</p>
    </div>
    <div class="modal-footer">
      <a href="recindex.php" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>
<?php
}

?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta errada!</h4>
      <p>Infelizmente você errou essa questão!</p>
    </div>
    <div class="modal-footer">
      <a href="recform.php?rec=<?php echo $nivel_jogador; ?>" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>
<?php

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