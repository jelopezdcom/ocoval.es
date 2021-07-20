		<?php  /* ME VEO OBLIGADO A METER CASI TODO EL LAYOUT1 EN ESTA VISTA AL QUERER MODIFICAR EL SLIDER EN EL ÚLTIMO MOMENTO */ ?>
		<!-- HERO UNIT -->
		<section class="hero-unit-slider slider-responsive no-margin">
			<div id="carousel-hero" class="slick-carousel">
				<div class="carousel-inner" role="listbox">
					<?php  
					/* $noticias[1] son las imágenes del slider */
					foreach ($noticias[1] as $imagen) {  ?>
						<div class="item active <?php  if($imagen['url_imagen_slider']!=""){ echo "tooltip"; }?>">
							<?php  if($imagen['url_imagen_slider']!=""){ ?>
								<a href="<?php echo $imagen['url_imagen_slider']; ?>">
								   <span class="tooltiptext" >Clic en la imagen para enlazar a la noticia</span>
							<?php  } ?>		

								<img src="<?php echo $imagen['ruta_imagen_miniatura_slider']; ?>" class="img-responsive" alt="Slider Image">

							<?php  if($imagen['url_imagen_slider']!=""){ ?>
								</a>
							<?php  } ?>	
						</div>	
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- END HERO UNIT -->
		
		<!-- MAIN FEATURES -->
		<div class="main-features" style="background-color:white;">
			<div class="container">
				<div class="row">
				  <?php if($_SESSION['idioma'] == "cas"){ ?>
					<a href="?r=servicios/mapa"><div class="col-md-4 col-sm-4 col-xs-4"><i class="fa fa-cubes accesodirecto"></i>
						<h3 class="feature-heading" style="color:#656565;"><b>OBRAS EN EJECUCIÓN</b></h3></div></a>
					<a href="?r=servicios/72horas"><div class="col-md-4 col-sm-4 col-xs-4"><i class="fa fa-warning accesodirecto"></i>
						<h3 class="feature-heading" style="color:#656565;"><b>INCIDENCIAS</b></h3></div></a>
					<a href="?r=servicios/zanjascatas&sec=1"><div class="col-md-4 col-sm-4 col-xs-4"><i class="fa fa-paste accesodirecto"></i>
						<h3 class="feature-heading" style="color:#656565;"><b>TRAMITACIÓN ZANJAS</b></h3></div></a>
				  <?php } ?>				 
				  <?php if($_SESSION['idioma'] == "val"){ ?>
					<a href="?r=servicios/mapa"><div class="col-md-4 col-sm-4 col-xs-4"><i class="fa fa-cubes accesodirecto"></i>
						<h3 class="feature-heading" style="color:#656565;"><b>OBRES EN EXECUCIÓ</b></h3></div></a>
					<a href="?r=servicios/72horas"><div class="col-md-4 col-sm-4 col-xs-4"><i class="fa fa-warning accesodirecto"></i>
						<h3 class="feature-heading" style="color:#656565;"><b>INCIDÈNCIES</b></h3></div></a>
					<a href="?r=servicios/zanjascatas&sec=1"><div class="col-md-4 col-sm-4 col-xs-4"><i class="fa fa-paste accesodirecto"></i>
						<h3 class="feature-heading" style="color:#656565;"><b>TRAMITACIÓ RASES</b></h3></div></a>
				  <?php } ?>
				  
				</div>
			</div>
		</div>
		<!-- END MAIN FEATURES -->
		<!-- INTRO -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6 textooficinas">
				      <?php if($_SESSION['idioma'] == "cas"){ ?>
						<h3>En la Oficina de Coordinación de Obras de Valencia estamos a su servicio para:</h3>
						<br />
						<p style="float:left;">•&nbsp;</p><p>Tramitar las licencias de <b>acometidas</b> de servicios a su edificio.</p>
						<p style="float:left;">•&nbsp;</p><p>Atenderle y gestionar las <b>incidencias</b> detectadas en la conservación de la vía pública.</p>
						<p style="float:left;">•&nbsp;</p><p>Tramitar las licencias para colocar <b>soportes publicitarios</b> en parcelas y medianeras.</p>
						<p style="float:left;">•&nbsp;</p><p><b>Informarle</b> de las obras en vía pública que se están ejecutando en la ciudad y de las previstas.</p>
						<p style="float:left;">•&nbsp;</p><p>Facilitarle la <b>comunicación</b> con las compañías de servicios y el <span style="font-style: italic;">Ajuntament de València</span>.</p>
						<p style="float:left;">•&nbsp;</p><p><b>Velar</b> por la calidad y la seguridad de las zanjas de particulares y compañías de servicios públicos que se ejecutan en València.</p>
					  <?php } ?>
					  <?php if($_SESSION['idioma'] == "val"){ ?>
						<h3>En l'Oficina de Coordinació d'Obres de València estem al seu servici per a:</h3>
						<br />
						<p style="float:left;">•&nbsp;</p><p>Tramitar les llicències de <b>connexions</b> de servicis al seu edifici.</p> 
						<p style="float:left;">•&nbsp;</p><p>Atendre-li i gestionar les <b>incidències</b> detectades en la conservació de la via pública.</p>
						<p style="float:left;">•&nbsp;</p><p>Tramitar les llicències per a col·locar <b>suports publicitaris</b> en parcel·les i mitgeres.</p>
						<p style="float:left;">•&nbsp;</p><p><b>Informar-li</b> de les obres en via pública que s'estan executant en la ciutat i de les previstes.</p>
						<p style="float:left;">•&nbsp;</p><p>Facilitar-li la <b>comunicació</b> amb les companyies de servicis i l'Ajuntament de València.</p>
						<p style="float:left;">•&nbsp;</p><p><b>Vetlar</b> per la qualitat i la seguretat de les rases de particulars i companyies de servicis públics que s'executen a València.</p>  
					  <?php } ?>
					  
					</div>
					<div class="col-md-6">
						<img src="assets/img/intro-img.jpg" class="img-responsive img-thumbnail" alt="Image Intro">
					</div>
				</div>
			</div>
		</section>
		<!-- END INTRO -->
		<!-- BOXED CONTENT -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-clock-o"></i>
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							  <h2 class="boxed-content-title">SERVICIO 72H</h2>
							  <p>El servicio 72 horas tiene como objetivo garantizar el óptimo mantenimiento de las calles de nuestra ciudad, haciendo posible la reparación de los desperfectos en pavimentos comunicados por la ciudadanía.</p>
						    <?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							  <h2 class="boxed-content-title">SERVICI 72H</h2>
							  <p>El servici 72 hores té com a objectiu garantir l'òptim manteniment dels carrers de la nostra ciutat, fent possible la reparació dels desperfectes en paviments comunicats per la ciutadania.</p>
						    <?php } ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-gears"></i>
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							<h2 class="boxed-content-title">COORDINACIÓN</h2>
							<p>Una de las principales funciones de OCOVAL es la coordinación de las obras de canalización en vía pública que se ejecutan en el término municipal de València.</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							<h2 class="boxed-content-title">COORDINACIÓ</h2>
							<p>Una de les principals funcions d'OCOVAL és la coordinació de les obres de canalització en via pública que s'executen en el terme municipal de València.</p>
							<br />
							<?php } ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-link"></i>
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							<h2 class="boxed-content-title">ENLACES DE INTERÉS</h2>
							<p style="font-size:15px;">
								<a href="http://www.valencia.es" target="_blank">Ajuntament de València</a> | 
								<a href="https://www.emivasa.es" target="_blank">Emivasa</a> | 
								<a href="https://www.nedgia.es" target="_blank">Nedgia Cegas</a> | 
								<a href="http://www.iberdrola.es" target="_blank">Iberdrola</a> | 
								<a href="http://www.vodafone.es" target="_blank">Vodafone Ono</a> | 
								<a href="https://www.telefonica.es" target="_blank">Telefónica</a> | 
								<a href="http://www.aumsa.es/" target="_blank">Aumsa</a> | 
								<a href="http://www.valencia.es/ayuntamiento/trafico.nsf/vPortadasTituloAux/Portada?opendocument&lang=1&nivel=1" target="_blank">Movilidad</a> | 
								<a href="http://www.valencia.es/urbanismo" target="_blank">Urbanismo</a></p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							<h2 class="boxed-content-title">ENLLAÇOS D'INTERÉS</h2>
							<p style="font-size:15px;">
								<a href="http://www.valencia.es/ayuntamiento/home.nsf/(Portadas1)/$first?opendocument&amp;lang=1" target="_blank">Ajuntament de València</a> | 
								<a href="https://www.emivasa.es" target="_blank">Emivasa</a> |
								<a href="https://www.nedgia.es" target="_blank">Nedgia Cegas</a> |  
								<a href="http://www.iberdrola.es" target="_blank">Iberdrola</a> |  
								<a href="http://www.vodafone.es" target="_blank">Vodafone Ono</a> | 
								<a href="https://www.telefonica.es" target="_blank">Telefónica</a> | 
								<a href="http://www.aumsa.es" target="_blank">Aumsa</a> |
								<a href="http://www.valencia.es/ayuntamiento/trafico.nsf/vPortadasTituloAux/Portada?opendocument&lang=2&nivel=1" target="_blank">Mobilitat</a> | 
								<a href="http://www.valencia.es/urbanismo" target="_blank">Urbanisme</a></p>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-truck"></i>
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							<h2 class="boxed-content-title">OBRAS EN EJECUCIÓN</h2>
							<p>Puede consultar en nuestra web todas las obras que se están realizando en la ciudad de València en tiempo real.</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							<h2 class="boxed-content-title">OBRES EN EXECUCIÓ</h2>
							<p>Pot consultar en la nostra web totes les obres que s'estan realitzant en la ciutat de València en temps real.</p>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END BOXED CONTENT -->
		<!-- TESTIMONIAL -->
		<section id="testimoial-parallax" class="testimonial-with-bg parallax" style="margin-bottom:0px">
			<div class="container">
				<div class="testimonial slick-carousel" style="text-shadow: 1px 1px 1px #000;">
					<div class="testimonial-container">
						<div class="testimonial-body">
						    <?php if($_SESSION['idioma'] == "cas"){ ?>
							  <p style="font-weight: bold;">El <span style="font-style:italic;">Ajuntament de València</span> es el órgano encargado del gobierno y la administración de nuestro municipio.</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							 <p style="font-weight: bold;">L'Ajuntament de València és l'òrgan encarregat del govern i l'administració del nostre municipi.</p>
							<?php } ?>
							<div class="testimonial-author">
								<img src="assets/img/user6.png" alt="Author" class="pull-left">
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<span><span class="author-name">Ajuntament de València</span> <em style="font-style:italic;">Àrea de Desenvolupament Urbá i Vivenda </em></span>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
									<span><span class="author-name">Ajuntament de València</span> <em style="font-style:italic;">Àrea de Desenvolupament Urbá i Vivenda </em></span>
								<?php } ?>
							</div>
						</div>
						<div class="testimonial-body">
						    <?php if($_SESSION['idioma'] == "cas"){ ?>
							  <p style="font-weight: bold;">El Grupo Aguas de Valencia es más que un grupo empresarial dedicado a la gestión del agua.</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							  <p style="font-weight: bold;">El Grup Aigües de València és més que un grup empresarial dedicat a la gestió de l'aigua.</p>
							<?php } ?>
							<div class="testimonial-author">
								<img src="assets/img/user1.png" alt="Author" class="pull-left">
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<span><span class="author-name">Emivasa</span> <em>Aguas potables</em></span>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
									<span><span class="author-name">Emivasa</span> <em>Aigües potables</em></span>
								<?php } ?>
							</div>
						</div>
						<div class="testimonial-body">
						    <?php if($_SESSION['idioma'] == "cas"){ ?>
							  <p style="font-weight: bold;">Telefónica es hoy un operador integrado de telecomunicaciones líder en España.</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							  <p style="font-weight: bold;">Telefónica és hui un operador integrat de telecomunicacions líder a Espanya.</p>
							<?php } ?>
							<div class="testimonial-author">
								<img src="assets/img/user2.png" alt="Author" class="pull-left">
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<span><span class="author-name">Telefonica</span> <em>Telecomunicaciones</em></span>
								<?php } ?>	
								<?php if($_SESSION['idioma'] == "val"){ ?>
									<span><span class="author-name">Telefonica</span> <em>Telecomunicacions</em></span>
								<?php } ?>	
							</div>
						</div>
						<div class="testimonial-body">
						    <?php if($_SESSION['idioma'] == "cas"){ ?>
							 <p style="font-weight: bold;">Un modelo de crecimiento, eficiencia y sostenibilidad social.</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							 <p style="font-weight: bold;">Un model de creixement, eficiència i sostenibilitat social.</p>
							<?php } ?>
							<div class="testimonial-author">
								<img src="assets/img/user3.png" alt="Author" class="pull-left">
								<span><span class="author-name">Iberdrola</span> <em>Energía</em></span>
							</div>
						</div>
						<div class="testimonial-body">
						    <?php if($_SESSION['idioma'] == "cas"){ ?>
							  <p style="font-weight: bold;">Vodafone Ono es una compañía de comunicación y entretenimiento por banda ancha líder en España.</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							  <p style="font-weight: bold;">Vodafone Ono és una companyia de comunicació i entreteniment per banda ampla líder a Espanya.</p>
							<?php } ?>
							<div class="testimonial-author">
								<img src="assets/img/user4.png" alt="Author" class="pull-left">
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<span><span class="author-name">Vodafone Ono</span> <em>Telecomunicaciones</em></span>
								<?php } ?>	
								<?php if($_SESSION['idioma'] == "val"){ ?>
									<span><span class="author-name">Vodafone Ono</span> <em>Telecomunicacions</em></span>
								<?php } ?>
							</div>
						</div>
						<div class="testimonial-body">
						    <?php if($_SESSION['idioma'] == "cas"){ ?>
							  <p style="font-weight: bold;">Cuida de tu hogar para que todo funcione como el primer día.</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							  <p style="font-weight: bold;">Cuida de la teua llar perquè tot funcione com el primer dia.</p>
							<?php } ?>
							<div class="testimonial-author">
								<img src="assets/img/user5.png" alt="Author" class="pull-left">
								<span><span class="author-name">Nedgia Cegas</span> <em>Energía</em></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br />
		<!-- LATEST NEWS -->
		<section>
			<div class="container">	
			    <?php if($_SESSION['idioma'] == "cas"){ ?>
				 <h3>ÚLTIMAS NOTICIAS</h3>
				<?php } ?>
				 <?php if($_SESSION['idioma'] == "val"){ ?>
				 <h3>ÚLTIMES NOTÍCIES</h3>
				<?php } ?>
				<br />
				<div class="row">
					<div class="col-md-4">
						<?php
							//print_r($noticias);die;
						?>
						<div class="news-item news-featured">
							<a href="?r=noticias/vistaunica&id=<?php echo $noticias[0][0]['id_noticia'] ?>"><img src="<?php  echo $noticias[0][0]['ruta_imagen_noticia_min']; ?>" class="img-responsive" alt="News Thumbnail"></a>
							<h3 class="news-title"><a href="?r=noticias/vistaunica&id=<?php echo $noticias[0][0]['id_noticia'] ?>"><?php $titulo = "titulo_noticia_".$_SESSION['idioma']; echo $noticias[0][0][$titulo]; ?></a></h3>
							<p><?php $contenido = "contenido_noticia_".$_SESSION['idioma']; echo substr($noticias[0][0][$contenido],0,180)."..."; ?></p>
							<div class="news-meta">
								<span class="news-datetime"><?php  $fecha = $noticias[0][0]['fecha']; $date = new DateTime($fecha); echo $date->format('d-m-Y');?></span>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							
						<?php
						for($i=1;$i<6;$i++){ 
							$noticia = $noticias[0][$i];
						?>

						<div class="col-md-6 col-sm-6">
							<div class="news-item margin-bottom-30px clearfix">
								<a href="?r=noticias/vistaunica&id=<?php echo $noticia['id_noticia'] ?>"><img src="<?php  echo $noticia['ruta_imagen_noticia_min']; ?>" class="img-responsive pull-left" alt="News Thumbnail"></a>
								<div class="right">
									<h3 class="news-title"><a href="?r=noticias/vistaunica&id=<?php echo $noticia['id_noticia'] ?>"><?php  $titulo = "titulo_noticia_".$_SESSION['idioma']; echo $noticia[$titulo]; ?></a></h3>
									<p><?php 
									$contenido = "contenido_noticia_".$_SESSION['idioma']; 
									$contenido = $noticia[$contenido];
									$IndiceEspacio = strpos($contenido," ",85); 
									$CadenaRecortada = substr($contenido,0,$IndiceEspacio);
									echo $CadenaRecortada."..."; 
									?></p>
								</div>
							</div>
						</div>

						<?php } //for ?>

							<div class="col-md-6 col-sm-6">
								<div class="see-all-news">
								   <?php if($_SESSION['idioma'] == "cas"){ ?>
									<a href="?r=noticias/hemerotecanoticias"><i class="fa fa-tv"></i> Ver todas las noticias <i class="fa fa-share"></i></a>
								   <?php } ?>
								   <?php if($_SESSION['idioma'] == "val"){ ?>
									<a href="?r=noticias/hemerotecanoticias"><i class="fa fa-tv"></i> Veure totes les notícies <i class="fa fa-share"></i></a>
								   <?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END LATEST NEWS -->	