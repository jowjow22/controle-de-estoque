<?php
include_once('conexao.php');
function CadastrarFornecedor($nome,$contato,$telefone,$email){
    $sql = 'insert into tb_fornecedor values(null,"'.$nome.'","'.$contato.'","'.$telefone.'","'.$email.'")';
    $res = $GLOBALS['con']->query($sql);
    if($res){
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.';
    }
}
function cadastrarUnidadeProduto($nome){
	$sql = 'insert into tb_unidadeProduto values(null,"'.$nome.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.';
    }
}
function cadastrarCategoria($nome,$img){
	$sql = 'insert into tb_categoria values(null,"'.$nome.'","'.$img.'"")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.';
    }
}
function cadastrarMarca($nome,$img){
	$sql = 'insert into tb_marca values(null,"'.$nome.'","'.$img.'"")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.';
    }
}
function cadastrarTipoSaida($nome){
	$sql = 'insert into tb_tipoSaida values(null,"'.$nome.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.';
    }
}
function cadastrarTipoUsuario($nome){
	$sql = 'insert into tb_tipoUsuario values(null,"'.$nome.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.';
    }
}
 function cadastrarProduto($nome,$des,$dataFab,$dataVal,$lote,$qtEstoque,$local,$valVenda,$img,$idUnidade,$idCategoria,$idMarca){
 	$sql = 'insert into tb_produto values(null,"'.$nome.'","'.$des.'",'.$dataFab.','.$dataVal.',"'.$lote.'",'.$qtEstoque.',"'.$local.'",'.$valVenda.',"'.$img.'",'.$idUnidade.','.$idCategoria.','.$idMarca.')';
 	$res = $GLOBALS['con']->query($sql);
 	if($res){
        echo 'Cadastrado!';
    }
    else{
        echo 'Erro ao cadastrar.';
   	}
   }
  function cadastrarUsuario($nome,$telefone,$login,$senha,$imagem,$status,$idTipoUsuario){
 	$sql = 'insert into tb_usuario values (null, "'.$nome.'","'.$telefone.'","'.$login.'","'.$senha.'","'.$imagem.'","'.$status.'",'.$idTipoUsuario.')';
 	$res = $GLOBALS['con']->query($sql);
 	if($res){
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.:';

    }
 }
function cadastrarEntrada($quantidadeProduto,$valorCompra,$data,$idFornecedor,$idUsuario,$idProduto){
 	$sql = 'insert into tb_entrada (null,'.$quantidadeProduto.', '.$valorCompra.','.$data.', '.$idFornecedor.','.$idUsuario.','.$idProduto.')';
 	$res = $GLOBALS['con']->query($sql);
 	if($res){
 		$sql2 = 'insert into tb_fornecedor_produto values ('.$idFornecedor.','.$idProduto.')';
 		$GLOBALS['con']->query($sql2);
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.';
    }
 }
function cadastrarSaida($quantidadeProduto,$valorUnidade,$valor,$data,$observacao,$idUsuario,$idProduto,$idTipoSaida){
 	$sql = 'insert into tb_saida (null,'.$quantidadeProduto.','.$valorUnidade.','.$valor.','.$data.',"'.$observacao.'",'.$idUsuario.','.$idProduto.','.$idFornecedor.')';
 	$res = $GLOBALS['con']->query($sql);
 	if($res){
        echo 'Cadastrado!';
    }else{
        echo 'Erro ao cadastrar.';
    }
 }
 function loginUsuario($login,$senha){
    $sql = 'select * from tb_usuario where nm_login = "'.$login.'" and nm_senha = "'.md5($senha).'"';
    $res = $GLOBALS['con']->query($sql);
    if ($res->num_rows > 0) {
        $dadoCD = $res->fetch_array();
        session_start();
        $_SESSION['cd_usuario'] = $dadoCD['cd_usuario'];
        echo "areaPrivada.php";
    }
    else{
        echo "login.php";

    }
 }
?>