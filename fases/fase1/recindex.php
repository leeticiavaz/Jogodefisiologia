<?php
session_start();

require "../../bd.php";

$email = $_SESSION['email'];

$sql = "UPDATE cadastro SET recnivel = 0, recfase = 1 WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

echo "<script> window.location.href='../../usuario/jogo.php'; </script>";
?>