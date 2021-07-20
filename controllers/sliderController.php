<?php
class sliderController{
    
    /*
        Función encargada de crear una imagen nueva para el slider
    */
    public function actionImagenNueva(){

        if (isset($_SESSION['usuario']) ){

            require 'models/slider.php';
     
            if (isset($_POST['url'])){
                $url = $_POST['url'];
            }


            $dir_subida = 'assets/img/sliders/sliderprincipal/';
            $fichero = basename($_FILES['fichero_usuario']['name']);
            $fichero_subido = $dir_subida . $fichero;

            /* UPLOAD */
            move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido);

            /* RESIZE */
            $ruta_imagen =  $fichero_subido;

            $miniatura_ancho_maximo = 1920;
            $miniatura_alto_maximo = 500;

            $info_imagen = getimagesize($ruta_imagen);
            $imagen_ancho = $info_imagen[0];
            $imagen_alto = $info_imagen[1];
            $imagen_tipo = $info_imagen['mime'];


            $proporcion_imagen = $imagen_ancho / $imagen_alto;
            $proporcion_miniatura = $miniatura_ancho_maximo / $miniatura_alto_maximo;

            if ( $proporcion_imagen > $proporcion_miniatura ){
                $miniatura_ancho = $miniatura_ancho_maximo;
                $miniatura_alto = $miniatura_ancho_maximo / $proporcion_imagen;
            } else if ( $proporcion_imagen < $proporcion_miniatura ){
                $miniatura_ancho = $miniatura_ancho_maximo * $proporcion_imagen;
                $miniatura_alto = $miniatura_alto_maximo;
            } else {
                $miniatura_ancho = $miniatura_ancho_maximo;
                $miniatura_alto = $miniatura_alto_maximo;
            }


            switch ( $imagen_tipo ){
                case "image/JPG":
                case "image/jpg":
                case "image/jpeg":
                    $imagen = imagecreatefromjpeg( $ruta_imagen );
                    break;
                case "image/png":
                    $imagen = imagecreatefrompng( $ruta_imagen );
                    break;
                case "image/gif":
                    $imagen = imagecreatefromgif( $ruta_imagen );
                    break;
            }

            $lienzo = imagecreatetruecolor( $miniatura_ancho, $miniatura_alto );

            imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho, $miniatura_alto, $imagen_ancho, $imagen_alto);


            imagejpeg($lienzo, "assets/img/sliders/sliderprincipal/miniaturas/". $fichero."", 80);

             $dir_subida2 = 'assets/img/sliders/sliderprincipal/miniaturas/';
             $fichero_subido_min = $dir_subida2 . $fichero;
             /* /RESIZE */
               
            $newnew = slider::newImageSlider($url,$fichero_subido,$fichero_subido_min);


        }else{

            require "error.php"; 
        }
          
    }


    //Función encargada de borrar una imágen del slider principal
    public function actionBorrarImagenSlider(){
        require "models/slider.php";

        $id = $_GET['id'];
        $imagenborrada = slider::deleteImagenSlider($id);

    }

    /* Función encargada de modificar la dirección de redireccionamiento del enlace del slider */
    public function actionModificarUrlImagenSlider(){
        require "models/slider.php";

        if (isset($_POST['id_imagen'])){

            $id = $_POST['id_imagen'];
            $url = $_POST['url'];

            $modifica = slider::modificaUrl($id,$url);

        }

    }


    
}

?>