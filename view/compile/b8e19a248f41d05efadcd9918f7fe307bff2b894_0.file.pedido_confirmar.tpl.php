<?php
/* Smarty version 3.1.33, created on 2019-07-04 00:23:33
  from 'C:\xampp\www\projeto-pratico\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d713509f8e5_68296710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8e19a248f41d05efadcd9918f7fe307bff2b894' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\pedido_confirmar.tpl',
      1 => 1555859751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1d713509f8e5_68296710 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container" style="margin-top: 50px;">
  <h1 class="titulo_pag">Confirmar Pedido</h1>
  <hr>
    <div class="carrinho" style="width: 100%">
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
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
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
        </table>

        <div id="frete" style="width: 100%; padding: 20px 0">
          <span style="width: 32%; float: left;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" style="text-decoration:none;"><button class="btn_warning" style="width:100%; height:50px;cursor:pointer;">Voltar para o Carrinho</button></a></span>
          <span style="width: 32%; float: left; text-align: right;">
            <p> + Frete R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</p>
            <h3>Total R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</h3>
          </span>
          <span style="width: 32%; float: right;">
            <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
              <button class="btn_sucesso" type="submit" style="width: 100%; height: 50px; cursor: pointer;">Finalizar Pedido</button>
            </form>
          </span>
        </div>
    </div>
</section>
<?php }
}
