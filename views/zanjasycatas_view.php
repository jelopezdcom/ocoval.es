		<div class="page-header">
			<div class="container">
			  <?php if($_SESSION['idioma'] == "cas"){ ?>
				<h1 class="page-title pull-left">ZANJAS Y CATAS</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Zanjas y Catas</li>
				</ol>
			  <?php } ?>
			  <?php if($_SESSION['idioma'] == "val"){ ?>
				<h1 class="page-title pull-left">RASES I SONDATGES</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inici</a></li>
					<li class="active">Rases i Sondatges</li>
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
				      <img src="assets/img/sliders/zanjas1.jpg" alt="Zanjas y Catas">
				    </div>

				    <div class="item">
				      <img src="assets/img/sliders/zanjas3.jpg" alt="Zanjas y Catas">
				    </div>

				    <div class="item">
				      <img src="assets/img/sliders/zanjas2.jpg" alt="Zanjas y Catas">
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
				<br />
				<section>
					<div class="row">
						<div class="col-md-12" style="margin-top:50px;margin-bottom:50px;">
							<p> <?php $contenido = "contenido_servicio_".$_SESSION['idioma']; echo $texto[0][$contenido]; ?> </p>
						</div>
						
						<div class="col-md-12">
						<!-- tabbed content -->
							<div class="widget">
								<div class="tabpanel">
								<!-- nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="<?php if($_GET['sec']==1) echo "active"; ?>"><a href="#pesta1" aria-controls="content-popular" role="tab" data-toggle="tab"><b><?php $pestanya1="titulo_pestanya_".$_SESSION['idioma'];  echo $texto[1][$pestanya1]; ?></b></a></li>
									<li role="presentation" class="<?php if($_GET['sec']==2) echo "active"; ?>"><a href="#pesta2" aria-controls="content-recents" role="tab" data-toggle="tab"><b><?php $pestanya2="titulo_pestanya_".$_SESSION['idioma'];  echo $texto[2][$pestanya2]; ?></b></a></li>
									<li role="presentation" class="<?php if($_GET['sec']==3) echo "active"; ?>"><a href="#pesta3" aria-controls="content-recent-comments" role="tab" data-toggle="tab"><b><?php $pestanya3="titulo_pestanya_".$_SESSION['idioma'];  echo $texto[3][$pestanya3]; ?></b></a></li>
									<!--<li role="presentation" class="<?php if($_GET['sec']==4) echo "active"; ?>"><a href="#pesta4" aria-controls="content-recent-comments" role="tab" data-toggle="tab"><b><?php $pestanya4="titulo_pestanya_".$_SESSION['idioma'];  echo $texto[4][$pestanya4]; ?></b></a></li>-->
								</ul>
								<!-- end nav tabs -->
								<!-- tab panes -->
								<div class="tab-content" style="border-bottom: 1px solid #ddd;border-left: 1px solid #ddd;border-right: 1px solid #ddd;padding:20px;">
									<div id="pesta1" class="tab-pane fade<?php if($_GET['sec']==1) echo " in active"; ?>" role="tabpanel">
										<?php $contenido1="contenido_servicio_".$_SESSION['idioma'];  echo $texto[1][$contenido1];?>
									</div>

									<div id="pesta2" class="tab-pane fade<?php if($_GET['sec']==2) echo " in active"; ?>" role="tabpanel">
										<?php $contenido2="contenido_servicio_".$_SESSION['idioma'];  echo $texto[2][$contenido2];?>
									</div>
									<div id="pesta3" class="tab-pane fade<?php if($_GET['sec']==3) echo " in active"; ?>" role="tabpanel">
										<?php $contenido3="contenido_servicio_".$_SESSION['idioma'];  echo $texto[3][$contenido3];?> 
									</div>
									<!--<div id="pesta4" class="tab-pane fade<?php if($_GET['sec']==4) echo " in active"; ?>" role="tabpanel">
										<?php $contenido4="contenido_servicio_".$_SESSION['idioma'];  echo $texto[4][$contenido4];?> 
									</div>-->
								</div>
								<!-- end tab panes -->
								</div>
							</div>
						</div>
					</div>
				</section>
		</div>
	</div>