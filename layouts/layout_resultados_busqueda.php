<!DOCTYPE html>
<html lang="es">
<?php  require('includes/head.php'); ?>
<body>
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- NAVBAR -->
		<?php  require('includes/menu.php'); ?>
		<!-- END NAVBAR -->
		<!-- BREADCRUMBS -->
		<div class="page-header">
			<div class="container">
			  <?php if($_SESSION['idioma'] == "cas"){ ?>
				<h1 class="page-title pull-left">RESULTADOS ENCONTRADOS...</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
				</ol>
			  <?php } ?>
			  <?php if($_SESSION['idioma'] == "val"){ ?>
				<h1 class="page-title pull-left">RESULTATS TROBATS...</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
				</ol>
			  <?php } ?>
			  
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content page-search-result">
			<div class="container">
				<?php $numeroresultados = count($resultados[1])+count($resultados[0]); ?>
				<?php if($_SESSION['idioma'] == "cas"){ ?>
				  <h2><?php echo $numeroresultados; ?> resultados para la búsqueda: <strong>"<?php echo $resultados[3]; ?>"</strong></h2>
				<?php } ?>
				<?php if($_SESSION['idioma'] == "val"){ ?>
				  <h2><?php echo $numeroresultados; ?> resultats per a la recerca: <strong>"<?php echo $resultados[3]; ?>"</strong></h2>
				<?php } ?>
				<!-- Search Form -->
				<form class="form form-horizontal" method="post" action="?r=contacto/busqueda">
					<div class="input-group input-group-lg">
						<div class="input-group-btn">

						</div>
						<input class="form-control input-lg" type="search" name="busqueda" placeholder="realizar otra búsqueda" />
						<span class="input-group-btn">
						<button type="submit" class="btn btn-primary btn-lg"><i class="icon ion-android-search"></i> Buscar</button>
					</span>
					</div>
				</form>
				<!-- End Search Form -->
				<!-- Search Results -->
				<ul class="list-unstyled list-results">

					<?php 
					$contenidodioma = "contenido_noticia_".$_SESSION['idioma'];
					foreach ($resultados[2] as $valor) { ?>
						
					<li class="type-portfolio">
						<div class="media clearfix">
							<a href="?r=noticias/vistaunica&id=<?php echo $valor['id_noticia']; ?>" class="pull-left"><img src="<?php echo $valor['ruta_imagen_noticia']?>" alt="Search Result" class="media-object" style="margin-top:45px;margin-right:-25px;"></a>
							<div class="media-body">
							    <?php if($_SESSION['idioma'] == "cas"){ ?>
								  <h2 style="color:#406da4;">Encontrado en Noticias</h2>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								  <h2 style="color:#406da4;">Trobat en Noticies</h2>
								<?php } ?>
								<div style="padding-left:50px;">
									<h3 style="color:#406da4;">
										<?php $contenidotitulo = "titulo_noticia_".$_SESSION['idioma']; echo $valor[$contenidotitulo]; ?>
									</h3>
									<p><?php echo $valor[$contenidodioma]; ?></p></div>
								<br /><br />
								<h5><a href="?r=noticias/vistaunica&id=<?php echo $valor['id_noticia']; ?>">VISITAR LA PÁGINA</a></h5>
							</div>
						</div>
					</li>
					<hr>
					<?php	} ?>


					<?php 
					$contenidodioma = "contenido_hc_".$_SESSION['idioma'];
					foreach ($resultados[0] as $valor) { ?>
						
					<li class="type-portfolio">
						<div class="media clearfix">
							<div class="media-body">
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								<h2 style="color:#406da4;">Encontrado en <?php echo $valor['titulo_hc']; ?></h2>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								<h2 style="color:#406da4;">Trobat en <?php echo $valor['titulo_hc']; ?></h2>
								<?php } ?>
								<div style="padding-left:50px;"><p><?php echo $valor[$contenidodioma]; ?></p></div>
								<br /><br />
								<h5><a href="<?php echo $valor['link']; ?>">VISITAR LA PÁGINA</a></h5>
							</div>
						</div>
					</li>
					<hr>
					<?php	} ?>

					<?php 
					$contenidodioma = "contenido_servicio_".$_SESSION['idioma'];
					foreach ($resultados[1] as $valor) { ?>
						
					<li class="type-portfolio">
						<div class="media clearfix">
							<div class="media-body">
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								<h2 style="color:#406da4;">Encontrado en <?php echo $valor['titulo_servicio']; ?></h2>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								<h2 style="color:#406da4;">Trobat en <?php echo $valor['titulo_servicio']; ?></h2>
								<?php } ?>
								<p><?php echo $valor[$contenidodioma]; ?></p>
								<br /><br />
								<h5><a href="<?php echo $valor['link']; ?>">VISITAR LA PÁGINA</a></h5>
							</div>
						</div>
					</li>
					<hr>
					<?php	} ?>

				</ul>
				<!-- End Search Results -->
			</div>
		</div>
		<!-- END PAGE CONTENT -->
		<!-- FOOTER -->
		<?php  require('includes/footer.php'); ?>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="assets/js/repute-scripts.js"></script>
	
</body>

</html>
