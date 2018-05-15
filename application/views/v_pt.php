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
						<option value="Portugués">Portugu&ecirc;s</option>
						<option value="Español">Espa&ntilde;ol</option>
						<option value="Inglés">English</option>
					</select>
				</div>
				<div class="background1"></div>
				<div class="background2"></div>
				<div class="background3"></div>
			</div>
		</div>
		<div class="chat">
			<a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005114" target="_blank"><img src="<?php echo RUTA_IMG?>logo/chat.png"><label>Fale conosco pelo chat</label></a>
		</div>
		<div id="home" class="window-center">
			<div id="window2" class="window-center">
				<div class="center-container">
					<div class="mdl-title inline">
						<strong class="inline">5</strong>
						<div class="mdl-letras inline">
							<p>razões principais</p>
							<h2>para escolher o SAP S/4HANA</h2>
						</div>
						<div class="subrayado-title">
							<div class="subrayado one"></div>
							<div class="subrayado two"></div>
							<div class="subrayado three"></div>
							<div class="subrayado four"></div>
						</div>	
					</div>
					<div class="industrias inline">
						<h2>Selecione sua indústria</h2>
						<div id="industriaServicio" class="mdl-industrias" onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Serviços Profissionais','ServiçosProfissionais')">Serviços Profissionais</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/servicios.png">
							<div class="one none">Atualizar e reduzir os processos financeiros.</div>
							<div class="two none">Tomar decisões baseadas em dados em tempo real.</div>
							<div class="three none">Minimizar o risco de seus projetos.</div>
							<div class="four none">Aumentar a precisão de suas propostas.</div>
							<div class="five none">Dar ao cliente um serviço de excelência.</div>
						</div>
						<div id="industriaRetail" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Varejo','Retail')">Varejo</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/retail.png">
							<div class="one none">Obter maiores receitas.</div>
							<div class="two none">Aumentar a rentabilidade.</div>
							<div class="three none">Reduzir a falta de estoque.</div>
							<div class="four none">Melhorar a rotação de inventário.</div>
							<div class="five none">Melhorar a experiência do cliente.</div>
						</div>
						<div id="industriaProducto" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Bens de Consumo','ProdutosConsumo')">Bens de Consumo</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/productos.png">
							<div class="one none">Trabalhar com informação em tempo real de inventários e do fluxo de materiais.</div>
							<div class="two none">Criar valor em um mundo digital onde o consumidor está no comando.</div>
							<div class="three none">Inovar a experiência de compra.</div>
							<div class="four none">Alinhar as estratégias comerciais com as megatendências tecnológicas.</div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaProceso" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Processo e Manufatura','ProcessoManufatura')">Processo e Manufatura</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/procesos.png">
							<div class="one none">Mercado dinâmico, variabilidade da demanda e prazos de entrega ajustados.</div>
							<div class="two none">Manter a mais alta qualidade a preços competitivos.</div>
							<div class="three none">Contar com resultados de negócio mais rápidos com um menor custo operacional.</div>
							<div class="four none">Ambientes de sistemas complexos e caros com múltiplos sistemas de instalações distribuídas que dão como resultado um alto TCO.</div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaDistribucion" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Distribuição Atacadista','Distribuição')">Distribuição Atacadista</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/distribucion.png">
							<div class="one none">Melhorar a capacidade e pontualidade no despacho de pedidos.</div>
							<div class="two none">Reduzir custos de abastecimento, planejamento e precisão no inventário.</div>
							<div class="three none">Usar serviços de valor agregado para criar novas fontes de receitas.</div>
							<div id="dontHave4" class="four none"></div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaHighTech" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Alta Tecnologia','AltaTecnologia')">Alta Tecnologia</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/tech.png">
							<div class="one none">A velocidade da mudança tecnológica prejudica as perspectivas de crescimento de sua organização.</div>
							<div class="two none">A demanda de produtos inteligentes conectados, acelera a necessidade de novas funcionalidades de cadeia de fornecimento digital.</div>
							<div class="three none">Para continuar sendo competitivo você deve oferecer um atendimento e uma opção de autosserviço de classe mundial.</div>
							<div id="dontHave4" class="four none"></div>
							<div id="dontHave" class="five none"></div>
						</div>
						<div id="industriaBanking" class="mdl-industrias"  onclick="modalIndustria(this.id)">
							<p class="inline" onclick="getDatos('Serviços Financeiros','ServiçosFinanceiros')">Serviços Financeiros</p>
							<img class="inline" src="<?php echo RUTA_IMG?>industrias/banking.png">
							<div class="one none">Adotar e incorporar com rapidez soluções móveis que sejam intuitivas para aplicações de serviços, vendas, caixas e filiais.</div>
							<div class="two none">Envolver os clientes com uma experiência digital multicanal em tempo real.</div>
							<div class="three none">Necessidade de automatizar os procedimentos manuais e agilizar os fluxos de trabalho no serviço ao cliente e na gestão de processos.</div>
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
						<h2>Estas são as 5 razões pelas quais o SAP S/4HANA é a solução preferida na indústria de <strong>Serviços Profissionais.</strong></h2>
					</div>
					<div class="card-industria inline">
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Visibilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Só 38% das empresas têm a visibilidade necessária em tempo real.</p>
		            				<label>Proporcionar uma única fonte consolidada com toda a informação relacionada ao projeto, e obter um melhor compromisso e produtividade dos colaboradores.</label>
		            				<button id="verServicio1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ganancia.png">
		            				<p>Eficiência</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Melhorar em até 10% os lucros</p>
									<label>Aumentar a produtividade com uma análise simples de ofertas versus orçamentos, baseado em projetos de sucesso para novas ofertas.</label>
									<button id="verServicio2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
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
		            				<p id="title">Aumentar a rentabilidade do projeto</p>
									<label>Obter processos comerciais simplificados e reprojetados que geram importantes benefícios, operar informação processável, acelerar o fluxo de efetivo e proteger a rentabilidade do projeto.</label>
									<button id="verServicio3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Automatização</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Atualmente até 20% do conteúdo empresarial está sendo gerado pelos sistemas</p>
									<label>A digitalização dos quatro elementos fundamentais dos serviços (experiência, talento, prestação de serviços e compromisso do cliente) obriga às empresas de serviços profissionais a repensarem seus modelos comerciais e se concentrarem em como impulsionar o crescimento das receitas sem um crescimento correspondente em sua base de colaboradores.</label>
									<button id="verServicio4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Inovação</p> 
		            				<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">60% das empresas de serviços profissionais consideram urgente a transformação digital</p>
									<label>Melhorar a satisfação e compromisso com o cliente para poder garantir futuras receitas por meio da análise permanente do comportamento e necessidades de seus clientes.</label>
									<button id="verServicio5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaRetail-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas são as 5 razões pelas quais o SAP S/4HANA é a solução preferida na indústria de <strong>Varejo.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/venta.png">
		            				<p>Modernização</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Atender a demanda do consumidor em qualquer lugar e momento</p>
									<label>Cumprir com as expectativas do cliente com uma boa experiência de compra através de um processo otimizado para a gestão da mercadoria e dos canais de distribuição, baseado na tomada de decisões em tempo real.</label>
									<button id="verRetail1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/capital.png">
		            				<p>Eficiência</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir até 35% os requisitos de capital</p>
									<label>Melhorar a produtividade com base nas melhorias do processo de faturamento, tendo uma única fonte de verdade e conseguindo eliminar os erros nas previsões financeiras.</label>
									<button id="verRetail2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumentar a rentabilidade</p>
									<label>Reduzir a rotação de inventário através de processos comerciais simplificados e reprojetados, operação de informação processável e uma otimização da gestão do fluxo de efetivo.</label>
									<button id="verRetail3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/decision.png">
		            				<p>Inteligência</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir até 30% o tempo de tomada de decisões</p>
									<label>Dispor da informação em diversos formatos, além de oferecer um guia baseado nos elementos de ação que requerem atenção imediata, e com isso, poder reduzir o tempo da tomada de decisões.</label>
									<button id="verRetail4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cloud.png">
		            				<p>Produtividade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Melhorar até 30% a produtividade</p>
									<label>Otimizar os processos da cadeia de fornecimento para agilizar o restabelecimento, gerenciar o estoque de uma maneira mais precisa e monitorar o inventário de maneira minuciosa.</label>
									<button id="verRetail5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaProducto-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas são as 5 razões pelas quais o SAP S/4HANA é a solução preferida na indústria de <strong>Bens de Consumo.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ganancia.png">
		            				<p>Fidelização</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumentar em até 20% a satisfação do cliente</p>
									<label>Quando os consumidores conseguem obter o que querem, quando e onde querem. A diferenciação não só resulta da qualidade, preço, valor ou conveniência, como também de experiências subjetivas, matizadas e intangíveis como alegria, confiança, controle e proteção.</label>
									<button id="verProducto1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/inventario.png">
		            				<p>Eficiência</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir em até 30% os níveis de inventário</p>
									<label>O planejamento de requisitos de materiais, executado em tempo real, oferece resultados de planejamento atualizados e completos. Trata-se de fazer correções oportunas do curso e minimizar o inventário disponível.</label>
									<button id="verProducto2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Economia</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir em até 15% a perda de receitas devido ao desabastecimento</p>
									<label>Um processo reprojetado pelo SAP S/4HANA proporciona visibilidade do inventário em tempo real com lotes de estoque diminuídos, entrega melhorada e capacidade de modernizar com serviços inovadores.</label>
									<button id="verProducto3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/costo.png">
		            				<p>Visibilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Com o SAP S/4HANA, os relatórios de análise podem ser gerados instantaneamente para obter uma visão imediata dos níveis de estoque de inventário, vendas de produtos, marketing e finanças. O resultado é uma imagem de 360 graus do que ocorre em sua organização.</label>
									<button id="verProducto4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/entrega.png">
		            				<p>Otimização</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Melhorar seu planejamento de produção e programação</p>
									<label>O planejamento de produção avançado no SAP S/4HANA proporciona analíticas potentes para um suporte de decisões mais sólido, o que permite uma rapidez maior no planejamento e execução.</label>
									<button id="verProducto5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaProceso-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas são as 5 razões pelas quais SAP S/4HANA é a solução preferida na indústria de <strong>Processo e Manufatura.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/expandir.png">
		            				<p>Diversificação</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Ampliar as oportunidades de vendas em até 15-20%</p>
									<label>O SAP S/4HANA incorpora agilidade através de uma plataforma simplificada que permite a troca de dados em tempo real entre vendas, serviço ao cliente e líderes empresariais, uma maior eficiência devido à eliminação de dados duplicados e uma análise de dados simplificada que conduzem a vendas mais efetivas e específicas.</label>
									<button id="verProceso1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Otimização</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Otimizar sua cadeia de fornecimento em até 12%</p>
									<label>O SAP S/4HANA lhe permite integrar toda a sua cadeia de fornecimento e obter uma redução de até 12% na quantidade de dias do inventário. Isto significa uma redução nos desabastecimentos e um panorama simplificado que gera uma economia de custos de logística de 10%.</label>
									<button id="verProceso2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/eficiencia.png">
		            				<p>Eficiência</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir os custos de aquisições em até 15%</p>
									<label>A produtividade da cadeia de fornecimento pode ser aumentada em até 15% com o SAP S/4HANA, aproveitando as opções de desconto nos pagamentos antecipados, maximizando a ordem de inventário e o acompanhamento de matérias primas em tempo real.</label>
									<button id="verProceso3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/adquisicion.png">
		            				<p>Agilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumentar a capacidade de resposta das vendas</p>
									<label>Adapte-se rapidamente com as mudanças nos resultados de produção das vendas sob medida. Direcione os pedidos dos clientes diretamente para a fábrica como ordens de produção. Alinhe a cadeia de fornecimento e o planejamento de vendas.</label>
									<button id="verProceso4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/costo.png">
		            				<p>Eficácia</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumente a eficiência da operação em até 60%</p>
									<label>Com o SAP S/4HANA comece a experimentar total facilidade na gestão das operações de negócio. Agora, seus clientes poderão experimentar um serviço excelente e entrega pontual, que permanecerá sem modificações durante a rápida expansão.</label>
									<button id="verProceso5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaDistribucion-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas são as 5 razões pelas quais SAP S/4HANA é a solução preferida na indústria de <strong>Distribuição Atacadista.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/ingresos.png">
		            				<p>Eficiência</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumentar a eficiência da operação em até 60%</p>
									<label>Ter toda a informação necessária em um só lugar, significa poder gerenciar os inventários em tempo real, ter o valor dos materiais, planejar as funções em um sistema, e assim poder melhorar a produtividade como a participação dos colaboradores.</label>
									<button id="verDistribucion1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/comportamiento.png">
		            				<p>Otimização</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir em até 30% o inventário</p>
									<label>O SAP S/4HANA proporciona uma administração de inventários simplificada nos mínimos detalhes, com uma única fonte de informação precisa e consolidada para analisar a rotação de inventário, realizar um acompanhamento do fluxo de materiais e transferências de estoque e tomar as medidas apropriadas.</label>
									<button id="verDistribucion2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/reduccion.png">
		            				<p>Eficiência</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir em até 50% problemas de atendimento de pedidos.</p>
									<label>O SAP S/4HANA proporciona uma experiência de usuário baseada em funções, que simplifica e melhora o compromisso e a produtividade dos colaboradores. Através de um único ponto de entrada para identificar facilmente problemas de pedidos e alertas em tempo real, garante que os representantes de vendas internos possam ter acesso direto a seus respectivos documentos e utilizar funções integradas de colaboração para resolver problemas rapidamente.</label>
									<button id="verDistribucion3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cumplimiento.png">
		            				<p>Previsão</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Antecipar a demanda futura do cliente</p>
									<label>Só 20% dos distribuidores atacadistas estão em condições de utilizar a análise preditiva para antecipar o comportamento do cliente. Com o SAP S/4HANA é possível uma experiência de usuário simplificada, além de possuir informações importantes para compreender a demanda futura e atuar no momento.</label>
									<button id="verDistribucion4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Modernização</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Torne-se um distribuidor em "tempo real"</p>
									<label>Com o SAP S/4HANA, você irá ver como reinventar seu negócio passando de um armazém de produtos que satisfaz a demanda para se transformar em uma empresa centrada na informação e que a utiliza para abordar ineficiências operacionais de maneira proativa e impactando nos resultados finais.</label>
									<button id="verDistribucion5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaHighTech-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas são as 5 razões pelas quais SAP S/4HANA é a solução preferida na indústria de <strong>Alta Tecnologia.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/cotizacion.png">
		            				<p>Agilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir em até 46% as reclamações de clientes</p>
									<label>Faça com que o pedido e o faturamento em tempo real estejam disponíveis para aumentar a entrega pontual, uma maior flexibilidade do modelo comercial e a eficiência da gestão de contratos.</label>
									<button id="verTech1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/trabajo.png">
		            				<p>Otimização</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir os processos de trabalho radicalmente</p>
									<label>Com o SAP S/4HANA encontre economias incríveis e passe a ter um sistema único para os processos, da compra até finanças e contabilidade e da fábrica até a gestão de contratos</label>
									<button id="verTech2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>								
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Evolução</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Cotar soluções. Não só produtos</p>
									<label>Capacite seus executivos de conta para criar cotações que ofereçam uma solução completa, que serão convertidas em resultados de negócio para seus clientes. Utilize o SAP S/4HANA para ter a visão integral de todas as partes envolvidas: software, hardware e serviços associados.</label>
									<button id="verTech3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/inventario.png">
		            				<p>Eficiência</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Otimizar sua cadeia de fornecimento em até 12%</p>
									<label>Integre toda a sua cadeia de fornecimento e reduza em até 12% a quantidade de dias no inventário. Alcance uma redução de desabastecimento e um panorama simplificado que gere uma economia de custos de logística de 10%.</label>
									<button id="verTech4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
									<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/fabricacion.png">
		            				<p>Inovação</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Tomar ação sobre os dados de IoT em tempo real</p>
									<label>A miniaturização de sensores, combinada com uma maior banda larga de rede, está criando um tesouro de dados que é mais útil quando analisado e desempenhado em tempo real. Com o SAP S/4HANA você tem o poder para fazê-lo.</label>
									<button id="verTech5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
			</div>
			<div id="industriaBanking-contenido" class="window-center opacity-done">
				<div class="center-container">
					<div class="contenido-industria inline">
						<h2>Estas são as 5 razões pelas quais SAP S/4HANA é a solução preferida na indústria de <strong>Serviços Financeiros.</strong></h2>
					</div>
					<div class="card-industria inline">
						<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>1</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/maquina.png">
		            				<p>Aceleração</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Reduzir em até 30% o tempo de chegada de novos produtos.</p>
									<label>Com o SAP S/4HANA você poderá reduzir o tempo de chegada ao mercado para seus novos produtos, o que lhe permitirá ficar à frente da concorrência e manter seus clientes cativos</label>
									<button id="verBancking1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>2</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad_2.png">
		            				<p>Rentabilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Aumentar sua rentabilidade</p>
									<label>Organizações que adotam o SAP S/4HANA geram até 23% mais de receitas ao usar o poder da informação para identificar vantagens estratégicas e competitivas.</label>
									<button id="verBancking2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>3</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/expandir.png">
		            				<p>Visibilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Maior visibilidade e disponibilidade de dados</p>
									<label>Com o SAP S/4HANA você conta com acesso em tempo real aos dados financeiros com a capacidade de dividi-los ao nível de cada item. Pode construir e testar situações hipotéticas e aplicar o que aprendeu para tomar melhores decisões e aumentar a eficiência.</label>
									<button id="verBancking3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>4</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/rentabilidad.png">
		            				<p>Previsão</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Maior velocidade, agilidade e precisão da projeção</p>
									<label>Com o SAP S/4HANA os processos e as funções de planejamento se integram no sistema transacional, permitindo um planejamento de ciclo fechado em todos os níveis. Com esta vantagem, alcança uma redução de 25-50% no tempo dos ciclos de projeção e relatórios financeiros.</label>
									<button id="verBancking4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-industria">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<strong>5</strong>
		            				<img src="<?php echo RUTA_IMG?>cards/tiempo.png">
		            				<p>Agilidade</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<p id="title">Obter informação empresarial em tempo real</p>
									<label>O SAP S/4HANA lhe permite obter conhecimento sobre qualquer informação de qualquer lugar em tempo real. Poderá acelerar drasticamente o planejamento, execução, predição e simulação ao mais alto nível de granularidade, sem a consolidação de dados e outros processos manuais.</label>
									<button id="verBancking5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openIndustria(this.id)">Ver mais</button>
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
							<p>razões principais</p>
							<h2>para escolher o SAP S/4 HANA</h2>
						</div>	
						<div class="subrayado-title">
							<div class="subrayado one"></div>
							<div class="subrayado two"></div>
							<div class="subrayado three"></div>
							<div class="subrayado four"></div>
						</div>
					</div>
					<div class="formulario inline">
						<h2>Conheça um caso de sucesso no setor de <label class="nameIndustria"></label></h2>
						<p class="descarga">Preencha o formulário para fazer o download</p>
						<form class="mdl-formulario text-left">
		        			<div class="content-datos">
		        				<div class="content-personal">
		        					<p><i class="mdi mdi-arrow_downward"></i>Insira seus dados aqui </p>
		        				</div>
		        				<div class="content-separacion">
		        					<p>o</p>
		        				</div>
		        				<div class="content-linkedin">
		        					<a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>Conecte-se via LinkedIn</a>
		        				</div>
		        			</div>
		    				<div class="col-sm-6">
		    					<div class="mdl-input">
								    <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Nome Completo">
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
									<select class="selectpicker" id="relacion" name="relacion" title="Relação com SAP">
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
										<span class="mdl-radio__label">Por E-mail</span>
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
									<span class="mdl-checkbox__label f-s-14" style="">Li e aceito os <a class="FONDO_TERMINOS" href="https://www.sap.com/corporate/en/legal/terms-of-use.html" target="_blank" style="">Termos e Condições da SAP</a></span>
								</label>
		    				</div>
		    				<div class="col-xs-12 text-right m-t-25">
								<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="solicitarEstimacion();">Enviar Informação</button>
		    				</div>
		        		</form>
					</div>
				</div>
			</div>
			<div class="mdl-agradecimiento window-center opacity-done">
				<div class="center-container">
					<h2>Agradecemos o seu interesse</h2>
					<p>Estamos certos de que o SAP S/4HANA lhe ajudará a acelerar sua transformação digital. Um especialista da SAP entrará em contato com você para dar o primeiro passo.</p>
					<div class="subrayado-title">
						<div class="subrayado one"></div>
						<div class="subrayado two"></div>
						<div class="subrayado three"></div>
						<div class="subrayado four"></div>
					</div>
					<small>Conheça o Caso de Sucesso de uma empresa de nossa região no setor de <strong class="nameIndustria"></strong>. <a id="donwloadCaso" href="#" onclick="returnCaso()">Realizar o download.</a></small>
					<!-- <small>Conheça o Caso de Sucesso de <strong class="nameCompany"></strong> no setor <strong class="nameIndustria"></strong>. Baixa <a id="donwloadCaso" href="#" onclick="returnCaso()">aqu&iacute;</a></small> -->
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
                        <p>Os desafios que enfrentam são:</p>
                        <ul>
                        	<li class="one"></li>
                        	<li class="two"></li>
                        	<li class="three"></li>
                        	<li class="four"></li>
                        	<li class="five"></li>
                        </ul>
					</div> 
    				<div class="mdl-card__actions text-right">       				    
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="closeModal()">Fechar</button>        				    
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised" onclick="selectIndustria()">Avançar</button>
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
    <script src="<?php echo RUTA_JS?>index_pt.js?v=<?php echo time();?>"></script>
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