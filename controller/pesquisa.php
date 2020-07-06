<?php

// chamo o objeto template
$smarty = new Template();

$pesquisa = $_POST['pesquisar'];
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
        $categorias = new Categorias();
        $categorias->GetCategorias();
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('RESULTADO', $produtos->GetPesquisa($pesquisa)); 
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
//$smarty->display('pesquisa.tpl');
