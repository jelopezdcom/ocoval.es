<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    
<?php

class indexController{


	public function actionIndexAdmin(){

        if(isset($_SESSION['usuario'])){

            require ("models/quienes_somos.php");
            require ("models/servicios.php");
            require ("models/noticias.php");
            require ("models/users.php");
            require ("models/slider.php");

            $datos[0]=quienes_somos::findHistoria();
            $datos[1]=quienes_somos::findCompromiso();
            $datos[2]=quienes_somos::findSocios();
            $datos[3]=quienes_somos::findAyuntamiento();


            $datos[4]=servicios::findContenido("zanjas_catas");
            $datos[10]=servicios::findContenido("zanjas_catas_1");
            $datos[11]=servicios::findContenido("zanjas_catas_2");
            $datos[12]=servicios::findContenido("zanjas_catas_3");
            $datos[13]=servicios::findContenido("zanjas_catas_4");

            $datos[5]=servicios::findContenido("soportes_publi");
            $datos[15]=servicios::findContenido("soportes_publi_1");
            $datos[16]=servicios::findContenido("soportes_publi_2");
            $datos[17]=servicios::findContenido("soportes_publi_3");

            $datos[6]=servicios::findContenido("coordinacion_obras");
            $datos[20]=servicios::findContenido("coordinacion_obras_1");
            $datos[21]=servicios::findContenido("coordinacion_obras_2");
            $datos[22]=servicios::findContenido("coordinacion_obras_3");
            $datos[23]=servicios::findContenido("coordinacion_obras_4");

            $datos[7]=servicios::findContenido("inspeccion_obras");
            $datos[8]=servicios::findContenido("registro");
            $datos[9]=servicios::findContenido("72horas");
            $datos[20]=servicios::findContenido("documentacion");
           

            $datos[14]=noticias::findAll();
            $datos[18]=users::findAll();

            $datos[19]=slider::findAll();
     
            vistaSinvista(array('datos'=>$datos),"layout_admin_web");          

        }else{
            require('error.php');
        }        

    }//Funcion
    
}

?>