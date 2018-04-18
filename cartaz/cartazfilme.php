

<?php
  include_once 'crudcadas.php';
?>

<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>Cartaz de Filmes</title>

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

<div class="container-fluid">
    <form method="post">

  <div id="" class="inicio">
    <h1>Filmes em Sessão</h1>
  </div>

<?php
$res = $MySQLiconn->query("SELECT * FROM filme");
while($row=$res->fetch_array())
{
    ?>

    <div id="" class="cartaz">
      <a><?php echo $row['titulo']; ?></a><br><br>
      <img src="<?php echo $row['imagem']; ?>"><br><br>
      <label><?php echo $row['duracao']; ?></label><br>
      <label><?php echo $row['genero']; ?></label><br>
      <label><?php echo $row['sinopse']; ?></label><br>    
      <label><?php echo $row['classificacao']; ?></label><br>
      <label><?php echo $row['nacionalidade']; ?></label><br>
    </div>
  </form>

    <?php
}
?>

  </div>

</body>
</html>