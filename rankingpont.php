<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="jquery-3.4.1.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>
<body>

</body>
</html>

<?php

require "bd.php";

$sql = "SELECT * FROM cadastro ORDER BY pontuacao DESC";
$resultado = mysqli_query($connect, $sql);
?>

<table>
        <thead>
          <tr>
          	  
              <th>Nome de jogador</th>
              <th>Pontuação</th>
          </tr>
        </thead>
        <?php

            while ($dados = mysqli_fetch_array($resultado)) {
             ?>

        <tbody>
          <tr>
          	
            <td ><?php echo $dados['nick']; ?></td>
            <td><?php echo $dados['pontuacao']; ?></td>
            <?php
            if ($dados['avatar'] == 'masculino') {
            ?>
            <td><img src="usuario/avatar1.png" class="circle" width="35" height="35"></td>
            <?php
            }else{
            ?>
            <td><img src="usuario/avatar2.png" class="circle" width="35" height="35"></td>
            <?php
        	}
        	?>

          </tr>
        </tbody>
         <?php
         
          }
          ?>
      </table>