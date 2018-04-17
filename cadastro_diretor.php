<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de diretores</title>
  
  	<meta charset="utf-8">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.0/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-kCsv8pSAWtRge/+zcLDeqwoWhTQSUX2esQPYOsocgrg1eMj7T2wrTJP348T3mpBU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

  
</head>
<body>
</head>
<body>
	<div id="form" class="container">
		<form method="post">
		
		<fieldset>
			<legend>Diretor</legend>

				 <div class="form-group">
      				<input placeholder="Digite o nome do diretor" class="form-control" type="text" name="nome" value="<?php if(isset($_GET['edit'])) echo $getROW['nome'];  ?>" required />
    			</div>

    			<div class="form-group">
      				<input placeholder="Digite a Nacionalidade do diretor" class="form-control" type="text" name="nacionalidade" value="<?php if(isset($_GET['edit'])) echo $getROW['nacionalidade'];  ?>" required />
    			</div>

    			<div class="form-group">
      				<input placeholder="Insira a idade do diretor" class="form-control" type="date" name="nascimento" value="<?php if(isset($_GET['edit'])) echo $getROW['nascimento'];  ?>" required />
    			</div>
				
		</fieldset>
											
					<?php
						if(isset($_GET['edit']))
						{
							?>
							<input type="submit" class="btn btn-default col-md-2" name="update" value="Atualizar"/>
							<?php
						}
						else
						{
							?>
							<input type="submit" class="btn btn-default col-md-2" name="save" value="Salvar"/>
							<?php
						}
						?>			
		</form>



	<?php
$res = $MySQLiconn->query("SELECT * FROM diretor");
while($row=$res->fetch_array())
{
	?>
	
	<?php echo $row['nome']; ?><br/>
	<?php echo $row['nacionalidade']; ?><br/>
	<?php echo $row['nascimento']; ?><br/>

	<a href="?edit=<?php echo $row['iddiretor']; ?>" onclick="return confirm('Tem certeza que quer alterar ?'); " class="btn btn-primary" >Editar</a>
	<a href="?del=<?php echo $row['iddiretor']; ?>" onclick="return confirm('Tem certeza que quer  apagar ?'); " class="btn btn-danger" >Apagar</a>
    <br/>
	</div>
    <?php
}
?>
</body>

</body>
</html>