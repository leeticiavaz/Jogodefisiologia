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
  $pontuacao = $linha['pontuacao'];
  $fase = $linha['fase'];
  $nivel_jogador = $linha['nivel'];
  $fase_jogador = $linha['fase'];
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
  $sql = "UPDATE cadastro SET fase = $fase, pontuacao = $pontuacao WHERE email = '$email'";
  $result = mysqli_query($connect, $sql);
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
}else{
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta errada!</h4>
      <p>Tente novamente.<br>Em caso de dúvida acesse a opção ajuda!</p>
    </div>
    <div class="modal-footer">
      <a href="nivel1.php" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>
<?php
}
}else{
  if ($resultado == $corretaVouf) {
  $fase = $fase + 1;
  $pontuacao = $pontuacao + 10;
  $sql = "UPDATE cadastro SET fase = $fase, pontuacao = $pontuacao WHERE email = '$email'";
  $result = mysqli_query($connect, $sql);
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
}else{
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta errada!</h4>
      <p>Tente novamente.<br>Em caso de dúvida acesse a opção ajuda!</p>
    </div>
    <div class="modal-footer">
      <a href="nivel1.php" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
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