<div class="page-header">
			<div class="container">
			   <?php if($_SESSION['idioma'] == "cas"){ ?>
				 <h1 class="page-title pull-left">COMPROMISO</h1>
				 <ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Compromiso</li>
				 </ol>
			   <?php } ?>
			   <?php if($_SESSION['idioma'] == "val"){ ?>
				 <h1 class="page-title pull-left">COMPROMÍS</h1>
				 <ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Compromís</li>
				 </ol>
			   <?php } ?>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<section>
					<div class="row">
						<div class="col-md-6">
							<!-- FANCY TESTIMONIAL -->
							<section class="testimonial-fancy">
								<div class="testimonial-body fadeIn">
									<h2 class="sr-only">TESTIMOMIAL</h2>
									<i class="fa fa-quote-left"></i>
									<?php if($_SESSION['idioma'] == "cas"){ ?>
									  <p class="testimonial-bubble">
										Estoy muy satisfecho con OCOVAL por la rápida tramitación de la licencia y por la buena predisposición a ayudar en la resolución de los problemas. Trato amable y atención exquisita.
									  </p>
									<?php } ?>
									<?php if($_SESSION['idioma'] == "val"){ ?>
									  <p class="testimonial-bubble">
										Estic molt satisfet amb OCOVAL per la ràpida tramitació de la llicència i per la bona predisposició a ajudar en la resolució dels problemes. Tracte amable i atenció exquisita.
									  </p>
									<?php } ?>
									<!--<div class="testimonial-author">
										<img src="assets/img/team/person4.png" alt="Author" class="pull-left">
										<span><span class="author-name">Roberto Lloret</span> <em>Vecino del barrio del cabañal</em></span>
									</div>-->
								</div>
							</section>
							<!-- END FANCY TESTIMONIAL -->
						</div>
						<div class="col-md-6">
							<img src="assets/img/compromiso.png" alt="Torres" class="img-thumbnail">
						</div>
					</div>
					<br>
						<?php $contenido="contenido_hc_".$_SESSION['idioma']; echo $compromiso[$contenido]; ?>
				</section>
			</div>
		</div>