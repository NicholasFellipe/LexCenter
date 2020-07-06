<?php

// objeto do template
$smarty = new Template();
// crio o objeto de produtos
$gravar = new Professores();

// pegando o produto atual
$prof = new Professores();

// verifica se tem o post de apagar o produto 
if (isset($_POST['prof_apagar']) && isset($_POST['prof_id_apagar']) && $_POST['prof_apagar'] == 'SIM'):

    if ($gravar->Apagar($_POST['prof_id_apagar'])):

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
                        Professor deletado!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';

        // apagar a imagem do produto 
        @unlink($_POST['prof_img_arquivo']);

        // volta para a listagem de produtos 
        Rotas::Redirecionar(1, Rotas::pag_ProfessoresADM());
    endif;

    exit();
endif;

// se existe o post do produto para adicinar / editar 
if (isset($_POST['prof_nome'])):
    $prof_nome = $_POST['prof_nome'];
    $prof_img = $_FILES['prof_img']['name'];
    $prof_disciplina = $_POST['prof_disciplina'];
    $prof_facebook = $_POST['prof_facebook'];
    $prof_id = $_POST['prof_id'];
// echo '<pre>';
// var_dump($_POST);
//echo '</pre>';
    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
    if (!empty($_FILES['prof_img']['name'])):
        $upload = new ImageUpload();

        if ($upload->Upload(900, 'prof_img')):

            $prof_img = $upload->retorno;
            // apagando a imagem antiga
            @unlink($prof_img_arquivo);

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
        $prof_img = $_POST['prof_img_atual'];
    endif;

    // grando o novo produto no banco 
    // chamo o método que prepara os campos 
    $gravar->Preparar($prof_nome, $prof_img, $prof_disciplina, $prof_facebook);

// executo a gravação
    /// caso a gravação seja OK redireciona    
    if ($gravar->Alterar($prof_id)):

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
                       Professor atualizado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
     Rotas::Redirecionar(2, Rotas::pag_ProfessoresADM());
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
                        <h3 class="text-success">
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

$id = (int) $_POST['prof_id'];
$prof->GetProfessoresID($id);

// passando variaveis para o template

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());

$smarty->assign('PAG_PROFESSORES', Rotas::pag_ProfessoresADM());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PROFESSORES', $prof->GetItens());


//var_dump($produtos->GetItens());
// chamo o template 
$smarty->display('adm_professores_editar.tpl');
