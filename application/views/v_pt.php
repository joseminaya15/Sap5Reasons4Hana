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
						<option value="Portugués">Portugu&ecirc;s</option>
						<option value="Español" disabled="true">Espanhol</option>
						<option value="Inglés" disabled="true">Ingl&ecirc;s</option>
					</select>
				</div>
				<div class="background3"></div>
				<div class="background2"></div>
				<div class="background1"></div>
			</div>
		</div>
		<div class="chat">
			<a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005114" target="_blank"><img src="<?php echo RUTA_IMG?>logo/chat.png"><label>Entre em contato conosco</label></a>
		</div>
		<div id="home" class="window-center">
			<div id="window2" class="window-center">
				<div class="center-container">
					<div class="mdl-title inline">
						<strong class="inline">5</strong>
						<div class="mdl-letras inline">
							<p>principais motivos</p>
							<h2>por que escolher SAP S/4 HANA</h2>
						</div>	
					</div>
					<div class="industrias inline">
						<h2>Seleccione su industria</h2>
						<div id="industriaServicio" class="mdl-industrias" onclick="modalIndustria(this.id)">
							<p class="inline">Servi&ccedil;os profissionais</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/servicios.png">
							<div class="one none">Seja atualizado e seja capaz de reduzir com os processos financeiros em tempo real.</div>
							<div class="two none">Minimize o risco de seus projetos.</div>
							<div class="three none">Aumente a precisão das suas propostas.</div>
						</div>
						<div id="industriaRetail" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Retail</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/retail.png">
							<div class="one none">Reduzir a falta de estoque e obter uma maior renda por empregado.</div>
							<div class="two none">Melhorar o volume de negócios e aumentar a lucratividade.</div>
							<div class="three none">Maior disponibilidade de tempo para atender o cliente.</div>
						</div>
						<div id="industriaProducto" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Produtos de consumo</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/productos.png">
							<div class="one none">Otimizar planejamento de requisitos de material.</div>
							<div class="two none">Digitalizar as vendas melhorando a produtividade com menor custo de propriedade.</div>
							<div class="three none">Aumente a flexibilidade com as extensões de linha de neg&oacute;cio.</div>
						</div>
						<div id="industriaProceso" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Processo e fabrica&ccedil;&atilde;o</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/procesos.png">
							<div class="one none">Reduza a perda de renda por falta de estoque.</div>
							<div class="two none">Mejorar la experiencia del pedido y entrega.</div>
							<div class="three none">Reduzir os níveis de invent&aacute;rio.</div>
						</div>
						<div id="industriaDistribucion" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Distribui&ccedil;&aacute;o</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/distribucion.png">
							<div class="one none">Melhore a capacidade e a pontualidade do cumprimento das ordens.</div>
							<div class="two none">Reduza os níveis e o tempo nos estoques.</div>
							<div class="three none">Aumenta a satisfa&ccedil;&atilde;o do cliente.</div>
						</div>
						<div id="industriaHighTech" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">High Tech</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/tech.png">
							<div class="one none">Reduzir a perda de renda por falta de estoque e dias de inventário.</div>
							<div class="two none">Melhore o processo de cita&ccedil;&atilde;o por encomenda e reduza as reclama&ccedil;&otilde;es dos clientes.</div>
							<div class="three none">Aumentar a linha de neg&oacute;cios com produtos e inova&ccedil;&atilde;o.</div>
						</div>
						<div id="industriaBanking" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline">Banking</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/banking.png">
							<div class="one none">Execute os processos em tempo real.</div>
							<div class="two none">Melhorar conhecimento e visibilidade financeira.</div>
							<div class="three none">Aumente o risco de seus projetos.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="window3" class="mdl-container-industria">
			<div id="industriaServicio-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Para a ind&uacute;stria de <strong>Servi&ccedil;os profissionais</strong> em que você executa, considere estes 5 poderosos raz&otilde;es pelas quais escolher SAP S/4 HANA para transformar sua empresa.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de conte&uacute;do comercial criado por m&uacute;quinas at&uacute; 2018. A experiência, o talento, a apresenta&ccedil;&atilde;o de servi&ccedil;os e o compromisso for&ccedil;a as empresas nesta &aacute;rea a repensar seus modelos de neg&oacute;cios, promovendo o crescimento n&atilde;o-linear e alterando a ind&uacute;stria conforme a conhecemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no crescimento e n&atilde;o na implementação e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no crescimento e não na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no crescimento e ñao implementa&ccedil;&atilde; e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem paa se concentrar no crescimento e ñao implementa&ccdil;&atilde; e gerenciamento de sua TI.</label>
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
						<h2>Para a ind&uacute;stria de <strong>Retail</strong> em que voc&ecirc; executa, considere estes 5 poderosos
						razões pelas quais escolher SAP S/4 HANA para transformar sua empresa.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de conte&uacute;do comercial criado por m&aacute;quinas at&uacute; 2018. A experi&ecirc;ncia, o talento, a apresenta&ccedil;&ntilde;o de servi&ccdil;os e o compromisso for&ccdil;a as empresas nesta &aacute;rea a repensar seus modelos de neg&oacute;cios, promovendo o crescimento n&ntilde;o-linear e alterando a ind&uacute;stria conforme a conhecemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no crescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
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
						<h2>Para a ind&uacute;stria de <strong>Produtos de consumo</strong> em que voc&ecirc; executa, considere estes 5 poderosos
						raz&otilde;es pelas quais escolher SAP S/4 HANA para transformar sua empresa.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de conte&uacute;do comercial criado por m&aacute;quinas at&eacute; 2018. A experi&ecirc;ncia, o talento, a apresenta&ccedil;&atilde;o de serviços e o compromisso for&ccedil;a as empresas nesta &aacute;rea a repensar seus modelos de neg&oacute;cios, promovendo o crescimento n&atilde;o-linear e alterando a ind&uacute;stria conforme a conhecemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implenta&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
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
						<h2>Para a ind&uacute;stria de <strong>Processo e fabrica&ccedil;&atilde;o</strong> em que voc&ecirc; executa, considere estes 5 poderosos
						raz&otilde;es pelas quais escolher SAP S/4 HANA para transformar sua empresa.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de conte&uacute;do comercial criado por m&aacute;quinas at&eacute; 2018. A experi&ecirc;ncia, o talento, a apresenta&ccedil;&atilde;o de serviços e o compromisso for&ccedil;a as empresas nesta &aacute;rea a repensar seus modelos de neg&oacute;cios, promovendo o crescimento n&atilde;o-linear e alterando a ind&uacute;stria conforme a conhecemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se concentrar no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
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
						<h2>Para a ind&uacute;stria de <strong>Distribui&ccedil;&atilde;o</strong> em que voc&ecirc; executa, considere estes 5 poderosos
						raz&otilde;es pelas quais escolher SAP S/4 HANA para transformar sua empresa.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de conte&uacute;do comercial criado por m&aacute;quinas at&eacute; 2018. A experi&ecirc;ncia, o talento, a apresenta&ccedil;&atile;o de servi&ccedil;os e o compromisso for&ccedil;a as empresas nesta &aacute;rea a repensar seus modelos de neg&oacute;cios, promovendo o crescimento n&ntilde;o-linear e alterando a ind&uacute;stria conforme a conhecemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
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
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
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
						<h2>Para a ind&uacute;stria de <strong>High Tech</strong> em que voc&ecirc; executa, considere estes 5 poderosos
						raz&otilde;es pelas quais escolher SAP S/4 HANA para transformar sua empresa.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de conte&uacute;do comercial criado por m&aacute;quinas at&etilde; 2018. A experi&ecirc;ncia, o talento, a apresenta&ccedil;&atilde;o de servi&ccedil;os e o compromisso for&ccedil;a as empresas nesta &aacute;rea a repensar seus modelos de neg&oacute;cios, promovendo o crescimento n&atilde;o-linear e alterando a ind&uacute;stria conforme a conhecemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
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
						<h2>Para a ind&uacute;stria de <strong>Banking</strong> em que voc&ecirc; executa, considere estes 5 poderosos
						raz&otilde;es pelas quais escolher SAP S/4 HANA para transformar sua empresa.</h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>20% de conte&uacute;do comercial criado por m&aacute;quinas at&eacute; 2018. A experi&ecirc;ncia, o talento, a apresenta&ccedil;&atilde;o de servi&ccedil;os e o compromisso for&ccedil;a as empresas nesta &aacute;rea a repensar seus modelos de neg&oacute;cios, promovendo o crescimento n&atilde;o-linear e alterando a ind&uacute;stria conforme a conhecemos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveite a nuvem para se no cescimento e n&atilde;o na implementa&ccedil;&atilde;o e gerenciamento de sua TI.</label>
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
							<p>principais motivos</p>
							<h2>por que escolher SAP S/4 HANA</h2>
						</div>	
					</div>
					<div class="formulario inline">
						<h2>Temos mais informa&ccedil;&otilde;es para compartilhar com voc&ecirc;.</h2>
						<p>Complete el formulario para descargarlo</p>
						<form class="mdl-formulario text-left">
		        			<div class="content-datos">
		        				<div class="content-personal">
		        					<p><i class="mdi mdi-arrow_downward"></i>Insira seus dados aqui</p>
		        				</div>
		        				<div class="content-separacion">
		        					<p>o</p>
		        				</div>
		        				<div class="content-linkedin">
		        					<a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>Conectar via LinkedIn</a>
		        				</div>
		        			</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
								    <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Nome completo">
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
									<input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Telefone">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="E-mail">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-select mdl-standar">
									<select class="selectpicker" id="relacion" name="relacion" title="Relación con SAP">
										<option value="Cliente">Cliente</option>
										<option value="Cliente em potencial">Cliente em potencial</option>
										<option value="Consultor">Consultor</option>
										<option value="Funcionário da SAP">Funcion&aacute;rio da SAP</option>
										<option value="Estudante">Estudante</option>
										<option value="Parceiro">Parceiro</option>
										<option value="Parceiro em potencial">Parceiro em potencial</option>
										<option value="Imprensa/Analista">Imprensa/Analista</option>
									</select>
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
									<input type="text" class="form-control" id="pais" maxlength="100" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="País">
								</div>
		    				</div>
		    				<div class="col-sm-6">
		    					<p class="text-contacto">Quero ser contatado por um representante de vendas:</p>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
										<input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
										<span class="mdl-radio__label">Por e-mail</span>
									</label>
		    					</div>
		    					<div class="mdl-input-label">
		    						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
										<input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
										<span class="mdl-radio__label">Por telefone</span>
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
									<span class="mdl-checkbox__label f-s-14" style="">Li e aceito os <a class="FONDO_TERMINOS" href="https://www.sap.com/corporate/en/legal/terms-of-use.html" target="_blank" style="">termos e condi&ccedil;&otilde;es da SAP</a></span>
								</label>
		    				</div>
		    				<div class="col-xs-12 text-right m-t-25">
								<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="solicitarEstimacion();">Enviar informa&ccedil;&otilde;es</button>
		    				</div>
		        		</form>
					</div>
				</div>
			</div>
			<div class="mdl-agradecimiento window-center opacity-done">
				<h2>Obrigado por seu interesse</h2>
				<p>Um representante da SAP entrar&aacute; em contato com voc&ecirc; para ajud&aacute;-lo a dar o primeiro passo.</p>
			</div>
		</div>
	</section>
	<!--MODAL-->
	<div class="modal fade" id="ModalIndustria" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content">
                <div class="mdl-card" >
                    <div class="mdl-card__title p-0">
                    	<h2>Os desafios que enfrentam s&atilde;o</h2>
						<img alt="" src="">
					</div>
				    <div class="mdl-card__supporting-text text-left">
                        <p>Os desafios que enfrentam s&atilde;o</p>
                        <ul>
                        	<li class="one"></li>
                        	<li class="two"></li>
                        	<li class="three"></li>
                        </ul>
					</div> 
    				<div class="mdl-card__actions text-right">       				    
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="closeModal()">Fechar</button>        				    
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised" onclick="selectIndustria()">Selecione</button>
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
    <script src="<?php echo RUTA_JS?>index_pt.js?v=<?php echo time();?>"></script>
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