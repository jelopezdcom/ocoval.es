<!DOCTYPE html>
<html lang="en">
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
					<h1 class="page-title pull-left">INCIDENCIAS EN VÍA PÚBLICA</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Inicio</a></li>
						<li class="active">Incidencias en vía pública</li>
					</ol>
				<?php } ?>
				<?php if( $_SESSION['idioma'] == "val"){ ?>
				 <h1 class="page-title pull-left">INCIDÈNCIES EN VIA PÚBLICA</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Inici</a></li>
						<li class="active">Incidències en vía pública</li>
					</ol>
				<?php } ?>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<section>
					<iframe id="iframe" src="https://ocoval.sigoincidencias.com/web/desktop.html" scrolling="no" frameborder="0" align="center" allowtransparency="true" allowfullscreen="true" style="margin-top: 20px;margin-bottom: 20px;z-index: 10;position: relative;
					    width:100%;
					    height:650px;
					    background: #C3C3C3;
					    border-radius: 3px;
					    box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
					</iframe>		
					<br>
					<br>
					<!-- BOXED CONTENT -->
					<div class="row">
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-flag"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<h2 class="boxed-content-title">RAPIDEZ</h2>
									<p>La Oficina de Coordinación de Obras de Valencia, entre otras funciones, se ocupa de recibir las reclamaciones de la ciudadanía.</p>
								<?php } ?>     
								<?php if( $_SESSION['idioma'] == "val"){ ?>
									<h2 class="boxed-content-title">RAPIDESA</h2>
									<p>L'Oficina de Coordinació d'Obres de València, entre altres funcions, s'ocupa de rebre les reclamacions de la ciutadania.</p>
								<?php } ?>							
							</div>
						</div>
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-globe"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<h2 class="boxed-content-title">EFICACIA</h2>
									<p>El servicio 72 horas "València Siempre Nueva" nace con la intención de que las infraestructuras mantengan un nivel de calidad digno.</p>
								<?php } ?>
								<?php if( $_SESSION['idioma'] == "val"){ ?>
									<h2 class="boxed-content-title">EFICÀCIA</h2>
									<p>El servici 72 hores "València Sempre Nova" naix amb la intenció que les infraestructures mantinguen un nivell de qualitat digne.</p>
								<?php } ?>									
							</div>
						</div>
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-cog"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								   <h2 class="boxed-content-title">COMPROMISO</h2>
								   <p>El servicio 72 horas tiene como objetivo garantizar el óptimo mantenimiento de las calles de nuestra ciudad.</p>
								<?php } ?>	
								<?php if( $_SESSION['idioma'] == "val"){ ?>
								   <h2 class="boxed-content-title">COMPROMÍS</h2>
								   <p>El servici 72 hores té com a objectiu garantir l'òptim manteniment dels carrers de la nostra ciutat.</p>
								<?php } ?>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-line-chart"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<h2 class="boxed-content-title">SIEMPRE NUEVA</h2>
									<p>Ponemos a disposición de la ciudadanía un teléfono de atención gratuito 900 72 11 72 donde nos pueden comunicar los desperfectos que detecten en sus barrios.</p>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
									<h2 class="boxed-content-title">SEMPRE NOVA</h2>
									<p>Posem a disposició de la ciutadania un telèfon d'atenció gratuït 900 72 11 72 on ens poden comunicar els desperfectes que detecten en els seus barris.</p>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-trophy"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<h2 class="boxed-content-title">RESPONSABILIDAD</h2>
									<p>Participe y colabore con el <span style="font-style:italic;">Ajuntament de València</span> para mejorar nuestra calidad de vida y aumentar los niveles de eficiencia y eficacia de los Servicios Públicos Municipales.</p>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
									<h2 class="boxed-content-title">RESPONSABILITAT</h2>
									<p>Participe i col·labore amb l'Ajuntament de València per a millorar la nostra qualitat de vida i augmentar els nivells d'eficiència i eficàcia dels Servicis Públics Municipals.</p>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-sitemap"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
									<h2 class="boxed-content-title">ORGANIZACIÓN</h2>
									<p> Por favor, indique su nombre, correo electrónico o nº de teléfono y localización exacta de la incidencia, especificando la calle y el número, y si está en acera o calzada.</p>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
									<h2 class="boxed-content-title">ORGANITZACIÓ</h2>
									<p> Per favor, indique el seu nom, correu electrònic o núm. de telèfon i localització exacta de la incidència, especificant el carrer i el número, i si està en vorera o calçada.</p>
								<?php } ?>
							</div>
						</div>
					</div>
					<!-- END BOXED CONTENT -->
				<!-- END TESTIMONIAL -->
				<hr class="margin-bottom-50px">
				<!-- OUR CLIENTS -->
				<?php
					echo $contenido;
				?>
				<!-- END OUR CLIENTS -->
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
	<script src="assets/js/plugins/slick/slick.min.js"></script>
	<script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="assets/js/repute-scripts.js"></script>
	
</body>

</html>