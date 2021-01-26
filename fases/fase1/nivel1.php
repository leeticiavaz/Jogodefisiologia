<?php
session_start();
require "../../bd.php";
$email = $_SESSION['email'];

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$result = mysqli_query($connect, $sql);
while ($linha = mysqli_fetch_array($result)){
 $nivel_jogador = $linha['nivel'];
 $fase_jogador = $linha['fase'];

 if ($nivel_jogador == 2 and $fase_jogador == 6) {
   header("Location: r1.php");
 }
 if ($nivel_jogador == 2 and $fase_jogador == 8) {
   header("Location: r2.php");
 }

 if ($nivel_jogador == 3 and $fase_jogador == 6) {
   header("Location: r3.php");
 }
 if ($nivel_jogador == 4 and $fase_jogador == 2) {
   header("Location: r4.php");
 }
 if ($nivel_jogador == 6 and $fase_jogador == 3) {
   header("Location: r5.php");
 }
 if ($nivel_jogador == 8 and $fase_jogador == 6) {
   header("Location: r6.php");
 }

 if ($nivel_jogador == 1 and $fase_jogador == 8) {
   header("Location: cruzadinha1.php");
 }

 if ($nivel_jogador == 2 and $fase_jogador == 10) {
   header("Location: cruzadinha2.php?rec=0");
 }
 if ($nivel_jogador == 3 and $fase_jogador == 8) {
   header("Location: cruzadinha3.php?rec=0");
 }
 if ($nivel_jogador == 4 and $fase_jogador == 10) {
   header("Location: cruzadinha4.php?rec=0");
 }
 if ($nivel_jogador == 5 and $fase_jogador == 10) {
   header("Location: cruzadinha5.php?rec=0");
 }
 if ($nivel_jogador == 6 and $fase_jogador == 10) {
   header("Location: cruzadinha6.php?rec=0");
 }
 if ($nivel_jogador == 7 and $fase_jogador == 10) {
   header("Location: cruzadinha7.php?rec=0");
 }
 if ($nivel_jogador == 8 and $fase_jogador == 9) {
   header("Location: cruzadinha8.php?rec=0");
 }
 if ($nivel_jogador == 9 and $fase_jogador == 10) {
   header("Location: cruzadinha9.php?rec=0");
 }
 if ($nivel_jogador == 10 and $fase_jogador == 10) {
   header("Location: cruzadinha10.php?rec=0");
 }

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
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
<body bgcolor="#21D6F7">
	<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">

    	<a href="#" class="brand-logo">Nivel <?php echo $nivel_jogador; ?></a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style="font-size: 20px" href="../../usuario/jogo.php">Página inicial</a></li>
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
  $corretavouf = $linha['corretaVouf'];
  $texto_ajuda = $linha['textoajuda'];
  $foto = $linha['foto'];
  $categoria = $linha['categoria'];
  $fotoajuda = $linha['fotoajuda'];
}

?>

<!-- Modal Structure -->

  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ajuda</h4>
      <p style="text-align: justify;"><?php echo $texto_ajuda; ?></p>
      <br>
      <?php
      if ($fotoajuda != 'empty') {
      ?>
      
        <img class="materialboxed" style="margin-left: 20%" width="300" height="300" src="../../adm/fotos/<?php echo $fotoajuda; ?>">
      
      <?php
      }
      ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
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

  <div id="modal5" class="modal">
    <div class="modal-content">
      <h4>Questão incorreta</h4>
      <p>Você errou essa questão, por favor refaça a questão!</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat red" style="color: white">Ok</a>
    </div>
  </div>

  <div id="modal6" class="modal">
    <div class="modal-content">
      <h4>Parabéns! Você está no nível <?php echo $nivel_jogador; ?>!</h4>
      <p>Continue respondendo as questões para passar de nível!</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>


<?php
if ($categoria == 'quest') {
?>

<form action="fase1formq1.php" id="formquest" method="post">
<div class="row" style="margin-top: 3%">
    <div class="col s12 m6 push-m3">
      <div class="card #546e7a blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title center"><?php echo "Questão $fase_questao"; ?></span><br><br>

          <fieldset style="border-radius: 30px; background-color: white">
           <div style="color: black; text-align: justify;"><?php echo $texto; ?></div>
         </fieldset>
         <br>
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
          <br>
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

<form action="fase1formq1.php" id="form2" method="post">
<div class="row" style="margin-top: 3%">
    <div class="col s12 m6 push-m3">
      <div class="card #546e7a blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title center"><?php echo "Questão $fase_questao"; ?></span><br><br>
          <fieldset style="border-radius: 30px; background-color: white">
           <div style="color: black;"><?php echo $texto; ?></div>
         </fieldset>
         <br>
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
          
         <br>
          <p>
          <label>
          <input name="q1" id="r1" type="radio" checked value="1" />
          <span style="color: white">Verdadeiro</span>
          </label>
      </p>

      <p>
          <label>
          <input name="q1" id="r2" type="radio" value="0" />
          <span style="color: white">Falso</span>
          </label>
      </p>

      
      <input type="hidden" name="fase" value="<?php echo $fase_jogador; ?>">
      <input type="hidden" name="correta" value="<?php echo $corretavouf; ?>">
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

}



?>


<script type="text/javascript">
	$(document).ready(function(){
  $('.materialboxed').materialbox();
	$('.modal').modal();
    $('#modal1').modal('open');
  <?php
    if ($fase_jogador == 1 and $nivel_jogador != 1) {
  ?>
  $('#modal6').modal('open');
  <?php
  }
  ?>
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
</html>