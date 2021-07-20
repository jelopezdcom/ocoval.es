<!-- PAGE CONTENT -->
		<div class="page-header">
			<div class="container">
			  <?php if($_SESSION['idioma'] == "cas"){ ?>
				<h1 class="page-title pull-left">DOCUMENTACIÓN</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Documentación</li>
				</ol>
			  <?php } ?>
			  <?php if($_SESSION['idioma'] == "val"){ ?>
				<h1 class="page-title pull-left">DOCUMENTACIÓ</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Documentació</li>
				</ol>
			  <?php } ?>
			</div>
		</div>
		<div class="page-content">
			<div class="container">
				<section>
					<div class="row">
					</div>
					<p>
						<?php echo $texto['contenido_servicio_'.$_SESSION['idioma']]; ?>
					</p>
					<br>
				</section>
			</div>
		</div>