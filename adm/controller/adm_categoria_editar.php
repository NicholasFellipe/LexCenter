<?php

// objeto do template
$smarty = new Template();
// crio o objeto de produtos
$gravar = new Categorias();

// pegando o produto atual
$cate = new Categorias();

// verifica se tem o post de apagar o produto 
if (isset($_POST['cate_apagar']) && isset($_POST['cate_id_apagar']) && $_POST['cate_apagar'] == 'SIM'):

    if ($gravar->Apagar($_POST['cate_id_apagar'])):

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
                      Categoria deletada!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';

        // apagar a imagem do produto 
        @unlink($_POST['cate_img_arquivo']);

        // volta para a listagem de produtos 
        Rotas::Redirecionar(2, Rotas::pag_CategoriasADM());
    endif;

    exit();
endif;

// se existe o post do produto para adicinar / editar 
if (isset($_POST['cate_nome'])):
    $cate_nome = $_POST['cate_nome'];
    $cate_img = $_FILES['cate_img']['name'];
    $cate_slug = $_POST['cate_slug'];
    $cate_id = $_POST['cate_id'];
// echo '<pre>';
// var_dump($_POST);
//echo '</pre>';
    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
    if (!empty($_FILES['cate_img']['name'])):
        $upload = new ImageUpload();

        if ($upload->Upload(900, 'cate_img')):

            $cate_img = $upload->retorno;
            // apagando a imagem antiga
            @unlink($cate_img_arquivo);

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
        $cate_img = $_POST['cate_img_atual'];
    endif;

    // grando o novo produto no banco 
    // chamo o método que prepara os campos 
    $cate->Preparar($cate_nome, $cate_img, $cate_slug);

// executo a gravação
    /// caso a gravação seja OK redireciona    
    if ($cate->Alterar($cate_id)):

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
                       Categoria editada com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
     Rotas::Redirecionar(2, Rotas::pag_CategoriasADM());
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

// echo '<pre>';
//print_r($_POST);
//  echo '</pre>';

endif;

$id = (int) $_POST['cate_id'];
$cate->GetCeteID($id);

// passando variaveis para o template

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CATE', Rotas::pag_CategoriasADM());
$smarty->assign('PRO', $cate->GetItens());


//var_dump($produtos->GetItens());
// chamo o template 
$smarty->display('adm_categoria_editar.tpl');
