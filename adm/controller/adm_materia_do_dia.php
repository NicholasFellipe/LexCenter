<?php
// chamando o objeto do template 
$smarty = new Template();

// objeto da classe clientes
$materias= new MateriaDoDia();

// buscar todos os clientes
$materias->GetMateriaDoDiaALL();

// passando variaveis para o template 
$smarty->assign('DATAS', $materias->GetItens());
$smarty->assign('PAG_NOVO_MATERIAL', Rotas::pag_MateriaDoDiaNovoADM());
$smarty->assign('PAG_EDITAR_MATERIAL', Rotas::pag_MateriaDoDiaEditarADM());

// carregando o template 
$smarty->display('adm_materia_do_dia.tpl');