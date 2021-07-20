		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- COLUMN 1 -->
						<?php if($_SESSION['idioma'] == "cas"){ ?>
						<h3 class="footer-heading">DATOS DE CONTACTO</h3>
						<?php } ?>
						<?php if($_SESSION['idioma'] == "val"){ ?>
						<h3 class="footer-heading">DADES DE CONTACTE</h3>
						<?php } ?>
						<img src="assets/img/logo/ocoval-obras.jpg" style="width:50%;"alt="Ocoval">
						<br /><br />
						<address class="margin-bottom-30px">
							<ul class="list-unstyled">
								<li>Av. Cardenal Benlloch, 75 bajo</li>
								<li> 96 337 02 28</li>
								<li><a href="mailto:ocoval@ocoval.es">ocoval@ocoval.es</a></li>
							</ul>
						</address>
						<!-- END COLUMN 1 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 2 -->
						<?php if($_SESSION['idioma'] == "cas"){ ?>
						 <h3 class="footer-heading">ENLACES HABITUALES</h3>
						<?php } ?>
						<?php if($_SESSION['idioma'] == "val"){ ?>
						 <h3 class="footer-heading">ENLLAÇOS HABITUALS</h3>
						<?php } ?>
						<div class="row margin-bottom-30px">
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
								  <?php if($_SESSION['idioma'] == "cas"){ ?>
									<li><a href="?r=quienes_somos/historia">Acerca de Ocoval</a></li>
									<li><a href="?r=noticias/HemerotecaNoticias">Noticias</a></li>
									<li><a href="?r=servicios/72horas">Comunicar incidencia</a></li>
									<li><a href="?r=contacto/contacto">Contacto</a></li>
								  <?php } ?>
								  <?php if($_SESSION['idioma'] == "val"){ ?>
									<li><a href="?r=quienes_somos/historia">Sobre Ocoval</a></li>
									<li><a href="?r=noticias/HemerotecaNoticias">Notícies</a></li>
									<li><a href="?r=servicios/72horas">Comunicar incidència</a></li>
									<li><a href="?r=contacto/contacto">Contacte</a></li>
								  <?php } ?>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
								  <?php if($_SESSION['idioma'] == "cas"){ ?>
									<li><a href="?r=servicios/mapa">Mapa de obras</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModal">FAQ</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModal">Términos de uso</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModal">Política de privacidad</a></li>
								  <?php } ?>
								  <?php if($_SESSION['idioma'] == "val"){ ?>
									<li><a href="?r=servicios/mapa">Mapa d'obres</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModal">FAQ</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModal">Termes d'ús</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModal">Política de privacitat</a></li>
								  <?php } ?>
								</ul>
							</div>
						</div>
						<!-- END COLUMN 2 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 3 -->
						<?php if($_SESSION['idioma'] == "cas"){ ?>
						<h3 class="footer-heading">INTEGRANTES</h3>
						<?php } ?>
						<?php if($_SESSION['idioma'] == "val"){ ?>
						<h3 class="footer-heading">INTEGRANTS</h3>
						<?php } ?>
						<div class="row margin-bottom-30px" style="font-style:oblique;">
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li>
									 <?php if($_SESSION['idioma'] == "cas"){ ?>
									  <a href="http://www.valencia.es" target="_blank">Ajuntament de València</a>
									 <?php } ?>
									 <?php if($_SESSION['idioma'] == "val"){ ?>
									  <a href="http://www.valencia.es" target="_blank">Ajuntament de València</a>
									 <?php } ?>
									</li>
									<li><a href="https://www.emivasa.es" target="_blank">Emivasa</a></li>
									<li><a href="https://www.nedgia.es" target="_blank">Nedgia Cegas</a></li>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="https://www.iberdrola.es" target="_blank">Iberdrola</a></li>
									<li><a href="http://www.vodafone.es"  target="_blank">Vodafone Ono</a></li>
									<li><a href="https://www.telefonica.es" target="_blank">Telefónica</a></li>
								</ul>
							</div>
						</div>
						<!-- END COLUMN 3 -->
					</div>
					</div>
				</div>
			</div>
			<!-- COPYRIGHT -->
			<div class="text-center copyright" style="color:#eaeaea;">
			   <?php if($_SESSION['idioma'] == "cas"){ ?>
				&copy; OCOVAL 2018 | <a href="http://www.tessq.com/" target="_blank">Diseño Web</a> <a href="http://www.tessq.com/" target="_blank" style="color:white">TESS QUALITY</a>
			   <?php } ?>
			   <?php if($_SESSION['idioma'] == "val"){ ?>
				&copy; OCOVAL 2018 | <a href="http://www.tessq.com/" target="_blank">Disseny Web</a> <a href="http://www.tessq.com/" target="_blank" style="color:white">TESS QUALITY</a>
			   <?php } ?>
			</div>
			<!-- END COPYRIGHT -->
		</footer>
		<?php  require('includes/politica.php'); ?>
