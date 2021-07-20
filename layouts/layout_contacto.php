<!DOCTYPE html>
<html lang="en">
<?php  require('includes/head.php'); ?>
 <!-- CAPTCHA -->
 <script src='https://www.google.com/recaptcha/api.js'></script>
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
				  <h1 class="page-title pull-left">CONTACTO</h1>
				  <ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Contacto</li>
				  </ol>
				<?php } ?>
				<?php if($_SESSION['idioma'] == "val"){ ?>
				  <h1 class="page-title pull-left">CONTACTE</h1>
				  <ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Contacte</li>
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
					    <?php if($_SESSION['idioma'] == "cas"){ ?>
						  <p>A través de este formulario de contacto puede realizar cualquier tipo de consulta. Nuestro personal estará encantado de informarle y resolver sus dudas.</p>
						  <p>Recuerde ser lo más explícito posible a la hora de detallar su consulta para facilitar el trabajo de nuestro personal y así, agilizar la gestión de la respuesta/solución a su problema. Este servicio puede utilizarlo las 24 horas, los 365 días del año. Ocoval se pondrá en contacto con usted para resolver su consulta en el menor tiempo posible.</p>
						<?php } ?>
						<?php if($_SESSION['idioma'] == "val"){ ?>
						  <p>A través d'este formulari de contacte pot realitzar qualsevol tipus de consulta. El nostre personal estarà encantat d'informar-li i resoldre els seus dubtes.</p>
						  <p>Recorde ser el més explícit possible a l'hora de detallar la seua consulta per a facilitar el treball del nostre personal i així, agilitzar la gestió de la resposta/solució al seu problema. Este servici pot utilitzar-ho les 24 hores, els 365 dies de l'any. Ocoval es posarà en contacte amb vosté per a resoldre la seua consulta en el menor temps possible.</p>
						<?php } ?>
						<br>
						<!-- CONCTACT FORM -->
						<div class="contact-form-wrapper">
						    <?php if($_SESSION['idioma'] == "cas"){ ?>
							 <p style="color:red;">* Campos obligatorios</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							 <p style="color:red;">* Camps obligatoris</p>
							<?php } ?>
							
							<form method="post" action="?r=mailers/contactform" class="form-horizontal margin-bottom-30px" role="form">
								<div class="row">
									<div class="col-sm-6">
										<div class="input-group">
											<?php if($_SESSION['idioma'] == "cas"){ ?>
											  <label for="contact-name" class="control-label sr-only">Nombre</label>
											  <input type="text" class="form-control" id="contact-name" name="name" placeholder="Nombre*" required>
											<?php } ?>
											<?php if($_SESSION['idioma'] == "val"){ ?>
											  <label for="contact-name" class="control-label sr-only">Nom</label>
											  <input type="text" class="form-control" id="contact-name" name="name" placeholder="Nom*" required>
											<?php } ?>
											  
											  <span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="input-group">
											<label for="contact-email" class="control-label sr-only">Email</label>
											<input type="email" class="form-control" id="contact-email" name="email" placeholder="Email*" required>
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										</div>
									</div>
								</div>
								<br />
								<div class="form-group">
									<?php if($_SESSION['idioma'] == "cas"){ ?>
										<label for="contact-subject" class="control-label sr-only">Asunto</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Asunto">
										</div>
									<?php } ?>
									<?php if($_SESSION['idioma'] == "val"){ ?>
										<label for="contact-subject" class="control-label sr-only">Assumpte</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Assumpte">
										</div>
									<?php } ?>									
									
								</div>
								<div class="form-group">
								    <?php if($_SESSION['idioma'] == "cas"){ ?>
									  <label for="contact-message" class="control-label sr-only">Mensaje</label>
									  <div class="col-sm-12">
										<textarea class="form-control" id="contact-message" name="message" rows="5" cols="30" placeholder="Mensaje*" required></textarea>
									  </div>
									<?php } ?>
									<?php if($_SESSION['idioma'] == "val"){ ?>
									  <label for="contact-message" class="control-label sr-only">Missatge</label>
									  <div class="col-sm-12">
										<textarea class="form-control" id="contact-message" name="message" rows="5" cols="30" placeholder="Missatge*" required></textarea>
									</div>
									<?php } ?>
									
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<div class="g-recaptcha" data-sitekey="6LfefCYUAAAAAIgVP47rBudRs1Ztg52dWg8w6APx"></div>
										<br />
										<button id="submit-button" type="submit" class="btn btn-primary"><i class="fa loading-icon"></i> <span>Enviar</span></button>
									</div>
								</div>
								<input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
							</form>
						</div>
						<!-- END CONCTACT FORM -->
					</div>
					<div class="col-md-3">
						<!-- RIGHT SIDEBAR CONTENT -->
						<div class="widget">
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							  <h3 class="widget-title">INFORMACIÓN DE CONTACTO</h3>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							  <h3 class="widget-title">INFORMACIÓ DE CONTACTE</h3>
							<?php } ?>
							<ul class="contact-info fa-ul">
								<li><i class="fa fa-li fa-building-o"></i>Av. Cardenal Benlloch, 75 bajo</li>
								<li><i class="fa fa-li fa-phone"></i> 96 337 02 28</li>
								<li><i class="fa fa-li fa-envelope-o"></i> <a href="mailto:ocoval@ocoval.es">ocoval@ocoval.es</a></li>
							</ul>
						</div>
						<div class="widget">
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							  <h3 class="widget-title">ESTAMOS AQUÍ</h3>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							  <h3 class="widget-title">ESTEM AÇÍ</h3>
							<?php } ?>
							<!--<div class="google-map sidebar-map">
								<div id="custom-map-canvas"></div>
							</div>-->
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7325.304183946304!2d-0.3579045125784123!3d39.47133896607823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604896511bf041%3A0xbac22477b568f36a!2sOficina+Coordinacion+De+Obras+Valencia!5e0!3m2!1ses!2ses!4v1536062241506" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="widget">
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							 <h3 class="widget-title">HORARIO DE REGISTRO</h3>
							 <ul class="list-unstyled" style="margin-top: -10px;">
								<li><strong>Lunes a Viernes: </strong>De 8:30 a 14:00</li>
							 </ul>
							 <br />
							 <h3 class="widget-title">HORARIO DE ATENCIÓN</h3>
							 <ul class="list-unstyled" style="margin-top: -10px;">
								<li><strong>Lunes a Viernes: </strong>De 8:00 a 15:00</li>
							 </ul>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							<h3 class="widget-title">HORARI DE REGISTRE</h3>
							 <ul class="list-unstyled">
								<li><strong>Dilluns a Divendres: </strong>De 8:30 a 14:00</li>
							 </ul>
							 <br />
							 <h3 class="widget-title">HORARI D'ATENCIÓ</h3>
							 <ul class="list-unstyled">
								<li><strong>Dilluns a Divendres: </strong>De 8:00 a 15:00</li>
							 </ul>
							<?php } ?>
						</div>
						<!-- END RIGHT SIDEBAR CONTENT -->
					</div>
				</div>
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
	<script src="assets/js/plugins/google-map/google-map.js"></script>
	<!-- <script src="assets/js/plugins/parsley-validation/parsley.min.js"></script>
	<script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="assets/js/repute-scripts.js"></script> -->
	
</body>

</html>