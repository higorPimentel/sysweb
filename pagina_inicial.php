<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Pagina Inicial - SIS Web</title>
		
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/frmt_pagina_inicial.css">
	
		
	</head>

	<body onload="carrega_var ()">
	
			<header>				
					
								<?php include("menu.php")?>
			</header>


			<div id = "container">
		
				
						
						<div id="guia_opc">	
							
								<?php include("guia_opcoes.php")?>
							
						</div>				
						
						
						<div id="container_conteudo">
							<h1 id="titulo_inicial">SEJA BEM VINDO</h1>
								<div class="barra_separa"> </div>
									<figure id = "figura_logo">	
										<img id="img_logo" src="img/logo_padrao.png"> </img>
											<figcaption> SIS WEB - Desenvolvendo Soluções WEB. </figcaption>
									</figure>	
								<div class="barra_separa"> </div>
								
								

																
							
						</div>		
											
						
						
			</div>

		<script type="text/javascript" src="js/index.js"></script>	
		<script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
		<script type="text/javascript" src="js/pg1.js"></script>
		

	</body>



</html>