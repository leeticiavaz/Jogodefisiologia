<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário fisiologia</title>
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
      <b><a class="waves-effect waves-light btn-large indigo darken-4" style="height: 70px; width: 300px; font-size: 300%">Cadastro
      </b></a>
    </p>
  </div>
</div>

<div class="container">
  <div class="row">
    <form action="../actions/cadastrar.php" method="post" enctype="multipart/form-data">
    <div class="col s6">

    
      <div align="center">
        <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Nome completo * </p> </div>
        <input placeholder="Digite aqui seu nome completo" id="text2" name="nome" type="text" class="validate" required>
      </div> 

      <div align="center">
        <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Data de nascimento * </p></div>
        <input id="text2" placeholder="Clique aqui" name="dataNasc" type="date"  required>
      </div>

      <div align="center">
        <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Curso: * </p></div>
          <input placeholder="Digite aqui seu curso" id="text2" name="curso" type="text" class="validate" required>
      </div>

      <div align="center">
        <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Matricula: * </p></div>
          <input placeholder="Digite aqui sua matrícula" id="text2" name="matricula" type="text" class="validate" required>
      </div>

      <div align="center">
        <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Semestre de ingresso: * </p> </div>
      <div class="input-field col s12 m3 push-m3">
      <select style="width: 20%" name="semestre" required>
      <option disabled>Escolha o semestre de ingresso</option>
      <option value="01" >01</option>
      <option value="02" >02</option>
    </select>
    </div>

    <div class="input-field col s12 m3 push-m3">
    <select style="width: 20%" name="ano" required>
      <option disabled>Escolha o Ano</option>
      <option value="2014" >2014</option>
      <option value="2015" >2015</option>
      <option value="2016" >2016</option>
      <option value="2017" >2017</option>
      <option value="2018" >2018</option>
      <option value="2019" >2019</option>
      <option value="2020" >2020</option>
    </select>
      </div>
    <br>
    <br>
    <br>
    <br>

  </div>
</div>

  <div class="col s6" align="right">

    <div align="center"><div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Email: * </p></div>
          <input placeholder="Digite aqui seu email" id="text2" name="email" type="email" class="validate" required></div>

    <div align="center">
      <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Senha: * </p></div>
          <input placeholder="Digite aqui sua senha" id="text2" name="senha" type="password" class="validate" required>


      <br>

      <div class="file-field input-field" style="width: 60%">
        <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Foto: * </p> </div>
      <div class="btn indigo darken-4">
        <span>Anexar</span>
        <input type="file" name="foto" required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" style="width: 100%; border-radius: 4px; background: #cccccc; border:1px solid #000000;">
      </div>
    </div>

    <div id="font" align="center" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;"> <p style=" color: #808080; font-size: 30px"> Escolha seu avatar: * </p></div>
    <p>
      <label>
        <input class="with-gap" name="avatar" type="radio" value="masculino" checked />
        <span style="color: black">Masculino</span>
        <img src="avatar1.png" width="70" height="70">
      </label>
      <label>
        <input class="with-gap" name="avatar" type="radio" value="feminino" />
        <span style="color: black">Feminino</span>
        <img src="avatar2.png" width="70" height="70">
      </label>
    </p>
    <br>
    <br>
    <br>
    <div align="center">
      <a target="__blank" href="termo_de_consentimento.php" style="color: blue; text-decoration: underline;">Termos de condição</a>
      <br>
      <label>
        <input type="checkbox" required />
        <span style="color: black;">Li e aceito os termos de condição</span>
      </label>
    </div>

    </div>
   

  </div>

    <br>
    </div>
<div align="center">
    <button class="btn-large waves-effect waves-light #2e7d32 green darken-3" type="submit" name="action" style="width: 24%; height: 70px"><div style="font-size: 300%"><b>Enviar</b></div></button>
</div>
  </form>

  </div>


<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
});

</script>

<style type="text/css">

  ::-webkit-input-placeholder {
   color: black;
}

:-moz-placeholder { /* Firefox 18- */
   color: black;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: black;  
}

:-ms-input-placeholder {  
   color: black;  
}

.container {
  
margin: 0 auto;
  
max-width: 1280px;
  
width: 95%;

}

@media only screen and (min-width: 601px) {
 
.container {
    
width: 95%;
  
}

}

@media only screen and (min-width: 993px) {
  
.container {
    
width: 95%;
  
}
}

</style>


</body>
</html>