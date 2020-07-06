<?php


// chamo a classe  do template
$smarty =  new Template();
// passo valores para o meu template 
// chamo o template
$smarty->assign('PAG_POLITICA_DEVOLUCAO', Rotas::pag_Politica_de_Devolucao());
$smarty->display('termos_e_condicoes.tpl');

