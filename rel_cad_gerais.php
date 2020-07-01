<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Cadastro Clientes - SIS Web</title>
		
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/frmt_pagina_inicial.css">
		<link rel="stylesheet" href="css/frmt_cad_client.css">	
		<link rel="stylesheet" href="css/bootstrap-flex.css">
		<link rel="stylesheet" href="css/frmt_rel_cad_gerais.css">

	</head>

	<body onload="carrega_var ()">
	
			<header>				
					
								<?php include("menu.php")?>
			</header>


			<div id = "container">	
				
						
						<div id="guia_opc">	
							
								<?php include("guia_opcoes.php")?>
							
						</div>	
							


						<h1 id="h11">Relatório - Cadastro Clientes</h1>		
						<p id="cont_registros">Registros Listados - 0</p>
						<div id="btns_cadastro">
							<div id="cont_btn">
								<input type="button" value="Processar Relatório" id="btn_confirmar" onclick="gerar_relatorio()" onmousemove="altera_btn()" onmouseleave="ret_btn()">
								<input type="button" value="Limpar" id="btn_cancelar" onclick="limpar_pesquisa()"  onmousemove="altera_btn2()" onmouseleave="ret_btn2()">
							</div>	
							<div id="cmb_tipo_relatorio">
								<label for="">Tipo Relatório</label>
								<select name="" id="cx_Tipo_Relatorio" autofocus>
									<option value="1">Cadastro Clientes</option>
									<option value="2">Cadastro Fornecedores</option>
								</select>
							</div>	
							<div class="grupo_dta">
								<label for="dta_inicio">Data Inicial</label>
								<input type="date" id="cx_dta_inicio">
							</div>	
							<div class="grupo_dta">
								<label for="dta_fim">Data Final</label>
								<input type="date" id="cx_dta_fim">
							</div>		

						</div>	
				

									
				<div id="conteudo_relatorio">
						<table id="relatorio">
							<tr>
								<th>Código</th>
								<th>Tipo Cadastro</th>
								<th>Nome</th>
								<th>Sexo</th>
								<th>Dt Nascim.</th>
								<th>Rg</th>
								<th>CPF</th>
								<th>Dt Cadastro</th>
								<th>Resp. Cadastro</th>
							</tr>
						</table>
				<div>

										
				<div id="separa_cabecalho"><p>Gerar Relatórios</p></div>
				<p id="msg_sucesso"> &#10004; Registro incluído com Exito !! </p>	
				<p id="msg_validacao_cxs"> ⚠️ Campos obrigatório em branco. <br/>Preencha os campos destacados !! </p>	
								
						
			</div>
			
	
	
	<script>
	
		let elemnt_table = document.getElementById("relatorio")
		elemnt_table.addEventListener("mousemove",frmata_itm,true)	
		elemnt_table.addEventListener("mouseleave",retira_itm,true)
	//	elemnt_table.addEventListener("click",seleciona_item,true)	



		document.addEventListener("focus",insere_foco,true)
		document.addEventListener("blur",retira_foco,true)
		let cmb_rel = document.getElementById("cx_Tipo_Relatorio")

		cmb_rel.addEventListener("change",altera_tit_cad,true)
	
		function altera_tit_cad() {

			if (cmb_rel.value == 1) {
				$("#h11").html("Relatório - Cadastro Clientes") 

			} else {
				$("#h11").html("Relatório - Cadastro Fornecedores") 	
		
			}
		}

			function insere_foco() {
				
				let elemnt = window.event.srcElement.id
				let inicio_element = elemnt.substr(0,2)
				
						if (inicio_element == 'cx' ) {
							
							document.getElementById(elemnt).style.boxShadow = "1px 1px 10px white";
							
						}
				
			}
			
			function retira_foco() {
				
				let elemnt = window.event.srcElement.id
				let inicio_element = elemnt.substr(0,2)
				
						if (inicio_element == 'cx' ) {
							
							document.getElementById(elemnt).style.boxShadow = "none";
							
						}
				
			}
			
		
			function frmata_itm(){
				let elemnt_tabela_id = window.event.srcElement.id
				let itm = elemnt_tabela_id.substr(4,3)
				


				$("#ide_" + itm).css("backgroundColor","#696969")
				$("#tip_" + itm).css("backgroundColor","#696969")
				$("#nom_" + itm).css("backgroundColor","#696969")
				$("#rga_" + itm).css("backgroundColor","#696969")
				$("#cpf_" + itm).css("backgroundColor","#696969")
				$("#dtc_" + itm).css("backgroundColor","#696969")
				$("#sex_" + itm).css("backgroundColor","#696969")
				$("#dtn_" + itm).css("backgroundColor","#696969")
				$("#res_" + itm).css("backgroundColor","#696969")


				$("#ide_" + itm).css("color","white")
				$("#tip_" + itm).css("color","white")
				$("#nom_" + itm).css("color","white")
				$("#rga_" + itm).css("color","white")
				$("#cpf_" + itm).css("color","white")
				$("#dtc_" + itm).css("color","white")	
				$("#sex_" + itm).css("color","white")
				$("#dtn_" + itm).css("color","white")
				$("#res_" + itm).css("color","white")

			
			}
			


			function retira_itm(){
				let elemnt_tabela_id = window.event.srcElement.id
				let itm = elemnt_tabela_id.substr(4,3)
				
				$("#ide_" + itm).css("backgroundColor","#F5F5F5")
				$("#tip_" + itm).css("backgroundColor","#F5F5F5")
				$("#nom_" + itm).css("backgroundColor","#F5F5F5")
				$("#rga_" + itm).css("backgroundColor","#F5F5F5")
				$("#cpf_" + itm).css("backgroundColor","#F5F5F5")
				$("#dtc_" + itm).css("backgroundColor","#F5F5F5")
				$("#sex_" + itm).css("backgroundColor","#F5F5F5")
				$("#dtn_" + itm).css("backgroundColor","#F5F5F5")
				$("#res_" + itm).css("backgroundColor","#F5F5F5")

				$("#ide_" + itm).css("color","#696969")
				$("#tip_" + itm).css("color","#696969")
				$("#nom_" + itm).css("color","#696969")
				$("#rga_" + itm).css("color","#696969")
				$("#cpf_" + itm).css("color","#696969")
				$("#dtc_" + itm).css("color","#696969")	
				$("#sex_" + itm).css("color","#696969")
				$("#dtn_" + itm).css("color","#696969")
				$("#res_" + itm).css("color","#696969")
			}	


			//function seleciona_item(){
			//	$("#relatorio td").css("backgroundColor","rgba(0,0,0,0.5")
			//	$("#relatorio td").css("color","white")
			//}
						
	
	</script>

		<script type="text/javascript" src="js/index.js"></script>	
		<script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
		<script type="text/javascript" src="js/pg1.js"></script>
		<script type="text/javascript"  src="js/rel_cad_gerais.js"></script>

	</body>
			



</html>