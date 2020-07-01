function gerar_relatorio(){

let tip_cad = $("#cx_Tipo_Relatorio").val()
let dt_inicio = $("#cx_dta_inicio").val()
let dt_fim = $("#cx_dta_fim").val()


if (tip_cad == 1) {
// cad_clientes
	var tab_relatorio = 'cadastro_clientes'
		
}else if (tip_cad == 2) {
	var tab_relatorio = 'cadastro_fornecedores'
}


	$.ajax({
		method:'POST',
		url:'executa_ger_rel.php',
		data:{tab_relatorio_p:tab_relatorio,dt_inicio_p:dt_inicio,dt_fim_p:dt_fim},
		success:function(retorno){
			

			var dados = JSON.parse(retorno)
			var qtd_reg = dados.length
			
				
					

			var itm = ""
				itm +=	"<tr>"
				itm += "<th>Código</th>"
				itm += "<th>Tipo Cadastro</th>"
				itm += "<th>Nome</th>"
				itm += "<th>Sexo</th>"
				itm += "<th>Dt Nascim.</th>"
				itm += "<th>Rg</th>"
				itm += "<th>CPF</th>"
				itm += "<th>Dt Cadastro</th>"
				itm += "<th>Resp. Cadastro</th>"
				itm +=	"</tr>"	

			for (var i = 0; i < qtd_reg; i ++ ) {	

				
					itm += "<tr>";
					itm += "<td id='ide_" + [i] + "'>" + dados[i].id_cad_cliente + "</td>"; 
					itm += "<td id='tip_" + [i] + "'>" + dados[i].tipo_cadastro + "</td>" ;
					itm += "<td id='nom_" + [i] + "'>" + dados[i].nome + "</td>" ;
					itm += "<td id='sex_" + [i] + "'>" + dados[i].sexo + "</td>" ;
					itm += "<td id='dtn_" + [i] + "'>" + dados[i].dt_nascm + "</td>" ;
					itm += "<td id='rga_" + [i] + "'>" + dados[i].rg + "</td>"; 
					itm += "<td id='cpf_" + [i] + "'>" + dados[i].cpf + "</td>";  
					itm += "<td id='dtc_" + [i] + "'>" + dados[i].dt_cadastro + "</td>";
					itm += "<td id='res_" + [i] + "'>" + dados[i].responsavel_cadastro + "</td>"; 
					itm += "</tr>"					

			}


				$("#relatorio").html(itm)
				$("#cont_registros").html("Registros Listados - " + qtd_reg)


		}	 

	})


}

function limpar_pesquisa(){


var itm = ""
itm +=	"<tr>"
itm += "<th>Código</th>"
itm += "<th>Tipo Cadastro</th>"
itm += "<th>Nome</th>"
itm += "<th>Rg</th>"
itm += "<th>CPF</th>"
itm += "<th>Dt Cadastro</th>"
itm +=	"</tr>"	
$("#relatorio").html(itm)
$("#cont_registros").html("Registros Listados - 0")

}