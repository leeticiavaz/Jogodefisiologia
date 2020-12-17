<?php
session_start();
require "../../bd.php";

$email = $_SESSION['email'];

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$result = mysqli_query($connect, $sql);


while ($linha = mysqli_fetch_array($result)){
 $nivel_jogador = $linha['recnivel'];
 $fase_jogador = $linha['recfase'];
 $string = "p".strval($nivel_jogador);
 $pontuacao_jogador = $linha[$string];

}

if (!isset($email)) {
	echo "<script> window.location.href='../../index.html'; </script>";
}

$tentativa = $_POST['tentativa'];

if ($tentativa == 1) {
	$pontuacao = 10 + $pontuacao_jogador;
}else{
	$pontuacao = 5 + $pontuacao_jogador;
}

$fase_up = $fase_jogador + 1;

$sql="UPDATE cadastro SET recfase = $fase_up, $string = $pontuacao WHERE email = '$email'";
mysqli_query($connect, $sql);
?>

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

<body bgcolor="#21D6F7">
<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">

    	<a href="#" class="brand-logo">Nivel <?php echo $nivel_jogador; ?></a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li style="font-size: 200%"><a href="../../usuario/jogo.php">Página inicial</a></li>
      </ul>
    </div>
</nav>

<div id="modal5" class="modal">
    <div class="modal-content">
      <h4>Parabéns</h4>
      <p>Você acertou essa questão, clique em ok para ir para a próxima fase!</p>
    </div>
    <div class="modal-footer">
      <a href="recform.php?rec=<?php echo $nivel_jogador; ?>" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>

<script type="text/javascript">
	$(document).ready(function(){
    $('.modal').modal();
    $('#modal5').modal('open');
  });
</script>
</body>
</html>