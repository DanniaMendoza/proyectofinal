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
    ?>

    <!-------- OPCIONES DE AGREGAR PRODUCTOS --------------------->
   <section class="registro">
    
        <form action="../llamadas/proceso_producto.php" method="post" enctype="multipart/form-data" class="formulario">
                
                <h1>REGISTRAR PRODUCTO</h1>
                
                <div class="info_registro">
                    
                <label>Codigo</label>       <input type="text" name="codigopro" required>
                <label>Nombre</label>       <input type="text" name="nombrepro" required>
                <label>Descripcion</label>  <input type="text" name="descripro" required>
                <label>Precio</label>       <input type="text" name="preciopro" required>
                <label>Cantidad</label>     <input type="text" name="stockpro" required>
                
                </div>
                
                <div class=" botonextras">
                    <div><label>Foto</label> <input class="botonimagen" type="file" name="imagenpro" required><br>
                    </div><br>
                    <!-------- Nos mostrara los tipos de productos (001,002,003..) ---------------------->
                    
                    <div><label>Tipo</label> <select name="cod_tipopro">
                                            <?php   foreach ($obj->listarTipo() as $a => $datos) {    ?>
                                                    
                                                    <option value="<?= $datos[0] ?>"><?= $datos[1] ?></option>
                                            
                                            <?php   }       ?>
                                        </select><br>
                    <input type="hidden" name="accion" value="agregar"></div>
                    <div class="mandar"><input type="submit" value="GUARDAR"></div>
                    
                </div>
            
        </form>
    </section>
    <br>

</body>
</html>

