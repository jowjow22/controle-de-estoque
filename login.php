
<!DOCTYPE html>
<html id="html">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
</head>
<body class="bg-dark text-light">
 <div class="container-fluid h-100">
 	<div class="row form-cadastro justify-content-center">
 		<div class="col-4 align-self-center area-form">
 			<div class="row justify-content-center mb-4">
 				 <i class="fas fa-store" style="font-size: 60px;"></i>
 			</div>
 			<span class="small d-block text-center">Faça login com sua conta <b>Google</b></span>
 			<button type="button" class="btn btn-light btn-block mt-2 font-weight-bold">
 				<span class="text-primary h5">G</span>
 				<span class="text-danger h5">o</span>
 				<span class="text-warning h5">o</span>
 				<span class="text-primary h5">g</span>
 				<span class="text-success h5">l</span>
 				<span class="text-danger h5">e</span></button>

 			<span class="small d-block text-center">ou</span>
 			<span class="small d-block text-center">Faça login normalmente</span>

 			<form id="loginUsuario" method="post">
 				<div class="input-group mt-2">
 					<input type="text" class="form-control btn-outline-secondary" placeholder="login" name="login">
 				</div>
 				<div class="input-group mt-2">
 					<input type="password" class="form-control btn-outline-secondary" placeholder="*******" name="senha">
 				</div>
 				<div class="row">
 					<div class="col-md-12">
 						<button id="buttonLogin"class="btn btn-primary btn-block mt-4">Logar</button>
 					</div>
 				</div>
 			</form>
 			<a href="index.php" class="btn btn-default btn-block mt-2 text-light">Não tem Conta?<strong>Cadastre-se!</strong></a>
 		</div>
 	</div>
 </div>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="scripts/ajax.js"></script>
<script src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
</body>
</html>
