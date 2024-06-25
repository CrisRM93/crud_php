<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO tarea VALUES('$id','$nombre','$descripcion')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: bienvenida.php");
}else{

}

?>