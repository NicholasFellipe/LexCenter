<?php

// objeto do template
$smarty = new Template();
// crio o objeto de produtos
$gravar = new Banner();

// pegando o produto atual
$produtos = new Banner();

// verifica se tem o post de apagar o produto 
if (isset($_POST['ban_apagar']) && isset($_POST['ban_id_apagar']) && $_POST['ban_apagar'] == 'SIM'):

    if ($gravar->Apagar($_POST['ban_id_apagar'])):

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
                       Banner deletado!
                        </h3>
                    </div>   
                </div>
            </div>
        </div> ';

        // apagar a imagem do produto 
        @unlink($_POST['ban_img_arquivo']);

        // volta para a listagem de produtos 
        Rotas::Redirecionar(2, Rotas::pag_BannerADM());
    endif;

    exit();
endif;

// se existe o post do produto para adicinar / editar 
if (isset($_POST['ban_nomeconcurso'])):
    $ban_nomeconcurso = $_POST['ban_nomeconcurso'];
    $ban_descricao = $_POST['ban_descricao'];
    $ban_img = $_FILES['ban_img']['name'];
    $ban_linkcurso = $_POST['ban_linkcurso'];
    $ban_id = $_POST['ban_id'];
// echo '<pre>';
// var_dump($_POST);
//echo '</pre>';
    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
    if (!empty($_FILES['ban_img']['name'])):
        $upload = new ImageUpload();

        if ($upload->Upload(900, 'ban_img')):

            $ban_img = $upload->retorno;
            // apagando a imagem antiga
            @unlink($ban_img_arquivo);

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
        $ban_img = $_POST['ban_img_atual'];
    endif;

    // grando o novo produto no banco 
    // chamo o método que prepara os campos 
    $gravar->Preparar($ban_nomeconcurso, $ban_descricao, $ban_img, $ban_linkcurso);

// executo a gravação
    /// caso a gravação seja OK redireciona    
    if ($gravar->Alterar($ban_id)):

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
                       Banner editado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
     Rotas::Redirecionar(2, Rotas::pag_BannerADM());
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
        </div> ';

        exit();
    endif;

// echo '<pre>';
//print_r($_POST);
//  echo '</pre>';

endif;

$id = (int) $_POST['ban_id'];
$produtos->GetBannerID($id);

// passando variaveis para o template

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_BANNER', Rotas::pag_BannerADM());
$smarty->assign('PRO', $produtos->GetItens());


//var_dump($produtos->GetItens());
// chamo o template 
$smarty->display('adm_banner_editar.tpl');
