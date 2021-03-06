<?php
session_start();
require "../../bd.php";

$email = $_SESSION['email'];

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$result = mysqli_query($connect, $sql);


while ($linha = mysqli_fetch_array($result)){
 $nivel_jogador = $linha['recnivel'];
 $fase_jogador = $linha['recfase'];

 if ($nivel_jogador != 3 and $fase_jogador != 6) {
   echo "<script> window.location.href='../../index.html'; </script>";
 }

}

if (!isset($email)) {
	echo "<script> window.location.href='../../index.html'; </script>";
}
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
</head>
<body bgcolor="#21D6F7">
<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">

    	<a href="#" class="brand-logo">Nivel <?php echo $nivel_jogador; ?></a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li style="font-size: 200%"><a href="../../usuario/jogo.php">Página inicial</a></li>
      </ul>
    </div>
</nav>

<form action="c2rec.php" method="post" id="form1">
	
 <div class="row">
    <div class="col s12 m10 push-m1">
      <div class="card #546e7a blue-grey darken-1">
        <div class="card-content white-text">
         <span class="card-title center"><?php echo "Questão $fase_jogador"; ?></span><br><br>
           <fieldset style="border-radius: 30px; background-color: white">
           <div style="color: black;">Relacione os hormônios de acordo com sua região de secreção.
            <br>
            (1) Adeno-hipófise<br>
            (2) Neuro-hipófise<br>
           </div>
         </fieldset>
         <br>
        <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s1">
              <select name="resposta1" id="resposta1">
              
                <option value="1">1</option>
                <option value="2">2</option>
      
              
              </select>
            </div>
            <div class="col s10">
              <p class="black-text" style="margin-top: 2%">TSH - Hormônio estimulante da tireoide </p>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s1">
              <select name="resposta2" id="resposta2">
              
                <option value="1">1</option>
                <option value="2">2</option>
              
              </select>
            </div>
            <div class="col s10">
              <p class="black-text" style="margin-top: 2%">FSH - Hormônio folículo estimulante  / LH - Hormônio Luteinizante </p>
            </div>
          </div>
        </div>
      </div>

       <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s1">
              <select name="resposta3" id="resposta3">
              
                <option value="1">1</option>
                <option value="2">2</option>
                
              
              </select>
            </div>
            <div class="col s10">
              <p class="black-text" style="margin-top: 2%">OT - Ocitocina</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s1">
              <select name="resposta4" id="resposta4">
              
                <option value="1">1</option>
                <option value="2">2</option>

              
              </select>
            </div>
            <div class="col s10">
              <p class="black-text" style="margin-top: 2%">PRL - Prolactina</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s1">
              <select name="resposta5" id="resposta5">
              
                <option value="1">1</option>
                <option value="2">2</option>
                
              
              </select>
            </div>
            <div class="col s10">
              <p class="black-text" style="margin-top: 2%">ACTH - Hormônio adrenocorticotrófico</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s1">
              <select name="resposta6" id="resposta6">
              
                <option value="1">1</option>
                <option value="2">2</option>
                
              
              </select>
            </div>
            <div class="col s10">
              <p class="black-text" style="margin-top: 2%">GH - Hormônio do crescimento</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="row">
            <div class="col s1">
              <select name="resposta7" id="resposta7">
              
                <option value="1">1</option>
                <option value="2">2</option>
                
              
              </select>
            </div>
            <div class="col s10">
              <p class="black-text" style="margin-top: 2%">ADH - Hormônio antidiurético</p>
            </div>
          </div>
        </div>
      </div>
        </div>
        <input type="hidden" name="tentativa" id="tentativa">
        <div class="card-action">
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

<script type="text/javascript">
	$(document).ready(function(){
    $('select').formSelect();
    $('.modal').modal();
  });

var tentativa = 1;

$(document).on('submit', '#form1', function(event){

$("input[name='tentativa']").val(tentativa);

var op1 = $('#resposta1').val();
var op2 = $('#resposta2').val();
var op3 = $('#resposta3').val();
var op4 = $('#resposta4').val();
var op5 = $('#resposta5').val();
var op6 = $('#resposta6').val();
var op7 = $('#resposta7').val();

      
      

      if(op1 != '1' || op2 != '1' || op3 != '2' || op4 != '1' || op5 != '1' || op6 != '1' || op7 != '2'){
        $('#modal5').modal('open');
        tentativa = 0;
        event.preventDefault();
      }

});
</script>

</body>
</html>