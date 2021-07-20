<?php

class users{

	public static function findUser($usuario){
		$query=db::singleton()->query('select * from usuarios where usuario="'.$usuario.'"');
		if($query) 
			return $query->fetch();
		else
			return false;
		
	}


	public static function findId($usuario){
		$query=db::singleton()->query('select * from usuarios where usuario="'.$usuario.'"');
		if($query) 
			return $query->fetch();
		else
			return false;
		
	}


	public static function findAll(){
		return db::singleton()->query('select * from usuarios order by id_usuario')->fetchAll();
		
	}
	
	public static function find($id){
		$query=db::singleton()->query('select * from usuarios where id_usuario='.$id);
		if($query) 
			return $query->fetch();
		else
			return false;
		
	}
	

    public static function newUser($usuario,$contrasenya){

        $sql="insert into usuarios (usuario,contrasenya)
		values (:user,:contra)";
        $query=db::singleton()->prepare($sql);
        
        if(!$query) {
		var_dump( db::singleton()->errorInfo ());
		die;
	}
        
	$datos=array(':user'=>$usuario,':contra'=>$contrasenya);
        
        if(!$query->execute($datos)){
			var_dump( $query->errorInfo ());
			die;
		} else {
			echo "<script text='javascript'> alert('El usuario se creó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }

    public static function deleteUser($id){
        $sql="delete from usuarios where id_usuario=:id";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':id'=> $id);
        if(!$x=$query->execute($datos)){
            echo $x."ss";
			var_dump( $query->errorInfo ());
			die;
		} else {
			echo "<script text='javascript'> alert('El usuario se eliminó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }

    public static function updateUser($id_usuario,$usuario,$contrasenya){
        $sql="update usuarios set usuario=:usuarionuevo,contrasenya=:contrasenyanueva where id_usuario=:id";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':id'=> $id_usuario,':usuarionuevo'=> $usuario,':contrasenyanueva'=> $contrasenya);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {
			echo "<script text='javascript'> alert('El usuario se actualizó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }    
	
	
	
}

?>