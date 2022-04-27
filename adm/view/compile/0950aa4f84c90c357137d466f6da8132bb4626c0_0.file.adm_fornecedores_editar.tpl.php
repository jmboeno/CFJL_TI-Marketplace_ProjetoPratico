<?php
/* Smarty version 3.1.33, created on 2019-07-14 18:51:36
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_fornecedores_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ba3e86d8ae5_06396339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0950aa4f84c90c357137d466f6da8132bb4626c0' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_fornecedores_editar.tpl',
      1 => 1563110849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2ba3e86d8ae5_06396339 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Editar Fornecedor</h4>
   <hr>
   <br>
</section>
<section class="container">
   <div class="area_direita" style="float: none; margin: 0 auto;">
   <div class="center_form">
      <form name="cadfornecedor" id="cadfornecedor" method="post" action="">
         <section  id="cadastro">
            <div >
               <label>Nome:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_NOME']->value;?>
" name="FORN_NOME"  minlength="3" required>
            </div>
            <div >
               <label>IE:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_IE']->value;?>
" name="FORN_IE"  required>
            </div>
            <div >
               <label>CNPJ:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_CNPJ']->value;?>
" name="FORN_CNPJ"  minlength="11" maxlength="11" required>
            </div>
            <div >
               <label>DDD:</label>
               <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['FORN_DDD']->value;?>
" name="FORN_DDD"   min="10" max="99" required>
            </div>
            <div >
               <label>Fone:</label>
               <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['FORN_FONE']->value;?>
" name="FORN_FONE"  required>
            </div>
            <div >
               <label>Celular:</label>
               <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['FORN_CELULAR']->value;?>
" name="FORN_CELULAR"  required>
            </div>
            <div >
               <label>Endereço:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_ENDERECO']->value;?>
" name="FORN_ENDERECO"   minlength="3" required>
            </div>
            <div >
               <label>Numero:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_NUMERO']->value;?>
" name="FORN_NUMERO"  required>
            </div>
            <div >
               <label>Bairro:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_BAIRRO']->value;?>
" name="FORN_BAIRRO"  minlength="3" required>
            </div>
            <div >
               <label>Cidade:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_CIDADE']->value;?>
" name="FORN_CIDADE"  minlength="3" required>
            </div>
            <div >
               <label>UF:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_UF']->value;?>
"name="FORN_UF"  maxlength="2" minlength="2" required>
            </div>
            <div >
               <label>Cep:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORN_CEP']->value;?>
" name="FORN_CEP"  minlength="8" maxlength="8" required>
            </div>
            <div >
               <label>Email:</label>
               <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['FORN_EMAIL']->value;?>
" name="FORN_EMAIL"  required>
            </div>
         </section>
         <br>
         <br>
         <section  id="btngravar">
            <div ></div>
            <div >
               <input type="hidden" name="FORN_ID" value="<?php echo $_smarty_tpl->tpl_vars['FORN_ID']->value;?>
"  required>
               <br>
               <input type="submit" value="Salvar" class="btn_sucesso" style="cursor: pointer; width: 50%;" >
         </section>
      </form>
      </div>
   </div>
</section><?php }
}
