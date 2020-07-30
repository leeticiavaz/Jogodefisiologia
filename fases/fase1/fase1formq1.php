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
$pontuacao = 5;
$email = $_SESSION['email'];


if ($resultado == '2') {
	$pontuacao = 10;
}



$sql = "UPDATE cadastro SET pontuacao = $pontuacao WHERE email = '$email'";
$result = mysqli_query($connect, $sql);


if ($resultado == '2') {
?>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Resposta correta!</h4>
      <p>Parabéns, você acertou essa questão. Clique em ok para avançar para a próxima questão!</p>
    </div>
    <div class="modal-footer">
      <a href="nivel2.php" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
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
?>

<script type="text/javascript">
	$(document).ready(function(){
	$('.modal').modal();
    $('#modal1').modal('open');
  });
</script>

</body>
</html>