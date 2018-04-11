<meta charset='utf-8'/>

<?php

include_once 'db.php';

if(isset($_POST['save']))
{

    $nome = $MySQLiconn->real_escape_string($_POST['nome']);
    $senha = $MySQLiconn->real_escape_string(md5($_POST['senha']));
    $cpf = $MySQLiconn->real_escape_string($_POST['cpf']);
    $regiao_idregiao = $MySQLiconn->real_escape_string($_POST['regiao_idregiao']);
	

	$SQL = $MySQLiconn->query("INSERT INTO funcionario(nome,senha,cpf,regiao_idregiao) VALUES('$nome','$senha','$cpf','$regiao_idregiao')");
	 
	if(!$SQL)
	{
		 echo $MySQLiconn->error;
	} 
}

if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM funcionario WHERE idfuncionario=".$_GET['del']);
	header("Location: cad_funciona.php");
}


if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM funcionario WHERE idfuncionario=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE funcionario SET	nome='".$_POST['nome']."'
												,senha='".md5($_POST['senha'])."'
												,cpf='".$_POST['cpf']."'
												,regiao_idregiao='".$_POST['regiao_idregiao']."'
												WHERE idfuncionario=".$_GET['edit']);
	header("Location: cad_funciona.php");
}


?>