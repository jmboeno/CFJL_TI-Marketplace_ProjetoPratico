<?php
/* Smarty version 3.1.33, created on 2019-07-03 01:36:13
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_clientes_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c30bd06f9c6_75302210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c744a7bd83a238b1f11161efe770466fa3744648' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_clientes_editar.tpl',
      1 => 1562128571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1c30bd06f9c6_75302210 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Editar Cliente</h4>
   <hr>
   <br>
</section>
<section class="container">
   <div class="area_direita" style="float: none; margin: 0 auto;">
   <div class="center_form">
      <form name="cadcliente" id="cadcliente" method="post" action="">
         <section  id="cadastro">
            <div >
               <label>Nome:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome"  minlength="3" required>
            </div>
            <div >
               <label>Sobrenome:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" name="cli_sobrenome"   minlength="3" required>
            </div>
            <div >
               <label>Data Nasc:</label>
               <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" name="cli_data_nasc"  required>
            </div>
            <div >
               <label>RG:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" name="cli_rg"  required>
            </div>
            <div >
               <label>CPF:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf"  minlength="11" maxlength="11" required>
            </div>
            <div >
               <label>DDD:</label>
               <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" name="cli_ddd"   min="10" max="99" required>
            </div>
            <div >
               <label>Fone:</label>
               <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" name="cli_fone"  required>
            </div>
            <div >
               <label>Celular:</label>
               <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" name="cli_celular"  required>
            </div>
            <div >
               <label>Endereço:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco"   minlength="3" required>
            </div>
            <div >
               <label>Numero:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" name="cli_numero"  required>
            </div>
            <div >
               <label>Bairro:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" name="cli_bairro"  minlength="3" required>
            </div>
            <div >
               <label>Cidade:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" name="cli_cidade"  minlength="3" required>
            </div>
            <div >
               <label>UF:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
"name="cli_uf"  maxlength="2" minlength="2" required>
            </div>
            <div >
               <label>Cep:</label>
               <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" name="cli_cep"  minlength="8" maxlength="8" required>
            </div>
            <div >
               <label>Email:</label>
               <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" name="cli_email"  required>
            </div>
         </section>
         <br>
         <br>
         <section  id="btngravar">
            <div ></div>
            <div >
               <input type="hidden" name="cli_id" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ID']->value;?>
"  required>
               <br>
               <input type="submit" value="Salvar" class="btn_sucesso" style="cursor: pointer; width: 50%;" >
         </section>
      </form>
      </div>
   </div>
</section><?php }
}
