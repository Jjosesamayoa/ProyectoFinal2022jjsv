<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="dindex.css">
    <title>Toyota</title>
</head>

<body>
    <table width="100%">
        <tr>
            <td colspan="12" align="center">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="https://www.toyota.com.gt/vehiculo/raize-guatemala?hsCtaTracking=91eaf42c-62f3-47a3-8df5-026b4f88dac6%7Cabde49a6-311b-46b9-b101-22c54c904356"><img src="image/Banner-Web-RAIZE.webp" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.toyota.com.gt/vehiculo/corolla-cross-hibrida-guatemala?hsCtaTracking=328ba829-519e-4c9a-9579-bc83be95c20a%7C12866330-aad6-4f1e-afd9-69297b8aedec"><img src="image/Banners-Web-CROSS.webp" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.toyota.com.gt/calculadora-de-servicios?hsCtaTracking=b12b9d18-b362-424a-94f7-1fc2ef0c5478%7C0d7a6834-bf6c-4d33-81ce-0226853db11b"><img src="image/Banners-Web.webp" class="d-block w-100" alt="..."></a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="200px">
                <section class="a">
                    <form action="productos/productos.php">
                        <input type="submit" value="Productos">
                    </form>
                </section>
            </td>
            <td width="200px">
                <section class="b">
                    <form action="tiendas/tiendas.php">
                        <input type="submit" value="Tiendas">
                    </form>
                </section>
            </td>
            <td width="200px">
                <section class="c">
                    <form action="mensajeria/lg.php">
                        <input type="submit" value="Contáctenos">
                    </form>
                </section>
            </td>
        </tr>
        <tr>
            <td colspan="12" align="left"><br>
                <h3 style="color: purple;">Ofertas del mes</h3>
            </td>
        </tr>
    </table>
    <br>
    <div class="contenedor">
        <table width="100%" align="center" border="1">
            <tr>
                <td colspan="6" rowspan="2">
                    <img src="image/lg.png" width="420px" height="340px">
                </td>
                <td colspan="3">
                    <img src="image/img1.png" width="250px" height="200px">
                </td>
                <td colspan="3">
                    <img src="image/img2.png" width="370px" height="230px">
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <img src="image/img3.png" width="550px" height="325px">
                </td>
            </tr>
        </table>
    </div>
    <table align="center" width="100%">
        <tr style="background-color: purple;">
            <td colspan="1" align="left">
                <h6 style="color: withe;">PBX: XXXXX-XXXXX</h6>
            </td>
            <td colspan="1" align="right">
                <h6 style="color: left;">Dirección: XXXXX-XXXXX-XXXX</h6>
            </td>
            <td colspan="4">
                .
            </td>
            <td colspan="1" align="right">
                <h6>Carné: 2021-40131</h6>
            </td>
            <td colspan="1">.</td>
            <td colspan="2" align="right">
                <h6>Nombre: Juan José Samayoa Vásquez</h6>
            </td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>