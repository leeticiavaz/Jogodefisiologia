<!DOCTYPE html>
<html>
<head>
	<title></title>
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

$sql = "DELETE FROM questoes WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);

if ($resultado) {
?>

<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Deletar Questionário</h4>
      <p>Questionário deletado com sucesso!</p>
    </div>
    <div class="modal-footer" style="color: white">
      	<a href="index.php" class="modal-close waves-effect waves-green btn green">Confirmar</a>
    </div>
  </div>

<?php
}else{
?>
	<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Questionário produto</h4>
      <p>Erro ao deletar questionário!</p>
    </div>
    <div class="modal-footer" style="color: white">
      	<a href="index.php" class="modal-close waves-effect waves-green btn red">Confirmar</a>
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