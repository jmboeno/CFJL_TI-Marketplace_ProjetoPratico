<?php
/* Smarty version 3.1.33, created on 2019-07-14 14:34:50
  from 'C:\xampp\www\projeto-pratico\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2b67ba498b05_40728758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb9c26504979f2020c351622b835b7cc846153c3' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\contato.tpl',
      1 => 1555737075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2b67ba498b05_40728758 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container contato"> 
    
    <h1 class="titulo_pag">Contato</h1>

    <hr>
    <br>
    
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7889.40621095499!2d-70.23299216136742!3d8.624475075086659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d8.626995899999999!2d-70.2301559!5e0!3m2!1ses-419!2sve!4v1456756695234" style="border:0" allowfullscreen="" frameborder="0" height="250" width="100%"></iframe>
    </div>
    
    <div class="formulario_contato">
    <form role="form" id="Formulario" action="envio" method="POST">
       <fieldset>
            <legend>Formulário de Contato</legend>
                <div class="form_grupo">
                    <label for="txtinputnome">Nome</label>
                    <input type="text" id="txtinputnome" name="txtinputnome" placeholder="Informe seu nome" required autofocus />
                </div>
                <div class="form_grupo">
                    <label for="txtinputemail">Email</label>
                    <input id="txtinputemail" name="txtinputemail" placeholder="Informe um email válido" required />
                </div>
                <div class="form_grupo">
                    <label for="txtselectmotivo">Motivo do Contato</label>
                    <select id='txtselectmotivo' required>
                        <option value='quero_anunciar'>Quero anúnciar</option>
                        <option value='reportar_erro'>Reportar erro</option>
                        <option value='problemas_no_pagamento'>Problemas no pagamento</option>
                        <option value='problemas_no_anuncio'>Problemas no anúncio</option>
                        <option value='outro'>Outro</option>
                    </select>
                </div>
                <div class="form_grupo">
                    <label for="txtinputarea">Mensagem</label>
                    <textarea rows="5" cols="30" id="txtinputarea" name="txtinputarea" placeholder="Digite sua mensagem" required ></textarea>
                </div>
                <div class="form_grupo">
                    <button id="btnenviar" name="btnenviar" class="btn_sucesso btn_form">Enviar</button>
                    <input type="reset" value="Limpar" class="btn_danger btn_form" style="width: 48%; float: left;">
                </div>
        </fieldset>
    </form>
</section>      <?php }
}
