<!DOCTYPE html>
<html>
<head>
    <title>EL-HORNITO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/listartipos.css">
</head>
<body>
    <!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>
    <?php include '../partes/cabecera.php'; ?>

    <!-------- PAGINA DE CONEXION Y METODOS ---------------------->
    <?php
        include_once '../controlador/conexion.php';
        $obj=new Conectar();
    ?>

    <!-------- CUERPO DE LISTA DE TIPOS --------------------->
      <section class="registro">   
             <h1>LISTA DE TIPO DE PRODUCTOS</h1>
    
            <a href="agregar_tipo.php">
            <input class="new" type="submit" name="" value="NUEVO TIPO">
            </a><br><br>

        <form method="post" enctype="multipart/form-data">           
            <table border="1"  class="tablaproductos">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                </tr>
            
                <?php     
                    foreach($obj->listarTipo() as $a=>$datos){
                    echo "  <tr>
                                <td>$datos[0]</td>
                                <td>$datos[1]</td>";   
                ?>

                    <td class="botonem">
                        <img src="../imagenes/iconoeliminar2.png" width="25px"><br>

                        <a href="../llamadas/proceso_tipo.php?accion=eliminar&codtipo=<?=$datos[0]?>">
                        
                        <input type="button" name="" value="Eliminar"></a></td> 

                    <td class="botonem">
                        <img src="../imagenes/iconomodificar.png" width="25px"><br>
                        <a href="modificar_tipo.php?codtipo=<?=$datos[0]?>">
                        <input type="button" name="" value="Modificar"></a></td> </a></td></tr>
                <?php     
                    }  
                ?>

            </table>
        </section>
</body>
</html>
