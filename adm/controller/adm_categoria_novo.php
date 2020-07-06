<?php

// chamando o objeto do template 
$smarty = new Template();

// objeto da classe clientes
$datas = new Categorias();

// se existe o post do produto 
if (isset($_POST['cate_nome'])):


    $cate_nome = $_POST['cate_nome'];
    $cate_img = $_FILES['cate_img']['name'];
    $cate_slug = $_POST['cate_slug'];
    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
    if (!empty($_FILES)):
        $upload = new ImageUpload();
        if ($upload->Upload(900, 'cate_img')):
            $cate_img = $upload->retorno;
        else:
            exit('Erro no envio da imagem');
        endif;
    endif;
    // grando o novo produto no banco 
    // crio o objeto de produtos
    $gravar = new Categorias();
    // chamo o método que prepara os campos 
    $gravar->Preparar($cate_nome, $cate_img, $cate_slug);

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
                       Categoria cadastrado com sucesso!
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
                        <h3 class="text-danger>
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
$smarty->assign('PAG_CATE', Rotas::pag_CategoriasADM());


// carregando o template 
$smarty->display('adm_categoria_novo.tpl');
