<?php
/* Smarty version 3.1.33, created on 2019-05-28 00:07:05
  from 'C:\xampp\www\projeto-pratico\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceca5d91da086_29683640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8b0d2f41045c75ea2618b0feaed717531e9abd5' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\produtos_info.tpl',
      1 => 1555736886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceca5d91da086_29683640 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container produto_info">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    <h1 class="titulo_pag"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</h1>
    <hr>

  <div class="produto_info_images">
      <div class="info_img_principal">
        <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
">
      </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
        <div class="info_img_secundario">
            <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
">
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <div class="produto_info_pay">
    <h1><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h1>
    <h1 class="produto_info_preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h1>
    <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
      <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
      <input type="hidden" name="acao" value="add">
      <button class="btn_sucesso btn_comprar">Comprar</button>
    </form>
    <div class="pagseguro_img">
      <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/images/logo-pagseguro.png">
    </div>
    <div class="produto_descricao">
      <h3>Descrição:</h3>
      <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
    </div>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
