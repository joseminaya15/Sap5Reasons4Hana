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
    <meta name="language"               content="pt-br">
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
						<option value="Inglés">English</option>
						<option value="Español" disabled="true">Spanish</option>
						<option value="Portugués" disabled="true">Portuguese</option>
					</select>
				</div>
				<div class="background3"></div>
				<div class="background2"></div>
				<div class="background1"></div>
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
						<h2>Select your industry</h2>
						<div id="industriaServicio" class="mdl-industrias" onclick="modalIndustria(this.id)">
							<p class="inline">Professional services</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/servicios.png">
							<div class="one none">Be updated and be able to reduce with real-time financial processes.</div>
							<div class="two none">Minimize the risk of your projects.</div>
							<div class="three none">Increase the accuracy of your bids.</div>
						</div>
						<div id="industriaRetail" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Retail</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/retail.png">
							<div class="one none">Reduce lack of stock and obtain a higher income per employee.</div>
							<div class="two none">Improve inventory turnover and increase profitability.</div>
							<div class="three none">Greater availability of time to serve the customer.</div>
						</div>
						<div id="industriaProducto" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Consumer products</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/productos.png">
							<div class="one none">Optimize material requirements planning.</div>
							<div class="two none">Digitalize sales improving productivity with lower cost of ownership.</div>
							<div class="three none">Increase flexibility with business line extensions.</div>
						</div>
						<div id="industriaProceso" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Process and Manufacturing</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/procesos.png">
							<div class="one none">Reduce loss of income due to lack of stock.</div>
							<div class="two none">Improve the order and delivery experience.</div>
							<div class="three none">Reduce inventory levels.</div>
						</div>
						<div id="industriaDistribucion" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Distribution</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/distribucion.png">
							<div class="one none">Improve the capacity and timeliness of order fulfillment.</div>
							<div class="two none">Reduce levels and time in inventories.</div>
							<div class="three none">Increase customer satisfaction.</div>
						</div>
						<div id="industriaHighTech" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">High Tech</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/tech.png">
							<div class="one none">Reduce the loss of income due to lack of stock and days of inventory.</div>
							<div class="two none">Improve the quote-to-order process, and reduce customer complaints.</div>
							<div class="three none">Increase the line of business with products and innovation.</div>
						</div>
						<div id="industriaBanking" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Banking</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/banking.png">
							<div class="one none">Run the processes in real time.</div>
							<div class="two none">Improve knowledge and financial visibility.</div>
							<div class="three none">Increase the risk of your projects.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="window3" class="mdl-container-industria">
			<div id="industriaServicio-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>For the industry of <strong>Professional services</strong> in which you work, consider these 5 powerful reasons why choose SAP S/4 HANA to transform your business.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% of business content created by machines by 2018. The experience, talent, presentation of services and commitment force companies in this area to rethink their business models, promoting non-linear growth and change the industry as we know it.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
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
						<h2>For the industry of <strong>Retail</strong> in which you perform, consider these 5 powerful reasons why choose SAP S/4 HANA to transform your business.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% of business content created by machines by 2018. The experience, talent, presentation of services and commitment force companies in this area to rethink their business models, promoting non-linear growth and change the industry as we know it.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
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
						<h2>For the <strong>consumer products </strong> industry in which you perform, consider these 5 powerful
						reasons why choose SAP S/4 HANA to transform your business.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% of business content created by machines by 2018. The experience, talent, presentation of services and commitment force companies in this area to rethink their business models, promoting non-linear growth and change the industry as we know it.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take advantage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
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
						<h2>For the industry of <strong>Process and Manufacturing</strong> in which you perform, consider these 5 powerful
						reasons why choose SAP S/4 HANA to transform your business.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% of business content created by machines by 2018. The experience, talent, presentation of services and commitment force companies in this area to rethink their business models, promoting non-linear growth and change the industry as we know IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus in growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
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
						<h2>For the industry of <strong>Distribution</strong> in which you perform, consider these 5 powerful
						reasons why; choose SAP S/4 HANA to transform your business...</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% of business content created by machines by 2018. The experience, talent, presentation of services and commitment force companies in this area to rethink their business models, promoting non-linear growth and change the industry as we know it.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaHighTech-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>For the industry of <strong>High Tech</strong> in which you perform, consider these 5 powerful
						reasons why choose SAP S/4 HANA to transform your business.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% of business content created by machines by 2018. The experience, talent, presentation of services and commitment force companies in this area to rethink their business models, promoting non-linear growth and change the industry as we know it.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage for the cloud to focus on growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your TI.</label>
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
						<h2>For the industry of <strong>Banking</strong> in which you perform, consider these 5 powerful reasons why choose SAP S / 4 HANA to transform your business.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% of business content created by machines by 2018. The experience, talent, presentation of services and commitment force companies in this area to rethink their business models, promoting non-linear growth and change the industry as we know it.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus on growing, and not on implementing and managing your TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus and growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus and growing, and not on implementing and managing your IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Cost efectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Take adventage of the cloud to focus and growing, and not on implementing and managing your IT.</label>
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
			</div>
		</div>
	</section>
	<!--MODAL-->
	<div class="modal fade" id="ModalIndustria" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content">
                <div class="mdl-card" >
                    <div class="mdl-card__title p-0">
                    	<h2>The challenges they face are</h2>
						<img alt="" src="">
					</div>
				    <div class="mdl-card__supporting-text text-left">
                        <p>The challenges they face are</p>
                        <ul>
                        	<li class="one"></li>
                        	<li class="two"></li>
                        	<li class="three"></li>
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