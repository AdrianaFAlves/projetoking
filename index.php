<!DOCTYPE html>

<html>

	<head>
	
		<title>CSS - Cascading Style Sheet - Pós-Graduação Unoesc/2018</title>
		
		<meta charset="utf-8">
		
		<meta name="description" content="O site mais maraviwonderfull de Iraceminha"> 
		
		<!-- renderizar conforme onde abrir o site -->
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css/estilos.css" type="text/css">
		
		<link rel="stylesheet" href="css/fontawesome-all.min.css" type="text/css">
		
		<link rel="shortcurt icon" href="images/logo.png">
		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		
		
	</head>
	
	<body>
	
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12&appId=231223614282728&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	
		<!-- cabecalho -->
		<header> 
		
			<nav> 
				<a href="home" title="Home" class="logo">
					<img src="images/kingburger.png" alt="King Burger" title="King Burger">
				</a>
				
				
				<div class="topnav" id="myTopnav">

				
					<a href="home" title="Home">Home</a>
					<a href="sobre" title="Sobre">Sobre</a>
					<a href="cardapio" title="Cardapio">Cardápio</a>
					<a href="contato" title="Contato">Contato</a>
					<a href="http://www.professorburnes.com.br/downloads/kingburger/arquivos.zip" title="Download">Download</a>

					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()"><i class="fas fa-bars"> </i></a>

							
						<!--<a id="menu" href="javascript:void(0);" onclick="myFunction()" class="icon">
							<i class="fas fa-bars"> </i>
						</a>
						
						
						<ul>
							<li>
								<a href="home" title="Home">Home</a>
							</li>
							<li>
								<a href="sobre" title="Sobre">Sobre</a>
							</li>				
							<li>
								<a href="cardapio" title="Cardapio">Cardápio</a>
							</li>				
							<li>
								<a href="contato" title="Contato">Contato</a>
							</li>	
							<li>
								<a href="http://www.professorburnes.com.br/downloads/kingburger/arquivos.zip" title="Download">Download</a>
							</li>
						</ul>-->
				
				</div>
				
				
			</nav>
						
		
		</header>
		
		<!-- conteudo principal-->
		<main>
		
			<?php
				//recuperar o parametro passada nas conf do .htaccess
				if ( isset ( $_GET["param"] ) ) {
						$pagina =  $_GET["param"];
				} else {
						// pagina sempre sera home se não tiver parametro
						$pagina = "home";
				}
				
				//monta a pagina conforme parametro
				$pagina = "paginas/".$pagina.".php";
				
				
				//verificar se o arquivo existe
				if ( file_exists ($pagina) )
					include $pagina;
				else
					include "paginas/erro.php";
				
			?>
		
		
		</main>
				
		
		<!-- rodapé -->
		
		<footer id="rodape">
		
			<div class="container linha">
	
			<!--- colunas rodape -->
			
				<div class="item">
					
					<p class="left">Menu de Acesso </p>
					
					
					<ul>
						<li>
							<a href="home" title="Home">Home</a>
						</li>
						<li>
							<a href="sobre" title="Sobre">Sobre</a>
						</li>				
						<li>
							<a href="cardapio" title="Cardapio">Cardápio</a>
						</li>				
						<li>
							<a href="contato" title="Contato">Contato</a>
						</li>	
						
					</ul>
				
				</div>
				
				<!-- facebook --->
				
				<div class="item redesocial">
				
					<div class="fb-page" data-href="https://www.facebook.com/BurgerKingBrasil/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/BurgerKingBrasil/" class="fb-xfbml-parse-ignore">
							<a href="https://www.facebook.com/BurgerKingBrasil/">Burger King Brasil</a>
						</blockquote>
					</div>
					
				</div>
				
				<!--- mapa --->
				
				<div class="item mapa">
				
					<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d113687.42337481522!2d-52.69627640140468!3d-27.070206752275464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94e4b5dc93ca3003%3A0xb18a69fdff35f01f!2smaps+burger+king+chapec%C3%B3-sc!3m2!1d-27.070224099999997!2d-52.6262361!5e0!3m2!1spt-BR!2sbr!4v1522589952545" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				</div>
				
			</div>
		
			<p class="center direitos">Desenvolvido por Dryka Alves - Todos os Direitos Reservados</p>
		
		
		</footer>
		
		
		<script type="text/javascript">
			$("#menu").click( function () {
				$("nav ul").toggle();
			})
		
			/* funcao menu responsivo */
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
			
		</script>
		

		
		
	</body>
	
</html>
	