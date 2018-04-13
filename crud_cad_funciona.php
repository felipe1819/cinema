<meta charset='utf-8'/>

<?php
include_once 'bd.php';
if(isset($_POST['save']))
{
    $nome = $MySQLiconn->real_escape_string($_POST['nome']);
    $lotacao = $MySQLiconn->real_escape_string(md5($_POST['lotacao']));
    $cep = $MySQLiconn->real_escape_string($_POST['cep_idendereco']);
    $numero = $MySQLiconn->real_escape_string($_POST['numero']);
    $complemento = $MySQLiconn->real_escape_string($_POST['complemento']);
	
	$SQL = $MySQLiconn->query("INSERT INTO cinema(nome, lotacao, cep_idendereco, numero, complemento) VALUES('$nome','$lotacao','$cep','$numero', '$complemento')");
	 
	if(!$SQL)
	{
		 echo $MySQLiconn->error;
	} 
}
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM cinema WHERE idcinema=".$_GET['del']);
	header("Location: formulario_cinema.php");
}
if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM cinema WHERE idcinema=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE cinema SET	nome='".$_POST['nome']."'
												,lotacao='".$_POST['lotacao']."'
												,cep='".$_POST['cep']."'
												,numero='".$_POST['numero']."'
												,complemento='".$_POST['complemento']."'
												WHERE idfuncionario=".$_GET['edit']);
	header("Location: formulario_cinemaa.php");
}
?>