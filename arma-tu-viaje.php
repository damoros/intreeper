<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Arm&aacute; tu viaje | Intreeper</title>
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
                <div class="boxAmarillo curved5" id="Aviso">
                    <p>
                        Ups! No encontramos el viaje que querés hacer... pero dejanos los datos y
                        <b>te encontraremos el mejor paquete de viajes.</b>
                    </p>
                </div>
                <div class="boxWhite curved5" id="form-arma">
                    <h1>Arm&aacute; tu paquete</h1>
                    <p>
                        Queremos que tus Vacaciones sean una experiencia &uacute;nica e inigualable. Por eso, te pedimos que nos cuentes el destino al que te gustar&iacute;a viajar, en qu&eacute; fecha aproximada y todos los detalles que creas necesarios para que podamos asesorarte y brindarte esas vacaciones que siempre so&ntilde;aste y te merec&eacute;s!
                    </p>
                    <h3 class="titForm"><span class="Paso1"></span> Indicanos los datos de tu viaje</h3>
                    <ul class="boxDatos">
                        <li>
                            <label>Ciudad de origen <span>(*)</span></label>
                            <span class="WrapInput">
                                <input type="text" name="" id="" value="" maxlength=""/>
                            </span>
                        </li>
                        <li>
                            <label>Ciudad de destino <span>(*)</span></label>
                            <span class="WrapInput">
                                <input type="text" name="" id="" value="" maxlength=""/>
                            </span>
                        </li>
                        <li>
                            <label>Fecha de salida <span>(*)</span></label>
                            <span class="WrapInput">
                                <input type="text" name="" id="" value="" maxlength=""/>
                            </span>
                        </li>
                        <li>
                            <span class="width50">
                                <label>D&iacute;as <span>(*)</span></label>
                                <span class="WrapInputSmall">
                                    <select name="" id="" >
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                    </select>
                                </span>
                            </span>
                        </li>
                        <li>
                            <span class="width50">
                                <label>Adultos <span>(*)</span></label>
                                <span class="WrapInputSmall">
                                    <select name="" id="" >
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </span>
                            </span>
                            <span class="width50">
                                <label>Niños <span>(*)</span></label>
                                <span class="WrapInputSmall">
                                    <select name="" id="" >
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </span>
                            </span>
                        </li>
                        <li>
                            <label class="horizontal"><input type="checkbox" id="" value="" />Poseo fechas flexible</label>
                        </li>
                    </ul>
                    <h3 class="titForm"><span class="Paso2"></span> Ingresa tu datos para contactarte cuando tengamos tu viaje</h3>
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
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php include('/inc/footer.php'); ?>
    </body>
</html>
