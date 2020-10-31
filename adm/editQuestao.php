<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Questionário</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="../jquery-3.4.1.js"></script>
	<script src="../materialize/js/materialize.min.js"></script>
	
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<!-- Nav -->
<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">
      <a href="#" class="brand-logo">Fisiologia</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Voltar</a></li>
      </ul>
    </div>
  </nav>
<br>

<?php
include "../bd.php";

$id = $_GET['id'];

$sql = "SELECT * FROM questoes WHERE id = '$id'";
$resultado = mysqli_query($connect,$sql);
while ($dados = mysqli_fetch_array($resultado)) { ?>
<form method="post" action="updateQuestao.php?id=<?php echo $dados['id']; ?>" enctype="multipart/form-data">

<div class="row">
  <div class="input-field col s3 push-m2">
    <select name="nivel" required style="width: 20%">
      <option disabled selected>Escolha o Nível</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
    <label>Nível</label>
  </div>

  <div class="input-field col s3 push-m3">
    <select name="fase" required style="width: 20%">
      <option disabled selected>Escolha a Fase</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
    <label>Fase</label>
  </div>
</div>

<div class="container">
<?php
if ($dados['categoria'] == 'quest') {
?>


<!-- Card -->
      <div class="card #90caf9 blue lighten-3">


        
        <div class="card-content black-text">
          <span class="card-title center">Adicionar Questionário</span><br><br>


          <div class="row">
        

          <div class="col s3 m6">
            

            <p>Texto:</p>
            <textarea  maxlength="1500" name="texto" id="editor" class="materialize-textarea" style="max-width: 70%"><?php echo $dados['texto']; ?></textarea><br>

            
         <p>Opção 1:</p>
            <textarea  maxlength="1500" name="opcao1"  class="materialize-textarea" style="max-width: 70%"><?php echo $dados['opcao1']; ?></textarea> 

            <p>Opção 2:</p>
            <textarea  maxlength="1500" name="opcao2"  class="materialize-textarea" style="max-width: 70%"><?php echo $dados['opcao2']; ?></textarea> 
        
            <p>Opção 3:</p>
            <textarea  maxlength="1500" name="opcao3"  class="materialize-textarea" style="max-width: 70%"><?php echo $dados['opcao3']; ?></textarea>

          <div class="file-field input-field">
          <div class="btn">
            <span>Adicionar imagem</span>
              <input type="file" name="fotoquest">
          </div>
         <div class="file-path-wrapper">
            <input class="file-path validate" type="text" name="fototext" style="max-width: 45%">
          </div>
        </div>

      </div>


      <div class="col s3 m6">
        

          <p>Texto de ajuda:</p>
            <textarea  maxlength="1500" name="ajuda" id="editor2"  class="materialize-textarea" style="max-width: 70%"><?php echo $dados['textoajuda']; ?></textarea><br>

            <p>Opção 4:</p>
            <textarea  maxlength="1500" name="opcao4"  class="materialize-textarea" style="max-width: 70%"><?php echo $dados['opcao4']; ?></textarea> 

            <p>Opção 5:</p>
            <textarea  maxlength="1500" name="opcao5"  class="materialize-textarea" style="max-width: 70%"><?php echo $dados['opcao5']; ?></textarea> 
        
            <p>Opção correta:</p>
            
        <select name="correta"  >
          <option value="" disabled selected>Escolha a opção correta</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
            

      </div>
          

        </div>

      </div>

        <div class="card-action center">
          <a class="btn red" href="index.php">Cancelar <i class="material-icons right">delete</i></a>
          <button type="submit" name="buttonQuest" class="btn green">Enviar <i class="material-icons right">check</i></button>
        </div>



      </div>
    
  	

<!-- End Card -->

<?php
}if ($dados['categoria'] == 'vouf') {
?>
<div class="card #90caf9 blue lighten-3">
<div id="divVouf">
<div class="card-content black-text">

          <span class="card-title center">Verdadeiro ou Falso</span><br><br>

          <div class="row">

          <div class="col s12 m6">
            

          <p >Texto:</p>
            <textarea  maxlength="1500" name="texto1" id="editor3" class="materialize-textarea" style="max-width: 70%"><?php echo $dados['texto']; ?></textarea><br>

            <div class="file-field input-field">
            <div class="btn">
              <span>Adicionar imagem</span>
                <input type="file" name="fotovouf">
            </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" name="fototextvouf">
          </div>
        </div> 
          </div>
          

          <div class="col s12 m6">

            

        <p>Texto de ajuda:</p>
            <textarea  maxlength="1500" name="ajuda1" id="editor4"  class="materialize-textarea" style="max-width: 70%"><?php echo $dados['textoajuda']; ?></textarea><br><br>

           <select name="correta1"  >
            <option value="" disabled selected>Escolha a opção correta</option>
            <option value="verdadeiro">verdadeiro</option>
            <option value="falso">falso</option>
            </select>

          </div><br><br>

          
        </div>

        </div>

<div class="card-action center">
          <a class="btn red" href="index.php">Cancelar <i class="material-icons right">delete</i></a>
          <button type="submit" name="buttonVouf" class="btn green">Enviar <i class="material-icons right">check</i></button>
        </div>

</div>

</div>
<?php
}
?>
</form>
</div>
<?php
}
?>
<script type="text/javascript" src="../ckeditor/ckeditor.js" charset="utf-8"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('select').formSelect();
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
  });
</script>
</body>
</html>