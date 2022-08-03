<?php
include('../bd.php');
if (isset($_POST['rg'])) {
    $aa=$_POST['a'];
    $bb=$_POST['b'];
    $query="INSERT INTO lgjjsv(Usuario, Contrasena) VALUES ('$aa','$bb')";
$resultado=mysqli_query($conectar, $query);
if ($resultado) {
    echo '<script lenguage="javascript">';
    echo 'alert("DATO INGRESADO EXITOSAMENSTE")
    window.location = "lg.php";
    </script>';
    }
    if (!$resultado) {
        die('Error al guardar los datos');
    }
}
?>
