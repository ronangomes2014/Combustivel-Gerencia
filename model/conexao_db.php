<?php
$server="localhost";
$user='root';
$senha='';
$db='combustivel';

function conectar($server,$user,$senha,$db)
{
$conexao=mysql_connect($server,$user,$senha) or 
die("Conexao com o servidor falhou!<br>".mysql_error());

$banco=mysql_select_db($db);

}



?>
