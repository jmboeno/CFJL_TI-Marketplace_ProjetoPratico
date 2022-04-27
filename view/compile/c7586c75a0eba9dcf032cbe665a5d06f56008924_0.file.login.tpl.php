<?php
/* Smarty version 3.1.33, created on 2019-07-04 00:23:39
  from 'C:\xampp\www\projeto-pratico\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d713b43ad31_92940283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7586c75a0eba9dcf032cbe665a5d06f56008924' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\login.tpl',
      1 => 1556498093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1d713b43ad31_92940283 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>   

<?php } else { ?>
<section class="container login">
    <div class="login_form">
        <span class="close_login"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><b>x</b></a></span>
        <form name="cliente_login" method="post" action="" style="margin-bottom: 0;">
            <h3>Login</h3>
            <input type="email" name="txt_email" placeholder="Email address" required="" autofocus="">
            <input  type="password" name="txt_senha" placeholder="Password" required="">
            <button type="submit" class="btn_sucesso" style="width: 90%; height: 50px; font-size: 1.2em; margin: 20px auto 10px; cursor: pointer;"><i class="fas fa-sign-in-alt"></i> Entrar</button>
        </form> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" style="text-decoration: none;"><button type="submit"  class="btn_warning" style="width: 90%; height: 50px; font-size: 1.2em; margin: 0px auto 10px; cursor: pointer; "><i class="fas fa-user-plus"></i> Cadastrar</button></a>
            <br>
            <br>
            <span>Esqueceu a senha? </span><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
">clique aqui!</a>
            <br>
            <br>
     </div>
</section>
<?php }?>

<?php }
}
