<!DOCTYPE html>
<html>
<head>
	<title>EL-HORNITO</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css_estilos/contacto2.css">
	<meta charset="UTF-8">

</head>
<body>
<!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>
    <?php include '../partes/cabecera.php'; ?>

<!-- CONTENIDO PARA CONTACTOS -->
	<section class="empresa">
			<section class="Info_empresa">
			<section class="titulo">
				<img src="../Imagenes/icono_persona.png" class="logocontac">
				<h3>INFORMACIÓN<br>DE EMPRESA</h3>
			</section>

			<section class="items_empresa">
				<p><img src="../Imagenes/logo_correo.jpg" class="icontac">  <strong>CORREO</strong></p>
				<p>elhornitoAQP@gmail.com</p>
				<p><img src="../Imagenes/iconmap.png" class="icontac"><strong>UBICACIÓN</strong></p>
				<p>Av. Colón N° 103-C, Paucarpata, Arequipa</p>	
				<p><img src="../Imagenes/logo_telefono.png" class="icontac"><strong>TELEFONOS</strong></p>
				<p>WhatsApp: 943 204 018 <br>
				(054) 425975<br></li>
				</p> 
			</section>
		</section>
		
		<!-- Formulario del contacto -->
		<form action="" class="formulario_usuario">
			<h2>CONTACTANOS</h2>
			<div class="info_usuario">
				<label for="Nombres"> Nombres *</label>
				<input type="text" id="nombres">

				<label for="Telefono"> Telefono / Celular</label>
				<input type="text" id="Telefono">

				<label for="email"> Correo Electronico</label>
				<input type="text" id="email">
				
				<label for="mensaje"> Mensaje</label>
				<textarea id="mensaje"></textarea>

				<input type="button" value="Enviar Mensaje" id="botonenvio">
			</div>
		</form>
	</section>
</body>
</html>