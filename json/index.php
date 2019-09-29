
<?php
include_once("listagem.php");
include_once("exclusao.php");
include_once("cadastro.php");
global $str, $str2;

//listagem inicio
if(isset($_GET['fornecedor'])){
	$id = $_GET['fornecedor'];
}

$pos = ListarFornecedor($id);
$str= '{"Fornecedores": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_fornecedor'].', "nome":"'.$q['nm_fornecedor'].'", "contato":"'.$q['nm_contato'].'", "telefone":"'.$q['nr_telefone'].'", "email:":"'.$q['nm_email'].'"},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	
if (isset($_GET['produtos'])) {
	$id = $_GET['produtos'];
	$pos = ListarProdutos($id);
	$str= '{"Produtos": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_produto'].', "nome":"'.$q['nm_produto'].'", "descrição":"'.$q['ds_produto'].'", "fabricação":"'.$q['dt_fabricacao'].'", "Validade":"'.$q['dt_validade'].'", "Lote":"'.$q['nr_lote'].'", "Quantidade em Estoque":"'.$q['nr_quantidadeEmEstoque'].'", "Local":"'.$q['nm_local'].'", "Valor Venda":"'.$q['vl_venda'].'", "Imagem":"'.$q['img_produto'].'", "id Unidade":"'.$q['id_unidadeProduto'].'", "id categoria":"'.$q['id_categoria'].'", "id Marca":"'.$q['id_marca'].'"},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['categoria'])) {
	$id = $_GET['categoria'];
	$pos = ListarCategoria($id);
	$str= '{"Categoria": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_categoria'].', "nome":"'.$q['nm_categoria'].'", "imagem":"'.$q['img_categoria'].'"},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['unidadeProduto'])) {
	$id = $_GET['unidadeProduto'];
	$pos = ListarUnidadeProduto($id);
	$str= '{"Unidade Produto": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_unidadeProduto'].', "nome":"'.$q['nm_unidadeProduto'].'"},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['marca'])) {
	$id = $_GET['marca'];
	$pos = ListarMarca($id);
	$str= '{"Marca": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_marca'].', "nome":"'.$q['nm_marca'].'", "imagem":"'.$q['img_marca'].'"},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['unidadeProduto'])) {
	$id = $_GET['unidadeProduto'];
	$pos = ListarUnidadeProduto($id);
	$str= '{"unidadeProduto": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_unidadeProduto'].', "nome":"'.$q['nm_unidadeProduto'].'"},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['saida'])) {
	$id = $_GET['saida'];
	$pos = ListarSaida($id);
	$str= '{"saida": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_saida'].', "qt_produtos":'.$q['qt_produto_saida'].', "valor unitario":"'.$q['vl_unitario'].'", "valor total":"'.$q['vl_total'].'", "data":"'.$q['dt_saida'].'", "id usuario":'.$q['id_usuario'].', "id produto":'.$q['id_produto'].', "id tipo saida":'.$q['id_tipoSaida'].'},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['tipoSaida'])) {
	$id = $_GET['tipoSaida'];
	$pos = ListartipoSaida($id);
	$str= '{"tipoSaida": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_tipoSaida'].', "nome":"'.$q['nm_tipoSaida'].'"},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['usuario'])) {
	$id = $_GET['usuario'];
	$pos = ListarUsuario($id);
	$str= '{"usuario": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_usuario'].', "nome":"'.$q['nm_usuario'].'", "telefone":"'.$q['nr_telefone'].'", "login":"'.$q['nm_login'].'", "senha":"'.$q['nm_senha'].'", "img usuario":"'.$q['img_usuario'].'", "status":"'.$q['ds_status'].'", "id tipo de usuario":'.$q['id_tipoUsuario'].'},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['tipoUsuario'])) {
	$id = $_GET['tipoUsuario'];
	$pos = ListartipoUsuario($id);
	$str= '{"tipoUsuario": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_tipoUsuario'].', "nome":"'.$q['nm_tipoUsuario'].'"},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
else if (isset($_GET['entrada'])) {
	$id = $_GET['entrada'];
	$pos = ListarEntrada($id);
	$str= '{"entrada": [';
	$str2 = '[';
	while($q = $pos->fetch_array()){
	   
	   $str2.='{"id":'.$q['cd_entrada'].', "qt_produtos":'.$q['qt_produto_entrada'].', "valor compra":"'.$q['vl_compra'].'", "data":"'.$q['dt_entrada'].'", "id usuario":'.$q['id_usuario'].', "id produto":'.$q['id_produto'].', "id  fornecedor":'.$q['id_fornecedor'].'},';
	}
	$str2=substr($str2, 0, -1);
	$str2.=']';
	echo $str2;
}
//listagem fim
//excluir inicio
else if(isset($_GET['excluir'])){
if(isset($_GET['fornecedor'])){
	$id = $_GET['fornecedor'];
	excluirFornecedor($id);
}
else if(isset($_GET['produto'])){
	$id = $_GET['produto'];
	excluirProduto($id);
}
else if(isset($_GET['categoria'])){
	$id = $_GET['categoria'];
	excluirCategoria($id);
}
else if(isset($_GET['marca'])){
	$id = $_GET['marca'];
	excluirMarca($id);
}
else if(isset($_GET['unidadeProduto'])){
	$id = $_GET['unidadeProduto'];
	excluirUnidadeProduto($id);
}
else if(isset($_GET['saida'])){
	$id = $_GET['saida'];
	excluirSaida($id);
}
else if(isset($_GET['usuario'])){
	$id = $_GET['usuario'];
	excluirUsuario($id);
}
else if(isset($_GET['entrada'])){
	$id = $_GET['entrada'];
	excluirEntrada($id);
}
}
//exluir fim
//cadastro inicio
else if(isset($_GET['acao'])){
	if($_GET['acao']=="usuario"){
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$login = $_POST['login'];
		$senha = md5($_POST['senha']);
		$imagem = $_POST['imagem'];
		$status = $_POST['status'];
		$idTipoUsuario = $_POST['tipoUsuario'];
	if(isset($_POST['id']) && $_POST['id']!=""){
       AtualizarUsuario($_POST['id'],$nome,$telefone,$login,$senha,$imagem,$status,$idTipoUsuario);
    }else{
       CadastrarUsuario($nome,$telefone,$login,$senha,$imagem,$status,$idTipoUsuario);
    }
	}
	else if($_GET['acao']=="fornecedor"){
		$nome = $_POST['nome'];
		$contato = $_POST['contato'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
	 if($_POST['id'] !=""){
        AtualizarFornecedor($_POST['id'],$nome,$contato,$telefone,$email);
    }else{
        CadastrarFornecedor($nome,$contato,$telefone,$email);
    }
	}
	else if($_GET['acao']=="unidadeProduto"){
		$nome = $_POST['nome'];
	if($_POST['id'] !=""){
        AtualizarUnidadeProduto($_POST['id'],$nome);
    }else{
        CadastrarUnidadeProduto($nome);
    }
	}
	else if($_GET['acao']=="categoria"){
		$nome = $_POST['nome'];
		$img = $_POST['img'];
	if($_POST['id'] !=""){
        AtualizarCategoria($_POST['id'],$nome,$img);
    }else{
        CadastrarCategoria($nome,$img);
    }
	}
	else if($_GET['acao']=="marca"){
		$nome = $_POST['nome'];
		$img = $_POST['img'];
	if($_POST['id'] !=""){
        AtualizarMarca($_POST['id'],$nome,$img);
    }else{
        CadastrarMarca($nome,$img);
    }
	}
	else if($_GET['acao']=="tipoSaida"){
		$nome = $_POST['nome'];
	if($_POST['id'] !=""){
        AtualizarTipoSaida($_POST['id'],$nome);
    }else{
        CadastrarTipoSaida($nome);
    }
	}
	else if($_GET['acao']=="tipoUsuario"){
		$nome = $_POST['nome'];
	if($_POST['id'] !=""){
        AtualizarTipoUsuario($_POST['id'],$nome);
    }else{
        CadastrarTipoUsuario($nome);
    }
	}
	else if($_GET['acao']=="produto"){
		$nome = $_POST['nome'];
		$des = $_POST['descricao'];
		$dataFab = $_POST['fabricacao'];
		$dataVal = $_POST['validade'];
		$lote = $_POST['lote'];
		$qtEstoque = $_POST['quantidadeEstoque'];
		$local = $_POST['local'];
		$valVenda = $_POST['valorVenda'];
		$img = $_POST['imagem'];
		$idUnidade = $_POST['idUnidade'];
		$idCategoria = $_POST['idCategoria'];
		$idMarca = $_POST['idMarca'];
	if($_POST['id'] !=""){
        AtualizarProduto($_POST['id'],$nome,$des,$dataFab,$dataVal,$lote,$qtEstoque,$local,$valVenda,$img,$idUnidade,$idCategoria,$idMarca);
    }else{
        CadastrarProduto($nome,$des,$dataFab,$dataVal,$lote,$qtEstoque,$local,$valVenda,$img,$idUnidade,$idCategoria,$idMarca);
    }
	}

	else if($_GET['acao']=="entrada"){
		$quantidadeProduto = $_POST['quantidadeProduto'];
		$valorCompra = $_POST['valorComprar'];
		$data = $_POST['data'];
		$idFornecedor = $_POST['idFornecedor'];
		$idUsuario = $_POST['idUsuario'];
		$idProduto = $_POST['idProduto'];
	if($_POST['id'] !=""){
        AtualizarEntrada($_POST['id'],$quantidadeProduto,$valorCompra,$data,$idFornecedor,$idUsuario,$idProduto);
    }else{
        CadastrarEntrada($quantidadeProduto,$valorCompra,$data,$idFornecedor,$idUsuario,$idProduto);
    }
	}
	else if($_GET['acao']=="saida"){
		$quantidadeProduto = $_POST['quantidadeProduto'];
		$valorUnidade = $_POST['valorUnidade'];
		$valor = $_POST['valor'];
		$data = $_POST['data'];
		$observacao = $_POST['observacao'];
		$idUsuario = $_POST['idUsuario'];
		$idProduto = $_POST['idProduto'];
		$idTipoSaida = $_POST['idTipoSaida'];
	if($_POST['id'] !=""){
        AtualizarSaida($_POST['id'],$quantidadeProduto,$valorUnidade,$valor,$data,$observacao,$idUsuario,$idProduto,$idTipoSaida);
    }else{
        CadastrarSaida($quantidadeProduto,$valorUnidade,$valor,$data,$observacao,$idUsuario,$idProduto,$idTipoSaida);
    }
	}
	else if($_GET['acao']=="login"){
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		loginUsuario($login,$senha);
	}

}
//cadastro fim
else{
	echo $str2;
}


?>