<!DOCTYPE html>
<html>
<head>
    <title>EL-HORNITO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/buscarproducto.css">
</head>

<body>
    <!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>

    <!-------- PAGINA DE CONEXION Y METODOS ---------------------->
    <?php
        include_once '../controlador/conexion.php';
        $obj=new Conectar();
    ?>
    
<section class="registro">
        <form action="listar_productotipo.php" method="post" enctype="multipart/form-data" class="formulario">
            <h1>BUSCAR PRODUCTO</h1>   

        <div class=" botonextras">
                <div><label>Tipo</label></div>
                 <div><select name="tip" >
                <?php
                    foreach ($obj->listarTipo() as $a=> $datos) {
                ?>
                    <option value="<?=$datos[0] ?>"><?= $datos[1]?></option>
                <?php
                    }
                ?>
                </select></div>
                
                <input type="hidden" name="accion" value="buscar">
            <div><input type="submit" value="BUSCAR"></div>
            
         </div>
        </form>
</section>

</body>
</html>
