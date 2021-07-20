     
<?php

class loginController{


	public function actionLoger(){

        require ("includes/vistas.php");
        
        vistaSimple("layout_login");           

    }


	
	public function actionIdentificarse(){
		
	    $error='';
	    
	    if(isset($_POST['usuario'])) {
	    	
		    $usuario = $_POST['usuario'];
		    $password = $_POST['password'];	
		   
		    require "models/users.php";
		    require "includes/head.php";

		    $user=users::findUser($usuario);

		    
		  	if(!$user) die ("
		  		<div class='header2' style='width:100%;height:140px;margin-bottom:50px;margin-top:50px;'>
					<img src='../assets/img/logo/ocoval-obras.jpg' style='margin-top:20px;margin-left:37%;width:26%;'>
				</div>	
				<div class='login-copytext' style='text-align:center;'>
					<h2>OOOOOOOOOOPS!!!</h2>
					<h2><i class='fa fa-thumbs-down' style='font-size:400%;'></i><h2>No existe el usuario</h2><h2> <a href='?r=login/loger' style='text-decoration:none;color:#098d19;'>Vuelve a intentarlo</a></h2>
				</div>");

	 
		  	if($user['contrasenya']==$password){

		  		$_SESSION['usuario'] = $user['usuario'];
				header('Location:?r=index/indexadmin');
	              
			}else{

				echo "<div class='header2' style='width:100%;background-color:#545454;height:140px;margin-bottom:50px;margin-top:50px;'>
						<img src='../assets/img/logo/ocoval-obras.jpg' style='margin-top:20px;margin-left:37%;width:26%;'>
					</div>	
					<div class='login-copytext' style='text-align:center;'>
						<h2>OOOOOOOOOOPS!!!</h2>
						<h2><i class='fa fa-thumbs-down' style='font-size:400%;'></i><h2>La contraseña no es correcta</h2><h2> <a href='?r=login/loger' style='text-decoration:none;color:#098d19;'>Vuelve a intentarlo</a></h2>
					</div>";
			      
			}    
		 
		} 

    }
    
    public function actioncerrarSesion(){

       unset($_SESSION['usuario']);
       header("Location:?r=login/loger");
      
    }

}

?>