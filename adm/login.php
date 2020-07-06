<?php
// verifo  se iniciou a ssesão
if(!isset($_SESSION)):
    session_start();
endif;

// setando o meu timezone
date_default_timezone_set('America/Sao_Paulo');

// carrego o auto load
require '../lib/autoload.php';
// chamo o objeto do template
$smarty = new Template();
// passo valores para o meu template 
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
/// verifico se passei o POST  de nova senha 
if(isset($_POST['recovery'])):
    // obejto USER
    $user = new User();
   // passo alguns valores
    $email = $_POST['txt_email'];
    $senha = Sistema::GerarSenha();
    // verifico se tem este email na tabela 
    if($user->GetUserEmail($email) > 0):    
        // faz alteração 
        $user->AlterarSenha($senha, $email);     
          // apos alterar envia email com a nova senha
         $enviar = new EnviarEmail();     
         $assunto = 'Nova senha ADM do site '. Sistema::DataAtualBR();
         $destinatarios = array($email,  Config::SITE_EMAIl_ADM);
         $msg = ' Nova senha no ADM do site, nova senha:  ' .$senha;
         $enviar->Enviar($assunto, $msg, $destinatarios);     
           echo ' <div class="container"><div class="alert alert-success">
                       Foi enviado um Email com a NOVA SENHA!
                        </h3></div></div>';      
    else:   
         echo '<div class="container"> <h3 class="text-danger">
                      Email não encontrado!
                        </h3></div></div>';
    endif;   
endif;
// verifico se passou o POST LOGIN
if(isset($_POST['txt_logar']) && isset($_POST['txt_email'])):   
    // passo variavies
    $user  = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    // obejto login 
    $login = new Login(); 
    // metodo login do ADM
    if($login->GetLoginADM($user, $senha)):    
        echo '<div class="container">
            <div class="alert alert-success">
            <h3 class="text-success text-center">
                       Login efetuado com sucesso!</h3>
                        </div>
                        </div>';
        Rotas::Redirecionar(1, 'index.php'); 
     else: 
          Rotas::Redirecionar(2, 'login.php');       
    endif;
    //var_dump($_SESSION['ADM']);
endif;
// chamando o template
$smarty->display('adm_login.tpl');

