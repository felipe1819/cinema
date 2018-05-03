

<?php
include_once 'bd.php';
if(isset($_POST['save']))
{
	$idendereco = $MySQLiconn->real_escape_string($_POST['idendereco']);
    $rua = $MySQLiconn->real_escape_string($_POST['rua']);
    $bairro = $MySQLiconn->real_escape_string($_POST['bairro']);
    $cidade = $MySQLiconn->real_escape_string($_POST['cidade']);
    $estado = $MySQLiconn->real_escape_string($_POST['estado']);
  
  	$SQL = $MySQLiconn->query("INSERT INTO cep(idendereco, rua, bairro, cidade, estado) VALUES('$idendereco','$rua','$bairro','$cidade','$estado')");
	 
	if(!$SQL)
	{
		 echo $MySQLiconn->error;
	} 
	
}

if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM cep WHERE idendereco=".$_GET['del']);
	header("Location: cep.php");
}

if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM cep WHERE idendereco=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE cep SET idendereco='".$_POST['idendereco']."'
												,rua='".$_POST['rua']."'
												,bairro='".$_POST['bairro']."'
												,cidade='".$_POST['cidade']."'
												,estado='".$_POST['estado']."'
												WHERE idendereco=".$_GET['edit']);
	header("Location: cep.php");
}
?>