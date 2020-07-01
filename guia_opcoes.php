<div id="guia_opcoes">

	<nav >	
			<ul id="lista_opcoes">
				<li  onmousemove="altera_seta_1()" onmouseleave="ret_seta1()" onclick="rotacionar_1 ()" id="item_1_lista"><a href="#"><img id="seta_1"src="svg/icone_seta.svg"></img>Pagina Inicial</a></li>
				<li  onmousemove="altera_seta_2()" onmouseleave="ret_seta2()" onclick="rotacionar_2 ()" id="item_2_lista"><a href="#"><img id="seta_2"src="svg/icone_seta.svg"></img> Cadastros Gerais</a></li>	
				<li  onmousemove="altera_seta_3()" onmouseleave="ret_seta3()" onclick="rotacionar_3 ()" id="item_3_lista"><a href="#"><img id="seta_3"src="svg/icone_seta.svg"></img>Controle Estoque</a> </li>
				<li onmousemove="altera_seta_4()" onmouseleave="ret_seta4()" onclick="rotacionar_4 ()" id="item_4_lista"><a href="#"><img id="seta_4"src="svg/icone_seta.svg"></img>Relatórios</a></li>
				<li onmousemove="altera_seta_5()" onmouseleave="ret_seta5()" onclick="rotacionar_5 ()" id="item_5_lista"><a href="#"><img id="seta_5"src="svg/icone_seta.svg"></img>Ajuda</a></li>
				<li onmousemove="altera_seta_6()" onmouseleave="ret_seta6()" onclick="rotacionar_6 ()" id="item_6_lista"><a href="#"><img id="seta_6"src="svg/icone_seta.svg"></img>Sobre</a></li>
				
			</ul>
		
	</nav>	


		<nav >	
			<ul id="lista_opcoes_minimizado">
				<li  onmousemove="altera_seta_1()" onmouseleave="ret_seta1()" onclick="rotacionar_1 ()" id="item_1_lista2"><a href="#"><img id="seta_1"src="svg/icone_pg_inicial.svg"></img></a></li>
				<li  onmousemove="altera_seta_2()" onmouseleave="ret_seta2()" onclick="rotacionar_2 ()" id="item_2_lista2"><a href="#"><img id="seta_2"src="svg/icone_pg_cadastros.svg"></img></a></li>	
				<li  onmousemove="altera_seta_3()" onmouseleave="ret_seta3()" onclick="rotacionar_3 ()" id="item_3_lista2"><a href="#"><img id="seta_3"src="svg/icone_pg_controle_estoque.svg"></img></a> </li>
				<li onmousemove="altera_seta_4()" onmouseleave="ret_seta4()" onclick="rotacionar_4 ()" id="item_4_lista2"><a href="#"><img id="seta_4"src="svg/icone_pg_relatorios.svg"></img></a></li>
				<li onmousemove="altera_seta_5()" onmouseleave="ret_seta5()" onclick="rotacionar_5 ()" id="item_5_lista2"><a href="#"><img id="seta_5"src="svg/icone_pg_ajuda.svg"></img></a></li>
				<li onmousemove="altera_seta_6()" onmouseleave="ret_seta6()" onclick="rotacionar_6 ()" id="item_6_lista2"><a href="#"><img id="seta_6"src="svg/icone_pg_sobre.svg"></img></a></li>
				
			</ul>
		
	</nav>	



</div>

<div id="guia_sub_opcoes">


	<ul id="sub_menu_1">
		<li onclick ="redireciona_exibicao()"><a>Exibição</a></li>
		<li onclick ="redireciona_novo_usuario()">Novo Usuário</li>
	</ul>

	
	<ul id="sub_menu_2">
		<li onclick="redireciona_cad_clientes()"><a>Clientes</a></li>
		<li><a>Fornecedores</a></li>
		<li><a>Pessoa Fisica</a></li>
	</ul>

	
	<ul id="sub_menu_3">
		<li><a>Gestão Estoque</a></li>
		<li><a>Cadastro Produtos</a></li>
		<li><a>Mov. Estoque</a></li>
	</ul>
	
	<ul id="sub_menu_4">
		<li onclick ="redireciona_rel_cad_gerais()"><a>Cadastro Gerais</a></li>
		<li><a>Estoque</a></li>
	</ul>
	
	<ul id="sub_menu_5">
		<li><a>Primeiros Passos</a></li>
		<li><a>Principais Funções</a></li>
	</ul>
	
	<ul id="sub_menu_6">
		<li><a>Sobre - SIS WEB</a></li>
		<li><a>Sobre - Desenvolvedor</a></li>
	</ul>
	
	
</div>



	
	
	
	
<div id="foot">	
	<div id="barra_separa">
	</div>
	
	
	<div id="btn_max_min"  onmousemove="altera_seta_rodape()" onmouseleave="retorna_seta_rodape()" onclick="minimiza_sub_menu()">
		
		<!--
		<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" 
		class="svg-inline--fa fa-angle-right fa-w-8"  height="20px" role="img" xmlns="http://www.w3.org/2000/svg" 
		viewBox="0 0 256 512"><path id="seta_img" fill="white" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
		</path>
		</svg> 
		-->
	
		<img id="seta_img"src="svg/icone_seta_medio.svg"></img>
	
	</div>
</div>



