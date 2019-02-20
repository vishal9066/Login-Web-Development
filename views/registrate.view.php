<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="fonts/font-Raleway.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilos.css">
	<title>Registrate</title>

</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Registrate</h1>
		<hr class="border">
		
		<form action=
		"<?php
           echo htmlspecialchars($_SERVER['PHP_SELF']);
		?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">

			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Repetir Contraseña">
				
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
		</form>

			<p class="texto-registrate">
				¿ Ya tienes cuenta?
				<a href="login.php">Iniciar Sesión</a>
			</p>
			
	</div>
	
</body>
</html>