
<!DOCTYPE html>
<html id="html">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body class="bg-color">
 <div class="container-fluid h-100">
 	<div class="row form-cadastro justify-content-center">
 		<div class="col-4 align-self-center area-form">
 			<div class="row justify-content-center mb-4">
 				<img src="img/logo/store.png">
 			</div>
 			<span class="small d-block text-center">Faça login com sua conta <b>Google</b></span>
 			<button type="button" class="btn btn-info btn-block mt-2">Google</button>

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
 						<button id="buttonLogin"class="btn btn-info btn-block mt-4">Logar</button>
 					</div>
 				</div>
 			</form>
 			<a href="index.php" class="btn btn-default btn-block mt-2">Não tem Conta?<strong>Cadastre-se!</strong></a>
 		</div>
 	</div>
 </div>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="scripts/ajax.js"></script>
</body>
</html>
