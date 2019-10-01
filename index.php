<?php
require_once 'classes/conexao.php';
$c = new Conexao;
$c->conectar();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
 				<!-- <img src="img/logo/store.png"> -->
 			</div>
 			<span class="small d-block text-center">Cadastre com sua conta <b>Google</b></span>
 			<button type="button" class="btn btn-light btn-block mt-2 font-weight-bold">
 				<span class="text-primary h5">G</span>
 				<span class="text-danger h5">o</span>
 				<span class="text-warning h5">o</span>
 				<span class="text-primary h5">g</span>
 				<span class="text-success h5">l</span>
 				<span class="text-danger h5">e</span></button>

 			<span class="small d-block text-center">ou</span>
 			<span class="small d-block text-center">Crie um novo cadastro</span>

 			<form id="cadastroUsuario">
 				<div class="input-group mt-2">
 					<input type="text" class="form-control btn-outline-secondary" placeholder="Nome completo" name="nome">
 				</div>
 				<div class="input-group mt-2">
 					<input type="text" class="form-control btn-outline-secondary" placeholder="Telefone" name="telefone">
 				</div>
 				 <div class="input-group mt-2">
 					<input type="text" class="form-control btn-outline-secondary" placeholder="Login" name="login">
 				</div>
 				 <div class="input-group mt-2">
 					<input type="email" class="form-control btn-outline-secondary" placeholder="Email" name="email">
 				</div>

 				<div class="input-group mt-2">
 					<input type="password" class="form-control btn-outline-secondary" placeholder="******" name="senha">
 				</div>
 				 <div class="input-group mt-2">
 				 	<input type="file" accept="img/*" name="imagem" id="file" style="display: none;">
 					<label for="file" class="btn btn-warning btn-block mt-2 text-light"><i class="fas fa-images"></i>&nbsp;Escolha uma imagem</label>
 				</div>
 				 <div class="input-group mt-2">
 					<input type="text" class="form-control btn-outline-secondary" placeholder="Status" name="status">
 				</div>
 				<label class="small d-block text-center mt-1">Tipo de Usuario</label>
 				 <div class="input-group mt-2">
 					<select class="form-control btn-outline-secondary" name="tipoUsuario" id="tipoUsuario">
 						<?php
 							$query = $con->prepare("SELECT * FROM tb_tipoUsuario");
							$query->execute();
 							while($tipo = $query->fetch(PDO::FETCH_ASSOC)){
 						?>
 						<option value="<?php echo $tipo['cd_tipoUsuario'];?>"><?php echo $tipo['nm_tipoUsuario'];?></option>
 						<?php
 					}
 					?>
 					</select>
 				</div>
 				<div class="row">
 					<div class="col-md-6">
 						<button type="button" class="btn btn-danger btn-block mt-2">Cancelar</button>
 					</div>
 					<div class="col-md-6">
 						<button id="button"class="btn btn-primary btn-block mt-2">Cadastrar</button>
 					</div>
 				</div>
 			</form>
 			<a href="login.php" class="btn btn-default btn-block mt-2 text-light">Já tem Conta?<strong>Faça Login!</strong></a>
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