<?php
		include 'inicioConstante.php';
		include 'conexionBD.php';
		$sqlConductor = "select * from conductor";
		$datosConductor = $conexion->query($sqlConductor) or die ("Error Interno...");
		
	?>
	
	<html>
	<div class="container">
		<head>
		</head>
			<form action="EliminacionDefinitiva.php" method="POST">
			<div class="mb-3">
                <label for="txtnombre" class="form-label">Conductor</label>
                <select class="form-control" id="exampleFormControlSelect1">
					<option value="id_conductor">nombre</option>
			<!--En php generar un ciclo mientras que traiga todos los datos de datosConductor -->
			<?php

					while($fila = $datosConductor->fetch_array()):
						echo "
						<option value='$fila[id_conductor]'>$fila[nombre]</option>
						";
					endwhile;
					?>
				</select>
        </div>
		<button  type="sudmit" method="POST" class="btn btn-danger" </svg>Eliminar</button>
		</div>
</form>