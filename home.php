<?php
// verifo  se iniciou a ssesão
if (!isset($_SESSION)):
    session_start();
endif;
// setando o meu timezone
date_default_timezone_set('America/Sao_Paulo');

// carrego o auto load
require './lib/autoload.php';

$smarty = new Template();
// objeto produtos
$produtos = new Produtos();
//Carrega os links da categoria Blog do Concurseiro
$smarty->assign('BLOG', $produtos->GetItens($produtos->GetBlogDoConcurseiro()));
$smarty->assign('PROVAS', $produtos->GetItens($produtos->GetProvasAnteriores()));
$smarty->assign('PRO', $produtos->GetItens());
//Link que vai ate a descricao do concurso / Informaçoes do Concurso
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
//carrega os links da categoria de Concursos Publicos 
$smarty->assign('PRO_REC', $produtos->GetItens($produtos->GetProdutosRecomendados()));
//Link para ir ate a descricao do Blog / Informacoes do Blog
$smarty->assign('BLOG_INFO', Rotas::pag_BlogInfo());
//Link para ir ate depoimento de Aprovados

// objeto professores
$prof = new Professores();
$prof->GetProfessores();
// Carrega o Carousel dos Professores
$smarty->assign('PROFESSORES', $prof->GetProfessoresCarousel());
//Link da pagina home do site
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

$smarty->assign('PROF', $prof->GetItens());
$smarty->assign('PRO_TOTAL', $prof->TotalDados());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_Categorias());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$banner = new Banner();
$banner->GetBanner();
// Carrega o Carousel dos Professores
$smarty->assign('BANNER', $banner->GetBanner());
$smarty->assign('BANNER', $banner->GetItens());
$smarty->assign('PRO_TOTAL', $banner->TotalDados());

////Objeto DatasImportantes
$datas = new InscricoesAbertas();
$datas->GetDatasALL();
$smarty->assign('INSCRICOES', $datas->GetItens());

$smarty->assign('DATA_ATUAL', Sistema::DataAtualBR());

if (Login::Logado()):
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
endif;
// chamo o template
$smarty->display('home.tpl');