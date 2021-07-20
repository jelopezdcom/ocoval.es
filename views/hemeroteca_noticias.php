<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<?php if($_SESSION['idioma'] == "cas"){ ?>
			<h1 class="page-title pull-left">NOTICIAS OCOVAL</h1>
			<ol class="breadcrumb">
				<li><a href="index.php">Inicio</a></li>
				<li class="active">Noticias</li>
			</ol>
		 <?php } ?>
		 <?php if($_SESSION['idioma'] == "val"){ ?>
			<h1 class="page-title pull-left">NOTÍCIES OCOVAL</h1>
			<ol class="breadcrumb">
				<li><a href="index.php">Inici</a></li>
				<li class="active">Notícies</li>
			</ol>
		<?php } ?>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php
					if(count($noticias)==0){
						echo "<h3 style='color:#eb5d5d;text-align:-webkit-center;'>NO SE ENCONTRARON COINCIDENCIAS</h3>";
					}
				?>
				<div class="blog medium-thumbnail margin-bottom-30px">
					<!-- PAGINACION -->
					<?php
					$num_total_registros = count($noticias);
					$TAMANO_PAGINA=5;
					if (isset($_GET['screen'])){ 
						$p = $_GET['screen']; 
					} else { 
						$p=1; 
					}
					$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

					paginar($noticias, $TAMANO_PAGINA, $p);

					function paginar($v, $l, $p) { 

						$paginas = ceil(count($v) / $l);  
						$inicio = ($p-1)*$l; 
						$final = $p*$l; 
	
						for ($i=$inicio; $i<$final; $i++) { 
							      	
							if (isset($v[$i])) {
							    $noticia=$v[$i]; 
							    $fecha = new DateTime($noticia['fecha']);
						?>


							    <article class="entry-post">
									<header class="entry-header">
										<h2 class="entry-title">
										<a href="?r=noticias/vistaunica&id=<?php echo $noticia['id_noticia'] ?>"><?php  $titulo = "titulo_noticia_".$_SESSION['idioma']; echo $noticia[$titulo]; ?></a>
										</h2>
									</header>
									<div class="entry-content clearfix">
										<div class="row">
											<div class="col-sm-5">
												<figure class="featured-image">
												<a href="?r=noticias/vistaunica&id=<?php echo $noticia['id_noticia'] ?>">
													<?php $anyo=date("Y", strtotime($noticia['fecha'])); $dia=date("d", strtotime($noticia['fecha'])); $mes=date("m", strtotime($noticia['fecha']));?>
													<div class="post-date-info clearfix"><span class="post-month"><?php echo $dia; ?></span><span class="post-date"><?php echo $mes; ?></span><span class="post-year"><?php echo $anyo; ?></span></div>
													<img src="<?php  echo $noticia['ruta_imagen_noticia_min']; ?>" class="img-responsive" alt="featured-image" />
												</a>
											</figure>
											</div>
											<div class="col-sm-7">
												<div class="excerpt">
													<p><?php $contenido = "contenido_noticia_".$_SESSION['idioma']; echo substr($noticia[$contenido],0,450)."..."; ?></p>
													<p class="read-more">
													  <?php if($_SESSION['idioma'] == "cas"){ ?>
														<a href="?r=noticias/vistaunica&id=<?php echo $noticia['id_noticia'] ?>" class="btn btn-primary">Leer más <i class="fa fa-long-arrow-right"></i></a>
													  <?php } ?>
													  <?php if($_SESSION['idioma'] == "val"){ ?>
														<a href="?r=noticias/vistaunica&id=<?php echo $noticia['id_noticia'] ?>" class="btn btn-primary">Llegir més <i class="fa fa-long-arrow-right"></i></a>
													  <?php } ?>
													</p>
												</div>
											</div>
										</div>
									</div>
								</article>
								<hr>         
							    <?php }
							    else  
							        break;   
							    } 
							    echo "<nav> <ul class='pagination'>";
							    if ($p>1) 
							      	echo "<li>
							      			<a href=\"?r=noticias/hemerotecanoticias&screen=" . ($p-1) . "\" aria-label='Previous'>
							        			<span aria-hidden='true'>&laquo;</span>
							      			</a>
							    		</li>";

							    for ($i=1; $i<=$paginas; $i++) { 
							        if ($i == $p) 
							           echo "<li class='active'><a href=\"?r=noticias/hemerotecanoticias&screen=$i\">$i</a></li>";
							        else  
							            echo "<li><a href=\"?r=noticias/hemerotecanoticias&screen=$i\">$i</a></li>"; 
							    } 
							       
							    if ($p<$paginas){
									echo" <li>
							      			<a href=\"?r=noticias/hemerotecanoticias&screen=" . ($p+1) . "\" aria-label='Next'>
							      		  		<span aria-hidden='true'>&raquo;</span>
							      			</a>
							    		  </li>";								      	
							      }   
							      echo "</ul> </nav>"; 
							return; 
							   }  

							?>
				</div>
			</div>
			<div class="col-md-3">
				<!-- SIDEBAR -->
				<!-- search form -->
				<div class="widget  bounce">
					<form  method="post" action="?r=noticias/buscanoticias" class="form-search">
						<div class="input-group">
							<input type="text" class="form-control" name="palabra" placeholder="Buscar en noticias">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit">Buscar</button>
							</span>
						</div>
					</form>
				</div>
				<!-- end search form -->
				<!-- categories -->
				<div class="widget hidden-xs">
					<h4 class="widget-title">MAPA WEB</h4>
					<ul class="list-unstyled category-list">
						<?php if($_SESSION['idioma'] == "cas"){ ?>
						 <li><a href="index.php"><i class="fa fa-home"></i> > Principal</a></li>
						 <li><a href="?r=quienes_somos/historia"><i class="fa fa-newspaper-o"></i> > Historia Ocoval</a></li>
						 <li><a href="?r=contacto/contacto"><i class="fa fa-envelope-o"></i> > Contacto</a></li>
						 <li><a href="?r=servicios/mapa"><i class="fa fa-warning"></i> > Obras en ejecución</a></li>
						 <li><a href="?r=servicios/72horas"><i class="fa fa-volume-up"></i> > Comunicar incidencia</a></li>
						 <li><a href="?r=servicios/zanjascatas&sec=1"><i class="fa fa-truck"></i> > Zanjas y Catas</a></li>
						 <li><a href="?r=quienes_somos/socios"><i class="fa fa-users"></i> > Socios</a></li>
						<?php } ?>
						<?php if($_SESSION['idioma'] == "val"){ ?>
						 <li><a href="index.php"><i class="fa fa-home"></i> > Principal</a></li>
						 <li><a href="?r=quienes_somos/historia"><i class="fa fa-newspaper-o"></i> > Història Ocoval</a></li>
						 <li><a href="?r=contacto/contacto"><i class="fa fa-envelope-o"></i> > Contacte</a></li>
						 <li><a href="?r=servicios/mapa"><i class="fa fa-warning"></i> > Obres en execució</a></li>
						 <li><a href="?r=servicios/72horas"><i class="fa fa-volume-up"></i> > Comunicar incidència</a></li>
						 <li><a href="?r=servicios/zanjascatas&sec=1"><i class="fa fa-truck"></i> > Rases i Sondatges</a></li>
						 <li><a href="?r=quienes_somos/socios"><i class="fa fa-users"></i> > Socis</a></li>
						<?php } ?>
					</ul>
				</div>
				<!-- end categories -->
				<!-- tabbed content -->
				<div class="widget">
					<div class="tabpanel">
						<!-- nav tabs -->
						<ul class="nav nav-tabs" role="tablist" style="text-align:center;">
						  <?php if($_SESSION['idioma'] == "cas"){ ?>
							<li role="presentation" class="active"><a href="#content-popular" aria-controls="content-popular" role="tab" data-toggle="tab" style="text-align:center;"><div class="boxed-content left-aligned left-boxed-icon" style="margin-left:10px;"><i class="fa fa fa-thumbs-up"></i></div> POPULARES </a></li>
							<li role="presentation"><a href="#content-recents" aria-controls="content-recents" role="tab" data-toggle="tab" style="text-align:center;"><div class="boxed-content left-aligned left-boxed-icon" style="margin-left:10px;"><i class="fa fa-clock-o"></i></div> RECIENTES </a></li>
						  <?php } ?>
						  <?php if($_SESSION['idioma'] == "val"){ ?>
							<li role="presentation" class="active"><a href="#content-popular" aria-controls="content-popular" role="tab" data-toggle="tab" style="text-align:center;"><div class="boxed-content left-aligned left-boxed-icon" style="margin-left:10px;"><i class="fa fa fa-thumbs-up"></i></div> POPULARS </a></li>
							<li role="presentation"><a href="#content-recents" aria-controls="content-recents" role="tab" data-toggle="tab" style="text-align:center;"><div class="boxed-content left-aligned left-boxed-icon" style="margin-left:10px;"><i class="fa fa-clock-o"></i></div> RECENTS </a></li>
						  <?php } ?>
						</ul>
						<!-- end nav tabs -->
						<!-- tab panes -->
						<div class="tab-content">
							<div id="content-popular" class="tab-pane fade in active" role="tabpanel">
								<ul class="list-unstyled blogposts popular">
									<br><br>
									<?php      
										$contador=0;
										for($i=0;$i<count($noticias);$i++){ 
											$noticia = $noticias[$i];
											$fecha = new DateTime($noticia['fecha']);
											if($noticia['destacada']=="si" && $contador<5){
											?>
											<li>
												<div class="media">
													<a href="?r=noticias/vistaunica&id=<?php echo $noticia['id_noticia'] ?>" class="media-left"><img src="<?php  echo $noticia['ruta_imagen_noticia_min']; ?>" class="img-circle" alt="Avatar" style="width:50px;height:50px;"></a>
													<div class="media-body">
														<h4 class="media-heading" style="color:#406da4;"><?php  echo $noticia['titulo_noticia_'.$_SESSION['idioma']]; ?></h4>
														<p class="text-muted"><?php echo substr($noticia['contenido_noticia_'.$_SESSION['idioma']],0,70)."..."; ?></p>
													</div>
												</div>
											</li>
									  <?php 
									  	$contador++;
									  	}//if

									} //for 
									?>
								</ul>
							</div>
							<div id="content-recents" class="tab-pane fade" role="tabpanel">
								<ul class="list-unstyled blogposts latest">
									<br>
									<?php      
										$contador=0;
										for($i=0;$i<count($noticias);$i++){ 
										$noticia = $noticias[$i];
										$fecha = new DateTime($noticia['fecha']);
										if($contador<5){
											?>
											<li>
												<a href="?r=noticias/vistaunica&id=<?php echo $noticia['id_noticia'] ?>" class="media-left"><h4 class="post-title" style="color:#406da4;"><?php  echo $noticia['titulo_noticia_'.$_SESSION['idioma']]; ?></h4></a>
												<span class="text-muted"><?php $anyo=date("Y", strtotime($noticia['fecha'])); $dia=date("d", strtotime($noticia['fecha'])); $mes=date("m", strtotime($noticia['fecha']));?><?php echo $dia; ?>-</span><span class="post-date"><?php echo $mes; ?></span>-<span class="post-year"><?php echo $anyo; ?></span>
												<p><?php echo substr($noticia['contenido_noticia_'.$_SESSION['idioma']],0,50)."..."; ?></p>
											</li>
											<hr>
											<?php 
											$contador++;
									  	}//if
									} //for ?>
								</ul>
							</div>
						</div>
						<!-- end tab panes -->
					</div>
				</div>
				<!-- end tabbed content -->
				<!-- tags -->
				<div class="widget">
				  <?php if($_SESSION['idioma'] == "cas"){ ?>
					<h4 class="widget-title">ENLACES</h4>
					<ul class="list-inline tag-list">
						<li><a href="http://www.valencia.es/ayuntamiento/home.nsf/(Portadas1)/$first?opendocument&amp;lang=1" target="_blank">ayuntamiento</a></li>
						<li><a href="http://www.aumsa.es/" target="_blank">aumsa</a></li>
						<li><a href="http://www.aguasdevalencia.es/Grupo/Inicio/" target="_blank">emivasa</a></li>
						<li><a href="http://www.gasnaturalfenosa.com/es/1285338501612/inicio.html" target="_blank">gas natural</a></li>
						<li><a href="http://www.i-de.es" target="_blank">iberdrola</a></li>
						<li><a href="https://www.ono.es/home-clientes/" target="_blank">ono</a></li>
						<li><a href="https://www.telefonica.es/es/" target="_blank">telefónica</a></li>
						<li><a href="http://www.valencia.es/ayuntamiento/trafico.nsf/vPortadasTituloAux/Portada?opendocument&lang=1&nivel=1" target="_blank">movilidad</a></li>
						<li><a href="http://www.valencia.es/urbanismo" target="_blank">urbanismo</a></li>
					</ul>
				  <?php } ?>
				  <?php if($_SESSION['idioma'] == "val"){ ?>
					<h4 class="widget-title">ENLLAÇOS</h4>
					<ul class="list-inline tag-list">
						<li><a href="http://www.valencia.es/ayuntamiento/home.nsf/(Portadas1)/$first?opendocument&amp;lang=1" target="_blank">ajuntament</a></li>
						<li><a href="http://www.aumsa.es/" target="_blank">aumsa</a></li>
						<li><a href="http://www.aguasdevalencia.es/Grupo/Inicio/" target="_blank">emivasa</a></li>
						<li><a href="http://www.gasnaturalfenosa.com/es/1285338501612/inicio.html" target="_blank">gas natural</a></li>
						<li><a href="http://www.i-de.es" target="_blank">iberdrola</a></li>
						<li><a href="https://www.ono.es/home-clientes/" target="_blank">ono</a></li>
						<li><a href="https://www.telefonica.es/es/" target="_blank">telefónica</a></li>
						<li><a href="http://www.valencia.es/ayuntamiento/trafico.nsf/vPortadasTituloAux/Portada?opendocument&lang=2&nivel=1" target="_blank">mobilitat</a></li>
						<li><a href="http://www.valencia.es/urbanismo" target="_blank">urbanisme</a></li>
					</ul>
				  <?php } ?>
				</div>
				<!-- end tags -->
				<!-- END SIDEBAR -->
			</div>

		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->