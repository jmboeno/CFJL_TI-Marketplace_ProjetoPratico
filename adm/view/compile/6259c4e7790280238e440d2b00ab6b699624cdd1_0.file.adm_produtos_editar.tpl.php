<?php
/* Smarty version 3.1.33, created on 2019-07-14 19:17:12
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_produtos_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ba9e89dd970_82063027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6259c4e7790280238e440d2b00ab6b699624cdd1' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_produtos_editar.tpl',
      1 => 1563142630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2ba9e89dd970_82063027 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Editar Produto</h4>
   <hr>
   <br>
</section>
<section class="container">
   <div class="area_direita" style="float: none; margin: 0 auto;">
      <div class="center_form">
         <form name="frm_produto" method="post" action=""enctype="multipart/form-data">

            <div>
               <label>Produto</label>
               <input type="text" name="pro_nome" id="pro_nome" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_nome'];?>
">
            </div>


            <div>
               <label>Fornecedor</label>
               <select name="pro_fornecedor" id="pro_fornecedor" style="    margin-bottom: 15px;
                  display: block;
                  width: 100%;
                  height: 2.3em;
                  font-size: 1.2em;" required>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['FORNECEDOR']->value[1]['forn_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['FORNECEDOR']->value[1]['forn_nome'];?>
 </option>
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
            </div>

            <div>
               <label>Catogoria</label>
               <select name="pro_categoria" id="pro_categoria" style="    margin-bottom: 15px;
                  display: block;
                  width: 100%;
                  height: 2.3em;
                  font-size: 1.2em;" required>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
 </option>
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
            </div>

            <div>
               <label>Ativo</label>
               <select name="pro_ativo" id="pro_cativo" style="    margin-bottom: 15px;
                  display: block;
                  width: 100%;
                  height: 2.3em;
                  font-size: 1.2em;"required >
                  <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
</option>
                  <option value=""> Escolha </option>
                  <option value="NAO"> Não </option>
                  <option value="SIM"> Sim </option>
               </select>
            </div>
            <div>
               <label>Modelo</label>
               <input type="text" name="pro_modelo" id="pro_modelo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_modelo'];?>
">
            </div>
            <div>
               <label>Referencia</label>
               <input type="text" name="pro_ref" id="pro_ref" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ref'];?>
" >
            </div>
            <div>
               <label>Valor</label>
               <input type="text" name="pro_valor" id="pro_valor" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_valor'];?>
">
            </div>
            <div>
               <label>Estoque</label>
               <input type="text" name="pro_estoque" id="pro_estoque" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_estoque'];?>
">
            </div>
            <div>
               <label>Peso</label>
               <input type="text" name="pro_peso" id="pro_peso" required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_peso'];?>
">
            </div>
            <div>
               <label>Altura</label>
               <input type="text" name="pro_altura" id="pro_altura"required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_altura'];?>
">
            </div>
            <div>
               <label>Largura</label>
               <input type="text" name="pro_largura" id="pro_largura"required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_largura'];?>
">
            </div>
            <div >
               <label>Comprimento</label>
               <input type="text" name="pro_comprimento" id="pro_comprimento"required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_comprimento'];?>
">
            </div>
            <div>
               <label>Descrição</label>
               <textarea name="pro_desc" id="pro_desc" rows="5"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_desc'];?>
</textarea>
               <?php echo '<script'; ?>
> 
                  tinymce.init({ selector:'textarea'});
               <?php echo '</script'; ?>
> 
            </div>
            <div >
               <label>Slug</label>
               <input type="text" readonly name="pro_slug" id="pro_slug"value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
">
            </div>
             <div>
               <div style="text-align: center; width: 300px;">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_nome'];?>
" style="width: 100%;">
               </div>
               <div >
                  <label>Imagem Principal</label>
                  <!--- campos para adicionar a imagem---->
                  <input type="file" name="pro_img"  id="pro_img">
                  <!--pega o nome da imagem atual -->
                  <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_atual'];?>
">
                  <!----pega o caminho completo da imagem atual -->
                  <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">
               </div>
            </div>
            <div>
               <input type="submit" value="Salvar" name="btn_gravar" class="btn_sucesso" name="btn_gravar" style="cursor: pointer; width: 50%;">
            </div>
            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
         </form>
         <!---bloco de apagar o produto -->
<div style="margin-bottom: 50px; padding: 10px 20px;">
   <div>
      <!--- botão que abre a opção de apagar -->
      <input type="button" value="Apagar Produto" id="btn_apagar" class="btn_danger" name="btn_gravar" style="cursor: pointer; padding: 5px; width: 50%; font-size: 1.2em;">
   </div>
   <div id="btnapagar" style="display: none;">
      <form name="frm_apagar" method="post" action="" style="text-align: center;">
         <label>Apagar este produto?</label>
         <input type="radio" name="confirmar" value="SIM" required>
         <!---botao que apagar o produto de uma vez -->
         <input type="submit" value="Apagar" class="btn_danger" name="btn_gravar" style="cursor: pointer; width: 30%;
    margin: 0 auto;">
         <input type="hidden" name="pro_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
         <input type="hidden" name="pro_apagar" value="SIM">
         <!----pega o caminho completo da imagem atual -->
         <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">
      </form>
   </div>
</div>
      </div>
   </div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
   document.querySelector('#btn_apagar').addEventListener('click', abreDialog);
   
   function abreDialog(){
      document.querySelector('#btnapagar').style.display = "block";
   }
<?php echo '</script'; ?>
><?php }
}
