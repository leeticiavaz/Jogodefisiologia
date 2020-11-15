<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário</title>
	<meta charset="utf-8">
  <script type= "text/javascript" src= "../jquery-3.4.1.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $('.modal').modal();
    $('.modal').modal('open');
  });
</script>
</head>
<body>
<?php
require "../bd.php";

$nome = $_POST['nome'];
$nick = $_POST['nick'];
$dataNasc = $_POST['dataNasc'];
$curso = $_POST['curso'];
$matricula = $_POST['matricula'];
$semestre = $_POST['semestre'];
$ano = $_POST['ano'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = 1;
$fase = $_POST['fase'];
$recnivel = 0;
$recfase = 1;


$avatar = $_POST['avatar'];


$query_select = "SELECT email FROM cadastro WHERE email = '$email'";
$select = mysqli_query($connect, $query_select);
$dados = mysqli_fetch_array($select);
if(mysqli_num_rows($select) > 0){
 
        ?>

<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Cadastro de usuário</h4>
      <p>Esse usuário já existe, por favor verique suas informações de email</p>
    </div>
    <div class="modal-footer" style="color: white">
        <a href="../usuario/cadastro.php" class="modal-close waves-effect waves-green btn red">Confirmar</a>
    </div>
  </div>

  <?php
        die;
    }else{
        $query = "INSERT INTO cadastro (nome, nick, dataNasc,curso,matricula,semestre,ano,email,senha, avatar, nivel, fase, recnivel, recfase) VALUES ('$nome', '$nick', '$dataNasc','$curso','$matricula','$semestre','$ano','$email','$senha','$avatar', $nivel, $fase, $recnivel, $recfase)";
        $insert = mysqli_query($connect,$query);

    if($insert){
      ?>
<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Cadastro de usuário</h4>
      <p>Usuário cadastrado com sucesso!</p>
    </div>
    <div class="modal-footer" style="color: white">
        <a href="../usuario/login.php" class="modal-close waves-effect waves-green btn green">Confirmar</a>
    </div>
  </div>
  <?php
        }else{
        ?>

<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Cadastro de usuário</h4>
      <p>Erro ao cadastrar usuário: <?php echo mysqli_errno($connect); ?></p>
    </div>
    <div class="modal-footer" style="color: white">
        <a href="../usuario/cadastro.php" class="modal-close waves-effect waves-green btn red">Confirmar</a>
    </div>
  </div>
  <?php
        }
    }
?>

</body>
</html>