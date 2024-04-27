
<?php

extract($_POST);
include ("conexao_db.php");
conectar($server,$user,$senha,$db);


$SQL = "INSERT INTO veiculos (
situacao_veiculo,
tipo_veiculo,
fabricante_veiculo,
modelo_veiculo,
placa_veiculo,
chassi_veiculo,
kl_veiculo,
id_insumo_veiculo,
proprietario_veiculo,
tanque_veiculo,
id_lotacao_veiculo
)";

$SQL .= "VALUES($situacao_veiculo,'".$tipo_veiculo."','".$fabricante_veiculo."','".$modelo_veiculo."','".$placa_veiculo."','".$chassi_veiculo."',$kl_veiculo,$id_insumo_veiculo,'".$proprietario_veiculo."',$tanque_veiculo,$id_lotacao_veiculo)";
$query = mysql_query($SQL) or die("Não foi possivel".mysql_error());
$idInsert = mysql_insert_id();

/*$SQL = "INSERT INTO estoque (produto,quantidade,valor)";
$SQL.= " VALUES('".$idInsert."','".$qtd."','".$valor."')";
$query = mysql_query($SQL) or die("Não foi possível inserir os dados!<br>".mysql_error());
*/
if($query){
  
echo"<script>window.location = '../view/veiculos.php?sucesso';</script>";
}


?>
  