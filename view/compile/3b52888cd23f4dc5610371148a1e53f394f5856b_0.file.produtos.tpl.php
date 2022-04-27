<?php
/* Smarty version 3.1.33, created on 2019-07-25 23:32:54
  from 'C:\xampp\www\projeto-pratico\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3a66561e55e8_97163567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b52888cd23f4dc5610371148a1e53f394f5856b' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\produtos.tpl',
      1 => 1564108372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3a66561e55e8_97163567 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?> 
	<div class="anuncio">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
"></a>
			<h3> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
			<h5 class="qtd_disponivel">Disponivel: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</h5>
			<h2 class="price">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h2>
			<hr>
		<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="btn_anuncio btn_sucesso">Comprar <i class="fas fa-cart-plus"></i></a>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<div class="paginas"><?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>
</div>
</section><?php }
}
