<?php 
global $con;
$con = mysqli_connect("localhost","root","","db_controleDeEstoque");
if (!$con) {
	echo "erro na conexao";
}

?>