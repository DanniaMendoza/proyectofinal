<?php
class Conectar {

    //-------- METODO PARA LOGRAR CONECTARME A LA BASE DE DATOS -----------------------
    
    PRIVATE $conexion=null;
    function conectar() {
        if($this->conexion==null){
          $this->conexion= mysqli_connect("localhost","root", "","hornito");
        } 
    }

//************ TABLA PRODUCTOS ************************************************************************

    //método insertar registros
    function agregarProducto($codigopro,$nombrepro,$descripro,$preciopro,$stockpro,$imagenpro,$cod_tipopro){
        $sql="  insert into producto values
                ('$codigopro','$nombrepro','$descripro',
                '$preciopro','$stockpro','$imagenpro','$cod_tipopro')";   
        mysqli_query($this->conexion, $sql) or die(mysqli_error($this->conexion));
    }

    //método eliminar registros
    function eliminarProducto($codigopro){
        $sql="  delete from producto 
                where cod_producto='$codigopro'";   
        mysqli_query($this->conexion, $sql) or die(mysqli_error($this->conexion));
    }

    //método  actualizar todos los campos de la tabla
    function actualizarTodoProducto($codigopro,$nombrepro,$descripro,$preciopro,$stockpro,$imagenpro,$cod_tipopro){
        $sql="  update producto 
                set nom_produc='$nombrepro', 
                descri_produc='$descripro', 
                precio_produc='$preciopro', 
                stock_produc='$stockpro', 
                imagen_produc='$imagenpro', 
                cod_tipo='$cod_tipopro'
                where cod_producto='$codigopro'";   
        mysqli_query($this->conexion, $sql) or die(mysqli_error($this->conexion));
    }

    //método actualizar registros sin foto
    function actualizarProducto($codigopro,$nombrepro,$descripro,$preciopro,$stockpro,$cod_tipopro){
        $sql="  update producto 
                set nom_produc='$nombrepro', 
                descri_produc='$descripro', 
                precio_produc='$preciopro', 
                stock_produc='$stockpro', 
                cod_tipo='$cod_tipopro'
                where cod_producto='$codigopro'"; 
        mysqli_query($this->conexion, $sql) or die(mysqli_error($this->conexion));
    }

    //método para buscar registro
    function buscarProducto(string $codigopro){
        $sql="  select  nom_produc, 
                        descri_produc, 
                        precio_produc, 
                        stock_produc, 
                        imagen_produc, 
                        cod_tipo 
                from producto 
                where cod_producto='$codigopro'";
        $res= mysqli_query($this->conexion, $sql);
        $vec= array();
        if(mysqli_num_rows($res)>0){
            $vec= mysqli_fetch_array($res);
        }
        return $vec; 
    }

    //método para listar registros
    function listarProducto(){
        $sql="  select  cod_producto,
                        nom_produc, 
                        descri_produc, 
                        precio_produc, 
                        stock_produc, 
                        imagen_produc, 
                        cod_tipo 
                from producto";
        $res= mysqli_query($this->conexion, $sql);
        $vec= array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

//************ TABLA TIPO **********************************************************

    //Tabla tipo
    //método para agreegar registros
    function agregarTipo($codtipo,$nomtipo)
    {
        $sql= "INSERT INTO tipo 
               values('$codtipo','$nomtipo')";
        mysqli_query ($this->conexion, $sql) or die (mysql_error($this->conexion));
    }

    //método para eliminar registros
    function eliminarTipo($codtipo){
        $sql="  DELETE FROM tipo 
                WHERE cod_tipo='$codtipo'";   
        mysqli_query($this->conexion, $sql) or die(mysqli_error($this->conexion));
    }

    //método para actualizar registros sin foto
    function actualizarTipo($codtipo,$nomtipo){
        $sql="  update tipo 
                set nom_tipo='$nomtipo' 
                where cod_tipo='$codtipo'"; 
        mysqli_query($this->conexion, $sql) or die(mysqli_error($this->conexion));
    }

    //método para buscar registro
    function buscarTipo(string $codtipo){
        $sql="  select nom_tipo 
                from tipo 
                where cod_tipo='$codtipo'";
        $res= mysqli_query($this->conexion, $sql);
        $vec=array();
        if(mysqli_num_rows($res)>0){
            $vec= mysqli_fetch_array($res);
        }
        return $vec; 
    }
    
    //método para listar registros
    function listarTipo(){
        $sql="  select cod_tipo, nom_tipo 
                from tipo";
        $res= mysqli_query($this->conexion, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }  
}

?>

