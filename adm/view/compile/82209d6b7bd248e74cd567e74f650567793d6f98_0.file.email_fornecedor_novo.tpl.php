<?php
/* Smarty version 3.1.33, created on 2019-07-14 19:47:42
  from 'C:\xampp\www\projeto-pratico\adm\view\email_fornecedor_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2bb10ea229e8_82935107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82209d6b7bd248e74cd567e74f650567793d6f98' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\email_fornecedor_novo.tpl',
      1 => 1563144167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2bb10ea229e8_82935107 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
 ,<?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 acaba de se cadastrar em sua plataforma!</h3>

<p>
    Para mais detalhes do novo cliente, acesse: <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SITE_ADM']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_SITE_ADM']->value;?>
</a> 
</p>
<?php }
}
