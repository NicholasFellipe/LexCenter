<?php


// carrego o auto load
require './lib/autoload.php';

// chamo a classe  do template
$smarty =  new Template();
// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();


$smarty->assign('PAG_POLITICA_DEVOLUCAO', Rotas::pag_Politica_de_Devolucao());
$smarty->assign('PAG_POLITICA_PRIVACIDADE', Rotas::pag_Politica_de_Privacidae());
$smarty->assign('PAG_SISTEMA_COBRANCA', Rotas::pag_Sistema_Cobranca());
$smarty->assign('PAG_LOGIN', Rotas::pag_ClienteLogin());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
// chamo o template
$smarty->display('perguntas_frequentes.tpl');

