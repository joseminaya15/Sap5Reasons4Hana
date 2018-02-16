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
							<div class="one none">Ejecutar los procesos en tiempo real.</div>
							<div class="two none">Mejorar el conocimiento y la visibilidad financiera.</div>
							<div class="three none">Aumentar el riesgo de sus proyectos.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="window3" class="mdl-container-industria">
			<div id="industriaServicio-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Para la industria de <strong>Servicios Profesionales</strong> en la que usted se desempe&ntilde;a, considere estas 5 poderosas
						 razones por qu&eacute; elegir SAP S/4 HANA para transformar su negocio.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de contenido empresarial creado por máquinas para 2018. La experiencia, talento, presentación de servicios y compromiso obligan a las empresas de este rubro a repensar sus modelos comerciales, impulsando el crecimiento no lineal y poder cambiar la industria tal como la conocemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
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
			<div id="industriaRetail-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Para la industria de <strong>Retail</strong> en la que usted se desempe&ntilde;a, considere estas 5 poderosas
						 razones por qu&eacute; elegir SAP S/4 HANA para transformar su negocio.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de contenido empresarial creado por máquinas para 2018. La experiencia, talento, presentación de servicios y compromiso obligan a las empresas de este rubro a repensar sus modelos comerciales, impulsando el crecimiento no lineal y poder cambiar la industria tal como la conocemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
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
			<div id="industriaProducto-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Para la industria de <strong>Productos de consumo</strong> en la que usted se desempe&ntilde;a, considere estas 5 poderosas
						 razones por qu&eacute; elegir SAP S/4 HANA para transformar su negocio.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de contenido empresarial creado por máquinas para 2018. La experiencia, talento, presentación de servicios y compromiso obligan a las empresas de este rubro a repensar sus modelos comerciales, impulsando el crecimiento no lineal y poder cambiar la industria tal como la conocemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
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
			<div id="industriaProceso-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Para la industria de <strong>Proceso y Manufactura</strong> en la que usted se desempe&ntilde;a, considere estas 5 poderosas
						 razones por qu&eacute; elegir SAP S/4 HANA para transformar su negocio.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de contenido empresarial creado por máquinas para 2018. La experiencia, talento, presentación de servicios y compromiso obligan a las empresas de este rubro a repensar sus modelos comerciales, impulsando el crecimiento no lineal y poder cambiar la industria tal como la conocemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
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
			<div id="industriaDistribucion-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Para la industria de <strong>Distribuci&oacute;n</strong> en la que usted se desempe&ntilde;a, considere estas 5 poderosas
						 razones por qu&eacute; elegir SAP S/4 HANA para transformar su negocio.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de contenido empresarial creado por máquinas para 2018. La experiencia, talento, presentación de servicios y compromiso obligan a las empresas de este rubro a repensar sus modelos comerciales, impulsando el crecimiento no lineal y poder cambiar la industria tal como la conocemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
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
			<div id="industriaBanking-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Para la industria de <strong>Banking</strong> en la que usted se desempe&ntilde;a, considere estas 5 poderosas
						 razones por qu&eacute; elegir SAP S/4 HANA para transformar su negocio.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de contenido empresarial creado por máquinas para 2018. La experiencia, talento, presentación de servicios y compromiso obligan a las empresas de este rubro a repensar sus modelos comerciales, impulsando el crecimiento no lineal y poder cambiar la industria tal como la conocemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
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
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidad</p> 
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
		</div>
		<div class="mdl-agradecimiento">
			<h2>Gracias por su interés</h2>
			<p>Un representante de SAP se pondrá en contacto con Usted para ayudarlo a dar el primer paso.</p>
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
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
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