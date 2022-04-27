<?php 

$smarty = new Template();
$smarty->assign('PAG_LOGIN', Rotas::pag_ClienteLogin());

$cliente = new Clientes();

if(isset($_POST['cli_email'])){
	$cliente->setCli_email($_POST['cli_email']);

	if($cliente->GetClienteEmail($cliente->getCli_email()) > 0){
		$novasenha = Sistema::GerarSenha();
		$cliente->SenhaUpdate($novasenha, $cliente->getCli_email());

		//enviar o email para o cliente
		$email = new EnviarEmail();
     	$assunto = 'Nova Senha - ' . Config::SITE_NOME;
     	$msg = "Olá cliente, uma nova senha foi solicitada por você, acesse o site: " . Config::SITE_NOME;
     	$msg .= "<br> Nova Senha =  " . $novasenha;
	 	$destinatarios = array($cliente->getCli_email(), Config::SITE_EMAIL_ADM);
     	$email->Enviar($assunto, $msg, $destinatarios);

     	echo '<h3 class="alerta pulse"> Uma nova senha foi enviada ao seu Email! </h3>';
		echo '<div class="alerta" style="width: 250px;"><img src="view/tema/images/produto_inserido.gif" style="width: 100%;"></div>';
     	Rotas::Redirecionar(3, Rotas::pag_ClienteLogin());


	}else{
		echo '<h3 class="alerta pulse"> Email não cadastrado! </h3>';
		echo '<div class="alerta" style="width: 250px;"><img src="view/tema/images/alerta.gif" style="width: 100%;"></div>';
		Rotas::Redirecionar(3, Rotas::pag_ClienteRecovery());
	}

}else{
	$smarty->display('clientes_recovery.tpl');
}




 ?>