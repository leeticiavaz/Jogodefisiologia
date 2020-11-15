<?php

session_start();
require "../../bd.php";
$email = $_SESSION['email'];

$sql = "UPDATE cadastro SET recfase = 1 WHERE email = '$email'";
$result = mysqli_query($connect, $sql);
?>
<script type="text/javascript">
	window.location.href="../../usuario/jogo.php";
</script>