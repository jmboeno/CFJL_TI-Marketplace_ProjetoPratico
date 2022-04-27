<?php



if(isset($_SESSION['PRO'])) {

	$smarty = new Template();
	$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

	$carrinho = new Carrinho();

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
	$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
	$smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
	$smarty->assign('PESO', number_format($carrinho->GetPeso(),3,'.',''));

	$fornecedores = new Fornecedores();
	$lista = $carrinho->GetCarrinho();
	//for($i=1; $i<=count($_SESSION['PRO']); $i++){
	//	(int)$forn_id = $lista[$i]['pro_fornecedor'];
	//	$lista_emails = array($fornecedores->GetFornecedoresID($forn_id), $fornecedores->GetItens());
	//	$email_atual = $lista_emails[1][1]['forn_email'];
	//}

	$smarty->display('carrinho.tpl');


}else{
	echo '<h3 class="alerta pulse"> Não possui produtos no carrinho! </h3>';
	echo '<div class="alerta" style="width: 250px;"> <img src="view/tema/images/carrinho_vazio.gif" style="width: 100%;"> </div>';

	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}

/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
 ?>