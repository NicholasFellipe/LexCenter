<?php
// chamando o objeto do template 
$smarty = new Template();


// objeto da classe clientes
$banner= new Banner();

// buscar todos os clientes
$banner->GetBanner();

// passando variaveis para o template 
$smarty->assign('BANNER', $banner->GetItens());
$smarty->assign('PAG_EDITAR_BANNER', Rotas::pag_BannerEditarADM());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_PedidosADM());



// carregando o template 
$smarty->display('adm_banner.tpl');