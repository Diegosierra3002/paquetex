<?php
$user="PaquetexMundial";
$pass="12345";

session_start();
if ($_POST['username']==$user && $_POST['password']==$pass){
	$_SESSION['login']='Administrador';
	header('Location:PaginaInicio.php');
}else{
	echo 'Usuario o contraseña incorrectos';
} 
?>