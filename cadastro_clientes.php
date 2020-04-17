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
						
								<form class="frm_cad_clientes">
										<section id ="dados_pessoais" class="frames">
											<h1>Dados Pessoais</h1>
												
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
																		<input type="radio" name="tipo_cadastro">Pessoa Fisica
																		<input type="radio" name="tipo_cadastro">Pessoa Juridica
																	</div>	
															</div>				
														</div>	
												</div>	
												
												<div class = "row">			
															<div class="blcos_frm" id ="bloco_nome">
																<label for="cx_nome">Nome</label>
																<input type="text" id="cx_nome" class="cxs_text" autofocus>
															</div>													
												</div>			
												
												<div class = "row">				
														<div class="col">													
																<div class="blcos_frm" id ="bloco_rg">
																	<label for="cx_rg">RG</label>
																	<input type="text" id="cx_rg" class="cxs_text">
																</div>	
														</div>		
														<div class="col">	
																<div class="blcos_frm" id ="bloco_cpf">
																	<label for="cx_cpf">CPF</label>
																	<input type="text" id="cx_cpf" class="cxs_text">
																</div>	
														</div>	
														<div class="col">	
														</div>
												</div>														
													
												<div class = "row">				
														<div class="col">		
																<div class="blcos_frm" id ="bloco_outros_doc">
																	<label for="cx_outros_doc">Outros Doc (CNH...)</label>
																	<input type="text" id="cx_outros_doc" class="cxs_text">
																</div>	
															</div>
															<div class="col">
																<div class="blcos_frm" id ="bloco_sexo">
																	<label>Sexo</label>
																		<div id="radio_sexo">
																			<input type="radio" name="sexo">Masculino
																			<input type="radio" name="sexo">Feminino
																		</div>	
																</div>	
															</div>	
															<div class="col">	
															</div>
												</div>
												
												<div class = "row">				
														<div class="col">												
																<div class="blcos_frm" id ="bloco_dt_nascimento">
																	<label for="cx_dt_nascimento">Dt. Nascm.</label>
																	<input type="text" id="cx_dt_nascimento" class="cxs_text">
																</div>
														</div>		
														<div class="col">			
																<div class="blcos_frm" id ="bloco_contato">
																	<label for="cx_contato">Responsável</label>
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
																	<label for="cx_celular">Celular</label>
																	<input type="text" id="cx_celular" class="cxs_text">
																</div>														
															</div>	
															<div class="col">	
															</div>
												</div>	
														
												<div class = "row">	
														<div class="blcos_frm" id ="bloco_razao">
															<label for="cx_razao">Razão Social</label>
															<input type="text" id="cx_razao" class="cxs_text">
														</div>	
												</div>		

												<div class = "row">				
														<div class="col">	
																<div class="blcos_frm" id ="bloco_cnpj">
																	<label for="cx_insc_estadual">CNPJ</label>
																	<input type="text" id="cx_cnpj" class="cxs_text">
																</div>	
														</div>			
														<div class="col">		
																<div class="blcos_frm" id ="bloco_insc_estadual">
																	<label for="cx_insc_estadual">Inscr. Estadual</label>
																	<input type="text" id="cx_insc_estadual" class="cxs_text">
																</div>	
														</div>	
												</div>			
													
										</section>			
										
										<section id ="endereco_cliente" class="frames">
												<h1>Endereço do Cliente </h1>
																
															
												<div class = "row">				
														<div class="col">	
																<div class="blcos_frm" id ="bloco_cep_cliente">
																	<label for="cx_cep_cliente">CEP</label>
																	<input type="text" id="cx_cep_cliente" class="cxs_text">
																</div>	
														</div>																	
														<div class="col">																	
																<div class="blcos_frm" id ="bloco_endereco_cliente">
																	<label for="cx_endereco_cliente">Endereço</label>
																	<input type="text" id="cx_endereco_cliente" class="cxs_text">
																</div>																
														</div>
														<div class="col">		
																<div class="blcos_frm" id ="bloco_numero_cliente">
																	<label for="cx_numero_cliente">Número</label>
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
																	<label for="cx_bairro_cliente">Bairro</label>
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
																	<label for="cx_estado_cliente">UF</label>
																		<select id="cx_selecao_estado_cliente" class="cxs_text">
																			<option value="AC">AC</option>
																			<option value="AC">AL</option>
																			<option value="AC">AP</option>
																			<option value="AC">AM</option>
																			<option value="AC">BA</option>
																			<option value="AC">CE</option>
																			<option value="AC">DF</option>
																			<option value="AC">ES</option>
																			<option value="AC">GO</option>
																			<option value="AC">MA</option>
																			<option value="AC">MT</option>
																			<option value="AC">MS</option>
																			<option value="AC">MG</option>
																			<option value="AC">PA</option>
																			<option value="AC">PB</option>
																			<option value="AC">PR</option>
																			<option value="AC">PE</option>
																			<option value="AC">PI</option>
																			<option value="AC">RJ</option>
																			<option value="AC">RN</option>
																			<option value="AC">RS</option>
																			<option value="AC">RO</option>
																			<option value="AC">RR</option>
																			<option value="AC">SC</option>
																			<option value="AC">SP</option>
																			<option value="AC">SE</option>
																			<option value="AC">TO</option>
																		</select>
																</div>	
														</div>		
														<div class="col">			
																<div class="blcos_frm" id ="bloco_cidade_cliente">
																	<label for="cx_cidade_cliente">Cidade</label>																	
																		<select id="cx_cidade_cliente" class="cxs_text">
																			<option value="1">São José dos Campos</option>
																			<option value="1">Limeira</option>
																		</select>	
																</div>	
														</div>
														<div class="col">
														</div>
												</div>																
															
																
												<div class = "row">				
														<div class="col">																	
																<div class="blcos_frm" id ="bloco_email_cliente">
																	<label for="cx_email_cliente">E-mail</label>
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
																		<label for="cx_cep_cobranca">CEP</label>
																		<input type="text" id="cx_cep_cobranca" class="cxs_text">
																	</div>	
															  </div>	 	 
															  <div class="col">	
																		<div class="blcos_frm" id ="bloco_endereco_cobranca">
																			<label for="cx_endereco_cobranca">Endereço</label>
																			<input type="text" id="cx_endereco_cobranca" class="cxs_text">
																		</div>	
																</div>
																<div class="col">		
																		<div class="blcos_frm" id ="bloco_numero_cobranca">
																			<label for="cx_numero_cobranca">Número</label>
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
																		<label for="cx_bairro_cobranca">Bairro</label>
																		<input type="text" id="cx_bairro_cobranca" class="cxs_text">
																	</div>	
															</div>	
														</div>		
																																
													<div class = "row">				
														<div class="col">																
																<div class="blcos_frm" id ="bloco_estado_cobranca"> 
																	<label for="cx_estado_cobranca">UF</label>
																		<select id="cx_selecao_estado_cobranca" class="cxs_text">
																			<option value="AC">AC</option>
																			<option value="AC">AL</option>
																			<option value="AC">AP</option>
																			<option value="AC">AM</option>
																			<option value="AC">BA</option>
																			<option value="AC">CE</option>
																			<option value="AC">DF</option>
																			<option value="AC">ES</option>
																			<option value="AC">GO</option>
																			<option value="AC">MA</option>
																			<option value="AC">MT</option>
																			<option value="AC">MS</option>
																			<option value="AC">MG</option>
																			<option value="AC">PA</option>
																			<option value="AC">PB</option>
																			<option value="AC">PR</option>
																			<option value="AC">PE</option>
																			<option value="AC">PI</option>
																			<option value="AC">RJ</option>
																			<option value="AC">RN</option>
																			<option value="AC">RS</option>
																			<option value="AC">RO</option>
																			<option value="AC">RR</option>
																			<option value="AC">SC</option>
																			<option value="AC">SP</option>
																			<option value="AC">SE</option>
																			<option value="AC">TO</option>
																		</select>
																</div>	
														</div>		
														<div class="col">			
																<div class="blcos_frm" id ="bloco_cidade_cobranca">
																	<label for="cx_cidade_cobranca">Cidade</label>																	
																		<select id="cx_cidade_cobranca" class="cxs_text">
																			<option value="1">São José dos Campos</option>
																			<option value="1">Limeira</option>
																		</select>	
																</div>	
														</div>
														<div class="col">
														</div>
												</div>										
																
												<div class = "row">				
															 <div class="col">	
																		<div class="blcos_frm" id ="bloco_email_cobranca">
																			<label for="cx_email_cobranca">E-mail</label>
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
																			<label for="cx_dt_cadastro">Dt. Cadastro</label>
																			<input type="text" id="cx_dt_cadastro" class="cxs_text">
																		</div>	
																</div>	
																 <div class="col">			
																			<div class="blcos_frm" id ="bloco_resp_cadastro">
																				<label for="cx_resp_cadastro">Responsável Cadastro</label>
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
																		<input type="text" id="cx_obs" class="cxs_text"> 
																	</div>	
															  </div>
										</section>
													
									
										<section id ="opcpes_cadastro" class="frames">
																				
																<div id="cx_selec_opcoes">
																	<input type="radio" name="tipo_cadastro" selected="true">Novo
																	<input type="radio" name="tipo_cadastro">Alterar
																	<input type="radio" name="tipo_cadastro">Excluir
																</div>	
																
																<div id="btns_cadastro">
																	<input type="button" value="Confirmar" id="btn_confirmar" onmousemove="altera_btn()">
																	<input type="button" value="Cancelar" id="btn_cancelar">
																</div>	
										</section>	
								
								</form>
							
						</div>		
											
						
						
			</div>

		<script type="text/javascript" src="js/index.js"></script>	
		<script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
		<script type="text/javascript" src="js/pg1.js"></script>
		

	</body>



</html>