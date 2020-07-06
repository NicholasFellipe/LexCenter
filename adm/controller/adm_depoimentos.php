<?php
// chamando o objeto do template 
$smarty = new Template();

// objeto da classe clientes
$depoimentos = new DepoimentosAprovados();

// buscar todos os clientes
$depoimentos->GetDepoimentosALL();

// passando variaveis para o template 
$smarty->assign('DEPOIMENTOS', $depoimentos->GetItens());
$smarty->assign('PAG_NOVO_DEPOIMENTOS', Rotas::pag_DepoimentosNovoADM());
$smarty->assign('PAG_EDITAR_DEPOIMENTOS', Rotas::pag_DepoimentosEditarADM());

// carregando o template 
$smarty->display('adm_depoimentos.tpl');