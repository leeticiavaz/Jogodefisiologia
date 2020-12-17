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

$sql="UPDATE cadastro SET fase = $fase_up, $string = $pontuacao WHERE email = '$email'";
mysqli_query($connect, $sql);

header("Location: nivel1.php");

?>