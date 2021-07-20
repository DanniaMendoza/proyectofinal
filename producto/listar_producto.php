<!DOCTYPE html>
<html>
<head>
    <title>EL-HORNITO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/listaproducto.css">
</head>
<body>
    <!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>
    <?php include '../partes/cabecera.php'; ?>

    <!-------- PAGINA DE CONEXION Y METODOS ---------------------->
    <?php include_once '../controlador/conexion.php';
        $obj=new Conectar();
    ?>

    <!-------- CUERPO DE LISTA DE CARTA --------------------->
    <section class="registro">   
        <h1>LISTA DE CARTA</h1>
        <div class="nuevoproducto">
            <a href="agregar_producto.php"><input class="new" type="submit" name="" value="NUEVO"></a>
        </div>
          
        <form method="post" enctype="multipart/form-data">
            <table border="1" class="tablaproductos">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th> 
                    <th>Cantidad</th>                  
                    <th>Foto</th>
                    <th>Tipo</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                </tr>

                <?php

                    foreach($obj->listarProducto() as $a=>$datos){
                        echo "<tr>
                                <td>$datos[0]</td>
                                <td>$datos[1]</td>
                                <td>$datos[2]</td>
                                <td>$datos[3]</td>
                                <td>$datos[4]</td>";   
                ?>
                        <td width="100"><img src="<?=$datos[5]?>" width="75" height="80"></td>

                        <td><?=$datos[6]?></td>

                        <td class="botonem">
                            <img src="../imagenes/iconoeliminar2.png" width="25px"><br>
                            <a href="../llamadas/proceso_producto.php?accion=eliminar&codigopro=<?=$datos[0]?>">
                            <input type="button" name="" value="Eliminar"></a></td> 

                        <td class="botonem">
                            <img src="../imagenes/iconomodificar.png" width="25px"><br>
                            <a href="modificar_producto.php?codigopro=<?=$datos[0]?>">
                            <input type="button" name="" value="Modificar"></a></td> </a></td></tr>

                <?php     
                    }  
                ?>
            </table>
        </form>
    </section>
</body>
</html>
