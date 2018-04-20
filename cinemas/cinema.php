<?php
include_once 'crud_cad_funciona.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Cadastro de Cinemas</title>
		

		<link type="text/css" rel="stylesheet" href ="style.css">
		

		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-lBO0+E/aIJhpRIYjP6dJ1mNYgo3hhUBPcF74XRfOM27g7WmDuitolvnUENdDG4QI" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      
	      <li class="nav-item">
	        <a class="nav-link" href=""></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="">Cinemas</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=""></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../cartaz/cartazfilme.php">Filmes em Sessão</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="../busca.php" method="post">
	      <input name="buscar" class="form-control mr-sm-2" type="text" placeholder="Buscar">
	      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
	    </form>
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