<?php

extract($_POST);
echo "$id_insumo_veiculo";

/*
if($fornecedor<=0){
    echo "<script>alert('Selecione um Fornecedor Válido!');</script>";
    echo"<script>window.location = 'inserir_produto.php';</script>";
    
}else{
include ("./conexao_db.php");
conectar($server,$user,$senha,$db);
$SQL = "INSERT INTO produto (descricao,tipo,fornecedor)";
$SQL .= " VALUES('".$des."','".$tipo."','".$fornecedor."')";
$query = mysql_query($SQL) or die("Nao foi possivel realizar a consulta!<br>".mysql_error());
$idInsert = mysql_insert_id();

$SQL = "INSERT INTO estoque (produto,quantidade,valor)";
$SQL.= " VALUES('".$idInsert."','".$qtd."','".$valor."')";
$query = mysql_query($SQL) or die("Não foi possível inserir os dados!<br>".mysql_error());



}
if($query){

echo "<script>alert('Produto Inserido com Sucesso!');</script>";
echo"<script>window.location = 'listar_produto.php';</script>";
}
else{
echo "<script>alert('Produto Não Inserido');</script>";
echo"<script>window.location = 'listar_produto.php';</script>";
}
*/

?>
  