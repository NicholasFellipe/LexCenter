<?php

// objeto do template
$smarty = new Template();

// se existe o post do produto 
if (isset($_POST['con_nome'])):

    $con_categoria = $_POST['con_categoria'];
    $con_nome = $_POST['con_nome'];
    $con_desc_pequena = $_POST['con_desc_pequena'];
    $con_desc = $_POST['con_desc'];
    $con_img = $_FILES['con_img']['name'];
    $con_tempocurso = $_POST['con_tempocurso'];
    $con_disciplinas = $_POST['con_disciplinas'];
    $con_aprovacaotaxa = $_POST['con_aprovacaotaxa'];
    $con_dataini = $_POST['con_dataini'];
    $con_datafim = $_POST['con_datafim'];
    //pega a data atual para inserir--->>>>>>>>>
    $con_datapostagem = Sistema::DataAtualUS();
    $con_slug = $_POST['con_slug'];
    
    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
    if (!empty($_FILES)):

        $upload = new ImageUpload();

        if ($upload->Upload(900, 'con_img')):

            $con_img = $upload->retorno;
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
                        <h3 class="text-success">
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
    $gravar = new Produtos();
    // chamo o método que prepara os campos 
    $gravar->Preparar($con_categoria, $con_nome, $con_desc_pequena, $con_desc, $con_img, $con_tempocurso, $con_disciplinas, $con_aprovacaotaxa, $con_dataini, $con_datafim, $con_datapostagem, $con_slug);

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
                       Produto cadastrado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
        Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
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

// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();

// passando variaveis para o template
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_CURSOS', Rotas::pag_ProdutosADM().'/10/concursos-publicos');
// chamo o template 
$smarty->display('adm_curso_novo.tpl');
