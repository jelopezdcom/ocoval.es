		<div class="page-header">
			<div class="container">
			    <?php if($_SESSION['idioma'] == "cas"){ ?>
				 <h1 class="page-title pull-left">AJUNTAMENT DE VALÈNCIA</h1>
				 <ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Ajuntament de València</li>
				 </ol>
				<?php } ?>
				<?php if($_SESSION['idioma'] == "val"){ ?>
				 <h1 class="page-title pull-left">AJUNTAMENT DE VALÈNCIA</h1>
				 <ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Ajuntament de València</li>
				 </ol>
				<?php } ?>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<section>
					<!-- BOXED CONTENT -->
					<div class="row slideRight">
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-folder-open"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								  <h2 class="boxed-content-title">ADMINISTRACIÓN</h2>
								  <p>La Oficina de Coordinación de Obras de Valencia es la oficina de gestión que te une a la Administración.</p>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								  <h2 class="boxed-content-title">ADMINISTRACIÓ</h2>
								  <p>L'Oficina de Coordinació d'Obres de València és l'oficina de gestió que t'unix a l'Administració.</p>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-flag"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								  <h2 class="boxed-content-title">LICENCIAS MUNICIPALES</h2>
								  <p>OCOVAL se encarga de la tramitación de las licencias municipales de zanjas y soportes publicitarios.</p>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								  <h2 class="boxed-content-title">LLICÈNCIAS MUNICIPALS</h2>
								  <p>OCOVAL s'encarrega de la tramitació de les llicències municipals de rases i suports publicitaris.</p>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-cogs"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								  <h2 class="boxed-content-title">COLABORACIÓN</h2>
								  <p>La colaboración entre Administración y Empresas permite multiplicar los esfuerzos orientados a servir a la ciudad y a su ciudadanía.</p>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								  <h2 class="boxed-content-title">COL·LABORACIÓ</h2>
								  <p>La col·laboració entre Administració i Empreses permet multiplicar els esforços orientats a servir a la ciutat i a la seua ciutadania.</p>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="row slideRight">
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-users"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								  <h2 class="boxed-content-title">COORDINACIÓN</h2>
								  <p>La coordinación de las obras, reduciendo su impacto en las calles, convierte a València en una ciudad más habitable.</p>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								  <h2 class="boxed-content-title">COORDINACIÓ</h2>
								  <p>La coordinació de les obres, reduint el seu impacte en els carrers, convertix a València en una ciutat més habitable.</p>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-search"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								  <h2 class="boxed-content-title">INSPECCIÓN</h2>
								  <p>Vigilando constantemente las obras, soportes y otros elementos de la vía pública para que se cumplan las ordenanzas municipales.</p>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								  <h2 class="boxed-content-title">INSPECCIÓ</h2>
								  <p>Vigilant constantment les obres, suports i altres elements de la via pública perquè es complisquen les ordenances municipals.</p>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="boxed-content left-aligned left-boxed-icon">
								<i class="fa fa-wrench"></i>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								  <h2 class="boxed-content-title">MANTENIMIENTO</h2>
								  <p>Una València siempre nueva, garantizando el óptimo mantenimiento de las calles de nuestra ciudad.</p>
							    <?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								  <h2 class="boxed-content-title">MANTENIMENT</h2>
								  <p>Una València sempre nova, garantint l'òptim manteniment dels carrers de la nostra ciutat.</p>
							    <?php } ?>
							</div>
						</div>
					</div>
					<br />
					<div class="col-md-12" style="margin-bottom:50px;">
						<img src="assets/img/ayuntamiento.jpg" alt="Torres" class="img-thumbnail">
					</div>
					
					<?php $contenido = "contenido_hc_".$_SESSION['idioma']; echo $ayuntamiento[$contenido]; ?></p>
					<!-- END BOXED CONTENT -->
				</section>
				
			</div>
		</div>