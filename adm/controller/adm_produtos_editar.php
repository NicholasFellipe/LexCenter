<?php

// objeto do template
$smarty = new Template();
// crio o objeto de produtos
$gravar = new Produtos();

// trago os dados da categoria
$categorias = new Categorias();
$categorias->GetCategorias();

// pegando o produto atual
$produtos = new Produtos();

// verifica se tem o post de apagar o produto 
if (isset($_POST['con_apagar']) && isset($_POST['con_id_apagar']) && $_POST['con_apagar'] == 'SIM'):

    if ($gravar->Apagar($_POST['con_id_apagar'])):

   
            echo '<h3 class="text-success">
                       Deletado com sucesso!
                        </h3>';
        // apagar a imagem do produto 
        @unlink($_POST['con_img_arquivo']);
     Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
    endif;
    exit();
endif;

// se existe o post do produto para adicinar / editar 
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
    $con_datapostagem = Sistema::DataAtualUS();
 // if($_POST['con_categoria'] == 6):
        $con_arquivo = $_FILES['con_arquivo']['name'];

 
    $con_slug = $_POST['con_slug'];
    $con_id = $_POST['con_id'];
    $con_img_arquivo = $_POST['con_img_arquivo'];
    
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
    // chamando a classe de upload - tratando a imagem 
    // verifico se o arquivo do post veio vazio
    if (!empty($_FILES['con_img']['name'])):
        $upload = new ImageUpload();
        if ($upload->Upload(900, 'con_img')):
            $con_img = $upload->retorno;
            // apagando a imagem antiga
            @unlink($con_img_arquivo);
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
        $con_img = $_POST['con_img_atual'];
    endif;
    
    
   if (!empty($_FILES['con_arquivo']['name'])):
        $upload = new ImageUpload();

        if ($upload->UploadArquivo('con_arquivo')):

            $con_arquivo = $upload->retorno;
            // apagando a imagem antiga
            @unlink($con_arquivo_arquivo);

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
                       Erro no envio do arquivo!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>');
        endif;
         else:
        // se nao passou  uma nova IMG usa a mesma que ja existe  
        $con_arquivo = $_POST['con_arquivo_atual'];
    
    endif;

    // grando o novo produto no banco 
    // chamo o método que prepara os campos 

     if($_POST['con_categoria'] == 6):
         $gravar->Preparar($con_categoria, $con_nome, $con_desc_pequena, $con_desc, $con_img, $con_tempocurso, $con_disciplinas, $con_aprovacaotaxa, $con_dataini, $con_datafim, $con_datapostagem,$con_arquivo ,$con_slug);
     else:
         $gravar->Preparar($con_categoria, $con_nome, $con_desc_pequena, $con_desc, $con_img, $con_tempocurso, $con_disciplinas, $con_aprovacaotaxa, $con_dataini, $con_datafim, $con_datapostagem,$con_arquivo=null ,$con_slug);
     endif;
    

// executo a gravação
    /// caso a gravação seja OK redireciona    
    if ($gravar->Alterar($con_id)):
        
  //PROVAS ANTERIORES
        if($_POST['con_categoria'] == 6):
     
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
                        Provas Anteriores atualizado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
     Rotas::Redirecionar(2, Rotas::pag_ProdutosADM().'/6/provas-anteriores');
     //PROVAS ANTERIORES
     
     //ALUNOS APROVADOS
     elseif(($_POST['con_categoria'] == 7)):
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
                         Alunos Aprovados atualizado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
     Rotas::Redirecionar(2, Rotas::pag_ProdutosADM().'/7/alunos-aprovados');
     //ALUNOS APROVADOS
     
     //PREPARATORIO LEX CENTER
      elseif(($_POST['con_categoria'] == 10)):
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
                         Preparatório Lex Center atualizado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
     Rotas::Redirecionar(2, Rotas::pag_ProdutosADM().'/10/preparatorio-lex-center');
     //PREPARATORIO LEX CENTER
     
     //BLOG DO CONCURSEIRO
      elseif(($_POST['con_categoria'] == 11)):
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
                          Blog do Concurseiro atualizado com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
     Rotas::Redirecionar(2, Rotas::pag_ProdutosADM().'/10/blog-do-concurseiro');
     //BLOG DO CONCURSEIRO
        endif;
        
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

$id = (int) $_POST['con_id'];
$produtos->GetProdutosID($id);

// passando variaveis para o template
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PAG_PROVAS', Rotas::pag_ProdutosADM().'/6/provas-anteriores');
$smarty->assign('PAG_BLOG', Rotas::pag_ProdutosADM().'/11/blog-do-concurseiro');
$smarty->assign('PAG_CONCURSOS', Rotas::pag_ProdutosADM().'/10/concursos-publicos');
$smarty->assign('PAG_ALUNOS', Rotas::pag_ProdutosADM().'/7/alunos-aprovados');

//print_r($produtos->GetItens());
// chamo o template 
$smarty->display('adm_produtos_editar.tpl');
