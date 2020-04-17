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
			
			<div id="qd_info">		
		
					<form id="frm_login">							
							<h1 id="cab_log">Login</h1>					
							<div id="frmt_log">							
								<img id="img_login"width="30px"src="img/ft_login.png">
								<input id="cx_usuario" class ="cx_txt" type="text" placeholder="usuário" autofocus>							
							</div>	
							
							<div id="frmt_log">	
								<img id="img_senha" width="30px" src="img/ft_sn.png">
								<input id="cx_senha" class ="cx_txt" type="password" placeholder="SENHA">							
							</div>	
							
							<div class="btn_check">
								<input onclick="exib_snha()" id="btn_check_exib"type="checkbox">Exibir Senha</input>
							</div>
							
							
							<div class="btn_log">
								<input onmousemove="altera_btn()" onmouseleave="ret_btn()" onclick="click_btn_lgn()"id="btn_acessar"type="button" value="Acessar">
								<input onmousemove="altera_btn2()" onmouseleave="ret_btn2()" onclick="click_btn_cad()"id="btn_cadastrar"type="button" value="Novo Usuário">
																	
							</div>
							
					</form>
				
					<div class="others_info">
			
							<img src="img/logo1.png" alt="Logo SIS WEB">			
							<p id="txt_others_1">Sis WEB - Desenvolvendo Soluções WEB</p>
													
						
				    </div>
					
					<div>
						
						<p id="foot_fin">Copyright © 2019 | SIS WEB </p>
						<p id="foot_fin2"> Desenvolvedor: Higor Pimentel </p>
					</div>			
			</div>
		</div>
		
		
		
		<div id="bloco_login_2">
		
			<form id="frm_login2">							
							<h1 id="cab_log">Login</h1>					
							<div id="frmt_log">							
								<img id="img_login"width="30px"src="img/ft_login.png">
								<input id="cx_usuario2" class ="cx_txt" type="text" placeholder="usuário" autofocus>							
							</div>	
							
							<div id="frmt_log">	
								<img id="img_senha" width="30px" src="img/ft_sn.png">
								<input id="cx_senha2" class ="cx_txt" type="password" placeholder="SENHA">							
							</div>	
							
												
							<div class="btn_log">
								<input onmousemove="altera_btn()" onmouseleave="ret_btn()" onclick="click_btn_lgn2()"id="btn_acessar2"type="button" value="Acessar">
								<input onmousemove="altera_btn2()" onmouseleave="ret_btn2()" onclick="click_btn_cad2()"id="btn_cadastrar2"type="button" value="Novo Usuário">
							</div>
							
					</form>
					
					
					<div id="blco_foot_2">						
						<p id="foot_fin">Copyright © 2019 | SIS WEB </p>
						<p id="foot_fin2"> Desenvolvedor: Higor Pimentel </p>
					</div>							
		</div>
		
				
		
		
		<footer class="foot">
		
			
			<p id="msg_err"> &#10008; Login ou Senha incorreta !! </p>	
			<p id="msg_validacao_cxs"> &#10008; Preencha Login e Senha !! </p>	
		
		</footer>

				<script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
				<script type="text/javascript" src="js/index.js"></script>
		
	</body>

</html>