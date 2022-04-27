<?php 

$smarty = new Template();


if(isset($_POST['forn_nome']) and isset($_POST['forn_email']) and isset($_POST['forn_cnpj'])){
	//variaveis
	 $forn_nome = $_POST['forn_nome'];
     $forn_ie        = $_POST['forn_ie'];
     $forn_cnpj       = $_POST['forn_cnpj'];
     $forn_ddd       = $_POST['forn_ddd'];
     $forn_fone      = $_POST['forn_fone'];
     $forn_celular   = $_POST['forn_celular'];
     $forn_endereco  = $_POST['forn_endereco'];
     $forn_numero    = $_POST['forn_numero'];
     $forn_bairro    = $_POST['forn_bairro'];
     $forn_cidade    = $_POST['forn_cidade'];
     $forn_uf        = $_POST['forn_uf'];
     $forn_cep       = $_POST['forn_cep'];
     $forn_email     = $_POST['forn_email'];
     $forn_senha     = Sistema::GerarSenha();
     $forn_data_cad  = Sistema::DataAtualUS();
     $forn_hora_cad  = Sistema::HoraAtual();


     $fornecedores = new Fornecedores();

     $fornecedores->Preparar($forn_nome, $forn_ie, $forn_cnpj, $forn_ddd, $forn_fone, $forn_celular, $forn_endereco, $forn_numero, $forn_numero, $forn_cidade, $forn_uf, $forn_cep, $forn_email, $forn_data_cad, $forn_hora_cad, $forn_senha);


     $fornecedores->Inserir();


     //ASSIGNS PARA TEMPLATE
     $smarty->assign('NOME', $forn_nome);
     $smarty->assign('SITE', Config::SITE_NOME);
     $smarty->assign('EMAIL', $forn_email);
     $smarty->assign('SENHA', $forn_senha);
     $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
     $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
     $smarty->assign('PAG_SITE_ADM', Rotas::get_SiteADM());

     $email = new EnviarEmail();
     $assunto = 'Cadastro Efetuado - ' . Config::SITE_NOME;
     $msg = $smarty->fetch('email_fornecedor_cadastro.tpl');
     $destinatarios = array($forn_email);
     $email->Enviar($assunto, $msg, $destinatarios);
 
     $assunto = 'Você tem um novo Fornecedor!';
     $msg = $smarty->fetch('email_fornecedor_novo.tpl');
     $destinatarios = array(Config::SITE_EMAIL_ADM);
     $email->Enviar($assunto, $msg, $destinatarios);

     echo '<h3 class="alerta pulse">Cadastro Efetuado!! A senha para fazer login foi enviada para seu email cadastrado. <br>' . 'Acesse seu email e confira!</h3>';
     echo '<div class="alerta" style="width: 250px;"> <img src="view/tema/images/cadastro_ok.gif" style="width: 100%;"> </div>';

     Rotas::Redirecionar(3, Rotas::pag_FornecedorLogin());

}else{
	$smarty->display('cadastro_fornecedor.tpl');

}





 ?>