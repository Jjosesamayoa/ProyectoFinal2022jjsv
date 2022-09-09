<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="barra.css">
    <title>Document</title>
</head>

<body style="background: url(../A1img/fondotiendas.jpg); background-size: cover; background-repeat: no-repeat;">

    <div class="sidenav">
        <button class="dropdown-btn">Navegación
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../index.html">Inicio</a>
            <a href="../servicios/index.html">Servicios</a>
            <a href="../contactenos/index.php">Contacto</a>
        </div>
    </div>

    <table align="center" width="60%" style="background-color: #ff00a24b;">
        <tr>
            <td align="center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123591.29859231146!2d-90.61638940400925!3d14.52894230398427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a10720cfa2e7%3A0x96fcd714e14deeec!2sCofal%20Usados!5e0!3m2!1ses-419!2sgt!4v1662618975906!5m2!1ses-419!2sgt" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </td>
            <td align="left">
                <h2 style="background-color: rgba(255, 255, 255, 0.531);">Calzada Roosevelt</h2>
                <h5 style="background-color: rgba(255, 255, 255, 0.531);">Abre 8:00 a.m.</h5>
                <h5 style="background-color: rgba(255, 255, 255, 0.531);">Concesionario Toyota</h5>
            </td>
        </tr>
        <tr>
            <td align="center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123591.29859231146!2d-90.61638940400925!3d14.52894230398427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a1fb3e34f4f7%3A0xee342e74f3121275!2sToyota%20Perif%C3%A9rico!5e0!3m2!1ses-419!2sgt!4v1662620453149!5m2!1ses-419!2sgt" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </td>
            <td align="left">
                <h2 style="background-color: rgba(255, 255, 255, 0.531);">Periférico - Guatemala</h2>
                <h5 style="background-color: rgba(255, 255, 255, 0.531);">Abre 7:00 a.m.</h5>
                <h5 style="background-color: rgba(255, 255, 255, 0.531);">17 Av. 18-78, Zona 11, Ciudad. de Guatemala 01011</h5>
            </td>
        </tr>
        <tr>
            <td align="center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123591.29859231146!2d-90.61638940400925!3d14.52894230398427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a06acb3691e5%3A0x84c026607841cf7!2sTOYOTA%20GUATEMALA!5e0!3m2!1ses-419!2sgt!4v1662620598349!5m2!1ses-419!2sgt" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </td>
            <td align="left">
                <h2 style="background-color: rgba(255, 255, 255, 0.531);">TOYOTA GUATEMALA</h2>
                <h5 style="background-color: rgba(255, 255, 255, 0.531);">Abre 7:00 a.m.</h5>
                <h5 style="background-color: rgba(255, 255, 255, 0.531);">Pan-American Highway 5, Ciudad. de Guatemala</h5>
            </td>
        </tr>
        <tr>
            <td align="center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123591.29859231146!2d-90.61638940400925!3d14.52894230398427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a2315e0c1959%3A0xfc170d79b9332a7e!2sToyota%20Cofi%C3%B1o%20Stahl!5e0!3m2!1ses-419!2sgt!4v1662620686460!5m2!1ses-419!2sgt" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </td>
            <td align="left">
                <h2 style="background-color: rgba(255, 255, 255, 0.531);">Toyota Cofiño Stahl</h2>
                <h5 style="background-color: rgba(255, 255, 255, 0.531);">Abre 6:00 a.m.</h5>
                <h5 style="background-color: rgba(255, 255, 255, 0.531);">10 Avenida, 31-71, Zona 5. Guatemala, Ciudad. de Guatemala 01005</h5>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><a href="index-2.php"><img src="../A1img/adelante.png" width="45px" height="45px"></a></td>
        </tr>
    </table>
    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>