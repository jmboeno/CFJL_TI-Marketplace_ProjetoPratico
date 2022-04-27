<?php 

$smarty = new Template();


$fornecedores = new Fornecedores();
$fornecedores->GetFornecedores();

$smarty->assign('FORNECEDORES', $fornecedores->GetItens());
$smarty->assign('PAG_FORNECEDOR_NOVO', Rotas::pag_FornecedoresNovoADM());
$smarty->assign('PAG_EDITAR_FORNECEDOR', Rotas::pag_FornecedoresEditarADM());
$smarty->assign('PAG_PRODUTOS_FORNECEDOR', Rotas::pag_FornecedoresProdutosADM());

$smarty->display('adm_fornecedores.tpl');

?>