<?php
// objeto do template 
$smarty = new Template();
// chamo o menu de cliente logado
Login::MenuCliente();

if(isset($_POST['cli_nome']) and isset($_POST['cli_email'])):    
     // criando variaveis 
     $cli_nome      = $_POST['cli_nome'];
     $cli_sobrenome = $_POST['cli_sobrenome'];
     $cli_data_nasc = $_POST['cli_data_nasc'];
   
     $cli_fone      = $_POST['cli_fone'];
     $cli_celular   = $_POST['cli_celular'];
   
     $cli_email     = $_POST['cli_email'];
     $cli_senha     = $_POST['cli_senha'];
     $cli_data_cad  = $_SESSION['CLI']['cli_data_cad'];
     $cli_hora_cad  = $_SESSION['CLI']['cli_hora_cad']; 
     
     // verifico se a senha atual está correta  
     if($_SESSION['CLI']['cli_pass'] != Sistema::Criptografia($cli_senha)):       
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
 // gravando os dados no banco        
    $clientes = new Clientes();     
    $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_fone, $cli_celular, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha);
    // tento executar a SQL de update
    if(!$clientes->Alterar($_SESSION['CLI']['cli_id'])):
          echo '<div class="container"><div class="alert alert-danger text-center"> Ocorreu um erro ao gravar os dados </div></div>';  
        exit();
   // caso passou na SQL perfeitamente      
    else:   
 // terminando as alterações mostro  uma mensagem       
      echo '<script> alert("Dados alterados com sucesso! Atualizando dados do login...");</script>';
      echo '<div class="container"><div class="alert alert-success text-center"> ';
      echo ' Dados alterados com sucesso! Atualizando dados do login... ';
      echo '</div></div>';  
       // forçar o novo login do cliente         
     $login = new Login();
     $login->GetLogin($cli_email, $cli_senha); 
    //  Rotas::Redirecionar(3, Rotas::pag_Logoff());    
    endif;      
// caso nao tenha o POST ainda     
else:            
// passando variaveis para o template
// varrendo o array da sessão de cliente e pagando os dados 
foreach ($_SESSION['CLI'] as $campo => $valor): 
    $smarty->assign(strtoupper($campo) , $valor); 
  //  echo strtoupper($campo) . ' =>'. $valor . '<br>';   
endforeach;
// chamo o template 

$smarty->display('clientes_dados.tpl'); 
// fim da verificação se existe o POST dos dados do cliente    
endif;