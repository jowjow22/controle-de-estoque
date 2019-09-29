<?php
session_start();
if (isset($_SESSION['cd_usuario'])  && $_SESSION['cd_usuario'] != "") {
}
else{
	echo '<script> window.location = "login.php"; </script>';
}
?>