<?php
include_once 'crudator.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Atores</title>
  
  	<meta charset="utf-8">

  <link type="text/css" rel="stylesheet" href ="style.css">
		

		<link rel="stylesheet" href="style1.css">
    
    

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.0/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-kCsv8pSAWtRge/+zcLDeqwoWhTQSUX2esQPYOsocgrg1eMj7T2wrTJP348T3mpBU" crossorigin="anonymous">


<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

  
</head>
<body>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="cartaz/cartazfilme.php">Filmes em Cartaz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cinemas/cinema.php">Cinemas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cep.php">C.E.P</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario_cinema.php">Cadastro de Cinema</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario_sala2.php">Cadastro de Sala</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadasator.php">Cadastro de Ator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro_diretor.php">Cadastro de Diretor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadasfilme.php">Cadastro de Filmes</a>
        </li>
      </ul>
      
    </div>
  </nav>
  
	<div id="form" class="container">
		<form method="post">
		
		<fieldset>
			<legend>Ator</legend>

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
$res = $MySQLiconn->query("SELECT * FROM ator");
while($row=$res->fetch_array())
{
	?>
	
	<?php echo $row['nome']; ?><br/>
	<?php echo $row['nacionalidade']; ?><br/>
	<?php echo $row['nascimento']; ?><br/>

	<a href="?edit=<?php echo $row['idelenco']; ?>" onclick="return confirm('Tem certeza que quer alterar ?'); " class="btn btn-primary" >Editar</a>
	<a href="?del=<?php echo $row['idelenco']; ?>" onclick="return confirm('Tem certeza que quer  apagar ?'); " class="btn btn-danger" >Apagar</a>
    <br/>
	</div>
    <?php
}
?>
</body>

</body>
</html>