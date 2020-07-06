<?php

// objeto template
$smarty = new Template();

//objeto produtos
$produtos = new Produtos();
// metodo que pega o produtos pelo ID
$produtos->GetProdutosID((int) Rotas::$pag[1]);



// passo variavies para o template TPL    
$categorias = new Categorias();
$categorias->GetCategorias();
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
// passo  variaveis para o template
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('ALEATORIO', $produtos->GetItens($produtos->GetProdutosAleatorio()));
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('ITE', $produtos->GetProdutos());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_Categorias());

// objeto PROFESSORES
$prof = new Professores();
$prof->GetProfessores();
$smarty->assign('PROFE', $prof->GetProfessoresCarousel());
$smarty->assign('PROF', $prof->GetItens());
$smarty->assign('PROFESSOR_TOTAL', $prof->TotalDados());
$item = $produtos->GetItens();
//echo '<pre>';
//var_dump($item);
//foreach($item as $row){
//   echo "\n";
//    echo implode(',',$row)."\n";
//}
//echo '</pre>';
// chamo o template 
$smarty->display('concursos_info.tpl');