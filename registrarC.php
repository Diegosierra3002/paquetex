<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

			<h1 style="margin-top: 20px;">Formulario de registro de Camioneros</h1>

			<form action="nuevoCamionero.php" method="POST">
		<div class="mb-3">
              <label for="txtIDcamionero" class="form-label">ID Camionero</label>
              <input type="text" name="txtcedula" class="form-control" id="txtcedula">
        </div>
		<div class="mb-3">
                <label for="txtnombre" class="form-label">Nombre</label>
                <input type="text" name="txtnombre" class="form-control" id="txtnombre">
        </div>
        <div class="mb-3">
                <label for="txtapellido" class="form-label">Apellido</label>
                <input type="text" name="txtapellido" class="form-control" id="txtapellido">
        </div>
        <div class="mb-3">
                <label for="txtfecha" class="form-label">Contraseña</label>
                <input type="password" name="txtpassword" class="form-control" id="txtpassword">
        </div>
			<button type="submit" class="btn btn-success">Enviar datos</button>
			  
			
<body>