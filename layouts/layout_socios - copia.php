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
				<h1 class="page-title pull-left">SOCIOS</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Socios</li>
				</ol>
			  <?php } ?>
			  <?php if($_SESSION['idioma'] == "val"){ ?>
				<h1 class="page-title pull-left">SOCIS</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Socis</li>
				</ol>
			  <?php } ?>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
								<div class="row">
					<div class="col-md-8">
						<section>
							<p><?php $contenido = "contenido_hc_".$_SESSION['idioma']; echo $socios[$contenido]; ?></p>
						</section>
					</div>
					<div class="col-md-4">
						<section>
							<ul class="list-unstyled project-detail-list">
								<li>
									<div class="testimonial-body">
										<div class="testimonial-author" style="padding-top: 0px;">
											<a href="http://www.valencia.es" target="_blank">
												<img src="assets/img/user6.png" alt="Author" class="pull-left" style="width:25px;height:25px;">
												<span><span class="author-name">Ajuntament de València</span> 
												<?php if($_SESSION['idioma'] == "cas"){ ?>
												 <em style="font-style: italic;">Àrea de Desenvolupament Urbá i Vivenda </em></span>
												<?php } ?>
												<?php if($_SESSION['idioma'] == "val"){ ?>
												 <em style="font-style: italic;">Àrea de Desenvolupament Urbá i Vivenda </em></span>
												<?php } ?>
											</a>	
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial-body">
										<div class="testimonial-author" style="padding-top: 0px;">
											<a href="https://www.telefonica.es" target="_blank">
												<img src="assets/img/user2.png" alt="Author" class="pull-left" style="width:25px;height:25px;">
												<span><span class="author-name">Telefónica</span> 											
												<?php if($_SESSION['idioma'] == "cas"){ ?>
												 <em>Telecomunicaciones</em></span>
												<?php } ?>
												<?php if($_SESSION['idioma'] == "val"){ ?>
												 <em>Telecomunicacions</em></span>
												<?php } ?>
											</a>	
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial-body">
										<div class="testimonial-author" style="padding-top: 0px;">
											<a href="http://www.iberdrola.es" target="_blank">
												<img src="assets/img/user3.png" alt="Author" class="pull-left" style="width:25px;height:25px;">
												<span><span class="author-name">Iberdrola</span> 												
												<?php if($_SESSION['idioma'] == "cas"){ ?>
												 <em>Energía</em></span>
												<?php } ?>
												<?php if($_SESSION['idioma'] == "val"){ ?>
												 <em>Energia</em></span>
												<?php } ?>
											</a>	
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial-body">
										<div class="testimonial-author" style="padding-top: 0px;">
											<a href="http://www.vodafone.es"  target="_blank">
												<img src="assets/img/user4.png" alt="Author" class="pull-left" style="width:25px;height:25px;">
												<span><span class="author-name">Vodafone Ono</span> 
												<?php if($_SESSION['idioma'] == "cas"){ ?>
												 <em>Telecomunicaciones</em></span>
												<?php } ?>
												<?php if($_SESSION['idioma'] == "val"){ ?>
												 <em>Telecomunicacions</em></span>
												<?php } ?>
											</a>	
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial-body">
										<div class="testimonial-author" style="padding-top: 0px;">
											<a href="https://www.nedgia.es" target="_blank">
												<img src="assets/img/user5.png" alt="Author" class="pull-left" style="width:25px;height:25px;">
												<span><span class="author-name">Nedgia Cegas</span> 
												<?php if($_SESSION['idioma'] == "cas"){ ?>
												 <em>Energía</em></span>
												<?php } ?>
												<?php if($_SESSION['idioma'] == "val"){ ?>
												 <em>Energia</em></span>
												<?php } ?>
											</a>	
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial-body">
 										<div class="testimonial-author" style="padding-top: 0px;">
 											<a href="https://www.emivasa.es" target="_blank">
												<img src="assets/img/user1.png" alt="Author" class="pull-left" style="width:25px;height:25px;">
												<span><span class="author-name">Emivasa</span> 											
												<?php if($_SESSION['idioma'] == "cas"){ ?>
												 <em>Aguas potables</em></span>
												<?php } ?>
												<?php if($_SESSION['idioma'] == "val"){ ?>
												 <em>Aigües potables</em></span>
												<?php } ?>
											</a>	
										</div>
									</div>
								</li>
							</ul>
							<!--<a href="#" class="btn btn-default"><i class="fa fa-external-link"></i> Visit Website</a>-->
						</section>
					</div>
				</div>
				
				<hr>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="portfolio-media media-carousel">
						<div><img src="assets/img/portfolio/single/bicycle.jpg" class="img-responsive" alt="Portfolio Item"></div>
						<div><img src="assets/img/portfolio/single/blurred_lines.jpg" class="img-responsive" alt="Portfolio Item"></div>
						<div><img src="assets/img/portfolio/single/edge.jpg" class="img-responsive" alt="Portfolio Item"></div>
						<div><img src="assets/img/portfolio/single/logoonogrande.jpg" class="img-responsive" alt="Portfolio Item"></div>
						<div><img src="assets/img/portfolio/single/gas_natural.jpg" class="img-responsive" alt="Portfolio Item"></div>
						<div><img src="assets/img/portfolio/single/emivasagrande.jpg" class="img-responsive" alt="Portfolio Item"></div>
					</div>
				</div>	
				<div class="col-md-2"></div>
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
	<script src="assets/js/plugins/slick/slick.js"></script>
	<script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="assets/js/repute-scripts.js"></script>
	
</body>

</html>
