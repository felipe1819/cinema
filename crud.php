<?php

include_once 'diretor.php';

/* code for TIME insert */
if(isset($_POST['save']))
{

     $nome = $MySQLiconn->real_escape_string($_POST['nome']);
     $nacionalidade = $MySQLiconn->real_escape_string($_POST['nacionalidade']);
	 $nascimento = $MySQLiconn->real_escape_string($_POST['nascimento']);
	
	 $SQL = $MySQLiconn->query("INSERT INTO diretor (nome,nacionalidade,nascimento) VALUES('$nome','$nacionalidade','$nascimento')");
	 
	 if(!$SQL)
	 {
		 echo $MySQLiconn->error;
	 } 
}
/* code for TIME insert */


/* code for TIME delete */
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM diretor WHERE iddiretor=".$_GET['del']);
	header("Location: cadastro_diretor.php");
}
/* code for TIME delete */



/* code for TIME update */
if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM diretor WHERE iddiretor=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE diretor SET     nome='".$_POST['nome']."'
												,nacionalidade='".$_POST['nacionalidade']."'
												,nascimento='".$_POST['nascimento']."'
												WHERE iddiretor=".$_GET['edit']);
	header("Location: cadastro_diretor.php");
}
/* code for TIME update */

?>