<!DOCTYPE html>
<html>
<head>
    <title>EL-HORNITO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css_estilos/modificartipo.css">
</head>
<body>
    <!-- CABECERA PRINCIPAL -->
    <?php include '../partes/cabeceralogin.php'; ?>
    
    <!-------- PAGINA DE CONEXION Y METODOS ---------------------->
    <?php
        include_once '../controlador/conexion.php';
        $obj=new Conectar();
        
        $codtipo=$_REQUEST['codtipo']; 
        $palabra= $obj->buscarTipo($codtipo);
    ?>

    <section class="registro"> 
        <form action="../llamadas/proceso_tipo.php" method="post" enctype="multipart/form-data" class="formulario">

            <h1>MODIFICAR TIPO</h1>    
            <input type="hidden" name="codtipo" value="<?=$codtipo?>">
            
            <div class="info_registro">
            <label>Nombre:</label>      <input name="nomtipo" value="<?=$palabra[0]?>">
            </div>

            <div class=" botonextras">
            <input type="hidden" name="accion" value="modificar">
            <div class="mandar"><input type="submit" value="Actualizar">    </div>
            </div>
        </form>
    </section>
</body>
</html>

