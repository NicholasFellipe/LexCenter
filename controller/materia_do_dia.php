<?php

// objeto do template 
$smarty = new Template();
Login::MenuCliente();

// objeto da classe clientes
$materias= new MateriaDoDia();

// buscar todos os clientes
$materias->GetMateriaDoDiaALL();

// passando variaveis para o template 
$smarty->assign('MATERIA', $materias->GetItens());

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
$smarty->assign('DATA_ATUAL', Sistema::DataAtualBR());
$smarty->assign('USUARIO', $cli_usuario);
$smarty->assign('PAG_MATERIA_DO_DIA_INFO', Rotas::pag_MateriaDoDia_Info());
$smarty->display('materia_do_dia.tpl');
