<?php
// objeto do template 
$smarty = new Template();
Login::MenuCliente();
// objeto da classe clientes
$materias= new MateriaDoDia();
$cliente = new Clientes();
$id = $_SESSION['CLI']['cli_id'];
$cliente->GetClientesID($id);
$cli_usuario = $_SESSION['CLI']['cli_usuario'];
if ($cli_usuario == 'DESATIVADO'):
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
                      <p class="text-warning">Olá! Por enquanto você esta sem acesso ao material de apoio, solicite à secretaria!</p>
                    </div>   
                </div>
            </div>
        </div>';
else:
    echo '<h4 class="text-center"></h4>';
endif;

echo '<pre>';
//var_dump($cliente->GetItens());
echo '</pre>';



// se existe o post do produto para adicinar / editar 
if (isset($_POST['mat_nome'])):
    $mat_nome = $_POST['mat_nome'];
   $mat_disciplina = $_POST['mat_disciplina'];
    $mat_descricao = $_POST['mat_descricao'];
    $mat_arquivo = $_FILES['mat_arquivo']['name'];
    $mat_data = $_POST['mat_data'];
    $mat_id = $_POST['mat_id'];
endif;

$id = (int) $_POST['mat_id'];
$materias->GetMateriaID($id);

// passando variaveis para o template

$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_DATAS', Rotas::pag_MateriaDoDia());
$smarty->assign('PRO', $materias->GetItens());

$smarty->assign('DATA_ATUAL', Sistema::DataAtualBR());
$smarty->assign('USUARIO', $cli_usuario);

//var_dump($produtos->GetItens());
// chamo o template 
$smarty->display('materia_do_dia_info.tpl');
