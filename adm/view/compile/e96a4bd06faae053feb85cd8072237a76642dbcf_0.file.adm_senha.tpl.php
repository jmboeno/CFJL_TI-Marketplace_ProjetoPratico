<?php
/* Smarty version 3.1.33, created on 2019-07-24 00:14:36
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d37cd1c420852_39757095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e96a4bd06faae053feb85cd8072237a76642dbcf' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_senha.tpl',
      1 => 1563938057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d37cd1c420852_39757095 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Alteração de Senha de Acesso</h4>
   <hr>
   <br>
</section>

<section class="container">
	<div class="area_direita" style="float: none; margin: 0 auto;">
		<div class="center_form">
			<form name="alterarsenha" method="post" action="">
			    <label>Digite sua senha atual</label>     
			    <input type="password" name="adm_senha_atual" id="adm_senha_atual" class="form_grupo" required>
				<label>Digite sua nova senha</label>
				<input type="password" name="adm_senha" id="adm_senha" class="form_grupo" required>
				<input type="submit" id="salvar_dados_cliente" value="Alterar">
			</form>
		</div>
	</div>
</section>	<?php }
}
