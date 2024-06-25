<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql="UPDATE tarea SET nombre='$nombre', descripcion='$descripcion' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: bienvenida.php");
}else{

}

?>