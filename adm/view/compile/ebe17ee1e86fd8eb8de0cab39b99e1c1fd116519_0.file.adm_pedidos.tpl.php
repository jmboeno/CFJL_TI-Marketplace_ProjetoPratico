<?php
/* Smarty version 3.1.33, created on 2019-07-04 00:22:27
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d70f376ad19_43748825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe17ee1e86fd8eb8de0cab39b99e1c1fd116519' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_pedidos.tpl',
      1 => 1562210543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1d70f376ad19_43748825 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Gerenciar Pedidos</h4>
   <hr>
   <br>
</section>

<section class="container">
    
   <div style="width: 50%; float: left;">
        <label> Buscar entre datas</label>
        <form name="buscardata" method="post" action="">        
              <input type="date" name="data_ini" style="padding: 1px 10px;" required>
              <input type="date" name="data_fim" style="padding: 1px 10px;" required>
              <button class="btn_sucesso" style="text-decoration: none; padding: 1px 10px; cursor: pointer;"><i class="fas fa-search"></i></button>
        </form>
   </div>
   
   <!--- faz  uma busca  por texto --->
   <div style="width: 50%; float: right;">
        <label> Buscar por Referencia</label>
        <form name="buscarrefcod" method="post" action="">
              <input type="text" name="txt_ref" style="padding: 1px 10px;" required>   
              <button class="btn_sucesso" style="text-decoration: none; padding: 1px 10px; cursor: pointer;"><i class="fas fa-search"></i></button>   
        </form>
   </div>
   
   <div style="clear: both;">
    <br>
    <hr>
    <br>
   </div>
</section>

<section class="container" style="margin-bottom: 100px">
   <table>
      <tr style="    background-color: rgba(102, 51, 153, 1); color: #fff;">
         <td>Cliente</td>
         <td>Data</td>
         <td>Hora</td>
         <td>Ref</td>
         <td>Status</td>
         <td></td>
         <td></td>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
      <tr>
         <td ><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
         <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?> 
         <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
         <?php } else { ?>
         <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
         <?php }?>
         <td style="text-align: center;">
            <!---- formulario que vai para itens do pedido ---->
            <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
               <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
               <button class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-eye"></i></button>
            </form>
         </td>
         <td style="text-align: center;">
            <form name="deletar" method="post" action="">
               <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
               <button name="ped_apagar" value="ped_apagar" class="btn_danger" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-trash"></i></button>
            </form>
         </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </table>
</section><?php }
}
