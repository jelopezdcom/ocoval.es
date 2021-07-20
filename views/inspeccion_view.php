<div class="page-header">
			<div class="container">
			   <?php if($_SESSION['idioma'] == "cas"){ ?>
				<h1 class="page-title pull-left">INSPECCIÓN DE OBRAS</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Inspección de obras</li>
				</ol>
			  <?php } ?>
			  <?php if($_SESSION['idioma'] == "val"){ ?>
				<h1 class="page-title pull-left">INSPECCIÓ D'OBRES</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Inspecció d´obres</li>
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
				    <li data-target="#myCarousel" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="assets/img/sliders/inspeccion1.jpg" alt="Inspección de obras">
				    </div>

				    <div class="item">
				      <img src="assets/img/sliders/inspeccion2.jpg" alt="Inspección de obras">
				    </div>

				    <div class="item">
				      <img src="assets/img/sliders/inspeccion3.jpg" alt="Inspección de obras">
				    </div>

				    <div class="item">
				      <img src="assets/img/sliders/inspeccion4.jpg" alt="Inspección de obras">
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
						<div class="col-md-12" style="margin-top:50px;margin-bottom:50px;">
							<p> <?php $contenido="contenido_servicio_".$_SESSION['idioma']; echo $texto[$contenido]; ?> </p>
						</div>
					</div>
				</section>
			</div>
		</div>