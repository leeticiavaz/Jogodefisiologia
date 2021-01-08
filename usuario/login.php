<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  <script type="text/javascript" src="../jquery-3.4.1.js"></script>
	<script src="../materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="icon" href="../fav.png" />
</head>
<body bgcolor="#26c6da">

	<!-- navbar -->
<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">
      <a href="#" class="brand-logo left">HipoGame</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style="font-size: 20px" href="../index.html">Página inicial</a></li>
      </ul>
    </div>
  </nav>
<br>





    <div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card white">
        <nav>
          <div class="nav-wrapper #4a148c purple darken-4">
           <a class="brand-logo center" style="font-size: 35px">LOGIN</a>
           </div>
  </nav>
        <div class="card-content white-text">
          
          <form action="../actions/logar.php" method="post">

        <div align="center">
        <div id="font" align="center"> <p style=" color: black; font-size: 35px; font-weight: bold; text-align: left;"> Email * </p></div>
        <input placeholder="Digite aqui seu email" id="text2" name="email" type="email" class="validate" required>
        <br>
        <br>
        <div id="font" align="center"> <p style=" color: black; font-size: 35px; font-weight: bold; text-align: left;"> Senha * </p></div>
        <input placeholder="Digite aqui seu email" id="text2" name="senha" type="password" class="validate" required>
        </div>

        <br><br>

        <div align="center">
         <button  type="submit" name="sub" style="width: 100%; height: 70px; background-color: green;"><div style="font-size: 300%; color: white;"><b>Entrar</b></div></button>
        </div>

            </form>
        </div>
      </div>
    </div>
   </div>


<div class="container">
  <div class="row">
    
</div>
</div>


</body>
</html>