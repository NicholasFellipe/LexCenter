<?php

// chamo o objeto template
$smarty = new Template();
// objeto produtos
$produtos = new Produtos();
// verifico se passei ID da categoria se passei mostro itens da categoria
if (isset(Rotas::$pag[1])):
    $produtos->GetProdutosCate((int) Rotas::$pag[1]);
else:
    // se nao passei mostro  tudo
    $produtos->GetProdutos();
//ORDENACAO DE AZ
//$smarty->assign('PRODUTOAZ', $produtos->GetProdutosCateAZ($id));
endif;
///echo $produtos->GetItens()['pro_nome'];
// passo variavies para o template TPL    
$categorias = new Categorias();
$categorias->GetItens();

$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('CATEGORIAS', $categorias->GetCategorias());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_Categorias());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('BLOG_INFO', Rotas::pag_BlogInfo());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('PAGINAS_BLOG', $produtos->ShowPaginacao());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
$smarty->assign('PAG_PROD', Rotas::pag_Categorias());
//$smarty->assign('REDIRECIONAR', Rotas::Redirecionar(1, Rotas::pag_Produtos()));
if ($produtos->TotalDados() < 1):
    Rotas::Redirecionar(1, Rotas::pag_Categorias());
endif;
//echo Rotas::get_ImageURL();
// chamo o template
$smarty->display('categorias.tpl');
//echo '<pre>';
//echo '</pre>';