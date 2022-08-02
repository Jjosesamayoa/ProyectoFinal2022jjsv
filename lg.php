<?php
error_reporting(0);
include 'bd.php';
if (isset($_POST['ing'])) {
$us=$conectar->real_escape_string($_POST['uname']);
$pass=$conectar->real_escape_string($_POST['psw']);
$consulta="SELECT * FROM lgjjsv WHERE Usuario='$us' and Contrasena='$pass'";
if ($resultado=$conectar->query($consulta)) {
  while ($row=$resultado->fetch_array()) {
    $usok=$row['Usuario'];
    $pasok=$row['Contrasena'];
  }
  $resultado->close();
}
$conectar->close();
if (isset($us) && isset($pass)) {
  if ($us==$usok && $pass==$pasok) {
    $_SESSION['logeosi'] = TRUE;
    $_SESSION['Usuario'] = $us;
    header("location:mensajeria.php");
  }
  else{ 
    echo '<script lenguage="javascript">';
    echo 'alert("¡Intentalo de nuevo)!")
    window.location = "lg.php";
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
</body>
</html>