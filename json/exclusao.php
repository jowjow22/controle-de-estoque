<?php
include_once('conexao.php');
function excluirFornecedor($id){
    $sql = 'delete from tb_fornecedor where cd_fornecedor='.$id;
    $res = $GLOBALS['con']->query($sql);
    if($res){
        echo 'Excluido!';
    }else{
        echo 'Erro ao excluir.';
    }
}
function excluirProduto($id){
    $sql = 'delete from tb_produto where cd_produto='.$id;
    $res = $GLOBALS['con']->query($sql);
    if($res){
        echo 'Excluido!';
    }else{
        echo 'Erro ao excluir.';
    }
}
function excluirCategoria($id){
    $sql = 'delete from tb_categoria where cd_categoria='.$id;
    $res = $GLOBALS['con']->query($sql);
    if($res){
        echo 'Excluido!';
    }else{
        echo 'Erro ao excluir.';
    }
}
function excluirMarca($id){
    $sql = 'delete from tb_marca where cd_marca='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Excluido!';
    }else{
        echo 'Erro ao excluir.';
    }
}
function excluirUnidadeProduto($id){
    $sql = 'delete from tb_unidadeProduto where cd_unidadeProduto='.$id;
    $res = $GLOBALS['con']->query($sql);
    if($res){
        echo 'Excluido!';
    }else{
        echo 'Erro ao excluir.';
    }
}
function excluirSaida($id){
    $sql = 'delete from tb_saida where cd_saida='.$id;
    $res = $GLOBALS['con']->query($sql);
    if($res){
        echo 'Excluido!';
    }else{
        echo 'Erro ao excluir.';
    }
}
function excluirUsuario($id){
    $sql = 'delete from tb_usuario where cd_usuario='.$id;
    $res = $GLOBALS['con']->query($sql);
    if($res){
        echo 'Excluido!';
    }else{
        echo 'Erro ao excluir.';
    }
}
function excluirEntrada($id){
    $sql = 'delete from tb_entrada where cd_entrada='.$id;
    $res = $GLOBALS['con']->query($sql);
    if($res){
        echo 'Excluido!';
    }else{
        echo 'Erro ao excluir.';
    }
}
?>