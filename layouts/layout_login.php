<!DOCTYPE html>
<html lang="es">
<?php  require('includes/head.php'); ?>
<body>
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- HEADER -->
		<?php  require('includes/menu.php'); ?>
		<!-- END HEADER -->
		<!-- MAIN -->
		<div class="shop-main login">
			<div class="container">
				<!-- BREADCRUMBS -->
				<ol class="breadcrumb link-accent separator-arrow">
					<li><a href="index.php" title="Home"><i class="fa fa-home"></i></a></li>
					<li class="active">Login</li>
				</ol>
				<!-- END BREADCRUMBS -->
				<!-- LOGIN BOX -->
				<div class="row">
					<div class="col-sm-5 col-sm-offset-1 col-lg-4 col-lg-offset-2">
						<div class="account-box login-box box-with-help">
							<?php if($_SESSION['idioma'] == "cas"){ ?>
							 <h1>Identificación de usuarios</h1>
							<?php } ?>
							<?php if($_SESSION['idioma'] == "val"){ ?>
							 <h1>Identificació d'usuaris</h1>
							<?php } ?>
							<form class="form-horizontal" role="form"  method="post" action="?r=login/identificarse">
								<div class="form-group">
									<?php if($_SESSION['idioma'] == "cas"){ ?>
									  <label for="inputEmail" class="control-label sr-only">Usuario</label>
									<?php } ?> 
									<?php if($_SESSION['idioma'] == "val"){ ?>
									  <label for="inputEmail" class="control-label sr-only">Usuari</label>
									<?php } ?>
									<div class="col-sm-12">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
											<input type="text" class="form-control" name="usuario" placeholder="Usuario">
										</div>
									</div>
								</div>
								<div class="form-group">
									<?php if($_SESSION['idioma'] == "cas"){ ?>
									  <label for="inputPassword" class="control-label sr-only">Contraseña</label>
									<?php } ?>
									<?php if($_SESSION['idioma'] == "val"){ ?>
									  <label for="inputPassword" class="control-label sr-only">Contrasenya</label>
									<?php } ?>
									<div class="col-sm-12">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-lock"></i></span>
											<input type="password" class="form-control" name="password" placeholder="Contraseña">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label class="fancy-checkbox">
											<input type="checkbox">
											<?php if($_SESSION['idioma'] == "cas"){ ?>
											  <span>Recordar contraseña</span>
											<?php } ?>
											<?php if($_SESSION['idioma'] == "val"){ ?>
											  <span>Recordar contrasenya</span>
											<?php } ?>
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-7">
										<?php if($_SESSION['idioma'] == "cas"){ ?>
											<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i> Identificarse</button>
										<?php } ?>
										<?php if($_SESSION['idioma'] == "val"){ ?>
											<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i> Identificar-se</button>
										<?php } ?>
									</div>
									<div class="col-xs-5 text-right">
										<!--<a href="#"><em>forgot password?</em></a>-->
									</div>
								</div>
							</form>
							<!--<p><em>Don't have an account yet?</em> <a href="shop-register.html"><strong>Sign Up</strong></a></p>
							<button type="button" class="btn btn-link btn-login-help"><i class="fa fa-question-circle" title="Click for help"></i></button>-->
						</div>
					</div>
					<div class="col-sm-5 col-lg-4">
						<div class="login-copytext">
						  <?php if($_SESSION['idioma'] == "cas"){ ?>
							<h2><i class="fa fa-lock"></i> Login Seguro</h2>
							<p>Identifíquese con su usuario y contraseña para poder tener acceso a la zona privada, en caso de olvidar sus datos de conexión, póngase en contacto con Ocoval.</p>
							<h2><i class="fa fa-user"></i> Zona privada</h2>
							<p>Zona reservada para las empresas asociadas a Ocoval, si no pertenece a este colectivo, no intente acceder, Ocoval actuará en consecuencia con las medidas legales necesarias.</p>
						  <?php } ?>
						  <?php if($_SESSION['idioma'] == "val"){ ?>
							<h2><i class="fa fa-lock"></i> Login Segur</h2>
							<p>Identifique's amb el seu usuari i contrasenya per a poder tindre accés a la zona privada, en cas d'oblidar les seues dades de connexió, pose's en contacte amb Ocoval.</p>
							<h2><i class="fa fa-user"></i> Zona privada</h2>
							<p>Zona reservada per a les empreses associades a Ocoval, si no pertany a este col·lectiu, no intente accedir, Ocoval actuarà en conseqüència amb les mesures legals necessàries.</p>
						  <?php } ?>
						</div>
					</div>
				</div>
				<!-- END LOGIN BOX -->
			</div>
		</div>
		<!-- END MAIN -->
		<!-- FOOTER -->
		<?php  require('includes/footer.php'); ?>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="assets/js/repute-shop.js"></script>

</body>

</html>