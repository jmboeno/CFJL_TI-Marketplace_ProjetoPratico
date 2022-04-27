<?php
/* Smarty version 3.1.33, created on 2019-07-11 02:20:40
  from 'C:\xampp\www\projeto-pratico\view\email_fornecedor_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d26c728423d44_47542183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c17ceb75bce605bfde36a8d5804b48ad2059e77b' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\email_fornecedor_cadastro.tpl',
      1 => 1562819410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d26c728423d44_47542183 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</h3>
<p>
    Para cadastrar produtos ou serviços em nossa plataforma, acesse sua conta através desse endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    
</p>
<?php }
}
