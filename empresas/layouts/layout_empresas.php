<?php
if ($_SESSION['usuario'] == "vodafoneono" || $_SESSION['usuario'] == "gasnaturalcegas" || $_SESSION['usuario'] == "iberdrola" || $_SESSION['usuario'] == "telefonica" || $_SESSION['usuario'] == "emivasa" || $_SESSION['usuario'] == "ocoval" || $_SESSION['usuario'] == "nedgiacegas") {
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
                <div class="col-sm-12 imgempresas">
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
                                <img src="assets/img/portfolio/single/gas_natural.jpg" class="img-responsive img-cabecera-empresas" style="margin-top: -4%;">
                                <?php
                                break;
                            case "nedgiacegas":
                                ?>
                                <img src="assets/img/portfolio/single/gas_natural.jpg" class="img-responsive img-cabecera-empresas" style="margin-top: -4%;">
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
                <hr />
                <div class="page-content">
                    <div class="container">
                        <!-- WHY REPUTE -->
                        <section>
                            <div class="container">
                                <div class="col-sm-6 col-xs-12 titulo">
                                    <ul class="nav" role="tablist">
                                        <li><h3 style="color:#406da4;"><b>CONSULTA DE EXPEDIENTES DE ZANJAS</b></h3></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-xs-12 cerrarsesion" style="padding-bottom: 15px;">
                                    <form method="post" action="?r=login/cerrarSesion" style="float:right;">    
                                        &nbsp;&nbsp;<input class="btn btn-danger" type="submit" style="height: 42px;float: right;" value="Salir de la sesión">
                                    </form>	
                                    
                                    
                                        
                                    <?php
                                    switch($_SESSION['usuario']) {
                                        case "vodafoneono":
                                            ?>
                                            <a href="http://www.ocoval.es/datos/TCOOR VODAFONE.txt" target="_blank" style="float: right;"> <input class="btn btn-primary " type="button" style="height: 42px;" value="Coordinación" style="margin-right: 20px;"></a>
                                            <a href="http://www.ocoval.es/datos/INCIDENCIAS VODAFONE.pdf" target="_blank" style="float: right;margin-right: 7px;"> <input class="btn btn-info " type="button" style="height: 42px;" value="Incidencias" style="margin-right: 20px;"></a>
                                            <?php
                                            break;
                                        case "gasnaturalcegas":
                                            ?>
                                            <a href="http://www.ocoval.es/datos/TCOOR CEGAS.txt" target="_blank" style="float: right;"> <input class="btn btn-primary " type="button" style="height: 42px;" value="Coordinación" style="margin-right: 20px;"></a>
                                            <a href="http://www.ocoval.es/datos/INCIDENCIAS CEGAS.pdf" target="_blank" style="float: right;margin-right: 7px;"> <input class="btn btn-info " type="button" style="height: 42px;" value="Incidencias" style="margin-right: 20px;"></a>
                                            <?php
                                            break;
                                        case "nedgiacegas":
                                            ?>
                                            <a href="http://www.ocoval.es/datos/TCOOR CEGAS.txt" target="_blank" style="float: right;"> <input class="btn btn-primary " type="button" style="height: 42px;" value="Coordinación" style="margin-right: 20px;"></a>
                                            <a href="http://www.ocoval.es/datos/INCIDENCIAS CEGAS.pdf" target="_blank" style="float: right;margin-right: 7px;"> <input class="btn btn-info " type="button" style="height: 42px;" value="Incidencias" style="margin-right: 20px;"></a>
                                            <?php
                                            break;
                                        case "iberdrola":
                                            ?>
                                            <a href="http://www.ocoval.es/datos/TCOOR IBERDROLA.txt" target="_blank" style="float: right;"> <input class="btn btn-primary " type="button" style="height: 42px;" value="Coordinación"></a>
                                            <a href="http://www.ocoval.es/datos/INCIDENCIAS IBERDROLA.pdf" target="_blank" style="float: right;margin-right: 7px;"> <input class="btn btn-info " type="button" style="height: 42px;" value="Incidencias" style="margin-right: 20px;"></a>
                                            <?php
                                            break;
                                        case "telefonica":
                                            ?>
                                            <a href="http://www.ocoval.es/datos/TCOOR TELEFONICA.txt" target="_blank" style="float: right;"> <input class="btn btn-primary " type="button" style="height: 42px;" value="Coordinación" style="margin-right: 20px;"></a>
                                            <a href="http://www.ocoval.es/datos/INCIDENCIAS TELEFONICA.pdf" target="_blank" style="float: right;margin-right: 7px;"> <input class="btn btn-info " type="button" style="height: 42px;" value="Incidencias" style="margin-right: 20px;"></a>
                                            <?php
                                            break;
                                        case "emivasa":
                                            ?>
                                            <a href="http://www.ocoval.es/datos/TCOOR EMIVASA.txt" target="_blank" style="float: right;"> <input class="btn btn-primary " type="button" style="height: 42px;" value="Coordinación" style="margin-right: 20px;"></a>
                                            <a href="http://www.ocoval.es/datos/INCIDENCIAS EMIVASA.pdf" target="_blank" style="float: right;margin-right: 7px;"> <input class="btn btn-info " type="button" style="height: 42px;" value="Incidencias" style="margin-right: 20px;"></a>
                                            <?php
                                            break;
                                        case "ocoval":
                                            ?>
                                            <a href="http://www.ocoval.es/datos/TCOOR OCOVAL.txt" target="_blank" style="float: right;"> <input class="btn btn-primary " type="button" style="height: 42px;" value="Coordinación" style="margin-right: 20px;"></a>
                                            <?php
                                            break;
                                    }
                                    ?>
                                            
                                    <a href="https://www.google.com/maps/d/viewer?mid=1c4i3vShZm7Br2zslioeWHYhb0IDRtesG&ll=39.42589312419708%2C-0.385780667206177&z=10"
                                        target="_blank" 
                                        style="float: right;margin-right: 7px;">
                                        <input class="btn btn-warning" type="button" style="height: 42px;" value="Mapa coordinaciones" style="margin-right: 20px;">
                                    </a>
                                </div>
                                <br /><br /><br />
                                <hr />
                                <div class="tab-content">
                                    <!-- SOLICITUDES DE LICENCIA -->
                                    <div class="tab-pane fade in active text-center" id="tab-bottom1">
                                        <form id="contact-form" method="post" class="form-horizontal margin-bottom-30px" role="form" action="?r=expedientes/consultarexpedienteszanjas" novalidate>
                                            <div class="row">
                                                <br />
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <label class="control-label sr-only">Identificación</label>
                                                            <input type="text" name="identificacion" class="form-control" placeholder="Identificación">
                                                            <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <label class="control-label sr-only">Emplazamiento</label>
                                                            <input type="text" name="emplazamiento" class="form-control" placeholder="Emplazamiento">
                                                            <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="input-group">
                                                            <label class="control-label sr-only">Número</label>
                                                            <input type="text" name="numero" class="form-control" placeholder="Número">
                                                            <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <p>Fecha de petición desde...</p>
                                                        <div class="input-group">
                                                            <input type="date" name="fecha_peticion_desde" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Fecha de petición hasta...</p>
                                                        <div class="input-group">
                                                            <input type="date" name="fecha_peticion_hasta" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar-times-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>	
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <p>Fecha de notificación desde...</p>
                                                        <div class="input-group">
                                                            <input type="date" name="fecha_notificacion_desde" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Fecha de notificación hasta...</p>
                                                        <div class="input-group">
                                                            <input type="date" name="fecha_notificacion_hasta" class="form-control">
                                                            <span class="input-group-addon"><i class="fa fa-calendar-times-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <label for="contact-name" class="control-label sr-only">Número de expediente</label>
                                                            <input type="text" name="numero_expediente" class="form-control" placeholder="Número de expediente">
                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="nueva_edificacion" value="nueva_edificacion"> Nueva Edificación
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="rehabilitacion"  value="rehabilitacion"> Rehabilitación
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="licencia_conjunta" value="licencia_conjunta"> Licencia Conjunta
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <select name="estado" class="form-control">
                                                            <option value="" disabled selected> Estado </option>
                                                            <?php
                                                            foreach ($datos['estado'] as $clase) {
                                                                ?>
                                                                <option value="<?php echo $clase['estado']; ?>"> <?php echo $clase['estado']; ?> </option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <select name="clase_obra" class="form-control" required>
                                                            <option value="" disabled selected> Clase de Obra </option>
                                                            <?php
                                                            foreach ($datos['clase'] as $clase) {
                                                                ?>
                                                                <option value="<?php echo $clase['clase']; ?>"> <?php echo $clase['clase']; ?> </option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" name="tecnico" class="form-control" placeholder="Técnico">
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" name="descripcion" class="form-control" placeholder="Descripción">
                                                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <label for="contact-name" class="control-label sr-only">Número de coordinación</label>
                                                            <input type="text" name="numero_coordinacion" class="form-control" placeholder="Número de coordinación">
                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="expedientes_en_tramitacion" value="expedientes_en_tramitacion"> Solo buscar expedientes en tramitación
                                                        </label>
                                                    </div>
                                                </div>
                                                <?php /* FILTROS SÓLO PARA IBERDROLA U OCOVAL if($_SESSION['usuario']=="iberdrola" || $_SESSION['usuario']=="ocoval"){ */ ?>
                                                <div class="form-group">
                                                    <div class="col-sm-2">
                                                        <select name="titular" class="form-control">
                                                            <option value="" disabled selected> Tipo de Titular </option>
                                                            <option value="E"> Compañía </option>
                                                            <option value="P"> Particular </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <label for="contact-name" class="control-label sr-only">Nombre del titular</label>
                                                            <input type="text" name="nombredeltitular" class="form-control" placeholder="Nombre del titular">
                                                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="tipo_red" class="form-control">
                                                            <option value="" disabled selected> Tipo de Red </option>
                                                            <?php
                                                            foreach ($datos['tipored'] as $tipored) {
                                                                ?>
                                                                <option value="<?php echo $tipored['tipored']; ?>"> <?php echo $tipored['tipored']; ?> </option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php /* } */ ?>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <select name="ordenar_por" class="form-control" required>
                                                            <option value="" disabled selected> Ordenar por: </option>
                                                            <option value="Expedientes.FechaPeticion"> Fecha de petición </option>
                                                            <option value="Expedientes.FechaNotificacion"> Fecha de notificación </option>
                                                            <option value="Expedientes.Identificacion"> Identificación </option>
                                                            <option value="Expedientes.CodigoRegistroMunicipal"> Número de expediente </option>
                                                            <option value="ExpedientesEmplazamientos.Emplazamiento"> Dirección </option>
                                                            <option value="Estados.Descripcion"> Estado </option>
                                                            <option value="ExpedientesTipos.Descripcion"> Clase </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="de_manera" class="form-control" required>
                                                            <option value="" disabled selected> De manera: </option>
                                                            <option value="ASC"> Ascendente </option>
                                                            <option value="DESC"> Descendente </option>
                                                        </select>
                                                    </div>
                                                </div>										
                                            </div><!-- row -->

                                            <div class="form-group">
                                                <div class="col-sm-12" style="text-align:left;margin-top:10px;">
                                                    <button type="reset" class="btn btn-primary"><span>Limpiar</span></button>
                                                    <button type="submit" class="btn btn-primary"><span>Buscar</span></button>
                                                </div>
                                            </div>
                                            <input type="hidden" name="empresa" value="<?php if ($_SESSION['usuario'] == "nedgiacegas") {
                                                echo "gasnaturalcegas";
                                            } else {
                                                echo $_SESSION['usuario'];
                                            } ?>">
                                        </form>

    <?php
	if ($datos['tabla'] != 0)
 	{
 	?>
                                            <!--  CAMPO PARA VER EL CONTENIDO DE UNA CELDA  -->
                                            <div class="col-sm-12" id="contenidocelda">
                                                <div class="col-sm-1 divcerrarventana"><h3 onclick="cerrartooltip();"> X </h3></div>
                                                <div class="col-sm-11"><p></p></div>
                                            </div>	

                                            <div class="table-responsive col-sm-12"  style="padding-left:0px;padding-right:0px;">
                                                <!-- TABLA -->
                                                <p style="float:left;margin-left:5px;"><b>Filtros utilizados: <?php echo $datos['filtrosusados']; ?></b></p>
                                                <table class="table table-bordered table-hover table-condensed table-striped" style="font-size:13px;">
                                                    <thead>
                                                        <tr class="danger" style="font-size:11px;">
                                                            <th>Titular</th>
                                                            <th>Identificación</th>		
                                                            <th>NºExpediente</th>
                                                            <th>Descripción</th>
                                                            <th>Emplazamiento</th>
                                                            <th>Num.</th>
                                                            <th>Estado</th>
                                                            <th>Petición</th>
                                                            <th>Notificación</th>
                                                            <th>Longitud</th>
                                                            <th>Presupuesto</th>
                                                            <th>Técnico</th>
                                                            <th>Registros</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                        <?php
                                                        $csv_end = "  
";
                                                        $csv_sep = ";";
                                                        $csv_file = "expedientes de zanjas.csv";
                                                        $csv = "Titular;Identificación;NºEspediente;Descripción;Emplazamiento;Número;Estado;Fecha de Petición;Fecha de notificación;Longitud de zanja;Presupuesto;Técnico" . $csv_end;

                                                        $numeroexpedientetemporal = "";
                                                        $contadorderegistros = 0;
                                                        $topregistros = 0; //Dependiendo de la empresa que esté en sesión se mostrará una cantidad de registros en la tabla

                                                        if ($_SESSION['usuario'] == "ocoval") {
                                                            $topregistros = 5000;
                                                        } else if ($_SESSION['usuario'] != "ocoval") {
                                                            $topregistros = 2000;
                                                        }

                                                        foreach ($datos['tabla'] as $columna) 
                                                        {

                                                            if ($columna['Expediente'] != $numeroexpedientetemporal) 
                                                            {

                                                                $numeroexpedientetemporal = $columna['Expediente'];
                                                                /* Compruebo si longitud de zanja tiene un punto para sustituirlo por coma */
                                                                $coincidencia = strpos($columna['LongitudZanja'], ".");
                                                                if ($coincidencia === false)
                                                                    $columna['LongitudZanja'] = $columna['LongitudZanja'];
                                                                else
                                                                    $columna['LongitudZanja'] = str_replace(".", ",", $columna['LongitudZanja']);
                                                                /* Compruebo si longitud de zanja tiene un punto para sustituirlo por coma */

                                                                /* Compruebo Redondeo el tiene un punto para sustituirlo por coma */
                                                                $coincidencia2 = strpos($columna['Presupuesto'], ".");
                                                                if ($coincidencia2 === false)
                                                                    $columna['Presupuesto'] = $columna['Presupuesto'];
                                                                else
                                                                    $columna['Presupuesto'] = str_replace(".", ",", $columna['Presupuesto']);
                                                                /* Compruebo Redondeo el tiene un punto para sustituirlo por coma */
                                                                ?>
                                                                <tr>
                                                                    <td title="<?php echo $columna['NombreFiscal']; ?>" onclick="llenarcontenido('<p><?php echo $columna['NombreFiscal']; ?></p>');"><?php echo $columna['NombreFiscal']; ?></td>
                                                                    <td title="<?php echo $columna['Identificacion']; ?>" onclick="llenarcontenido('<p><?php echo $columna['Identificacion']; ?></p>');"><?php echo $columna['Identificacion']; ?></td>
                                                                    <td title="<?php echo $columna['Expediente']; ?>" onclick="llenarcontenido('<p><?php echo $columna['Expediente']; ?></p>');"><?php echo $columna['Expediente']; ?></td>
                                                                    <td title="<?php echo $columna['Descripcion']; ?>" onclick="llenarcontenido('<p><?php echo $columna['Descripcion']; ?></p>');"><?php echo $columna['Descripcion']; ?></td>
                                                                    <td title="<?php echo $columna['Emplazamiento']; ?>" onclick="llenarcontenido('<p><?php echo $columna['Emplazamiento']; ?></p>');"><?php echo $columna['Emplazamiento']; ?></td>
                                                                    <td title="<?php echo $columna['Numero']; ?>" onclick="llenarcontenido('<p><?php echo $columna['Numero']; ?></p>');"><?php echo $columna['Numero']; ?></td>
                                                                    <td title="<?php echo $columna['Estado']; ?>" onclick="llenarcontenido('<p><?php echo $columna['Estado']; ?></p>');"><?php echo $columna['Estado']; ?></td>
                                                                    <td title="<?php echo date_format($columna['FechaPeticion'], 'd-m-Y'); ?>" onclick="llenarcontenido('<p><?php echo date_format($columna['FechaPeticion'], 'd-m-Y'); ?></p>');"><?php echo date_format($columna['FechaPeticion'], 'd-m-Y'); ?></td>
                                                                    <td title="<?php echo date_format($columna['FechaNotificacion'], 'd-m-Y'); ?>" onclick="llenarcontenido('<p><?php echo date_format($columna['FechaNotificacion'], 'd-m-Y'); ?></p>');"><?php echo date_format($columna['FechaNotificacion'], 'd-m-Y'); ?></td>
                                                                    <td title="<?php echo $columna['LongitudZanja']; ?>" onclick="llenarcontenido('<p><?php echo $columna['LongitudZanja']; ?></p>');"><?php echo $columna['LongitudZanja']; ?></td>
                                                                    <td title="<?php echo round($columna['Presupuesto'], 2); ?>" onclick="llenarcontenido('<p><?php echo round($columna['Presupuesto'], 2); ?></p>');"><?php echo round($columna['Presupuesto'], 2); ?></td>
                                                                    <td title="<?php echo $columna['Tecnico']; ?>" onclick="llenarcontenido('<p><?php echo $columna['Tecnico']; ?></p>');"><?php echo $columna['Tecnico']; ?></td>
                                                                    <td>
                                                                        <form method="post" action="?r=expedientes/consultarregistroszanjas" target="_blank">
                                                                            <input type="hidden" name="titular" value="<?php echo $columna['NombreFiscal']; ?>">
                                                                            <input type="hidden" name="identificacion" value="<?php echo $columna['Identificacion']; ?>">
                                                                            <input type="hidden" name="n_expediente" value="<?php echo $columna['Expediente']; ?>">
                                                                            <input type="hidden" name="descripcion" value="<?php echo $columna['Descripcion']; ?>">
                                                                            <input type="hidden" name="emplazamiento" value="<?php echo $columna['Emplazamiento']; ?>">
                                                                            <input type="hidden" name="numero" value="<?php echo $columna['Numero']; ?>">
                                                                            <input type="hidden" name="estado" value="<?php echo $columna['Estado']; ?>">
                                                                            <input type="hidden" name="peticion" value="<?php echo date_format($columna['FechaPeticion'], 'd-m-Y'); ?>">
                                                                            <input type="hidden" name="notificacion" value="<?php echo date_format($columna['FechaNotificacion'], 'd-m-Y'); ?>">
                                                                            <input type="hidden" name="longitud" value="<?php echo $columna['LongitudZanja']; ?>">
                                                                            <input type="hidden" name="presupuesto" value="<?php echo round($columna['Presupuesto'], 2); ?>">
                                                                            <input type="hidden" name="tecnico" value="<?php echo $columna['Tecnico']; ?>">

                                                                            <input type="hidden" name="id" value="<?php echo $columna['ID']; ?>">
                                                                            <button type="submit" style="width:100%;border:0px;background-color:transparent;"><i class="fa fa-eye"></i></button>
                                                                        </form>
                                                                    </td>		
                                                                </tr>

               													 <?php
												                $csv .= $columna['NombreFiscal'] . $csv_sep . $columna['Identificacion'] . $csv_sep . $columna['Expediente'] . $csv_sep . $columna['Descripcion'] . $csv_sep . $columna['Emplazamiento'] . $csv_sep . $columna['Numero'] . $csv_sep . $columna['Estado'] . $csv_sep . date_format($columna['FechaPeticion'], 'd-m-Y') . $csv_sep . date_format($columna['FechaNotificacion'], 'd-m-Y') . $csv_sep . $columna['LongitudZanja'] . $csv_sep . $columna['Presupuesto'] . $csv_sep . $columna['Tecnico'] . $csv_end;
												                $contadorderegistros ++;
												                if ($contadorderegistros == $topregistros) 
												                {
												                    break;
												                }
            												}//IF
        }//Foreach
        ?>
                                                    </tbody>
                                                </table>
                                                <!-- /TABLA -->

                                                <script>
                                                    function llenarcontenido(contenido) {

                                                        $("#contenidocelda").show("slow");

                                                        $('#contenidocelda p').animate({'opacity': 0}, 300, function () {
                                                            $(this).html(contenido).animate({'opacity': 1}, 300);
                                                        });
                                                    }

                                                    function cerrartooltip() {

                                                        $("#contenidocelda").hide("slow");

                                                    }

                                                </script>

                                                <?php
                                                /* CSV CREATE */
                                                if (!$handle = fopen($csv_file, "w")) {
                                                    /* echo "Cannot open file";  */
                                                    exit;
                                                }
                                                if (fwrite($handle, utf8_decode($csv)) === FALSE) {
                                                    /* echo "Cannot write to file";  */
                                                    exit;
                                                }
                                                fclose($handle);
                                                /* CSV */
                                                ?>  

                                            </div>	
        <?php if ($contadorderegistros !== $topregistros) { ?>
                                                <p style="float:left;margin-left:5px;">Cantidad de registros encontrados: <span style="color:#337ab7;"><b><?php echo $contadorderegistros; ?></b></span></p>
                                            <?php } ?>
        <?php if ($contadorderegistros === $topregistros) { ?>
                                                <p style="float:left;margin-left:5px;color:red;"><b>Registros mostrados: <?php echo $topregistros; ?> de un total de: <?php echo $_SESSION['counter']; ?>, esto supera el límite máximo de carga por página, por favor, utilice los filtros para reducir los resultados.</b></p>
        <?php } ?>
                                            <div class="form-group">
                                                <div class="col-sm-12" style="text-align:left;margin-top:10px;">
                                                    <a href="expedientes de zanjas.csv"><button type="" class="btn btn-success btn-block"><span>Descargar archivo CSV</span></button></a>
                                                </div>
                                            </div>
    <?php 
    } 
    else
    {
    ?>
                                                <p style="float:left;margin-left:5px;">No se han encontrado resultados</p>
    <?php    
    }
    ?>
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