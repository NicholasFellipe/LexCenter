<?php

// objeto do template
$smarty = new Template();
// crio o objeto de produtos
$gravar = new DepoimentosAprovados();

// pegando o produto atual
$depoimentos = new DepoimentosAprovados();

// verifica se tem o post de apagar o produto 
if (isset($_POST['dep_apagar']) && isset($_POST['dep_id_apagar']) && $_POST['dep_apagar'] == 'SIM'):

    if ($gravar->Apagar($_POST['dep_id_apagar'])):

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
                       Depoimento deletado!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';

        // apagar a imagem do produto 
        @unlink($_POST['dep_img_arquivo']);

        // volta para a listagem de produtos 
        Rotas::Redirecionar(2, Rotas::pag_DepoimentosADM());
    endif;

    exit();
endif;

// se existe o post do produto para adicinar / editar 
if (isset($_POST['dep_nomealuno'])):
    $dep_nomealuno = $_POST['dep_nomealuno'];
    $dep_concurso = $_POST['dep_concurso'];
    $dep_img = $_FILES['dep_img']['name'];
    $dep_depoimento = $_POST['dep_depoimento'];
    $dep_id = $_POST['dep_id'];

    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
    if (!empty($_FILES['dep_img']['name'])):
        $upload = new ImageUpload();

        if ($upload->Upload(900, 'dep_img')):

            $dep_img = $upload->retorno;
            // apagando a imagem antiga
            @unlink($dep_img_arquivo);

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
        $dep_img = $_POST['dep_img_atual'];
    endif;

    // grando o novo produto no banco 
    // chamo o método que prepara os campos 
    $gravar->Preparar($dep_nomealuno, $dep_concurso, $dep_img, $dep_depoimento);

// executo a gravação
    /// caso a gravação seja OK redireciona    
    if ($gravar->Alterar($dep_id)):

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
                       Depoimentos editado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
    Rotas::Redirecionar(2, Rotas::pag_DepoimentosADM());
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
                      Ocorreu algum erro!
                        </h3>
                        '.Sistema::VoltarPagina().'
                    </div>   
                </div>
            </div>
        </div>';
        exit();
    endif;
endif;

$id = (int) $_POST['dep_id'];
$depoimentos->GetDepoimentosID($id);

// passando variaveis para o template
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_DEPOIMENTOS', Rotas::pag_DepoimentosADM());
$smarty->assign('PRO', $depoimentos->GetItens());

//var_dump($depoimentos->GetItens());
// chamo o template 
$smarty->display('adm_depoimentos_editar.tpl');