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

$smarty->assign('BLOG', $produtos->GetItens());
//Link para ir ate a descricao do Blog / Informacoes do Blog
$smarty->assign('BLOG_INFO', Rotas::pag_BlogInfo());

$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_Categorias());
// passo  variaveis para o template
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('ITE', $produtos->GetProdutos());
$smarty->assign('TEMA', Rotas::get_SiteTEMA());

$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$item = $produtos->GetItens();
$smarty->assign('SITE_NOME', Config::SITE_NOME);

$smarty->assign('ALEATORIO_BLOG', $produtos->GetItens($produtos->GetBlogDoConcurseiroRECOMENDADO()));
//echo '<pre>';
//var_dump($item);
//foreach($item as $row){
//   echo "\n";
//    echo implode(',',$row)."\n";
//}
//echo '</pre>';
// chamo o template 
$smarty->display('blog_info.tpl');