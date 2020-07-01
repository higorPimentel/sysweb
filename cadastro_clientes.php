<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Cadastro Clientes - SIS Web</title>
		
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/frmt_pagina_inicial.css">
		<link rel="stylesheet" href="css/frmt_cad_client.css"  >	
		<link rel="stylesheet" href="css/bootstrap-flex.css"  >
		
	</head>

	<body onload="carrega_var ()">
	
			<header>				
					
								<?php include("menu.php")?>
			</header>


			<div id = "container">
		
				
						
						<div id="guia_opc">	
							
								<?php include("guia_opcoes.php")?>
							
						</div>				
						
								<form class="frm_cad_clientes" id="frm_cad_clientes2">
										<section id ="dados_pessoais" class="frames">
											<h1 id="h11">Dados Pessoais</h1>
												
												<div class = "row">				
														<div class="col">	
															<div class="blcos_frm" id ="bloco_codigo">
																<label for ="cx_codigo">Código</label>
																<input type="text" id="cx_codigo" class="cxs_text" disabled value="1" >
															</div>
														</div>	
														<div class="col">
															 <div class="blcos_frm" id ="bloco_tipo_cadastro">
																	<label>Tipo Cadastro</label>
																<div id="radio_tipo_cad">
																		<!--
																		<input type="radio" name="tipo_cadastro">Pessoa Fisica
																		<input type="radio" name="tipo_cadastro">Pessoa Juridica
																		-->
																	<div class="cxs_selecao">	
																	    <div onclick = "ativa_cmb_pessoa_fisica()" id="cx_selecao_pessoa_fisica">&#10003;</div>
																		<p>Pessoa Fisica</p>
																	</div>
																	<div class="cxs_selecao">	
																	    <div onclick = "ativa_cmb_pessoa_juridica()"  id="cx_selecao_pessoa_juridica">&#10003;</div>
																		<p>Pessoa Juridica</p>
																	</div>	
																</div>		
															</div>				
														</div>	
														<div class="col">	
														</div>
												</div>	
												
												<div class = "row">			
															<div class="blcos_frm" id ="bloco_nome">
																<label for="cx_nome">Nome *</label>
																<input type="text" id="cx_nome" class="cxs_text" autofocus>
															</div>													
												</div>			
												
												<div class = "row">				
														<div class="col">													
																<div class="blcos_frm" id ="bloco_rg">
																	<label for="cx_rg">RG *</label>
																	<input type="text" id="cx_rg" class="cxs_text">
																</div>	
														</div>		
														<div class="col">	
																<div class="blcos_frm" id ="bloco_cpf">
																	<label for="cx_cpf">CPF *</label>
																	<input type="text" id="cx_cpf" class="cxs_text">
																</div>	
														</div>	
														<div class="col">	
														</div>
												</div>														
													
												<div class = "row">				
														<div class="col">		
																<div class="blcos_frm" id ="bloco_outros_doc">
																	<label for="cx_outros_doc">Outros Doc (CNH...) *</label>
																	<input type="text" id="cx_outros_doc" class="cxs_text">
																</div>	
															</div>
															<div class="col">
																<div class="blcos_frm" id ="bloco_sexo">
																	<label>Sexo</label>
																		<div id="radio_sexo">																		
																			<div class="cxs_selecao">	
																				<div onclick = "ativa_cmb_masculino()" id="cx_cmb_masculino">&#10003;</div>
																				<p>Masculino</p>
																			</div>
																			<div class="cxs_selecao">	
																				<div onclick = "ativa_cmb_feminino()"  id="cx_cmb_feminino">&#10003;</div>
																				<p>Feminino</p>
																			</div>	
																		</div>	
																</div>	
															</div>	
															<div class="col">	
															</div>
												</div>
												
												<div class = "row">				
														<div class="col">												
																<div class="blcos_frm" id ="bloco_dt_nascimento">
																	<label for="cx_dt_nascimento">Dt. Nascm. *</label>
																	<input type="text" id="cx_dt_nascimento" class="cxs_text">
																</div>
														</div>		
														<div class="col">			
																<div class="blcos_frm" id ="bloco_contato">
																	<label for="cx_contato">Responsável *</label>
																	<input type="text" id="cx_contato" class="cxs_text">
																</div>	
														</div>	
														<div class="col">	
														</div>
												</div>		
													
												<div class = "row">				
														<div class="col">													
																<div class="blcos_frm" id ="bloco_telefone">
																	<label for="cx_telefone">Telefone</label>
																	<input type="text" id="cx_telefone" class="cxs_text">
																</div>	
														</div>			
														<div class="col">			
																<div class="blcos_frm" id ="bloco_celular">
																	<label for="cx_celular">Celular *</label>
																	<input type="text" id="cx_celular" class="cxs_text">
																</div>														
															</div>	
															<div class="col">	
															</div>
												</div>	
														
												<div class = "row">	
														<div class="blcos_frm" id ="bloco_razao">
															<label for="cx_razao">Razão Social *</label>
															<input type="text" id="cx_razao" class="cxs_text">
														</div>	
												</div>		

												<div class = "row">				
														<div class="col">	
																<div class="blcos_frm" id ="bloco_cnpj">
																	<label for="cx_insc_estadual">CNPJ *</label>
																	<input type="text" id="cx_cnpj" class="cxs_text">
																</div>	
														</div>			
														<div class="col">		
																<div class="blcos_frm" id ="bloco_insc_estadual">
																	<label for="cx_insc_estadual">Inscr. Estadual *</label>
																	<input type="text" id="cx_insc_estadual" class="cxs_text">
																</div>	
														</div>	
												</div>			
													
										</section>			
										
										<section id ="endereco_cliente" class="frames">
												<h1>Endereço do Cliente</h1>
																
															
												<div class = "row">				
														<div class="col">	
																<div class="blcos_frm" id ="bloco_cep_cliente">
																	<label for="cx_cep_cliente">CEP *</label>
																	<input type="text" id="cx_cep_cliente" class="cxs_text">
																</div>	
														</div>																	
														<div class="col">																	
																<div class="blcos_frm" id ="bloco_endereco_cliente">
																	<label for="cx_endereco_cliente">Rua *</label>
																	<input type="text" id="cx_rua_cliente" class="cxs_text">
																</div>																
														</div>
														<div class="col">		
																<div class="blcos_frm" id ="bloco_numero_cliente">
																	<label for="cx_numero_cliente">Número *</label>
																	<input type="text" id="cx_numero_cliente" class="cxs_text">
																</div>	
														</div>	
													<div class="col">
													</div>		
												</div>		

												<div class = "row">				
														<div class="col">	
																<div class="blcos_frm" id ="bloco_complemento_cliente">
																	<label for="cx_complemento_cliente">Complemento</label>
																	<input type="text" id="cx_complemento_cliente" class="cxs_text">
																</div>	
														</div>																
														<div class="col">		
																<div class="blcos_frm" id ="bloco_bairro_cliente">
																	<label for="cx_bairro_cliente">Bairro *</label>
																	<input type="text" id="cx_bairro_cliente" class="cxs_text">
																</div>	
														</div>
												</div>			
															
																<!--	<div class="blcos_frm" id ="bloco_estado_cliente"> 
																	<label for="cx_estado_cliente">UF</label>
																	<input type="text" id="cx_estado_cliente" class="cxs_text">
																</div>	-->
												<div class = "row">				
														<div class="col">																
																<div class="blcos_frm" id ="bloco_estado_cliente"> 
																	<label for="cx_estado_cliente">UF *</label>
																		<select onchange ="carrega_cmb_cidades()" onfocus = "limpar_cmb_cidades()" id="cx_selecao_estado_cliente" class="cxs_text">																																				
																			<option value="0"></option>
																			<option value="1">AC</option>
																			<option value="2">AL</option>
																			<option value="4">AP</option>
																			<option value="3">AM</option>
																			<option value="5">BA</option>
																			<option value="6">CE</option>
																			<option value="7">DF</option>
																			<option value="8">ES</option>
																			<option value="9">GO</option>
																			<option value="10">MA</option>
																			<option value="13">MT</option>
																			<option value="12">MS</option>
																			<option value="11">MG</option>
																			<option value="14">PA</option>
																			<option value="15">PB</option>
																			<option value="18">PR</option>
																			<option value="16">PE</option>
																			<option value="17">PI</option>
																			<option value="19">RJ</option>
																			<option value="20">RN</option>
																			<option value="23">RS</option>
																			<option value="21">RO</option>
																			<option value="22">RR</option>
																			<option value="24">SC</option>
																			<option value="26">SP</option>
																			<option value="25">SE</option>
																			<option value="27">TO</option>		
																		</select>
																</div>	
														</div>		
														<div class="col">			
																<div class="blcos_frm" id ="bloco_cidade_cliente">
																	<label for="cx_cidade_cliente">Cidade *</label>																	
																		<select id="cx_cidade_cliente" class="cxs_text">
																		</select>	
																</div>	
														</div>
														<div class="col">
														</div>
												</div>																
															
																
												<div class = "row">				
														<div class="col">																	
																<div class="blcos_frm" id ="bloco_email_cliente">
																	<label for="cx_email_cliente">E-mail *</label>
																	<input type="text" id="cx_email_cliente" class="cxs_text">
																</div>	
															</div>																	
															<div class="col">			
																<div class="blcos_frm" id ="bloco_email_nf_cliente">
																	<label for="cx_email_nf_cliente">E-mail para NF-e</label>
																	<input type="text" id="cx_email_nf_cliente" class="cxs_text">
																</div>															
															</div>	
														<div class="col">
														</div>
												</div>				
								
										</section>
								
								
										<section id ="endereco_cobranca" class="frames">
											<h1>Endereço de Cobrança </h1>
																
																
													<div class = "row">				
															 <div class="col">		
																	<div class="blcos_frm" id ="bloco_cep_cobranca">
																		<label for="cx_cep_cobranca">CEP *</label>
																		<input type="text" id="cx_cep_cobranca" class="cxs_text">
																	</div>	
															  </div>	 	 
															  <div class="col">	
																		<div class="blcos_frm" id ="bloco_endereco_cobranca">
																			<label for="cx_endereco_cobranca">Rua *</label>
																			<input type="text" id="cx_rua_cobranca" class="cxs_text">
																		</div>	
																</div>
																<div class="col">		
																		<div class="blcos_frm" id ="bloco_numero_cobranca">
																			<label for="cx_numero_cobranca">Núm *</label>
																			<input type="text" id="cx_numero_cobranca" class="cxs_text">
																		</div>	
																</div>	
															 <div class="col">
															</div>		
														</div>		
																		
														<div class = "row">				
															 <div class="col">	
																	<div class="blcos_frm" id ="bloco_complemento_cobranca">
																		<label for="cx_complemento_cobranca">Complemento</label>
																		<input type="text" id="cx_complemento_cobranca" class="cxs_text">
																	</div>	
															 </div>
															 <div class="col">		
																	<div class="blcos_frm" id ="bloco_bairro_cobranca">
																		<label for="cx_bairro_cobranca">Bairro *</label>
																		<input type="text" id="cx_bairro_cobranca" class="cxs_text">
																	</div>	
															</div>	
														</div>		
																																
													<div class = "row">				
														<div class="col">																
																<div class="blcos_frm" id ="bloco_estado_cobranca"> 
																	<label for="cx_estado_cobranca">UF *</label>
																		<select onchange ="carrega_cmb_cidades2()" onfocus = "limpar_cmb_cidades2()" id="cx_selecao_estado_cobranca" class="cxs_text">
																				<option value="0"></option>
																				<option value="1">AC</option>
																			<option value="2">AL</option>
																			<option value="4">AP</option>
																			<option value="3">AM</option>
																			<option value="5">BA</option>
																			<option value="6">CE</option>
																			<option value="7">DF</option>
																			<option value="8">ES</option>
																			<option value="9">GO</option>
																			<option value="10">MA</option>
																			<option value="13">MT</option>
																			<option value="12">MS</option>
																			<option value="11">MG</option>
																			<option value="14">PA</option>
																			<option value="15">PB</option>
																			<option value="18">PR</option>
																			<option value="16">PE</option>
																			<option value="17">PI</option>
																			<option value="19">RJ</option>
																			<option value="20">RN</option>
																			<option value="23">RS</option>
																			<option value="21">RO</option>
																			<option value="22">RR</option>
																			<option value="24">SC</option>
																			<option value="26">SP</option>
																			<option value="25">SE</option>
																			<option value="27">TO</option>		
																		</select>
																</div>	
														</div>		
														<div class="col">			
																<div class="blcos_frm" id ="bloco_cidade_cobranca">
																	<label for="cx_cidade_cobranca">Cidade *</label>																	
																		<select id="cx_cidade_cobranca" class="cxs_text">
																		</select>	
																</div>	
														</div>
														<div class="col">
														</div>
												</div>										
																
												<div class = "row">				
															 <div class="col">	
																		<div class="blcos_frm" id ="bloco_email_cobranca">
																			<label for="cx_email_cobranca">E-mail *</label>
																			<input type="text" id="cx_email_cobranca" class="cxs_text">
																		</div>	
															 </div>		
															 <div class="col">		
																		<div class="blcos_frm" id ="bloco_nf_cobranca">
																			<label for="cx_email_nf_cobranca">E-mail para NF-e</label>
																			<input type="text" id="cx_email_nf_cobranca" class="cxs_text">
																		</div>	
															 </div>
												 </div>				 
																
								
										</section>
								
									
										<section id ="outras_info" class="frames">
												<h1>Outras Informações</h1>								
								
								
													<div class = "row">			
															  <div class="col">			
																		<div class="blcos_frm" id ="bloco_dt_cadastro">
																			<label for="cx_dt_cadastro">Dt. Cadastro *</label>
																			<input type="text" id="cx_dt_cadastro" class="cxs_text">
																		</div>	
																</div>	
																 <div class="col">			
																			<div class="blcos_frm" id ="bloco_resp_cadastro">
																				<label for="cx_resp_cadastro">Responsável Cadastro *</label>
																				<input type="text" id="cx_resp_cadastro" class="cxs_text">
																			</div>	
																 </div>	
																 <div class="col">
																 </div>
													</div>				 
														
													<div class = "row">			
															  <div class="col">		
																	<div class="blcos_frm" id ="bloco_dt_alteracao">
																		<label for="cx_dt_alteracao">Dt. Alteração</label>
																		<input type="text" id="cx_dt_alteracao" class="cxs_text">
																	</div>		
																</div>																		
															    <div class="col">			
																		<div class="blcos_frm" id ="bloco_resp_alteracao">
																			<label for="cx_resp_alteracao">Responsável Alteração</label>
																			<input type="text" id="cx_resp_alteracao" class="cxs_text">
																		</div>	
														        </div>		
																 <div class="col">
																 </div>
																
													</div>	
														<div class = "row">				
															 <div class="col">	
																	<div class="blcos_frm" id ="bloco_obs">
																		<label for="cx_obs">Observações</label>
																		<textarea type="text" id="cx_obs" class="cxs_text"></textarea> 
																	</div>	
															  </div>
										</section>
													
									
										<section id ="opcpes_cadastro" class="frames">
																				
																<div id="cx_selec_opcoes">
																	<div class="cxs_selecao">	
																		<div onclick = "ativa_cmb_novo()" id="cx_cmb_novo">&#10003;</div>
																		<p>Novo</p>
																	</div>
																	<div class="cxs_selecao">	
																		<div onclick = "ativa_cmb_alterar()"  id="cx_cmb_alterar">&#10003;</div>
																		<p>Alterar</p>
																	</div>	
																	<div class="cxs_selecao">	
																		<div onclick = "ativa_cmb_excluir()"  id="cx_cmb_excluir">&#10003;</div>
																		<p>Excluir</p>
																	</div>	
																</div>	
																
																<div id="btns_cadastro">
																	<input type="button" value="Confirmar" id="btn_confirmar" onclick="cadastra_cliente()" onmousemove="altera_btn()" onmouseleave="ret_btn()">
																	<input type="button" value="Cancelar" id="btn_cancelar" onclick="limpar_cad_clientes()"  onmousemove="altera_btn2()" onmouseleave="ret_btn2()">
																</div>	
										</section>	
										
										<div id="separa_cabecalho"><p>Cadastro Clientes</p></div>
										<p id="msg_sucesso"> &#10004; Registro incluído com Exito !! </p>	
										<p id="msg_validacao_cxs"> ⚠️ Campos obrigatório em branco. <br/>Preencha os campos destacados !! </p>	
								
								</form>
							
						</div>		
											
						
						
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