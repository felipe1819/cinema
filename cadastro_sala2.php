

<?php
include_once 'bd.php';
if(isset($_POST['save']))
{
	$idsala = $MySQLiconn->real_escape_string($_POST['idsala']);
    $filme_idfilme = $MySQLiconn->real_escape_string($_POST['filme_idfilme']);
    $cinema_idcinema = $MySQLiconn->real_escape_string($_POST['cinema_idcinema']);
    $hora_i_f = $MySQLiconn->real_escape_string($_POST['hora_i_f']);
  
  	$SQL = $MySQLiconn->query("INSERT INTO sala_sessao(idsala, filme_idfilme, cinema_idcinema, hora_i_f) VALUES('$idsala','$filme_idfilme','$cinema_idcinema','$hora_i_f')");
	 
	if(!$SQL)
	{
		 echo $MySQLiconn->error;
	} 
	
}

if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM sala_sessao WHERE idsala=".$_GET['del']);
	header("Location: formulario_sala2.php");
}

if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM sala_sessao WHERE idsala=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE sala_sessao SET idsala='".$_POST['idsala']."'
												,filme_idfilme='".$_POST['filme_idfilme']."'
												,cinema_idcinema='".$_POST['cinema_idcinema']."'
												,hora_i_f='".$_POST['hora_i_f']."'
												WHERE idsala=".$_GET['edit']);
	header("Location: formulario_sala2.php");
}
?>