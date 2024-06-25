<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM tarea WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: bienvenida.php");
}else{

}

?>