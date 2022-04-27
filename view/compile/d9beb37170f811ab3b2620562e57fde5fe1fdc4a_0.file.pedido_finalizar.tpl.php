<?php
/* Smarty version 3.1.33, created on 2019-07-04 00:28:54
  from 'C:\xampp\www\projeto-pratico\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d72760b0971_71455119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9beb37170f811ab3b2620562e57fde5fe1fdc4a' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\pedido_finalizar.tpl',
      1 => 1555859732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1d72760b0971_71455119 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container" style="margin-top: 50px;">
  <h1 class="titulo_pag">Finalizar Pedido</h1>
  <hr>
    <div class="carrinho" style="width: 100%">
      <div class="alerta">
        <h3>Pedido Finalizado!</h3>
      </div>
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Descrição</th> 
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Subtotal</th>
            <th></th>
          </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tbody>
          <tr>  
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td> 
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
            <td></td>
          </tr>
        </tbody>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <tfoot>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p> + Frete R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</p>
            <h3>Total R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</h3>
          </td>
          <td></td>
        </tfoot>
        </table>

        <div style="width: 100%; padding: 20px 0; text-align: center;">

          <h3>Formas de Pagamento</h3>

          <div style="width: 30%; margin: 0 auto; cursor: pointer;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/images/logo-pagseguro.png" alt=""> 
          </span>
        </div>
    </div>
</section><?php }
}
