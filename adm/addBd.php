<!DOCTYPE html>
<html>
<head>
	<title>Questões</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="../jquery-3.4.1.js"></script>
	<script src="../materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<?php

include "../bd.php";

$categoria = $_POST['categoria'];

if (isset($_POST['buttonQuest'])) {
$nivel = $_POST['nivel'];
$fase = $_POST['fase'];
$texto = $_POST['texto'];
$correta = $_POST['correta'];
$opcao1 = $_POST['opcao1'];
$opcao2 = $_POST['opcao2'];
$opcao3 = $_POST['opcao3'];
$opcao4 = $_POST['opcao4'];
$opcao5 = $_POST['opcao5'];
$ajuda = $_POST['ajuda'];

if (isset($_POST['fototext'])) {
  $extensao = strtolower(substr($_FILES['fotoquest']['name'], -4));
  if ($extensao) {
  $novo_nome = md5(time()).".".$extensao;
  $diretorio = "fotos/";
  move_uploaded_file($_FILES['fotoquest']['tmp_name'], $diretorio.$novo_nome);
  }else{
  $novo_nome = "empty";
  }
  
}


}


if (isset($_POST['buttonVouf'])) {
$nivel1 = $_POST['nivel1'];
$fase1 = $_POST['fase1'];
$texto1 = $_POST['texto1'];
$ajuda1 = $_POST['ajuda1'];
$correta1 = $_POST['correta1'];

if (isset($_POST['fototextvouf'])) {
  $extensao = strtolower(substr($_FILES['fotovouf']['name'], -4));
  if ($extensao) {
  $novo_nome = md5(time()).".".$extensao;
  $diretorio = "fotos/";
  move_uploaded_file($_FILES['fotovouf']['tmp_name'], $diretorio.$novo_nome);
  }else{
  $novo_nome = "empty";
  }
  
}

}


mysqli_set_charset($connect, "UTF-8");

if ($categoria == 'quest') {

$sql = "INSERT INTO questoes (nivel, fase, texto, opcao1, opcao2, opcao3, opcao4, opcao5, categoria, textoajuda, foto, correta) VALUES ($nivel, $fase, '$texto', '$opcao1', '$opcao2', '$opcao3', '$opcao4', '$opcao5', '$categoria', '$ajuda', '$novo_nome', $correta) ";

}

if ($categoria == 'vouf') {
  $sql = "INSERT INTO questoes (nivel, fase, texto, categoria, textoajuda, foto, corretaVouf) VALUES ($nivel1, $fase1, '$texto1',  '$categoria', '$ajuda1', '$novo_nome', '$correta1') ";

}


$query = mysqli_query($connect,$sql);



if ($query){
?>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Cadastro de questionário</h4>
      <p>O questionário foi cadastrado com sucesso!</p>
    </div>
    <div class="modal-footer">
      <a href="index.php" class="modal-close waves-effect waves-green btn-flat #4caf50 green"> <div style="color: white">Ok</div></a>
    </div>
  </div>
<?php
}else{
?>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Cadastro de Questionário</h4>
      <p>Erro ao cadastrar questionário!</p>
    </div>
    <div class="modal-footer">
      <a href="index.php" class="modal-close waves-effect waves-green btn-flat #4caf50 red"><div style="color: white">Ok</div></a>
    </div>
  </div>
<?php
}
?>

<script type="text/javascript">
	$(document).ready(function(){
    $('.modal').modal();
    $('.modal').modal('open');
  });
</script>
</body>
</html>