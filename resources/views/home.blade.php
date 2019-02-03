<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/png" href="imagem/icon.png"/>
	<title>Gilvan Tur - Petrolina</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="cache-control"   content="no-cache" />
	<meta http-equiv="pragma" content="no-cache" /> 
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<script src="bs/js/bootstrap.min.js"></script>
	<script src="bs/js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="open-iconic/font/css/open-iconic.css" rel="stylesheet">
</head>
<body>
	<header id="home">
		<div class="container-fluid text-center">
			<img class="logo" src="imagem/gilvan.png">
		</div>		
		
	</header>
	<nav class="navbar navbar-expand-md menu justify-content-center " >
		<div class="navbar-toggler ">
			<a class="navbar-brand" href="#"  data-toggle="collapse" data-target="#collapsibleNavbar">MENU</a>
		</div>

		<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar" >
			<ul class="navbar-nav" >
				<li class="nav-item">
					<a class="nav-link scroll"  href="#home">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll" href="#quemsomos">QUEM SOMOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll" href="#servicos">SERVIÇOS</a>
				</li>					  
				<li class="nav-item">
					<a class="nav-link scroll" href="#fotos">FOTOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll" href="#contato">CONTATO</a>
				</li>  
			</ul>
		</div>  
	</nav>


	<section id="quemsomos" class="banner">
		<div class="conteudo-banner">

			<div class="row" style=" background: linear-gradient(to bottom, rgba(255,0,0,0), rgba(255,0,0,0),  rgba(255,0,0,0) ,rgba(250,128,38,0.5));">
				<div class="col-sm" style="padding: 5%; margin: 5px; overflow: hidden; ">
					<p class="intro"> GilvanTur, tem experiência, qualidade, referência e credibilidade. Há 10 anos no mercado, tendo a excelência no atendimento como lema, a empresa presta serviços de transporte tanto para pessoa física quanto jurídica, dispondo de carro executivo (Sprinter) equipado com ar-condicionado, tv, bancos reclináveis e outros acessórios, dentro das especificações exigidas pelos órgãos competentes para o prazer, conforto e segurança dos passageiros.</p>
					<p class="intro" style="text-align: center;">
						<a data-toggle="modal" data-target='#veiculos' href="#"><button class="botao-ini btn btn-light">CONHEÇA A NOSSOS VEÍCULOS</button></a>
					</p>
				</div>
				<div class="col-sm" style=" text-align:  center;">					
					<img class="carro" src="imagem/sprinter.png" style="opacity: 0.8; width: 75%;">
				</div>

			</div>

			
		</div>

		<!-- The Modal -->
		<div class="modal fade" id="veiculos" style="z-index: 9999;">
			<div class="modal-dialog modal-lg" >
				<div class="modal-content" style="">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Nossos Veículos</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-6 text-center"><img src="imagem/veiculos/van_renault.jpg" style="width: 100%;">
								<p><h4>Van Renault Master</h4></p>
							</div>
							<div class="col-sm-6 text-center"><img src="imagem/veiculos/microonibus.png" style="width: 100%; ">
								<p><h4>Microônibus</h4></p>
							</div>
								<div class="col-sm-6 text-center"><img src="imagem/veiculos/fiat_ducato.png" style="width: 100%; ">
								<p><h4>Fiat Ducato</h4></p>
							</div>
								<div class="col-sm-6 text-center"><img src="imagem/veiculos/renault_fluence.png" style="width: 100%;">
								<p><h4>Renault Fluence</h4></p>
							</div>
							<div class="col-sm-6 text-center"><img src="imagem/veiculos/onibus.png" style="width: 100%;">
								<p><h4>Ônibus</h4></p>
							</div>
							<div class="col-sm-6 text-center"><img src="imagem/veiculos/sprinter.png" style="width: 100%;">
								<p><h4>Mercedes Sprinter</h4></p>
							</div>

						</div>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>

				</div>
			</div>
		</div>

		
	</section>


	<section id="servicos" class="servicos" style=" text-align: center;">
		<div>
			<h3>Serviços</h3>
		</div>
		<div class="container" style="text-align: justify;">
			<p>A Gilvan Tur possui um amplo serviço de traslados, englobando os principais meios de transporte, para assegurar que todos os seus clientes cheguem aonde querem, na hora em que precisam.
				Com uma operação logística detalhada, o serviço é oferecido na modalidade regular ou privativa, com comodidade e segurança.
			Gilvan Tur atua com locação de veículos, entre eles carros, vans, doblôs, ônibus e micro-ônibus. Atendemos clientes e localidades em diversos estados. Pernambuco: Petrolina, Ouricuri, Salgueiro, Araripina, Trindade. Bahia: Juazeiro, Semhor do Bonfim, Casa Nova, Sobradinho, Remanso, Curaçá etc. Piauí: São Raimundo Nonato, Outras localidades.  Entre em contato conosco e viaje com quem tem tradição em boas vindas. </p>
		</div>
		
		<div class="row" style="margin: 0 auto;">

			<div class="col-sm tipo-servico"  >
				<div class="img-servico" data-toggle="modal" data-target="#viagens" style="cursor: pointer;">
					<img src="imagem/servicos/turismo.jpg" alt="Turismo">
				</div>
				<p>Viagens e Turismo</p>
				
			</div>
			<div class="col-sm tipo-servico" data-toggle="modal" data-target="#transfer" style="cursor: pointer;">
				<div class="img-servico" >
					<img src="imagem/servicos/transfer.jpg" alt="Transfer - Translado">
				</div>
				<p>Transfer</p>
			</div>
			<div class="col-sm tipo-servico" data-toggle="modal" data-target="#eventos" style="cursor: pointer;"  >
				<div class="img-servico" >
					<img src="imagem/servicos/passeios.jpg" alt="Eventos">
				</div>
				<p>Eventos e Passeios</p>
			</div>
		<!--	<div class="col-sm tipo-servico"  >
				<div class="img-servico" >
					<img src="imagem/servicos/passeios.jpg" alt="passeios">
				</div>
				<p>Passeios</p>
			</div>
			<div class="col-sm tipo-servico"  >
				<div class="img-servico" >
					<img src="imagem/servicos/viagens.jpg" alt="viagens">
				</div>
				<p>Viagens</p>
			</div>-->
		</div>

		<div class="modal fade" id="viagens" style="z-index: 9999;">
			<div class="modal-dialog modal-lg" >
				<div class="modal-content" style="">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Viagens e Turismo</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						
						<p>
						Disponibilizamos logística na organização de viagens a partir de melhores preços e lugares turísticos entre as localidades de Pernambuco e Bahia.</p>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>

				</div>
			</div>
		</div>
		<div class="modal fade" id="transfer" style="z-index: 9999;">
			<div class="modal-dialog modal-lg" >
				<div class="modal-content" style="">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Tranfer</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
					
						<p>
						Nossos serviços se destacam pelo compromisso e pontualidade em oferecer segurança para os clientes. Nossos veículos são totalmente climatizados e em perfeito estado para transportar todos os passageiros com conforto, na qual, são conduzidos por motoristas com experiência e devidamente uniformizados a desempenhar um melhor atendimento possível.
						<br><br>

Transfer local: translado para hotel, aeroporto, Shopping, restaurantes e bares.</p>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>

				</div>
			</div>
		</div>
		<div class="modal fade" id="eventos" style="z-index: 9999;">
			<div class="modal-dialog modal-lg" >
				<div class="modal-content" style="">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Tranfer</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
					
						<p>
						O serviço Gilvan tur atua com um sistema informatizado, atuamos no desenvolvimento de Logistica de locação de veículos. Serviços especializados em eventos de shows Petrolina, Juazeiro e cidades próximas,passeios nas vinícolas no Vale do São Francisco, no Rio das pedrinhas, rodeadouro etc, eventos particulares. 
<br><br>
O nosso dia a dia, credencia-nos a oferecer e eficiência e pontualidade de qualquer encontro especializado através de uma análise de viabilidade do evento, de forma a oferecer um preço justo que atenda todas as demandas dentro dos serviços que oferecemos.</p>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="fotos" class="fotos">

		<div><h3>Fotos</h3></div>
		<div class="galeria">

			<div id="demo" class="carousel slide" data-ride="carousel">
				

				<!-- Indicators -->
				<ul class="carousel-indicators" style="padding: 0px; margin: 0px;">
					<a  href="#demo" data-slide="prev">
						<button class="btn btn-light"><<</button>
					</a>
					<a href="#demo" data-slide="next">
						<button class="btn btn-light">>></button>
					</a>
				</ul>
				<style type="text/css">
				.carousel-indicators a button{
					margin: 2px;
					background: rgba(250,128,38,0.9);
					border:none;
					color: white;
				}
				
				.carousel-item .row .col-sm img{
					width:100%;
					height: 100%;

				}

				.carousel-item .col-sm{
					padding: 0px;
				}
				.galeria img{
					height:250px;
					border: 3px solid rgb(250,128,38);

				}

			</style>
			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row" >
						<div class="galeria col-sm">
							<img src="galeria/1.jpg" alt="viagens">
						</div>
						<div class="galeria col-sm">
							<img src="galeria/2.jpg" alt="viagens">
						</div>
						<div class="galeria col-sm">
							<img src="galeria/3.jpg" alt="viagens">
						</div>

					</div>
				</div>
				<div class="carousel-item">
					<div class="row" >
						<div class="galeria col-sm">
							<img src="galeria/4.jpg" alt="viagens">
						</div>
						<div class="galeria col-sm">
							<img src="galeria/5.jpg" alt="viagens">
						</div>
						<div class="galeria col-sm">
							<img src="galeria/6.jpg" alt="viagens">
						</div>

					</div>
				</div>
				<div class="carousel-item">
					<div class="row" >
						<div class="galeria col-sm">
							<img src="galeria/7.jpg" alt="viagens">
						</div>
						<div class="galeria col-sm">
							<img src="galeria/8.jpg" alt="viagens">
						</div>
						<div class="galeria col-sm">
							<img src="galeria/9.jpg" alt="viagens">
						</div>

					</div>
				</div>
			</div>

			<!-- Left and right controls -->
			

		</div>

	</div>

</section>

<section id="contato" class="contato" style=" text-align: center;">
	<div>
		<h3>Contato</h3>
		<hr>
	</div>
	<div class="row">
		<div class="col-sm">
			<img src="imagem/icones/tel.png" width="50px" height="50px">
			<h4>Telefone</h4>
			<p>(87)98821-3278</p>
		</div>
		<div class="col-sm">
			<img src="imagem/icones/email.png" width="70px" height="50px;">
			<h4>E-mail</h4>
			<p>gilvanturismopetrolina@gmail.com</p>
		</div>

		<div class="col-sm">
			<img src="imagem/icones/loc.png"  height="50px;">
			<h4>Onde atendemos</h4>
			<p>Petrolina e Região do Vale do São Francisco</p>
		</div>
		<div class="col-sm">
			<img src="imagem/icones/seguir.png" width="50px" height="50px;">
			<h4>Siga-nos</h4>
			<p>@gilvan_turismo</p>
		</div>
		<div class="col-sm-12">
			<hr style="width: 50%;">
			<h4>Atendemos também via Chat</h4>
			<p>Clique no icone no canto direito da sua tela, ou clique em conversar agora para iniciar o chat</p>
			<p><a class="btn btn-warning" style="background-color: rgba(250,128,38,0.9); color: white;" href="https://tawk.to/chat/5c4ef68dab5284048d0f39d0/default" target="_blank"> Conversar agora</a></p>
		</div>

	</div>

</section>

<footer class=" container-fluid">
	<div class="row rodape">
		<div class="col-sm-6">
			Desenvolvido por Herbet Jr. | <a style="color: rgb(250,128,38);" href="http://atenaagencia.com" target="_blank">Atena Agência</a>
		</div>
		<div class="col-sm-6" style="text-align: right;">
			Entre em contato agora mesmo!
			contato@gilvantur.com
		</div>

	</div>

</footer>

<script type="text/javascript">
	jQuery(document).ready(function($) { 
		$(".scroll").click(function(){        

			$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
		});
	});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c4ef68dab5284048d0f39d0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



</body>
</html>