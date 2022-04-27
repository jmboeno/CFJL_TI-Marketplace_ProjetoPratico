<?php
/* Smarty version 3.1.33, created on 2019-07-04 00:03:05
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d6c69d35781_85009397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '253bf9fe7fbe2358c0ba4469fd4ecf4c681891eb' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_itens.tpl',
      1 => 1562209382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1d6c69d35781_85009397 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Dados do Pedido</h4>
   <hr>
   <br>
</section>

<!-- informações sobre o pedido -->
<section class="container">
    
 
    <table>
        <tr style="    background-color: #fff; color: #000;">
            
            <td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
            
            <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
            
            <td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
            
            <td><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>
            
        </tr>  
        
        
    </table>

    
</section>


<!-- listagem dos itens -->
<section class="container">
    <table>
        
        <tr style="    background-color: rgba(102, 51, 153, 1); color: #fff;">
            <td></td>
            <td>Item</td>
            <td>Valor Unitário</td>
            <td>Quantidade</td>
            <td>Sub Total</td>
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>
            
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
            <td > <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
            <td > <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
            <td > <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
            
        </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        
    </table>

    
    
</section>
        
        
        <section class="container" style="margin-bottom: 100px">

        
                <table>
                    <tr>

                        <td> <b>Frete:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>

                        <td> <b>Total:</b> <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                        <td> <b>Final:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                    </tr>  


                </table>
            

        </section><?php }
}
