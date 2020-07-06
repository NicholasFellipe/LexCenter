<?php
// objeto do template smarty
$smarty =  new Template();

// verifico se existe um post do email 
if(isset($_POST['cli_email'])):
  
   
    // classe de clientes
    $cliente = new Clientes();
    // metodo que valida o email
    $cliente->setCli_email($_POST['cli_email']);   
   // verifico se existe o email 
    if($cliente->GetClienteEmail($cliente->getCli_email()) > 0):
     // o email foi encontrado         
        
     // faz a gravação da nova senha
        $novasenha = Sistema::GerarSenha();
        
        $cliente->SenhaUpdate($novasenha, $cliente->getCli_email());
        
         $smarty->assign('NOVA_SENHA', $novasenha);
         $smarty->assign('NOME', $cli_nome);
     $smarty->assign('EMAIL', $cli_email);
     $smarty->assign('SENHA', $cli_senha);
     $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
     $smarty->assign('SITE', Config::SITE_NOME);
     $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
     // envia o email para o cliente 
        $email = new EnviarEmail();
        $destinatarios = array($cliente->getCli_email());
        $assunto = 'Nova senha ' . Config::SITE_NOME;
        
          $msg = $smarty->fetch('email_cliente_senha_recovery.tpl');
//        $msg ="Olá cliente, foi solicitada uma nova senha para acesso ao site: " . Config::SITE_NOME;
//        $msg .= " <br> Nova senha = " . $novasenha;
        
        $email->Enviar($assunto, $msg, $destinatarios);
        
        // mostra mensagem na tela que foi enviada a senha 
        echo '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <p class="text-success">Olá cliente, foi enviada uma nova senha para acesso ao site em seu email de cadastro!</p>
                    </div>   
                </div>
            </div>
        </div>';
        Rotas::Redirecionar(5, Rotas::pag_ClienteLogin());
        
        else:
    // email não encontrado 
       echo '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <p class="text-danger">Email nao encontrado!</p>
                    </div>
                    
                </div>
            </div>
        </div> '; 
        
    endif;
    
// caso não exista o post mostro o template     
else: 
    
  // chamo o template 
$smarty->display('clientes_recovery.tpl');  
    
endif;
