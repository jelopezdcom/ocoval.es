<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    
<?php

class indexController{


	public function actionIndexAdmin(){

        if(isset($_SESSION['usuario'])){

            if($_SESSION['usuario']=="vodafoneono" || $_SESSION['usuario']=="gasnaturalcegas" || $_SESSION['usuario']=="nedgiacegas" || $_SESSION['usuario']=="iberdrola" || $_SESSION['usuario']=="telefonica" || $_SESSION['usuario']=="emivasa" || $_SESSION['usuario']=="ocoval"){

                require ("models/users.php");
                require ("includes/vistas.php");
                require ("models/expedienteszanjas.php");

                $datos[estado] = expedienteszanjas::findestado();
                $datos[clase] = expedienteszanjas::findclase();
                $datos[tipored] = expedienteszanjas::findtipored();
                $datos[tabla] = 0;

                vistaSinvista(array('datos'=>$datos),"layout_empresas");

            }
        }else{
            require('error.php');
        }        

    }
    
}

?>
