	function executa_login() {

	
		if (tipo_login == 1 ) {
	
				var login_js = $('#cx_usuario').val();
				var senha_js = $('#cx_senha').val();
				
		} else if (	tipo_login == 2 )  {
			var login_js = $('#cx_usuario2').val();
			var senha_js = $('#cx_senha2').val();		
			
		}
				
				
				
	
	
	if( login_js == "" || senha_js == ""){
								exibe_erro2 ();
								$('#cx_usuario').focus();
								setTimeout(inibe_erro,4000);
	return;
	}
	
	
		$.ajax ({
			method: 'POST',
			url: 'login.php',
			data:{login_php:login_js,senha_php:senha_js},	
			success: function(retorn) {
					
					var qtd_char = retorn.length
					var x_pos = retorn.indexOf("_")
					var id_user = retorn.substring(x_pos + 1, x_pos + (qtd_char -x_pos ))
					var nome_user = retorn.substring(0, x_pos);					
													
						
						if (login_js == nome_user ) {			
										 						
								$.ajax({
									method:'POST',
									data:{user_atv:id_user},
									url: 'decod_pagina.php',
									success: function(retorn2) {											
																	
								
								location.href = "pagina_inicial"  + retorn2; 
									
		
																							
									}
								});						
								
						} else{
								
								exibe_erro ();
								$('#cx_usuario').focus();
								setTimeout(inibe_erro,4000);
														
						}   							
						
						
					}
			
			});
			
}

function click_btn_cad(){

	$("#container_info_principal").css("display","inline-block")
	$("#bloco_info_principal").css("display","inline-block")
	
}

function remove_info_inicio(){

	$("#container_info_principal").css("display","none")
	$("#bloco_info_principal").css("display","none")


}

function click_btn_lgn() {	
	tipo_login = 1
	executa_login()
}

function click_btn_lgn2() {	
	tipo_login = 2
	executa_login()
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


function inibie_msg1 () {
	//confirmação LOGIN
	
	var resp = $('#msg_login').html();
	alert(resp)

}

function exib_snha () {
	
	if ( document.getElementById('btn_check_exib').checked == true ) {
		$('#cx_senha').attr('type','text');	
				
	} else{
		
				$('#cx_senha').attr('type','password');	
	}
	
}

function executar () {
	alert("executou depois de 5 segundos");
}

function altera_btn() {
	
	
	$('#btn_acessar').css("transition","0.5s");	
	$('#btn_acessar').css("background-color","#BCD2EE");
	$('#btn_acessar').css("color","#696969");
	

	$('#btn_acessar2').css("transition","0.5s");	
	$('#btn_acessar2').css("background-color","#BCD2EE");
	$('#btn_acessar2').css("color","#696969");
	
	$('#btn_confirmar').css("transition","0.5s");	
	$('#btn_confirmar').css("background-color","#BCD2EE");
	$('#btn_confirmar').css("color","#696969");
		
	
}

function ret_btn() {
	$('#btn_acessar').css("transition","0.5s");	
	$('#btn_acessar').css("background-color","rgba(20,0,20,0.9)");		
	$('#btn_acessar').css("color","white");	
	
	$('#btn_acessar2').css("transition","0.5s");	
	$('#btn_acessar2').css("background-color","rgba(20,0,20,0.9)");		
	$('#btn_acessar2').css("color","white");	
	
	$('#btn_confirmar').css("transition","0.5s");	
	$('#btn_confirmar').css("background-color","rgba(20,0,20,0.9)");		
	$('#btn_confirmar').css("color","white");		
	
}


function altera_btn2() {
	
	// document.getElementById("btn_acessar").style.backgroundColor ="red";
		
		$('#btn_cadastrar').css("transition","0.5s");	
		$('#btn_cadastrar').css("background-color","#BCD2EE");
		$('#btn_cadastrar').css("color","#696969");		
		
		$('#btn_cadastrar2').css("transition","0.5s");	
		$('#btn_cadastrar2').css("background-color","#BCD2EE");
		$('#btn_cadastrar2').css("color","#696969");	

		$('#btn_cancelar').css("transition","0.5s");	
		$('#btn_cancelar').css("background-color","#BCD2EE");
		$('#btn_cancelar').css("color","#696969");
	
}

function ret_btn2() {
	$('#btn_cadastrar').css("transition","0.5s");	
	$('#btn_cadastrar').css("background-color","rgba(20,0,20,0.9)");		
	$('#btn_cadastrar').css("color","white");	
	
	$('#btn_cadastrar2').css("transition","0.5s");	
	$('#btn_cadastrar2').css("background-color","rgba(20,0,20,0.9)");		
	$('#btn_cadastrar2').css("color","white");	
	
	$('#btn_cancelar').css("transition","0.5s");	
	$('#btn_cancelar').css("background-color","rgba(20,0,20,0.9)");		
	$('#btn_cancelar').css("color","white");	
}


function altera_btn3() {
	
	$('#btn_voltar').css("transition","0.5s");	
	$('#btn_voltar').css("background-color","#BCD2EE");
	$('#btn_voltar').css("color","#696969");
	
}

function ret_btn3() {
	$('#btn_voltar').css("transition","0.5s");	
	$('#btn_voltar').css("background-color","rgba(20,0,20,0.9)");		
	$('#btn_voltar').css("color","white");	
	
}

function valida_cxs_senha() {
	var sen1 = $('#cx_senha').val()
	var sen2 = $('#cx_confirmacao_senha').val()
	
	if(sen1 == sen2) {	
		$('#info_validacao_senhas').css('color','#6C7B8B')
		$('#info_validacao_senhas').html('&#10004; As senhas coicidem')
	} else {
		$('#info_validacao_senhas').css('color','red')
		$('#info_validacao_senhas').html('&#10008; As senhas não coicidem')
	}
	
}



	