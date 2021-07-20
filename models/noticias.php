<?php

class noticias{

	/* Devuelve todas las noticias de la tabla noticias */
	public static function findAll(){

		return db::singleton()->query('select * from noticias order by fecha desc')->fetchAll();
		
	}


	/* Devuelve sólo las noticias marcadas como destacadas */
	public static function findDestacadas(){

		return db::singleton()->query('select * from noticias where destacada="si" order by fecha desc')->fetchAll();
		
	}

	public static function findId($id){

		return db::singleton()->query('select * from noticias where id_noticia='.$id)->fetch();
		
	}


	public static function filtroNoticiasCas($palabra){

		return db::singleton()->query('select * from noticias where contenido_noticia_cas LIKE "%'.$palabra.'%"')->fetchAll();
	}

	public static function filtroNoticiasVal($palabra){

		return db::singleton()->query('select * from noticias where contenido_noticia_val LIKE "%'.$palabra.'%"')->fetchAll();
	}



	public static function deleteNoticia($id){

		$imagen = db::singleton()->query('select * from noticias where id_noticia='.$id)->fetch();
		$imagen_noticia = $imagen['ruta_imagen_noticia'];
		$imagen_noticia_min = $imagen['ruta_imagen_noticia_min'];
		unlink($imagen_noticia);
		unlink($imagen_noticia_min);

		$sql="delete from noticias where id_noticia=:id";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}

        $datos=array(':id'=> $id);
        if(!$x=$query->execute($datos)){
			var_dump( $query->errorInfo ());
			die;
		} else {
			echo "<script text='javascript'> alert('La noticia se eliminó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
		
	}


	public static function deleteImagenNoticia($id){

		$imagen = db::singleton()->query('select * from noticias where id_noticia='.$id)->fetch();
		$imagen_noticia = $imagen['ruta_imagen_noticia'];
		$imagen_noticia_min = $imagen['ruta_imagen_noticia_min'];
		unlink($imagen_noticia);
		unlink($imagen_noticia_min);

		$sql="update noticias set ruta_imagen_noticia='',ruta_imagen_noticia_min='' where id_noticia=".$id;

        $query=db::singleton()->prepare($sql);
         
         if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':imagen'=> $imagen,':id'=> $id);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {
			echo "<script text='javascript'> alert('La imagen de la noticia se eliminó correctamente');
			window.location.replace('?r=noticias/ModificarNoticia&id=".$id."'); </script>";
			die;
		}
		
	}

	public static function newNoticia($titulo_cas,$titulo_val,$contenido_cas,$canotenido_val,$ruta,$ruta_min,$fecha_noticia,$destacada){
        $sql="insert into noticias (titulo_noticia_cas,titulo_noticia_val,contenido_noticia_cas,contenido_noticia_val,ruta_imagen_noticia,ruta_imagen_noticia_min,fecha,destacada)
		values (:til_cas,:til_val,:con_cas,:con_val,:ruta_img,:ruta_img_min,:fecha_not,:destaca)";
        $query=db::singleton()->prepare($sql);
        
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        
		$datos=array(':til_cas'=>$titulo_cas,':til_val'=>$titulo_val,':con_cas'=>$contenido_cas,':con_val'=>$canotenido_val,':ruta_img'=>$ruta,'ruta_img_min'=>$ruta_min,':fecha_not'=>$fecha_noticia,':destaca'=>$destacada);
        
        if(!$query->execute($datos)){
			var_dump( $query->errorInfo ());
			die;
		} else {

			echo "<script text='javascript'> alert('La noticia se creó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
    }

    /* ACTUALIZACIÓN DE UNA NOTICIA */
    public static function updateNoticia($titulo_cas,$titulo_val,$fecha,$contenido_noticia_cas,$contenido_noticia_val,$fichero_subido,$fichero_subido_min,$id_noticia,$destacada){

    	$sql="update noticias set titulo_noticia_cas=:titol_cas,titulo_noticia_val=:titol_val,contenido_noticia_cas=:cos_cas,contenido_noticia_val=:cos_val,ruta_imagen_noticia=:ruta_image,ruta_imagen_noticia_min=:ruta_image_min,fecha=:data,destacada=:destacat where id_noticia=:id_not";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':titol_cas'=> $titulo_cas,':titol_val'=> $titulo_val,':cos_cas'=> $contenido_noticia_cas,':cos_val'=> $contenido_noticia_val,':ruta_image'=> $fichero_subido,':ruta_image_min'=> $fichero_subido_min,':data'=> $fecha,':destacat'=> $destacada,':id_not'=>$id_noticia);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {
			echo "<script text='javascript'> alert('La noticia se actualizo correctamente');
			window.location.replace('?r=index/indexadmin#noticias'); </script>";
			die;
		}
    }

	
    
}

?>