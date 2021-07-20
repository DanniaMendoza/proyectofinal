<!DOCTYPE html>
<html>
<head>
    <title>EL-HORNITO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/productos2.css">
    </head>

<body>

<!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>
    <?php include '../partes/cabecera.php'; ?>
    
<!-- CONEXION CON BASE DE DATOS -->
    <?php
        include_once '../controlador/conexion.php';
        $obj=new Conectar();
    ?>

<!----------------- CONTENIDO GENERAL ---------------------------->
    <br>
    <h2>NUESTRA CARTA</h2>
    <section class="general">
        
<!----------------- PARTE IZQUIERDA ---------------------------->       
    <div class="filtros">
        <h3>CARTA</h3>
    <!----------------- ACCION BUSCAR TIPO PIZZA------------------------>
        <form action="productos.php" method="post" enctype="multipart/form-data">
        <div class="selecvino">
                    <select name="tip" >
                      <?php foreach ($obj->listarTipo() as $a=> $datos) 
                            {   
                      ?>        <option value="<?=$datos[0] ?>"><?= $datos[1]?></option>
                        <?php
                            }
                        ?>
                    </select>
                <input type="hidden" name="accion" value="buscar">
                <input type="submit" value="BUSCAR"><br>
         </div>
        </form>
        <!------FIN BUSCAR --------->

       
   
   
    
    </div>

<!----------------- PARTE DERECHA ---------------------------->    
    <div class="productos" method="post" enctype="multipart/form-data">  
        
    <!----------------- MOSTRAR PIZZAS POR TIPO------------------------>
            <?php    
            error_reporting(0);
            $tipo=$_REQUEST['tip'];
            foreach($obj->listarProducto($tipo) as $a=>$datos)
            {
                if($tipo===$datos[6])
                {
                     echo "<div class='cadavino'>";
                    ?>
                    
                    <img src="<?=$datos[5]?>" width="150" height="140"> <br><br>
                    
                    <?php
                                echo "  $datos[1]<br>
                                        $datos[2]<br>
                                        $datos[3]<br><br>
                                        <input type='submit' value='COMPRAR'></div>";
                    ?>
            <?php     
                }
            }?> 
    <!----------------- MOSTRAR TODOS LAS PIZZAS------------------------>
               
            <?php
                $tipo=$_REQUEST['tip'];
                if ($tipo==null) 
                {                  
                    foreach($obj->listarProducto() as $a=>$datos)
                    {
                        echo "  <div class='cadavino'>";
                ?>
                        <img src="<?=$datos[5]?>" width="200" height="200"> <br><br>
                    <?php
                        echo "  $datos[1]<br>
                                $datos[2]<br>
                                $datos[3]<br><br>
                                <input type='submit' value='COMPRAR'>
                                </div>";
                        ?>
                    <?php 
                    }
                }
            ?>
       
    </div>
    </section>
</body>
</html>
