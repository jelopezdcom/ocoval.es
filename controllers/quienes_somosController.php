<?php
class quienes_somosController{

    /**
    * Esta funcion se encarga únicamente de cargar un layout vacío de datos
    * solamente el layout socios
    **/
	public function actionSocios(){

        require "models/quienes_somos.php";

        $socios=quienes_somos::findSocios();
        
        vistaSinvista(array('socios'=>$socios),"layout_socios");          

    }

    /**
    * Carga el contenido de Historia en el layout historia
    **/

    public function actionHistoria(){

        require "models/quienes_somos.php";

        $historia=quienes_somos::findHistoria();
        
        vista("historia_view",array('historia'=>$historia),"layout2");          

    }


    /**
    * Carga el contenido de compromiso
    **/
    public function actionCompromiso(){

        require "models/quienes_somos.php";

        $compromiso=quienes_somos::findCompromiso();
        
        vista("compromiso_view",array('compromiso'=>$compromiso),"layout2");          

    }


    /**
    * Carga el contenido de ayuntamiento
    **/
    public function actionAyuntamiento(){

        require "models/quienes_somos.php";

        $ayuntamiento=quienes_somos::findAyuntamiento();
        
        vista("ayuntamiento_view",array('ayuntamiento'=>$ayuntamiento),"layout2");          

    }



    /**
    * Funcion que se encarga de actualizar el contenido de la columna historia
    **/
    public function actionActualizarHistoria(){

        require "models/quienes_somos.php";

        if (isset($_POST['historia_contenido_cas'])){
     
            $contenido_cas = $_POST['historia_contenido_cas'];
            $contenido_val = $_POST['historia_contenido_val'];

            $nuevahistoria = quienes_somos::updateHistoria($contenido_cas,$contenido_val);

        }else{

            require 'error.php';
          
        }

    }

    /**
    * Funcion que se encarga de actualizar el contenido de la columna compromiso
    **/
    public function actionActualizarCompromiso(){

        require "models/quienes_somos.php";

        if (isset($_POST['compromiso_contenido_cas'])){
     
            $contenido_cas = $_POST['compromiso_contenido_cas'];
            $contenido_val = $_POST['compromiso_contenido_val'];

            $nuevahistoria = quienes_somos::updateCompromiso($contenido_cas,$contenido_val);
            
        }else{

            require 'error.php';
          
        }

    }    


    /**
    * Funcion que se encarga de actualizar el contenido de la columna socios
    **/
    public function actionActualizarSocios(){

        require "models/quienes_somos.php";

        if (isset($_POST['socios_contenido_cas'])){
     
            $contenido_cas = $_POST['socios_contenido_cas'];
            $contenido_val = $_POST['socios_contenido_val'];

            $nuevosocios = quienes_somos::updateSocios($contenido_cas,$contenido_val);

        }else{

            require 'error.php';
          
        }

    }



    /**
    * Funcion que se encarga de actualizar el contenido de la columna ayuntmaiento
    **/
    public function actionActualizarAyuntamiento(){

        require "models/quienes_somos.php";

        if (isset($_POST['ayuntamiento_contenido_cas'])){
     
            $contenido_cas = $_POST['ayuntamiento_contenido_cas'];
            $contenido_val = $_POST['ayuntamiento_contenido_val'];

            $nuevoayuntamiento = quienes_somos::updateAyuntamiento($contenido_cas,$contenido_val);

        }else{

            require 'error.php';
          
        }

    }

    
}

?>