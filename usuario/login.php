<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  <script type="text/javascript" src="../jquery-3.4.1.js"></script>
	<script src="../materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body bgcolor="#26c6da">

	<!-- navbar -->
<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">
      <a href="#" class="brand-logo left">Fisiologia</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../index.html">Página inicial</a></li>
      </ul>
    </div>
  </nav>
<br>

<div class="container">
  <div class="row">
     <p align="center">
      <b><a class="waves-effect waves-light btn-large indigo darken-4" style="height: 70px; width: 300px; font-size: 300%">Login
      </b></a>
    </p>
  </div>
</div>


<div class="container">
  <div class="row">
    <form action="../actions/logar.php" method="post">

    	<div align="center">
    		<div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Email * </p></div>
        <input placeholder="Digite aqui seu email" id="text2" name="email" type="email" class="validate" required>
        <br>
        <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Senha * </p></div>
        <input placeholder="Digite aqui seu email" id="text2" name="senha" type="password" class="validate" required>
    	</div>

    	<br><br>

    	<div align="center">
    <button class="btn-large waves-effect waves-light #2e7d32 green darken-3" type="submit" name="sub" style="width: 26%; height: 70px"><div style="font-size: 300%"><b>Entrar</b></div></button>
</div>

</form>
</div>
</div>


</body>
</html>