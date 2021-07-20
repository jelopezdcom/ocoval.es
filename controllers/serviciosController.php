<?php
class serviciosController{

    /**
    * Esta funcion se encarga únicamente de cargar un layout vacío de datos
    * solamente el layout socios
    **/
	public function actionComunica_deficiencia(){

        require "config.php";
        
        vistaSimple("layout_comunica_deficiencia");           

    }

    /**
    * Carga el contenido de Servicio 72 horas en el layout
    **/

    public function action72horas(){

        require "models/servicios.php";

        $texto=servicios::findContenido("72horas");
        
        vista("servicio72horas_view",array('texto'=>$texto),"layout_72horas");          

    }

    /**
    * Carga el contenido de Documentacion en el layout
    **/

    public function actionDocumentacion(){

        require "models/servicios.php";

        $texto=servicios::findContenido("documentacion");
        
        vista("documentacion_view",array('texto'=>$texto),"layout2");          

    }


    /**
    * Carga el contenido de Coordinacion en el layout
    **/

    public function actionCoordinacion(){

        require "models/servicios.php";

        $texto[0]=servicios::findContenido('coordinacion_obras');
        $texto[1]=servicios::findContenido('coordinacion_obras_1');
        $texto[2]=servicios::findContenido('coordinacion_obras_2');
        $texto[3]=servicios::findContenido('coordinacion_obras_3');
        $texto[4]=servicios::findContenido('coordinacion_obras_4');
        
        vista("coordinacion_view",array('texto'=>$texto),"layout2");          

    }


    /**
    * Carga el contenido de inspección de obras en el layout
    **/

    public function actionInspeccion(){

        require "models/servicios.php";

        $texto=servicios::findContenido('inspeccion_obras');
        
        vista("inspeccion_view",array('texto'=>$texto),"layout2");          

    }



     /**
    * Carga el contenido de Registro en el layout
    **/

    public function actionRegistro(){

        require "models/servicios.php";

        $texto=servicios::findContenido('registro');
        
        vista("registro_view",array('texto'=>$texto),"layout2");          

    }




    /**
    * Carga el contenido de Zanjas y Catas en el layout
    **/

    public function actionZanjasCatas(){

        require "models/servicios.php";

        $textozanjas=servicios::findContenido('zanjas_catas');
        $textozanjas1=servicios::findContenido('zanjas_catas_1');
        $textozanjas2=servicios::findContenido('zanjas_catas_2');
        $textozanjas3=servicios::findContenido('zanjas_catas_3');
        $textozanjas4=servicios::findContenido('zanjas_catas_4');

        $texto[0]=$textozanjas;
        $texto[1]=$textozanjas1;
        $texto[2]=$textozanjas2;
        $texto[3]=$textozanjas3;
        $texto[4]=$textozanjas4;
        
        vista("zanjasycatas_view",array('texto'=>$texto),"layout2");          

    }


    /**
    * Carga el contenido de Soportes Publicitarios en el layout
    **/

    public function actionSoportes(){

        require "models/servicios.php";

        $textosoportes=servicios::findContenido('soportes_publi');
        $textosoportes1=servicios::findContenido('soportes_publi_1');
        $textosoportes2=servicios::findContenido('soportes_publi_2');
        $textosoportes3=servicios::findContenido('soportes_publi_3');

        $texto[0]=$textosoportes;
        $texto[1]=$textosoportes1;
        $texto[2]=$textosoportes2;
        $texto[3]=$textosoportes3;
        
        vista("soportes_view",array('texto'=>$texto),"layout2");          

    } 



    /**
    * Esta funcion se encarga únicamente de cargar un layout vacío de datos
    * solamente el layout mapa
    **/
    public function actionMapa(){

        require "config.php";
        
        vistaSimple("layout_mapa");           

    }



    /**
    * Funcion que se encarga de actualizar el contenido de la columna 72horas
    **/
    public function actionActualizar72horas(){

        require "models/servicios.php";

        if (isset($_POST['72_contenido_cas'])){
     
            $contenido_cas = $_POST['72_contenido_cas'];
            $contenido_val = $_POST['72_contenido_val'];
            $titulo = "72horas";

            $nuevoservicio = servicios::updateServicio($contenido_cas,$contenido_val,$titulo);
            
        }else{

            require 'error.php';
          
        }
    }


    /**
    * Funcion que se encarga de actualizar el contenido de Documentacion
    **/
    public function actionActualizarDocumentacion(){

        require "models/servicios.php";

        if (isset($_POST['documentacion_cas'])){
     
            $contenido_cas = $_POST['documentacion_cas'];
            $contenido_val = $_POST['documentacion_val'];
            $titulo = "documentacion";

            $nuevoservicio = servicios::updateServicio($contenido_cas,$contenido_val,$titulo);
            
        }else{

            require 'error.php';
          
        }
    }


    /**
    * Funcion que se encarga de actualizar el contenido de la columna Coordinacion de obras
    **/
    public function actionActualizarCoordinacionObras(){

        require "models/servicios.php";

        if (isset($_POST['coordinacion_contenido_cas'])){
     
            $contenido_cas = $_POST['coordinacion_contenido_cas'];
            $contenido_val = $_POST['coordinacion_contenido_val'];
            $titulo = "coordinacion_obras";

            $nuevoservicio = servicios::updateServicio($contenido_cas,$contenido_val,$titulo);
            
        }else{

            require 'error.php';
          
        }
    }



    /**
    * Funcion que se encarga de actualizar el contenido de la columna Inspeccion de obras
    **/
    public function actionactualizarInspeccionObras(){

        require "models/servicios.php";

        if (isset($_POST['inspeccion_contenido_cas'])){
     
            $contenido_cas = $_POST['inspeccion_contenido_cas'];
            $contenido_val = $_POST['inspeccion_contenido_val'];
            $titulo = "inspeccion_obras";

            $nuevainspeccion = servicios::updateServicio($contenido_cas,$contenido_val,$titulo);
            
        }else{

            require 'error.php';
          
        }
    }


    /**
    * Funcion que se encarga de actualizar el contenido de la columna Registro
    **/
    public function actionactualizarRegistro(){

        require "models/servicios.php";

        if (isset($_POST['registro_contenido_cas'])){
     
            $contenido_cas = $_POST['registro_contenido_cas'];
            $contenido_val = $_POST['registro_contenido_val'];
            $titulo = "registro";

            $nuevoregistro = servicios::updateServicio($contenido_cas,$contenido_val,$titulo);
            
        }else{

            require 'error.php';
          
        }
    }


    /**
    * Funcion que se encarga de actualizar el contenido de la columna Zanjas y Catas
    **/
    public function actionActualizarZanjasyCatas(){

        require "models/servicios.php";

        if (isset($_POST['zanjas_contenido_cas'])){
     
            $contenido_cas = $_POST['zanjas_contenido_cas'];
            $contenido_val = $_POST['zanjas_contenido_val'];
            $titulo = "zanjas_catas";

            $nuevoservicio = servicios::updateServicio($contenido_cas,$contenido_val,$titulo);
            
        }else{

            require 'error.php';
          
        }
    }



    /**
    * Funcion que se encarga de actualizar el contenido de la columna Soportes publicitarios
    **/
    public function actionactualizarSoportesPublicitarios(){

        require "models/servicios.php";

        if (isset($_POST['soportes_contenido_cas'])){
     
            $contenido_cas = $_POST['soportes_contenido_cas'];
            $contenido_val = $_POST['soportes_contenido_val'];
            $titulo = "soportes_publi";

            $nuevoservicio = servicios::updateServicio($contenido_cas,$contenido_val,$titulo);
            
        }else{

            require 'error.php';
          
        }
    }



    /**
    * Funcion que se encarga de actualizar el contenido de las petañas Zanjas y Catas
    **/
    public function actionActualizarPestanyas(){

        require "models/servicios.php";

        if (isset($_POST['titulo_pestanya_cas'])){
     
            $titulo_pestanya_cas = $_POST['titulo_pestanya_cas'];
            $titulo_pestanya_val = $_POST['titulo_pestanya_val'];
            $contenido_cas = $_POST['zanjas_contenido_cas'];
            $contenido_val = $_POST['zanjas_contenido_val'];
            $titulo = $_POST['numero_pestanya'];

            $nuevoservicio = servicios::updateServicioPestanya($titulo_pestanya_cas,$titulo_pestanya_val,$contenido_cas,$contenido_val,$titulo);
            
        }else{

            require 'error.php';
          
        }
    }
 

    
}

?>