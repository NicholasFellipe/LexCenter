<?php
// objeto do template 
$smarty = new Template();


// verifico se foi passo o post  com senha atual e a nova 
if(isset($_POST['adm_senha_atual']) and isset($_POST['adm_senha'])):
     

 // pego dados do post e sessão atual para variaveis
       
    $senha_atual = Sistema::Criptografia($_POST['adm_senha_atual']);
    $senha_nova  =  $_POST['adm_senha'];
    $email       =  $_SESSION['ADM']['user_email']; 
    
   
//    
//    echo '<pre>';  
//  print_r($_POST);
// echo '</pre>';     
//       
// echo '<pre>';  
//  print_r($_SESSION['CLI']);
//  echo '</pre>';     
//       
        
    
     // verifico se a senha atual foi digitada corretamente
     if($senha_atual != $_SESSION['ADM']['user_pw']):
         
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
                        <h3 class="text-danger">
                     A senha não corresponde!
                        </h3>
                        '.Sistema::VoltarPagina().'
                    </div>   
                </div>
            </div>
        </div>';
         exit();
    
    endif;   
    
    // gravo a nova senha no banco de dados  
   $user = new User();
   if ($user->AlterarSenha($senha_nova, $email)):


         // apos alterar envia email com a nova senha
         $enviar = new EnviarEmail();
         
         $assunto = 'Alteração da senha ADM no site '. Sistema::DataAtualBR();
         $destinatarios = array($email,  Config::SITE_EMAIl_ADM);
         $msg = '<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                       Foi feito alteração de senha ADM no site neste momento, nova senha:  ' . $senha_nova .'
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';            
         $enviar->Enviar($assunto, $msg, $destinatarios);
        // fim do email  
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
                       Senha alterada com sucesso! Já pode fazer login com sua nova senha!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>'; 
       // faz redirecioamento para LOGOFF
        Rotas::Redirecionar(2, Rotas::get_SiteADM() . '/logoff');
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
                        <h3 class="text-danger">
                       Erro ao tentar alterar a senha!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
    endif;
// caso não exista o post de alterar a senha, mostro os campos no template        
else:     
// chamo o template 
$smarty->display('adm_senha.tpl');        
endif;




