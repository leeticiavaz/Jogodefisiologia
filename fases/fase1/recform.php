<?php
session_start();
require "../../bd.php";
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>HipoGame</title>
  <meta charset="utf-8">
    <script type="text/javascript" src="../../jquery-3.4.1.js"></script>
  <script src="../../materialize/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../materialize/css/materialize.min.css">
    <link rel="icon" href="../../fav.png" />
    <style type="text/css">
      .zoom {
  overflow: hidden;
}

.zoom img {
  max-width: 100%;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.zoom:hover img {
  -moz-transform: scale(1.5);
  -webkit-transform: scale(1.5);
  transform: scale(1.5);
}
    </style>
</head>

<?php
$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$result1 = mysqli_query($connect, $sql);
while ($linha = mysqli_fetch_array($result1)){
 if (isset($_GET['rec'])) {
   $nivel_jogador = $_GET['rec'];
   $fase_jogador = $linha['recfase'];
 $rec = $_GET['rec'];
 $sql = "UPDATE cadastro SET recnivel = $rec WHERE email = '$email'";
 $result = mysqli_query($connect, $sql);
 if ($fase_jogador == 1) {
   $string = "p".strval($nivel_jogador);
   
   $sql2 = "UPDATE cadastro SET $string = 0  WHERE email = '$email'";
   $result2 = mysqli_query($connect, $sql2);
 }

if ($nivel_jogador == 2 and $fase_jogador == 6) {
   header("Location: r1rec.php");
 }
 if ($nivel_jogador == 2 and $fase_jogador == 8) {
   header("Location: r2rec.php");
 }

if ($nivel_jogador == 3 and $fase_jogador == 6) {
   header("Location: r3rec.php");
 }

if ($nivel_jogador == 4 and $fase_jogador == 2) {
   header("Location: r4rec.php");
 }

 if ($nivel_jogador == 6 and $fase_jogador == 3) {
   header("Location: r5rec.php");
 }

 if ($nivel_jogador == 1 and $fase_jogador == 8) {
   header("Location: cruzadinha1rec.php");
 }
 if ($nivel_jogador == 2 and $fase_jogador == 10) {
   header("Location: cruzadinha2.php?rec=1");
 }
 if ($nivel_jogador == 3 and $fase_jogador == 8) {
   header("Location: cruzadinha3.php?rec=1");
 }
 if ($nivel_jogador == 4 and $fase_jogador == 10) {
   header("Location: cruzadinha4.php?rec=1");
 }
 if ($nivel_jogador == 5 and $fase_jogador == 10) {
   header("Location: cruzadinha5.php?rec=1");
 }
 if ($nivel_jogador == 6 and $fase_jogador == 10) {
   header("Location: cruzadinha6.php?rec=1");
 }

 }
 
 $somapont = $linha['p1'] + $linha['p2'] + $linha['p3'] + $linha['p4'] + $linha['p5'] + $linha['p6'] + $linha['p7'] + $linha['p8'] + $linha['p9'] + $linha['p10'];

$sql = "UPDATE cadastro SET pontuacao = $somapont WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

}



?>


<body bgcolor="#21D6F7">
	<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">

    	<a href="#" class="brand-logo">Nivel <?php echo $nivel_jogador; ?></a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style="font-size: 20px" href="#modal3" class="modal-trigger">Página inicial</a></li>
      </ul>
    </div>
</nav>


<?php


$sql1 = "SELECT * FROM questoes WHERE nivel = '$nivel_jogador' AND fase = '$fase_jogador'";
$result1 = mysqli_query($connect, $sql1);
while ($linha = mysqli_fetch_array($result1)) {
  $nivel_questao = $linha['nivel'];
  $fase_questao = $linha['fase'];
  $texto = $linha['texto'];
  $opcao1 = $linha['opcao1'];
  $opcao2 = $linha['opcao2'];
  $opcao3 = $linha['opcao3'];
  $opcao4 = $linha['opcao4'];
  $opcao5 = $linha['opcao5'];
  $correta = $linha['correta'];
  $corretaVouf = $linha['corretaVouf'];
  $texto_ajuda = $linha['textoajuda'];
  $foto = $linha['foto'];
  $categoria = $linha['categoria'];
}

?>

<!-- Modal Structure -->

  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Ajuda</h4>
      <p><?php echo $texto_ajuda; ?></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>

  <div id="modal3" class="modal">
    <div class="modal-content">
      <h4>Sair do questionário</h4>
      <p>Você tem certeza que deseja sair do questionário? Você optou por refazer esse questionário, caso saia a pontuação não ficará completa e você voltará para a questão 1!</p>
    </div>
    <div class="modal-footer">
      <a href="recsair.php" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
      <a href="#" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Cancelar</a>
    </div>
  </div>

<div id="modal4" class="modal">
    <div class="modal-content">
      <h4>Questão incorreta</h4>
      <p>Você errou essa questão, mas ainda possui 1 tentativa!</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>

<?php
if ($categoria == 'quest') {
?>

<form action="recpont.php" id="formquest" method="post">
<div class="row" style="margin-top: 3%">
    <div class="col s12 m6 push-m3">
      <div class="card #546e7a blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title center"><?php echo "Questão $fase_questao"; ?></span><br><br>
          <?php if ($foto != 'empty') {
          ?>
          <p>
          <div class="zoom" style="cursor: zoom-in;">
          <img class="materialboxed" style="margin-left: 20%" width="300" height="300" src="../../adm/fotos/<?php echo $foto ?>">
          <?php
          ?>
          </div> </p>
          <?php
          }  ?> 
          <p><blockquote><?php echo $texto; ?></blockquote></p>

          <p>
      		<label>
        	<input name="q1" type="radio" checked value="1" />
        	<span style="color: white"><?php echo $opcao1; ?></span>
      		</label>
    	</p>

    	<p>
      		<label>
        	<input name="q1" type="radio" value="2" />
        	<span style="color: white"><?php echo $opcao2; ?></span>
      		</label>
    	</p>

    	<p>
      		<label>
        	<input name="q1" type="radio" value="3"  />
        	<span style="color: white"><?php echo $opcao3; ?></span>
      		</label>
    	</p>

    	<p>
      		<label>
        	<input name="q1" type="radio"  value="4" />
        	<span style="color: white"><?php echo $opcao4; ?></span>
      		</label>
    	</p>

    	<p>
      		<label>
        	<input name="q1" type="radio" value="5"  />
        	<span style="color: white"><?php echo $opcao5; ?></span>
      		</label>
    	</p>
      
      <input type="hidden" name="fase" value="<?php echo $fase_jogador; ?>">
      <input type="hidden" name="correta" value="<?php echo $correta; ?>">
      <input type="hidden" name="tentativa">
        </div>
        <div class="card-action">
          <a class="modal-trigger btn #1976d2 blue darken-2 " href="#modal2"><i class="material-icons left">help</i>Ajuda</a>
           <button class="btn waves-effect waves-light green" type="submit" name="action">Enviar
    		<i class="material-icons right">send</i>
  			</button>
        </div>
      </div>
    </div>
  </div>
</form>

<?php
}else{
?>

<form action="recpont.php" method="post" id="form2">
<div class="row" style="margin-top: 3%">
    <div class="col s12 m6 push-m3">
      <div class="card #546e7a blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title center"><?php echo "Questão $fase_questao"; ?></span><br><br>
           <?php if ($foto != 'empty') {
          ?>
          <p>
          <div class="zoom" style="cursor: zoom-in;">
          <img class="materialboxed" style="margin-left: 20%" width="300" height="300" src="../../adm/fotos/<?php echo $foto ?>">
          <?php
          ?>
          </div> </p>
          <?php
          }  ?> 
          <p><blockquote><?php echo $texto; ?></blockquote></p>

          <p>
          <label>
          <input name="q1" type="radio" checked value="1" />
          <span style="color: white">Verdadeiro</span>
          </label>
      </p>

      <p>
          <label>
          <input name="q1" type="radio" value="0" />
          <span style="color: white">Falso</span>
          </label>
      </p>

      
      <input type="hidden" name="fase" value="<?php echo $fase_jogador; ?>">
      <input type="hidden" name="correta" value="<?php echo $corretaVouf; ?>">
      <input type="hidden" name="tentativa">
        </div>
        <div class="card-action">
          <a class="modal-trigger btn #1976d2 blue darken-2 " href="#modal2"><i class="material-icons left">help</i>Ajuda</a>
           <button class="btn waves-effect waves-light green" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
        </button>
        </div>
      </div>
    </div>
  </div>
</form>

<div id="modal5" class="modal">
    <div class="modal-content">
      <h4>Questão incorreta</h4>
      <p>Você errou essa questão, por favor refaça a questão!</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>

<?php
}
?>


<script type="text/javascript">
	$(document).ready(function(){
  $('.materialboxed').materialbox();
	$('.modal').modal();
  $('#modal1').modal('open');
  $('#modal6').modal('open');
  });

var tentativa = 1;


$(document).on('submit', '#formquest', function(event){

  $("input[name='tentativa']").val(tentativa);

      var opcaocheck = document.querySelector('input[name="q1"]:checked').value;
      var correta = <?php echo $correta; ?>;

      if(opcaocheck != correta) {
        $('#modal5').modal('open');
        tentativa = 0;
        event.preventDefault();
      }

});

$(document).on('submit', '#form2', function(event){

  $("input[name='tentativa']").val(tentativa);

      var opcaocheck = document.querySelector('input[name="q1"]:checked').value;
      var correta = <?php echo $correta; ?>;
      

      if(correta != opcaocheck){
        $('#modal5').modal('open');
        tentativa = 0;
        event.preventDefault();
      }


});

</script>


</body>