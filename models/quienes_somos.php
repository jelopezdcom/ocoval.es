<?php

class quienes_somos{

	public static function findHistoria(){

		$query = db::singleton()->query("select * from quienes_somos where titulo_hc='historia'");
		if($query) 
			return $query->fetch();
		else
			return false;
		
	}

	public static function findCompromiso(){

		$query = db::singleton()->query("select * from quienes_somos where titulo_hc='compromiso'");
		if($query) 
			return $query->fetch();
		else
			return false;
			
	}


	public static function findSocios(){

		$query = db::singleton()->query("select * from quienes_somos where titulo_hc='socios'");
		if($query) 
			return $query->fetch();
		else
			return false;
			
	}


	public static function findAyuntamiento(){

		$query = db::singleton()->query("select * from quienes_somos where titulo_hc='ayuntamiento'");
		if($query) 
			return $query->fetch();
		else
			return false;
			
	}


	public static function updateHistoria($contenido_cas,$contenido_val){
        $sql="update quienes_somos set contenido_hc_cas=:con_cas,contenido_hc_val=:con_val where titulo_hc='historia'";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':con_cas'=> $contenido_cas,':con_val'=> $contenido_val);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {	
			echo "<script text='javascript'> alert('El contenido de historia se actualizó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }


    public static function updateCompromiso($contenido_cas,$contenido_val){
        $sql="update quienes_somos set contenido_hc_cas=:con_cas,contenido_hc_val=:con_val where titulo_hc='compromiso'";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':con_cas'=> $contenido_cas,':con_val'=> $contenido_val);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {	
			echo "<script text='javascript'> alert('El contenido de compromiso se actualizó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }


    public static function updateSocios($contenido_cas,$contenido_val){
        $sql="update quienes_somos set contenido_hc_cas=:con_cas,contenido_hc_val=:con_val where titulo_hc='socios'";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':con_cas'=> $contenido_cas,':con_val'=> $contenido_val);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {	
			echo "<script text='javascript'> alert('El contenido de socios se actualizó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }


    public static function updateAyuntamiento($contenido_cas,$contenido_val){
        $sql="update quienes_somos set contenido_hc_cas=:con_cas,contenido_hc_val=:con_val where titulo_hc='ayuntamiento'";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':con_cas'=> $contenido_cas,':con_val'=> $contenido_val);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {	
			echo "<script text='javascript'> alert('El contenido de ayuntamiento se actualizó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }
	
    
}

?>