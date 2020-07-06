<?php

// chamando o objeto do template 
$smarty = new Template();

// objeto da classe clientes
$datas = new MateriaDoDia();

// se existe o post do produto 
if (isset($_POST['mat_nome'])):


    $mat_nome = $_POST['mat_nome'];
    $mat_disciplina = $_POST['mat_disciplina'];
    $mat_descricao = $_POST['mat_descricao'];
    $mat_arquivo = $_FILES['mat_arquivo']['name'];
    $mat_data = $_POST['mat_data'];

    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
     if (!empty($_FILES)):
        $upload = new ImageUpload();
        if ($upload->UploadArquivo('mat_arquivo')):
            $mat_arquivo = $upload->retorno;
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
    endif;
    // grando o novo produto no banco 
    // crio o objeto de produtos
    $gravar = new MateriaDoDia();
    // chamo o método que prepara os campos 
    $gravar->Preparar($mat_nome, $mat_disciplina, $mat_descricao, $mat_arquivo, $mat_data);

// executo a gravação
    /// caso a gravação seja OK redireciona    
    if ($gravar->Inserir()):

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
                       Material do Dia cadastrado com sucesso!
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


$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_DATAS', Rotas::pag_MateriaDoDiaADM());


// carregando o template 
$smarty->display('adm_materia_do_dia_novo.tpl');
