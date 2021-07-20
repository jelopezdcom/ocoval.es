
		<div class="page-header">
			<div class="container">
			  <?php if($_SESSION['idioma'] == "cas"){ ?>
				<h1 class="page-title pull-left">HISTORIA</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Historia</li>
				</ol>
			  <?php } ?>
			  <?php if($_SESSION['idioma'] == "val"){ ?>
				<h1 class="page-title pull-left">HISTÒRIA</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Història</li>
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
							<img src="assets/img/plazaayuntamiento.jpg" class="img-rounded" style="width:100%;">
						</div>

						<div class="col-md-6 pullDown">
							<br />
							<?php if($_SESSION['idioma'] == "cas"){ ?>
						<b>En la Oficina de Coordinación de Obras de Valencia estamos a su servicio para:</b>
						<br /><br />
						<p>• Tramitar las licencias de <b>acometidas</b> de servicios a su edificio.</p>
						<p>• Atenderle y gestionar las <b>incidencias</b> detectadas en la conservación de la vía pública.</p>
						<p>• Tramitar las licencias para colocar <b>soportes publicitarios</b> en parcelas y medianeras.</p>
						<p>• <b>Informarle</b> de las obras en vía pública que se están ejecutando en la ciudad y de las previstas.</p>
						<p>• Facilitarle la <b>comunicación</b> con las compañías de servicios y el <span style="font-style: italic;">Ajuntament de València</span>.</p>
						<p>• <b>Velar</b> por la calidad y la seguridad de las zanjas de particulares y compañías de servicios públicos que se ejecutan en València.</p>
					  <?php } ?>
					  <?php if($_SESSION['idioma'] == "val"){ ?>
						<b>En l'Oficina de Coordinació d'Obres de València estem al seu servici per a:</b>
						<br /><br />
						<p>• Tramitar les llicències de <b>connexions</b> de servicis al seu edifici.</p> 
						<p>• Atendre-li i gestionar les <b>incidències</b> detectades en la conservació de la via pública.</p>
						<p>• Tramitar les llicències per a col·locar <b>suports publicitaris</b> en parcel·les i mitgeres.</p>
						<p>• <b>Informar-li</b> de les obres en via pública que s'estan executant en la ciutat i de les previstes.</p>
						<p>• Facilitar-li la <b>comunicació</b> amb les companyies de servicis i l'Ajuntament de València.</p>
						<p>• <b>Vetlar</b> per la qualitat i la seguretat de les rases de particulars i companyies de servicis públics que s'executen a València.</p>  
					  <?php } ?>
						</div>
							
						<div class="col-md-12">
							<br>
							<p><?php $contenido = "contenido_hc_".$_SESSION['idioma']; echo $historia[$contenido]; ?></p>
						</div>
						<div class="col-md-12 misionvision">
							<hr>
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							 <h3>NUESTRA MISIÓN<p style="font-size:75%;margin-top:5px;">Gestión y Eficacia</p></h3>
							 <br />
							 <p class="lead"><span class="dropcap dropcap-big"><i class="fa fa-cogs"></i></span>Nuestro objetivo es realizar eficazmente todas las gestiones de la vía pública de nuestra competencia como puente entre la administración local, la ciudadanía y las compañías de servicios públicos.</p>
							 <br />
							 <h3>NUESTRA VISIÓN<p style="font-size:75%;margin-top:5px;">Servicio y Calidad</p></h3>
							 <br />
							 <p class="lead"><span class="dropcap dropcap-big"><i class="fa fa-eye"></i></span>
							 Nuestra vocación es lograr el mayor grado de satisfacción y ofrecer el mejor servicio para hacer una València mejor.
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							 <h3>LA NOSTRA MISSIÓ<p style="font-size:75%;margin-top:5px;">Gestió i Eficàcia</p></h3>
							 <br />
							 <p class="lead"><span class="dropcap dropcap-big"><i class="fa fa-cogs"></i></span>El nostre objectiu és realitzar eficaçment totes les gestions de la via pública de la nostra competència com a pont entre l'administració local, la ciutadania i les companyies de servicis públics.</p>
							 <br />
							 <h3>LA NOSTRA VISIÓ<p style="font-size:75%;margin-top:5px;">Servici i Qualitat</p></h3>
							 <br />
							 <p class="lead"><span class="dropcap dropcap-big"><i class="fa fa-eye"></i></span>
							 La nostra vocació és aconseguir el major grau de satisfacció i oferir el millor servici per a fer una València millor.
							<?php } ?>
							
							<hr>
						</div>	
					</div>
				</section>
			</div>
		</div>