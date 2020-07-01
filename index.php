<!DOCTYPE html>

<html>

	<head>
	
		
			<title>Controle Estoque - Login</title>
			<meta charset="utf-8">
			
			<link rel="stylesheet" href="css/reset.css">
			<link rel="stylesheet" href="css/frmt_index.css">
			<meta name="viewport" content="width=device-width">
			
			
	</head>
	
	
	
	<body>

		<div id="blco_login">
						
					<form id="frm_login">							
							<h1 id="cab_log">Autenticação de Usuário</h1>					
								<div class="frmt_log" id="blco_cx_usuario">							
									<img id="img_login"width="30px"src="img/ft_login.png">
									<input id="cx_usuario" class ="cx_txt" type="text" placeholder="usuário" autofocus>							
								</div>	
							
								<div class="frmt_log" id="blco_cx_senha">	
									<img id="img_senha" width="30px" src="img/ft_sn.png">
									<input id="cx_senha" class ="cx_txt" type="password" placeholder="Senha">							
								</div>	
							
								<div class="btn_check">
									<input onclick="exib_snha()" id="btn_check_exib"type="checkbox">Exibir Senha
								</div>
							
							
								<div class="btn_log">
									<input onmousemove="altera_btn()" onmouseleave="ret_btn()" onclick="click_btn_lgn()"id="btn_acessar"type="button" value="Acessar">
									
									<input onmousemove="altera_btn2()" onmouseleave="ret_btn2()" onclick="click_btn_cad()"id="btn_cadastrar"type="button" value="Informações">
																		
								</div>
							
					</form>
				
					
									<div id="bloco_foot">
										
										<p id="foot_fin">Copyright © 2019 | SIS WEB </p>
										<p id="foot_fin2"> Desenvolvedor: Higor Pimentel </p>
									</div>			
			
		</div>
		
		
		
		<div id="bloco_login_2">
		
			<form id="frm_login2">							
							<h1 id="cab_log2">Autenticação de Usuário</h1>					
							<div class="frmt_log"  id="blco_cx_usuario2">							
								<img id="img_login2"width="30px"src="img/ft_login.png">
								<input id="cx_usuario2" class ="cx_txt" type="text" placeholder="usuário" autofocus>							
							</div>	
							
							<div class="frmt_log" id="blco_cx_senha2">	
								<img id="img_senha2" width="30px" src="img/ft_sn.png">
								<input id="cx_senha2" class ="cx_txt" type="password" placeholder="Senha">			
							</div>	
							
												
							<div class="btn_log">
								<input onmousemove="altera_btn()" onmouseleave="ret_btn()" onclick="click_btn_lgn2()"id="btn_acessar2"type="button" value="Acessar">
								<input onmousemove="altera_btn2()" onmouseleave="ret_btn2()" onclick="click_btn_cad()"id="btn_cadastrar2"type="button" value="Informações">
							</div>
							
					</form>
					
					
					<div id="blco_foot_2">						
						<p id="foot_fin3">Copyright © 2019 | SIS WEB </p>
						<p id="foot_fin4"> Desenvolvedor: Higor Pimentel </p>
					</div>							
		</div>
		
	<div id="container_info_principal">
	</div>		
		
	<div id="bloco_info_principal">
		<div id="btn_fechar_info" onclick="remove_info_inicio()">Fechar</div>
		<p id="info_principal">SIS WEB é destina-se ao gerenciamento de um pequeno estabelecimento Comercial.O sistema disponibiliza  as opções de cadastrar clientes e fornecedores, cadastrar usuários, gerenciar estoque, gerar relatórios.Os módulos liberados para teste estão listados abaixo.<br><br>
		 * Pagina Inicial > Novo usuário <br>
		 * Cadastro Gerais > Clientes <br>
		 * Relatórios > Cadastro Gerais <br><br>
		
		A aplicação esta hospedado no subdomino https://jogosvba.online/sisweb/, e pode ser acessado utilizando os seguintes dados:<br>
		Usuário: HIGOR 
		Senha:123 
		</p>		
	</div>	
		
		<footer class="foot">
		
			
			<p id="msg_err"> &#10008; Login ou Senha incorreta !! </p>	
			<p id="msg_validacao_cxs"> ⚠️ Preencha Login e Senha !! </p>	
		
		</footer>

			<script>
				
				document.addEventListener("focus",aplica_foco,true)
				document.addEventListener("click",aplica_foco,true)			
				

				function aplica_foco() {					

					var element = window.event.srcElement.id

						if (element.substring(0,2) == "cx") {
							
							
							if	 (element == "cx_usuario" || element == "cx_usuario2") 	{
							
									$("#blco_cx_usuario").css("boxShadow","2px 2px 10px #008B8B")
									$("#blco_cx_usuario2").css("boxShadow","2px 2px 10px #008B8B")
									$("#blco_cx_senha").css("boxShadow","none")
									$("#blco_cx_senha2").css("boxShadow","none")

									}	else  {

									$("#blco_cx_senha").css("boxShadow","2px 2px 10px #008B8B")
									$("#blco_cx_senha2").css("boxShadow","2px 2px 10px #008B8B")
									$("#blco_cx_usuario").css("boxShadow","none")
									$("#blco_cx_usuario2").css("boxShadow","none")


									}

								} else {	
									$("#blco_cx_usuario").css("boxShadow","none")
									$("#blco_cx_senha").css("boxShadow","none")	
									$("#blco_cx_usuario2").css("boxShadow","none")
									$("#blco_cx_senha2").css("boxShadow","none")		
																
							}		
					}



			</script>

				<script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
				<script type="text/javascript" src="js/index.js"></script>
		
	</body>

</html>