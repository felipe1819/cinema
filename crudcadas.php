<?php

include_once 'bd.php';


/* code for TIME insert */
if(isset($_POST['save']))
{

     $titulo = $MySQLiconn->real_escape_string($_POST['titulo']);
     $imagem = $MySQLiconn->real_escape_string($_POST['imagem']);
	 $duracao = $MySQLiconn->real_escape_string($_POST['duracao']);
	 $genero = $MySQLiconn->real_escape_string($_POST['genero']);
	 $sinopse = $MySQLiconn->real_escape_string($_POST['sinopse']);
	 $classificacao = $MySQLiconn->real_escape_string($_POST['classificacao']);
	 $nacionalidade = $MySQLiconn->real_escape_string($_POST['nacionalidade']);
	 $ator_idelenco = $MySQLiconn->real_escape_string($_POST['ator_idelenco']);
	 $diretor_iddiretor = $MySQLiconn->real_escape_string($_POST['diretor_iddiretor']);
	
	 $SQL = $MySQLiconn->query("INSERT INTO filme(titulo, imagem, duracao, genero, sinopse, classificacao, nacionalidade, ator_idelenco, diretor_iddiretor) VALUES('$titulo', '$imagem','$duracao','$genero','$sinopse','$classificacao','$nacionalidade','$ator_idelenco', '$diretor_iddiretor')");
	 
	 if(!$SQL)
	 {
		 echo $MySQLiconn->error;
	 } else {
	 	 $_POST['ok'] = 1;
		 
	 }

	 
}
/* code for TIME insert */


/* code for TIME delete */
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM filme WHERE idfilme=".$_GET['del']);
	header("Location: cadasfilme.php");
}
/* code for TIME delete */



/* code for TIME update */
if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM filme WHERE idfilme=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE filme SET     titulo='".$_POST['titulo']."'
												,imagem='".$_POST['imagem']."'
												,duracao='".$_POST['duracao']."'
												,genero='".$_POST['genero']."'
												,sinopse='".$_POST['sinopse']."'
												,classificacao='".$_POST['classificacao']."'
												,nacionalidade='".$_POST['nacionalidade']."'
												,ator_idelenco='".$_POST['ator_idelenco']."'
												,diretor_iddiretor='".$_POST['diretor_iddiretor']."'
												WHERE idfilme=".$_GET['edit']);
	header("Location: cadasfilme.php");
}
/* code for TIME update */

?>