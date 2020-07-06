<?php
// objeto do temnplate 
$smarty = new Template();
// objeto do login 
$login =  new Login();  
        // verifico se passei o post para efetuar o login 
        if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])):

            $user  = $_POST['txt_email'];
            $senha = $_POST['txt_senha'];

           $login->GetLogin($user, $senha);

          // var_dump($_SESSION['CLI']);

        endif;
        
        
        //falta colocar aqui a validacao do recapcha para que ele nao autorize o login quando nao selecionado    
        
// passo variaveis para o template 
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());

// verifo se estou logado ou não 
if(Login::Logado()):
    
    /*
    $email;$comment;$captcha;
        if(isset($_POST['txt_email'])){
          $email=$_POST['txt_email'];
        }
      
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
	  }
        if(!$captcha){
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
                     <h3 class="text-warning">Precione o Recaptcha!
               </h3>    
</div>   
                </div>
            </div>
        </div>';
          Login::Logoff();
          Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
          exit;
        }
	$secretKey = "6LcRl68UAAAAADOHPFuU10OoFPv2i3Xb_eiGOkgx";
	$ip = $_SERVER['REMOTE_ADDR'];

	// post request to server
	$url =  'http://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
	$response = file_get_contents($url);
	$responseKeys = json_decode($response,true);
	if($responseKeys["success"]) {
		echo '<h2>Thanks for posting comment</h2>';
	} else {
		echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }
        
 
    
 */
       Rotas::Redirecionar(0, Rotas::pag_ClienteConta());
      $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
      $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
     // caso ja esteja logado       
       Login::MenuCliente();
           
 endif;
$smarty->display('login.tpl');