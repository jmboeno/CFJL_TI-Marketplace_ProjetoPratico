<?php
/* Smarty version 3.1.33, created on 2019-07-03 00:58:01
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c27c9669b96_00022506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fff35d669167654433c73f8279a0744acb9fafc' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_produtos.tpl',
      1 => 1561478294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1c27c9669b96_00022506 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Gerenciar Produtos</h4>
   <hr>
   <br>
   <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
" class="btn_sucesso" style="text-decoration: none; padding: 10px; float: right;">Novo Produto</a>
   <br>
   <br>
</section>
<br>
<!--     exibe mensagem caso nao encontre produtos -->
<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<h4 >Ops... Nada foi encontrado </h4>
<?php }?>
<!--  começa lista de produtos  ---->   
<section class="container" style="margin-bottom: 100px">
   <table>
      <tr style="    background-color: rgba(102, 51, 153, 1); color: #fff;">
         <td></td>
         <td>Produto</td>
         <td>Categoria</td>
         <td>Preço</td>
         <td>      </td>
         <td>      </td>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
      <tr>
         <td>  <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
" alt="" > </td>
         <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
         <td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
         <td  style="text-align: center;">
            <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
               <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
               <button class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-pen"></i></button>
            </form>
         </td>
         <td  style="text-align: center;">
            <form name="proimg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
               <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
               <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
               <button class="btn_warning" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-images"></i></button>
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
