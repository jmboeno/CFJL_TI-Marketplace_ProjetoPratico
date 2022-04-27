<?php
/* Smarty version 3.1.33, created on 2019-07-03 00:58:04
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c27cc18c3b1_56975742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23c854803775401970f2d6c0f325bd4b2e9a9014' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_categorias.tpl',
      1 => 1561478245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1c27cc18c3b1_56975742 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Gerenciar Categorias</h4>
   <hr>
   <br>
</section>
<!-- section listar categorias -->
<section  class="container" style="margin-bottom: 50px;">
<div class="area_direita" style="float: none; margin: 0 auto;">
      <div class="center_form">
       <form name="categoriainsere" method="post" action="" style="border: 1px solid #000; border-radius: 10px;">        
            <input type="text" name="cate_nome" required>  
            <button  name="cate_nova" value="cate_nova" class="btn_sucesso" style="cursor: pointer; width: 100%; font-size: 1.2em; padding: 4px;"> Inserir nova </button>          
    </form>
    <table  style="width: 100%; margin: 10px 0;">
        
      
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
            <form name="categorias_editar" method="post" action="">
               
                <tr>

                    <td style="width: 80%">
                         <input type="text" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
" style="width: 90%;" required> 
                          <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
">
                    </td>
                       
                    <td style="text-align: center;">
                        <button  name="cate_editar" value="cate_editar" class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-pen"></i></button>
                    </td>
                   
                    <td style="text-align: center;">
                        <button name="cate_apagar" value="cate_apagar"  class="btn_danger" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-trash"></i></button>
                    </td>


                </tr>        

            </form>
            
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
   </div>
</div>
    
    
</section><?php }
}
