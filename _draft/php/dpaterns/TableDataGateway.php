<?php
/*
 * Table Data Gateway
 */
class ProdutoGateway
{

    function insert($id, $descricao, $estoque, $preco_custo){
        $sql = "INSERT INTO Produtos (id, descricao, estoque, preco_custo)" .
               " VALUES ('$id', '$descricao', '$estoque', '$preco_custo')";
    }


    function update($id, $descricao, $estoque, $preco_custo){
        $sql = "UPDATE produtos set descricao = '$descricao', " .
               "   estoque = '$estoque', preco_custo = '$preco_custo' ".
               "   WHERE id = '$id'";
    }


    function delete($id){
        $sql = "DELETE FROM produtos where id='$id'";
    }


    function getObject($id){
        $sql = "SELECT * FROM produtos where id='$id'";
    }


    function getObjects(){
        $sql = "SELECT * FROM produtos";
    }
}


?>