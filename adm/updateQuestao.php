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

if (isset($_POST['fotoajudatext'])) {
  $extensaoajuda = strtolower(substr($_FILES['fotoajudaquest']['name'], -4));
  if ($extensaoajuda) {
  $novo_nomeajuda = "ajuda".md5(time()).".".$extensaoajuda;
  $diretorioajuda = "fotos/";
  move_uploaded_file($_FILES['fotoajudaquest']['tmp_name'], $diretorioajuda.$novo_nomeajuda);
  }else{
  $novo_nomeajuda = "empty";
  }
  
}

}

if (isset($_POST['buttonVouf'])) {
$texto1 = $_POST['texto1'];
$ajuda1 = $_POST['ajuda1'];
$correta1 = $_POST['correta1'];

if ($correta1 == 'verdadeiro') {
  $correta2 = 1;
}

if ($correta1 == 'falso') {
  $correta2 = 0;
}

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

if (isset($_POST['fotoajudatextvouf'])) {
  $extensaoajudavouf = strtolower(substr($_FILES['fotoajudavouf']['name'], -4));
  if ($extensaoajudavouf) {
  $novo_nomeajudavouf = "ajuda".md5(time()).".".$extensaoajudavouf;
  $diretorioajudavouf = "fotos/";
  move_uploaded_file($_FILES['fotoajudavouf']['tmp_name'], $diretorioajudavouf.$novo_nomeajudavouf);
  }else{
  $novo_nomeajudavouf = "empty";
  }
  
}

}


$sql1 = "SELECT categoria FROM questoes WHERE id = '$id'";
$query1 = mysqli_query($connect,$sql1);
$dados = mysqli_fetch_array($query1);

if ($dados['categoria'] == 'quest') {
  

$sql = "UPDATE questoes SET nivel=$nivel, fase=$fase, texto='$texto', opcao1='$opcao1', opcao2='$opcao2',opcao3='$opcao3', opcao4='$opcao4', opcao5='$opcao5', textoajuda='$ajuda', fotoajuda='$novo_nomeajuda', foto='$novo_nome', correta='$correta'  WHERE id = '$id'";

}

if ($dados['categoria'] == 'vouf') {
  

$sql = "UPDATE questoes SET nivel=$nivel, fase=$fase, texto='$texto1', textoajuda='$ajuda1', fotoajuda='$novo_nomeajudavouf', correta='$correta2', corretaVouf='$correta1', foto='$novo_nome' WHERE id = '$id'";

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