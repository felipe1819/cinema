<?php
  include_once 'crudcadas.php';
?>
<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>Cadastro de Filmes</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.0/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-kCsv8pSAWtRge/+zcLDeqwoWhTQSUX2esQPYOsocgrg1eMj7T2wrTJP348T3mpBU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</head>
<body>

<div id="form" class="container">
<form method="post">
  <fieldset>

    <legend>Cadastrar Filmes</legend>

    <div class="form-group">
      <input placeholder="Digite o nome do filme" class="form-control" type="text" name="titulo" value="<?php if(isset($_GET['edit'])) echo $getROW['titulo'];  ?>" required />
    </div>

    <div class="form-group">
      <input placeholder="Insira a imagem do filme" class="form-control" type="text" name="imagem" value="<?php if(isset($_GET['edit'])) echo $getROW['imagem'];  ?>" required />
    </div>

    <div class="form-group">
      <input placeholder="Digite a duração do filme" class="form-control" type="text" name="duracao" value="<?php if(isset($_GET['edit'])) echo $getROW['duracao'];  ?>" required />
    </div>

    <div class="form-group">
      <input placeholder="Digite o gênero do filme" class="form-control" type="text" name="genero" value="<?php if(isset($_GET['edit'])) echo $getROW['genero'];  ?>" required />
    </div>

    <div class="form-group">
      <input placeholder="Digite a sinopse do filme" class="form-control" type="text" name="sinopse" value="<?php if(isset($_GET['edit'])) echo $getROW['sinopse'];  ?>" required />
    </div>

    <div class="form-group">
      <input placeholder="Digite a classificação" class="form-control" type="text" name="classificacao" value="<?php if(isset($_GET['edit'])) echo $getROW['classificacao'];  ?>" required />
    </div>

    <div class="form-group">
      <input placeholder="Digite a nacionalidade do filme" class="form-control" type="text" name="nacionalidade" value="<?php if(isset($_GET['edit'])) echo $getROW['nacionalidade'];  ?>" required />
    </div>

<label>
        <select name="diretor_iddiretor" class="form-control">
          <option>Selecione o Diretor </option>  
          <?php
            $res = $MySQLiconn->query("SELECT * FROM diretor ");
            while($row=$res->fetch_array()){
              $selecionado = "";
              if(isset($_GET['edit'])){
                if ($getROW['diretor_iddiretor'] == $row['iddiretor']){
                  $selecionado = "selected";
                }
              } 
              echo "<option value=".$row['iddiretor']." ".$selecionado.">".$row['nome']."</option>"; 
              
            }
          ?>

        </select>
</label>

<label>
        <select name="ator_idelenco" class="form-control">
          <option>Selecione o Ator </option>  
          <?php
            $res = $MySQLiconn->query("SELECT * FROM ator ");
            while($row=$res->fetch_array()){
              $selecionado = "";
              if(isset($_GET['edit'])){
                if ($getROW['ator_idelenco'] == $row['idelenco']){
                  $selecionado = "selected";
                }
              } 
              echo "<option value=".$row['idelenco']." ".$selecionado.">".$row['nome']."</option>"; 
              
            }
          ?>

        </select>
</label>

    <!-- 
    <div class="form-group">
      <input placeholder="Digite seu E-Mail" class="form-control" type="text" name="ator_idelenco" value="<?php //if(isset($_GET['edit'])) echo $getROW['ator_idelenco'];  ?>" required />
    </div>

    <div class="form-group">
      <input placeholder="Digite seu E-Mail" class="form-control" type="text" name="login" value="<?php //if(isset($_GET['edit'])) echo $getROW['diretor_iddiretor'];  ?>" required />
    </div> -->

<br>
    </fieldset>

<?php
if(isset($_GET['edit']))
{
  ?>
  <button type="submit" class="btn btn-primary" name="update">update</button>
  <?php
}
else
{
  ?>
  <button type="submit" class="btn btn-primary" name="save">Salvar</button>
  <?php
}
?>
</form>
<br>

<?php
$res = $MySQLiconn->query("SELECT * FROM filme");
while($row=$res->fetch_array())
{
    ?>

  <div id="" class="times">
      <label><?php echo $row['titulo']; ?></label><br>
      <img src="<?php echo $row['imagem']; ?>"><br>
      <label><?php echo $row['duracao']; ?></label><br>
      <label><?php echo $row['genero']; ?></label><br>
      <label><?php echo $row['sinopse']; ?></label><br>    
      <label><?php echo $row['classificacao']; ?></label><br>
      <label><?php echo $row['nacionalidade']; ?></label><br>
      <label><?php echo $row['ator_idelenco']; ?></label><br>
      <label><?php echo $row['diretor_iddiretor']; ?></label><br>

      <a href="?edit=<?php echo $row['idfilme']; ?>" onclick="return confirm('sure to edit !'); " class="btn btn-primary">edit</a>
      <a href="?del=<?php echo $row['idfilme']; ?>" onclick="return confirm('sure to delete !'); " class="btn btn-danger">delete</a>

  </div>

    <?php
}
?>

</body>
</html>