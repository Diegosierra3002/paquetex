<?php
		include 'inicioLogin.php';	
	?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<title>Inicio de sesión</title>
	</head>
	<body style= "background-color:E8E8E8";>
		<div class="container" >
			<div class="row">
			<h1 class="text-center" style = "margin-top:50px;">Sistema Administrador De Entrega De Paquetes</h1>
			<h2 class="text-center">Inicio de sesión</h1>
		<form method="post" action="loginSecion.php">
				<div class="mb-3">
					<label for="InputCed1" class="form-label">Usuario</label>
					<input type="text" class="form-control" name = "username" id="InputCed1" required>
				</div>
				
				<div class="mb-3">
					<label for="InputPassword1" class="form-label">contraseña</label>
					<input type="password" name = "password" class="form-control" id="InputPassword1" required>
				</div>

		<button type="submit" class="btn btn-success">Ingresar</button>

		</form> 
			</div>	
		</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>

<?php
	if(isset($_SESSION['usuario'])):
		
		echo"
		<div class='wrapper'>
			<div class ='sideban'>
				<h2>Paquetex</h2>
				<ul>
					<li><a href='inicio.php'><li>
					<li><a href='nuevoCamion.php'><li>
					<li><a href='nuevoEnvio.php'><li>
					<li><a href='verCamiones.php'><li>
					<li><a href='registrarC.php'><li>
					<li><a href='VerPaquetes.php'><li
				</ul>
				
				<div class='social_media'>
					<a href='cerrarSesion.php'></a>
				</div>
				<div class='main_conternt'>
					<div Class='header'>Bienvenidos a paquetex</div>
					<div class='info'>
				";
	else:
		echo"
		
	
	";exit;
	endif;
?>


<?php	
  
	require_once "pieDePagina.php";
?>