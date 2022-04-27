<section class="container minhaconta">
	<h1 class="titulo_pag">Minha Conta</h1>
    <hr>
    <br>
	<div class="menu_esquerdo">
		<nav>
			<div>
				<div class="inicial_user">{$USER[0]}</div>
				<div class="email_user">{$USER}</div>
			</div>
			<ul>
				<li id="btn_area_cliente"><a href="{$PAG_CONTA}"><i class="fas fa-user"></i> Minha Conta</a></li>
				<li id="btn_area_cliente"><a href="{$PAG_CLIENTE_DADOS}"><i class="fas fa-user-edit"></i> Meus Dados</a></li>
				<li id="btn_area_cliente"><a href="{$PAG_CLIENTE_PEDIDOS}"><i class="fas fa-truck"></i> Pedidos</a></li>
				<li id="btn_area_cliente"><a href="{$PAG_CARRINHO}"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
				<li id="btn_area_cliente"><a href="{$PAG_CLIENTE_SENHA}"><i class="fas fa-key"></i> Alterar Senha</a></li>
				<li id="btn_area_cliente"><a href="{$PAG_LOGOFF}"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
			</ul>
		</nav>
	</div>
</section>