<!DOCTYPE html>
<html lang="es">
<?php  require('includes/head.php'); ?>
<body>
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- NAVBAR -->
		<?php  require('includes/menu.php'); ?>
		<!-- END NAVBAR -->
		<!-- LATEST NEWS -->
		<?php
			echo $contenido;
		?>
		<!-- END LATEST NEWS -->
		<!-- RECENT WORKS -->
		<section class="recent-works">
			<div class="container">
			    <?php if($_SESSION['idioma'] == "cas"){ ?>
				<h3>NUESTROS SERVICIOS</h3>
				<?php } ?>
				<?php if($_SESSION['idioma'] == "val"){ ?>
				<h3>ELS NOSTRES SERVICIS</h3>
				<?php } ?>
				<br />
				<div class="clearfix"></div>
				<div class="portfolio-static">
					<div class="row">
					
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
								   <?php if($_SESSION['idioma'] == "cas"){ ?>
									<h3 class="title">Obras</h3>
								   <?php } ?>
								   <?php if($_SESSION['idioma'] == "val"){ ?>
									<h3 class="title">Obres</h3>
								   <?php } ?>
								</div>
								<div class="media-wrapper">
									<img src="assets/img/portfolio/800x500/work7.jpg" alt="Item Thumbnail" />
								</div>
							</div>
						</div>
						<div class="hidden-lg hidden-md visible-sm visible-xs"><br /></div>
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
								  <?php if($_SESSION['idioma'] == "cas"){ ?>
									<h3 class="title">Incidencias</h3>
								  <?php } ?>
								  <?php if($_SESSION['idioma'] == "val"){ ?>
									<h3 class="title">Incidències</h3>
								  <?php } ?>
								</div>
								<div class="media-wrapper">
									<img src="assets/img/portfolio/800x500/work2.jpg" alt="Item Thumbnail" />
								</div>
							</div>
						</div>
						<div class="hidden-lg hidden-md visible-sm visible-xs"><br /></div>
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
								 <?php if($_SESSION['idioma'] == "cas"){ ?>
									<h3 class="title">Soportes publicitarios</h3>
								 <?php } ?>
								 <?php if($_SESSION['idioma'] == "val"){ ?>
									<h3 class="title">Suports publicitaris</h3>
								 <?php } ?>
								</div>
								<div class="media-wrapper">
									<img src="assets/img/portfolio/800x500/work4.jpg" alt="Item Thumbnail" />
								</div>
							</div>
						</div>
					</div>
					<br />	
				</div>
			</div>
		</section>
		<!-- END RECENT WORKS -->
		<!-- CALL-TO-ACTION -->
		<section class="call-to-action">
			<div class="container">
				<div class="pull-left">
				  <?php if($_SESSION['idioma'] == "cas"){ ?>
					<h2 class="section-heading">CONTACTE CON NOSOTROS</h2>
				  <?php } ?>
				  <?php if($_SESSION['idioma'] == "val"){ ?>
					<h2 class="section-heading">CONTACTE AMB NOSALTRES</h2>
				  <?php } ?>
				</div>
				<div class="pull-right linkcontact">
				   <?php if($_SESSION['idioma'] == "cas"){ ?>
					 <span><i class="fa fa-li fa-phone"></i> 96 337 02 28 </span>&nbsp;&nbsp;<a href="?r=contacto/contacto" class="btn btn-lg btn-primary">CONTACTO</a>
				   <?php } ?>
				   <?php if($_SESSION['idioma'] == "val"){ ?>
					 <span><i class="fa fa-li fa-phone"></i> 96 337 02 28 </span>&nbsp;&nbsp;<a href="?r=contacto/contacto" class="btn btn-lg btn-primary">CONTACTE</a>
				   <?php } ?>
				</div>
			</div>
		</section>
		<!-- END CALL-TO-ACTION -->
		<!-- FOOTER -->
		<?php  require('includes/footer.php'); ?>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins/slick/slick.js"></script>
	<script src="assets/js/repute-scripts.js"></script>
	
</body>

</html>
