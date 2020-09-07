<!DOCTYPE html>
<html>
<head>
	<title>Área aministrativa</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="../jquery-3.4.1.js"></script>
	<script src="../materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
include "../bd.php";
setlocale(LC_ALL,'pt_BR.UTF8');
mb_internal_encoding('UTF8'); 
mb_regex_encoding('UTF8');

?>
<!-- Nav -->
<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">
    	<div class="container">
      <a href="#" class="brand-logo">Fisiologia</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="add.html">Adicionar <i class="material-icons right">add</i></a></li>
        <li><a href="../index.html">Voltar</a></li>
      </ul>
      	</div>
    </div>
  </nav>

<div class="container">


<?php
for ($i=1; $i < 11; $i++) { 

?>
<!--Nivel 1-->
<div class="row">
  <div class="col s12">
    <h4 class="light">Nível <?php echo $i; ?>: </h4>
    <table class="highlight centered">
      <thead>
        
        <tr>
          <th>Fase:</th>
          <th>Texto:</th>
          <th>Opção correta:</th>
          <th>Categoria:</th>
        </tr>
      </thead>
      
      <tbody>
      	<?php
      	$sql = "SELECT * FROM questoes WHERE nivel = '$i' ORDER BY fase";
		$resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
   
      	?>
      	<tr>
			<td><?php echo $dados['fase']; ?></td>
			<td><?php echo $dados['texto']; ?></td>
			<td><?php
      if ($dados['categoria'] == 'quest') {
        echo $dados['correta'];
      }else{
        echo $dados['corretaVouf'];

      }
       ?></td>
      <td><?php echo $dados['categoria']; ?></td>
			<td>
			<a href="editQuestao.php?id=<?php echo $dados["id"]; ?>" class="btn-floating #00e676 green accent-3"><i class="material-icons">create</i></a>
			<a href="deletarQuestao.php?id=<?php echo $dados['id']; ?>" class="btn-floating modal-trigger red"><i class="material-icons">delete</i></a>
			</td>
			
      </td>

		</tr>

		<?php
		}
		}else{
		?>
		<td>-</td>
		<td>-</td>
		<td>-</td>
    <td>-</td>
		<td>--</td>
		<?php
		}
		?>

      </tbody>

  </table>

</div>
</div>
<?php
}
?>

</div>


<style type="text/css">

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

<script type="text/javascript">
	$(document).ready(function(){
    $('.modal').modal();
  });
</script>

</body>
</html>