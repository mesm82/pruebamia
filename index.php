<?php
	$resultado = $_REQUEST['resultado'];
?>
<html lang="es-VE">
<head>
	<title>Información Personal</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="materialize.css">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Información Personal</a>
    </div>
  </nav>
<main class="container">
	<table class="highlight">
		<thead>
			<tr>
				<th colspan="2">Información Personal</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Cédula</td>
				<td>
					<div class="input-field">
						<input type="text" name="cedula" id="cedula">
						<label for="cedula">Cédula</label>
					</div>
				</td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td>
					<div class="input-field">
						<input type="text" name="nombre" id="nombre">
						<label for="nombre">Nombre</label>
					</div>
				</td>
			</tr>
				<tr>
				<td>Fecha de Nac</td>
				<td>
					<div class="input-field">
						<input type="date" name="fechaNac" id="fechaNac" class="datepicker">
						<label for="fechaNac">Fecha de Nacimiento</label>
					</div>
				</td>
			</tr>
			</tr>
				<tr>
				<td>Sexo</td>
				<td>
					<div class="input-field">
						<select name="sexo" id="sexo">
							<option value="-1">Seleccione</option>
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select>
						<label for="sexo">Sexo</label>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="last">
					<button name="guardar" onclick="validarFormulario(1);">Guardar</button>
					<button name="modificar" disabled onclick="validarFormulario(2);">Modificar</button>
					<button name="eliminar" disabled onclick="validarFormulario(3);">Eliminar</button>
					<button name="cancelar" onclick="validarFormulario(4);">Cancelar</button>
				</td>
			</tr>
		</tbody>
	</table>
</main>

</body>
</html>