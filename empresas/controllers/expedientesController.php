<?php
class expedientesController 
{
    public function actionConsultarExpedientesZanjas()
    {
        if (isset($_POST['empresa'])) {

            require "models/expedienteszanjas.php";
            require ("includes/vistas.php");

            $filtrosusados = "";

            $empresa = $_POST['empresa'];
            $identificacion = $_POST['identificacion'];
            if ($identificacion != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Identificación:</span> " . $identificacion;
            }
            $emplazamiento = $_POST['emplazamiento'];
            if ($emplazamiento != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Emplazamiento:</span> " . $emplazamiento;
            }
            $numero = $_POST['numero'];
            if ($numero != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Número: " . $numero;
            }
            $fecha_peticion_desde = $_POST['fecha_peticion_desde'];
            $fecha_peticion_hasta = $_POST['fecha_peticion_hasta'];
            if ($fecha_peticion_desde != "" && $fecha_peticion_hasta != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Fecha de petición desde:</span> " . $fecha_peticion_desde . " <span style='color:#337ab7;'>hasta</span>  " . $fecha_peticion_hasta;
            }
            $fecha_notificacion_desde = $_POST['fecha_notificacion_desde'];
            $fecha_notificacion_hasta = $_POST['fecha_notificacion_hasta'];
            if ($fecha_notificacion_desde != "" && $fecha_notificacion_hasta != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Fecha de notificación desde:</span> " . $fecha_notificacion_desde . " <span style='color:#337ab7;'>hasta</span> " . $fecha_notificacion_hasta;
            }
            $numero_expediente = $_POST['numero_expediente'];
            if ($numero_expediente != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Número de expediente:</span> " . $numero_expediente;
            }


            if (isset($_POST['nueva_edificacion'])) {
                $nueva_edificacion = "si";
                $filtrosusados .= " Nueva edificación ";
            } else {
                $nueva_edificacion = "no";
            }

            if (isset($_POST['rehabilitacion'])) {
                $rehabilitacion = "si";
                $filtrosusados .= " Rehabilitación ";
            } else {
                $rehabilitacion = "no";
            }

            if (isset($_POST['licencia_conjunta'])) {
                $licencia_conjunta = "si";
                $filtrosusados .= " Licencia conjunta ";
            } else {
                $licencia_conjunta = "no";
            }

            $estado = $_POST['estado'];
            if ($estado != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Estado:</span> " . $estado;
            }
            $clase_obra = $_POST['clase_obra'];
            if ($clase_obra != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Clase de obra:</span> " . $clase_obra;
            }
            $tecnico = $_POST['tecnico'];
            if ($tecnico != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Técnico:</span> " . $tecnico;
            }
            $descripcion = $_POST['descripcion'];
            if ($descripcion != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Descripción:</span> " . $descripcion;
            }
            $numero_coordinacion = $_POST['numero_coordinacion'];
            if ($numero_coordinacion != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Número de coordinación:</span> " . $numero_coordinacion;
            }

            if (isset($_POST['expedientes_en_tramitacion'])) {
                $expedientes_en_tramitacion = "si";
                $filtrosusados .= " Expedientes en tramitación";
            } else {
                $expedientes_en_tramitacion = "no";
            }

            $titular = $_POST['titular'];
            if ($titular != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Tipo de titular:</span> " . $titular;
            }
            $nombredeltitular = $_POST['nombredeltitular'];
            if ($nombredeltitular != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Nombre del titular:</span> " . $nombredeltitular;
            }
            $tipo_red = $_POST['tipo_red'];
            if ($tipo_red != "") {
                $filtrosusados .= " <span style='color:#337ab7;'>Tipo de red:</span> " . $tipo_red;
            }
            $ordenar_por = $_POST['ordenar_por'];
            $de_manera = $_POST['de_manera'];

            $datos[filtrosusados] = $filtrosusados;
            $datos[estado] = expedienteszanjas::findestado();
            $datos[clase] = expedienteszanjas::findclase();
            $datos[tipored] = expedienteszanjas::findtipored();
            $datos[tabla] = expedienteszanjas::findexpedientes($empresa, $identificacion, $emplazamiento, $numero, $fecha_peticion_desde, $fecha_peticion_hasta, $fecha_notificacion_desde, $fecha_notificacion_hasta, $numero_expediente, $nueva_edificacion, $rehabilitacion, $licencia_conjunta, $estado, $clase_obra, $tecnico, $descripcion, $numero_coordinacion, $expedientes_en_tramitacion, $titular, $nombredeltitular, $tipo_red, $ordenar_por, $de_manera);

            vistaSinvista(array('datos' => $datos), "layout_empresas");
        } else {
            header('Location: ?r=index/indexadmin');
        }
    }

    public function actionConsultarRegistrosZanjas()
    {
        require "models/expedienteszanjas.php";
        require ("includes/vistas.php");

        if (isset($_POST['id']))
        {
            $datos['titular']           = $_POST['titular'];
            $datos['identificacion']    = $_POST['identificacion'];
            $expediente                 = $_POST['id'];
            $datos['descripcion']       = $_POST['descripcion'];
            $datos['emplazamiento']     = $_POST['emplazamiento'];
            $datos['numeroemplazamiento'] = $_POST['numero'];
            $datos['estado']              = $_POST['estado'];
            $datos['peticion']            = $_POST['peticion'];
            $datos['notificacion']      = $_POST['notificacion'];
            $datos['longitud']          = $_POST['longitud'];
            $datos['presupuesto']       = $_POST['presupuesto'];
            $datos['tecnico']           = $_POST['tecnico'];

            $datos['numeroexpediente'] = $_POST['n_expediente'];

            $datos['registros'] = expedienteszanjas::findregistrosexpediente($expediente);

            vistaSinvista(array('datos' => $datos), "layout_registros");
        } else {
            header('Location: ?r=index/indexadmin');
        }
    }
}
?>