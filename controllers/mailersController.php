<?php

class mailersController{


    public function actionContactForm(){

    	// Desactivar toda notificación de error
		error_reporting(0);

    	$nombre = $_POST['name'];
		$email = $_POST['email'];
		$asunto = $_POST['subject'];
		$texto = $_POST['message'];
		
		/*CAPTCHA*/
		$response = $_POST["g-recaptcha-response"];
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array(
		'secret' => '6LfefCYUAAAAAP0svrRD8zFwBZ_l7W7Fa_PQzUeK',
		'response' => $_POST["g-recaptcha-response"]
		);
		$options = array(
			'http' => array (
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);
		$context  = stream_context_create($options);
		$verify = file_get_contents($url, false, $context);
		$captcha_success=json_decode($verify);
		/*CAPTCHA*/
		
		if ($captcha_success->success==false) {
			echo "<script text='javascript'> alert('Debe verificar que usted no es un robot.');
				  window.location.replace('http://ocoval.es/?r=contacto/contacto'); </script>";
				  die; 
		} 
		else if ($captcha_success->success==true) {

			ini_set(SMTP, "192.168.110.112");
			ini_set(smtp_port, "587");
			ini_set(sendmail_from, "formularios@envio.tessq.com");	

			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/plain; charset=UTF-8 ' . "\r\n";
			$cabeceras .= 'From: formularios@envio.tessq.com' . "\r\n";


			$para = 'ocoval@ocoval.es';

			$mensaje = "Nombre: ".$nombre."\r\nEmail: ".$email."\r\nAsunto: ".$asunto."\r\nMensaje: ".$texto;

			$mensaje = wordwrap($mensaje, 70, "\r\n");

			$mail = mail($para, "Consulta de usuario web", $mensaje, $cabeceras);

				if($mail){
				  echo "<script text='javascript'> alert('El mensaje se envió correctamente');
				  window.location.replace('http://ocoval.es/?r=contacto/contacto'); </script>";
				  die; 
				}
				else{ 
				  echo "<script text='javascript'> alert('El mensaje no se pudo enviar correctamente, por favor, inténtelo de nuevo más tarde');
				  window.location.replace('http://ocoval.es'); </script>";
				  die;
				}  		
		}


	}

	
	public function actionIncidenciaForm(){

        $para = 'deficiencia@ocoval.es';
		$titulo = "Deficiencia enviada desde la página web";
		$nombre = $_POST['name'];
		$telefonomovil = $_POST['telmovil'];
		$correo = $_POST['email'];
		$telefonofijo = $_POST['telfijo'];
		$direccionincidencia = $_POST['direccion'];
		$situacionincidencia = $_POST['situacion'];
		$descripcionincidencia = $_POST['descripcion'];
		$latitud = $_POST['latitud'];
		$longitud = $_POST['longitud'];


		$nombre_archivo = $_FILES['archivo']['name'];
		$tipo_archivo = $_FILES['archivo']['type'];
		$tamano_archivo = $_FILES['archivo']['size'];

		$mensaje = $titulo."\n Nombre: ".$nombre."\n Correo electrónico: ".$correo."\n Dirección de la incidencia: ".$direccionincidencia."\n Situación de la incidencia: ".$situacionincidencia."\n Descripción de la incidencia: ".$descripcionincidencia."\n Latitud: ".$latitud."\n Longitud: ".$longitud;

		$mensaje = wordwrap($mensaje, 70, "\r\n");

		$cabeceras  = "From: ".$_POST["mail"]."\n";
		$cabeceras .= "Reply-To: ".$_POST["mail"]."\n";
		$cabeceras .= "MIME-version: 1.0n";
		$cabeceras .= "Content-type: multipart/mixed; ";
		$cabeceras .= "boundary=Message-Boundary"."\n";
		$cabeceras .= "Content-transfer-encoding: 7BIT"."\n";
		$cabeceras .= "X-attachments: ".$nombref;

		$body_top  = "--Message-Boundary"."\n";
		$body_top .= "Content-type: text/html; charset=US-ASCII"."\n";
		$body_top .= "Content-transfer-encoding: 7BIT"."\n";
		$body_top .= "Content-description: Mail message body"."\n";

		$cuerpo = $body_top.$mensaje;

		if($tamano_archivo>0)
		{
		//Leo el fichero
			$oFichero = fopen($_FILES["archivo"]["tmp_name"], 'r'); 
			$sContenido = fread($oFichero, filesize($_FILES["archivo"]["tmp_name"]));
			$sAdjuntos .= chunk_split(base64_encode($sContenido));
			fclose($oFichero);
			//Adjunto el fichero
			$cuerpo .= "\n\n"."--Message-Boundary"."\n";
			$cuerpo .= "Content-type: Binary; name=".$nombref."\n";
			$cuerpo .= "Content-Transfer-Encoding: BASE64"."\n";
			$cuerpo .= "Content-disposition: attachment; filename=".$nombref."\n";
			$cuerpo .= $sAdjuntos."\n";
			$cuerpo .= "--Message-Boundary--";
		}
		//Envío el correo
		$mail = mail($email, "Formulario de incidencia desde Web Ocoval", $cuerpo, $cabeceras);	

		//$mail = mail($para, "Formulario de incidencia desde Web Ocoval", $mensaje);

				if($mail){
					echo "<script text='javascript'> alert('El formulario se envió correctamente');
					window.location.replace('?r=servicios/comunica_deficiencia'); </script>";
					die; 
				}
				else{ 
					echo "<script text='javascript'> alert('El formulario no se pudo enviar correctamente, por favor, inténtelo de nuevo más tarde');
					window.location.replace('?r=servicios/comunica_deficiencia'); </script>";
					die;
				}   

				       

	}
    
}