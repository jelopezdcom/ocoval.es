     
<?php

class loginController{


	public function actionLoger(){

        require "config.php";
        
        vistaSimple("layout_login");           

    }


	
	public function actionIdentificarse(){
		require "models/encrypter.php";
	    
	    if(isset($_POST['usuario'])) {
	    	
		    $usuario = encrypter::encrypt($_POST['usuario']);
		    $password = encrypter::encrypt($_POST['password']);	

		    /* Recuperar password */ 
		    error_log("LOG OCOVAL");
		    error_log(encrypter::decrypt("5snF57Jwsfroy68gRUJHh0OjAWsE8FU1b/dUNdzE+HE="));
		    error_log(encrypter::decrypt("5snF57Jwsfroy68gRUJHh0OjAWsE8FU1b/dUNdzE+HE="));
		    error_log(encrypter::decrypt("UiOyC+JqBOFjwW2JSyrlI29+Yj4VAsRS9Ut8vsr/bPY="));
		    error_log(encrypter::decrypt("UiOyC+JqBOFjwW2JSyrlI29+Yj4VAsRS9Ut8vsr/bPY="));
		    error_log(encrypter::decrypt("Y2GnHep6Sj8mUgATdCVUU/jZRB7w8F9cY4SvBjWypqg="));
		    error_log(encrypter::decrypt("x6xVSrXfmsxs/V1+4QWBsceioVPagtD/kubuNOHcrlE="));
		    error_log(encrypter::decrypt("krG4yaZWKVDytdIGS8GmR4n3y0FDXZ5v0UUuZhKl4K8="));
		    error_log(encrypter::decrypt("krG4yaZWKVDytdIGS8GmR4n3y0FDXZ5v0UUuZhKl4K8="));
			/* Recuperar password */ 

		    require "models/users.php";

		    $user=users::findUser($usuario);

		    require('includes/head.php');
		  	if(!$user) die ("
		  		<div class='header2' style='width:100%;background-color:#545454;height:140px;margin-bottom:100px;'>
					<img src='assets/img/logo/ocoval-obras.jpg' style='margin-top:20px;margin-left:35%;width:30%;'>
				</div>	
				<div class='login-copytext' style='text-align:center;'>
					<h2>OOOOOOOOOOPS!!!</h2>
					<h2><i class='fa fa-thumbs-down' style='font-size:400%;'></i><h2>No existe el usuario</h2><h2> <a href='?r=login/loger'>Vuelve a intentarlo</a></h2>
				</div>");
	 
		  	if($user['contrasenya']==$password){

				header('Location:?r=index/indexadmin');
	              
		        $_SESSION['usuario'] = encrypter::decrypt($user['usuario']);
		      
		  	}
		  	else{
				echo "<div class='header2' style='width:100%;background-color:#545454;height:140px;margin-bottom:100px;'>
						<img src='assets/img/logo/ocoval-obras.jpg' style='margin-top:20px;margin-left:35%;width:30%;'>
					</div>	
					<div class='login-copytext' style='text-align:center;'>
						<h2>OOOOOOOOOOPS!!!</h2>
						<h2><i class='fa fa-thumbs-down' style='font-size:400%;'></i><h2>La contraseña no es correcta</h2><h2> <a href='?r=login/loger'>Vuelve a intentarlo</a></h2>
					</div>";
			      
		  	}    
		 
		} 

    }
    
    public function actioncerrarSesion(){

       unset($_SESSION['usuario']);
       header("Location:?r=login/loger");
      
    }

    public function actionContactForm(){

        $para = 'ocoval@ocoval.es';
		$titulo = "Consulta usuario web";
		$nombre = $_POST['name'];
		$correo = $_POST['email'];
		$asunto = $_POST['subject'];
		$texto = $_POST['message'];

		$mensaje = "Nombre: ".$nombre."\n Correo electrónico: ".$correo."\n Asunto: ".$asunto."\n Mensaje: ".$texto;

		$mensaje = wordwrap($mensaje, 70, "\r\n");

		$mail = mail($para, "Formulario desde Web Ocoval", $mensaje);

				if($mail){
					echo "<script text='javascript'> alert('El formulario se envió correctamente');
					window.location.replace('?r=contacto/contacto'); </script>";
					die; 
				}
				else{ 
					echo "<script text='javascript'> alert('El formulario no se pudo enviar correctamente, por favor, inténtelo de nuevo más tarde');
					window.location.replace('?r=contacto/contacto'); </script>";
					die;
				}          

	}
    
}

?>