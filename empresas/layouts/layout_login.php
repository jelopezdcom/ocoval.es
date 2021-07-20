<!DOCTYPE html>
<html lang="es">
    <?php  require('includes/head.php'); ?>
    <body>

        <div class="wrapper">
            <div class="container hidden-xs" style="border-bottom:2px solid;">
                <div class="row" style="margin-top:50px;">
                    <div class="col-sm-2"><img src="../assets/img/logo/ajuntament-valencia.jpg" alt="Ajuntament" style="width:100%;" class="fadeIn"></div>
                    <div class="col-sm-2"><img src="assets/img/portfolio/single/telefonica-back.jpg" alt="Telefonica" style="width:100%;" class="fadeIn"></div>
                    <div class="col-sm-2"><img src="assets/img/portfolio/single/iberdrola-back.jpg" alt="Iberdrola" style="width:100%;" class="fadeIn"></div>
                    <div class="col-sm-2"><img src="assets/img/portfolio/single/vodafoneono-back.jpg" alt="Vodafone-Ono" style="width:100%;" class="fadeIn"></div>
                    <div class="col-sm-2"><img src="assets/img/portfolio/single/gas_natural.jpg" alt="Gas Natural" style="width:90%;margin-top: -15px;" class="fadeIn"></div>
                    <div class="col-sm-2"><img src="assets/img/portfolio/single/emivasa-back.jpg" alt="Emivasa" style="width:100%;" class="fadeIn"></div>
                </div>
                <br /><br />
            </div>	

            <br /><br />

            <div class="shop-main login">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-lg-4">
                            <div class="account-box login-box box-with-help">
                                <h2>Expedientes de zanjas</h2>
                                <p>Identifíquese para entrar al area de consultas de expedientes de zanjas:</p>
                                <form class="form-horizontal" role="form"  method="post" action="?r=login/identificarse">
                                    <div class="form-group">
                                        <label for="inputEmail" class="control-label sr-only">Usuario</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword" class="control-label sr-only">Contraseña</label>
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
                                                <span>Recordar contraseña</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i> Acceso a expedientes de zanjas</button>
                                        </div>

                                        <div class="col-xs-5 text-right"><!--<a href="#"><em>forgot password?</em></a>--></div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4">
                            <div class="account-box login-box box-with-help">
                                <h2>Inspección de Obras</h2>
                                <p>Diríjase a la aplicación de inspección de obras:</p>
                                <!-- <p>Entre al area de inspección de obras:</p> -->
                                <a href="http://servicios.ocoval.es:8080" target="_blank" class="btn btn-success btn-block">
                                    Acceso a inspección de obras
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4">
                            <div class="login-copytext">
                                <h2><i class="fa fa-lock"></i> Login Seguro</h2>
                                <p>Identifíquese con su usuario y contraseña para poder tener acceso a la zona privada, en caso de olvidar sus datos de conexión, póngase en contacto con Ocoval.</p>
                                <br />
                                <h2><i class="fa fa-user"></i> Zona privada</h2>
                                <p>Zona reservada para las empresas asociadas a Ocoval, si no pertenece a este colectivo, no intente acceder, Ocoval actuará en consecuencia con las medidas legales necesarias.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<br /><br /><br />
	<div class="col-sm-4"></div>
	<div class="col-sm-4"><img src="../assets/img/logo/ocoval-obras.jpg" style="width:80%;margin-left:10%;"></div>
	<div class="col-sm-4"></div>
	<br />

	<!-- JAVASCRIPTS -->
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="assets/js/repute-shop.js"></script>
    </body>
</html>