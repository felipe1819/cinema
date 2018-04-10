<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		$cep = $_POST['rua'];
		$numero = $_POST['bairro'];
		$complemento = $_POST['cidade'];
		
		$sql = mysql_query("INSERT INTO cinema(nome, lotacao, cep, numero, complemento) VALUES ('$nome', '$lotacao', '$cep', '$numero', '$complemento')");
		
			echo "<center><h>Cadastro realizado com sucesso!</h></center>";

			echo "<script>cadastrosuccessfully()</script>";

?>
</body>
</html>