<?php
/* Smarty version 3.1.33, created on 2019-07-14 22:16:05
  from 'C:\xampp\www\projeto-pratico\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2bd3d5e56030_55912096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde2144f57fec18b66d2f696b2b6a64424ec08ee' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\carrinho.tpl',
      1 => 1563153365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2bd3d5e56030_55912096 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container" id="dv_carrinho" style="margin-top: 50px;">
  <h1 class="titulo_pag">Carrinho</h1>
  <hr>
    <div class="carrinho">
      <table>
        <tr>

          <th></th>
          <th>Descrição</th> 
          <th>Valor</th>
          <th>Fornecedor</th>
          <th>Quantidade</th>
          <th>Subtotal</th>
          <th></th>
          </tr>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
          <tr id="itens_carrinho">
            <td style="min-width: 50px;"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" style="width: 100%;"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td> 
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_fornecedor'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
            <td>
              <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                <input type="hidden" name="acao" value="del">             
                <button class="btn_trash" style="width: 35px; height: 35px; cursor: pointer;"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <tr>
          <td></td>
          <td></td> 
          <td></td>
          <td><b>TOTAL</b></td>
          <td>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
          <td></td>
          </tr>
        </table>
    </div>
      <div class="resumo_carrinho">
      <strong>Resumo</strong>
        <br>
        <br>
        
        <?php if ($_smarty_tpl->tpl_vars['PESO']->value > 0) {?>
        <div id="dadosfrete">
            <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" readonly>
            <input type="text" name="cep_frete" id="cep_frete" value="" placeholder="digite seu cep" style="width: 85%; text-align: center;">
            <input type="hidden" name="frete_valor" id="frete_valor" value="0">
            <button id="buscar_frete" style="width: 15%; margin-left: -8px; height: 2.6em;"><i class="fas fa-calculator"></i></button>
        </div>
        <?php }?>

        <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
          <div id="frete"></div>
          <?php if ($_smarty_tpl->tpl_vars['PESO']->value <= 0) {?>
              <div id="frete">
                <span class="radio text-danger text-left"> 
                <br>
                <input type="radio" required="" id="frete_radio" name="frete_radio" value="0">Frete Grátis
                <br>
                </div>
            <?php }?>
          <button class="btn_sucesso" type="submit">Confirmar Pedido</button>
        </form>
        
        <br>

        <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
          <input type="hidden" name="acao" value="limpar">
          <input type="hidden" name="pro_id" value="1">
          <button class="btn_danger">Limpar Tudo</button>
        </form>

        <br>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><button  class="btn_warning">Continuar Comprando</button></a>
      </div>
    </section>
    <?php echo '<script'; ?>
 type="text/javascript">
      var checkcart = document.querySelectorAll('#itens_carrinho').length;

      if(checkcart == 0){
        document.querySelector('#dv_carrinho').style.display = "none";
      }else{
        document.querySelector('#dv_carrinho').style.display = "block";
      }

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/valida_frete.js"><?php echo '</script'; ?>
><?php }
}
