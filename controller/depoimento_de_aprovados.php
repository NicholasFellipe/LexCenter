<?php
// chamo o objeto template
$smarty = new Template();
// objeto PROFESSORES
$prof = new DepoimentosAprovados();
$prof->GetDepoimentosALL();
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('DEPOIMENTOS', $prof->GetItens());
$smarty->assign('PRO_TOTAL', $prof->TotalDados());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
// chamo o template
$smarty->display('depoimento_de_aprovados.tpl');
