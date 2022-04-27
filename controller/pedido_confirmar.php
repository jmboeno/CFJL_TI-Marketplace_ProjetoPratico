<?php

if(isset($_SESSION['PRO'])) {


	if(!isset($_POST['frete_radio'])){
		Rotas::Redirecionar(4, Rotas::pag_Carrinho().'#dadosfrete');
		exit ('<h3 class="alerta pulse"> Selecione o frete! </h3>');
	}


	$smarty = new Template();

	$carrinho = new Carrinho();



	$smarty->assign('PRO', $carrinho->GetCarrinho());

	$_SESSION['PED']['frete'] = $_POST['frete_radio'];
	$_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio']+ $carrinho->GetTotal());

	
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
	$smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));

	$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
	$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
	$smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());


	$smarty->display('pedido_confirmar.tpl');

}else{
	echo '<h3 class="alerta pulse"> Não possui produtos no carrinho! </h3>';
	echo '<div class="alerta" style="width: 250px;"> <img src="view/tema/images/carrinho_vazio.gif" style="width: 100%;"> </div>';

	Rotas::Redirecionar(4, Rotas::pag_Produtos());
}

 ?>