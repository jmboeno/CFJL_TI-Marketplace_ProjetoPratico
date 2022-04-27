<?php
/* Smarty version 3.1.33, created on 2019-07-04 00:28:50
  from 'C:\xampp\www\projeto-pratico\view\email_compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d7272105a39_31691881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe3c6ee1793178a17d351681ae08356fc6b8420' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\email_compra.tpl',
      1 => 1555941252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1d7272105a39_31691881 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section style="clear: both;
  background: radial-gradient(ellipse at center, rgba(219,219,219,1) 0%, rgba(226,226,226,1) 36%, rgba(254,254,254,1) 100%);
  width: 90%;
  padding: 20px;
  margin: 0 auto;
  border-radius: 10px;
  box-shadow: 5px 5px 5px rgb(0,0,0);">

  <div style="width: 100px;
  height: 100px;
  margin: 0 auto;">
    <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/images/logo.png" style="width: 100%;">
  </div>

  <div style="width: 100%;
  text-align: center;
  font-size: 1.2em;">
    <p> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
 , obrigado pela sua compra em <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
      <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
    </p>
    <p> Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
" > Minha conta: <?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    </p>                   
  </div>

  <div style="border: 1px solid rgba(102, 51, 153, 1);
  border-radius: 10px;
  background-color: #ffffff;">
      
    <div class="titulo_pedidos">
      <h3 style="text-align: center;
  width: 100%;
  padding: 10px 0;
  margin: 0;
  background-color: rgba(102, 51, 153, 1);
  color: #ffffff;
  border-radius: 9px 9px 0 0;">ESSES SÃO OS ITENS DO SEU PEDIDO!</h3>
    </div>
      
    <table style="width: 100%;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
      <tr style="border-bottom: 1px solid #000;">
        <td style="width: 15%; min-width: 80px; padding: 10px 0;"> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" style="width: 100%; min-width: 80px;"></td> 
        <td style="width: 40%; padding: 10px 0;">  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
  </td>
        <td style="width: 15%; padding: 10px 0;">  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
        <td style="width: 15%; padding: 10px 0;">  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
   </td>
        <td style="width: 15%; padding: 10px 0;">  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    
    <hr>
    
    <div style="width: 90%;
  margin: 20px auto;
  border: 1px dotted #000;
  border-radius: 10px;
  padding: 50px 10px;">
      <span>Itens : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
 | </span>
      <span>Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</span>
      <span style="float: right; font-size: 2em;"><b>TOTAL : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</b></span>
    </div>
    
    <br>
  </div>

</section><?php }
}
