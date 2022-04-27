<?php

if(!Login::Logado()){
	Login::AcessoNegado();
	Rotas::Redirecionar(4, Rotas::pag_ClienteLogin());
}else{
	if(isset($_SESSION['PRO'])) {


	if(!isset($_SESSION['PED']['frete'])){
		Rotas::Redirecionar(4, Rotas::pag_Carrinho().'#dadosfrete');
		exit ('<h3 class="alerta pulse"> Selecione o frete! </h3>');
	}	



	$smarty = new Template();

	$carrinho = new Carrinho();


		$ref_cod_pedido = date('ymdHms') . $_SESSION['CLI']['cli_id'];

		if(!isset($_SESSION['PED']['pedido'])){
			$_SESSION['PED']['pedido'] = $ref_cod_pedido;
		}

		if(!isset($_SESSION['PED']['ref'])){
			$_SESSION['PED']['ref'] = $ref_cod_pedido;
		}

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('NOME_CLIENTE', $_SESSION['CLI']['cli_nome']);
	$smarty->assign('SITE_NOME', Config::SITE_NOME);
	$smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
	$smarty->assign('PAG_MINHA_CONTA', Rotas::pag_CLientePedidos());
	
	$smarty->assign('TEMA', Rotas::get_SiteTEMA());

	$smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
	$smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));


	$pedido = new Pedidos();
	$cliente = $_SESSION['CLI']['cli_id'];
	$cod = $_SESSION['PED']['pedido'];
	$ref = $_SESSION['PED']['ref'];
	$frete = $_SESSION['PED']['frete'];

	$email = new EnviarEmail();

	$assunto = 'Pedido efetuado com sucesso!- ' . Sistema::DataAtualBR();
	$msg = $smarty->fetch('email_compra.tpl');
	$destinatarios = array($_SESSION['CLI']['cli_email']);
	$email->Enviar($assunto, $msg, $destinatarios);

	$assunto = 'Seu fornecedor tem um novo pedido!';
    $msg = 'Seu fornecedor tem um novo pedido!';//$smarty->fetch('email_compra_adm.tpl');
    $destinatarios = array(Config::SITE_EMAIL_ADM);
    $email->Enviar($assunto, $msg, $destinatarios);


    $fornecedores = new Fornecedores();
	$lista = $carrinho->GetCarrinho();
	for($i=1; $i<=count($_SESSION['PRO']); $i++){
		(int)$forn_id = $lista[$i]['pro_fornecedor'];
		$lista_emails = array($fornecedores->GetFornecedoresID($forn_id), $fornecedores->GetItens());
		$produto_atual = $carrinho->GetCarrinho()[$i]['pro_nome'];
		$valor_atual = $carrinho->GetCarrinho()[$i]['pro_valor'];
		$qtd_atual = $carrinho->GetCarrinho()[$i]['pro_qtd'];
		$total_atual = $carrinho->GetCarrinho()[$i]['pro_subTotal'];
		$email_atual = $lista_emails[1][1]['forn_email'];
		$assunto = 'Você tem um novo pedido!';
    	$msg = '<h2>Olá ' .  $lista_emails[1][1]['forn_nome'] . " !</h2><br>" . 
		       '<h3>' . $_SESSION['CLI']['cli_nome'] . ' acabou de realizar um pedido! </h3><br>' .
		       '<table style="border: 1px solid black;">' .
			   		'<tr>' . 
			   			'<th style="border: 1px solid black;">Produto</th>' .
			   			'<th style="border: 1px solid black;">Valor</th>' .
			   			'<th style="border: 1px solid black;">Quantidade</th>' .
			   			'<th style="border: 1px solid black;">Total</th>' .
			   		'</tr>' .
			   		'<tr>' .
			   			'<td style="border: 1px solid black;">' . $produto_atual . '</td>' .
			   			'<td style="border: 1px solid black;">' . $valor_atual . '</td>' .
			   			'<td style="border: 1px solid black;">' . $qtd_atual . '</td>' .
			   			'<td style="border: 1px solid black;">' . $total_atual . '</td>' .
			   		'</tr>'.
			   '</table>';
			   //$smarty->fetch('email_compra_fornecedor.tpl');
    	$destinatarios = array($email_atual);
    	$email->Enviar($assunto, $msg, $destinatarios);
	}

	if($pedido->PedidoGravar($cliente, $cod, $ref, $frete)){
		$pedido->LimparSessoes();
	}


	$smarty->display('pedido_finalizar.tpl');


}else{
	echo '<h3 class="alerta pulse"> Não possui produtos no carrinho! </h3>';
	echo '<div class="alerta" style="width: 250px;"> <img src="view/tema/images/carrinho_vazio.gif" style="width: 100%;"> </div>';
	Rotas::Redirecionar(4, Rotas::pag_Produtos());
}

}
 ?>