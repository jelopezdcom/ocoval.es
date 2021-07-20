<?php
 if($_SESSION['usuario']=="ocoval" || $_SESSION['usuario']=="tessq@tessq.com"){
?>
<!DOCTYPE html>
<html lang="es">
<?php  require('includes/head.php'); ?>
<body>
	<div class="text-center copyright">
		&copy; OCOVAL 2016 | Design by Tess Quality
	</div>
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- PAGE CONTENT -->
		<!-- CABECERA -->
			<div class="col-sm-12">
				<div class="col-sm-4">
					<img src="assets/img/logo/ocoval-obras.jpg" class="img-responsive img-cabecera-empresas">
				</div>
				<div class="col-sm-4">
					<img src="assets/img/logo/ajuntament-valencia3.jpg" class="img-responsive img-cabecera-empresas">
				</div>
				<div class="col-sm-4">
				<img src="assets/img/logo/ocoval-obras.jpg" class="img-responsive img-cabecera-empresas">
				</div>
		</div>
		<!-- /CABECERA -->	
		<br /><br /><br /><br /><br /><br />
		<div class="page-content">
			<div class="container">
				<!-- WHY REPUTE -->
				<section>
					<div class="custom-tabs-line tabs-line-top">
						<ul class="nav" role="tablist">
							<li class="active"><a href="#tab-bottom1" role="tab" data-toggle="tab"> MODIFICAR CONTRASEÑAS </a></li>
							<!--<li><a href="#tab-bottom2" role="tab" data-toggle="tab"> PESTAÑA 2 </a></li>
							<li><a href="#tab-bottom3" role="tab" data-toggle="tab"> PESTAÑA 3 </a></li>-->
							<li><form method="post" action="?r=login/cerrarSesion">    
							    	<input class="btn btn-danger" style="float:right;margin-top:1%;" type="submit" value="Salir de la sesión">
							    </form></li>
							</ul>
					</div>

					<div class="tab-content">
						<!-- SOLICITUDES DE LICENCIA -->
						<div class="tab-pane fade in active text-center" id="tab-bottom1">
							<br /><br />
							<h3>Modificar contraseñas</h3>
							<div class="contact-form-wrapper">
								<?php $contador=1;  require('models/encrypter.php'); foreach ($datos[0] as $user) { ?>
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
								<?php $contador++; } ?>
							</div>
						</div>
						<div class="tab-pane fade text-center" id="tab-bottom2">
							<!-- CONCTACT FORM2 -->
							<div class="contact-form-wrapper">
								PESTAÑA 2
							</div>
						</div>
						<div class="tab-pane fade text-center" id="tab-bottom3">
							<!-- CONCTACT FORM3 -->
							<div class="contact-form-wrapper">
								PESTAÑA 3
							</div>
						</div>
					</div>
				</section>
				<!-- END WHY REPUTE -->
			</div>
		</div>
		<!-- /CONTENT -->
	</div>
	<!-- END WRAPPER -->
	<div class="text-center copyright">
		&copy; OCOVAL 2016 | Design by Tess Quality
	</div>
	<!-- JAVASCRIPTS -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins/fitvids/jquery.fitvids.js"></script>
	<script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="assets/js/repute-scripts.js"></script>
	
</body>

</html>
<?php
}
else{
	require('error.php');
}
?>