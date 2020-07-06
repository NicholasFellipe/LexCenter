<?php
// objeto do template 
$smarty = new Template();
     // objeto da classe clientes 
    $clientes = new Clientes();   

if(isset($_POST['cli_nome']) and isset($_POST['cli_email'])): 
    
   
     // criando variaveis 
     $cli_id     =   $_POST['cli_id'];
     $cli_usuario     = $_POST['cli_usuario'];
     $cli_nome      = $_POST['cli_nome'];
     $cli_sobrenome = $_POST['cli_sobrenome'];
     $cli_email     = $_POST['cli_email'];


 // gravando os dados no banco     
  
    $clientes->PrepararADM($cli_usuario, $cli_nome, $cli_sobrenome, $cli_email) ;   
    // tento executar a SQL de update
    if(!$clientes->AlterarADM($cli_id)):
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
                       Ocorreu um erro ao gravar os dados!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
        
        exit();
   
   // caso passou na SQL perfeitamente      
    else:
        
         
 // terminando as alterações mostro  uma mensagem   
     
      echo '<script> alert("Dados alterados com sucesso! Atualizando dados do login...");</script>';
      echo '<div class="alert alert-success"> ';
      echo ' Dados alterados com sucesso! Atualizando dados do login... ';
      Rotas::Redirecionar(2, Rotas::pag_ClientesADM());
      echo '</div>';  
    
      
    //  Rotas::Redirecionar(3, Rotas::pag_Logoff());
        
        
    endif;
     
     
     

     
// caso nao tenha o POST ainda     
else:    
    
/// passo o ID do cliente, caso nao passei uso o 0
if(isset(Rotas::$pag[1])):
 $id = Rotas::$pag[1];   
else:
  $id = 0;  
endif;

// chamo o método que pega o cliente por ID
$id = Rotas::$pag[1];    
$clientes->GetClientesID($id);    
    
// passando variaveis para o template
    
        // varrendo o array da sessão de cliente e pagando os dados 
        foreach ($clientes->GetItens()[1] as $campo => $valor):

            $smarty->assign(strtoupper($campo) , $valor);

           //   echo strtoupper($campo) . ' =>'. $valor . '<br>'; 

        endforeach;

    $smarty->assign('PAG_CLIENTES', Rotas::pag_ClientesADM());
// chamo o template 
$smarty->display('adm_clientes_editar.tpl');


// fim da verificação se existe o POST dos dados do cliente    
endif;









