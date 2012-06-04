<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title></title>
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
            <div class="colMax marLeft">
                <div class="boxWhite curved5 boxConsulta" id="Contactenos">
                    <h1>Hac&eacute; tu consulta</h1>
                    <div class="boxGris">
                        <span class="borSobre"></span>
                        <p>
                            Tus consultas no molestan y nos encantan contestarla ni bien las recibimos, en caso que no podamos hacerlo en el momento, te daremos una respuesta dentro de las 24hs.
                            Comentanos todo lo que creas conveniente para resolver tu inquietud en el cuadro de comentarios.
                        </p>
                        <img src="img/icn/icnEstampilla.png" alt="Estampilla" />
                        <form name="" id="" action="confirmacion.php" method="" >
                            <ul class="boxDatos">
                                <li>
                                    <label>Nombre <span>(*)</span></label>
                                    <span class="WrapInput">
                                        <input type="text" name="" id="" value="" maxlength=""/>
                                    </span>
                                </li>
                                <li>
                                    <label>Mail <span>(*)</span></label>
                                    <span class="WrapInput">
                                        <input type="text" name="" id="" value="" maxlength=""/>
                                    </span>
                                </li>
                                <li>
                                    <label>Comentarios</label>
                                    <span class="WrapComentarios">
                                        <textarea cols="" rows=""></textarea>
                                    </span>
                                </li>
                            </ul>
                            <span class="btnForm">
                                <input type="submit" value="" name="" id="" />
                                <small>Datos obligatorios</small>
                            </span>
                            <div class="clearfix"></div>
                        </form>
                        <span class="borSobre"></span>
                    </div>
                </div>
            </div>
            <div class="colMin">
                <?php include('/inc/datosUtiles.php');?>
                <?php include('inc/PromoBanco.php'); ?>
                <?php include('inc/TarjetasCredito.php'); ?>
                <?php include('inc/MediosPagos.php'); ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php include('/inc/footer.php'); ?>
    </body>
</html>


