<?php
// objeto do template smarty
$smarty = new Template();


// verifico se passou os POSTS
if(isset($_POST['cli_nome']) and isset($_POST['cli_email'])):    
    
     // criando variaveis 
     $cli_usuario      = $_POST['cli_usuario'];
     $cli_nome      = $_POST['cli_nome'];
     $cli_sobrenome = $_POST['cli_sobrenome'];
     $cli_data_nasc = $_POST['cli_data_nasc'];
  
  
     $cli_fone      = $_POST['cli_fone'];
     $cli_celular   = $_POST['cli_celular'];
    
     $cli_email     = $_POST['cli_email'];
     $cli_senha     = Sistema::GerarSenha();
     $cli_data_cad  = Sistema::DataAtualUS();
     $cli_hora_cad  = Sistema::HoraAtual();
    
     
    // gravo os dados no banco      
     $clientes = new Clientes();
     $clientes->Preparar($cli_usuario,$cli_nome, $cli_sobrenome, $cli_data_nasc,$cli_fone, $cli_celular, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha);
     $clientes->Inserir();
     
     
    
     // passo variaveis para o template de email de cadastro realizado 
     
     $smarty->assign('NOME', $cli_nome);
     $smarty->assign('EMAIL', $cli_email);
     $smarty->assign('SENHA', $cli_senha);
     $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
     $smarty->assign('SITE', Config::SITE_NOME);
     $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
    
     // envio email para o cliente 
     $email = new EnviarEmail();
     $assunto = 'Cadastro Efetuado ' . Config::SITE_NOME;
     $msg = $smarty->fetch('email_cliente_cadastro.tpl');
     $destinatarios = array($cli_email);
     
     $email->Enviar($assunto, $msg, $destinatarios);
     
     
     // vefico cadastro e dou ,aviso e levo o cliente até o login
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
                      <p class="text-success">Olá '. $cli_nome.', Cadastro efetuado com sucesso!<br> 
                          A senha para fazer login foi enviada para seu email cadastrado. <br>
                          Acesse seu email para visualizar a senha.</p>
                    </div>
                    
                </div>
            </div>
        </div>';
             Rotas::Redirecionar(5,  Rotas::pag_ClienteLogin());
     
 // se não tejm POSTS  mostra  os campos do cadastro  
else:     
 

// chamo o template da tela de cadastro
$smarty->display('cadastro.tpl');   
    
    
endif;



