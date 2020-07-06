<?php
// chamando o objeto do template 
$smarty = new Template();


// objeto da classe clientes
$clientes = new Clientes();

// buscar todos os clientes
$clientes->GetClientes();

// passando variaveis para o template 
$smarty->assign('CLIENTES', $clientes->GetItens());
$smarty->assign('PAG_EDITAR', Rotas::pag_ClientesEditarADM());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_PedidosADM());



// carregando o template 
$smarty->display('adm_clientes.tpl');



