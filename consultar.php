<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>Livraria</title>
</head>
<body>
	<div >
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-book"></i> &nbsp Livraria</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Cadastrar</a></li>
        <li><a href="editar.php">Editar</a></li>
        <li><a href="excluir.php">Excluir</a></li> 
        <li  class="active"><a href="consultar.php">Consultar</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</div>
	<div class="container">
		<div class="row text-center"><h3>Consultar Livro</h3></div>
		<hr>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="well">
			<form action="consultarlivro.php" method="POST">
			   
			  <div class="form-group">
			    <label for="exampleInputtext1">ISBN</label>
			    <input type="text" class="form-control input-sm" name="isbn" value="">
			  </div>
			  
			  <div class="text-center">
			  <button type="submit" class="btn btn-success">Consultar</button>
			  </div>
			</form>
		</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>