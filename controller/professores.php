<?php

// chamo o objeto template
$smarty = new Template();
// objeto PROFESSORES
$prof = new Professores();
$prof->GetProfessores();
$smarty->assign('PROFESSORES', $prof->GetProfessoresCarousel());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PRO', $prof->GetItens());
$smarty->assign('PRO_TOTAL', $prof->TotalDados());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
// chamo o template
$smarty->display('professores.tpl');
