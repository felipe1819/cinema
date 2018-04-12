<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
function cadastrosuccessfully() {
			setTimeout("window.location ='formulario_cinema.php'", 2000);
		}

	</script>

</head>
<body>
	<?php
		include_once("bd.php");

		$nome = $_POST['nome'];
		$lotacao = $_POST['lotacao'];
		$cep = $_POST['cep'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];

		$sql = mysqli_query($MySQLiconn,"INSERT INTO cinema(idcinema, nome, lotacao, cep_idendereco, numero, complemento) VALUES (null,'$nome', '$lotacao', '$cep', '$numero', '$complemento')");
		
			echo "<center><h2>Cadastro realizado com sucesso!</h2></center>";

			echo "<script>cadastrosuccessfully()</script>";

?>
</body>
</html>