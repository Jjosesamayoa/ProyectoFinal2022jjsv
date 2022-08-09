<?php
error_reporting(0);
include '../bd.php';
if (isset($_POST['ing'])) {
$us=$conectar->real_escape_string($_POST['uname']);
$pass=$conectar->real_escape_string($_POST['psw']);
$consulta="SELECT * FROM admins WHERE uss='$us' and passw='$pass'";
if ($resultado=$conectar->query($consulta)) {
  while ($row=$resultado->fetch_array()) {	 
    $usok=$row['uss'];
    $pasok=$row['passw'];
  }
  $resultado->close();
}
$conectar->close();
if (isset($us) && isset($pass)) {
  if ($us==$usok && $pass==$pasok) {
    $_SESSION['logeosi'] = TRUE;
    $_SESSION['Usuario'] = $us;
    header("location:revision.php");
  }
  else{ 
    echo '<script lenguage="javascript">';
    echo 'alert("¡Intentalo de nuevo)!")
    window.location = "administradores.php";
    </script>';
  }
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lg.css">
    <title>Inicio De Sesión</title>
</head>
<body style="background: url(image/fondo.jpg); background-size: cover; background-repeat: no-repeat;"><br><br><br>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="imgcontainer">
    <img src="image/lg.png" alt="Avatar" class="avatar">
    </div>
  <div class="container" align="center">
    <label for="uname"><b>Usuario/Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    <label for="psw"><b>Contraseña/Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <input type="submit" name="ing" value="Ingresar">
  </div>
</form>
<table width="100%" align="center">
        <tr>
            <td colspan="12" align="center">
                <a href="mensajeria.php" style="text-decoration: none;">
                    <h5 style="background-color: lightgreen;">Volver</h5>
                </a>
            </td>
        </tr>
    </table>
</body>
</html>