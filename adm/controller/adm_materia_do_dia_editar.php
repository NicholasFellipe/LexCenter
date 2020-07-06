<?php

// objeto do template
$smarty = new Template();
// crio o objeto de produtos
$gravar = new MateriaDoDia();

// pegando o produto atual
$datas = new MateriaDoDia();
// verifica se tem o post de apagar o produto 
if (isset($_POST['mat_apagar']) && isset($_POST['mat_id_apagar']) && $_POST['mat_apagar'] == 'SIM'):

    if ($gravar->Apagar($_POST['mat_id_apagar'])):

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
                       Material do Dia deletado!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';     

        // volta para a listagem de produtos 
        Rotas::Redirecionar(2, Rotas::pag_MateriaDoDiaADM());
    endif;

    exit();
endif;


// se existe o post do produto para adicinar / editar 
if (isset($_POST['mat_nome'])):
    $mat_nome = $_POST['mat_nome'];
   $mat_disciplina = $_POST['mat_disciplina'];
    $mat_descricao = $_POST['mat_descricao'];
    $mat_arquivo = $_FILES['mat_arquivo']['name'];
    $mat_data = $_POST['mat_data'];
    $mat_id = $_POST['mat_id'];
// echo '<pre>';
// var_dump($_POST);
//echo '</pre>';
    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
if (!empty($_FILES['mat_arquivo']['name'])):
        $upload = new ImageUpload();

        if ($upload->UploadArquivo('mat_arquivo')):

            $mat_arquivo = $upload->retorno;
            // apagando a imagem antiga
            @unlink($mat_arquivo_arquivo);

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
        $mat_arquivo = $_POST['mat_arquivo_atual'];
    
    endif;

    // grando o novo produto no banco 
    // chamo o método que prepara os campos 
    $gravar->Preparar($mat_nome, $mat_disciplina, $mat_descricao, $mat_arquivo, $mat_data);

// executo a gravação
    /// caso a gravação seja OK redireciona    
    if ($gravar->Alterar($mat_id)):

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
                       Material do Dia atualizado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
    Rotas::Redirecionar(2, Rotas::pag_MateriaDoDiaADM());
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

$id = (int) $_POST['mat_id'];
$datas->GetMateriaID($id);

// passando variaveis para o template

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_DATAS', Rotas::pag_DatasImportantesADM());
$smarty->assign('PRO', $datas->GetItens());


//var_dump($produtos->GetItens());
// chamo o template 
$smarty->display('adm_materia_do_dia_editar.tpl');
