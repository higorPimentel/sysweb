<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Cadastro Clientes - SIS Web</title>
		
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/frmt_pagina_inicial.css">
		<link rel="stylesheet" href="css/frmt_cad_client.css">
		<link rel="stylesheet" href="css/frmt_novo_usuario.css">
		<link rel="stylesheet" href="css/bootstrap-flex.css">
		
	</head>

	<body onload="carrega_var()">
	
		
			<div id = "container">						
								<form class="frm_cad_clientes" id="frm_cad_clientes2">
										<section id ="dados_pessoais" class="frames">
											<div id="bloco_cadastro_user">
													<h1 id="">Dados Cadastro</h1>												
														<div class = "row">				
																<div class="col">	
																	<div class="blcos_frm" id ="bloco_cx_codigo">
																		<label for ="cx_codigo">Código</label>
																		<input type="text" id="cx_codigo" class="cxs_text" disabled value="1" >
																	</div>
																</div>	
														</div>
														<div class = "row">	
																<div class="col">	
																	 <div class="blcos_frm" id ="bloco_cx_nome">
																		<label for ="">Nome Usuário *</label>
																		<input type="text" id="cx_nome" class="cxs_text" autofocus>
																	</div>
																</div>	
																<div class="col">																		
																	<div class="blcos_frm" id ="bloco_cx_email">
																		<label for ="">Email *</label>
																		<input type="email" id="cx_email" class="cxs_text">
																	</div>
																</div>	
																<div class="col">	
																</div>
														</div>	
														<div class = "row">	
																<div class="col">	
																	 <div class="blcos_frm" id ="bloco_cx_senha">
																		<label for ="">Senha *</label>
																		<input type="password" id="cx_senha" class="cxs_text" oninput="valida_cxs_senha()">
																	</div>
																</div>	
																<div class="col">																		
																	<div class="blcos_frm" id ="bloco_cx_confirma_senha">
																		<label for ="cx_codigo">Confirmar Senha *</label>
																		<input type="password" id="cx_confirmacao_senha" class="cxs_text" oninput="valida_cxs_senha()">
																	</div>
																</div>	
																<div class="col">	
																	 <div class="blcos_frm" id ="bloco_cx_senha">	
																		<p id="info_validacao_senhas">&#10004; As senhas coicidem</p>
																	</div>	
																</div>																
														</div>
												</div>	
									<div id="btns_cadastro">
										<input type="button" value="Confirmar" id="btn_confirmar" onclick="cadastra_novo_usuario()" onmousemove="altera_btn()" onmouseleave="ret_btn()">
										<input type="button" value="Cancelar" id="btn_cancelar" onclick="limpa_cmpo_novo_user()"  onmousemove="altera_btn2()" onmouseleave="ret_btn2()">
										<input type="button" value="Voltar" id="btn_voltar" onclick="redireciona_exibicao()"  onmousemove="altera_btn3()" onmouseleave="ret_btn3()">
									</div>	
												
										</section>	
								</form>								

														
								
						
										
										<div id="separa_cabecalho"><p>Cadastrar Novo Usuário</p></div>
										<p id="msg_sucesso"> &#10004; Registro incluído com Exito !! </p>	
										<p id="msg_validacao_cxs"> ⚠️ Campos obrigatório em branco. <br/>Preencha os campos destacados !! </p>	
										<p id="msg_err"> &#10008; As senhas digitadas não coicidem !! </p>
																	
						
						
			</div>
			
	
	
	<script>
		
		
		document.addEventListener("focus",insere_foco,true)
		document.addEventListener("blur",retira_foco,true)
		
	
	
			function insere_foco() {
				
				let elemnt = window.event.srcElement.id
				let inicio_element = elemnt.substr(0,2)
				
						if (inicio_element == 'cx' ) {
							
							document.getElementById(elemnt).style.boxShadow = "2px 2px 10px #008B8B";
							
						}
				
			}
			
			function retira_foco() {
				
				let elemnt = window.event.srcElement.id
				let inicio_element = elemnt.substr(0,2)
				
						if (inicio_element == 'cx' ) {
							
							document.getElementById(elemnt).style.boxShadow = "none";
							
						}
				
			}
			
				
						
	
	</script>

		<script type="text/javascript" src="js/index.js"></script>	
		<script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
		<script type="text/javascript" src="js/pg1.js"></script>
		

	</body>



</html>