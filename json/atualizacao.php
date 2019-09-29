<?php
include_once('conexao.php');
function AtualizarFornecedor($id,$nome,$contato,$telefone,$email){
    $sql = 'update tb_unidadeProduto set nm_fornecedor="'.$nome.'", nr_telefone="'.$telefone.'",nm_contato="'.$contato.'", nm_email="'.$email.'" where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }
}
function AtualizarUnidadeProduto($id,$nome){
    $sql = 'update tb_unidadeProduto set nm_unidadeProduto="'.$nome.'" where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }
}
function AtualizarCategoria($id,$nome,$img){
    $sql = 'update tb_categoria set nm_categoria="'.$nome.'", img_categoria="'.$img.'" where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }
}
function AtualizarMarca($id,$nome,$img){
    $sql = 'update tb_marca set nm_marca="'.$nome.'", img_marca="'.$img.'" where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }
function AtualizarTipoSaida($id,$nome){
    $sql = 'update tb_tipoSaida set nm_tipoSaida="'.$nome.'" where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }
}
function AtualizarTipoUsuario($id,$nome){
    $sql = 'update tb_tipoUsuario set nm_tipoUsuario="'.$nome.'" where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }
}
function AtualizarEntrada($id,$quantidadeProduto,$valorCompra,$data,$idFornecedor,$idUsuario,$idProduto){
    $sql = 'update tb_entrada set qt_produto_entrada='.$quantidadeProduto.', vl_compra='.$valorCompra.', dt_entrada='.$data.', id_fornecedor = '.$idFornecedor.', id_usuario='.$idUsuario.', id_produto = '.$idProduto.' where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }
}
function AtualizarSaida($id,$quantidadeProduto,$valorUnidade,$valor,$data,$observacao,$idUsuario,$idProduto,$idTipoSaida){
    $sql = 'update tb_saida set qt_produto_saida='.$quantidadeProduto.', vl_unidade='.$valorUnidade.', vl_saida='.$valor.',dt_saida = '.$data.',ds_observacao = "'$observacao'", id_tipoSaida = '.$idTipoSaida.', id_usuario='.$idUsuario.', id_produto = '.$idProduto.' where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }
}
function AtualizarProduto($id,$nome,$des,$dataFab,$dataVal,$lote,$qtEstoque,$local,$valVenda,$img,$idUnidade,$idCategoria,$idMarca){
    $sql = 'update tb_produto set nm_produto="'.$nome.'", ds_produto="'.$des.'", dt_fabricacao='.$dataFab.',dt_validade = '.$dataVal.',nr_lote = "'$lote'",qt_quantidadeEmEstoque = '.$qtEstoque.',nm_local = "'.$local.'",vl_venda = '.$valVenda.',img_produto = "'.$img.'", id_unidade = '.$idUnidade.', id_categoria='.$idCategoria.', id_marca = '.$idMarca.' where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }	
}
function AtualizarUsuario($id,$nome,$telefone,$login,$senha,$imagem,$status,$idTipoUsuario){
    $sql = 'update tb_usuario set nm_usuario = "'.$nome.'", nr_telefone = "'.$telefone.'", nm_login = "'.$login.'", nm_senha = "'.$senha.'", img_usuario = "'.$imagem.'", ds_status = "'.$status.'", id_tipoUsuario = '.$idTipoUsuario.'  where id='.$id;
    $res = $GLOBALS['conn']->query($sql);
    if($res){
        echo 'Atualizado!';
    }else{
        echo 'Erro ao atualizar.';
    }	
}

?>