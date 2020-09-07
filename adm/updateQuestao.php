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


$id = $_GET['id'];

$nivel = $_POST['nivel'];
$fase = $_POST['fase'];

if (isset($_POST['buttonQuest'])) {
$texto = $_POST['texto'];
$correta = $_POST['correta'];
$opcao1 = $_POST['opcao1'];
$opcao2 = $_POST['opcao2'];
$opcao3 = $_POST['opcao3'];
$opcao4 = $_POST['opcao4'];
$opcao5 = $_POST['opcao5'];
$ajuda = $_POST['ajuda'];
}

if (isset($_POST['buttonVouf'])) {
$texto1 = $_POST['texto1'];
$ajuda1 = $_POST['ajuda1'];
$correta1 = $_POST['correta1'];
}


$sql1 = "SELECT categoria FROM questoes WHERE id = '$id'";
$query1 = mysqli_query($connect,$sql1);
$dados = mysqli_fetch_array($query1);

if ($dados['categoria'] == 'quest') {
  

$sql = "UPDATE questoes SET nivel=$nivel, fase=$fase, texto='$texto', opcao1='$opcao1', opcao2='$opcao2',opcao3='$opcao3', opcao4='$opcao4', opcao5='$opcao5', textoajuda='$ajuda', correta='$correta' WHERE id = '$id'";

}

if ($dados['categoria'] == 'vouf') {
  

$sql = "UPDATE questoes SET nivel=$nivel, fase=$fase, texto='$texto1', textoajuda='$ajuda1', corretaVouf='$correta1' WHERE id = '$id'";

}

if (mysqli_query($connect,$sql)){
?>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Atualização de questionário</h4>
      <p>O questionário foi atualizado com sucesso!</p>
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
      <h4>Atualização de Questionário</h4>
      <p>Erro ao atualizar questionário!</p>
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