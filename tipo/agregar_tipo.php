<!DOCTYPE html>
<html>
<head>
    <title>EL-HORNITO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/registrartipo.css">
</head>
<body>
    <!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>
    
    <!-------- PAGINA DE CONEXION Y METODOS ---------------------->
    <?php
        include_once '../controlador/conexion.php';
        $obj=new Conectar();
    ?>

    <!-------- OPCIONES DE AGREGAR TIPOS --------------------->
   <section class="registro">
    <form action="../llamadas/proceso_tipo.php" method="post" class="formulario">
        <h1>REGISTRAR TIPO</h1>
        <div class="info_registro">
        <label>Codigo</label>   <input type="text" name="codtipo" required>
        <label>Nombre</label>   <input type="text" name="nomtipo" required>
        </div>

        <!--no es visible -->
        <input type="hidden" name="accion" value="agregar"><br>
        <div><input type="submit" value="AGREGAR" class="botonextras"></div>
    </form>

</section>
</body>
</html>
