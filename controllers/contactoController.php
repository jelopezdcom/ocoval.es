<?php
class contactoController{

    /**
    * Esta funcion se encarga únicamente de cargar un layout vacío de datos
    * solamente el layout socios
    **/
	public function actionContacto(){

        require "config.php";
        
        vistaSimple("layout_contacto");           

    }


    /**
    *Esta funcion se encarga de realizar el filtro de campo de busqueda de contenido en la web en general
    **/
    public function actionBusqueda(){

        require "models/encrypter.php";
	    
	    if(isset($_POST['busqueda'])) {

	   		$busqueda = $_POST['busqueda'];

	    	$resultados[0] = encrypter::busquedaquienessomos($busqueda);
	    	$resultados[1] = encrypter::busquedaservicios($busqueda);
            $resultados[2] = encrypter::busquedanoticias($busqueda);
	    	$resultados[3] = $busqueda;

	    	vistaSinvista(array('resultados'=>$resultados),"layout_resultados_busqueda"); 
	    	
		 
		}           

    }

    public function actioncambiaidioma(){
        if(isset($_GET['idioma'])){

            $idioma = $_GET['idioma'];
            $url = $_GET['url'];

            //Parche para contemplar la posibilidad del cambio de idioma en una noticia única
            if(isset($_GET['id'])){
                $url = $url."&id=".$_GET['id'];
            }

            //Parche para contemplar la de estar en una pantalla con sección de pestaña
            if(isset($_GET['sec'])){
                $url = $url."&sec=".$_GET['sec'];
            }

            if($idioma == "val"){
                $_SESSION['idioma'] = "val";
                header('Location:'.$url);
            }

            if($idioma == "cas"){
                $_SESSION['idioma'] = "cas";
                header('Location:'.$url);
            }

        }
    }

}
?>
