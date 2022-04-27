<?php
/* Smarty version 3.1.33, created on 2019-07-14 19:04:54
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_fornecedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ba70696b7a6_24347599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa503e70373627bd3afc28060db6a8390b9439a' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_fornecedores.tpl',
      1 => 1563141892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2ba70696b7a6_24347599 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Gerenciar Fornecedores</h4>
   <hr>
   <br>
   <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_FORNECEDOR_NOVO']->value;?>
" class="btn_sucesso" style="text-decoration: none; padding: 10px; float: right;">Novo Fornecedor</a>
   <br>
   <br>
</section>
<br>
<!--- listando clientes ---->
<section class="container" style="margin-bottom: 100px">
   <table>
      <tr style="    background-color: rgba(102, 51, 153, 1); color: #fff;">
         <td>Nome</td>
         <td>Email</td>
         <td>Fone</td>
         <td>Data Cad</td>
         <td></td>
         <td></td>
      </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORNECEDORES']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>
        
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['F']->value['forn_nome'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['F']->value['forn_email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['F']->value['forn_fone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['F']->value['forn_data_cad'];?>
</td>
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR_FORNECEDOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['F']->value['forn_id'];?>
 " class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-pen"></i></a></td>
            <td style="text-align: center; padding: 15px;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS_FORNECEDOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['F']->value['forn_id'];?>
" class="btn_warning" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-truck"></i></td>
            
        </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
</section><?php }
}
