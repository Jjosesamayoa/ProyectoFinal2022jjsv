<?php
error_reporting(0);
session_start();
include '../bd.php';
/*Validar la sesión*/
$us = $_SESSION['Usuario'];
if (!isset($us)) {
    header("location:lg.php");
}
?>
<!DOCTYPE html>
<html>
<title>Contactenos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="mensajeria.css">
<link rel="stylesheet" href="boton.css">

<body>

    <div class="w3-container w3-blue">
        <h2>¡Contactanos!</h2>
    </div>
    <table width="100%">
        <tr>
            <td colspan="4">
                <form action="../index.php">
                    <input type="submit" value="Inicio">
                </form>
            </td>
            <td colspan="4">
                <form action="../productos/productos.php">
                    <input type="submit" value="Productos">
                </form>
            </td>
            <td colspan="4">
                <form action="../tiendas/tiendas.php">
                    <input type="submit" value="Tiendas">
                </form>
            </td>
        </tr>
    </table>
    <form class="w3-container" action="enviar.php" method="post">
        <p>
            <label>Nombres</label>
            <input class="w3-input" type="text" placeholder="<?php echo $us; ?>" name="a">
        </p>
        <p>
            <label>Teléfono/Celular</label>
            <input class="w3-input" type="text" name="b">
        </p>
        <p>
            <label>Correo Electrónico</label>
            <input class="w3-input" type="text" name="c">
        </p>
        <label>Mensaje</label>
        <input class="w3-input" type="text" name="d"></p>
        <input type="submit" value="Enviar Mensaje" name="e">
    </form>
    <table width="100%" align="center">
        <tr>
            <td colspan="12" align="center">
                <a href="cerrar.php" style="text-decoration: none;">
                    <h5 style="background-color: red;">Cerrar Sesión</h5>
                </a>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td>
                <form action="administradores.php">
                    <div class="cont">
                        <button type="submit" class="boton">¿Eres administrador?, ingresa para revisar mensajes</button>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>