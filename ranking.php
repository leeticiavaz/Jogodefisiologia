<!DOCTYPE html>
<html>
<head>
	<title>Ranking</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="jquery-3.4.1.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>
<body bgcolor="#26c6da">

<?php
require "bd.php";
?>

<nav>
    <div class="nav-wrapper #fb8c00 orange darken-1">
      <a href="#" class="brand-logo left">Fisiologia</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.html">Voltar</a></li>
      </ul>
    </div>
  </nav>


<?php
$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($connect, $sql);
?>

<table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Pontuação</th>
          </tr>
        </thead>
        <?php
            while ($dados = mysqli_fetch_array($resultado)) {
             ?>

        <tbody>
          <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['p1'] + $dados['p2'] + $dados['p3'] + $dados['p4'] + $dados['p5'] + $dados['p6'] + $dados['p7'] + $dados['p8'] + $dados['p9'] + $dados['p10']; ?></td>

          </tr>
        </tbody>
         <?php
          }
          ?>
      </table>


</body>
</html>