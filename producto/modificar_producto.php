<!DOCTYPE html>
<html>
<head>
    <title>EL-HORNITO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/registroproductos.css">
</head>
<body>
    <!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>
    
    <!-------- PAGINA DE CONEXION Y METODOS ---------------------->
    <?php
        include_once '../controlador/conexion.php';
        $obj=new Conectar();
        $codigopro=$_REQUEST['codigopro']; 

        $a=$obj->buscarProducto($codigopro);
    ?>

    <section class="registro"> 
        <form action="../llamadas/proceso_producto.php" method="post" enctype="multipart/form-data" class="formulario">

            <h1>ACTUALIZAR PRODUCTO</h1>    
            <input type="hidden" name="codigopro" value="<?=$codigopro?>">
            
            <div class="info_registro">

            <label>Nombre:</label>      <input name="nombrepro" value="<?=$a[0]?>">
            <label>Descripcion:</label> <input name="descripro" value="<?=$a[1]?>">
            <label>Precio:</label>      <input name="preciopro" value="<?=$a[2]?>">
            <label>Cantidad:</label>    <input name="stockpro" value="<?=$a[3]?>">
            <label>Tipo:</label>        <input name="cod_tipopro" value="<?=$a[5]?>">
            </div>

            <div class=" botonextras">
            <label>Foto:</label>
            <input type="file" name="imagenpro">
            
            <input type="hidden" name="accion" value="modificar">
            <div class="mandar"><input type="submit" value="Actualizar">    </div>
            </div>
        </form>
    </section>
</body>
</html>
