<?php
// objeto do template 
$smarty = new Template();

// chamo o menu de cliente logado
Login::MenuCliente();

// verifico se foi passo o post  com senha atual e a nova 
if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])):    

 // pego dados do post e sessão atual para variaveis
       
    $senha_atual = Sistema::Criptografia($_POST['cli_senha_atual']);
    $senha_nova  =  $_POST['cli_senha'];
    $email       =  $_SESSION['CLI']['cli_email']; 
      
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
     if($senha_atual != $_SESSION['CLI']['cli_pass']):
         
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
                      <p class="text-danger">A senha atual está incorreta</p>
                      '.Sistema::VoltarPagina().'
                    </div>
                </div>
            </div>
        </div>';
         exit();
    
    endif;   
    
    // gravo a nova senha no banco de dados  

   $clientes = new Clientes();
   $clientes->SenhaUpdate($senha_nova, $email);

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
                      <p class="text-success">Senha alterada com sucesso! Já pode fazer login com sua nova senha!</p>
                    </div>   
                </div>
            </div>
        </div>';
     
// caso não exista o post de alterar a senha, mostro os campos no template        
else:   
      
// chamo o template 
$smarty->display('clientes_senha.tpl');    
    
endif;