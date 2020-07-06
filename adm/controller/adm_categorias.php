<?php

// chamando  objeto do template 
$smarty = new Template();

// chamo classe de categorias
$categorias = new Categorias();

// se passei o POST apagar 
if (isset($_POST['cate_apagar'])):

    $cate_id = $_POST['cate_id'];

    if ($categorias->Apagar($cate_id)):
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
                       Categoria apagada com sucesso!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
    endif;
endif;





// chamo o métodos que traz as tacagorias 
$categorias->GetCategorias();

// passando variaveis para o template 
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('PAG_CATEGORIAS_EDITAR', Rotas::pag_CategoriasEditarADM());
$smarty->assign('PAG_NOVO_CATE', Rotas::pag_CategoriasNovoADM());



// chamando o template
$smarty->display('adm_categorias.tpl');
