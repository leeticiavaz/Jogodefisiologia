<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
	<meta charset="utf-8">
    <script type="text/javascript" src="../../jquery-3.4.1.js"></script>
	<script src="../../materialize/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../materialize/css/materialize.min.css">
</head>
<body>
	<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">

    	<a href="#" class="brand-logo">Fase 1</a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li style="font-size: 200%"><a class="modal-trigger" href="#modal2"><i class="material-icons left">help</i>Ajuda</a></li>
        <li style="font-size: 200%"><a href="../../usuario/jogo.php">Página inicial</a></li>
      </ul>
    </div>
</nav>


<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Aviso</h4>
      <p>Ao voltar a página inicial, o nível será reiniciado e pontuação será zerada, a menos que o nível seja concluído!</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>

  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Ajuda</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut nunc vitae ipsum malesuada pellentesque nec a leo. Aenean purus purus, blandit nec porta eget, consequat sed lorem sed est</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat green" style="color: white">Ok</a>
    </div>
  </div>


<form action="fase1formq1.php" method="post">
<div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card #1976d2 blue darken-2">
        <div class="card-content white-text">
          <span class="card-title center">Questão 1 - 10 pontos</span><br><br>
          <p><blockquote>A vasopressina, também conhecida como hormônio antidiurético, auxilia no equilíbrio hidríco no corpo. Sabendo disso, quando ela estará sendo protagonista?</blockquote></p>

          <p>
      		<label>
        	<input name="q1" type="radio" checked value="1" />
        	<span style="color: white">Quando a pressão arterial estiver em níveis normais.</span>
      		</label>
    	</p>

    	<p>
      		<label>
        	<input name="q1" type="radio" value="2" />
        	<span style="color: white">Se houver uma perda de líquidos muito intensa.</span>
      		</label>
    	</p>

    	<p>
      		<label>
        	<input name="q1" type="radio" value="3"  />
        	<span style="color: white">Em um quadro de hipertensão arterial.</span>
      		</label>
    	</p>

    	<p>
      		<label>
        	<input name="q1" type="radio"  value="4" />
        	<span style="color: white">Quando o paciente apresentar um quadro de derrame pleural.</span>
      		</label>
    	</p>

    	<p>
      		<label>
        	<input name="q1" type="radio" value="5"  />
        	<span style="color: white">Nenhuma das alternativas acima.</span>
      		</label>
    	</p>

        </div>
        <div class="card-action">
           <button class="btn waves-effect waves-light green" type="submit" name="action">Enviar
    		<i class="material-icons right">send</i>
  			</button>
        </div>
      </div>
    </div>
  </div>
</form>

<script type="text/javascript">
	$(document).ready(function(){
	$('.modal').modal();
    $('#modal1').modal('open');
  });
</script>

<style type="text/css">
	body{
		background-image: url("../background.jpg");
		background-repeat: no-repeat;
		background-size: 100%;
	}
</style>

</body>