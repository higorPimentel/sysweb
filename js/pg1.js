/* TRATA URL ATUAL
	var url_atual = window.location.href
	 var qtd_caract = url_atual.length
	 var x_pos = url_atual.indexOf("!")
	 var url_tratada = url_atual.substring(x_pos, x_pos + (qtd_caract -x_pos ))
	 
	 var identifica_ponto = url_atual.indexOf(".")
	 var qtd_caract2 = url_tratada.length
	 var extract_direita = qtd_caract - identifica_ponto
	 var url_tratada2 = url_tratada.substring(0,qtd_caract2 - extract_direita)

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
	 
		 
		carregar_nome_usuario()
				 
}

function minimiza_sub_menu() {

rotacionar_7()
maximixa_min_pg_cadastro()

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
					
					
								
				
		$.ajax ({
			method:'POST',
			url: 'retorna_usuario.php',
			data:{url_php:url_tratada},
			success:function(retorno) {
				
					$('#titulo_inicial').text('SEJA BEM VINDO ' + retorno )
				
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


guia_opcoes_minimizado

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
	$('#sub_menu_perfil').css('backgroundColor','rgba(100,100,100,0.9');
	
	
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


	window.location.href = "cadastro_clientes" + url_tratada + ".php" ;

}

