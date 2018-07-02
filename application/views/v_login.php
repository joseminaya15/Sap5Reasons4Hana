<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="SAP 5 Reasons S/4 HANA">
    <meta name="keywords"               content="SAP 5 Reasons S/4 HANA">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="January 25, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	<title>SAP 5 Reasons S/4HANA</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.png">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>login.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
</head>
<body>
    <section id="principal">
        <div class="card-content">
            <div class="contenido-top">
                <img src="<?php echo RUTA_IMG?>logo/logo_home.png">
            </div>
            <div class="contenido">
                <div class="mdl-title inline">
                    <strong class="inline">5</strong>
                    <div class="mdl-letras inline">
                        <p>razones principales</p>
                        <h2>por qu&eacute; elegir SAP S/4HANA</h2>
                    </div>
                    <div class="subrayado-title">
                        <div class="subrayado one"></div>
                        <div class="subrayado two"></div>
                        <div class="subrayado three"></div>
                        <div class="subrayado four"></div>
                    </div>  
                </div>
            </div>
            <div class="contenido-bottom">
                <!-- <img src="<?php echo RUTA_IMG?>fondo-home.jpg"> -->
            </div>
        </div>
        <div class="card-login">
            <div class="mdl-card mdl-card-login">
                <div class="mdl-card__supporting-text">
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-person"></i>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label class="mdl-textfield__label" for="usuario">Username</label>
                            <input class="mdl-textfield__input" type="text" id="usuario" maxlength="50" onkeyup="verificarDatos(event);">
                            <span class="mdl-textfield__error">Invalid user</span>
                        </div>
                    </div>
                    <div class="mdl-input">
                        <div class="mdl-icon">
                            <i class="mdi mdi-lock"></i>
                        </div>
                        <div id="input-password" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <label class="mdl-textfield__label" for="password">Password</label>
                            <input class="mdl-textfield__input" type="password" id="password" maxlength="50" onkeyup="verificarDatos(event);">
                            <span class="mdl-textfield__error">Invalid password</span>
                            <a id="showpass" class="mdl-button mdl-js-button mdl-js-button-ripple-effect mdl-button--icon"><i class="mdi mdi-visibility_off"></i></a>
                        </div>
                    </div>
                    <div class="mdl-input">
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                            <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">Remind me</span>
                        </label>
                    </div>
                    <div class="m-t-30">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="ingresar()">Login</button>
                    </div>
                </div>
            </div>
            <div class="login-bottom">
                <small>Copyright &copy;2017. All Rights Reserved.</small>
            </div>
        </div>
    </section>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            let CHECK = sessionStorage.getItem('CHECK');
            let USERNAME = sessionStorage.getItem('USERNAME');
            let PASS = sessionStorage.getItem('PASS');
           if(CHECK == 1) {
                $('#checkbox-2').prop('checked', true);
                $('#usuario').val(USERNAME);
                $('#password').val(PASS);
           }else {
                $('#checkbox-2').prop('checked', false);
                $('#usuario').val('');
                $('#password').val('');
           }
        });
    </script>
</body>
</html>