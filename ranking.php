<!DOCTYPE html>
<html>
<head>
	<title>Ranking</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="jquery-3.4.1.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <script type="text/javascript" src="consulta.js"></script>
    <link rel="icon" href="fav.png" />
</head>
<body bgcolor="#26c6da">

<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">
      <a href="#" class="brand-logo left">HipoGame</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.html" style="font-size: 20px">Página Inicial</a></li>
      </ul>
    </div>
  </nav>


 <div class="row" style="margin-top: 5%">
    <div class="col s12 m8 push-m2">
      <div class="card large #ffffff white">
        <div class="card-content black-text">
          <span class="card-title"><b>Ranking</b></span> <input type="text" placeholder="Pesquisar por nome de jogador" style="max-width: 30%" id="pesquisa">
          <table class="resultado">
            
          </table> 
          <iframe src="rankingpont.php" width="100%" height="350"></iframe>
        </div>
        
      </div>
    </div>
  </div>


</body>
</html>