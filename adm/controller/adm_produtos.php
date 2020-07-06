<?php
// chamo o objeto template
$smarty =  new Template();
// objeto produtos
$produtos = new Produtos();
       
     
                // verifico se passei ID da categoria se passei mostro itens da categoria
                if(isset(Rotas::$pag[1])):

                    $produtos->GetProdutosCate((int)Rotas::$pag[1]);

                else:
                    // se nao passei mostro  tudo
                    $produtos->GetProdutos();

                endif;

  

 ///echo $produtos->GetItens()['pro_nome'];
        
// passo variavies para o template TPL        
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());

$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('PAG_PRODUTO_NOVO', Rotas::pag_ProdutosNovoADM());
$smarty->assign('PAG_PROVAS_ANTERIORES_NOVO', Rotas::pag_Provas_AnterioresNovoADM());
$smarty->assign('PAG_ALUNOS_APROVADOS_NOVO', Rotas::pag_Alunos_AprovadosNovoADM());
$smarty->assign('PAG_PRODUTO_EDITAR', Rotas::pag_ProdutosEditarADM());
$smarty->assign('PAG_PRODUTO_IMG', Rotas::pag_ProdutosImgADM());
$smarty->assign('PAG_BLOG_NOVO', Rotas::pag_BlogNovoADM());



//echo Rotas::get_ImageURL();


// carregando o template 
$smarty->display('adm_produtos.tpl');


