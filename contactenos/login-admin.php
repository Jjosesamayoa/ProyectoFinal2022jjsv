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
    $_SESSION['uss'] = $us;
    header("location:index-admin.php");
  }
  else{ 
    echo '<script lenguage="javascript">';
    echo 'alert("¡Intentalo de nuevo)!")
    window.location = "login-admin.php";
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
<body style="background: url(../A1img/fondosistema.jpg); background-size: cover;"><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="container" align="center">
    <label for="uname" style="background-color: rgba(255, 255, 255, 0.531);"><b>Usuario/Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    <label for="psw" style="background-color: rgba(255, 255, 255, 0.531);"><b>Contraseña/Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <button name="ing">Ingresar</button>
  </div>
</form>
</body>
</html>