<?php
/* Smarty version 3.1.33, created on 2019-07-14 10:38:55
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_produtos_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2b306f1c24b1_77053772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '590d2f95d892962e4b3e57385975661c93835de4' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_produtos_novo.tpl',
      1 => 1563111288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2b306f1c24b1_77053772 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Cadastrar Produto</h4>
   <hr>
   <br>
</section>
<section class="container" style="margin-bottom: 50px;">
   <div class="area_direita" style="float: none; margin: 0 auto;">
      <div class="center_form">
         <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

            <label>Produto</label>
            <input type="text" name="pro_nome" id="pro_nome" required >

            <label>Fornecedor</label>
            <select name="pro_fornecedor" id="pro_fornecedor" required style="    margin-bottom: 15px;
               display: block;
               width: 100%;
               height: 2.3em;
               font-size: 1.2em;">
               <option value="teste"> Escolha </option>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORNECEDOR']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>                    
               <option value="<?php echo $_smarty_tpl->tpl_vars['F']->value['forn_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['F']->value['forn_nome'];?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
            </select>

            <label>Catogoria</label>
            <select name="pro_categoria" id="pro_categoria" required style="    margin-bottom: 15px;
               display: block;
               width: 100%;
               height: 2.3em;
               font-size: 1.2em;">
               <option value="teste"> Escolha </option>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>                    
               <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
            </select>

            <label>Ativo</label>
            <select name="pro_ativo" id="pro_cativo" required style="    margin-bottom: 15px;
               display: block;
               width: 100%;
               height: 2.3em;
               font-size: 1.2em;">
               <option value=""> Escolha </option>
               <option value="NAO"> Não </option>
               <option value="SIM"> Sim </option>
            </select>

            <label>Modelo</label>
            <input type="text" name="pro_modelo" id="pro_modelo">
            <label>Referencia</label>
            <input type="text" name="pro_ref" id="pro_ref">
            <label>Valor</label>
            <input type="text" name="pro_valor" id="pro_valor" required >
            <label>Estoque</label>
            <input type="text" name="pro_estoque" id="pro_estoque" required >
            <label>Peso</label>
            <input type="text" name="pro_peso" id="pro_peso" required >
            <label>Altura</label>
            <input type="text" name="pro_altura" id="pro_altura" required >
            <label>Largura</label>
            <input type="text" name="pro_largura" id="pro_largura" required >
            <label>Comprimento</label>
            <input type="text" name="pro_comprimento" id="pro_comprimento" required >
            <label>Imagem Principal</label>
            <input type="file" name="pro_img" id="pro_img">
            <label>Descrição</label>    
            <textarea name="pro_desc" id="pro_desc" rows="5" style="    margin-bottom: 15px;
               display: block;
               width: 100%;
               font-size: 1.2em;"></textarea>
            <?php echo '<script'; ?>
> 
               tinymce.init({ selector:'textarea'  });
            <?php echo '</script'; ?>
> 
            <label>Slug</label>
            <input type="text" readonly name="pro_slug" id="pro_slug">
            <input type="submit" value="Cadastrar" class="btn_sucesso" name="btn_gravar" style="cursor: pointer;">
         </form>
      </div>
   </div>
</section><?php }
}
