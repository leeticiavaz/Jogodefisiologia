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
   

    <div class="col s12 m6">
      <div class="card #81d4fa light-blue lighten-3">
        <div class="card-content white-text">
          <fieldset style="background-color: white; border-radius: 10px;">
          <span class="card-title center" style="font-family: arial; font-weight: bold; color: black;">Informações Pessoais</span>
          <div id="font"> <p style=" color: black; font-size: 20px; font-family: arial;"> Nome completo * </p> </div>
        <input placeholder="Digite aqui seu nome completo" id="text2" maxlength="60" name="nome" type="text" class="validate" required>

        <div id="font"> <p style=" color: black; font-size: 20px; font-family: arial;"> Nome de jogador * </p> </div>

        <input type="text" maxlength="30" placeholder="Digite aqui seu nome de jogador" id="text2" name="nick" required>

        <div align="center">
        
        <div id="font" align="center"> <p style=" color: black; font-size: 20px; font-family: arial; text-align: left;"> Data de nascimento * </p></div>
        <input id="text2" placeholder="Clique aqui" name="dataNasc" type="date"  required>

        <div id="font" align="center"> <p style=" color: black; font-size: 20px; font-family: arial; text-align: left;"> Gênero * </p></div>
            <p align="left">
          <label>
            <input name="genero" type="radio" checked  value="masculino" />
            <span>Masculino</span>
          </label>
        </p>
        <p align="left">
          <label>
            <input name="genero" type="radio" value="feminino" />
            <span>Feminino</span>
          </label>
        </p>
        <p align="left">
          <label>
            <input name="genero" type="radio" value="outro" />
            <span>Outro</span>
          </label>
        </p>
        </div>
        </fieldset>
        <br>
        <fieldset style="background-color: white; border-radius: 10px;">
        <span class="card-title center" style="font-family: arial; font-weight: bold; color: black;"> Informações de Conta</span>
        <div align="center"><div id="font" align="center"> <p style="color: black; font-size: 20px; font-family: arial; text-align: left;"> Email: * </p></div>
          <input placeholder="Digite aqui seu email" id="text2" name="email" type="email" class="validate" required></div>

        <div id="font" align="center"> <p style="color: black; font-size: 20px; font-family: arial; text-align: left;"> Senha: * </p></div>
          <input placeholder="Digite aqui sua senha" id="text2" name="senha" type="password" class="validate" required>
        
        <a target="__blank" href="termo_de_consentimento.html" style="color: blue; text-decoration: underline;">Termo de consetimento livre e esclarecido</a>
        <br>
        <label>
        <input type="checkbox" required />
        <span style="color: black;">Li e aceito o termo de consetimento livre e esclarecido</span>
        </label>
        <br>
        
        </fieldset>
        </div>
      </div>
    </div>


 <div class="col s12 m6">
      <div class="card #81d4fa light-blue lighten-3">
        <div class="card-content white-text">
          <fieldset style="background-color: white; border-radius: 10px;">
          <span class="card-title" style="font-family: arial; font-weight: bold; color: black;">Informações do Curso</span>

          <div id="font" align="center"> <p style="color: black; font-size: 20px; font-family: arial; text-align: left;"> Curso: * </p></div>
          <input placeholder="Digite aqui seu curso" id="text2" name="curso" type="text" class="validate" required>
         
          <div id="font" align="center"> 
          <p style="color: black; font-size: 20px; font-family: arial; text-align: left;"> Matricula: * </p></div>
          <input placeholder="Digite aqui sua matrícula" id="text2" name="matricula" type="text" class="validate" required>

          <div id="font" align="center"> <p style="color: black; font-size: 20px; font-family: arial; text-align: left;"> Semestre de ingresso: * </p> </div>
            <div class="input-field col s12 m3 push-m1">
            <select style="width: 20%" name="semestre" required>
            <option disabled>Escolha o semestre de ingresso</option>
            <option value="01" >01</option>
            <option value="02" >02</option>
            </select>
            </div>
           <br> <br><br><br>
            <div id="font" align="center"> <p style="color: black; font-size: 20px; font-family: arial; text-align: left;"> Escolha o ano: * </p> </div>
            <div class="input-field col s12 m3 push-m1">
            <select name="ano" required>
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
            <br> <br><br><br>
            <div id="font" align="center"> <p style="color: black; font-size: 20px; font-family: arial; text-align: left;"> Escolha seu avatar: * </p></div>
            <br><br>
            <p>
              <label>
                <input class="with-gap" name="avatar" type="radio" value="avatar1" checked />
                <span><img src="avatar1.png" width="70" height="70" class="circle"></span>
              </label>
              <label>
                <input class="with-gap" name="avatar" type="radio" value="avatar2" />
                <span><img src="avatar2.png" width="70" height="70" class="circle"></span>
              </label>
            </p>
            <br>
             <p>
              <label>
                <input class="with-gap" name="avatar" type="radio" value="avatar3" />
                <span><img src="avatar3.png" width="70" height="70" class="circle"></span>
              </label>
              <label>
                <input class="with-gap" name="avatar" type="radio" value="avatar4" />
                <span><img src="avatar4.png" width="70" height="70" class="circle"></span>
              </label>
            </p>

            <input type="hidden" name="fase" value="1">
         </fieldset>
        </div>
      </div>
    </div>

      
    
    <br>
    <br>
    <br>
    <br>

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