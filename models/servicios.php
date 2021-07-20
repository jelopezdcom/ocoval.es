<?php

class servicios{

	public static function findContenido($tipo_contenido){

		$query = db::singleton()->query("select * from servicios where titulo_servicio='".$tipo_contenido."'");
		if($query) 
			return $query->fetch();
		else
			return false;
		
	}

	public static function updateServicio($contenido_cas,$contenido_val,$titulo){
        $sql="update servicios set contenido_servicio_cas=:con_cas,contenido_servicio_val=:con_val where titulo_servicio='".$titulo."'";
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
			echo "<script text='javascript'> alert('El contenido se actualizó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }



    public static function updateServicioPestanya($titulo_pestanya_cas,$titulo_pestanya_val,$contenido_cas,$contenido_val,$titulo){
        $sql="update servicios set titulo_pestanya_cas=:titu_cas,titulo_pestanya_val=:titu_val,contenido_servicio_cas=:con_cas,contenido_servicio_val=:con_val where titulo_servicio='".$titulo."'";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':titu_cas'=> $titulo_pestanya_cas,':titu_val'=> $titulo_pestanya_val,':con_cas'=> $contenido_cas,':con_val'=> $contenido_val);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {	
			echo "<script text='javascript'> alert('El contenido se actualizó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }
	
    
}
?>