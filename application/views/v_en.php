<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="5 Main reasons why you choose SAP S/4 HANA">
    <meta name="keywords"               content="SAP Top 5 Reasons S/4 HANA,SAP, S/4 HANA">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="Febrero 15, 2018"/>
    <meta name="language"               content="en">
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
				<img class="logo-header" src="<?php echo RUTA_IMG?>logo/logo_home.png">
			</div>
			<div class="header-right">
				<button class="mdl-button mdl-js-button mdl-button--icon button-home" onclick="returnHome()"><i class="mdi mdi-home"></i></button>
				<div class="mdl-idioma">
					<select class="selectpicker" id="Idioma"  name="Idioma" onchange="cambiarIdioma()">
						<option value="Inglés">English</option>
						<option value="Español">Spanish</option>
						<option value="Portugués">Portuguese</option>
					</select>
				</div>
				<div class="background1"></div>
				<div class="background2"></div>
				<div class="background3"></div>
			</div>
		</div>
		<div class="chat">
			<a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005114" target="_blank"><img src="<?php echo RUTA_IMG?>logo/chat.png"><label>Contact Us</label></a>
		</div>
		<div id="home" class="window-center">
			<div id="window2" class="window-center">
				<div class="center-container">
					<div class="mdl-title inline">
						<strong class="inline">5</strong>
						<div class="mdl-letras inline">
							<p>main reasons</p>
							<h2>why choose SAP S/4 HANA</h2>
						</div>	
					</div>
					<div class="industrias inline">
						<h2>Seleccione su industria</h2>
						<div id="industriaServicio" class="mdl-industrias" onclick="modalIndustria(this.id)">
							<p class="inline">Servicios Profesionales</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/servicios.png">
							<div class="one none">Actualizar y reducir los procesos financieros.</div>
							<div class="two none">Tomar decisiones basadas en datos en tiempo real.</div>
							<div class="three none">Minimizar el riesgo de sus proyectos.</div>
							<div class="four none">Aumentar la precisi&oacute;n de sus propuestas.</div>
							<div class="five none">Dar al cliente un servicio de excelencia.</div>
						</div>
						<div id="industriaRetail" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Retail</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/retail.png">
							<div class="one none">Obtener mayores ingresos.</div>
							<div class="two none">Aumentar rentabilidad.</div>
							<div class="three none">Reducir la falta de stock.</div>
							<div class="four none">Mejorar la rotaci&oacute;n de inventario.</div>
							<div class="five none">Mejorar la experiencia del cliente.</div>
						</div>
						<div id="industriaProducto" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Productos de Consumo</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/productos.png">
							<div class="one none">Trabajar con informaci&oacute;n a tiempo real de inventarios y del flujo de los materiales.</div>
							<div class="two none">Crear valor en un mundo digital donde el consumidor est&aacute; a cargo.</div>
							<div class="three none">Los consumidores esperan un nuevo tipo de experiencia de compra. Una que le simplifique la vida.</div>
							<div class="four none">Entrelazar las estrategias comerciales con las mega tendencias tecnol&oacute;gicas: IoT, Inteligencia artificial, realidad aumentada, movilidad empresarial, entre otros.</div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaProceso" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Proceso y Manufactura</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/procesos.png">
							<div class="one none">Mercado din&aacute;mico, variabilidad de la demanda, mayor configuraci&oacute;n de productos, ventas y marketing omnicanal y plazos de entrega ajustados.</div>
							<div class="two none">Los clientes exigen una entrega r&aacute;pida y, sin embargo, exigen la m&aacute;s alta calidad a precios competitivos.</div>
							<div class="three none">La necesidad de contar con resultados de negocio m&aacute;s r&aacute;pidos con un menor costo operativo, gracias a los entornos de sistemas simplificados.</div>
							<div class="four none">La falta de flexibilidad para incluir demandas cambiantes en tiempo real en el proceso de planificaci&oacute;n lleva a una planificaci&oacute;n desactualizada e inexacta.</div>
							<div class="five none">Entornos de sistemas complejos y costosos con m&uacute;ltiples sistemas de plantas distribuidas que dan como resultado un alto TCO.</div>
						</div>
						<div id="industriaDistribucion" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Distribuci&oacute;n</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/distribucion.png">
							<div class="one none">Mejorar la capacidad y puntualidad en el despacho de pedidos.</div>
							<div class="two none">Reducir costos de abastecimiento, planificaci&oacute;n y precisi&oacute;n en el inventario.</div>
							<div class="three none">Usar servicios de valor agregado para crear nuevas fuentes de ingresos.</div>
							<div class="four none">Abordar la convergencia digital entre B2B y B2C</div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaHighTech" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Alta Tecnología</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/tech.png">
							<div class="one none">La velocidad del cambio tecnol&oacute;gico perjudica las perspectivas de crecimiento de su organizaci&oacute;n.</div>
							<div class="two none">La demanda de productos inteligentes conectados, acelera la necesidad de nuevas funcionalidades de cadena de suministro digital.</div>
							<div class="three none">Para seguir siendo competitivo debe ofrecer una atenci&oacute;n y una opci&oacute;n de autoservicio de clase mundial.</div>
							<div id="dontHave4" class="four none"></div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaBanking" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Servicios Financieros</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/banking.png">
							<div class="one none">Adoptar e incorporar con rapidez soluciones m&oacute;viles que sean intuitivas para aplicaciones de servicios, ventas, cajeros y sucursales.</div>
							<div class="two none">Involucrar a los clientes con una experiencia digital multicanal en tiempo real.</div>
							<div class="three none">Necesidad de automatizar los procedimientos manuales y agilizar los flujos de trabajo en el servicio al cliente y la gesti&oacute;n de procesos.</div>
							<div id="dontHave4" class="four none"></div>
							<div id="dontHave" class="five none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="window3" class="mdl-container-industria">
			<div id="industriaServicio-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 razones por las que SAP S/4 HANA es la soluci&oacute;n para la industria de <strong>Servicios Profesionales.</strong></h2>
					</div>
					<div class="card-industria inline">
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Visibilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Solo el 38% de las empresas tienen la visibilidad en tiempo real requerida</p>
		            				<label>Proporcionar una sola fuente consolidada con toda la informaci&oacute;n relacionada con el proyecto, y obtener un mejor compromiso 
		            				y productividad de los empleados.</label>
		            				<button id="verServicio1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ganancia.png">
		            				<p>Productividad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Mejorar en un 10% las utilidades</p>
									<label>Aumentar la productividad con un an&aacute;lisis sencillo de ofertas versus presupuestos, basados en los proyectos con &eacute;xito 
									como base para nuevas ofertas.</label>
									<button id="verServicio2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumentar la rentabilidad del proyecto</p>
									<label>Obtener procesos comerciales simplificados y redise&ntilde;ados que generan importantes beneficios, manejar informaci&oacute;n procesable, 
								    acelerar el flujo de efectivo y proteger la rentabilidad del proyecto.</label>
									<button id="verServicio3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Tiempo</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reducir en un 60% el tiempo de cierre de los servicios</p>
									<label>Acelerar la toma de decisiones de negocios basadas en informaci&oacute;n en tiempo real y en una &uacute;nica fuente de verdad.</label>
									<button id="verServicio4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Innovaci&oacute;n</p> 
		            				<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">El 60% de las empresas de servicios profesionales consideran urgente la transformaci&oacute;n digital</p>
									<label>Mejorar la satisfacci&oacute;n y compromiso con cliente para poder asegurar futuros ingresos mediante el an&aacute;lisis 
									permanente del comportamiento y necesidades de sus clientes.</label>
									<button id="verServicio5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaRetail-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 razones por las que SAP S/4 HANA es la soluci&oacute;n para la industria de <strong>Retail.</strong></h2>
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
		            				<p id="title">Atender la demanda del consumidor en cualquier lugar y momento</p>
									<label>Cumplir las expectativas del cliente con una buena experiencia de compra a trav&eacute;s de un proceso 
									optimizado para la gesti&oacute;n de la mercader&iacute;a y de los canales de distribuci&oacute;n, basado 
								    en toma de decisiones en tiempo real.</label>
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
		            				<p id="title">Reducir en un 35% los requisitos de capital</p>
									<label>Mejorar la productividad basado en las mejoras en el proceso de facturaci&oacute;n al contar con una &uacute;nica fuente 
									de verdad y lograr eliminar los errores en las previsiones financieras.</label>
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
		            				<p id="title">Aumentar la rentabilidad</p>
									<label>Reducir la rotaci&oacute;n del inventario a trav&eacute;s de procesos comerciales simplificados y redise&ntilde;ados, 
									manejo de informaci&oacute;n procesable y una optimizaci&oacute;n de la gesti&oacute;n del flujo de efectivo.</label>
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
		            				<p id="title">Reducir un 30% en el tiempo de toma de decisiones</p>
									<label>Disponer de la informaci&oacute;n en diversos formatos, adem&aacute;s de brindar una gu&iacute;a basada en los elementos 
								    de acci&oacute;n que requiere inmediata atenci&oacute;n, y con ello, poder reducir el tiempo de la toma de decisiones.</label>
									<button id="verRetail4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Productividad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Mejorar en un 30% la productividad</p>
									<label>Optimizar los procesos de la cadena de suministro para agilizar el restablecimiento, gestionar el stock 
									de una manera m&aacute;s precisa y monitorer el inventario de manera minuciosa.</label>
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
						<h2>Estas son las 5 razones por las que SAP S/4 HANA es la soluci&oacute;n para la industria de <strong>Productos de Consumo.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ganancia.png">
		            				<p>Satisfacci&oacute;n</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumentar en un 20% la satisfacci&oacute;n del cliente</p>
									<label>Cuando los consumidores pueden obtener lo que quieren, cuando y donde quieren, la diferenciaci&oacute;n ya no solo resulta de 
									la calidad, precio, valor o conveniencia, sino de experiencias subjetivas, matizadas e intangibles como alegr&iacute;a, confianza, 
									control y protecci&oacute;n.</label>
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
		            				<p id="title">Reducir un 30% los niveles de inventario</p>
									<label>La planificaci&oacute;n de requisitos de materiales, ejecutada en tiempo real, ofrece resultados de planificaci&oacute;n actualizados 
									y completos. Se trata de hacer correcciones oportunas del curso y minimizar el inventario disponible.</label>
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
		            				<p id="title">Reducir en un 15% la p&eacute;rdida de ingresos debido al desabastecimiento</p>
									<label>Un proceso redise&ntilde;ado por SAP S/4 HANA proporciona visibilidad del inventario en tiempo real con lotes de stock disminuidos, 
									entrega mejorada a tiempo y capacidad para innovar con servicios innovadores.</label>
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
		            				<p id="title">Un sistema en tiempo real con informes operativos en vivo</p>
									<label>Con SAP S / 4HANA, los informes de an&aacute;lisis se pueden generar instant&aacute;neamente para obtener una visi&oacute;n inmediata de los niveles de stock de inventario, ventas de productos, marketing y finanzas. El resultado es una imagen de 360 grados de lo que sucede en su organizaci&oacute;n.</label>
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
		            				<p id="title">Mejorar su planificaci&oacute;n de producci&oacute;n y programaci&oacute;n</p>
									<label>La planificaci&oacute;n de producci&oacute;n avanzada en SAP S / 4HANA proporciona anal&iacute;ticas potentes para un soporte de decisiones más s&oacute;lido, lo que permite una planificaci&oacute;n y ejecuci&oacute;n m&aacute;s r&aacute;pidas.</label>
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
						<h2>Estas son las 5 razones por las que SAP S/4 HANA es la soluci&oacute;n para la industria de <strong>Proceso y Manufactura.</strong></h2>
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
		            				<p id="title">Ahorre 38% en hardware y costos de operaci&oacute;n</p>
									<label>La eliminaci&oacute;n de &iacute;ndices de datos, agregados y redundancias reduce la huella de datos y el costo total de propiedad.</label>
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
		            				<p id="title">Optimice su cadena de suministro en un 12%</p>
									<label>SAP S/4 HANA le permite integrar toda su cadena de suministro y obtener una reducci&oacute;n del 12% en la cantidad de d&iacute;as del inventario. 
									Esto significa una reducci&oacute;n en los desabastecimientos y un panorama simplificado que genera un ahorro de costos log&iacute;sticos de hasta 10%.</label>
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
		            				<p id="title">Reducir los costos de adquisiciones en un 15%</p>
									<label>La productividad de la cadena de suministro se puede aumentar en un 15% con SAP S/4 HANA aprovechando las opciones de descuento 
									en los pagos anticipados, reduciendo el tiempo de adquisici&oacute;n de trabajadores en un tercio y maximizando el orden de inventario y 
									el seguimiento de materias primas en tiempo real.</label>
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
		            				<p id="title">Aumentar la capacidad de respuesta de las ventas</p>
									<label>Ad&aacute;ptese r&aacute;pidamente a los cambios en los resultados de producci&oacute;n en el mundo de las ventas hechas a medida. Dirija los 
									pedidos de los clientes directamente a la f&aacute;brica como pedidos de producci&oacute;n. Alinee la cadena de suministro y la planificaci&oacute;n de ventas.</label>
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
		            				<p id="title">Aumente la eficiencia de la operaci&oacute;n hasta en un 60%</p>
									<label>Con SAP S/4 HANA comience a experimentar total facilidad en la gesti&oacute;n de las operaciones de negocio. Reduzca sus d&iacute;as de ventas pendientes y entregue 
									facturas de clientes instant&aacute;neas y precisas. Ahora, sus clientes podr&aacute;n experimentar un servicio excelente y entrega puntual, que permanecer&aacute; sin 
									modificaciones durante la expansi&oacute;n r&aacute;pida.</label>
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
						<h2>Estas son las 5 razones por las que SAP S/4 HANA es la soluci&oacute;n para la industria de <strong>Distribuci&oacute;n.</strong></h2>
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
		            				<p id="title">Aumentar la eficiencia de la operaci&oacute;n hasta en un 60%</p>
									<label>Tener toda la informaci&oacute;n requerida en un solo lugar, significa poder gestionar los inventarios en tiempo real, tener el valor de los materiales, planificar las funciones en un sistema, y as&iacute; poder mejorar la productividad como la participaci&oacute;n de los empleados.</label>
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
		            				<p id="title">Reducir un 30% el inventario</p>
									<label>SAP S/4 HANA proporciona una administraci&oacute;n de inventarios simplificada hasta el detalle m&aacute;s m&iacute;nimo, con una &uacute;nica fuente de informaci&oacute;n certera y consolidada para analizar la rotaci&oacute;n de inventario, realizar un seguimiento del flujo de materiales y transferencias de stock, y tomar las medidas apropiadas.</label>
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
		            				<p id="title">50% de reducci&oacute;n en problemas de cumplimiento de pedidos.</p>
									<label>SAP S/4HANA proporciona una experiencia de usuario basada en roles, que simplifica y mejora el compromiso y la productividad de los empleados. A trav&eacute;s de un &uacute;nico punto de entrada para identificar f&aacute;cilmente problemas de pedidos y alertas en tiempo real se garantiza que los representantes de ventas internos puedan acceder directamente a sus respectivos documentos y utilizar funciones integradas de colaboraci&oacute;n para resolver problemas r&aacute;pidamente.</label>
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
		            				<p id="title">Anticipar la demanda futura del cliente</p>
									<label>Apenas un 20% de los distribuidores mayoristas est&aacute;n en capacidad de utilizar el an&aacute;lisis predictivo para anticipar el comportamiento del cliente. Con SAP S/4 HANA a trav&eacute;s de una experiencia de usuario simplificada, cuenta con informaci&oacute;n clave para comprender la demanda futura y actuar desde ahora.</label>
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
		            				<p id="title">Convertirse en un distribuidor en "tiempo real"</p>
									<label>Con SAP S/4 HANA, ver&aacute; c&oacute;mo reinventa su negocio pasando de ser un almac&eacute;n de productos que satisfacen la demanda a convertirse en una empresa centrada en la informaci&oacute;n y que la utiliza para abordar ineficiencias operativas de manera proactiva e impactando los resultados finales.</label>
									<button id="verDistribucion5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaHighTech-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas son las 5 razones por las que SAP S/4 HANA es la soluci&oacute;n para la industria de <strong>Alta Tecnolog&iacute;a.</strong></h2>
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
		            				<p id="title">Reduzca hasta en un 46% las quejas de clientes</p>
									<label>Haga que el pedido y la facturaci&oacute;n en tiempo real est&eacute;n disponibles para aumentar la entrega puntual, una mayor flexibilidad del modelo comercial y la eficiencia de la gesti&oacute;n de contratos.</label>
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
		            				<p id="title">Reduzca los procesos de trabajo radicalmente</p>
									<label>Con SAP S/4 HANA encuentre ahorros incre&iacute;bles y mu&eacute;vase a un solo sistema para los procesos, desde la compra hasta las finanzas y la contabilidad, hasta el taller de la f&aacute;brica y la administraci&oacute;n de contratos.</label>
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
		            				<p id="title">Acelere sus cotizaciones de soluciones y no solo productos</p>
									<label>Habilite a sus ejecutivos de cuenta para crear cotizaciones que ofrezcan una soluci&oacute;n completa que se convertir&aacute;n resultados comerciales para sus clientes. No solo productos. Utilice S/4 HANA para tener la visi&oacute;n integral de todas las partes involucradas: software, hardware y servicios asociados.</label>
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
		            				<p id="title">Optimice su cadena de suministro en un 12%</p>
									<label>Integre toda su cadena de suministro y obtenga una reducci&oacute;n del 12% en la cantidad de d&iacute;as en el inventario. Logre una reducci&oacute;n de desabastecimiento y un panorama simplificado que genere un ahorro de costos de log&iacute;stica de hasta 10%.</label>
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
		            				<p id="title">Tome acci&oacute;n sobre los datos de IoT en tiempo real</p>
									<label>La miniaturizaci&oacute;n de sensores, combinada con un mayor ancho de banda de red, est&aacute; creando un tesoro de datos que es m&aacute;s &uacute;til cuando se analiza y se act&uacute;a en tiempo real. Con SAP S/4 HANA tiene el poder para hacerlo.</label>
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
						<h2>Estas son las 5 razones por las que SAP S/4 HANA es la soluci&oacute;n para la industria de <strong>Servicios Financieros.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/maquina.png">
		            				<p>Seguridad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce en 30% el tiempo de llegada de nuevos productos.</p>
									<label>Reducci&oacute;n en el tiempo de llegada al mercado para los nuevos productos por empresas que incorporan procesos de ciclo de vida formales.</label>
									<button id="verBancking1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Digital</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumenta su rentabilidad</p>
									<label>Organizaciones que adoptan SAP S/4 HANA generan un 23% m&aacute;s de ingresos al usar el poder de  la informaci&oacute;n para identificar ventajas estrat&eacute;gicas y competitivas.</label>
									<button id="verBancking2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/expandir.png">
		            				<p>Clientes</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Mayor visibilidad y disponibilidad de datos</p>
									<label>Con SAP S/4 HANA cuenta con acceso en tiempo real a los datos financieros con la capacidad de desglosarlos en el nivel de cada &iacute;tem; as&iacute; como una fusi&oacute;n de finanzas y control en un Libro Diario universal, que crea una &uacute;nica fuente de verdad; la funci&oacute;n de finanzas centrales elimina la necesidad de agregados y tablas y de acumular costos en los niveles operativos m&aacute;s bajos</label>
									<button id="verBancking3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver m&aacute;s</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Inversiones</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Mayor velocidad, agilidad y precisi&oacute;n de la proyecci&oacute;n</p>
									<label>Con SAP S/4 HANA los procesos y las funciones de planificaci&oacute;n se integran en el sistema transaccional, permitiendo una planificaci&oacute;n de ciclo cerrado en todos los niveles.  Con esta ventaja, logra una reducci&oacute;n del 25-50% en el tiempo de los ciclos de proyecci&oacute;n e informes financieros.</label>
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
		            				<p id="title">Obtener informaci&oacute;n empresarial en tiempo real</p>
									<label>SAP S/4HANA le permite obtener informaci&oacute;n sobre cualquier informaci&oacute;n de cualquier lugar en tiempo real. Podr&aacute; acelerar dr&aacute;sticamente 
									la planificaci&oacute;n, ejecuci&oacute;n, predicci&oacute;n y simulaci&oacute;n al m&aacute;s alto nivel de granularidad, sin la engorrosa consolidaci&oacute;n de datos y otros procesos 
									manuales. Puede construir y probar situaciones hipot&eacute;ticas y aplicar lo que ha aprendido para tomar mejores decisiones y aumentar la eficiencia.</label>
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
							<p>main reasons</p>
							<h2>Why choose SAP S/4 HANA</h2>
						</div>	
					</div>
					<div class="formulario inline">
						<h2>We have more information to share with you.</h2>
						<p>Complete the form to download it</p>
						<form class="mdl-formulario text-left">
		        			<div class="content-datos">
		        				<div class="content-personal">
		        					<p><i class="mdi mdi-arrow_downward"></i>Enter your data here</p>
		        				</div>
		        				<div class="content-separacion">
		        					<p>o</p>
		        				</div>
		        				<div class="content-linkedin">
		        					<a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>Sing in with LinkedIn</a>
		        				</div>
		        			</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
								    <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Full name">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
							    	<input type="text" class="form-control NEGRO_FONDO" id="cargo" maxlength="50" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="Position">
							  	</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="text" class="form-control" id="empresa" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Company">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Phone">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="Email">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-select mdl-standar">
									<select class="selectpicker" id="relacion" name="relacion" title="Relationship with SAP">
										<option value="Cliente">customer</option>
										<option value="Cliente potencial">Potential Customer</option>
										<option value="Consultor">Consultant</option>
										<option value="Empleado SAP">SAP employee</option>
										<option value="Estudiante">Student</option>
										<option value="Partner">Partner</option>
										<option value="Partner potencial">potential Partner</option>
										<option value="Prensa/Analista">Press/Analyst</option>
									</select>
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="text" class="form-control" id="pais" maxlength="100" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="País">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<p class="text-contacto">I’d like to be contacted by a sales representative:</p>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
										<input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
										<span class="mdl-radio__label">By email</span>
									</label>
		    					</div>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
										<input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
										<span class="mdl-radio__label">By phone</span>
									</label>
		    					</div>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-ambos">
										<input type="radio" id="c-ambos" class="mdl-radio__button" name="options" value="3">
										<span class="mdl-radio__label">Both</span>
									</label>
		    					</div>
		    				</div>
		    				<div class="col-xs-12 mdl-label m-t-10">
								<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
									<input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
									<span class="mdl-checkbox__label f-s-14" style="">I have read and agree to the <a class="FONDO_TERMINOS" href="https://www.sap.com/corporate/en/legal/terms-of-use.html" target="_blank" style="">SAP terms and conditions</a></span>
								</label>
		    				</div>
		    				<div class="col-xs-12 text-right m-t-25">
								<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="solicitarEstimacion();">Send information</button>
		    				</div>
		        		</form>
					</div>
				</div>
			</div>
			<div class="mdl-agradecimiento window-center opacity-done">
				<h2>Thanks for your interest</h2>
				<p>A SAP representative will contact you to help you take the first step.</p>
				<div class="subrayado-title">
					<div class="subrayado one"></div>
					<div class="subrayado two"></div>
					<div class="subrayado three"></div>
					<div class="subrayado four"></div>
				</div>
				<small>Mientras tanto <a href="#" onclick="returnCaso()">vea c&oacute;mo</a> empresas del sector de <strong class="nameIndustria"></strong> est&aacute;n teniendo &eacute;xito con SAP.</small>
			</div>
		</div>
	</section>
	<!--MODAL-->
	<div class="modal fade" id="ModalIndustria" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content">
                <div class="mdl-card" >
                    <div class="mdl-card__title p-0">
                    	<h2></h2>
						<img alt="" src="">
					</div>
				    <div class="mdl-card__supporting-text text-left">
                        <p>The challenges they face are</p>
                        <ul>
                        	<li class="one"></li>
                        	<li class="two"></li>
                        	<li class="three"></li>
                        	<li class="four"></li>
                        	<li class="five"></li>
                        </ul>
					</div> 
    				<div class="mdl-card__actions text-right">       				    
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="closeModal()">Close</button>        				    
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised" onclick="selectIndustria()">Select</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalMasIndustria" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md text-center">
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
    <script src="<?php echo RUTA_JS?>index_en.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        $(window).load(function() {
        	if(<?php echo $pantalla ?> == 5){
        		var formulario = $('#formulario');
	        	var homePage   = $('#home');
			    $('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			    homePage.css("display","none");
				formulario.addClass('animated fadeInLeft');
				$('#email').val("<?php echo $email_link ?>");
				$('#nombre_completo').val("<?php echo $nombre_comple ?>");
				if("<?php echo $comp ?>" == ''){
					$('#empresa').css('border-color','red');
				}
				if("<?php echo $tit ?>" == ''){
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