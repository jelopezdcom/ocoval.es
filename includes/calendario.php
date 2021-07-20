<?php
function calcula_numero_dia_semana($dia,$mes,$ano){
	$numerodiasemana = date('w', mktime(0,0,0,$mes,$dia,$ano));
	if ($numerodiasemana == 0) 
		$numerodiasemana = 6;
	else
		$numerodiasemana--;
	return $numerodiasemana;
}

//funcion que devuelve el último día de un mes y año dados
function ultimoDia($mes,$ano){ 
    $ultimo_dia=28; 
    while (checkdate($mes,$ultimo_dia + 1,$ano)){ 
       $ultimo_dia++; 
    } 
    return $ultimo_dia; 
} 

function dame_nombre_mes($mes){
	 switch ($mes){
	 	case 1:
	 		if($_SESSION['idioma'] == "cas")
				$nombre_mes="ENERO";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="GENER";
			break;
	 	case 2:
	 		if($_SESSION['idioma'] == "cas")
				$nombre_mes="FEBRERO";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="FEBRER";
			break;
	 	case 3:
	 		if($_SESSION['idioma'] == "cas")
				$nombre_mes="MARZO";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="MAR&#199;";
			break;
	 	case 4:
			$nombre_mes="ABRIL";
			break;
	 	case 5:
	 		if($_SESSION['idioma'] == "cas")
				$nombre_mes="MAYO";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="MAIG";
			break;
	 	case 6:
	 		if($_SESSION['idioma'] == "cas")
				$nombre_mes="JUNIO";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="JUNY";
			break;
	 	case 7:
			$nombre_mes="JULIO";
			break;
	 	case 8:
	 		if($_SESSION['idioma'] == "cas")
				$nombre_mes="AGOSTO";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="AGOST";
			break;
	 	case 9:
	 		if($_SESSION['idioma'] == "cas")
				$nombre_mes="SEPTIEMBRE";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="SETEMBRE";
			break;
	 	case 10:
			$nombre_mes="OCTUBRE";
			break;
	 	case 11:
			if($_SESSION['idioma'] == "cas")
				$nombre_mes="NOVIEMBRE";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="NOVEMBRE";
			break;
	 	case 12:
	 		if($_SESSION['idioma'] == "cas")
				$nombre_mes="DICIEMBRE";
			if($_SESSION['idioma'] == "val")
				$nombre_mes="DESEMBRE";
			break;
	}
	return $nombre_mes;
}

function dame_estilo($dia_imprimir){
	global $mes,$ano,$dia_solo_hoy,$tiempo_actual;
	//dependiendo si el día es Hoy, Domigo o Cualquier otro, devuelvo un estilo
	if ($dia_solo_hoy == $dia_imprimir && $mes==date("n", $tiempo_actual) && $ano==date("Y", $tiempo_actual)){
		//si es hoy
		$estilo = " class='hoy'";
	}else{
		$fecha=mktime(12,0,0,$mes,$dia_imprimir,$ano);
		if (date("w",$fecha)==0){
			//si es domingo 
			$estilo = " class='domingo'";
		}else{
			//si es cualquier dia
			$estilo = " class='diario'";
		}
	}
	return $estilo;
}

function mostrar_calendario($mes,$ano,$dia){
	global $parametros_formulario;
	//tomo el nombre del mes que hay que imprimir
	$nombre_mes = dame_nombre_mes($mes);
	
	//construyo la tabla general
	echo '<table class="tablacalendario table table-hover">';
	echo '<tr style="background-color:#fcf8e3;"><td colspan="7" class="tit">';
	//tabla para mostrar el mes el año y los controles para pasar al mes anterior y siguiente
	echo '<table width="100%" cellspacing="2" cellpadding="2" border="0"><tr><td class="messiguiente">';
	//calculo el mes y ano del mes anterior
	$mes_anterior = $mes - 1;
	$ano_anterior = $ano;
	if ($mes_anterior==0){
		$ano_anterior--;
		$mes_anterior=12;
	}
	//echo "</td>";
	echo '<a href="?r=servicios/mapa&nuevo_mes=' . $mes_anterior . '&nuevo_ano=' . $ano_anterior .'"><i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i></a></td>';
	echo "<td class='titmesano'><p style='float:left;margin-left:10px;font-size:15pt;margin-top:10px;'>$nombre_mes</p> <p style='float:right;margin-right:10px;font-size:14pt;margin-top:10px;'>$ano</p></td>";
	echo "<td class='mesanterior'>";
	//calculo el mes y ano del mes siguiente
	$mes_siguiente = $mes + 1;
	$ano_siguiente = $ano;
	if ($mes_siguiente==13){
		$ano_siguiente++;
		$mes_siguiente=1;
	}

	echo '<a href="?r=servicios/mapa&nuevo_mes=' . $mes_siguiente . '&nuevo_ano=' . $ano_siguiente . '"><i class="fa fa-chevron-right" aria-hidden="true" style="float:right;"></i><i class="fa fa-chevron-right" aria-hidden="true" style="float:right;"></i></a></td>';

	echo "</td></tr></table></td></tr>";
	echo '<tr style="background-color:#d9edf7;text-align:center;color:#406da4;">
		    <td width=14% class="diasemana"><b>L</b></td>
		    <td width=14% class="diasemana"><b>M</b></td>
		    <td width=14% class="diasemana"><b>X</b></td>
		    <td width=14% class="diasemana"><b>J</b></td>
		    <td width=14% class="diasemana"><b>V</b></td>
		    <td width=14% class="diasemana"><b>S</b></td>
		    <td width=14% class="diasemana"><b>D</b></td>
		</tr>';
	
	//Variable para llevar la cuenta del dia actual
	$dia_actual = 1;
	
	//calculo el numero del dia de la semana del primer dia
	$numero_dia = calcula_numero_dia_semana(1,$mes,$ano);
	
	//calculo el último dia del mes
	$ultimo_dia = ultimoDia($mes,$ano);

	//Utilizo el objeto time para el color de fondo de el día hoy
	$fecha_hoy = time();
	$mes_hoy = date("m", $fecha_hoy);
	$ano_hoy = date("Y", $fecha_hoy);
	$dia_hoy = date("d", $fecha_hoy);

	//Capturo la fecha de hoy y la del calendario para gestionar los enlaces
	$hoy = date('Y-m-d');

	if(strlen($mes)==1)
		$mes = "0".$mes;
	if(strlen($dia_actual)==1)
		$dia_actual = "0".$dia_actual;

	$fecha_calendar = date($ano.'-'.$mes.'-'.$dia_actual);


	//escribo la primera fila de la semana
	echo "<tr style='text-align:center;'>";
	for ($i=0;$i<7;$i++){
		if ($i < $numero_dia){
			//si el dia de la semana i es menor que el numero del primer dia de la semana no pongo nada en la celda
			echo '<td class="diainvalido"><span></span></td>';
		} else {
			echo "<td class='diavalido'"; if($dia_actual==$dia && $mes_hoy==$mes && $ano_hoy==$ano){ echo"style='background-color:#dff0d8;'"; } echo"><span>";if($fecha_calendar>=$hoy){ echo"<a href='?r=servicios/mapa&fecha=$ano-$mes-$dia_actual'>";} if(strlen($dia_actual)==2){ $dia_actual= substr($dia_actual, 1); } echo $dia_actual;if($fecha_calendar>=$hoy){ echo"</a>";} echo"<span></td>";
			$dia_actual++;
			$fecha_calendar = date($ano.'-'.$mes.'-'.$dia_actual);
		}
	}
	echo "</tr>";
	
	//recorro todos los demás días hasta el final del mes
	$numero_dia = 0;
	while ($dia_actual <= $ultimo_dia){
		//si estamos a principio de la semana escribo el <TR>
		if ($numero_dia == 0)
			echo "<tr style='text-align:center;'>";

		echo "<td class='diavalido'"; if($dia_actual==$dia && $mes_hoy==$mes && $ano_hoy==$ano){ echo"style='background-color:#dff0d8;'"; } echo"><span>";if($fecha_calendar>=$hoy){ echo"<a href='?r=servicios/mapa&fecha=$ano-$mes-$dia_actual'>";} echo $dia_actual;if($fecha_calendar>=$hoy){ echo"</a>";} echo"<span></td>";
		$dia_actual++;
		$fecha_calendar = date($ano.'-'.$mes.'-'.$dia_actual);
		$numero_dia++;
		//si es el ultimo de la semana, me pongo al principio de la semana y escribo el </tr>
		if ($numero_dia == 7){
			$numero_dia = 0;
			echo "</tr>";
		}
	}
	
	//compruebo que celdas me faltan por escribir vacias de la última semana del mes
	for ($i=$numero_dia;$i<7;$i++){
		echo '<td class="diainvalido"><span></span></td>';
	}
	
	echo "</tr>";
	echo "</table>";
}	


?>