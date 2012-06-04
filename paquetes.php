<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Paquetes de viajes a New York | Intreeper</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="google-site-verification" content="" />
        <link rel="shortcut icon" href="img/icn/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/comun.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/sliderViewerPro.js"></script>
        <script type="text/javascript" src="js/jquery.timers.js"></script>
        <script type="text/javascript" src="js/DD_roundies.js"></script>
        <script type="text/javascript" src="js/comun.js"></script>
    </head>
    <body>
        <?php include('inc/header.php'); ?>
        <div class="Main" id="Paquetes">
            <div class="colMin marLeft">
                <?php include('inc/buscadorForm.php'); ?>
                <?php include('inc/BuscadorDestinos.php'); ?>
                <?php include('inc/buscadorArmaTuPaquete.php'); ?>
                <?php include('inc/PromoBanco.php'); ?>
                <?php include('inc/TarjetasCredito.php'); ?>
                <?php include('inc/MediosPagos.php'); ?>
            </div>
            <div class="colMax">
                <div class="boxWhite curved5" id="Head">
                    <h1>
                        <span>Ofertas para:</span>
                        New York
                    </h1>
                    <label>
                        Ordenar por:
                        <select id="">
                            <option>Precio</option>
                            <option>Fecha</option>
                        </select>
                    </label>
                    <div class="clearfix"></div>
                </div>
                 <?php include('inc/PaquetePromo.php'); ?>
                <?php include('inc/PaqueteSinPromo.php'); ?>
                <div class="paginador">
                    <ul>
                        <li><a href="" title="Ver p&aacute;gina 1" class="active">1</a></li>
                        <li><a href="" title="Ver p&aacute;gina 2">2</a></li>
                        <li><a href="" title="Ver p&aacute;gina 3">3</a></li>
                        <li><a href="" title="Ver p&aacute;gina 4">4</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php include('/inc/footer.php'); ?>
    </body>
</html>
