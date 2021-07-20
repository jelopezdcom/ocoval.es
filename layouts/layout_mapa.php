<!DOCTYPE html>
<html lang="es">
<?php  require('includes/head.php'); ?>
<body>
	<!-- WRAPPER -->
	<div class="wrapperhead">
		<!-- NAVBAR -->
		<?php  require('includes/menu.php'); ?>
		<!-- END NAVBAR -->
		<!-- BREADCRUMBS -->
		<div class="page-header">
			<div class="container">
				<?php if($_SESSION['idioma'] == "cas"){ ?>
				  <h1 class="page-title pull-left">MAPA DE OBRAS EN EJECUCIÓN</h1>
				<?php } ?>
				<?php if($_SESSION['idioma'] == "val"){ ?>
				  <h1 class="page-title pull-left">MAPA D'OBRES EN EXECUCIÓ</h1>
				<?php } ?>
				<ol class="breadcrumb">
				  <?php if($_SESSION['idioma'] == "cas"){ ?>
					<li><a href="index.php">Inicio</a></li>
				  <?php } ?>
				  <?php if($_SESSION['idioma'] == "val"){ ?>
					<li><a href="index.php">Inici</a></li>
				  <?php } ?>
					<li class="active">Mapa</li>
				</ol>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<div class="row">
					<br>
					<!-- MAPA -->
					<div class="col-sm-12" id="mapeando">
						<div class="col-sm-9">
							<?php if($_SESSION['idioma'] == "cas"){ ?>
						 	<h2 style="margin-bottom:20px;font-size:22px;">Obras en ejecución</h2>
						 	<p>Haga clic en el icono para ver información de la obra</p>
						    <?php } ?>
						    <?php if($_SESSION['idioma'] == "val"){ ?>
							 <h2 style="margin-bottom:20px;font-size:22px;">Obres en execució</h2>
							 <p>Faça clic en el icono per a veure informació de l'obra</p>
						    <?php } 
						    /* Capturo la fecha por la url */
						    if (isset($_GET['fecha'])){ 
							    $fecha = new DateTime($_GET['fecha']); 
							    $fecha = $fecha->format('Y-m-d');
							    if($fecha >= date('Y-m-d')){
							       $fecha = $fecha;
							    }
							    else{
							       $fecha = date('Y-m-d');
							    }
							}
							else { 
							   $fecha = date('Y-m-d'); 
							}
							if($_SESSION['idioma'] == "cas"){ ?>			
								<p>Obras previstas para el día: <?php $fecha2 = new DateTime($fecha); echo  $fecha3 = $fecha2->format('d-m-Y'); ?></p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							 	<p>Obres previstes per al dia: <?php $fecha2 = new DateTime($fecha); echo  $fecha3 = $fecha2->format('d-m-Y'); ?></p>
						    <?php } ?>
							<iframe class="iframemapa" src="includes/mapa.php?fecha=<?php echo $fecha; ?>"></iframe>
						</div>

						<div class="col-sm-3">
							<?php if($_SESSION['idioma'] == "cas"){ ?>
								<h2 style="margin-bottom:20px;font-size:22px;text-align:center;">Buscador de calles</h2>
							 <?php } ?>
							 <?php if($_SESSION['idioma'] == "val"){ ?>
								<h2 style="margin-bottom:20px;font-size:22px;text-align:center;">Buscador de carrers</h2>
							 <?php } ?>
							<div class="boxed-content">
								<i class="fa fa-map-signs hidden-xs" style="margin-top: 40px;"></i>
							</div>
							<br />
							<div class="searchbox" style="width:100%;">
								<div class="input-group input-group-sm">
									<input type="text" name="callebuscada"  id="pac-input" onclick="vaciaresultados()" class="form-control" placeholder="<?php if($_SESSION['idioma'] == "cas"){ echo "BÚSQUEDA POR CALLE"; } if($_SESSION['idioma'] == "val"){ echo "BUSCA PER CARRER"; }?>">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit" name="submit2"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</div>	
							<div class="visible-xs"><br /><br /><br /><br /></div>
						</div>
					</div>	
					<script>
					function vaciaresultados(){
						document.getElementById("pac-input").value = "";
					}
					</script>
					<!-- /MAPA --> 

					<!-- CALENDARIO JS -->
					<div class="col-md-12" style="margin-top:50px;">
						<div class="calendar-box" id="calendario">
						</div>
					</div>
					<!-- /CALENDARIO -->	

					</div>
					<!-- FAQS HELPER -->
						<div class="text-center">
							<br /><br />
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							 <h4>¿Alguna pregunta?</h4>
							 <p>Principales funciones de esta pantalla</p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							 <h4>Alguna pregunta?</h4>
							 <p>Principals funcions d'esta pantalla</p>
							<?php } ?>
							<ul class="list-inline faq-further-links-list">
								<li>
								  <?php if($_SESSION['idioma'] == "cas"){ ?>
									<p style="color:#406da4;"><b>Obras activas</b></p>
									<p class="text-muted">En el mapa de obras en ejecución puede ver todas las obras que se están realizando en la ciudad, pinchando encima del icono de la obra, podrá consultar datos de esa obra concreta.</p>
								  <?php } ?>
								  <?php if($_SESSION['idioma'] == "val"){ ?>
									<p style="color:#406da4;"><b>Obres actives</b></p>
									<p class="text-muted">En el mapa d'obres en execució pot veure totes les obres que s'estan realitzant en la ciutat, punxant damunt de la icona de l'obra, podrà consultar dades d'eixa obra concreta.</p>
								  <?php } ?>
								</li>
								<li>
								  <?php if($_SESSION['idioma'] == "cas"){ ?>
									<p style="color:#406da4;"><b>Campo de búsqueda por calle</b></p>
									<p class="text-muted">Puede realizar la búsqueda de una calle concreta, selecionando la dirección propuesta, el mapa le mostrará esa dirección pudiendo ver las obras cercanas.</p>
								  <?php } ?>
								  <?php if($_SESSION['idioma'] == "val"){ ?>
									<p style="color:#406da4;"><b>Camp de búsqueda per carrer</b></p>
									<p class="text-muted">Pot realitzar la busca d'un carrer concreta, selecionando la direcció proposada, el mapa li mostrarà eixa direcció podent veure les obres pròximes.</p>
								  <?php } ?>
								</li>
								<li>
									<?php if($_SESSION['idioma'] == "cas"){ ?>
									 <p style="color:#406da4;"><b>Calendario</b></p>
									 <p>Desplácese por el calendario para consultar un día y un mes concreto, clicando en el día, el mapa de obras se cargará con las obras previstas para esa fecha concreta.</p>
									<?php } ?>
									<?php if($_SESSION['idioma'] == "val"){ ?>
									<p style="color:#406da4;"><b>Calendari</b></p>
									 <p>Desplace's pel calendari per a consultar un dia i un mes concret, clicando en el dia, el mapa d'obres es carregarà amb les obres previstes per a eixa data concreta.</p>
									<?php } ?>
								</li>
							</ul>
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							 <p class="bottom-30px">¿Tiene alguna duda? <a href="?r=contacto/contacto"> <i class="fa fa-share" aria-hidden="true"></i> Contacte con nosotros</a></p>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							 <p class="bottom-30px">Té algun dubte? <a href="?r=contacto/contacto"> <i class="fa fa-share" aria-hidden="true"></i> Contacte amb nosaltres</a></p>
							<?php } ?>
						</div>
						<!-- END FAQS HELPER -->
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
	<script src="assets/js/repute-scripts.js"></script>

	<!-- Calendario nuevo -->
	<script src="assets/js/CAL_JS_comportamiento.js"></script>
</body>

</html>
