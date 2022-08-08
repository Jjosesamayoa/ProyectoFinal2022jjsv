<?php
error_reporting(0);
session_start();
include '../bd.php';
$us = $_SESSION['Usuario'];
if (!isset($us)) {
    header("location:login.php");
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="rv1.css">
    <link rel="stylesheet" href="rv2.css">
    <title>Mensajes-Clientes</title>
</head>
<form action="cerrar.php" method="post">
    <input type="submit" name="a" value="Regresar al inicio">
</form>
<div class="col-12">
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Telefono</td>
            <td>Correo</td>
            <td>Mensaje</td>
        </tr>
        <?php
        include('../bd.php');
        $query = "SELECT * FROM mensajes";
        $resultado = mysqli_query($conectar, $query);
        while ($row = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php echo $row['nombre']; ?></th>
                <th><?php echo $row['tel']; ?></th>
                <th><?php echo $row['correo']; ?></th>
                <th><?php echo $row['mensaje']; ?></th>
                <td>
                    <a href="eliminar.php?id=<?php echo $row['id']; ?>">
                        <img src="image/R.png" width="50p%" height="40px"></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>