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

$fase_up = $fase_jogador + 1;
$pontuacao = $pontuacao_jogador + 10;
$nivel_up = $nivel_jogador + 1;

if ($nivel_jogador == 1 and $fase_up == 9) {
	$sql="UPDATE cadastro SET recfase = 1, $string = $pontuacao, recnivel = 1 WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: ../../usuario/jogo.php");
die;
}

if ($nivel_jogador == 3 and $fase_up == 9) {
	$sql="UPDATE cadastro SET recfase = 1, $string = $pontuacao, recnivel = 1 WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: ../../usuario/jogo.php");
die;
}

$sql="UPDATE cadastro SET recfase = 1, $string = $pontuacao, recnivel = $nivel_up  WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: ../../usuario/jogo.php");

?>