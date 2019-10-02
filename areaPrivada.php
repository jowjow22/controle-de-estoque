<?php
session_start();
if (isset($_SESSION['cd_usuario'])  && $_SESSION['cd_usuario'] != "") {
}
else{
	echo '<script> window.location = "login.php"; </script>';
}
?>

<!DOCTYPE html>
<html id="html">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.css">
</head>
<body class="bg-color">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="text-light ml-1" href="#" style="font-size: 25px;"id="menu-toggle"></i><i class="fas fa-bars"></i></a>
  	  <a class="navbar-brand ml-5" href="#">
    <i class="fas fa-store"></i>
    Bootstrap
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <ul class="navbar-nav ">
    	      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Alterar Dados</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Registrar reclamação</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Ver Registros</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro</a>
      </li>
    </ul>
</nav>
 <div id="wrapper">
 	<!-- sidebar -->
 		<div id="sidebar-wrapper">
 			<ul class="sidebar-nav-active">
 				<li><a href=""><i class="fas fa-chart-bar"></i></a></li>
 				<li><a href=""><i class="fas fa-dolly"></i></a></li>
 				<li><a href=""><i class="fas fa-truck-loading"></i></a></li>
 				<li><a href=""><i class="fas fa-sign-out-alt"></i></i></a></li>
 				<li><a href=""><i class="fas fa-cubes"></i></a></li>
 				<li><a href=""><i class="fas fa-handshake"></i></a></li>
 				<li><a href="" class="fixed-bottom"><i class="fas fa-power-off"></i></a></li>
 			</ul>
 			<ul class="sidebar-nav">
 				<li><a href="#">account</a></li>
 				<li><a href="#">Settings</a></li>
 				<li><a href="#">Logout</a></li>
 			</ul>

 		</div>
 	<!-- page content -->
 	<div id="page-content-wrapper">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg-12">
 					<h1>EU NAO SEI</h1>
 					<p> i love apple pie i love apple pie i love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple piei love apple pie</p>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- Menu toggle script-->

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="scripts/ajax.js"></script>
<script src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
</body>
</html>
