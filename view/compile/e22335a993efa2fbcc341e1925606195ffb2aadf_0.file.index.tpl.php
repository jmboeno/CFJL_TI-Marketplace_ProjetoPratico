<?php
/* Smarty version 3.1.33, created on 2019-07-25 23:52:10
  from 'C:\xampp\www\projeto-pratico\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3a6ada894de8_66554736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e22335a993efa2fbcc341e1925606195ffb2aadf' => 
    array (
      0 => 'C:\\xampp\\www\\projeto-pratico\\view\\index.tpl',
      1 => 1564109518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3a6ada894de8_66554736 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title><?php echo $_smarty_tpl->tpl_vars['GET_NOME']->value;?>
</title>
	<meta name="google-signin-client_id" content="219619071778-4m4a1p3l6pep4bd5ekje465ep4898kt7.apps.googleusercontent.com">
	<?php echo '<script'; ?>
 src="https://apis.google.com/js/platform.js" async defer><?php echo '</script'; ?>
>
</head>
<body>
	<header>
		<input type="checkbox" id="bt_menu">
		<label id="lbl_menu" for="bt_menu"><i class="fas fa-bars"></i></label>
		<div class="logo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/images/logo.png">
			<h2>Pinneapple&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ofertas</h2>
		</div>
		<nav class="menu" style="width:100%;">
			<ul>
				<li style="width:13%;"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><i class="fas fa-home"></i> Inicio</a></li>
				<li style="width:14%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
"><i class="fas fa-envelope"></i> Contato</a></li>
				
				<li style="width:16%;"><a href="#"><i class="fas fa-tags"></i> Anúncios</a>
					<ul class="ul_cate">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><i class="fas fa-tag"></i> <?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</li>
				<li style="width:15%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
				
				<?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
				<li style="width:13%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
"><i class="fas fa-user-circle"></i> <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</a>
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
					</ul>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == false) {?>
				<li style="width:13%;"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
"><i class="fas fa-user-circle"></i> Conta</a>
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
"><i class="fas fa-sign-in-alt"></i> Login</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
"><i class="fas fa-user-plus"></i> Cadastro</a></li>
					</ul>
				</li>
				<?php }?>
				
				<li style="width:25%;" class="busca">
					<form role="search" method="POST" action="">
						<input type="text" class="search" name="txt_buscar" style="width:80%;">
						<button id="btn-pesquisa" type="submit" style="width:18%;"><i class="fas fa-search"></i></button>
					</form>
				</li>
			</ul>
		</nav>
	</header>

	<main style="min-height: 300px;">
		<?php 

            Rotas::get_Pagina();
        
        ?>
	</main>

	<section class="container-fluid newsletter">
		<h2>Inscreva-se e receba informações sobre nossas ofertas!</h2>
		<h4>Ofertas diárias com os melhores descontos, não perca!</h4>
		<div>
			<form role="form" id="Formulario" action="newsletter" method="POST">
				<input type="email" placeholder="Email" id="email_newsletter" required/>
				<button id="bt_newsletter">Inscrever-me!</button>
			</form>
		</div>
	</section>

	<footer>
		<div>Anúncios
			<hr>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<div>Suporte
			<hr>
			<ul>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Reportar Bug</a></li>
				<li><a href="#">Termos e Privacidade</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/adm/login.php">Painel Administrativo</a></li>
			</ul>
		</div>
		<div>Contato
			<hr>
			<ul>
				<li><a href="#">Telefone</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Email</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Quero Anúnciar</a></li>
			</ul>
		</div>
		<div class="center"><i class="far fa-copyright"></i> Todos os direitos a Jonas Boeno - <?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 <i class="fas fa-coffee"></i></div>
	</footer>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/newsletter.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
