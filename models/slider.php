<?php

class slider{

	/* Devuelve todas las imágenes de la tabla slider_principal */
	public static function findAll(){

		return db::singleton()->query('select * from slider_principal')->fetchAll();
		
	}



	/* Borra una imagen del slider principal */
	public static function deleteImagenSlider($id){

		$imagen = db::singleton()->query('select * from slider_principal where id_imagen_slider='.$id)->fetch();
		$imagen_slider = $imagen['ruta_imagen_slider'];
		$imagen_slider_min = $imagen['ruta_imagen_miniatura_slider'];

		$sql="delete from slider_principal where id_imagen_slider=:id";
        $query=db::singleton()->prepare($sql);
         
         if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}

        $datos=array(':id'=> $id);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {
			unlink($imagen_slider);
			unlink($imagen_slider_min);
			echo "<script text='javascript'> alert('La imagen del slider se eliminó correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}
		
	}


	/* Devuelve la imagen seleccionada a través de su id */
	public static function findId($id){

		return db::singleton()->query('select * from noticias where id_noticia='.$id)->fetch();
		
	}

	/* Función para la subida de imágenes al slider principal */
	public static function newImageSlider($url,$fichero_subido,$fichero_subido_min){ 

        $sql="insert into slider_principal (url_imagen_slider,ruta_imagen_slider,ruta_imagen_miniatura_slider)
		values (:url,:fichero_subido,:fichero_subido_min)";
        $query=db::singleton()->prepare($sql);
        
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        
		$datos=array(':url'=>$url,':fichero_subido'=>$fichero_subido,':fichero_subido_min'=>$fichero_subido_min);
        
        if(!$query->execute($datos)){
			var_dump( $query->errorInfo ());
			die;
		} else {

			echo "<script text='javascript'> alert('La imagen del slider principal se añadió correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}

    }


    /* Función para la modificación del enlace de una imagen del slider */
    public static function modificaUrl($id,$url){

    	$sql="update slider_principal set url_imagen_slider=:url_ima where id_imagen_slider=:id_ima";
        $query=db::singleton()->prepare($sql);
         
        if(!$query) {
			var_dump( db::singleton()->errorInfo ());
			die;
		}
        $datos=array(':url_ima'=> $url,':id_ima'=> $id);
        if(!$query->execute($datos)){
			var_dump( db::singleton()->errorInfo ());
			die;
		} else {
			echo "<script text='javascript'> alert('La redirección se actualizo correctamente');
			window.location.replace('?r=index/indexadmin'); </script>";
			die;
		}

    }


	
    
}

?>