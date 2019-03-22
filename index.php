<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>COMPANY</title>
<link rel="stylesheet" type="text/css" href="estilo.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style type="text/css">

		.menu{
			font-size: 9pt;
			width: 100%;
			height: 40px;
		}

		.menu ul{
			list-style: none;
			position: relative;
		}

		.menu ul li{
			width: 150px;
			float: left;
		}

		.menu a{
			padding: 15px;
			display: block;
			text-decoration: none;
			text-align: center;
			color: black;
		}

		.menu ul ul{
			position: absolute;
			visibility: hidden;
		}

		.menu ul li:hover ul{
			visibility: visible;
		}

		.menu a:hover{
			background-color: #f4f4f4;
			color: #555;
		}

		.menu ul ul li {
			float: none;
			border-bottom: solid 1px #ccc;
		}

		.menu ul ul li a{
			background-color: #069;
		}

		label[for="bt_menu"]{
			padding: 5px;
			background-color: #222;
			color: white;
			font-family: "Arial";
			text-align: center;
			font-size: 30px;
			cursor: pointer;
			width: 50px;
			height: 50px;
		}

		#bt_menu{
			display: none;
		}

		label[for="bt_menu"]{
			display: none;
		}

		@media(max-width: 800px){
			label[for="bt_menu"]{
			display: block;
			}

			#bt_menu:checked ~ .menu{
				margin-left: 0; 
			}

			#bt_menu:checked ~ .menu li a{
				background-color: black;
				color: white;
			}

			#bt_menu:checked ~ .menu li a:hover{
				background-color: #8c8c8c;
				color: white;
			}

			.menu{
				margin-top: 5px;
				margin-left: -1000%;
				background-color: black;
				color: white;
			}

			.menu ul li{
				width: 100%;
				float: none;
			}

			.menu ul ul{
				position: static;
				overflow: hidden;
				max-height: 0;
				transition: all .4s;
			}

			.menu ul li:hover ul{
				height: auto;
				max-height: 200px;

			}
		}

		.aEsquerda{
			float: left;
		}


		.aDireita{
			float: right;
		}

		.corpo{
			margin: 50px;
		}

		.destaque{
			margin-bottom: 50px
		}

		#sux{
			padding: 50px;
		}

</style>


<body>
	<div class="container">
		<div class="aEsquerda">
	<img src="images/logoTopoM.jpg">
	</div>

	<div class="aDireita">
	<input type="checkbox" id="bt_menu">
	<label for="bt_menu">&#9776;</label>
 <nav class="menu">
 	<ul>
 		<li><a href="#">IMÓVEIS</a></li>
 		<li><a href="#">ANUNCIAR IMÓVEL</a></li>
 		<li><a href="#">LANÇAMENTOS</a></li>
 		<li><a href="#">EMPRESA</a></li>
 		<li><a href="#">CONTATO</a></li>
 	</ul>
 </nav>
</div>
 </div>

	<header>
		<img src="images/vitrine2M.jpg">
	</header>
	<div id="partSup2">
	<nav class="parteSuperior2">
		<ul>
			<li>
				<select>
					<option value="1">COMPRAR</option>
				</select>
			</li>
			<li>
				<select>
					<option value="1">TIPO DO IMÓVEL</option>
				</select>
			</li>
			<li>
				<select>
					<option value="1">FAIXA DE VALOR</option>
				</select>
			</li>
			<li>
				<select>
					<option value="1">CIDADE</option>
				</select>
			</li>
			<li>
				<select>
					<option value="1">BAIRROS</option>
				</select>
			</li>
			<li>
				<select>
					<option value="1">CÓDIGO</option>
				</select>
			</li>
			<li>
				<button type="button" class="buscar"><img class="lupa" src="images/search.png">BUSCAR</button>
			</li>
		</ul>
	</nav>
	<p id="morefilt"><img class="lupa" src="images/filter.png">Mais Filtros</p>
	</div>
	
	<div class="corpo">


		<h1 class="destaque">DESTAQUES EM VENDA</h1>
		
		<div class="container">
		
<div class="row">

				<div class="col-md-4"><img src="images/banner1M.jpg"></div>
				<div class="col-md-4"><img src="images/banner2M.jpg"></div>
				<div class="col-md-4"><img src="images/banner3M.jpg"></div>

</div>

			</div>
			</div>




		<div class="anuncio5">
			<center>
			<h1>ANUNCIE SEU IMÓVEL</h1>
			<p>cuidamos de tudo para voce!</p>
			<button type="button" class="buscar">QUERO ANUNCIAR</button>
			</center>
		</div>
		
		<div class="container" id="sux">
				
				<div class="row">



				<div class="col-md-6"><img src="images/banner1M.jpg"></div>
				<div class="col-md-6"><img src="images/banner2M.jpg"></div>

				</div>

				
				<div class="row">			
			
				<div class="col-md-6"><img src="images/banner3M.jpg"></div>
				<div class="col-md-6"><img src="images/banner4M.jpg"></div>
			
					
				</div>
		</div>
		
	</div>
	<footer>
		<!--<nav class="parteInferior">
			<ul>
				<li>
					<img class="enderecoImg" src="images/logoRodape.png">
					<p>AV. CARLOS GOMES, <font class="orange">328</p>
					<p>BOA VISTA</font>, PORTO ALEGRE</p>
				</li>
				<li>
					<img class="lupa2" src="images/clock.png">
					<h2 class="titFooter">HORÁRIO DE ATENDIMENTO</h2>
					<p>DE <font class="orange">SEGUNDA À SEXTA</font> </p>
					<p>DAS 08H30 ÀS 12H E DAS 13H ÀS 18H</p>
					<p>E <font class="orange">SÁBADO</font> DAS 9H ÀS 12H</p>
				</li>
				<li>
					<img class="lupa2" src="images/phone.png">
					<h2 class="titFooter">CONTATO</h2>
					<p><font class="orange">(51)</font> 3033.6621</p>
					<p>API<font class="orange">@</font>API.COM</p>
				</li>
			</ul>
		</nav>-->
		<div class="container">
		<div class="row">

				<div class="col-md-4">
					<img class="enderecoImg" src="images/logoRodape.png">
					<p>AV. CARLOS GOMES, <font class="orange">328</p>
					<p>BOA VISTA</font>, PORTO ALEGRE</p>
				</div>
				<div class="col-md-4">
					<img class="lupa2" src="images/clock.png">
					<h2 class="titFooter">HORÁRIO DE ATENDIMENTO</h2>
					<p>DE <font class="orange">SEGUNDA À SEXTA</font> </p>
					<p>DAS 08H30 ÀS 12H E DAS 13H ÀS 18H</p>
					<p>E <font class="orange">SÁBADO</font> DAS 9H ÀS 12H</p>
				</div>
				<div class="col-md-4">
					<img class="lupa2" src="images/phone.png">
					<h2 class="titFooter">CONTATO</h2>
					<p><font class="orange">(51)</font> 3033.6621</p>
					<p>API<font class="orange">@</font>API.COM</p>
				</div>

		</div>
		</div>





		<p id="copy">COPYRIGHT 2018 - TODOS OS DIREITOS RESERVADOS - DESENVOLVIDO POR API</p>
	</footer>
</body>
</html>