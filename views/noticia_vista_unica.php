<div class="page-header">
	<div class="container">
		<h4 class="page-title pull-left"><?php  echo $noticia['titulo_noticia_'.$_SESSION['idioma']]; ?></h4>
		<ol class="breadcrumb">
		   <?php if($_SESSION['idioma'] == "cas"){ ?>
			 <li><a href="index.php">Inicio</a></li>
			 <li class="active">Noticia</li>
		   <?php } ?>
		   <?php if($_SESSION['idioma'] == "val"){ ?>
			 <li><a href="index.php">Inici</a></li>
			 <li class="active">Notícia</li>
		   <?php } ?>
		</ol>
	</div>
</div>
<div class="page-content">
	<div class="container">
		<div class="row">			
			<div class="col-md-6">
				<img src="<?php  echo $noticia['ruta_imagen_noticia_min']; ?>" class="img-responsive img-thumbnail" alt="featured-image" style="width:100%;"/>
			</div>
			<div class="col-md-6">
				<figure class="featured-image" style="margin-top:10px;">
					<?php  $fecha = new DateTime($noticia['fecha']); ?> 
					<div class="post-date-info clearfix"><span class="post-month"><?php  echo $fecha->format('d-m-Y'); ?></span></div>
				</figure>
				<h2 class="section-heading" style="color:#406da4;"><?php  echo $noticia['titulo_noticia_'.$_SESSION['idioma']]; ?></h2>
				<p class="lead"><?php echo $noticia['contenido_noticia_'.$_SESSION['idioma']]; ?></p>
			</div>
		</div>
	</div>
</div>