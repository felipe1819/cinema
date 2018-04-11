<?php
include_once 'crud_cad_funciona.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Cadastro de Funcionários</title>
		<link type="text/css" rel="stylesheet" href ="../css/stylefun.css">

		<link type="text/css" rel="stylesheet" href ="../css/style.css">
		

		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-lBO0+E/aIJhpRIYjP6dJ1mNYgo3hhUBPcF74XRfOM27g7WmDuitolvnUENdDG4QI" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
		
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			 
			 <a href="../index.php"><img class="formiga" src="http://www.jogosdesoletrar.com/data/images/formiga-rainha,-a-formiga-com-uma-vida-mais-longa_51965f0a8b9a5-thumb.jpg"></a>
	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      
	      <li class="nav-item">
	        <a class="nav-link" href="../cliente/cliente.php">Cliente</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../produtos/produtos.php">Produtos</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../vendas/vendas.php">Vendas</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../funcionarios/cad_funciona.php">Funcionários</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../marca/marca.php">Marca</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../regiao/regiao.php">Região de funcionário</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../item_venda/item_venda.php">item_venda</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="../busca.php" method="post">
	      <input name="buscar" class="form-control mr-sm-2" type="text" placeholder="Buscar">
	      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
	    </form>
	  </div>
	</nav>

		<div id="cadastro" class="container">
			<br/>
		
		<form name="form1" class="form-horizontal" method="post" />
			<div class="a">
			<h1>Cadastro de Funcionários:</h1>
			<br/>
			</div>
					<div class="form-gruop">
					
					<label>
					<input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php if(isset($_GET['edit'])) echo $getROW['nome'];  ?>" /></label></br>
					</div>

					<div class="form-gruop">
					
					<label>
					<input type="password" class="form-control" placeholder="Senha" name="senha" value="<?php if(isset($_GET['edit'])) echo $getROW['senha'];  ?>" /></label></br>
					</div>

					<div class="form-gruop">
					
					<label>
					<input type="text" class="form-control" placeholder="C.P.F" name="cpf" value="<?php if(isset($_GET['edit'])) echo $getROW['cpf'];  ?>" /></label></br>
					</div> 

					<div class="form-gruop">
					

					
					<label>
					<select name="regiao_idregiao" class="form-control">
					<option>Selecione a regiao </option>	
					<?php
						$res = $MySQLiconn->query("SELECT * FROM regiao ");
						while($row=$res->fetch_array()){
							$selecionado = "";
							if(isset($_GET['edit'])){
								if ($getROW['regiao_idregiao'] == $row['idregiao']){
									$selecionado = "selected";
								}
							}	

							echo "<option value=".$row['idregiao']." ".$selecionado.">".$row['nome']."</option>"; 
							
						}
					?>

					</select></label>

					
					
					
					
					</div>

					

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
							<td>Id </td>
							<td>Nome </td>
							<td>C.P.F </td>
							<td>Região </td>
							<td>Editar </td>
							<td>Excluir </td>
						</tr>
				</thead>
				<?php
					$res = $MySQLiconn->query("SELECT f.*, r.nome as nome_regiao FROM funcionario f inner join regiao r on f.regiao_idregiao = r.idregiao  ");
					while($row=$res->fetch_array())
					{
						?>
					
					<tbody>
					    <div>
					    <tr>
					    	<td><label><?php echo $row['idfuncionario']; ?></label></td>
						    <td><label><?php echo $row['nome']; ?></label></td>
						    <td><label><?php echo $row['cpf']; ?></label></td>
						    <td><label><?php echo $row['nome_regiao']; ?></label></td>
						    <td><a href="?edit=<?php echo $row['idfuncionario']; ?>" onclick="return confirm('Deseja Editar?'); " >editar</a></td>
							<td><a href="?del=<?php echo $row['idfuncionario']; ?>" onclick="return confirm('Deseja Deletar?'); " >deletar</a></td>
						</tr>						    						
					    </div>
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