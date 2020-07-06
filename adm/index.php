<?php
// verifo  se iniciou a ssesão
if(!isset($_SESSION)):
    session_start();
endif;
// setando o meu timezone
date_default_timezone_set('America/Sao_Paulo');
// carrego o auto load
require '../lib/autoload.php';
/// verifico se o ADM está LOGADO
if(!Login::LogadoADM()):   
    Rotas::Redirecionar(1, 'login.php');
     exit('<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Aviso!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="text-danger">
                      Acesso negado!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>');
endif;
// chamo a classe  do template
$smarty =  new Template();
// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
// passo valores para o meu template 
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
//PAGINA DE HOME DO ADMINISTRADOR
$smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());
//PAGINA DE ADIMINISTRADOR DO CLIENTE - MOSTRA TODOS OS CLIENTES
$smarty->assign('PAG_ADM_CLIENTE', Rotas::pag_ClientesADM());
$smarty->assign('PAG_ADM_PEDIDOS', Rotas::pag_PedidosADM());
//PAGINA DE CATEGORIAS - MOSTRA TODAS AS CATEGORIAS
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_CategoriasADM());
//PAGINA DE PRODUTOS - MOSTRA TODOS OS PRODUTOS
$smarty->assign('PAG_ADM_PRODUTOS', Rotas::pag_ProdutosADM());
//PAGINA DO BANNER - MONTRA TODOS OS BANNERS
$smarty->assign('PAG_ADM_BANNER', Rotas::pag_BannerADM());
//PAGINA DE DATAS IMPORTANTES - MOSTRA TODAS AS DATAS IMPORTANTES
$smarty->assign('PAG_ADM_DATAS_IMPORTANTES', Rotas::pag_DatasImportantesADM());
//PAGINA DE D EPOIMENTOS- MOSTRA TODOS OS DEPOIMENTOS DOS ALUNOS APROVADOS
$smarty->assign('PAG_ADM_DEPOIMENTOS', Rotas::pag_DepoimentosADM());
//PAGINA DE PROFESSORES - MOSTRA TODOS OS PROFESSORES
$smarty->assign('PAG_ADM_PROFESSORES', Rotas::pag_ProfessoresADM());
//PAGINA DE MATERIAIS DO DIA - MOSTRA TODOS OS PROFESSORES
$smarty->assign('PAG_ADM_MATERIA_DO_DIA', Rotas::pag_MateriaDoDiaADM());
//PAGINA DE PROFESSORES - MOSTRA TODOS OS PROFESSORES
$smarty->assign('PAG_ADM_PROFESSORES', Rotas::pag_ProfessoresADM());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::LogadoADM());
//PAGINA DE LOGOFF - FAZ O LOGOFF NA CONTA DE USUARIO ADM
$smarty->assign('PAG_LOGOFF', Rotas::get_SiteADM() .'/logoff');
//PAGINA DE SENHA - PARA TROCAR DE SENHA
$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() .'/adm_senha');
$smarty->assign('USER', $_SESSION['ADM']['user_nome']);    
$smarty->assign('DATA', $_SESSION['ADM']['user_data']);    
$smarty->assign('HORA', $_SESSION['ADM']['user_hora']);   
// chamo o template
$smarty->display('adm_index.tpl');