<nav class="navbar navbar-default " role="navigation">
			<div class="container"> 
				<!-- TOPBAR -->
				<div class="topbar">
					<div class="searchbox hidden-xs">
						<form method="post" action="?r=contacto/busqueda">
							<div class="input-group input-group-sm">
								<input type="text" name="busqueda" class="form-control" placeholder="BÚSQUEDA">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<ul class="list-inline top-nav pull-right loginempre">
						<li>
						   <?php if($_SESSION['idioma'] == "cas"){ ?>
							<a href="empresas" target="_blank"><i class="fa fa-user"></i> LOGIN EMPRESAS</a>
							<!--<a href="http://cias.ocoval.com/empresas/login.php" target="_blank"><i class="fa fa-user"></i> LOGIN EMPRESAS</a>-->
						   <?php } ?>
						   <?php if($_SESSION['idioma'] == "val"){ ?>
							<a href="empresas" target="_blank"><i class="fa fa-user"></i> LOGIN EMPRESES</a>
						   <!--<a href="http://cias.ocoval.com/empresas/login.php" target="_blank"><i class="fa fa-user"></i> LOGIN EMPRESES</a>-->
						   <?php } ?>
						</li>
					</ul>	
				</div>
				<!-- END TOPBAR -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>

					<div class="logoscabecera">
						<a href="index.php" class="navbar-brand navbar-logo navbar-logo-bigger">
							<img src="assets/img/logo/ocoval-obras.jpg" alt="Ocoval" class="logooco">
						</a>	
						<a href="https://www.valencia.es/ayuntamiento/home.nsf/(Portadas1)/$first?opendocument&amp;lang=1" target="_blank" class="navbar-brand navbar-logo navbar-logo-bigger">
							<img src="assets/img/logo/ajuntament-valencia.jpg" alt="Ajuntament" class="logoval">
						</a>

						<div class="loginresponsive">
							<a href="http://cias.ocoval.com/empresas/login.php" target="_blank"><i class="fa fa-user logres"></i></a>
						</div>	
					</div>

				</div>
				<!-- MAIN NAVIGATION -->
				<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden-xs hidden-sm">
							<a href="index.php"><i class="fa fa-home"></i></a>
						</li>
						<li class="dropdown active">
						   <?php if($_SESSION['idioma'] == "cas"){ ?>
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">QUIENES SOMOS <i class="fa fa-angle-down"></i></a>
							 <ul class="dropdown-menu" role="menu">
								<li><a href="?r=quienes_somos/historia">Historia</a></li>
								<li><a href="?r=quienes_somos/compromiso">Compromiso</a></li>
								<li><a href="?r=quienes_somos/socios">Socios</a></li>
								<li><a href="?r=quienes_somos/ayuntamiento">Ajuntament de València</a></li>
								<li><a href="?r=noticias/hemerotecanoticias">Noticias</a></li>
							 </ul>
						   <?php } ?>
						   <?php if($_SESSION['idioma'] == "val"){ ?>
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">QUI SOM <i class="fa fa-angle-down"></i></a>
							 <ul class="dropdown-menu" role="menu">
								<li><a href="?r=quienes_somos/historia">Història</a></li>
								<li><a href="?r=quienes_somos/compromiso">Compromís</a></li>
								<li><a href="?r=quienes_somos/socios">Socis</a></li>
								<li><a href="?r=quienes_somos/ayuntamiento">Ajuntament de València</a></li>
								<li><a href="?r=noticias/hemerotecanoticias">Notícies</a></li>
							 </ul>
						   <?php } ?>
						</li>
						<li class="dropdown ">
						   <?php if($_SESSION['idioma'] == "cas"){ ?>
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICIOS Y TRÁMITES<i class="fa fa-angle-down"></i></a>
							 <ul class="dropdown-menu" role="menu">
								<li class="dropdown ">
									<a href="?r=servicios/zanjascatas&sec=1">Zanjas y Catas <i class="fa fa-angle-right"></i></a>
									<ul class="dropdown-menu" role="menu" style="min-width: 200px;">
										<li><a href="?r=servicios/zanjascatas&sec=1">Solicitud de licencia</a></li>
										<li><a href="?r=servicios/zanjascatas&sec=2">Devolución Depósito/Fianza </a></li>
										<li><a href="?r=servicios/zanjascatas&sec=3">Homologación y Carteles</a></li>
										<!--<li><a href="?r=servicios/zanjascatas&sec=4">Contenedor de escombros</a></li>-->
									</ul>
								</li>
								<li class="dropdown ">
									<a href="?r=servicios/soportes&sec=1">Soportes Publicitarios <i class="fa fa-angle-right"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="?r=servicios/soportes&sec=1">Solicitud de licencia</a></li>
										<li><a href="?r=servicios/soportes&sec=2">Renovación de licencia</a></li>
										<li><a href="?r=servicios/soportes&sec=3">Inscripción en Registro</a></li>
									</ul>
								</li>
								<li><a href="?r=servicios/coordinacion">Coordinación de obras</a></li>
								<li><a href="?r=servicios/inspeccion">Inspección de obras</a></li>
								<li><a href="?r=servicios/registro">Registro</a></li>
								<li><a href="?r=servicios/mapa">Obras en ejecución </a></li>
								<li><a href="?r=servicios/72horas">Incidencias en vía pública</a></li>
							 </ul>
						   <?php } ?>
						   <?php if($_SESSION['idioma'] == "val"){ ?>
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICIS I TRÀMITS<i class="fa fa-angle-down"></i></a>
							 <ul class="dropdown-menu" role="menu">
								<li class="dropdown ">
									<a href="?r=servicios/zanjascatas&sec=1">Rases i Sondatges <i class="fa fa-angle-right"></i></a>
									<ul class="dropdown-menu" role="menu" style="min-width: 200px;">
										<li><a href="?r=servicios/zanjascatas&sec=1">Sol·licitud de llicència</a></li>
										<li><a href="?r=servicios/zanjascatas&sec=2">Devolució Depòsit/Fiança </a></li>
										<li><a href="?r=servicios/zanjascatas&sec=3">Homologació i Cartells</a></li>
										<!--<li><a href="?r=servicios/zanjascatas&sec=4">Contenidor de runes</a></li>-->
									</ul>
								</li>
								<li class="dropdown ">
									<a href="?r=servicios/soportes&sec=1">Suports Publicitaris <i class="fa fa-angle-right"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="?r=servicios/soportes&sec=1">Sol·licitud de llicència</a></li>
										<li><a href="?r=servicios/soportes&sec=2">Renovació de llicència</a></li>
										<li><a href="?r=servicios/soportes&sec=3">Inscripció en Registre</a></li>
									</ul>
								</li>
								<li><a href="?r=servicios/coordinacion">Coordinació d'obres</a></li>
								<li><a href="?r=servicios/inspeccion">Inspecció d'obres</a></li>
								<li><a href="?r=servicios/registro">Registre</a></li>
								<li><a href="?r=servicios/mapa">Obres en execució </a></li>
								<li><a href="?r=servicios/72horas">Incidències en via pública</a></li>
							 </ul>
						   <?php } ?>
						</li>
						<!-- Nueva sección -->
						<li>
						   <?php if($_SESSION['idioma'] == "cas"){ ?>
							<a href="?r=servicios/documentacion">DOCUMENTACIÓN</a>
						   <?php } ?>
						   <?php if($_SESSION['idioma'] == "val"){ ?>
							<a href="?r=servicios/documentacion">DOCUMENTACIÓ</a>
						   <?php } ?>
						</li>
						<!-- /Nueva sección -->
						<li>
						   <?php if($_SESSION['idioma'] == "cas"){ ?>
							<a href="?r=contacto/contacto">CONTACTO</a>
						   <?php } ?>
						   <?php if($_SESSION['idioma'] == "val"){ ?>
							<a href="?r=contacto/contacto">CONTACTE</a>
						   <?php } ?>
						</li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">IDIOMA <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<?php 
									$url= $_SERVER["REQUEST_URI"];
								?>
								<?php if($_SESSION['idioma'] == "cas"){ ?>
								 <li><a href="?r=contacto/cambiaidioma&idioma=cas&url=<?php echo $url ?>"><img src="assets/img/flags/bandera_espana.png" alt="Español" class="bandera_espana"> Castellano</a></li>
								 <li><a href="?r=contacto/cambiaidioma&idioma=val&url=<?php echo $url ?>"><img src="assets/img/flags/bandera_valencia.png" alt="Valenciano" class="bandera_espana"> Valenciano</a></li>
								<?php } ?>
								<?php if($_SESSION['idioma'] == "val"){ ?>
								 <li><a href="?r=contacto/cambiaidioma&idioma=cas&url=<?php echo $url ?>"><img src="assets/img/flags/bandera_espana.png" alt="Español" class="bandera_espana"> Castellà</a></li>
								 <li><a href="?r=contacto/cambiaidioma&idioma=val&url=<?php echo $url ?>"><img src="assets/img/flags/bandera_valencia.png" alt="Valenciano" class="bandera_espana"> Valencià</a></li>
								<?php } ?>
							</ul>
						</li>	
					</ul>
				</div>
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>