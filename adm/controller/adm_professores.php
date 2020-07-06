<?php
// chamando o objeto do template 
$smarty = new Template();

// objeto da classe clientes
$professores = new Professores();

// buscar todos os clientes
$professores->GetProfessores();

// passando variaveis para o template 
$smarty->assign('PROFESSORES', $professores->GetItens());
$smarty->assign('PAG_NOVO_PROFESSORES', Rotas::pag_ProfessoresNovoADM());
$smarty->assign('PAG_EDITAR_PROFESSORES', Rotas::pag_ProfessoresEditarADM());

// carregando o template 
$smarty->display('adm_professores.tpl');