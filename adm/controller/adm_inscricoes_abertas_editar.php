<?php

// objeto do template
$smarty = new Template();
// crio o objeto de produtos
$gravar = new InscricoesAbertas();

// pegando o produto atual
$datas = new InscricoesAbertas();

// verifica se tem o post de apagar o produto 
if (isset($_POST['ins_apagar']) && isset($_POST['ins_id_apagar']) && $_POST['ins_apagar'] == 'SIM'):

    if ($gravar->Apagar($_POST['ins_id_apagar'])):

        echo '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Aviso!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="text-warning">
                      Datas Importantes deletada!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';

        // apagar a imagem do produto 
        @unlink($_POST['ins_img_arquivo']);

        // volta para a listagem de produtos 
        Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
    endif;

    exit();
endif;

// se existe o post do produto para adicinar / editar 
if (isset($_POST['ins_nome'])):
    $ins_nome = $_POST['ins_nome'];
    $ins_img = $_FILES['ins_img']['name'];
    $ins_dataini = $_POST['ins_dataini'];
    $ins_datafim = $_POST['ins_datafim'];
    $ins_linkinscricao = $_POST['ins_linkinscricao'];
    $ins_id = $_POST['ins_id'];
// echo '<pre>';
// var_dump($_POST);
//echo '</pre>';
    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
    if (!empty($_FILES['ins_img']['name'])):
        $upload = new ImageUpload();

        if ($upload->Upload(900, 'ins_img')):

            $ins_img = $upload->retorno;
            // apagando a imagem antiga
            @unlink($ins_img_arquivo);

        else:
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
                       Erro no envio da imagem!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>');
        endif;
    else:
        // se nao passou  uma nova IMG usa a mesma que ja existe  
        $ins_img = $_POST['ins_img_atual'];
    endif;

    // grando o novo produto no banco 
    // chamo o método que prepara os campos 
    $gravar->Preparar($ins_nome, $ins_img, $ins_dataini, $ins_datafim, $ins_linkinscricao);

// executo a gravação
    /// caso a gravação seja OK redireciona    
    if ($gravar->Alterar($ins_id)):

        echo '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Aviso!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="text-success">
                       Inscrições Abertas atualizada com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
    Rotas::Redirecionar(2, Rotas::pag_DatasImportantesADM());
    // caso não, mostra  o erro
    else:

        echo '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                       Ocorreu Algum Erro!
                       '.Sistema::VoltarPagina().'
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
        exit();
    endif;

// echo '<pre>';
//print_r($_POST);
//  echo '</pre>';

endif;

$id = (int) $_POST['ins_id'];
$datas->GetDatasID($id);

// passando variaveis para o template
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_DATAS', Rotas::pag_DatasImportantesADM());
$smarty->assign('PRO', $datas->GetItens());
//echo '<pre>';
//print_r($datas->GetItens());
//echo '</pre>';
// chamo o template 
$smarty->display('adm_inscricoes_abertas_editar.tpl');
