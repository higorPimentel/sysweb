/* TRATA URL ATUAL
	var url_atual = window.location.href
	 var qtd_caract = url_atual.length
	 var x_pos = url_atual.indexOf("!")
	 var url_tratada = url_atual.substring(x_pos, x_pos + (qtd_caract -x_pos ))
	 
	 var identifica_ponto = url_atual.indexOf(".")
	 var qtd_caract2 = url_tratada.length
	 var extract_direita = qtd_caract - identifica_ponto
	 var url_tratada2 = url_tratada.substring(0,qtd_caract2 - extract_direita)



		 var qtd_char2 = retorno.length
            var x_pos2 = retorno.indexOf("|")			
			nme_user = retorno.substring(0,x_pos2)
			var ultm_acesso = retorno.substring(x_pos2 + 1,qtd_char2)

*/

function carrega_var () {
	 x_identifica =1;
	 x_identifica2 =1;
	 x_identifica3 =1;
	 x_identifica4 =1;
	 x_identifica5 =1;
	 x_identifica6 =1;
	 x_identifica7 =1;
	 x_identifica8 = 1;
	 x_cont = 1;
	 check_opcao_cadastro = 1;
	 check_tipo_cadastro = 1;
	 check_sexo = 1;
	 
	 
	 
		 
		carregar_nome_usuario()
		carrega_id_registro()
		
				 
}

function minimiza_sub_menu() {

rotacionar_7()
maximixa_min_pg_cadastro()

}


function carrega_id_registro(){

var funcao_esp = 3;

	$.ajax ({
		method:'POST',
		url:'executa_funcoes_especificas.php',
		data:{funcao_esp_php:funcao_esp},
		success:function(retorno) {

			
			var qtd_char2 = retorno.length
            var x_pos2 = retorno.indexOf("|")			
			var id_cad = retorno.substring(0,x_pos2)
			var dt_cad = retorno.substring(x_pos2 + 1,qtd_char2)

			$('#cx_codigo').val(id_cad);
			$('#cx_dt_cadastro').val(dt_cad);
			$('#cx_resp_cadastro').val(nme_user);

	

		}

	})



}


function maximixa_min_pg_cadastro() {
	
	if (x_identifica8 == 1) {	
	//MINIMIZAR
		$('.frm_cad_clientes').css('margin-left','100px')
		$('.frm_cad_clientes').css('transition','0.5s')
			
		$('#container_conteudo').css('margin-left','130px')
		$('#container_conteudo').css('transition','0.5s')	
			
			
			
			x_identifica8 = 2;
	
		}else{
		$('.frm_cad_clientes').css('margin-left','240px')
		$('.frm_cad_clientes').css('transition','0.5s')
			
		$('#container_conteudo').css('margin-left','350px')
		$('#container_conteudo').css('transition','0.5s')	
			
			
			
			
			x_identifica8 = 1;
	
	}
		
	
}



function carregar_nome_usuario() {
	
					var url_atual = window.location.href		
					var qtd_char = url_atual.length
					var x_pos = url_atual.indexOf("!")
					var url_tratada = url_atual.substring(x_pos, x_pos + (qtd_char -x_pos ))
					
					ultm_car = url_tratada.substr(-1,1)
				
						if (ultm_car == "#") {
							var url_tratada2 = url_atual.substring(x_pos, x_pos + (qtd_char -x_pos - 1 ))
							
						} else {
							
									var url_tratada2 =  url_tratada
						}
						
						
								
				
		$.ajax ({
			method:'POST',
			url: 'retorna_usuario.php',
			data:{url_php:url_tratada2},
			success:function(retorno) {
			
			var qtd_char2 = retorno.length
            var x_pos2 = retorno.indexOf("|")			
			nme_user = retorno.substring(0,x_pos2)
			var ultm_acesso = retorno.substring(x_pos2 + 1,qtd_char2)
			
				
				
								
					$('#titulo_inicial').text('SEJA BEM VINDO ' + nme_user)
					$('#cmpo_usuario_inicio').text('Usuário Logado:' + nme_user)
					$('#cmpo_ultm_acesso').text('Último Acesso:' + ultm_acesso)
			}
		});
	
}



function rotacionar_1 () {


	if (x_identifica == 1) {
	
		$('#seta_1').css('transform','rotate(85deg)');
		$('#seta_1').css('transition','0.5s');	
		 x_identifica = 2
		 x_cont = x_cont + 1;
		 
		$('#item_2_lista').css('transition','0.5s');
		$('#item_2_lista').css('margin-top','80px');
		$('#sub_menu_1').css('display','block');
					
						
							desativa_bnt_2()
							desativa_bnt_3()	
							desativa_bnt_4()	
							desativa_bnt_5()	
							desativa_bnt_6()	
						
	
		}else{
			
		$('#seta_1').css('transform','rotate(0deg)');
		$('#seta_1').css('transition','0.5s');	
			x_identifica = 1
			x_cont = x_cont -1;
			$('#item_2_lista').css('margin-top','0px');
			$('#item_2_lista').css('transition','0s');
			$('#sub_menu_1').css('display','none');
			
			}



}

function rotacionar_2 () {

	if (x_identifica2 == 1) {

		$('#seta_2').css('transform','rotate(85deg)');
		$('#seta_2').css('transition','0.5s');	
		 x_identifica2 = 2
		  x_cont = x_cont + 1;
		 
		 $('#item_3_lista').css('transition','0.5s');
		  $('#item_3_lista').css('margin-top','120px');
		   $('#sub_menu_2').css('display','block');
		
		   
							desativa_bnt_1()
							desativa_bnt_3()	
							desativa_bnt_4()	
							desativa_bnt_5()	
							desativa_bnt_6()	

		}else{
			
		$('#seta_2').css('transform','rotate(0deg)');
		$('#seta_2').css('transition','0.5s');	
			x_identifica2 = 1
			x_cont = x_cont -1;
		
			 $('#item_3_lista').css('margin-top','0px');
			 $('#item_3_lista').css('transition','0s');
			  $('#sub_menu_2').css('display','none');
		}


}

function rotacionar_3 () {

	if (x_identifica3 == 1) {

		$('#seta_3').css('transform','rotate(85deg)');
		$('#seta_3').css('transition','0.5s');	
		 x_identifica3 = 2;
		  x_cont = x_cont + 1;
		 
		 $('#item_4_lista').css('transition','0.5s');
		  $('#item_4_lista').css('margin-top','120px');
		   $('#sub_menu_3').css('display','block');
		   
							desativa_bnt_2()
							desativa_bnt_1()	
							desativa_bnt_4()	
							desativa_bnt_5()	
							desativa_bnt_6()	

		}else{
			
		$('#seta_3').css('transform','rotate(0deg)');
		$('#seta_3').css('transition','0.5s');	
			x_identifica3 = 1
			x_cont = x_cont -1;
			
			 $('#item_4_lista').css('margin-top','0px');
			 $('#item_4_lista').css('transition','0s');
			  $('#sub_menu_3').css('display','none');
		}
	


}

function rotacionar_4 () {

	if (x_identifica4 == 1) {
		
				
			

		$('#seta_4').css('transform','rotate(85deg)');
		$('#seta_4').css('transition','0.5s');	
		 x_identifica4 = 2
		  x_cont = x_cont + 1;
		 
		 $('#item_5_lista').css('transition','0.5s');
		  $('#item_5_lista').css('margin-top','80px');
		  $('#sub_menu_4').css('display','block');
		  
						
							desativa_bnt_2()
							desativa_bnt_3()	
							desativa_bnt_1()	
							desativa_bnt_5()	
							desativa_bnt_6()							
						

		}else{
			
		$('#seta_4').css('transform','rotate(0deg)');
		$('#seta_4').css('transition','0.5s');	
			x_identifica4 = 1
			x_cont = x_cont -1;
			
			 $('#item_5_lista').css('margin-top','0px');
			 $('#item_5_lista').css('transition','0s');
			 $('#sub_menu_4').css('display','none');
		}
		


}

function rotacionar_5 () {

	if (x_identifica5 == 1) {

		$('#seta_5').css('transform','rotate(85deg)');
		$('#seta_5').css('transition','0.5s');	
		 x_identifica5 = 2;
		  x_cont = x_cont + 1;
		 
		  $('#item_6_lista').css('transition','0.5s');
		  $('#item_6_lista').css('margin-top','80px');
		  $('#sub_menu_5').css('display','block');
		  
							desativa_bnt_2()
							desativa_bnt_3()	
							desativa_bnt_4()	
							desativa_bnt_1()	
							desativa_bnt_6()	

		}else{
			
		$('#seta_5').css('transform','rotate(0deg)');
		$('#seta_5').css('transition','0.5s');	
			x_identifica5 = 1
			x_cont = x_cont -1;
			
			 $('#item_6_lista').css('margin-top','0px');
			 $('#item_6_lista').css('transition','0s');
			 $('#sub_menu_5').css('display','none');
			
		}
	


}

function rotacionar_6 () {

	if (x_identifica6 == 1) {

		$('#seta_6').css('transform','rotate(85deg)');
		$('#seta_6').css('transition','0.5s');	
		 x_identifica6 = 2;
		  x_cont = x_cont + 1;
		 
			  $('#item_7_lista').css('transition','0.5s');
		  $('#item_7_lista').css('margin-top','40px');
		    $('#sub_menu_6').css('display','block');
			
							desativa_bnt_2()
							desativa_bnt_3()	
							desativa_bnt_4()	
							desativa_bnt_5()	
							desativa_bnt_1()	

		}else{
			
		$('#seta_6').css('transform','rotate(0deg)');
		$('#seta_6').css('transition','0.5s');	
			x_identifica6 = 1
			x_cont = x_cont -1;
			
			 $('#item_7_lista').css('margin-top','0px');
			 $('#item_7_lista').css('transition','0s');
			   $('#sub_menu_6').css('display','none');
			
		}



}



function rotacionar_7 () {


	if (x_identifica == 1) {
	
	
	//MINIMIZAR
		$('#seta_img').css('transform','rotate(0deg)');
		$('#seta_img').css('transition','0.5s');	
		 x_identifica = 2
		 x_cont = x_cont + 1;
		 
		$('#guia_sub_opcoes').css('display','none');
		$('#lista_opcoes').css('display','none')
		$('#lista_opcoes_minimizado').css('display','block')		


		$('#guia_opcoes').css('width','80px')
		$('#barra_separa').css('width','60px');
		
		$('#guia_opcoes').css('transition','0.5s');
		$('#barra_separa').css('transition','0.5s');
	
		}else{
			
		
		
		$('#seta_img').css('transform','rotate(180deg)');
		$('#seta_img').css('transition','0.5s');	
			x_identifica = 1
			x_cont = x_cont -1;
			
			$('#barra_separa').css('width','180px');
			$('#guia_opcoes').css('width','205px');
			
			
			$('#guia_opcoes').css('transition','0.5s');
			$('#barra_separa').css('transition','0.5s');	

			$('#guia_sub_opcoes').css('display','block' );
			$('#lista_opcoes').css('display','block' );
			$('#lista_opcoes_minimizado').css('display','none')
	
			}
			
			
}


//guia_opcoes_minimizado

function desativa_bnt_1() {
		$('#seta_1').css('transform','rotate(0deg)');
		$('#seta_1').css('transition','0.5s');	
		x_identifica = 1			
		$('#item_2_lista').css('margin-top','0px');
	    $('#sub_menu_1').css('display','none');
		
		 
}

function desativa_bnt_2() {
		$('#seta_2').css('transform','rotate(0deg)');
		$('#seta_2').css('transition','0.5s');	
		x_identifica2 = 1
	    $('#item_3_lista').css('margin-top','0px');
		$('#sub_menu_2').css('display','none');		 
}

function desativa_bnt_3() {
		$('#seta_3').css('transform','rotate(0deg)');
		$('#seta_3').css('transition','0.5s');	
		x_identifica3 = 1
	    $('#item_4_lista').css('margin-top','0px');
	    $('#sub_menu_3').css('display','none');	
}

function desativa_bnt_4() {

			$('#seta_4').css('transform','rotate(0deg)');
			$('#seta_4').css('transition','0.5s');	
			x_identifica4 = 1			
			 $('#item_5_lista').css('margin-top','0px');
			 $('#sub_menu_4').css('display','none');
}

function desativa_bnt_5() {

			$('#seta_5').css('transform','rotate(0deg)');
			$('#seta_5').css('transition','0.5s');	
			x_identifica5 = 1			
			 $('#item_6_lista').css('margin-top','0px');
			 $('#sub_menu_5').css('display','none');
}

function desativa_bnt_6() {

			$('#seta_6').css('transform','rotate(0deg)');
			$('#seta_6').css('transition','0.5s');	
			x_identifica6 = 1			
			 $('#item_7_lista').css('margin-top','0px');
			   $('#sub_menu_6').css('display','none');
}



function redminenciona_sub_menu () {
// FUNÇÃO REDIMENSIONAR SUB MENU DESATIVADA //

var pos1 = document.getElementById('seta_1').offsetTop
var pos2 = document.getElementById('seta_2').offsetTop
var pos3 = document.getElementById('seta_3').offsetTop
var pos4 = document.getElementById('seta_4').offsetTop
var pos5 = document.getElementById('seta_5').offsetTop
var pos6 = document.getElementById('seta_6').offsetTop	


$('#sub_menu_1').css('margin-top',pos1 +35);
$('#sub_menu_2').css('margin-top',pos2 + 35 );
$('#sub_menu_3').css('margin-top',pos3 + 35 );
$('#sub_menu_4').css('margin-top',pos4 + 35 );
$('#sub_menu_5').css('margin-top',pos5 + 35 );
$('#sub_menu_6').css('margin-top',pos6 + 35 );

}

function altera_seta_rodape() {
//	$('#seta_img').css('fill','black')	
	$('#btn_max_min').css('backgroundColor','rgba(150,150,150,0.5)')
	$('#btn_max_min').css('transition','0.5s')
}

function retorna_seta_rodape() {
		$('#btn_max_min').css('backgroundColor','rgba(0,0,0,0.6)')
		$('#btn_max_min').css('transition','0.5s')
		
}


function altera_seta_1() {
		$('#item_1_lista').css('backgroundColor','rgba(150,150,150,0.5)')
		$('#item_1_lista').css('transition','0.7s')	
		
		$('#item_1_lista2').css('backgroundColor','rgba(150,150,150,0.5)')
		$('#item_1_lista2').css('transition','0.7s')	
}


function ret_seta1() {
		$('#item_1_lista').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_1_lista').css('transition','0.2s')
		
		$('#item_1_lista2').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_1_lista2').css('transition','0.2s')
	
}

function altera_seta_2() {
		$('#item_2_lista').css('backgroundColor','rgba(150,150,150,0.5)')
		$('#item_2_lista').css('transition','0.7s')	
		
			$('#item_2_lista2').css('backgroundColor','rgba(150,150,150,0.5)')
			$('#item_2_lista2').css('transition','0.7s')	
}


function ret_seta2() {
		$('#item_2_lista').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_2_lista').css('transition','0.5s')	
		
		$('#item_2_lista2').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_2_lista2').css('transition','0.2s')
	
}

function altera_seta_3() {
		$('#item_3_lista').css('backgroundColor','rgba(150,150,150,0.5')
		$('#item_3_lista').css('transition','0.7s')	
		
		$('#item_3_lista2').css('backgroundColor','rgba(150,150,150,0.5)')
		$('#item_3_lista2').css('transition','0.7s')	
}


function ret_seta3() {
		$('#item_3_lista').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_3_lista').css('transition','0.5s')
		
		$('#item_3_lista2').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_3_lista2').css('transition','0.2s')
	
}

function altera_seta_4() {
		$('#item_4_lista').css('backgroundColor','rgba(150,150,150,0.5')
		$('#item_4_lista').css('transition','0.7s')	
		
		$('#item_4_lista2').css('backgroundColor','rgba(150,150,150,0.5)')
		$('#item_4_lista2').css('transition','0.7s')	
}


function ret_seta4() {
		$('#item_4_lista').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_4_lista').css('transition','0.5s')
		
		$('#item_4_lista2').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_4_lista2').css('transition','0.2s')
	
}

function altera_seta_5() {
		$('#item_5_lista').css('backgroundColor','rgba(150,150,150,0.5')
		$('#item_5_lista').css('transition','0.7s')	
		
		$('#item_5_lista2').css('backgroundColor','rgba(150,150,150,0.5)')
		$('#item_5_lista2').css('transition','0.7s')	
}


function ret_seta5() {
		$('#item_5_lista').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_5_lista').css('transition','0.5s')
		
		$('#item_5_lista2').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_5_lista2').css('transition','0.2s')
	
}

function altera_seta_6() {
		$('#item_6_lista').css('backgroundColor','rgba(150,150,150,0.5')
		$('#item_6_lista').css('transition','0.7s')	
		
		$('#item_6_lista2').css('backgroundColor','rgba(150,150,150,0.5)')
		$('#item_6_lista2').css('transition','0.7s')	
}


function ret_seta6() {
		$('#item_6_lista').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_6_lista').css('transition','0.5s')
		
		$('#item_6_lista2').css('backgroundColor','rgba(20, 0, 20,0)')
		$('#item_6_lista2').css('transition','0.2s')
	
}


function altera_menu_3 () {
	$('#item3_perfil_cor1').css('fill','rgba(20,0,20,0.8)');
	$('#item3_perfil_cor1').css('transition','0.5s');
	$('#item3_perfil_cor2').css('fill','#708090');
	$('#item3_perfil_cor2').css('transition','0.8s');
	$('#capt_perfil	').css('transition','0.8s');
	$('#capt_perfil').css('color','#8B8378	');
	$('#item3_perfil_cor2').css('cursor','pointer');
	$('#item3_perfil_cor1').css('cursor','pointer');
	$('#capt_perfil').css('cursor','pointer');	
	desativa_sub_menu_atualizacoes()
}

function retorn_menu_3() {
	$('#item3_perfil_cor1').css('fill','#E7ECED');
	$('#item3_perfil_cor1').css('transition','0.5s');
	$('#item3_perfil_cor2').css('fill','#556080');
	$('#item3_perfil_cor2').css('transition','0.8s');	
	$('#capt_perfil').css('color','white');
	

}


function altera_menu_2 () {
	
	
	$('.item2_perfil_cor1').css('fill','rgba(20,0,20,0.8)');
	$('.item2_perfil_cor1').css('transition','0.5s');
	$('.item2_perfil_cor2').css('fill','#708090');
	$('.item2_perfil_cor2').css('transition','0.8s');
	$('.capt_perfil2').css('transition','0.8s');
	$('.capt_perfil2').css('color','#8B8378	');
	$('.item2_perfil_cor2').css('cursor','pointer');
	$('.item2_perfil_cor1').css('cursor','pointer');
	$('.capt_perfil2').css('cursor','pointer');	
	desativa_sub_menu_perfil();
	
	
	
}

function retorn_menu_2() {
	$('.item2_perfil_cor1').css('fill','#E7ECED');
	$('.item2_perfil_cor1').css('transition','0.5s');
	$('.item2_perfil_cor2').css('fill','#556080');
	$('.item2_perfil_cor2').css('transition','0.8s');	
	$('.capt_perfil2').css('color','white');
}


function abrir_sub() {
	$('#sub_menu_perfil').css('display','block');
	
}

function desativa_sub_menu_perfil() {	
		
	$('#sub_menu_perfil').css('transition','0.5s');
	$('#sub_menu_perfil').css('backgroundColor','rgba(0,0,0,0');
	
	$('#sub_menu_perfil').css('display','none');
	$('#sub_menu_perfil').css('backgroundColor','#1C1C1C');
	
	
	// setTimeout(desab,1000)
}

function desab() {
	

	
}


function abrir_sub2() {
	$('#sub_menu_atualizacoes').css('display','block');
	
}

function desativa_sub_menu_atualizacoes() {	
		
	$('#sub_menu_atualizacoes').css('transition','0.5s');
	$('#sub_menu_atualizacoes').css('backgroundColor','rgba(0,0,0,0');
	
//	setTimeout(desab2,1000)
		$('#sub_menu_atualizacoes').css('display','none');
	   $('#sub_menu_atualizacoes').css('backgroundColor','rgba(100,100,100,0.9');

}


function executa_logof() {
	 var funcao_esp = 1;
	 var url_atual = window.location.href
	 var qtd_caract = url_atual.length
	 var x_pos = url_atual.indexOf("!")
	 var url_tratada = url_atual.substring(x_pos, x_pos + (qtd_caract -x_pos ))
	 
	 var qtd_caract2 = url_tratada.length
	 
			
	 for (var n =1; n < qtd_caract ; n ++) {		
				
		//	var identifica_ponto1 = url_atual.indexOf(".") 		
			var identifica_ponto = url_atual.substr(n,1)
			if (identifica_ponto == (".")) {								
				var identifica_ponto2 = n
			}
	 }
	 
	 var extract_direita = qtd_caract - identifica_ponto2
	 var url_tratada2 = url_tratada.substring(0,qtd_caract2 - extract_direita) + ".php"


//	alert(url_tratada2)
	
	$.ajax ({
		method:'POST',
		url:'executa_funcoes_especificas.php',
		data:{funcao_esp_php:funcao_esp,url_atual_php:url_tratada2}
//		success:function(result_dados) {
//			alert(result_dados	);
//		}
				
	});		
				
		window.location.href = "index.php"	 
	

}

function redireciona_cad_clientes() {
	 var url_atual = window.location.href
	 var qtd_caract = url_atual.length
	 var x_pos = url_atual.indexOf("!")
	 var url_tratada = url_atual.substring(x_pos, x_pos + (qtd_caract -x_pos ))	

	window.location.href = "cadastro_clientes" + url_tratada;

//	window.location.href = "cadastro_clientes" + url_tratada + ".php" ;

}

function redireciona_exibicao() {
	 var url_atual = window.location.href
	 var qtd_caract = url_atual.length
	 var x_pos = url_atual.indexOf("!")
	 var url_tratada = url_atual.substring(x_pos, x_pos + (qtd_caract -x_pos ))	

	
	window.location.href = "pagina_inicial" + url_tratada;
	carregar_nome_usuario()
}

function redireciona_novo_usuario() {
	 var url_atual = window.location.href
	 var qtd_caract = url_atual.length
	 var x_pos = url_atual.indexOf("!")
	 var url_tratada = url_atual.substring(x_pos, x_pos + (qtd_caract -x_pos ))	

	
	window.location.href = "pg_novo_usuario" + url_tratada;

}


function redireciona_rel_cad_gerais() {
	 var url_atual = window.location.href
	 var qtd_caract = url_atual.length
	 var x_pos = url_atual.indexOf("!")
	 var url_tratada = url_atual.substring(x_pos, x_pos + (qtd_caract -x_pos ))	

	
	window.location.href = "rel_cad_gerais" + url_tratada;
	carregar_nome_usuario()
}


function carrega_cmb_cidades() {
 var funcao_esp = 2;
 var uf_selec = document.getElementById("cx_selecao_estado_cliente").value
			
		
	$.ajax ({
		method:'POST',
		url:'executa_funcoes_especificas.php',
		data:{funcao_esp_php:funcao_esp, uf_selec_php:uf_selec},
		dataType: 'JSON',
		success:function(retorno) {	

			

 var qtd_itens = retorno.length			
 var combouf = document.getElementById("cx_cidade_cliente")		
			
				
				
			for ( var i = 0; i < qtd_itens ; i ++) {				
				
				var opt0 = document.createElement("option");
				opt0.value = retorno[i].nome
				opt0.text = retorno[i].nome
				combouf.add(opt0, combouf.options[0]);
		
			}
		
	
		}
			
	})
}
	
function limpar_cmb_cidades() {	
	var combouf = document.getElementById("cx_cidade_cliente");
	var qtd_itens = combouf.length 
		
		
		for ( var i = 0; i < qtd_itens ; i ++) {		
			combouf.remove(0);			
		}		
					
}

function carrega_cmb_cidades2() {
 var funcao_esp = 2;
 var uf_selec = document.getElementById("cx_selecao_estado_cobranca").value
			
		
	$.ajax ({
		method:'POST',
		url:'executa_funcoes_especificas.php',
		data:{funcao_esp_php:funcao_esp, uf_selec_php:uf_selec},
		dataType: 'JSON',
		success:function(retorno) {	

			

 var qtd_itens = retorno.length			
 var combouf = document.getElementById("cx_cidade_cobranca")		
			
				
				
			for ( var i = 0; i < qtd_itens ; i ++) {				
				
				var opt0 = document.createElement("option");
				opt0.value = retorno[i].nome
				opt0.text = retorno[i].nome
				combouf.add(opt0, combouf.options[0]);
		
			}
		
	
		}
			
	})
}
	
function limpar_cmb_cidades2() {	
	var combouf = document.getElementById("cx_cidade_cobranca");
	var qtd_itens = combouf.length 
		
		
		for ( var i = 0; i < qtd_itens ; i ++) {		
			combouf.remove(0);			
		}						
}

function ativa_cmb_pessoa_fisica() {
// $("#cx_selecao_pesso_fisica").text("&#10003")	

  check_tipo_cadastro = 1;

	$("#cx_selecao_pessoa_fisica").css("backgroundColor","#363636")	
	$("#cx_selecao_pessoa_fisica").css("color","white")	
	
	 $("#cx_selecao_pessoa_juridica").css("backgroundColor","#C1CDCD")		
	 $("#cx_selecao_pessoa_juridica").css("color","#C1CDCD")		
}

function ativa_cmb_pessoa_juridica() {
  check_tipo_cadastro = 2;	
 
	$("#cx_selecao_pessoa_fisica").css("backgroundColor","#C1CDCD")	
	$("#cx_selecao_pessoa_fisica").css("color","#C1CDCD")	
	
	 $("#cx_selecao_pessoa_juridica").css("backgroundColor","#363636")		
	 $("#cx_selecao_pessoa_juridica").css("color","white")	
	
}

function ativa_cmb_masculino() {
  check_sexo = 1;
  
	$("#cx_cmb_feminino").css("backgroundColor","#C1CDCD")	
	$("#cx_cmb_feminino").css("color","#C1CDCD")	
	
	 $("#cx_cmb_masculino").css("backgroundColor","#363636")		
	 $("#cx_cmb_masculino").css("color","white")		 
	
}

function ativa_cmb_feminino() {
  check_sexo = 2;	

	 $("#cx_cmb_masculino").css("backgroundColor","#C1CDCD")	
	 $("#cx_cmb_masculino").css("color","#C1CDCD")	
	
	 $("#cx_cmb_feminino").css("backgroundColor","#363636")		
	 $("#cx_cmb_feminino").css("color","white")	 		
	
}

function ativa_cmb_novo() {
   check_opcao_cadastro = 1;
 
     $("#cx_cmb_alterar").css("backgroundColor","#C1CDCD")	
	 $("#cx_cmb_alterar").css("color","#C1CDCD")	
	
	 $("#cx_cmb_excluir").css("backgroundColor","#C1CDCD")		
	 $("#cx_cmb_excluir").css("color","#C1CDCD")	 	

	 $("#cx_cmb_novo").css("backgroundColor","#363636")		
	 $("#cx_cmb_novo").css("color","white")	
	 
	
}

function ativa_cmb_alterar() {
 check_opcao_cadastro = 2;	

     $("#cx_cmb_alterar").css("backgroundColor","#363636")	
	 $("#cx_cmb_alterar").css("color","#white")	
	
	 $("#cx_cmb_excluir").css("backgroundColor","#C1CDCD")		
	 $("#cx_cmb_excluir").css("color","#C1CDCD")	 	

	 $("#cx_cmb_novo").css("backgroundColor","#C1CDCD")		
	 $("#cx_cmb_novo").css("color","#C1CDCD")		
	
}

function ativa_cmb_excluir() {
	check_opcao_cadastro = 3;
  
    $("#cx_cmb_alterar").css("backgroundColor","#C1CDCD")	
	 $("#cx_cmb_alterar").css("color","#C1CDCD")	
	
	 $("#cx_cmb_excluir").css("backgroundColor","#363636")		
	 $("#cx_cmb_excluir").css("color","white")	 	

	 $("#cx_cmb_novo").css("backgroundColor","#C1CDCD")		
	 $("#cx_cmb_novo").css("color","#C1CDCD")		
  
}

function limpa_cmpo_novo_user(){
	
	carregar_cmpos_cad_user()
	limpa_cmpo()	
}

function limpar_cad_clientes () {
	carregar_cmpos()
	limpa_cmpo()
}

function cadastra_novo_usuario() {
					
					carregar_cmpos_cad_user ()
					validar_cmpos()
					if (identifica_erro_cadastro == 1 ) {
						return
					} else if($('#cx_senha').val() != $('#cx_confirmacao_senha').val()) {
						inicia_exibicao_msg_erro()
						return
						
					}
	
	
var user = {
	
	nome:$('#cx_nome').val(),
	email:$('#cx_email').val(),
	senha:$('#cx_senha').val()		
}

user.nome = user.nome.toUpperCase()

		$.ajax ({
			method:'POST',
			url:'executa_cadastro_user.php',
			data:{nome_p:user.nome,
			email_p:user.email,
			senha_p:user.senha},
			success:function(retorno) {
					
						
				if (retorno == 1) {									
					limpa_cmpo_novo_user()					
					inicia_exibicao_msg_sucesso()	
					
				}else{
					alert("erro ao acessar banco de dados")

				} 
				
			}
			
		});


}



function cadastra_cliente() {


/*
	if ( opcao_cadastro == 1 ) {
		alert("novo cadastro")
	}else if (opcao_cadastro == 2){	
		alert("alterar cadastro")
	}else if (opcao_cadastro == 3){	
		alert("excluir cadastro")		
	}
*/	

					carregar_cmpos()
					validar_cmpos()						
					if (identifica_erro_cadastro == 1 ) {
						return
					}

		if ( check_tipo_cadastro == 1 ) {
			var	tip_cad = "FISICA"
		} else if (check_tipo_cadastro == 2) {			
			var	tip_cad = "JURIDICA"
		}


	if ( check_sexo == 1 ) {
			var	sexo2 = "M"
		} else if (check_sexo == 2) {	
			var	sexo2 = "F"
		}
		



var pessoa = {
	
	tipo_cadastro:tip_cad,
	sexo:sexo2,
	nome:$('#cx_nome').val(),
	rg:$('#cx_rg').val(),
	cpf:$('#cx_cpf').val(),
	outros_doc:$('#cx_outros_doc').val(),
	dt_nascm:$('#cx_dt_nascimento').val(),
	responsavel:$('#cx_contato').val(),
	telefone:$('#cx_telefone').val(),
	celular:$('#cx_celular').val(),
	razao_social:$('#cx_razao').val(),
	cnpj:$('#cx_cnpj').val(),
	inscricao:$('#cx_insc_estadual').val()
}


var endereco_cliente = {
	cep:$('#cx_cep_cliente').val(),
	rua:$('#cx_rua_cliente').val(),
	numero:$('#cx_numero_cliente').val(),
	complemento:$('#cx_complemento_cliente').val(),
	bairro:$('#cx_bairro_cliente').val(),
	uf:$('#cx_selecao_estado_cliente').val(),
	cidade:$('#cx_cidade_cliente').val(),
	email:$('#cx_email_cliente').val(),
	email_nf:$('#cx_email_nf_cliente').val(),	
}


var endereco_cobranca = {
	cep:$('#cx_cep_cobranca').val(),
	rua:$('#cx_rua_cobranca').val(),
	numero:$('#cx_numero_cobranca').val(),
	complemento:$('#cx_complemento_cobranca').val(),
	bairro:$('#cx_bairro_cobranca').val(),
	uf:$('#cx_selecao_estado_cobranca').val(),
	cidade:$('#cx_cidade_cobranca').val(),
	email:$('#cx_email_cobranca').val(),
	email_nf:$('#cx_email_nf_cobranca').val(),	
}

var outros = {
	dt_cadastro:$('#cx_dt_cadastro').val(),
	responsavel_cadastro:$('#cx_resp_cadastro').val(),
	dt_alteracao:$('#cx_dt_alteracao').val(),
	responsavel_alteracao:$('#cx_resp_alteracao').val(),
	obs:$('#cx_obs').val(),	
	
}



		$.ajax ({
			method:'POST',
			url:'executa_cadastro_clientes.php',
			data:{nome_p:pessoa.nome,
			tipo_cadastro_p:pessoa.tipo_cadastro,
			rg_p:pessoa.rg,
			cpf_p:pessoa.cpf,
			outros_doc_p:pessoa.outros_doc,
			sexo_p:pessoa.sexo,
			dt_nascm_p:pessoa.dt_nascm,
			responsavel_p:pessoa.responsavel,
			telefone_p:pessoa.telefone,
			celular_p:pessoa.celular,
			razao_social_p:pessoa.razao_social,
			cnpj_p:pessoa.cnpj,
			inscricao_p:pessoa.inscricao,			
			
			cep_cliente_p:endereco_cliente.cep,
			rua_cliente_p:endereco_cliente.rua,
			numero_cliente_p:endereco_cliente.numero,
			complemento_cliente_p:endereco_cliente.complemento,
			bairro_cliente_p:endereco_cliente.bairro,
			uf_cliente_p:endereco_cliente.uf,
			cidade_cliente_p:endereco_cliente.cidade,
			email_cliente_p:endereco_cliente.email,
			email_nf_cliente_p:endereco_cliente.email_nf,
			
			cep_cobranca_p:endereco_cobranca.cep,
			rua_cobranca_p:endereco_cobranca.rua,
			numero_cobranca_p:endereco_cobranca.numero,
			complemento_cobranca_p:endereco_cobranca.complemento,
			bairro_cobranca_p:endereco_cobranca.bairro,
			uf_cobranca_p:endereco_cobranca.uf,
			cidade_cobranca_p:endereco_cobranca.cidade,
			email_cobranca_p:endereco_cobranca.email,
			email_nf_cobranca_p:endereco_cobranca.email_nf,
			
			dt_cadastro_p:outros.dt_cadastro,
			responsavel_cadastro_p:outros.responsavel_cadastro,
			dt_alteracao_p:outros.dt_alteracao,
			responsavel_alteracao_p:outros.responsavel_alteracao,
			obs_p:outros.obs},			
			
			success:function(retorno) {
								
								
				if (retorno == 1) {									
					limpar_cad_clientes()					
					inicia_exibicao_msg_sucesso()	
					
				}else{
					alert("erro ao acessar banco de dados")
				} 
				
			}
			
		});

}

function carregar_cmpos_cad_user () {

  cmpos = ['#cx_nome',  
	'#cx_email',
	'#cx_senha',
	'#cx_confirmacao_senha',
	]
}

function carregar_cmpos () {
	
   cmpos = ['#cx_nome',  
	'#cx_rg',
	'#cx_cpf',
	'#cx_outros_doc',
	'#cx_dt_nascimento',
	'#cx_contato',
	'#cx_telefone',
	'#cx_celular',
	'#cx_razao',
	'#cx_cnpj',
	'#cx_insc_estadual',
	'#cx_cep_cliente',	
	'#cx_rua_cliente',
	'#cx_numero_cliente',
	'#cx_complemento_cliente', 
	'#cx_bairro_cliente',
	'#cx_selecao_estado_cliente',
	'#cx_cidade_cliente',
	'#cx_email_cliente',
	'#cx_email_nf_cliente',	 
	'#cx_cep_cobranca',
	'#cx_rua_cobranca',
	'#cx_numero_cobranca',
	'#cx_complemento_cobranca',  
	'#cx_bairro_cobranca',
	'#cx_selecao_estado_cobranca',
	'#cx_cidade_cobranca',
	'#cx_email_cobranca',
	'#cx_email_nf_cobranca',
	'#cx_dt_cadastro',  
	'#cx_resp_cadastro',
	'#cx_dt_alteracao',
	'#cx_resp_alteracao',
	'#cx_obs',	
	]
}


function limpa_cmpo() {
		
	for(let x =	0; x < cmpos.length; x ++ ) {
		$(cmpos[x]).val("")
	} 	
	$('#cx_nome').focus()	
}


function validar_cmpos() {

// 3 - 14 - 19 - 23 - 29
identifica_erro_cadastro = 0
let primeiro_campo_vazio = 0

		cmpos_vazio = ""
		for(let x =	0; x < 28; x ++ ) {
			if ($(cmpos[x]).val() == "") {
				$(cmpos[x]).css('backgroundColor','rgba(205,79,57,0.5')	
				$(cmpos[x]).css('color','white')	
				identifica_erro_cadastro = 1	
						
					if(primeiro_campo_vazio == 0) {
						  primeiro_campo_vazio = 1
						  primeiro_item = x
					}		
					
			}else{	
				$(cmpos[x]).css('backgroundColor','white')	
				$(cmpos[x]).css('color','black')	
			}			
			
		} 	
		
			if (identifica_erro_cadastro == 1 ) {
				$(cmpos[primeiro_item]).focus()
				inicia_exibicao_msg_erro2()
			}
		
}

function inibe_erro () {
	$('#msg_err').css('display','none');
	$('#msg_validacao_cxs').css('display','none');
	$('#msg_sucesso').css('display','none');
	
}

function exibe_erro () {
	$('#msg_err').css('display','inline-block');	
}

function exibe_erro2 () {
	$('#msg_validacao_cxs').css('display','inline-block');	
}

function exibe_msg_sucesso () {
	$('#msg_sucesso').css('display','inline-block');	
}

function inicia_exibicao_msg_sucesso () {
	exibe_msg_sucesso ();
	setTimeout(inibe_erro,4000);	
}

function inicia_exibicao_msg_erro () {
	exibe_erro ();
	setTimeout(inibe_erro,4000);	
}

function inicia_exibicao_msg_erro2 () {
	exibe_erro2 ();
	setTimeout(inibe_erro,4000);	
}


/*	
function limpa_cmpo_cad_clientes2() {	
	
	
	var elemento_principal = document.getElementById("dados_pessoais")
	var qtd = elemento_principal.children.length
	
	for (var i = 0;i < elemento_principal.children.length; i ++ ) {
		
		
			for (var s = 0;i < elemento_principal.children[i].children.length; s ++ ) {
				
				
					for (var v = 0;i < elemento_principal.children.children[i].children[s].length; v ++ ) {
						
							
							for (var l = 0;i < elemento_principal.children.children[i].children[s].children[v].length; l ++ ) {		
		
		
								var els = elemento_principal.children[i].children[s].children[v].children[1].id
								
								alert(els)
	
							}
					}
			}
	}

	
}

*/



