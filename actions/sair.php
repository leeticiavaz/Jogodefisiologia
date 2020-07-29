<?php
session_start();
session_destroy();
echo "<script>window.location.href='../usuario/login.php'</script>";
?>