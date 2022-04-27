<?php
/* Smarty version 3.1.33, created on 2019-07-14 18:47:21
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_fornecedores_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2ba2e94e25d3_18646997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b4558e9c3766cdc797e467d41f065f119b29685' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_fornecedores_novo.tpl',
      1 => 1563140785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2ba2e94e25d3_18646997 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
   <br>
   <h4>Cadastrar Fornecedor</h4>
   <hr>
   <br>
</section>
<section class="container" style="margin-bottom: 50px;">
   <div class="area_direita" style="float: none; margin: 0 auto;">
      <div class="center_form">
        <form name="cadfornecedor" id="cadfornecedor" method="post" action="">
      
            <label for="">Nome</label>       
            <input type="text" name="forn_nome" minlength="3" required>     
       
            <label for="">IE</label>         
            <input type="text" name="forn_ie" required>      
 
            <label for="">CNPJ</label>       
            <input type="text" name="forn_cnpj" minlength="11" maxlength="11" required>       
      
            <label for="">DDD</label>        
            <input type="number" name="forn_ddd" min="10" max="99" required>      
       
            <label for="">Fone</label>       
            <input type="number" name="forn_fone" required>     
       
            <label for="">Celular</label>       
            <input type="number" name="forn_celular" required>     
        
            <label for="">Endereço</label>         
            <input type="text" name="forn_endereco" minlength="3" required>       
        
            <label for="">Número</label>        
            <input type="text" name="forn_numero" required>     
      
            <label for="">Bairro</label>        
            <input type="text" name="forn_bairro" minlength="3" required>      

            <label for="">Cidade</label>        
            <input type="text" name="forn_cidade" minlength="3" required>      
    
            <label for="">UF</label>         
            <input type="text" name="forn_uf" maxlength="2" minlength="2" required>     
     
            <label for="">CEP</label>        
            <input type="text" name="forn_cep" minlength="8" maxlength="8" required>       
      
            <label for="">E-mail</label>        
            <input type="email" name="forn_email" class="form-control" required>            
       
          <input type="submit" value="Cadastrar" class="btn_sucesso" name="btn_gravar" style="cursor: pointer;">     
         </div>              
         </form>
      </div>
   </div>
</section><?php }
}
