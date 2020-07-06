<?php

// objeto do template 
$smarty = new Template();
Login::MenuCliente();
//
//////Objeto DatasImportantes
//$datas = new DatasImportantes();
//$datas->GetDatasALL();
//$smarty->assign('DATAS', $datas->GetItens());

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
                     <h3 class="text-warning">Olá! Por enquanto você está sem acesso ao material de apoio, solicite à secretaria!
               </h3>    
</div>   
                </div>
            </div>
        </div>';
else:
    echo '<h4 class="text-center">Bem vindo ao portal do aluno, no menu acima temos algumas opções para você!</h4>';
endif;

echo '<pre>';
//var_dump($cliente->GetItens());
echo '</pre>';
$smarty->assign('DATA_ATUAL', Sistema::DataAtualBR());
$smarty->assign('USUARIO', $cli_usuario);

$smarty->display('portaldoaluno.tpl');
