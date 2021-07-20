<div class="page-header">
			<div class="container">
			  <?php if($_SESSION['idioma'] == "cas"){ ?>
				<h1 class="page-title pull-left">REGISTRO</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Registro</li>
				</ol>
			  <?php } ?>
			  <?php if($_SESSION['idioma'] == "val"){ ?>
				<h1 class="page-title pull-left">REGISTRE</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Registre</li>
				</ol>
			  <?php } ?>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<!-- SLIDER -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="assets/img/sliders/registro1.jpg" alt="Registro">
				    </div>

				    <div class="item">
				      <img src="assets/img/sliders/registro2.jpg" alt="Registro">
				    </div>

				    <div class="item">
				      <img src="assets/img/sliders/registro3.jpg" alt="Registro">
				    </div>
				  </div>
				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background:none;">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background:none;">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<!-- SLIDER -->
				<br><br>
				<section>
					<div class="row">
						<div class="col-md-12" style="margin-top:50px;">
							<p> <?php $contenido="contenido_servicio_".$_SESSION['idioma']; echo $texto[$contenido]; ?> </p>
						</div>
					</div>
				</section>
			</div>
		</div>