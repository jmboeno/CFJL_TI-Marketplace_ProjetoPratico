<?php
/* Smarty version 3.1.33, created on 2019-07-04 00:28:33
  from 'C:\xampp\www\projeto-pratico\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d72615e0010_48975754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e029dd92116ca1063062b8473c48dc7a308fb1' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\menu_cliente.tpl',
      1 => 1556493550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1d72615e0010_48975754 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container minhaconta">
	<h1 class="titulo_pag">Minha Conta</h1>
    <hr>
    <br>
	<div class="menu_esquerdo">
		<nav>
			<div>
				<div class="inicial_user"><?php echo $_smarty_tpl->tpl_vars['USER']->value[0];?>
</div>
				<div class="email_user"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</div>
			</div>
			<ul>
				<li id="btn_area_cliente"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
"><i class="fas fa-user"></i> Minha Conta</a></li>
				<li id="btn_area_cliente"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
"><i class="fas fa-user-edit"></i> Meus Dados</a></li>
				<li id="btn_area_cliente"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
"><i class="fas fa-truck"></i> Pedidos</a></li>
				<li id="btn_area_cliente"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
				<li id="btn_area_cliente"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
"><i class="fas fa-key"></i> Alterar Senha</a></li>
				<li id="btn_area_cliente"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
			</ul>
		</nav>
	</div>
</section><?php }
}
