<!DOCTYPE html>
<html>
<head>
    <title>EL-HORNITO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/listaproducto_tipo.css">
</head>
<body>
    <!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>

    <!-------- PAGINA DE CONEXION Y METODOS ---------------------->
    <?php
        include_once '../controlador/conexion.php';
        $obj=new Conectar();
    ?>

    <!-------- CUERPO DE LISTA DE PRODUCTOS --------------------->
      <section class="registro">   
        <h1>LISTA DE PRODUCTOS POR TIPO</h1>
        <div class="botonesdeayuda">
            <div><a href="buscar_producto.php"> <input class="new" type="submit" name="" value="BUSCAR"></a></div>
            <div><a href="../paginas/productos.php"><input class="new" type="submit" name="" value="PRODUCTOS"></a></div>
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
                        $tipo=$_REQUEST['tip'];
                         
                        foreach($obj->listarProducto($tipo) as $a=>$datos){
                           
                            if($tipo===$datos[6]){
                                echo "<tr>
                                        <td>$datos[0]</td>
                                        <td>$datos[1]</td>
                                        <td>$datos[2]</td>
                                        <td>$datos[3]</td>
                                        <td>$datos[4]</td>";       
                    ?>
                                <td width="100"><img src="<?=$datos[5]?>" width="25" height="80"></td>
                                <td><?=$datos[6]?></td>
                        
                        <td class="botonem">
                            <img src="../imagenes/iconoeliminar2.png" width="25px"><br>
                            <a href="../llamadas/proceso_producto.php?accion=eliminar&codigopro=<?=$datos[0]?>">
                            <input type="submit" name="" value="Eliminar"></a></td> 

                        <td class="botonem">
                            <img src="../imagenes/iconomodificar.png" width="25px"><br>
                            <a href="modificar_producto.php?codigopro=<?=$datos[0]?>">
                            <input type="submit" name="" value="Modificar"></a></td> </a></td></tr>
                    <?php     
                            }
                        }  
                    ?>
                </table>
            </form>
    </body>
</html>

