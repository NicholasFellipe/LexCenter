<?php
// chamando o objeto do template 
$smarty = new Template();

// objeto da classe clientes
$datas= new InscricoesAbertas();

// buscar todos os clientes
$datas->GetDatasALL();

// passando variaveis para o template 
$smarty->assign('DATAS', $datas->GetItens());
$smarty->assign('PAG_NOVO_DATAS', Rotas::pag_DatasImportantesNovoADM());
$smarty->assign('PAG_EDITAR_DATAS', Rotas::pag_DatasImportantesEditarADM());

// carregando o template 
$smarty->display('adm_inscricoes_abertas.tpl');