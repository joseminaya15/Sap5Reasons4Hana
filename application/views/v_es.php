<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="5 Razones principalesp por qué elegir SAP S/4 HANA">
    <meta name="keywords"               content="SAP Top 5 Reasons S/4 HANA,SAP, S/4 HANA">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="Febrero 15, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	<title>SAP Top 5 Reasons S/4 HANA</title>
	<link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.ico">
	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
</head>
<body>
	<section id="principal">
		<div class="header">
			<div class="header-left">
				<img class="logo-header" src="<?php echo RUTA_IMG?>logo/logo_favicon.png">
				<h2>SAP S/4 HANA</h2>
			</div>
			<div class="header-right">
				<div class="mdl-idioma">
					<select class="selectpicker" id="Idioma"  name="Idioma" onchange="cambiarIdioma()">
						<option value="Español">Espa&ntilde;ol</option>
						<option value="Inglés">Ingl&eacute;s</option>
						<option value="Portugués">Portugu&eacute;s</option>
					</select>
				</div>
				<div class="background3"></div>
				<div class="background2"></div>
				<div class="background1"></div>
			</div>
		</div>
		<div class="chat">
			<a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005114" target="_blank"><img src="<?php echo RUTA_IMG?>logo/chat.png"><label>Cont&aacute;ctenos</label></a>
		</div>
		<div id="home" class="height">
			<div id="window1" class="mdl-container">
				<div class="center-container">
					<div class="mdl-title inline">
						<strong class="inline">5</strong>
						<div class="mdl-letras inline">
							<p>razones principales</p>
							<h2>por qu&eacute; elegir SAP S/4 HANA</h2>
						</div>	
					</div>
					<div class="mdl-imagenes inline">
						<img src="<?php echo RUTA_IMG?>industrias/servicios.png">
						<img src="<?php echo RUTA_IMG?>industrias/retail.png">
						<img src="<?php echo RUTA_IMG?>industrias/productos.png">
						<img src="<?php echo RUTA_IMG?>industrias/procesos.png">
						<img src="<?php echo RUTA_IMG?>industrias/distribucion.png">
						<img src="<?php echo RUTA_IMG?>industrias/banking.png">
					</div>
					<div class="mdl-home-next inline">
						<button id="" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" onclick="buttonNext()"><i class="mdi mdi-keyboard_arrow_right"></i></button>
					</div>
				</div>
			</div>
			<div id="window2" class="mdl-container opacity-done">
				<div class="center-container">
					<div class="mdl-title inline">
						<strong class="inline">5</strong>
						<div class="mdl-letras inline">
							<p>razones principales</p>
							<h2>por qu&eacute; elegir SAP S/4 HANA</h2>
						</div>	
					</div>
					<div class="industrias inline">
						<h2>Seleccione su industria</h2>
						<div id="industriaServicio" class="mdl-industrias" onclick="modalIndustria(this.id)">
							<p class="inline">Servicios Profesionales</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/servicios.png">
							<div class="one none">Ejecutar los procesos en tiempo real</div>
							<div class="two none">Mejorar el conocimiento y la visibilidad financiera</div>
							<div class="three none">Aumentar el riesgo de sus proyectos</div>
						</div>
						<div id="industriaRetail" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Retail</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/retail.png">
							<div class="one none">Ejecutar los procesos en tiempo real</div>
							<div class="two none">Mejorar el conocimiento y la visibilidad financiera</div>
							<div class="three none">Aumentar el riesgo de sus proyectos</div>
						</div>
						<div id="industriaProducto" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Productos de Consumo</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/productos.png">
							<div class="one none">Ejecutar los procesos en tiempo real</div>
							<div class="two none">Mejorar el conocimiento y la visibilidad financiera</div>
							<div class="three none">Aumentar el riesgo de sus proyectos</div>
						</div>
						<div id="industriaProceso" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Proceso y Manufactura</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/procesos.png">
							<div class="one none">Ejecutar los procesos en tiempo real</div>
							<div class="two none">Mejorar el conocimiento y la visibilidad financiera</div>
							<div class="three none">Aumentar el riesgo de sus proyectos</div>
						</div>
						<div id="industriaDistribucion" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Distribuci&oacute;n</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/distribucion.png">
							<div class="one none">Ejecutar los procesos en tiempo real</div>
							<div class="two none">Mejorar el conocimiento y la visibilidad financiera</div>
							<div class="three none">Aumentar el riesgo de sus proyectos</div>
						</div>
						<div id="industriaBanking" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Banking</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/banking.png">
							<div class="one none">Ejecutar los procesos en tiempo real</div>
							<div class="two none">Mejorar el conocimiento y la visibilidad financiera</div>
							<div class="three none">Aumentar el riesgo de sus proyectos</div>
						</div>
					</div>
				</div>
			</div>
			<div id="window3" class="">
				<div id="industriaServicio-contenido" class="mdl-container opacity-done">
					<div class="center-container">
						<div class="contenido-industria inline">
							<h2>Para la industria de <strong>Servicios Profesionales</strong> en la que usted se desempe&ntilde;a, considere estas 5 poderosas
							 razones por qu&eacute; elegir SAP S/4 HANA para transformar su negocio.</h2>
						</div>
						<div class="card-industria inline">
							<div class="mdl-card-question mdl-card-3">
			            		<div class="flip-card">
			            			<div class="card-front">
			            				<img src="<?php echo RUTA_IMG?>cards/card-cloud.png">
			            				<p>Cloud</p> 
										<i class="mdi mdi-add"></i>
			            			</div>
			            			<div class="card-back">
			            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
										<i class="mdi mdi-remove"></i>
			            			</div>
			            		</div>
			            	</div>
						</div>
					</div>
				</div>
				<div id="industriaRetail-contenido" class="mdl-container opacity-done">
					<div class="center-container">
						<h2>Retail</h2>
					</div>
				</div>
				<div id="industriaProducto-contenido" class="mdl-container opacity-done">
					<div class="center-container">
						<h2>Producto</h2>
					</div>
				</div>
				<div id="industriaProceso-contenido" class="mdl-container opacity-done">
					<div class="center-container">
						<h2>Proceso</h2>
					</div>
				</div>
				<div id="industriaDistribucion-contenido" class="mdl-container opacity-done">
					<div class="center-container">
						<h2>Distribucion</h2>
					</div>
				</div>
				<div id="industriaBanking-contenido" class="mdl-container opacity-done">
					<div class="center-container">
						<h2>Banking</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--MODAL-->
	<div class="modal fade" id="ModalIndustria" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content">
                <div class="mdl-card" >
                    <div class="mdl-card__title p-0">
						<img alt="" src="">
					</div>
				    <div class="mdl-card__supporting-text text-left">
                        <p></p>
                        <ul>
                        	<li class="one"></li>
                        	<li class="two"></li>
                        	<li class="three"></li>
                        </ul>
					</div> 
    				<div class="mdl-card__actions text-right">       				    
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="closeModal()">Cerrar</button>        				    
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised" onclick="selectIndustria()">Seleccionar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>index_es.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
    </script>
</body>
</html>