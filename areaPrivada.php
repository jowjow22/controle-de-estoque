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
  <a class="navbar-brand" href="#" style="font-size: 25px;"id="menu-toggle"><i class="fas fa-bars"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Perfil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Lista de saidas</a>
          <a class="dropdown-item" href="#">Lista de entradas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Lista de Estoque</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>
 <div id="wrapper">
 	<!-- sidebar -->
 		<div id="sidebar-wrapper">
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
 					<h1>Side bar Layouts are cool</h1>
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
