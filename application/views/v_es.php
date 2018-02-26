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
	<script type="text/javascript">
		/*(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-114404560-1', 'auto');
			ga('send', 'pageview');*/
	</script>
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
						<option value="Inglés" disabled="true">Ingl&eacute;s</option>
						<option value="Portugués" disabled="true">Portugu&eacute;s</option>
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
		<div id="home" class="window-center">
			<div id="window2" class="window-center">
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
							<div class="one none">Estar actualizado y poder reducir con los procesos financieros en tiempo real.</div>
							<div class="two none">Minimizar el riesgo de sus proyectos.</div>
							<div class="three none">Aumentar la precisi&oacute;n de sus licitaciones.</div>
						</div>
						<div id="industriaRetail" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Retail</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/retail.png">
							<div class="one none">Reducir falta de stock y obtener un mayor ingreso por empleado.</div>
							<div class="two none">Mejorar la rotaci&oacute;n de inventario y aumentar la rentabilidad.</div>
							<div class="three none">Mayor disponibilidad de tiempo para atender al cliente.</div>
						</div>
						<div id="industriaProducto" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Productos de Consumo</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/productos.png">
							<div class="one none">Optimizar la planificaci&oacute;n de requerimiento de materiales.</div>
							<div class="two none">Digitalizar las ventas mejorando la productividad con un menor costo de propiedad.</div>
							<div class="three none">Aumente la flexibilidad con las extensiones de la l&iacute;nea de negocio.</div>
						</div>
						<div id="industriaProceso" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Proceso y Manufactura</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/procesos.png">
							<div class="one none">Reducir perdida de ingresos por falta de stock.</div>
							<div class="two none">Mejorar la experiencia del pedido y entrega.</div>
							<div class="three none">Reducir los niveles de inventarios.</div>
						</div>
						<div id="industriaDistribucion" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Distribuci&oacute;n</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/distribucion.png">
							<div class="one none">Mejorar la capacidad y puntualidad de despacho de pedidos.</div>
							<div class="two none">Reducir los niveles y tiempo en los inventarios.</div>
							<div class="three none">Aumentar la satisfacci&oacute;n del cliente.</div>
						</div>
						<div id="industriaHighTech" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">High Tech</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/tech.png">
							<div class="one none">Reducir la p&eacute;rdida de ingresos por falta de stock y d&iacute;as de inventario.</div>
							<div class="two none">Mejorar el proceso de quote – to – order, y reducir las quejas de clientes.</div>
							<div class="three none">Aumentar la l&iacute;nea de negocio con productos e innovaci&oacute;n.</div>
						</div>
						<div id="industriaBanking" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Banking</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/banking.png">
							<div class="one none">La transformación digital es importante o críticamente importante para su supervivencia.</div>
							<div class="two none">La industria de servicios financieros se centran cada vez más en blockchain.</div>
							<div class="three none">La tecnología permitirá innovar rápidamente y enfrentar mejor los desafíos de seguridad.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="window3" class="mdl-container-industria">
			<div id="industriaServicio-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 soluciones que SAP S/4 Hana tiene para tu industria de <strong>SERVICIOS PROFESIONALES.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/maquina.png">
		            				<p>Máquinas</p> 
		            				<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">20% de contenido empresarial creado por máquinas para 2018</p>
									<label>La experiencia, talento, presentaci&oacute;n de servicios y compromiso obligan a las empresas de este rubro a repensar sus modelos comerciales, impulsando el crecimiento no lineal y poder cambiar la industria tal como la conocemos.</label>
									<button id="verServicio1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Visibilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Solo el 38% de las empresas tiene la visibilidad en tiempo real requerida</p>
		            				<label>Proporciona una fuente consolidada de toda la información minuciosa relacionada con el proyecto, mejorando el compromiso y productividad de los empleados.</label>
		            				<button id="verServicio2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ganancia.png">
		            				<p>Productividad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Mejore la tasa de ganancia de la oferta en un 10%</p>
									<label>Aumenta la productividad del usuario, con un an&aacute;lisis sencillo de ofertas versus presupuestos, basado en los proyectos exitosos como base para nuevas ofertas.</label>
									<button id="verServicio3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumenta la rentabilidad en 0.5pp</p>
									<label>Proporciona procesos comerciales simplificados y redise&ntilde;ados, manejando informaci&oacute;n procesable, acelerando el flujo de efectivo y protegiendo la rentabilidad el proyecto.</label>
									<button id="verServicio4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Tiempo</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce el tiempo para cerrar en un 60%</p>
									<label>Ejecutar en vivo, con informaci&oacute;n en tiempo real basada en una &uacute;nica fuente de verdad. Tome las mejores decisiones y mejore los negocios.</label>
									<button id="verBancking5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaRetail-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 soluciones que SAP S/4 Hana tiene para tu industria de <strong>RETAIL.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/venta.png">
		            				<p>Productos</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">100% nueva línea de productos para venta al por menor</p>
									<label>La soluci&oacute;n redise&ntilde;ada ejecuta un modelo de datos simplificado y permite a los empleados minoristas una experiencia de usuario avanzada y constante desde las sedes hasta la tienda.</label>
									<button id="verRetail1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/capital.png">
		            				<p>Capital</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reducir los requisitos de capital en un 35%</p>
									<label>Obt&eacute;n una &uacute;nica fuente de verdad y logra eliminar en el &aacute;rea de finanzas los errores de previsi&oacute;n, reduciendo el capital un 35%, y mejorando la productividad del procedimiento de las facturas en un 40%.</label>
									<button id="verRetail2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumenta la rentabilidad en 0.5pp</p>
									<label>Proporciona procesos comerciales simplificados y redise&ntilde;ados, manejando informaci&oacute;n procesable, acelerando el flujo de efectivo y protegiendo la rentabilidad el proyecto.</label>
									<button id="verRetail3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/decision.png">
		            				<p>Decisiones</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reducir el tiempo de toma de decisiones en un 30%</p>
									<label>Muestra la informaci&oacute;n en diversos formatos, adicional brinda una gu&iacute;a basada en los elementos de acci&oacute;n que requiere inmediata atenci&oacute;n, reducido el tiempo de toma de decisiones.</label>
									<button id="verRetail4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rebajas</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce las rebajas en un 20%</p>
									<label>Nuevo concepto de estacionalidad es impulsar todos los procesos de ciclo de vida del producto desde la creaci&oacute;n, adquisici&oacute;n, venta, calculo de precios y administraci&oacute;n de existencias.</label>
									<button id="verRetail5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaProducto-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 soluciones que SAP S/4 Hana tiene para tu industria de <strong>PRODUCTOS DE CONSUMO.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ganancia.png">
		            				<p>Satisfacción</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumenta la satisfacci&oacute;n del cliente en un 20%</p>
									<label>Gesti&oacute;n de inventario real y flujo de materiales, significa menos desabastecimientos y mejor rendimiento de tiempo en las entregas.</label>
									<button id="verProducto1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/inventario.png">
		            				<p>Inventario</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reducir el inventario en el sitio en un 30%</p>
									<label>Planificar los requerimientos de material, ejecutada en tiempo real y ofrecer resultados de planificaci&oacute;n actualizados y completos.</label>
									<button id="verProducto2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Ingresos</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzca la p&eacute;rdida de ingresos debido a desabastecimientos en un 15%</p>
									<label>Confirma y permite verificar la disponibilidad de abastecimiento en tiempo real, teniendo mayor satisfacci&oacute;n del cliente reflejando crecimiento del negocio.</label>
									<button id="verProducto3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/costo.png">
		            				<p>Costos</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce los costos totales de fabricaci&oacute;n en un 10%</p>
									<label>Planifica los requisitos de materiales, teniendo un menor tiempo de ciclo de fabricaci&oacute;n, menor costo y mayor eficiencia.</label>
									<button id="verProducto4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/entrega.png">
		            				<p>Entregas</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumenta las entregas a tiempo en un 30%</p>
									<label>Informa en tiempo real los estados de las &oacute;rdenes de venta, teniendo una soluci&oacute;n r&aacute;pida para cumplir los pedidos y aumentar las entregas a tiempo.</label>
									<button id="verProducto5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaProceso-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 soluciones que SAP S/4 Hana tiene para tu industria de <strong>PROCESO Y MANUFACTURA.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/expandir.png">
		            				<p>Pipeline</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Expandir el pipeline de ventas en un 15-20%</p>
									<label>Intercambio de datos a tiempo real entre las ventas, el servicio al cliente y los l&iacute;deres empresariales, evitando datos duplicados y un an&aacute;lisis simple que lleva a ventas efectivas y espec&iacute;ficas.</label>
									<button id="verProceso1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Tiempo</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce el tiempo para cerrar en un 60%</p>
									<label>Ejecutar en vivo, con informaci&oacute;n en tiempo real basada en una &uacute;nica fuente de verdad. Tome las mejores decisiones y mejore los negocios.</label>
									<button id="verProceso2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/eficiencia.png">
		            				<p>Eficiencia</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumente la eficiencia de la operaci&oacute;n hasta en un 60%</p>
									<label>Gesti&oacute;n de inventarios en tiempo real y valoraci&oacute;n de materiales, mejorando la satisfacci&oacute;n, compromiso y productividad del empleado.</label>
									<button id="verProceso3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/adquisicion.png">
		            				<p>Adquisici&oacute;n</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reducir los costos de adquisici&oacute;n en un 15%</p>
									<label>Aprovechar los descuentos en pago anticipado, reduciendo el tiempo de adquisici&oacute;n de trabajadores en un tercio, maximizando el orden de inventario y seguimiento de materias primas en tiempo real.</label>
									<button id="verProceso4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/costo.png">
		            				<p>Ahorro</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Ahorre 38% en hardware y costos de operaci&oacute;n</p>
									<label>La eliminaci&oacute;n de &iacute;ndices de datos, agregados y redundancias reduce la huella de datos y el costo total de propiedad.</label>
									<button id="verProceso5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaDistribucion-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 soluciones que SAP S/4 Hana tiene para tu industria de <strong>DISTRIBUCI&Oacute;N.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ingresos.png">
		            				<p>Ingresos</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">$ 50 mil millones en ingresos incrementales</p>
									<label>Necesitan tecnolog&iacute;a digital para crear, entregar y sostener nuevas experiencias. Es necesario que empleen toda la tecnolog&iacute;a posible como aplicaciones para clientes en su estrategia o quedarse atr&aacute;s.</label>
									<button id="verDistribucion1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/comportamiento.png">
		            				<p>Comportamiento</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">&#60; 20% puede predecir el comportamiento del cliente</p>
									<label>SAP S/4 HANA proporciona una experiencia de usuario simplificada, basada en una &uacute;nica fuente de verdad consolidada para proporcionar informaci&oacute;n detallada.</label>
									<button id="verDistribucion2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/reduccion.png">
		            				<p>Inventario</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">30% de reducci&oacute;n en los niveles de inventario</p>
									<label>Inventarios con una &uacute;nica fuente de verdad que, consolidada para analizar la rotaci&oacute;n del inventario, realizar seguimientos de flujo de materiales y transferencias de stock, y tomar las medidas apropiadas.</label>
									<button id="verDistribucion3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cumplimiento.png">
		            				<p>Pedidos</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">50% de reducci&oacute;n en problemas de cumplimiento de pedidos</p>
									<label>Permite identificar f&aacute;cilmente un problema de pedidos y alertas en tiempo real para excepciones. Adem&aacute;s de aprovechar las capacidades de verificaci&oacute;n y liberaci&oacute;n de productos, priorizando a los clientes claves.</label>
									<button id="verDistribucion4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Tiempo</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce el tiempo para cerrar en un 60%</p>
									<label>Ejecutar en vivo, con informaci&oacute;n en tiempo real basada en una &uacute;nica fuente de verdad. Tome las mejores decisiones y mejore los negocios.</label>
									<button id="verBancking5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaHighTech-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 soluciones que SAP S/4 Hana tiene para tu industria de <strong>HIGH TECH.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cotizacion.png">
		            				<p>Cotizaci&oacute;n</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Proceso de cotizaci&oacute;n 95% m&aacute;s r&aacute;pido</p>
									<label>Facilitar a los ejecutivos crear una cotizaci&oacute;n para entregar resultados comerciales, no solo productos.</label>
									<button id="verTech1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/trabajo.png">
		            				<p>Procesos</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzca el trabajo del proceso en un 50%</p>
									<label>Tenga ahorros incre&iacute;bles con un solo sistema para procesos que van desde la compra hasta las finanzas y contabilidad, desde la f&aacute;brica y la administraci&oacute;n de contactos.</label>
									<button id="verTech2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Conformidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Mant&eacute;ngase en conformidad con IFRS15</p>
									<label>Prep&aacute;rese para las nuevas regulaciones de reconocimiento de ingresos IFRS15 para 2018 y tenga una de la soluci&oacute;n m&aacute;s moderna de reconcomiendo de ingresos.</label>
									<button id="verTech3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/inventario.png">
		            				<p>Inventario</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">30% de disminuci&oacute;n en los niveles de inventario</p>
									<label>Visualizar y optimizar los procesos de ventas desde el prospecto de pago con informaci&oacute;n detallada sobre el ciclo de ventas de principio a fin.</label>
									<button id="verTech4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/fabricacion.png">
		            				<p>Fabricaci&oacute;n</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzca los costos de fabricaci&oacute;n en un 10%</p>
									<label>Obtener mayor flexibilidad de pedidos en funci&oacute;n de las prioridades del cliente y productos individuales.</label>
									<button id="verTech5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaBanking-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 soluciones que SAP S/4 Hana tiene para tu industria de <strong>Banking.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/costo.png">
		            				<p>Seguridad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">El 63% de los bancos y aseguradoras realizan inversiones fuertes en plataformas de seguridad</p>
									<label>Est&aacute;n dirigiendo sus presupuestos de TI hacia herramientas fundacionales como tecnolog&iacute;a m&oacute;vil, nube y Big Data; cambiado drásticamente los procesos de negocio desde operaciones de back-office hasta interacciones con el cliente.</label>
									<button id="verBancking1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/fabricacion.png">
		            				<p>Digital</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">El 54% de los bancos y aseguradoras pequeñas y medianas est&aacute;n pasando a lo digital</p>
									<label>La entidad financiera afirma que la transformaci&oacute;n digital es cr&iacute;tica para la supervivencia de su organizaci&oacute;n hoy, y 84% dice que lo será en un plazo de cinco a&ntilde;os.</label>
									<button id="verBancking2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/reduccion.png">
		            				<p>Clientes</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">El 67% de los servicios financieros anticipan un mayor valor de satisfacci&oacute;n y compromiso del cliente</p>
									<label>Los cuales son factores cr&iacute;ticos para una industria que enfrenta una competencia potencialmente desestabilizadora desde las start-ups hasta los comercios minoristas y los gigantes de la tecnolog&iacute;a.</label>
									<button id="verBancking3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Inversiones</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">El 23% de las entidades financieras invertir&aacute;n en libros de contabilidad digital</p>
									<label>El rango de innovaciones desde la banca abierta hasta las criptomonedas amenaza con ser disruptivos frente a los modelos de negocio existentes.</label>
									<button id="verBancking4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Tiempo</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce el tiempo para cerrar en un 60%</p>
									<label>Ejecutar en vivo, con informaci&oacute;n en tiempo real basada en una &uacute;nica fuente de verdad. Tome las mejores decisiones y mejore los negocios.</label>
									<button id="verBancking5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-next button-industria button-left" onclick="Prev()"><i class="mdi-keyboard_arrow_left"></i></button>
			<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-next button-industria button-right" onclick="Next()"><i class="mdi-keyboard_arrow_right"></i></button>
		</div>
		<div id="window4">
			<div id="formulario" class="window-center opacity-done">
				<div class="center-container">
					<div class="mdl-title inline">
						<strong class="inline">5</strong>
						<div class="mdl-letras inline">
							<p>razones principales</p>
							<h2>por qu&eacute; elegir SAP S/4 HANA</h2>
						</div>	
					</div>
					<div class="formulario inline">
						<h2>Tenemos m&aacute;s informaci&oacute;n para compartir con usted.</h2>
						<p>Complete el formulario para descargarlo</p>
						<form class="mdl-formulario text-left">
		        			<div class="content-datos">
		        				<div class="content-personal">
		        					<p><i class="mdi mdi-arrow_downward"></i>Introduzca aqu&iacute; sus datos</p>
		        				</div>
		        				<div class="content-separacion">
		        					<p>o</p>
		        				</div>
		        				<div class="content-linkedin">
		        					<a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>Conéctese v&iacute;a LinkedIn</a>
		        				</div>
		        			</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
								    <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Nombre Completo">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
							    	<input type="text" class="form-control NEGRO_FONDO" id="cargo" maxlength="50" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="Cargo">
							  	</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="text" class="form-control" id="empresa" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Empresa">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Teléfono">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="Email">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-select mdl-standar">
									<select class="selectpicker" id="relacion" name="relacion" title="Relación con SAP">
										<option value="Cliente">Cliente</option>
										<option value="Cliente potencial">Cliente potencial</option>
										<option value="Consultor">Consultor</option>
										<option value="Empleado SAP">Empleado SAP</option>
										<option value="Estudiante">Estudiante</option>
										<option value="Partner">Partner</option>
										<option value="Partner potencial">Partner potencial</option>
										<option value="Prensa/Analista">Prensa/Analista</option>
									</select>
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="text" class="form-control" id="pais" maxlength="100" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="País">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<p class="text-contacto">Quiero ser contactado por representante de ventas:</p>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
										<input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
										<span class="mdl-radio__label">Por Email</span>
									</label>
		    					</div>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
										<input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
										<span class="mdl-radio__label">Por tel&eacute;fono</span>
									</label>
		    					</div>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-ambos">
										<input type="radio" id="c-ambos" class="mdl-radio__button" name="options" value="3">
										<span class="mdl-radio__label">Ambos</span>
									</label>
		    					</div>
		    				</div>
		    				<div class="col-xs-12 mdl-label m-t-10">
								<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
									<input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
									<span class="mdl-checkbox__label f-s-14" style="">He le&iacute;do y acepto los <a class="FONDO_TERMINOS" href="https://www.sap.com/corporate/en/legal/terms-of-use.html" target="_blank" style="">Términos y condiciones de SAP</a></span>
								</label>
		    				</div>
		    				<div class="col-xs-12 text-right m-t-25">
								<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="solicitarEstimacion();">Enviar informaci&oacute;n</button>
		    				</div>
		        		</form>
					</div>
				</div>
			</div>
			<div class="mdl-agradecimiento window-center opacity-done">
				<div class="center-container">
					<h2>Gracias por su interés</h2>
					<p>Un especialista de SAP lo contactar&aacute; para escuchar su caso y orientarlo a dar el primer paso.</p>
					<small>Mientras tanto vea como los clientes de servicios profesionales est&aacute;n teniendo éxito con SAP.</small>
					<a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="returnCaso()">Ver caso de &eacute;xito</a>
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
                    	<h2>Los retos que enfrentan son</h2>
						<img alt="" src="">
					</div>
				    <div class="mdl-card__supporting-text text-left">
                        <p>Los retos que enfrentan son</p>
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
    <div class="modal fade" id="ModalMasIndustria" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content">
                <div class="mdl-card" >
                    <div class="mdl-card__title">
						<img alt="" src="">
					</div>
				    <div class="mdl-card__supporting-text">
                        <p></p>
                        <label></label>
					</div> 
    				<div class="mdl-card__menu">       				    
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" data-dismiss="modal"><i class="mdi mdi-close"></i></button>
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
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>index_es.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        $(window).load(function() {
        	if(<?php echo $pantalla ?> == 5) {
        		var formulario   = $('#formulario');
	        	var homePage      = $('#home');
			    $('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			    homePage.css("display","none");
				formulario.addClass('animated fadeInLeft');
				$('#email').val("<?php echo $email_link ?>");
				$('#nombre_completo').val("<?php echo $nombre_comple ?>");
				if("<?php echo $comp ?>" == '') {
					$('#empresa').css('border-color','red');
				}
				if("<?php echo $tit ?>" == '') {
					$('#cargo').css('border-color','red');
				}
				$('#cargo').val("<?php echo $tit ?>");
				$('#empresa').val("<?php echo $comp ?>");
				$('#pais').val("<?php echo $pais_link ?>");
				$('#telefono').css('border-color','red');
        	}
        });
    </script>
</body>
</html>