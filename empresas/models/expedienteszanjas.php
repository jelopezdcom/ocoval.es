<?php

class expedienteszanjas {

    public static function findexpedientes(
        $empresa,               $identificacion,            $emplazamiento,                 $numero,            $fecha_peticion_desde, 
        $fecha_peticion_hasta,  $fecha_notificacion_desde,  $fecha_notificacion_hasta,      $numero_expediente, $nueva_edificacion, 
        $rehabilitacion,        $licencia_conjunta,         $estado,                        $clase_obra,        $tecnico,   
        $descripcion,           $numero_coordinacion,       $expedientes_en_tramitacion,    $titular,           $nombredeltitular, 
        $tipo_red,              $ordenar_por,               $de_manera) {

        switch ($empresa) {
            case "iberdrola":
                if ($titular != "") {
                    if ($titular == "P")
                        $where = " WHERE Expedientes.IDParticularEmpresa = 13";
                    if ($titular == "E")
                        $where = " WHERE Expedientes.IDEmpresa = 3";
                }
                else {
                    $where = " WHERE (Expedientes.IDEmpresa = 3 OR Expedientes.IDParticularEmpresa = 13)";
                }
                break;
            case "telefonica":
                if ($titular != "") {
                    if ($titular == "P")
                        $where = " WHERE Expedientes.IDParticularEmpresa = 4";
                    if ($titular == "E")
                        $where = " WHERE Expedientes.IDEmpresa = 4";
                } else
                    $where = " WHERE (Expedientes.IDEmpresa = 4 OR Expedientes.IDParticularEmpresa = 4)";
                break;
            case "gasnaturalcegas":
                if ($titular != "") {
                    if ($titular == "P")
                        $where = " WHERE Expedientes.IDParticularEmpresa = 17";
                    if ($titular == "E")
                        $where = " WHERE Expedientes.IDEmpresa = 6";
                } else
                    $where = " WHERE (Expedientes.IDEmpresa = 6 OR Expedientes.IDParticularEmpresa = 17)";
                break;
            case "vodafoneono":
                if ($titular != "") {
                    if ($titular == "P")
                        $where = " WHERE (Expedientes.IDParticularEmpresa = 5 OR Expedientes.IDParticularEmpresa = 2 OR Expedientes.IDParticularEmpresa = 4)";
                    if ($titular == "E")
                        $where = " WHERE (Expedientes.IDEmpresa = 2 OR Expedientes.IDEmpresa = 10 OR Expedientes.IDEmpresa = 11)";
                } else
                    $where = " WHERE (Expedientes.IDEmpresa = 2 OR Expedientes.IDEmpresa = 10 OR Expedientes.IDEmpresa = 11 OR Expedientes.IDParticularEmpresa = 5 OR Expedientes.IDParticularEmpresa = 2 OR Expedientes.IDParticularEmpresa = 4)";
                break;
            case "emivasa":
                if ($titular != "") {
                    if ($titular == "P")
                        $where = " WHERE Expedientes.IDParticularEmpresa = 16";
                    if ($titular == "E")
                        $where = " WHERE Expedientes.IDEmpresa = 1";
                } else
                    $where = " WHERE (Expedientes.IDEmpresa = 1 OR Expedientes.IDParticularEmpresa = 16)";
                break;
            case "ocoval":
                if ($titular != "")
                    $where = " WHERE Expedientes.IDEmpresa != 999 AND Expedientes.Tipo = '" . $titular . "'";
                else
                    $where = " WHERE Expedientes.IDEmpresa != 999";
                break;
        }

        $serverName = "88.12.40.67\MSSQL11.MSSQLSERVER, 1433";
        $connectionInfo = array("Database" => "ProinmeCoordinacionObras", "UID" => "tessq", "PWD" => "Abc01cba", "CharacterSet" => "UTF-8");
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        if ($conn) {
            $query = "SELECT Expedientes.NombreFiscal, Expedientes.ID, Expedientes.Identificacion, Expedientes.CodigoRegistroMunicipal AS Expediente, ExpedientesTipos.Descripcion AS ClaseObra, Expedientes.Descripcion, 
                      ExpedientesEmplazamientos.Emplazamiento, ExpedientesEmplazamientos.Numero, Estados.Descripcion AS Estado, Expedientes.FechaPeticion, 
                      Expedientes.FechaNotificacion, Expedientes.LongitudZanja, Expedientes.Presupuesto, Expedientes.IDEmpresa, Expedientes.Tipo,
                      EmpresasContactos.NombreCompleto AS Tecnico, Expedientes.LicenciaConjunta, Expedientes.EdificioNuevo, Expedientes.Rehabilitacion, Expedientes.Observaciones, TiposObras.Descripcion AS TipoRed
					  FROM         Expedientes lEFT JOIN
                      ExpedientesEmplazamientos ON Expedientes.ID = ExpedientesEmplazamientos.IDExpediente FULL OUTER JOIN
                      Estados ON Expedientes.IDEstado = Estados.ID FULL OUTER JOIN
                      ExpedientesContactos ON Expedientes.ID = ExpedientesContactos.IDExpediente FULL OUTER JOIN
                      EmpresasContactos ON ExpedientesContactos.IDContacto = EmpresasContactos.ID INNER JOIN
                      ExpedientesTipos ON Expedientes.IDTipoExpediente = ExpedientesTipos.ID INNER JOIN
                      TiposObras ON Expedientes.IDTiposObras = TiposObras.ID" . $where . "";


            if ($identificacion != "")
                $query .= " AND Expedientes.Identificacion LIKE '%" . $identificacion . "%'";

            if ($emplazamiento != "")
                $query .= " AND Emplazamiento LIKE '%" . $emplazamiento . "%'";

            if ($numero != "")
                $query .= " AND ExpedientesEmplazamientos.Numero = '" . $numero . "'";

            if ($numero_expediente != "")
                $query .= " AND Expedientes.CodigoRegistroMunicipal LIKE '%" . $numero_expediente . "%'";

            if ($descripcion != "")
                $query .= " AND Expedientes.Descripcion LIKE '%" . $descripcion . "%'";

            if ($estado != "")
                $query .= " AND Estados.Descripcion LIKE '%" . $estado . "%'";

            if ($clase_obra != "")
                $query .= " AND ExpedientesTipos.Descripcion LIKE '%" . $clase_obra . "%'";

            if ($nueva_edificacion == "si")
                $query .= " AND Expedientes.EdificioNuevo = 1";

            if ($rehabilitacion == "si")
                $query .= " AND Expedientes.Rehabilitacion = 1";

            if ($licencia_conjunta == "si")
                $query .= " AND Expedientes.LicenciaConjunta = 1";

            if ($tecnico != "")
                $query .= " AND EmpresasContactos.NombreCompleto LIKE '%" . $tecnico . "%'";


            if ($fecha_peticion_desde != "" && $fecha_peticion_hasta == "") {
                $fecha_peticion_desde = str_replace("-", "", $fecha_peticion_desde);
                $query .= " AND Expedientes.FechaPeticion >= '" . $fecha_peticion_desde . "'";
            }

            if ($fecha_peticion_hasta != "" && $fecha_peticion_desde == "") {
                $fecha_peticion_hasta = str_replace("-", "", $fecha_peticion_hasta);
                $query .= " AND Expedientes.FechaPeticion <= '" . $fecha_peticion_hasta . "'";
            }

            if ($fecha_peticion_desde != "" && $fecha_peticion_hasta != "") {
                $fecha_peticion_desde = str_replace("-", "", $fecha_peticion_desde);
                $fecha_peticion_hasta = str_replace("-", "", $fecha_peticion_hasta);
                $query .= " AND Expedientes.FechaPeticion >='" . $fecha_peticion_desde . "' AND Expedientes.FechaPeticion <='" . $fecha_peticion_hasta . "'";
            }

            if ($fecha_notificacion_desde != "" && $fecha_notificacion_hasta == "") {
                $fecha_notificacion_hasta = str_replace("-", "", $fecha_notificacion_hasta);
                $query .= " AND Expedientes.FechaNotificacion >= '" . $fecha_notificacion_desde . "'";
            }

            if ($fecha_notificacion_hasta != "" && $fecha_notificacion_desde == "") {
                $fecha_notificacion_hasta = str_replace("-", "", $fecha_notificacion_hasta);
                $query .= " AND Expedientes.FechaNotificacion <= '" . $fecha_notificacion_hasta . "'";
            }

            if ($fecha_notificacion_desde != "" && $fecha_notificacion_hasta != "") {
                $fecha_notificacion_desde = str_replace("-", "", $fecha_notificacion_desde);
                $fecha_notificacion_hasta = str_replace("-", "", $fecha_notificacion_hasta);
                $query .= " AND Expedientes.FechaNotificacion >='" . $fecha_notificacion_desde . "' AND Expedientes.FechaNotificacion <='" . $fecha_notificacion_hasta . "'";
            }

            if ($numero_coordinacion != "")
                $query .= " AND Expedientes.Observaciones LIKE '%" . $numero_coordinacion . "%'";

            if ($expedientes_en_tramitacion == "si")
                $query .= " AND Estados.Descripcion <>'NOTIFICADA' AND Estados.Descripcion <>'ARCHIVADA'";

            if ($nombredeltitular != "")
                $query .= " AND Expedientes.NombreFiscal LIKE '%" . $nombredeltitular . "%'";

            if ($tipo_red != "")
                $query .= " AND TiposObras.Descripcion = '" . $tipo_red . "'";

            if ($ordenar_por != "" && $de_manera != "")
                $query .= " ORDER BY " . $ordenar_por . " " . $de_manera . "";

            if ($ordenar_por == "" && $de_manera == "")
                $query .= " ORDER BY Expedientes.CodigoRegistroMunicipal";

            //echo $query;die;

            $result = sqlsrv_query($conn, $query);
            if ($result === false) {
                return false;
            } else {
                $contador = 0;
                while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {

                    $datos[$contador]['NombreFiscal'] = $row['NombreFiscal'];
                    $datos[$contador]['Identificacion'] = $row['Identificacion'];
                    $datos[$contador]['Expediente'] = $row['Expediente'];
                    $datos[$contador]['Descripcion'] = $row['Descripcion'];
                    $datos[$contador]['Emplazamiento'] = $row['Emplazamiento'];
                    $datos[$contador]['Numero'] = $row['Numero'];
                    $datos[$contador]['Estado'] = $row['Estado'];
                    $datos[$contador]['FechaPeticion'] = $row['FechaPeticion'];
                    $datos[$contador]['FechaNotificacion'] = $row['FechaNotificacion'];
                    $datos[$contador]['LongitudZanja'] = $row['LongitudZanja'];
                    $datos[$contador]['Presupuesto'] = $row['Presupuesto'];
                    $datos[$contador]['Tecnico'] = $row['Tecnico'];
                    $datos[$contador]['ID'] = $row['ID'];

                    $contador++;
                }
                $_SESSION['counter'] = $contador;
                return $datos;
            }
            sqlsrv_close($conn);
        } else {
            echo "<script text='javascript' charset='utf-8'> alert('No se pudo establecer la conexión con el servidor, por favor, inténtelo de nuevo más tarde');
			window.location.replace('?r=index/indexadmin'); </script>";
            die;
        }
    }

    public static function findestado() {

        $serverName = "88.12.40.67\MSSQL11.MSSQLSERVER, 1433";
        $connectionInfo = array("Database" => "ProinmeCoordinacionObras", "UID" => "tessq", "PWD" => "Abc01cba", "CharacterSet" => "UTF-8");
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        if ($conn) {

            $query = "select Descripcion from Estados where Apartado='Zanjas' order by descripcion ";

            $result = sqlsrv_query($conn, $query);
            if ($result === false) {
                return false;
            } else {
                $contador = 0;
                while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {

                    $datos[$contador]['estado'] = $row['Descripcion'];

                    $contador++;
                }
                return $datos;
            }
            sqlsrv_close($conn);
        } else {
            echo "<script text='javascript' charset='utf-8'> alert('No se pudo establecer la conexión con el servidor, por favor, inténtelo de nuevo más tarde');
			window.location.replace('?r=index/indexadmin'); </script>";
            die;
        }
    }

    public static function findclase() {

        $serverName = "88.12.40.67\MSSQL11.MSSQLSERVER, 1433";
        $connectionInfo = array("Database" => "ProinmeCoordinacionObras", "UID" => "tessq", "PWD" => "Abc01cba", "CharacterSet" => "UTF-8");
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        if ($conn) {

            $query = "select Descripcion from Expedientestipos order by descripcion";

            $result = sqlsrv_query($conn, $query);
            if ($result === false) {
                return false;
            } else {
                $contador = 0;
                while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {

                    $datos[$contador]['clase'] = $row['Descripcion'];

                    $contador++;
                }
                return $datos;
            }
            sqlsrv_close($conn);
        } else {
            echo "<script text='javascript' charset='utf-8'> alert('No se pudo establecer la conexión con el servidor, por favor, inténtelo de nuevo más tarde');
			window.location.replace('?r=index/indexadmin'); </script>";
            die;
        }
    }

    public static function findtipored() {

        $serverName = "88.12.40.67\MSSQL11.MSSQLSERVER, 1433";
        $connectionInfo = array("Database" => "ProinmeCoordinacionObras", "UID" => "tessq", "PWD" => "Abc01cba", "CharacterSet" => "UTF-8");
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        if ($conn) {

            $query = "select Descripcion from TiposObras order by Descripcion";

            $result = sqlsrv_query($conn, $query);
            if ($result === false) {
                return false;
            } else {
                $contador = 0;
                while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {

                    $datos[$contador]['tipored'] = $row['Descripcion'];

                    $contador++;
                }
                return $datos;
            }
            sqlsrv_close($conn);
        } else {
            echo "<script text='javascript' charset='utf-8'> alert('No se pudo establecer la conexión con el servidor, por favor, inténtelo de nuevo más tarde');
            window.location.replace('?r=index/indexadmin'); </script>";
            die;
        }
    }

    public static function findregistrosexpediente($expediente) {

        $serverName = "88.12.40.67\MSSQL11.MSSQLSERVER, 1433";
        $connectionInfo = array("Database" => "ProinmeCoordinacionObras", "UID" => "tessq", "PWD" => "Abc01cba", "CharacterSet" => "UTF-8");
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        if ($conn) {

            $query = "SELECT     IDExpediente, Fecha, Descripcion, CometarioOficio
                      FROM         ExpedientesEstudiosTecnicos
                      where IdExpediente='" . $expediente . "' ORDER BY Fecha DESC";

            $result = sqlsrv_query($conn, $query);
            if ($result === false) {
                return false;
            } else {
                $contador = 0;
                while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {

                    $datos[$contador]['Fecha'] = $row['Fecha'];
                    $datos[$contador]['Descripcion'] = $row['Descripcion'];
                    $datos[$contador]['ComentarioOficio'] = $row['CometarioOficio'];

                    $contador++;
                }
                return $datos;
            }
            sqlsrv_close($conn);
        } else {
            echo "<script text='javascript' charset='utf-8'> alert('No se pudo establecer la conexión con el servidor, por favor, inténtelo de nuevo más tarde');
            window.location.replace('?r=index/indexadmin'); </script>";
            die;
        }
    }

}

?>
