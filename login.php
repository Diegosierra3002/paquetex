<?php
		include 'inicioLogin.php';	
	?>
<?php
session_start();

if (isset($_SESSION['login'])){
	echo ''.$_SESSION['login'];

}else{
	echo 'sin session';
}

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
<div class="container">
<h1 class="text-center" style = "margin-top:50px;">Sistema Administrador De Entrega De Paquetes</h1>
<h2 class="text-center">Inicio de seción</h1>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php	
  
	require_once "pieDePagina.php";
?>





