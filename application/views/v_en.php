<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="5 Razones principalesp por qué elegir SAP S/4HANA">
    <meta name="keywords"               content="SAP Top 5 Reasons S/4 HANA,SAP, S/4 HANA">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="Febrero 15, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	<title>SAP Top 5 Reasons S/4HANA</title>
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
	<!--Google Tag Manager --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P W9PLW6');</script><!--End Google Tag Manager -->
	<!--Google Tag Manager  (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P W9PLW6"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!--End Google Tag Manager  (noscript) -->
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
						<option value="Español">Espa&ntilde;ol</option>
						<option value="Portugués">Portugu&ecirc;s</option>
					</select>
				</div>
				<div class="background1"></div>
				<div class="background2"></div>
				<div class="background3"></div>
			</div>
		</div>
		<div class="chat">
			<a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005114" target="_blank"><img src="<?php echo RUTA_IMG?>logo/chat.png"><label>chat with us</label></a>
		</div>
		<div id="home" class="window-center">
			<div id="window2" class="window-center">
				<div class="center-container">
					<div class="mdl-title inline">
						<strong class="inline">5</strong>
						<div class="mdl-letras inline">
							<p>main reasons</p>
							<h2>to choose SAP S/4HANA</h2>
						</div>
						<div class="subrayado-title">
							<div class="subrayado one"></div>
							<div class="subrayado two"></div>
							<div class="subrayado three"></div>
							<div class="subrayado four"></div>
						</div>	
					</div>
					<div class="industrias inline">
						<h2>Select an industry</h2>
						<div id="industriaServicio" class="mdl-industrias" onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Professional Services','ProfessionalServices')">Professional Services</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/servicios.png">
							<div class="one none">Update and reduce financial processes.</div>
							<div class="two none">Make decisions based on data in real time.</div>
							<div class="three none">Minimize risks in your projects.</div>
							<div class="four none">Increase precision in your proposals.</div>
							<div class="five none">Offer the customer a service of excellence.</div>
						</div>
						<div id="industriaRetail" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Retail','Retail')">Retail</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/retail.png">
							<div class="one none">Get more income.</div>
							<div class="two none">Increase profitability.</div>
							<div class="three none">Reduce the lack of stock.</div>
							<div class="four none">Improve inventory rotation.</div>
							<div class="five none">Improve customer experience.</div>
						</div>
						<div id="industriaProducto" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Consumer Products','ConsumerProducts')">Consumer Products</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/productos.png">
							<div class="one none">Work with information in real time of inventories and the flow of materials.</div>
							<div class="two none">Create value in a digital world where the consumer is in charge.</div>
							<div class="three none">Innovate the shopping experience.</div>
							<div class="four none">Align business strategies with mega technological trends.</div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaProceso" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Process and Manufacturing','ProcessManufacturing')">Process and Manufacturing</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/procesos.png">
							<div class="one none">Dynamic market, demand variability and adjusted delivery times.</div>
							<div class="two none">Maintain the highest quality at competitive prices.</div>
							<div class="three none">Have faster business results with a lower operating cost.</div>
							<div class="four none">Complex and expensive system environments with multiple distributed plant systems that result in a high TCO.</div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaDistribucion" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Distribution','Distribution')">Distribution</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/distribucion.png">
							<div class="one none">Improve the capacity and punctuality in the dispatch of orders.</div>
							<div class="two none">Reduce supply costs, planning and precision in the inventory.</div>
							<div class="three none">Use value-added services to create new sources of income.</div>
							<div id="dontHave4" class="four none"></div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaHighTech" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('High Technology','HighTechnology')">High Technology</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/tech.png">
							<div class="one none">The speed of technological change harms the growth prospects of your organization.</div>
							<div class="two none">The demand for connected smart products accelerates the need for new digital supply chain functionalities.</div>
							<div class="three none">To remain competitive, you must offer world-class self-service and care.</div>
							<div id="dontHave4" class="four none"></div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaBanking" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Financial Services','FinancialServices')">Financial Services</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/banking.png">
							<div class="one none">Adopt and quickly incorporate mobile solutions that are intuitive for service, sales, terminal and branch applications.</div>
							<div class="two none">Involve customers with a multichannel digital experience in real time.</div>
							<div class="three none">Need to automate manual procedures and streamline workflows in customer service and process management.</div>
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
						<h2>These are the 5 reasons why SAP S/4HANA is the preferred solution in the <strong>Professional Services</strong> industry.</h2>
					</div>
					<div class="card-industria inline">
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Visibility</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Only 38% of companies have the visibility in real time required</p>
		            				<label>Provide a single consolidated source with all the information related to the project, and obtain a better commitment and productivity of the employees.</label>
		            				<button id="verServicio1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ganancia.png">
		            				<p>Efficiency</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Improve profits up to 10%</p>
									<label>Increase productivity with a simple analysis of offers versus budgets, based on successful projects as a basis for new offers.</label>
									<button id="verServicio2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Profitability</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Increase project profitability</p>
									<label>Obtain simplified and redesigned business processes that generate significant benefits, manage actionable information, accelerate cash flow and protect the profitability of the project.</label>
									<button id="verServicio3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Atomization</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Currently up to 20% of business content is being generated by the systems</p>
									<label>The digitization of the four fundamental elements of services (experience, talent, service provision and client commitment) forces professional services companies to rethink their business models and focus on how to boost revenue growth without corresponding growth in your employee base.</label>
									<button id="verServicio4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Innovation</p> 
		            				<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">60% of professional services companies consider digital transformation an urgent issue</p>
									<label>Improve customer satisfaction and commitment to ensure future income through the permanent analysis of the behavior and needs of its customers.</label>
									<button id="verServicio5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaRetail-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>These are the 5 reasons why SAP S/4HANA is the preferred solution in the <strong>Retail.</strong> industry</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/venta.png">
		            				<p>Modernization</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Address consumer demand anywhere, anytime</p>
									<label>Meet the expectations of the customer with a good shopping experience through an optimized process for the management of merchandise and distribution channels, based on decision making in real time.</label>
									<button id="verRetail1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/capital.png">
		            				<p>Efficiency</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce capital requirements by up to 35%</p>
									<label>Improve productivity based on improvements in the billing process by having a single source of truth and eliminate errors in financial forecasts.</label>
									<button id="verRetail2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Profitability</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Increase profitability</p>
									<label>Reduce inventory turnover through simplified and redesigned business processes, manageable information and optimize cash flow management.</label>
									<button id="verRetail3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/decision.png">
		            				<p>Intelligence</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce up to 30% in decision-making time</p>
									<label>Have the information in various formats, in addition to providing a guide based on the elements of action that requires immediate attention, and with it, to reduce the time of decision making.</label>
									<button id="verRetail4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Productivity</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Improve productivity up to 30%</p>
									<label>Optimize the processes of the supply chain to speed up recovery, manage stock more accurately and monitor inventory in a thorough manner.</label>
									<button id="verRetail5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaProducto-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>These are the 5 reasons why SAP S/4HANA is the preferred solution in the <strong>Consumer products</strong> industry.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ganancia.png">
		            				<p>Loyalty</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Increase customer satisfaction by up to 20%</p>
									<label>When consumers can get what they want, when and where they want, differentiation no longer results only from quality, price, value or convenience, but from subjective, nuanced and intangible experiences such as joy, confidence, control and protection.</label>
									<button id="verProducto1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/inventario.png">
		            				<p>Efficiency</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce inventory levels by up to 30%</p>
									<label>Material requirements planning, executed in real time, offers updated and complete planning results. It is about making timely course corrections and minimizing available inventory.</label>
									<button id="verProducto2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Savings</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce up to 15% the loss of income due to shortages</p>
									<label>A process redesigned by SAP S/4HANA provides inventory visibility in real time with reduced stock lots, improved on-time delivery and ability to innovate with innovative services.</label>
									<button id="verProducto3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/costo.png">
		            				<p>Visibility</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">A real-time system with live operational reports</p>
									<label>With SAP S/4HANA, analysis reports can be instantly generated to get an immediate view of stock levels of inventory, product sales, marketing and finance. The result is a 360-degree image of what happens in your organization.</label>
									<button id="verProducto4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/entrega.png">
		            				<p>Optimization</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Improve your production and programming planning</p>
									<label>Advanced production planning in SAP S/4HANA provides powerful analytics for more robust decision support, allowing for faster planning and execution.</label>
									<button id="verProducto5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaProceso-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>These are the 5 reasons why SAP S/4HANA is the preferred solution in the <strong>Process and Manufacturing</strong> industry.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/expandir.png">
		            				<p>Diversification</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Expand sales opportunities up to 15-20%</p>
									<label>SAP S/4HANA incorporates agility through a simplified platform that allows the exchange of data in real time between sales, customer service and business leaders, greater efficiency due to the elimination of duplicate data and a data analysis simplified lead to more effective and specific sales.</label>
									<button id="verProceso1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Optimization</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Optimize your supply chain up to 12%</p>
									<label>SAP S/4HANA allows you to integrate your entire supply chain and obtain a reduction of up to 12% in the number of inventory days. This means a reduction in shortages and a simplified scenario that generates a logistics cost savings of 10%.</label>
									<button id="verProceso2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/eficiencia.png">
		            				<p>Efficiency</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce procurement costs up to 15%</p>
									<label>The productivity of the supply chain can be increased up to 15% with SAP S/4HANA taking advantage of discount options in advance payments, maximizing the order of inventory and the tracking of raw materials in real time.</label>
									<button id="verProceso3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/adquisicion.png">
		            				<p>Agility</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Increase sales response capacity</p>
									<label>Adapt quickly to changes in production results in the world of tailor-made sales. Direct customer orders directly to the factory as production orders. Align the supply chain and sales planning.</label>
									<button id="verProceso4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/costo.png">
		            				<p>Effectiveness</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Increase the efficiency of the operation up to 60%</p>
									<label>With SAP S/4HANA start experiencing full smooth management of business operations. Now, your customers will be able to experience excellent service and on-time delivery, which will remain unchanged during rapid expansion.</label>
									<button id="verProceso5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaDistribucion-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>These are the 5 reasons why SAP S/4HANA is the preferred solution in the <strong>Distribution</strong> industry.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ingresos.png">
		            				<p>Efficiency</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Increase the efficiency of the operation up to 60%</p>
									<label>Having all the required information in one place means being able to manage inventories in real time, having the value of the materials, planning the functions in a system, and thus being able to improve productivity such as the participation of employees.</label>
									<button id="verDistribucion1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/comportamiento.png">
		            				<p>Optimization</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce inventory by up to 30%</p>
									<label>SAP S/4HANA provides simplified inventory management down to the smallest detail, with a single source of accurate and consolidated information to analyze inventory turnover, track material flow and stock transfers, and take appropriate action.</label>
									<button id="verDistribucion2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/reduccion.png">
		            				<p>Productivity</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce up to 50% in order fulfillment problems.</p>
									<label>SAP S/4HANA provides a role-based user experience that simplifies and improves employee engagement and productivity. Through a single-entry point to easily identify order problems and alerts in real time, it is guaranteed that internal sales representatives can directly access your respective documents and use integrated collaboration functions to solve problems quickly.</label>
									<button id="verDistribucion3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cumplimiento.png">
		            				<p>Predictability</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Advance the customer's future demand</p>
									<label>Only 20% of wholesale distributors are able to use predictive analytics to anticipate customer behavior. With SAP S/4HANA through a simplified user experience, you have key information to understand future demand and act now.</label>
									<button id="verDistribucion4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Modernization</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Become a distributor in "real time"</p>
									<label>With SAP S/4HANA, you will see how you reinvent your business from being a warehouse of products that meets the demand to becoming an information-based company that uses it to address operational inefficiencies proactively and impacting the final results.</label>
									<button id="verDistribucion5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaHighTech-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>These are the 5 reasons why SAP S/4HANA is the preferred solution in the <strong>High technology</strong> industry.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cotizacion.png">
		            				<p>Agility</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce customer complaints by up to 46%</p>
									<label>Make orders and billing in real time available to increase on-time delivery, greater flexibility of the business model and the efficiency of contract management.</label>
									<button id="verTech1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/trabajo.png">
		            				<p>Optimization</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce work processes radically</p>
									<label>With SAP S/4HANA find incredible savings by having a unique system for processes from purchase to finance and accounting and from factory to contract management</label>
									<button id="verTech2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Evolution</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Quote solutions. Not only products</p>
									<label>Enable your account executives to create quotes that offer a complete solution that will turn into business results for your clients. Use SAP S/4HANA to have the integral vision of all the parties involved: software, hardware and associated services.</label>
									<button id="verTech3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/inventario.png">
		            				<p>Efficiency</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Optimize your supply chain up to 12%</p>
									<label>Integrate your entire supply chain and reduce the number of days in the inventory by up to 12%. Achieve a reduction of shortages and a simplified scenario that generates a logistics cost savings of 10%.</label>
									<button id="verTech4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/fabricacion.png">
		            				<p>Innovation</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Take action on IoT data in real time</p>
									<label>The miniaturization of sensors, combined with increased network bandwidth, is creating a treasure trove of data that is most useful when analyzed and acted on in real time. With SAP S/4HANA has the power to do so.</label>
									<button id="verTech5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaBanking-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>These are the 5 reasons why SAP S/4HANA is the preferred solution in the  <strong>Financial services</strong> industry.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/maquina.png">
		            				<p>Acceleration</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduce up to 30% the time of arrival of new products.</p>
									<label>With SAP S/4HANA you can reduce the time of arrival to the market for your new products, which will allow you to stay ahead of the competition and keep your customers captive</label>
									<button id="verBancking1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Profitability</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Increase your profitability</p>
									<label>Organizations that adopt SAP S/4HANA generate up to 23% more revenue by using the power of information to identify strategic and competitive advantages.</label>
									<button id="verBancking2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/expandir.png">
		            				<p>Visibility</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Greater visibility and availability of data</p>
									<label>With SAP S/4HANA you can have real-time access to financial data with the ability to break them down at the level of each item. You can build and test hypothetical situations and apply what you have learned to make better decisions and increase efficiency.</label>
									<button id="verBancking3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Predictability</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Greater speed, agility and precision of the projection</p>
									<label>With SAP S/4HANA processes and planning functions are integrated into the transactional system, allowing a closed cycle planning at all levels. With this advantage, you can achieves a reduction of 25% to 50% in the time of the projection cycles and financial reports.</label>
									<button id="verBancking4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Agility </p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Get business information in real time</p>
									<label>SAP S/4HANA allows you to obtain information about any information from anywhere in real time. You can drastically accelerate planning, execution, prediction and simulation at the highest level of granularity, without the cumbersome consolidation of data and other manual processes.</label>
									<button id="verBancking5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">see more</button>
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
				<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-next button-industria button-left button-back" onclick="buttonBack()"><i class="mdi-keyboard_arrow_left"></i></button>
				<div class="center-container">
					<div class="mdl-title inline">
						<strong class="inline">5</strong>
						<div class="mdl-letras inline">
							<p>main reasons</p>
							<h2>to choose SAP S/4HANA</h2>
						</div>	
						<div class="subrayado-title">
							<div class="subrayado one"></div>
							<div class="subrayado two"></div>
							<div class="subrayado three"></div>
							<div class="subrayado four"></div>
						</div>
					</div>
					<div class="formulario inline">
						<h2>Know a success story in  <label class="nameIndustria"></label></h2>
						<p class="descarga">Complete the form to download it</p>
						<form class="mdl-formulario text-left">
		        			<div class="content-datos">
		        				<div class="content-personal">
		        					<p><i class="mdi mdi-arrow_downward"></i>Enter your data here</p>
		        				</div>
		        				<div class="content-separacion">
		        					<p>o</p>
		        				</div>
		        				<div class="content-linkedin">
		        					<a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>Connect via LinkedIn</a>
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
										<option value="Customer">Customer</option>
										<option value="Potential customer">Potential customer</option>
										<option value="Consultant">Consultant</option>
										<option value="SAP employee">SAP employee</option>
										<option value="Student">Student</option>
										<option value="Partner">Partner</option>
										<option value="Potential partner">Potential partner</option>
										<option value="Press/Analyst">Press/Analyst</option>
									</select>
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="text" class="form-control" id="pais" maxlength="100" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="País">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<p class="text-contacto">I want to be contacted by a sales representative:</p>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
										<input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
										<span class="mdl-radio__label">By Email</span>
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
		    				<div class="col-xs-12 js-checkbox m-t-10 js-flex js-terminos">
                                <div class="js-flex--left">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                    </label>
                                    <span onclick="openModal()">I have read and accept the</span>
                                </div>
                                <a href="http://www.sap-latam.com/5reasons_hana/public/pdf/SAP_Privacy_Statement_Top5_Reasons_eng.pdf" target="_blank">SAP Terms and Conditions</a>
                            </div>
		    				<div class="col-xs-12 text-right m-t-25">
								<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="solicitarEstimacion();">Send information</button>
		    				</div>
		        		</form>
					</div>
				</div>
			</div>
			<div class="mdl-agradecimiento window-center opacity-done">
				<div class="center-container">
					<h2>Thank you for your interest</h2>
					<p>We are confident that SAP S/4HANA will help you accelerate your digital transformation. An SAP specialist will contact you to take the first step.</p>
					<div class="subrayado-title">
						<div class="subrayado one"></div>
						<div class="subrayado two"></div>
						<div class="subrayado three"></div>
						<div class="subrayado four"></div>
					</div>
					<!-- <small>Learn about the success of a company in our region in the Professional Services sector. <strong class="nameIndustria"></strong> Download <a id="donwloadCaso" href="#" onclick="returnCaso()">here</a></small> -->
					<small>Learn about the success of <strong class="nameCompany"></strong> in the <strong class="nameIndustria"></strong> sector. Download <a id="donwloadCaso" href="#" onclick="returnCaso()">here</a></small>
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
                    	<h2></h2>
						<img alt="" src="">
					</div>
				    <div class="mdl-card__supporting-text text-left">
                        <p>The challenges they face are:</p>
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
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised" onclick="selectIndustria()">Next</button>
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
    <div class="modal fade" id="ModalPoliticas" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="mdl-card" >
                    <div class="mdl-card__title">
						<h2>SAP Marketing Consent Statement</h2>
					</div>
				    <div class="mdl-card__supporting-text p-t-0">
                    	<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect js-label" for="checkbox-3">
							<input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
							<span class="mdl-checkbox__label f-s-14">Would you like to receive additional information on SAP products and services along with information related to this inquiry? By checking this box, you agree that your contact details will be used by SAP Marketing in accordance with the <a href="http://www.sap-latam.com/5reasons_hana/public/pdf/SAP_Consent_Statement_Jan_18.pdf" target="_blank" target="_blank">SAP Marketing Consent Statement</a>.</span>
						</label>
						<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect js-label" for="checkbox-2">
							<input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
							<span class="mdl-checkbox__label f-s-14">I agree that <span>SAP may share the information</span> I have provided hereunder with the <span>SAP group</span> in order that that they also may send additional marketing-related communications to me.</span>
						</label>
					</div>
					<div class="mdl-card__actions">
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--default" onclick="closePoliticas()">Cerrar</button>
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="acceptPoliticas()">Aceptar</button>
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
        $(window).load(function(){
        	if(<?php echo $pantalla ?> == 5) {
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
				nameIndustria("<?php echo $idIndustria ?>");
        	}
        });
    </script>
</body>
</html>