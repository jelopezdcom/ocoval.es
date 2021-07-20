<?php
class noticiasController{
    
    /**
    * Hace un listado completo
    * de todas las noticias, este listado
    * es utilizado para cargar el layaut principal
    **/
	
	public function actionPrincipal(){
		require "models/noticias.php";
        require "models/slider.php";

        $noticias[0]=noticias::findAll(); //Noticias
        $noticias[1]=slider::findAll(); //Imágenes del slider, me veo obligado a meter casi todo el layout en la vista noticias_listar
		
		vista("noticias_listar",array('noticias'=>$noticias),"layout1");              

	}

    /**
    * Hace un listado las noticias destacadas,
    * este listado
    * es utilizado para cargar el layaut de noticias destacadas
    **/

    public function actionNoticiasDestacadas(){
        require "models/noticias.php";

        $noticias=noticias::findDestacadas();
        
        vista("noticias_destacadas",array('noticias'=>$noticias),"layout2");              

    }

    /**
    * Hace un listado completo
    * de todas las noticias, este listado
    * es utilizado para cargar el layaut de todas las noticias
    **/
	
    public function actionHemerotecaNoticias(){
        require "models/noticias.php";

        $noticias=noticias::findAll();
        
        vista("hemeroteca_noticias",array('noticias'=>$noticias),"layout2"); 

    }

    public function actionVistaUnica(){

        if(isset($_GET['id'])){

            require "models/noticias.php";

            $id = $_GET['id'];
            $noticia = noticias::findId($id);

            vista("noticia_vista_unica",array('noticia'=>$noticia),"layout2"); 

        }
        else
            require "error.php";

    }


    /*
    *Funcion que realiza el filtro del buscador de noticias para las noticias destacadas en castellano
    */
    public function actionBuscaDestacadaCas(){

        require "models/noticias.php";

        if(isset($_POST['palabra'])){

            $palabra = $_POST['palabra'];
            $resultado = noticias::filtroNoticiasCas($palabra);

             vista("noticias_destacadas",array('noticias'=>$resultado),"layout2");
        }

        else
           require "error.php";  

    }


    /*
    *Funcion que realiza el filtro del buscador de noticias para las noticias en general en castellano
    */
    public function actionBuscaNoticias(){

        require "models/noticias.php";

        if(isset($_POST['palabra'])){

            $palabra = $_POST['palabra'];
            if($_SESSION['idioma'] == "cas"){
                $resultado = noticias::filtroNoticiasCas($palabra);
            }
            if($_SESSION['idioma'] == "val"){
                $resultado = noticias::filtroNoticiasVal($palabra);
            }
            vista("hemeroteca_noticias",array('noticias'=>$resultado),"layout2");
        }

        else
           require "error.php";  

    }


    /**
    *Función encargada de borrar una noticia
    **/
    
    public function actionBorrarNoticia(){
        require "models/noticias.php";

        if(isset($_GET['id'])){

            require('includes/head.php');
            $idrecibido = $_GET['id'];

            echo"<div style='width:100%;height:100%;background-color: rgba(0,0,0,.8);padding-top:10%;'>
                    <div class='contact-form-wrapper' style='width:50%;margin-left:25%;background-color:white;border:1px solid #000000;border-radius: 10px 10px 10px 10px;padding:25px;'>
                        <form action='?r=noticias/BorrarNoticia' method='post'>
                            <p style='text-align:center;font-size:150%;'> ¿ESTÁ SEGURO QUE DESEA ALIMINAR ESTA NOTICIA? </p>
                            <div style='text-align:center;'>
                                <input class='btn btn-danger btn-lg' type='submit' name='confirm' value='SI'>
                                <input class='btn btn-info btn-lg' type='submit' name='confirm' value='NO'>
                            </div>
                            <input type='hidden' name='id_validado' value='".$idrecibido."'>
                        </form>
                    </div>
                </div>";
            die;
        }

        if(isset($_POST['confirm'])){

            if($_POST['confirm']=="SI"){

                $id=$_POST['id_validado'];
                $noticia = noticias::deleteNoticia($id);
            }
            if($_POST['confirm']=="NO"){
                echo "<script text='javascript'> window.location.replace('?r=index/indexadmin'); </script>";
            }
        }
        else
        require "error.php";  

    }

    

    public function actionNoticiaNueva(){

        if (isset($_POST['titulo_noticia_cas']) ){

            require 'models/noticias.php';
     
            $titulo_cas = $_POST['titulo_noticia_cas'];
            $titulo_val = $_POST['titulo_noticia_val'];
            $contenido_cas = $_POST['cuerpo_noticia_cas'];
            $canotenido_val = $_POST['cuerpo_noticia_val'];
            $fecha_noticia = $_POST['fecha'];
            if (isset($_POST['destacada'])){ $destacada = "si"; }
            else{ $destacada = "no"; }

            $dir_subida = 'assets/img/imgnoticias/';
            $fichero = basename($_FILES['fichero_usuario']['name']);
            $fichero_subido = $dir_subida . $fichero;

            /* UPLOAD */
            move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido);

            /* RESIZE */
            $ruta_imagen =  $fichero_subido;

            $miniatura_ancho_maximo = 651;
            $miniatura_alto_maximo = 488;

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


            imagejpeg($lienzo, "assets/img/imgnoticias/miniaturas/". $fichero."", 80);

             $dir_subida2 = 'assets/img/imgnoticias/miniaturas/';
             $fichero_subido_min = $dir_subida2 . $fichero;
             /* /RESIZE */
               
            $newnew = noticias::newNoticia($titulo_cas,$titulo_val,$contenido_cas,$canotenido_val,$fichero_subido,$fichero_subido_min,$fecha_noticia,$destacada);


        }else{

            require "error.php"; 
        }
          
    }



    public function actionModificarNoticia(){

        require "models/noticias.php";
        
        /*Compruebo si estoy recogiendo id proviniente del boton modificar o id_noticia proviniente del formulario de esta misma funcion*/
        if (isset($_GET['id'])){

            $noticia = noticias::findId($_GET['id']);

            require('includes/head.php'); ?>

            <script type='text/javascript' src='ckeditor/ckeditor.js'></script>
            <div style='width:100%;background-color: rgba(0,0,0,.8);padding-top:10%;'>
            <div class='contact-form-wrapper' style='width:80%;margin-left:10%;background-color:white;border:1px solid #000000;border-radius: 10px 10px 10px 10px;padding:50px;'>
            <div class='boxed-content left-boxed-icon'>
                <a href='?r=index/indexadmin'>
                    <i class='fa fa-close fa-2x' style='float:right;border-radius:5px;padding:10px;width:40px;height:40px;background-color:#d9534f;line-height:20px;'></i>
                </a>
                <h3 style="color:#406da4;"><b>FORMULARIO PARA LA MODIFICACIÓN DE UNA NOTICIA</b></h3> 
            </div>
            <form method='post' class='form-horizontal margin-bottom-30px' role='form' action='?r=noticias/ModificarNoticia' enctype="multipart/form-data">
                <div class='row'>
                    <div class='form-group'>
                        <div class='col-sm-6'>
                            <p style="color:#406da4;"><b>Título Castellano</b></p>
                            <div class='input-group'>
                                <input type='text' name='titulo_cas' value='<?php echo $noticia['titulo_noticia_cas'];?>' class='form-control' maxlength="60" required>
                                <span class='input-group-addon'><i class='fa fa-tags' style='color:black;'></i></span>
                            </div>
                        </div>
                        <div class='col-sm-6'>
                           <p style="color:#406da4;"><b>Título Valenciano</b></p>
                            <div class='input-group'>
                                <input type='text' name='titulo_val' value='<?php echo $noticia['titulo_noticia_val'];?>' class='form-control' maxlength="60" required>
                                <span class='input-group-addon'><i class='fa fa-tags' style='color:black;'></i></span>
                            </div>
                        </div> 
                    </div>
                    <br />
                   <div class='form-group'>
                        <div class='col-md-6'>
                            <p style="color:#406da4;"><b>Cuerpo de la noticia en Castellano</b></p>
                            <textarea cols='80' id='editor100' name='contenido_noticia_cas' rows='10' required><?php echo $noticia['contenido_noticia_cas'];?></textarea>
                            <script type='text/javascript'>
                                CKEDITOR.replace ('editor100');
                            </script>
                        </div>
                        <div class='col-md-6'>
                            <p style="color:#406da4;"><b>Cuerpo de la noticia en Valenciano</b></p>
                            <textarea cols='80' id='editor120' name='contenido_noticia_val' rows='10' required><?php echo $noticia['contenido_noticia_val'];?></textarea>
                            <script type='text/javascript'>
                                CKEDITOR.replace ('editor120');
                            </script>
                        </div>
                    </div>

                    <div class="form-group">
                        <?php 
                        if(!empty($noticia['ruta_imagen_noticia'])){ ?>
                        <div class='col-sm-6'>
                            <label class='control-label sr-only'>Imagen</label>    
                            <div class='input-group'>
                                <img src="<?php echo $noticia['ruta_imagen_noticia']; ?>" alt="" style="width:100%;float:left;border-radius:10px;"> 
                                <a href="?r=noticias/BorrarImagenNoticia&id=<?php echo $noticia['id_noticia']; ?>">
                                    <button type="button" class="btn btn-danger" style="float:left;width:100%;">Borrar</button>
                                </a> 
                            </div>
                        </div>
                        <?php } 
                        else { ?>                      
                            <div class="col-sm-6">
                                <div class="fileUpload btn btn-primary">
                                    <span><i class="fa fa-image"></i> Subir imagen de la noticia</span>
                                    <input accept="image/*" type="file" class="upload" name="fichero_usuario" id="fileToUpload"/>
                                </div>
                                <div id="vista_previa">Vista previa</div>
                            </div>                 
                            <script>
                                if (window.FileReader) {

                                    function seleccionArchivo(evt) {

                                    var files = evt.target.files;
                                    var f = files[0];
                                    if (f.name.match(/\.(jpg|JPG|jpeg|png|gif)$/)){
                                        
                                        var leerArchivo = new FileReader();
                                        leerArchivo.onload = (function(elArchivo) {
                                        return function(e) {
                                          document.getElementById('vista_previa').innerHTML = '<img src="'+ e.target.result +'" alt="" width="100%" />';
                                        };
                                        })(f);
                                
                                      leerArchivo.readAsDataURL(f);
                                    }else{alert("Esto no es una imágen permitida");}
                                    }
                                } else {
                                  document.getElementById('vista_previa').innerHTML = "El navegador no soporta vista previa";
                                }
                                
                                 document.getElementById('fileToUpload').addEventListener('change', seleccionArchivo, false);
                            </script>
                        <?php } ?>

                        <div class="col-md-6" id="date-picker-demo">
                            <div class="panel-body">
                                <div class="input-group">
                                    <b>Fecha de la noticia:</b><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" name="fecha" style="height:30px;width:262px;"  value="<?php echo $noticia['fecha']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="switch-input" style="padding:20px;">
                                <input type="checkbox" name="destacada" value="si" checked>
                                <i data-swon-text="ON" data-swoff-text="OFF" style="margin-right:50px;margin-top:15px;"></i>Noticia Popular?
                            </label>                                                
                        </div>
                    </div>    

                    <!-- Mando por oculto el id de la noticia a este mismo controlador -->    
                    <input type='hidden' name='id_noticia' value='<?php echo $noticia['id_noticia'];?>'> 
                    <!-- Mando por oculto las rutas de las imágenes por si no se modificaran introducir las mismas -->
                    <input type='hidden' name='fichero_subido' value='<?php echo $noticia['ruta_imagen_noticia'];?>'> 
                    <input type='hidden' name='fichero_subido_min' value='<?php echo $noticia['ruta_imagen_noticia_min'];?>'> 

                    <div class='form-group'>
                        <div class='col-sm-12' style='text-align:left;margin-top:10px;'>
                            <div class='col-sm-6'>
                                <button type='submit' class='btn btn-primary btn-block'><i class='fa fa-pencil'></i> <span>Confirmar modificación de la noticia</span></button>
                            </div>
                            <div class='col-sm-6'>
                                <a href='?r=index/indexadmin'><input class='btn btn-danger btn-block' value='Cancelar la modificación de la noticia'></a>
                            </div>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br /><br /><br />

    <?php   }            
            
        if (isset($_POST['id_noticia'])){

            $titulo_cas = $_POST['titulo_cas'];
            $titulo_val = $_POST['titulo_val'];
            $fecha = $_POST['fecha'];
            $contenido_noticia_cas = $_POST['contenido_noticia_cas'];
            $contenido_noticia_val = $_POST['contenido_noticia_val'];
            $id_noticia = $_POST['id_noticia'];
            if (isset($_POST['destacada'])){ $destacada = "si"; }
            else{ $destacada = "no"; }

            //Compruebo si se ha realizado una subida de imagen nueva
            if(empty($_FILES)){

                $fichero_subido = $_POST['fichero_subido'];
                $fichero_subido_min = $_POST['fichero_subido_min'];

            }  
            else{

                $dir_subida = 'assets/img/imgnoticias/';
                $fichero = basename($_FILES['fichero_usuario']['name']);
                $fichero_subido = $dir_subida . $fichero;

                /* UPLOAD */
                move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido);

                /* RESIZE */
                $ruta_imagen =  $fichero_subido;

                $miniatura_ancho_maximo = 651;
                $miniatura_alto_maximo = 488;

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


                imagejpeg($lienzo, "assets/img/imgnoticias/miniaturas/". $fichero."", 80);

                 $dir_subida2 = 'assets/img/imgnoticias/miniaturas/';
                 $fichero_subido_min = $dir_subida2 . $fichero;
                 /* /RESIZE */
                 
            }   

            $actualizacion_noticia = noticias::updateNoticia($titulo_cas,$titulo_val,$fecha,$contenido_noticia_cas,$contenido_noticia_val,$fichero_subido,$fichero_subido_min,$id_noticia,$destacada);

        }


    }

    //Función encargada de borrar la imágen de una noticia
    public function actionBorrarImagenNoticia(){
        require "models/noticias.php";

        $id = $_GET['id'];
        $imagenborrada = noticias::deleteImagenNoticia($id);

    }

    
}

?>