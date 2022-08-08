<?php
include('../bd.php');
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $query="DELETE FROM mensajes WHERE id=$id";
$resultado=mysqli_query($conectar, $query);
    if(!$resultado){
        die("ERROR AL ELEIMINAR");
    }
    header("location:revision.php");
}
?>