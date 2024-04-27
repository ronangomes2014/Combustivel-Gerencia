
<?php

extract($_POST);
include ("conexao_db.php");
conectar($server,$user,$senha,$db);

$SQL = "INSERT INTO fornecedor (
nome_fantasia_fornecedor ,
endereco_fornecedor ,
cnpj_fornecedor ,
bairro_fornecedor ,
cidade_fornecedor ,
cep_fornecedor ,
fone_fornecedor ,
celular_fornecedor ,
contato_fornecedor ,
razao_social_fornecedor ,
email_fornecedor
)";

$SQL .= "VALUES('".$nome_fantasia_fornecedor."','".$endereco_fornecedor."',$cnpj_fornecedor,'".$bairro_fornecedor."','".$cidade_fornecedor."',$cep_fornecedor,'".$fone_fornecedor."','".$celular_fornecedor."','".$contato_fornecedor."','".$razao_social_fornecedor."','".$email_fornecedor."')";
$query = mysql_query($SQL) or die("Não foi possivel".mysql_error());
$idInsert = mysql_insert_id();

/*$SQL = "INSERT INTO estoque (produto,quantidade,valor)";
$SQL.= " VALUES('".$idInsert."','".$qtd."','".$valor."')";
$query = mysql_query($SQL) or die("Não foi possível inserir os dados!<br>".mysql_error());
*/
if($query){
  
echo"<script>window.location = '../view/fornecedor.php?sucesso';</script>";
}


?>
  