<?php
include_once 'crud_cad_funciona.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Cadastro de Cinemas</title>
		

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
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="../cartaz/cartazfilme.php">Filmes em Cartaz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cinemas/cinema.php">Cinemas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cep.php">C.E.P</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../formulario_cinema.php">Cadastro de Cinema</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../formulario_sala2.php">Cadastro de Sala</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cadasator.php">Cadastro de Ator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cadastro_diretor.php">Cadastro de Diretor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cadasfilme.php">Cadastro de Filmes</a>
        </li>
      </ul>
      
    </div>
  </nav>

	</br>

		<div class="cinema">

		Locais dos Cinemas

		</div>

			</br></br></br>



			<div id="update" class="form-gruop">
			<table class="table table-hover">
				<thead>
						<tr class="princ">
							<td>Nome</td>
							<td>Lotação</td>
							<td>CEP </td>
							<td>Número </td>
							<td>Complemento </td>
							
						</tr>
				</thead>

			</div>

				<?php
					$res = $MySQLiconn->query("SELECT * FROM cinema");
					while($row=$res->fetch_array())
					{
						?>
					
					<tbody>
					    
					   <tr class="echo">
					    	
					    	<td><label><?php echo $row['nome']; ?></label></td>
						    <td><label><?php echo $row['lotacao']; ?></label></td>
						    <td><label><?php echo $row['cep_idendereco']; ?></label></td>
						    <td><label><?php echo $row['numero']; ?></label></td>
						    <td><label><?php echo $row['complemento']; ?></label></td>
						    
						</tr>	
										    						
					    
					</tbody>

					    <?php
					}
					?>

					
			</table>
		</div>
		</div>

<script src="../js/jquery-3.2.1.min.js"></script> 
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


	</body>
</html>