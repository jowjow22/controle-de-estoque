<?php
include_once('conexao.php');
$id = 0;
function ListarFornecedor($id){
	$sql = 'select * from tb_fornecedor';
	if ($id > 0) {
		$sql .=  ' where cd_fornecedor = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarProdutos($id){
	$sql = "SELECT * FROM tb_produto";
	if ($id > 0) {
		$sql .= ' WHERE cd_produto = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarCategoria($id){
	$sql = "SELECT * FROM tb_categoria";
	if ($id > 0) {
		$sql .= ' WHERE cd_categoria = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarMarca($id){
	$sql = "SELECT * FROM tb_marca";
	if ($id > 0) {
		$sql .= ' WHERE cd_marca = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarUnidadeProduto($id){
	$sql = "SELECT * FROM tb_unidadeProduto";
	if ($id > 0) {
		$sql .= ' WHERE cd_unidadeProduto = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarSaida($id){
	$sql = "SELECT * FROM tb_saida";
	if ($id > 0) {
		$sql .= ' WHERE cd_saida = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarTipoSaida($id){
	$sql = "SELECT * FROM tb_tipoSaida";
	if ($id > 0) {
		$sql .= ' WHERE cd_tipoSaida = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarUsuario($id){
	$sql = "SELECT * FROM tb_usuario";
	if ($id > 0) {
		$sql .= ' WHERE cd_usuario = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarTipoUsuario($id){
	$sql = "SELECT * FROM tb_tipoUsuario";
	if ($id > 0) {
		$sql .= ' WHERE cd_tipoUsuario = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function ListarEntrada($id){
	$sql = "SELECT * FROM tb_entrada";
	if ($id > 0) {
		$sql .= ' WHERE cd_entrada = '.$id; 
	}
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
?>