<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style>
	
</style>
<body>
	<div class="container">
		<nav class="navbar navbar-dark bg-primary">

		  <div class="dropdown">
		    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
		      °°°
		    </button>
		    <div class="dropdown-menu" aria-labelledby="dropdownMenu2" >
		      <a href=" {{ Route('blog') }} " class="btn btn-primary">Noticias</a> <br>
		      <a href=" {{ Route('fotos') }}" class="btn btn-primary">Galeria</a> <br>
		      <a href=" {{ Route('institucion') }}" class="btn btn-primary">Institucion</a> <br>
		      <a href=" {{ Route('login') }}" class="btn btn-primary">Login</a>

		      
		    </div>
		    Coipu Rugby Club
		</nav><!--cierre nav-->
	</div><!--cierre container-->

	<div class="container">

		@yield('seccion')
	</div>
	<div class="container">Footer</div>
</body>
</html>

</div>