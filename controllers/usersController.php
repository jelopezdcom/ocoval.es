

<?php

class usersController{
    
    /**
    * Hace un listado completo
    * de todos los usuarios
    */
	
	public function actionList(){
		require "models/users.php";

		$users=users::findAll();           

	}

	
	/**
	 * Muestra el detalle de un usuario
	 * Parámetros de URL:  id
	 */
	public function actionView(){
		$id=$_GET['id'];
		require "models/users.php";
		$usuario = users::find($id);
		if(!$usuario) die("No existe este usuario");

	}

    /**
    * Elimina un usuario de la base de datos
    **/

    public function actionBorrarUsuario(){

        require "models/users.php";

        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $users= users::deleteUser($id);
        }
        
    }


    /**
    * Actualiza los datos de un usuario de la base de datos
    **/

    public function actionActualizarUsuario(){

        $id_usuario=$_POST['id_empresa'];

        require "models/users.php";
        require "models/encrypter.php";

        $user=users::find($id_usuario);
        if(!$user) die("No existe este usuario");

        if (isset($_POST['usuario'])){
     
            $usuario = encrypter::encrypt($_POST['usuario']);
            $contrasenya = encrypter::encrypt($_POST['contrasenya']);

            $modificausuario=users::updateUser($id_usuario,$usuario,$contrasenya);

        }

    }

    /**
    *Crea un nuevo usuario
    **/

    public function actionNuevoUsuario(){

        if (isset($_POST['usuario'])){
            require 'models/users.php';
            //require "models/encrypter.php";
            $users=users::findAll();
           // $usuarionuevo = encrypter::encrypt($_POST['usuario']);

            foreach($users as $user) {
           
                if($usuarionuevo == $user['usuario']) die ("<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                <link href='css/theme.css' rel='stylesheet' type='text/css' title='estilo' />
                <div class='mensajeadmin'>El nombre de usuario ya está siendo utilizado por otra persona.... 
                <a href=''> Reintentar</a></div>");
               
                
            }
     
            //$usuario = encrypter::encrypt($_POST['usuario']);
            //$contrasenya = encrypter::encrypt($_POST['contrasenya']);

            $nuevoUsuario=users::newUser($usuario,$contrasenya);

        }
          
    }

}

?>