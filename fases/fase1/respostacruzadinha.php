<?php
session_start();
require "../../bd.php";
$email = $_SESSION['email'];

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$result = mysqli_query($connect, $sql);


while ($linha = mysqli_fetch_array($result)){
 $nivel_jogador = $linha['nivel'];
 $fase_jogador = $linha['fase'];
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
	$sql="UPDATE cadastro SET fase = 1, $string = $pontuacao, nivel = 2 WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: nivel1.php");
die;
}

if ($nivel_jogador == 3 and $fase_up == 9) {
	$sql="UPDATE cadastro SET fase = 1, $string = $pontuacao, nivel = 4 WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: nivel1.php");
die;
}

if ($nivel_jogador == 8 and $fase_up == 10) {
	$sql="UPDATE cadastro SET fase = 1, $string = $pontuacao, nivel = 9 WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: nivel1.php");
die;
}

if ($nivel_jogador == 10 and $fase_up == 11) {
	$sql="UPDATE cadastro SET fase = 1, $string = $pontuacao, nivel = 11 WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: ../../usuario/jogo.php");
die;
}

$sql="UPDATE cadastro SET fase = 1, $string = $pontuacao, nivel = $nivel_up WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: nivel1.php");

?>