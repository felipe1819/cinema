<meta charset='utf-8'/>

<?php
include_once 'bd.php';
if(isset($_POST['save']))
{
	$nome = $MySQLiconn->real_escape_string($_POST['nome']);
    $cinema = $MySQLiconn->real_escape_string($_POST['cinema_idcinema']);
    $capacidade = $MySQLiconn->real_escape_string($_POST['capacidade']);
  
  	$SQL = $MySQLiconn->query("INSERT INTO sala(nome, cinema_idcinema, capacidade) VALUES('$nome','$cinema','$capacidade')");
	 
	if(!$SQL)
	{
		 echo $MySQLiconn->error;
	} 
	else 
		header("Location: formulario_sala2.php");
}
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM sala WHERE idsala=".$_GET['del']);
	header("Location: formulario_sala2.php");
}
if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM sala WHERE idsala=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE sala SET nome='".$_POST['nome']."'
												,cinema_idcinema='".$_POST['cinema_idcinema']."'
												,capacidade='".$_POST['capacidade']."'
												
												WHERE idfuncionario=".$_GET['edit']);
	header("Location: formulario_sala2.php");
}
?>