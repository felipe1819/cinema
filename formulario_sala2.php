<?php
  include_once 'cadastro_sala2.php';
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

		<div id="cadastro" class="container">
			<br/>
		
		<form class="form-horizontal" method="post">
			<div class="a">
			<h1>Cadastro de Salas:</h1>
			<br/>
			</div>
					
					<div class="form-gruop">
					
					<label>
						<div class="form-group">
					<input type="text" class="form-control" placeholder="Numero da sala" name="idsala" value="<?php if(isset($_GET['edit'])) echo $getROW['idsala'];  ?>" />
						</div>
					</label></br>

						<label>
			        <select name="filme_idfilme" class="form-control">
			          <option>Selecione o Filme </option>  
			          <?php
			            $res = $MySQLiconn->query("SELECT * FROM filme ");
			            while($row=$res->fetch_array()){
			              $selecionado = "";
			              if(isset($_GET['edit'])){
			                if ($getROW['filme_idfilme'] == $row['idfilme']){
			                  $selecionado = "selected";
			                }
			              } 
			              echo "<option value=".$row['idfilme']." ".$selecionado.">".$row['titulo']."</option>"; 
			              
			            }
			          ?>

			        </select>
			</label></br>
					


			<label>	
			        <select name="cinema_idcinema" class="form-control">
			          <option>Selecione o Cinema </option>  
			          <?php
			            $res = $MySQLiconn->query("SELECT * FROM cinema ");
			            while($row=$res->fetch_array()){
			              $selecionado = "";
			              if(isset($_GET['edit'])){
			                if ($getROW['cinema_idcinema'] == $row['idcinema']){
			                  $selecionado = "selected";
			                }
			              } 
			              echo "<option value=".$row['idcinema']." ".$selecionado.">".$row['nome']."</option>"; 
			              
			            }
          ?>

        </select>
</label></br>

				<label>
						<div class="form-group">
					<input type="text" class="form-control" placeholder="Hora Inicio e Hora Fim" name="hora_i_f" value="<?php if(isset($_GET['edit'])) echo $getROW['hora_i_f'];  ?>" />
						</div>
				</label></br>

				
					

								

				 	<?php
						if(isset($_GET['edit']))
						{
							?>
							<input type="submit" class="btn btn-primary col-md-2" name="update" value="Atualizar"/>
							<?php
						}
						else
						{
							?>
							<input type="submit" class="btn btn-primary col-md-2" name="save" value="Salvar"/>
							<?php
						}
					?>
		
		</form>
	


			</br></br></br>

			<div id="update" class="form-gruop">
			<table border="2" class="table table-hover">
				<thead>
						<tr>
							<td>Número da sala </td>
							<td>Filme </td>
							<td>Cinema </td>
							<td>Hora I/F </td>
							<td>Editar </td>
							<td>Excluir </td>
						</tr>
				</thead>
				<?php
					$res = $MySQLiconn->query("SELECT * FROM sala_sessao");
					while($row=$res->fetch_array())
					{
						?>
					
					<tbody>
					    <div>
					    <tr>
					    	<td><label><?php echo $row["idsala"]; ?></label></td>
					    	<td><label><?php echo $row["filme_idfilme"]; ?></label></td>
					    	<td><label><?php echo $row["cinema_idcinema"]; ?></label></td>
					    	<td><label><?php echo $row["hora_i_f"]; ?></label></td>
					    	
						    <td><a href="?edit=<?php echo $row['idsala']; ?>" onclick="return confirm('Deseja Editar?'); " >editar</a></td>
							<td><a href="?del=<?php echo $row['idsala']; ?>" onclick="return confirm('Deseja Deletar?'); " >deletar</a></td>
						</tr>						    						
					    </div>
					</tbody>
					    <?php
					}
					?>

					
			</table>
		</div>
					</div>





	</body>
</html>