<?php
if(isset($_SESSION['usuario'])){
?>
<!DOCTYPE html>
<html lang="es">
<?php  require('includes/head.php'); ?>
<!--  CKEDITOR -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script> 
<body>
	<div class="text-center copyright" style="color:white;">
		&copy; OCOVAL 2016 | Design by Tess Quality
	</div>
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- NAVBAR -->

		<!-- END NAVBAR -->
		<!-- BREADCRUMBS -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left" style="font-size:40px;">ADMINISTRACIÓN WEB</h1>
				<form method="post" action="?r=login/cerrarSesion">    
			        <input class="btn btn-danger" style="float:right;margin-top:20px;height:50px;" type="submit" value="Salir de la sesión">
			    </form>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- BASIC PILL -->
						<h2 class="section-heading">Seleccionar Sección</h2>
						<ul class="nav nav-pills tabs-iconized" role="tablist">
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;" class="active"><a href="#quienes_somos" role="tab" data-toggle="tab"><i class="fa fa-globe"></i> QUIENES SOMOS</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#zanjas_catas" role="tab" data-toggle="tab"><i class="fa fa-flag-checkered"></i> ZANJAS Y CATAS</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#soportes" role="tab" data-toggle="tab"><i class="fa fa-suitcase"></i> SOPORTES PUBLICITARIOS</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#coordinacion" role="tab" data-toggle="tab"><i class="fa fa-wrench"></i> COORDINACIÓN DE OBRAS</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#inspeccion" role="tab" data-toggle="tab"><i class="fa fa-search"></i> INSPECCIÓN DE OBRAS</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#registro" role="tab" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> REGISTRO</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#noticias" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o"></i> NOTICIAS</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#incidencias" role="tab" data-toggle="tab"><i class="fa fa-warning"></i> INCIDENCIAS EN VÍA PÚBLICA</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#documentacion" role="tab" data-toggle="tab"><i class="fa fa-copy"></i> DOCUMENTACIÓN</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#accesosftp" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i> ACCESOS FTP</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#contrasenyas" role="tab" data-toggle="tab"><i class="fa fa-unlock-alt"></i> CONTRASEÑAS</a></li>
							<li style="background-color: #eaeaea;border:1px solid #337ab7;margin-bottom:2px;"><a href="#slider" role="tab" data-toggle="tab"><i class="fa fa-file-image-o"></i> SLIDER PRINCIPAL</a></li>
						</ul>
						<div class="tab-content">
							<!-- QUINES SOMOS -->
							<div class="tab-pane fade in active" id="quienes_somos">
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form" method="post" action="?r=quienes_somos/actualizarhistoria">
									<!-- Ataca a la tabla historia y compromiso -->
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Historia Castellano</b></h4>
										<textarea cols="80" id="editor1" name="historia_contenido_cas" rows="10"><?php  echo $datos[0]['contenido_hc_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor1");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Historia Valenciano</b></h4>
										<textarea cols="80" id="editor2" name="historia_contenido_val" rows="10"><?php  echo $datos[0]['contenido_hc_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor2");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Historia</button>
									</div>
									</form>
								</div>

								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form" method="post" action="?r=quienes_somos/actualizarcompromiso">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Compromiso Castellano</b></h4>
										<textarea cols="80" id="editor3" name="compromiso_contenido_cas" rows="10"><?php  echo $datos[1]['contenido_hc_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor3");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Compromiso Valenciano</b></h4>
										<textarea cols="80" id="editor4" name="compromiso_contenido_val" rows="10"><?php  echo $datos[1]['contenido_hc_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor4");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Compromiso</button>
									</div>
									</form>
								</div>

								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form" method="post" action="?r=quienes_somos/actualizarsocios">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Socios Castellano</b></h4>
										<textarea cols="80" id="editor5" name="socios_contenido_cas" rows="10"><?php  echo $datos[2]['contenido_hc_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor5");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Socios Valenciano</b></h4>
										<textarea cols="80" id="editor6" name="socios_contenido_val" rows="10"><?php  echo $datos[2]['contenido_hc_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor6");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Socios</button>
									</div>
									</form>
								</div>

								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form" method="post" action="?r=quienes_somos/actualizarayuntamiento">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Ayuntamiento Castellano</b></h4>
										<textarea cols="80" id="editor7" name="ayuntamiento_contenido_cas" rows="10"><?php  echo $datos[3]['contenido_hc_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor7");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Ayuntamiento Valenciano</b></h4>
										<textarea cols="80" id="editor8" name="ayuntamiento_contenido_val" rows="10"><?php  echo $datos[3]['contenido_hc_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor8");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Ayuntamiento</button>
									</div>
									</form>
								</div>

							</div>
							<!-- /QUIENES SOMOS -->

							<!-- ZANJAS Y CATAS -->
							<div class="tab-pane" id="zanjas_catas">
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarzanjasycatas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Zanjas y Catas Castellano</b></h4>
										<textarea cols="80" id="editor9" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[4]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor9");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Contenido Zanjas y Catas Valenciano</b></h4>
										<textarea cols="80" id="editor10" name="zanjas_contenido_val" rows="10"><?php  echo $datos[4]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor10");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Zanjas y Catas</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA1 -->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Zanjas y Catas Pestaña-1-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-1-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[10]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
											<br />
										<label class="control-label">Cuerpo Pestaña-1-Castellano</label>
										<textarea cols="80" id="editor21" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[10]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor21");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Zanjas y Catas Pestaña-1-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-1-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[10]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-1-Valenciano</label>
										<textarea cols="80" id="editor22" name="zanjas_contenido_val" rows="10"><?php  echo $datos[10]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor22");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="zanjas_catas_1">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Zanjas y Catas Pestaña-1-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA1 -->

								<!-- PESTAÑA2 -->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Zanjas y Catas Pestaña-2-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-2-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[11]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-2-Castellano</label>
										<textarea cols="80" id="editor23" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[11]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor23");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Zanjas y Catas Pestaña-2-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-2-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[11]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-2-Valenciano</label>
										<textarea cols="80" id="editor24" name="zanjas_contenido_val" rows="10"><?php  echo $datos[11]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor24");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="zanjas_catas_2">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Zanjas y Catas Pestaña-2-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA2 -->

								<!-- PESTAÑA3 -->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Zanjas y Catas Pestaña-3-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-3-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[12]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-3-Castellano</label>
										<textarea cols="80" id="editor25" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[12]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor25");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Zanjas y Catas Pestaña-3-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-3-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[12]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-3-Valenciano</label>
										<textarea cols="80" id="editor26" name="zanjas_contenido_val" rows="10"><?php  echo $datos[12]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor26");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="zanjas_catas_3">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Zanjas y Catas Pestaña-3-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA3 -->


								<!-- PESTAÑA4 -->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Zanjas y Catas Pestaña-4-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-4-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[13]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-4-Castellano</label>
										<textarea cols="80" id="editor725" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[13]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor725");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Zanjas y Catas Pestaña-4-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-4-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[13]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-4-Valenciano</label>
										<textarea cols="80" id="editor726" name="zanjas_contenido_val" rows="10"><?php  echo $datos[13]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor726");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="zanjas_catas_4">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Zanjas y Catas Pestaña-4-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA4 -->

							</div>		
							<!-- /ZANJAS Y CATAS -->


							<!-- SOPORTES PUBLICITARIOS -->
							<div class="tab-pane" id="soportes">
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarSoportesPublicitarios">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Soportes Publicitarios Castellano</b></h4>
										<textarea cols="80" id="editor11" name="soportes_contenido_cas" rows="10"><?php  echo $datos[5]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor11");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Soportes Publicitarios Valenciano</b></h4>
										<textarea cols="80" id="editor12" name="soportes_contenido_val" rows="10"><?php  echo $datos[5]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor12");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Soportes Publicitarios</button>
									</div>
									</form>
								</div>

								<!-- PESTAÑA1 Soportes Publicitarios-->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Soportes Publicitarios Pestaña-1-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-1-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[15]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-1-Castellano</label>
										<textarea cols="80" id="editor27" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[15]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor27");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Soportes Publicitarios Pestaña-1-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-1-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[15]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-1-Valenciano</label>
										<textarea cols="80" id="editor28" name="zanjas_contenido_val" rows="10"><?php  echo $datos[15]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor28");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="soportes_publi_1">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Soportes Publicitarios Pestaña-1-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA1 Soportes Publicitarios -->

								<!-- PESTAÑA2 Soportes Publicitarios-->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Soportes Publicitarios Pestaña-2-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-2-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[16]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-2-Castellano</label>
										<textarea cols="80" id="editor29" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[16]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor29");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Soportes Publicitarios Pestaña-2-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-2-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[16]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-2-Valenciano</label>
										<textarea cols="80" id="editor30" name="zanjas_contenido_val" rows="10"><?php  echo $datos[16]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor30");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="soportes_publi_2">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Soportes Publicitarios Pestaña-2-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA 2 Soportes Publicitarios -->

								<!-- PESTAÑA 3 Soportes Publicitarios-->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Soportes Publicitarios Pestaña-3-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-3-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[17]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-3-Castellano</label>
										<textarea cols="80" id="editor31" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[17]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor31");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Soportes Publicitarios Pestaña-3-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-3-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[17]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-3-Valenciano</label>
										<textarea cols="80" id="editor32" name="zanjas_contenido_val" rows="10"><?php  echo $datos[17]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor32");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="soportes_publi_3">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Soportes Publicitarios Pestaña-3-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA 3 Soportes Publicitarios -->

							</div>
							<!-- /SOPORTES PUBLICITARIOS -->


							<!-- COORDINACIÓN DE OBRAS -->
							<div class="tab-pane" id="coordinacion">
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarCoordinacionObras">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinación de Obras Castellano</b></h4>
										<textarea cols="80" id="editor13" name="coordinacion_contenido_cas" rows="10"><?php  echo $datos[6]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor13");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinación de Obras Valenciano</b></h4>
										<textarea cols="80" id="editor14" name="coordinacion_contenido_val" rows="10"><?php  echo $datos[6]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor14");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Coordinación de obras</button>
									</div>
									</form>
								</div>

								<!-- PESTAÑA 1 Coordinacion de obras-->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinacion De Obras Pestaña-1-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-1-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[20]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-1-Castellano</label>
										<textarea cols="80" id="editor33" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[20]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor33");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinacion De Obras Pestaña-1-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-1-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[20]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-1-Valenciano</label>
										<textarea cols="80" id="editor34" name="zanjas_contenido_val" rows="10"><?php  echo $datos[20]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor34");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="coordinacion_obras_1">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Coordinacion De Obras Pestaña-1-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA 1 Coordinacion de obras -->

								<!-- PESTAÑA 2 Coordinacion de obras-->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinacion De Obras Pestaña-2-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-2-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[21]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-2-Castellano</label>
										<textarea cols="80" id="editor35" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[21]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor35");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinacion De Obras Pestaña-2-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-2-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[21]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-2-Valenciano</label>
										<textarea cols="80" id="editor36" name="zanjas_contenido_val" rows="10"><?php  echo $datos[21]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor36");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="coordinacion_obras_2">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Coordinacion De Obras Pestaña-2-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA 2 Coordinacion de obras -->

								<!-- PESTAÑA 3 Coordinacion de obras-->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinacion De Obras Pestaña-3-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-3-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[22]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-3-Castellano</label>
										<textarea cols="80" id="editor37" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[22]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor37");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinacion De Obras Pestaña-3-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-3-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[22]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-3-Valenciano</label>
										<textarea cols="80" id="editor38" name="zanjas_contenido_val" rows="10"><?php  echo $datos[22]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor38");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="coordinacion_obras_3">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Coordinacion De Obras Pestaña-3-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA 3 Coordinacion de obras -->

								<!-- PESTAÑA 4 Coordinacion de obras-->
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarpestanyas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinacion De Obras Pestaña-4-Castellano</b></h4>
										
										<label class="control-label">Título Pestaña-4-Castellano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_cas" value="<?php echo $datos[23]['titulo_pestanya_cas']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-4-Castellano</label>
										<textarea cols="80" id="editor39" name="zanjas_contenido_cas" rows="10"><?php  echo $datos[23]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor39");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Coordinacion De Obras Pestaña-4-Valenciano</b></h4>
										
										<label class="control-label">Título Pestaña-4-Valenciano</label>	
										<div class="input-group">
											<input type="text" class="form-control" name="titulo_pestanya_val"  value="<?php echo $datos[23]['titulo_pestanya_val']; ?>">
											<span class="input-group-addon"><i class="fa fa-tags"></i></span>
										</div>
										<br />
										<label class="control-label">Cuerpo Pestaña-4-Valenciano</label>
										<textarea cols="80" id="editor40" name="zanjas_contenido_val" rows="10"><?php  echo $datos[23]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor40");
										</script>
									</div>
									<input type="hidden" class="form-control" name="numero_pestanya" value="coordinacion_obras_4">
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Coordinacion De Obras Pestaña-4-</button>
									</div>
									</form>
								</div>
								<!-- PESTAÑA 4 Coordinacion de obras -->

							</div>
							<!-- /COORDINACIÓN DE OBRAS -->


							<!-- INSPECCIÓN DE OBRAS -->
							<div class="tab-pane" id="inspeccion">
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarInspeccionObras">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Inspección de Obras Castellano</b></h4>
										<textarea cols="80" id="editor15" name="inspeccion_contenido_cas" rows="10"><?php  echo $datos[7]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor15");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Inspección de Obras Valenciano</b></h4>
										<textarea cols="80" id="editor16" name="inspeccion_contenido_val" rows="10"><?php  echo $datos[7]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor16");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Inspección de obras</button>
									</div>
									</form>
								</div>
							</div>
							<!-- /INSPECCIÓN DE OBRAS -->


							<!-- REGISTRO -->
							<div class="tab-pane" id="registro">
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarRegistro">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Registro Castellano</b></h4>
										<textarea cols="80" id="editor17" name="registro_contenido_cas" rows="10"><?php  echo $datos[8]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor17");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Registro Valenciano</b></h4>
										<textarea cols="80" id="editor18" name="registro_contenido_val" rows="10"><?php  echo $datos[8]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor18");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Registro</button>
									</div>
									</form>
								</div>
							</div>
							<!-- /REGISTRO -->

							<!-- NOTICIAS -->
							<div class="tab-pane" id="noticias">
								<br /><br />
								<h4 style="color:#406da4;"><b>LISTADO DE NOTICIAS EXISTENTES</b></h4>
								<?php  foreach ($datos[14] as $noticia) { ?>
									<div class="col-md-12" style="margin:5px;padding:5px;background-color:#eaeaea;border-radius:2px;overflow:hidden;border:1px solid #337ab7;">
										<img src="<?php  echo $noticia['ruta_imagen_noticia_min']; ?>" class="img-circle" style="width:75px;height:75px;float:left;">
										&nbsp;&nbsp;&nbsp;<?php  echo $noticia['fecha']; ?><br />
										&nbsp;&nbsp;&nbsp;<?php  echo $noticia['titulo_noticia_cas']."<a href='?r=noticias/BorrarNoticia&id=".$noticia['id_noticia']."'><input class='btn btn-danger borrarnoticia' type='submit' name='borrar' value='BORRAR'></a> <a href='?r=noticias/ModificarNoticia&id=".$noticia['id_noticia']."'><input class='btn btn-info borrarnoticia' type='submit' name='editar' value='EDITAR'></a>" ; ?>
										<br /><br />
									</div>
								<?php } ?>
								
								<div class="col-md-12 formularionoticianueva">
									<h4 style="color:#406da4;"><b>FORMULARIO PARA LA CREACIÓN DE UNA NOTICIA NUEVA</b></h4>
									<!-- CONCTACT FORM -->
									<div class="contact-form-wrapper">
										<form enctype="multipart/form-data" id="contact-form" method="post" class="form-horizontal margin-bottom-30px" role="form" action="?r=noticias/noticianueva">
											<div class="form-group">
												<div class="col-sm-6">
													<label class="control-label sr-only">Título Noticia Castellano</label>	
													<div class="input-group">
														<input type="text" class="form-control" name="titulo_noticia_cas" placeholder="Título Castellano">
														<span class="input-group-addon"><i class="fa fa-tags"></i></span>
													</div>
												</div>

												<div class="col-sm-6">
													<label class="control-label sr-only">Título Noticia Valenciano</label>
													<div class="input-group">
														<input type="text" class="form-control" name="titulo_noticia_val" placeholder="Título Valenciano">
														<span class="input-group-addon"><i class="fa fa-tags"></i></span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<h4>Cuerpo de la noticia en Castellano</h4>
													<textarea cols="80" id="editor100" name="cuerpo_noticia_cas" rows="10"></textarea>
													<script type="text/javascript">
														CKEDITOR.replace ("editor100");
													</script>
												</div>
												<div class="col-md-6">
													<h4>Cuerpo de la noticia en Valenciano</h4>
													<textarea cols="80" id="editor101" name="cuerpo_noticia_val" rows="10"></textarea>
													<script type="text/javascript">
														CKEDITOR.replace ("editor101");
													</script>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-6" id="date-picker-demo">
													<div class="panel-body">
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<!--<input type="text" id="datepicker" name="fecha_noticia" class="form-control" placeholder="Fecha de la noticia">-->
															<input type="date" name="fecha" style="height:30px;width:262px;">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<label class="switch-input">
														<input type="checkbox" name="destacada" value="si" checked>
														<i data-swon-text="ON" data-swoff-text="OFF"></i> Noticia Popular?
													</label>												
												</div>
											</div>
											<div class="form-group">						
												<div class="col-sm-12">
											   		<div class="fileUpload btn btn-primary">
												    	<span><i class="fa fa-image"></i> Subir imagen de la noticia ( Tamaño de la imagen 650 X 487px )</span>
												    	<input accept="image/*" type="file" class="upload" name="fichero_usuario" id="fileToUpload"/>
													</div>
											    	<div id="vista_previa">Vista previa</div>
										    	</div>
										    </div>
										 		<!-- /Subir imágen -->
										 	   	<script>
												    if (window.FileReader) {

												    	function seleccionArchivo(evt) {

												       	var files = evt.target.files;
												        var f = files[0];
												        if (f.name.match(/\.(jpg|JPG|jpeg|png|gif)$/)){
			    											
												        	var leerArchivo = new FileReader();
												         	leerArchivo.onload = (function(elArchivo) {
												            return function(e) {
												              document.getElementById('vista_previa').innerHTML = '<img src="'+ e.target.result +'" alt="" width="100%" />';
												            };
												            })(f);
												    
												          leerArchivo.readAsDataURL(f);
												      	}else{alert("Esto no es una imágen permitida");}
												        }
												    } else {
												      document.getElementById('vista_previa').innerHTML = "El navegador no soporta vista previa";
												    }
												    
												     document.getElementById('fileToUpload').addEventListener('change', seleccionArchivo, false);
												</script>
											
											<div class="form-group">
												<div class="col-sm-12">
													<button id="submit-button" type="submit" class="btn btn-success" style="width:100%;"><i class="fa fa-paper-plane"></i> <span>Registrar noticia</span></button>
												</div>
											</div>
											<input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
										</form>
									</div>
								</div>
							</div>
							<!-- /NOTICIAS -->


							<!-- INCIDENCIAS EN VÍA PÚBLICA -->
							<div class="tab-pane" id="incidencias">
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizar72horas">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>72Horas Castellano</b></h4>
										<textarea cols="80" id="editor19" name="72_contenido_cas" rows="10"><?php  echo $datos[9]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor19");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>72Horas Valenciano</b></h4>
										<textarea cols="80" id="editor20" name="72_contenido_val" rows="10"><?php  echo $datos[9]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor20");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar 72 Horas</button>
									</div>
									</form>
								</div>
							</div>
							<!--/INCIDENCIAS EN VÍA PÚBLICA-->

							<!-- DOCUMENTACIÓN -->
							<div class="tab-pane" id="documentacion">
								<div class="col-md-12 formback">
									<form class="form-horizontal" role="form"  method="post" action="?r=servicios/actualizarDocumentacion">
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Documentación Castellano</b></h4>
										<textarea cols="80" id="editor50" name="documentacion_cas" rows="10"><?php  echo $datos[20]['contenido_servicio_cas']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor50");
										</script>
									</div>
									<div class="col-md-6">
										<h4 style="color:#406da4;"><b>Documentación Valenciano</b></h4>
										<textarea cols="80" id="editor51" name="documentacion_val" rows="10"><?php  echo $datos[20]['contenido_servicio_val']; ?></textarea>
										<script type="text/javascript">
											CKEDITOR.replace ("editor51");
										</script>
									</div>
									<div class="col-md-12" style="margin-top:10px;margin-bottom:20px;">
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-refresh"></i> Modificar Documentación</button>
									</div>
									</form>
								</div>
							</div>
							<!--/DOCUMENTACIÓN-->

							<!-- ACCESOS FTP -->
							<div class="tab-pane formback" id="accesosftp" style="padding:20px;">
								<br />
								<h4 style="color:#406da4;"><b>ACCESOS POR FTP A LOS DIRECTORIOS DE ARCHIVOS, DATOS E IMÁGENES</b></h4>
								<br />
								<p>Para acceder a estos directorios será necesario el uso del programa FileZilla.</p>
								<p>Con este programa en su pantalla principal se deberán introducir los siguientes datos:</p>
								<br />
								<p><span style="color:#406da4;"><b>Servidor:</b></span> ftp.ocoval.es</p>
								<p><span style="color:#406da4;"><b>Usuario:</b></span> ocoval</p>
								<p><span style="color:#406da4;"><b>Contraseña:</b></span> 2015ocoval</p>
							</div>
							<!-- /ACCESOS FTP -->

							<!-- CONTRASEÑAS -->
							<div class="tab-pane formback" id="contrasenyas" style="padding:20px;">
							<br />
							<h4 style="color:#406da4;"><b>Modificar contraseñas</b></h4>
							<div class="contact-form-wrapper">
								<?php $contador=1;  require('models/encrypter.php'); foreach ($datos[18] as $user) { 
									if(encrypter::decrypt($user['usuario'])!="tessq@tessq.com"){ ?>
										<div class="panel panel-default">
												<div class="panel-heading" style="text-align:left;">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $contador; ?>"><i class="fa fa-plus-circle icon-collapsed"></i> <?php echo strtoupper(encrypter::decrypt($user['usuario'])); ?></a>
														<i class="fa fa-angle-down" style="float:right"></i>
													</h4>
												</div>
												<div id="<?php echo $contador; ?>" class="panel-collapse collapse">
													<div class="panel-body" style="background-color:#7b7b7b;">
														<div class="contact-form-wrapper">
															<br />
															<form id="contact-form" method="post" class="form-horizontal margin-bottom-30px" role="form" action="?r=users/ActualizarUsuario">
																
																<div class="form-group">
																	<div class="col-sm-4">
																		<div class="input-group">
																			<label for="contact-name" class="control-label sr-only">Nombre</label>
																			<input type="text" name="usuario" class="form-control" value="<?php echo encrypter::decrypt($user['usuario']); ?>" required>
																			<span class="input-group-addon"><i class="fa fa-user"></i></span>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="input-group">
																			<label for="contact-email" class="control-label sr-only">Contraseña</label>
																			<input type="text" name="contrasenya" class="form-control" value="<?php echo encrypter::decrypt($user['contrasenya']); ?>" required>
																			<span class="input-group-addon"><i class="fa fa-lock"></i></span>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<input type="hidden" name="id_empresa" value="<?php echo $user['id_usuario']; ?>">
																		<button type="submit" class="btn btn-primary btn-block"><span>Modificar contraseña</span></button>
																	</div>
																</div>	
																
															</form>
														</div>
													</div>
												</div>
										</div>
								<?php 
									}//IF
								$contador++; } //Foreach?>
							</div>
						</div>
						<!-- /CONTRASEÑAS -->

						<!-- SLIDER -->
						<div class="tab-pane" id="slider">
								<br /><br />
								<h4 style="color:#406da4;"><b>LISTADO DE IMÁGENES DEL SLIDER</b></h4>
								<?php  foreach ($datos[19] as $imagen) { ?>
									<div class="col-md-12" style="margin:5px;padding:15px;background-color:#eaeaea;border-radius:2px;border:1px solid #337ab7;">
										<div class="col-md-6">
											<img src="<?php  echo $imagen['ruta_imagen_miniatura_slider']; ?>" style="width:100%;">
											<br /><br />
											<?php  echo "<a href='?r=slider/BorrarImagenSlider&id=".$imagen['id_imagen_slider']."'><input class='btn btn-danger' style='width:100%;float:left;' type='submit' name='borrar' value='BORRAR IMAGEN Y ENLACE'></a>" ; ?>
										</diV>
										<div class="col-md-6">
											<form id="contact-form" method="post" class="form-horizontal" role="form" action="?r=slider/ModificarUrlImagenSlider">	

												<p style="color:#406da4;">Dirección a dónde dirigirá el enlace</p>
												<input type="hidden" name="id_imagen" value="<?php echo $imagen['id_imagen_slider']; ?>">			
												<div class="input-group" style="width:100%;">
													<label for="contact-name" class="control-label sr-only">URL</label>
													<input type="text" class="form-control" name="url" value="<?php echo $imagen['url_imagen_slider']; ?>">
												</div>
												
												<div class="input-group" style="width:100%;margin-top: 90px;">
													<input class="btn btn-warning" style="width:100%;" type="submit" name="modificar" value="MODIFICAR ENLACE">
													<!--<button type="button" style="width:100%;" type="submit" class="btn btn-warning">MODIFICAR ENLACE</button>-->
												</div>

											</form>
										</div>	
									</div>
								<?php } ?>
								
								<div class="col-md-12 formularionoticianueva">
									<h4 style="color:#406da4;"><b>FORMULARIO PARA AÑDIR AL SLIDER UNA IMAGEN NUEVA</b></h4>
									<!-- CONCTACT FORM -->
									<div class="contact-form-wrapper">
										<form enctype="multipart/form-data" id="contact-form" method="post" class="form-horizontal margin-bottom-30px" role="form" action="?r=slider/imagennueva">
											<div class="form-group">
												<div class="col-sm-12">
													<label class="control-label sr-only">Url de direccionamiento</label>	
													<div class="input-group">
														<input type="text" class="form-control" name="url" placeholder="Dirección a dónde dirigirá el enlace, si no desea enlace, no escriba nada en este campo">
														<span class="input-group-addon"><i class="fa fa-link"></i></span>
													</div>
												</div>
											</div>
											<div class="form-group">						
												<div class="col-sm-12">
											   		<div class="fileUpload btn btn-primary">
												    	<span><i class="fa fa-image"></i> Subir imagen para el slider ( Tamaño de la imagen 1920 X 500px )</span>
												    	<input accept="image/*" type="file" class="upload" name="fichero_usuario" id="fileToUpload12"/>
													</div>
											    	<div id="vista_previa12">Vista previa</div>
										    	</div>
										    </div>
										 		<!-- /Subir imágen -->
										 	   	<script>
												    if (window.FileReader) {

												    	function seleccionArchivo(evt) {

												       	var files = evt.target.files;
												        var f = files[0];
												        if (f.name.match(/\.(jpg|JPG|jpeg|png|gif)$/)){
			    											
												        	var leerArchivo = new FileReader();
												         	leerArchivo.onload = (function(elArchivo) {
												            return function(e) {
												              document.getElementById('vista_previa12').innerHTML = '<img src="'+ e.target.result +'" alt="" width="100%" />';
												            };
												            })(f);
												    
												          leerArchivo.readAsDataURL(f);
												      	}else{alert("Esto no es una imágen permitida");}
												        }
												    } else {
												      document.getElementById('vista_previa').innerHTML = "El navegador no soporta vista previa";
												    }
												    
												     document.getElementById('fileToUpload12').addEventListener('change', seleccionArchivo, false);
												</script>
											
											<div class="form-group">
												<div class="col-sm-12">
													<button id="submit-button" type="submit" class="btn btn-success" style="width:100%;"><i class="fa fa-paper-plane"></i> <span>Registrar imagen</span></button>
												</div>
											</div>
											<input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
										</form>
									</div>
								</div>
							</div>
						<!-- /SLIDER -->
						</div>	
					</div>
				</div>
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
	<script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="assets/js/repute-scripts.js"></script>
	<script src="assets/js/js.js"></script>
</body>
</html>
<?php
}
else{
	require('error.php');
}
?>
