<!DOCTYPE html>
<html>
<head>
  <title>HipoGame</title>
  <meta charset="utf-8">
</head>
<body>
<?php
require "../bd.php";
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";

if (isset($_POST['sub'])) {
  $verifica = mysqli_query($connect, $sql);
    if (mysqli_num_rows($verifica)>0){
        $array = mysqli_fetch_array($verifica);

            $nome = $array['nome'];
            
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            

            header("Location: ../usuario/jogo.php");
  
        
      }else{
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        echo"<script> alert('Email e/ou senha incorretos');window.location
        .href='../usuario/login.php';</script>";
        die;
      }
}

?>
</body>
</html>