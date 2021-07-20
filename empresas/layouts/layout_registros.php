<?php
if ($_SESSION['usuario'] == "vodafoneono" 
        || $_SESSION['usuario'] == "gasnaturalcegas" 
        || $_SESSION['usuario'] == "nedgiacegas" 
        || $_SESSION['usuario'] == "iberdrola" 
        || $_SESSION['usuario'] == "telefonica" 
        || $_SESSION['usuario'] == "emivasa" 
        || $_SESSION['usuario'] == "ocoval")
{
?>
    <!DOCTYPE html>
    <html lang="es">
        <?php require('includes/head.php'); ?>
        <body>
            <div class="text-center copyright" style="color:white">
                &copy; OCOVAL 2017 | <a href="http://www.tessq.com/" target="_blank" style="color:white">Diseño Web</a> <a href="http://www.tessq.com/" target="_blank" style="color:white">TESS QUALITY</a>
                <a href="http://www.tessq.com/" target="_blank"><img src="assets/img/logo-tess-quality.png" class="logotess" style="float:left;margin-left:35px;"></a>
                <a href="http://www.tessq.com/" target="_blank"><img src="assets/img/logo-tess-quality.png" class="logotess" style="float:right;margin-right:35px;"></a>
            </div>
            <!-- WRAPPER -->
            <div class="wrapper">
                <!-- PAGE CONTENT -->
                <!-- CABECERA -->
                <div class="col-sm-12">
                    <div class="col-sm-4 col-xs-4">
                        <img src="../assets/img/logo/ocoval-obras.jpg" class="img-responsive img-cabecera-empresas">
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <img src="../assets/img/logo/ajuntament-valencia3.jpg" class="img-responsive img-cabecera-empresas logoajun">
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <?php
                        switch ($_SESSION['usuario']) {
                            case "vodafoneono":
                                ?>
                                <img src="assets/img/portfolio/single/vodafoneono-back.jpg" class="img-responsive img-cabecera-empresas">
                                <?php
                                break;
                            case "gasnaturalcegas":
                                ?>
                                <img src="assets/img/portfolio/single/gas_natural.jpg" class="img-responsive img-cabecera-empresas">
                                <?php
                                break;
                            case "iberdrola":
                                ?>
                                <img src="assets/img/portfolio/single/iberdrola-back.jpg" class="img-responsive img-cabecera-empresas">
                                <?php
                                break;
                            case "telefonica":
                                ?>
                                <img src="assets/img/portfolio/single/telefonica-back.jpg" class="img-responsive img-cabecera-empresas">
                                <?php
                                break;
                            case "emivasa":
                                ?>
                                <img src="assets/img/portfolio/single/emivasa-back.jpg" class="img-responsive img-cabecera-empresas">
                                <?php
                                break;
                            case "ocoval":
                                ?>
                                <img src="../assets/img/logo/ocoval-obras.jpg" class="img-responsive img-cabecera-empresas">
                                <?php
                                break;
                        }
                        ?>
                    </div>
                </div>
                <!-- /CABECERA -->	
                <div class="col-sm-12 visible-lg visible-md">
                    <br /><br /><br /><br />
                </div>

                <div class="page-content">
                    <div class="container">
                        <!-- WHY REPUTE -->
                        <section>
                            <div class="container">
                                <div class="col-sm-12 col-xs-12 titulo">
                                    <ul class="nav" role="tablist">
                                        <li><h3 style="color:#406da4;"><b>DATOS DEL EXPEDIENTE</b></h3></li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-xs-12" style="border-radius:15px;border: 1px solid #ccc;padding:30px;">
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Titular:</b> <?php echo $datos['titular']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Identificación:</b> <?php echo $datos['identificacion']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Número de expediente:</b> <?php echo $datos['numeroexpediente']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Descripción:</b> <?php echo $datos['descripcion']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Emplazamiento:</b> <?php echo $datos['emplazamiento']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Número:</b> <?php echo $datos['numeroemplazamiento']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Estado:</b> <?php echo $datos['estado']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Fecha de petición:</b> <?php echo $datos['peticion']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Fecha de notificación:</b> <?php echo $datos['notificacion']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Longitud de zanja:</b> <?php echo $datos['longitud']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Presupuesto:</b> <?php echo $datos['presupuesto']; ?></p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <p><b style="color:#406da4;">Técnico:</b> <?php echo $datos['tecnico']; ?></p>
                                    </div>		
                                </div>	
                                <br /><br /><br /><br />		
                                <div class="col-sm-12 col-xs-12 titulo" style="margin-top:20px;">
                                    <ul class="nav" role="tablist">
                                        <li><h3 style="color:#406da4;"><b>REGISTROS DEL EXPEDIENTE</b></h3></li>
                                    </ul>
                                </div>
                                <br /><br /><br />
                                <div class="tab-content">
                                    <!-- SOLICITUDES DE LICENCIA -->
                                    <div class="tab-pane fade in active text-center">

                                        <?php if ($datos['registros'] != 0) { ?>

                                            <div class="table-responsive col-sm-12" style="padding-left:0px;padding-right:0px;">
                                                <!-- TABLA -->
                                                <table class="table table-bordered table-hover table-condensed table-striped" style="font-size:13px;">
                                                    <thead>
                                                        <tr class="danger" style="font-size:12px;">
                                                            <th style="width:9%;">Fecha</th>
                                                            <th style="width:11%;">Descripción</th>		
                                                            <th style="width:80%;">Comentario</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                        <?php
                                                        foreach ($datos['registros'] as $columna) {
                                                            ?>
                                                            <tr>
                                                                <td style="overflow:visible;white-space: normal;cursor: text;"><?php echo date_format($columna['Fecha'], 'd-m-Y'); ?></td>
                                                                <td style="overflow:visible;white-space: normal;cursor: text;"><?php echo $columna['Descripcion']; ?></td>
                                                                <td style="overflow:visible;white-space: normal;cursor:text;text-align: left;"><?php echo nl2br($columna['ComentarioOficio']); ?></td>
                                                            </tr>
                                                            <?php
                                                        }//Foreach
                                                        ?>
                                                    </tbody>
                                                </table>
                                                <!-- /TABLA -->
                                            </div>	
                                        <?php } ?>
                                        <?php if ($datos['registros'] == 0) { ?>
                                            <p style="color:red;">NO SE ENCONTRARON REGISTROS DE ESTE EXPEDIENTE</p>
                                        <?php } ?>
                                    </div>
                                    <!-- /SOLICITUDES DE LICENCIA -->
                                </div>
                            </div>
                        </section>
                        <!-- END WHY REPUTE -->
                    </div>
                </div>
                <!-- /CONTENT -->
            </div>
            <!-- END WRAPPER -->
            <div class="text-center copyright" style="color:white">
                &copy; OCOVAL 2017 | <a href="http://www.tessq.com/" target="_blank" style="color:white">Diseño Web</a> <a href="http://www.tessq.com/" target="_blank" style="color:white">TESS QUALITY</a>
            </div>
            <!-- JAVASCRIPTS -->
            <script src="assets/js/jquery-2.1.1.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/plugins/fitvids/jquery.fitvids.js"></script>
            <script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
            <script src="assets/js/repute-scripts.js"></script>

        </body>

    </html>
    <?php
} else {
    require('error.php');
}