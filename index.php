<?php

//// Desativa toda exibição de erros
//error_reporting(0);
//
//// Exibe erros simples
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//
//// Exibir E_NOTICE também pode ser bom para mostrar variáveis não iniciadas..
//// ou com erros de digitação.
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//
//// Exibe todos os erros, exceto E_NOTICE
//error_reporting(E_ALL & ~E_NOTICE);
//
//// Exibe todos os erros PHP (see changelog)
//error_reporting(E_ALL);
//
//// Exibe todos os erros PHP
//error_reporting(-1);
//
//// Mesmo que error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);

// verifo  se iniciou a ssesão
if (!isset($_SESSION)):
    session_start();
endif;
// setando o meu timezone
date_default_timezone_set('America/Sao_Paulo');

// carrego o auto load
require './lib/autoload.php';
// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();

$smarty = new Template();
// objeto produtos
$produtos = new Produtos();
// verifico se passei ID da categoria se passei mostro itens da categoria
if (isset(Rotas::$pag[1])):
    $produtos->GetProdutosCate((int) Rotas::$pag[1]);
else:
    // se nao passei mostro  tudo
    $produtos->GetProdutosRecomendados();
endif;

$smarty->assign('PRO_REC', $produtos->GetItens());
// passo valores para o meu template 
$smarty->assign('H2', 'Adriano Souza -  adrianosites.com.br');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

//Link para ir ate depoimento de Aprovados

$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CLIENTE_CONTA', Rotas::pag_ClienteConta());
$smarty->assign('PAG_PROFESSORES', Rotas::pag_Professores());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Categorias());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('PAG_LOGIN', Rotas::pag_ClienteLogin());
$smarty->assign('PAG_PESQUISA', Rotas::pag_Pesquisa());
$smarty->assign('PAG_TERMOS_SITE', Rotas::pag_Termos_e_condicoes());
$smarty->assign('PAG_POLITICA_DEVOLUCAO', Rotas::pag_Politica_de_Devolucao());
$smarty->assign('PAG_POLITICA_PRIVACIDADE', Rotas::pag_Politica_de_Privacidae());
$smarty->assign('PAG_FAQ', Rotas::pag_Perguntas_Frequentes());



if (Login::Logado()):
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
endif;
$smarty->display('index.tpl');