<?php
/* Smarty version 3.1.33, created on 2019-07-23 23:59:24
  from 'C:\xampp\www\projeto-pratico\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d37c98c6d73c7_81509350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8ae05cef36c3335bcaa2c593a92616c3bf81fe5' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\adm\\view\\adm_index.tpl',
      1 => 1563937066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d37c98c6d73c7_81509350 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/estilo.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/responsive.css">
  <title>Área Administrativa</title>
  <meta name="google-signin-client_id" content="219619071778-4m4a1p3l6pep4bd5ekje465ep4898kt7.apps.googleusercontent.com">
  <?php echo '<script'; ?>
 src="https://apis.google.com/js/platform.js" async defer><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
</head>
<body>
  <header>
    <input type="checkbox" id="bt_menu">
    <label id="lbl_menu" for="bt_menu"><i class="fas fa-bars"></i></label>
    <div class="logo">
      <h2 style="bottom: -30px; right: 0;">Painel Administrativo</h2>
    </div>
    <p style="text-align: right; padding: 2px 10px;">Último Login: <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 ás <?php echo $_smarty_tpl->tpl_vars['HORA']->value;?>
</p>
    <nav class="menu" style="width:100%;">
      <ul>
        <li style="width:14.28%;"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
"><i class="fas fa-home"></i> Inicio</a></li>
        <li style="width:14.28%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
"><i class="fas fa-tags"></i> Categorias</a></li>
        <li style="width:14.28%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
"><i class="fas fa-barcode"></i> Produtos</a></li>
        <li style="width:14.28%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
"><i class="fas fa-users"></i> Clientes</a></li>
        <li style="width:14.28%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_FORNECEDORES']->value;?>
"><i class="fas fa-users"></i> Fornecedores</a></li>
        <li style="width:14.28%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
"><i class="fas fa-shopping-cart"></i> Pedidos</a></li>
        
        <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
        <li style="width:14.28%;"><a href="#"><i class="fas fa-user-circle"></i> <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 </a>
          <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SENHA']->value;?>
"><i class="fas fa-key"></i> Alterar Senha </a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
"><i class="fas fa-sign-out-alt"></i> Sair </a></li>
          </ul>
        <?php }?>


        
      </ul>
    </nav>
  </header>

  <main style="min-height: 600px;">
    <?php 

            Rotas::get_Pagina();
        
    ?>
  </main>

  <footer>
    <div class="center"><i class="far fa-copyright"></i> Todos os direitos a Jonas Boeno - <?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 <i class="fas fa-coffee"></i></div>
  </footer>
</body>
</html><?php }
}
