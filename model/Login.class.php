<?php

/**
 * descricao Login
 *
 * @author adrianosites.com.br
 */
class Login extends Conexao {

    private $user,
            $senha;

    function __construct() {
        parent::__construct();
    }

    /**
     * 
     * @param string $user
     * @param string $senha
     */
    function GetLogin($user, $senha) {

        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email AND cli_pass = :senha";

        $params = array(':email' => $this->getUser(),
            ':senha' => $this->getSenha());

        $this->ExecuteSQL($query, $params);

        // caso o login seja efetivado com exito 
        if ($this->TotalDados() > 0):

            $lista = $this->ListarDados();

            $_SESSION['CLI']['cli_id'] = $lista['cli_id'];

            $_SESSION['CLI']['cli_usuario'] = $lista['cli_usuario'];
            $_SESSION['CLI']['cli_nome'] = $lista['cli_nome'];
            $_SESSION['CLI']['cli_sobrenome'] = $lista['cli_sobrenome'];


            $_SESSION['CLI']['cli_fone'] = $lista['cli_fone'];
            $_SESSION['CLI']['cli_email'] = $lista['cli_email'];
            $_SESSION['CLI']['cli_celular'] = $lista['cli_celular'];
            $_SESSION['CLI']['cli_data_nasc'] = $lista['cli_data_nasc'];
            $_SESSION['CLI']['cli_hora_cad'] = $lista['cli_hora_cad'];
            $_SESSION['CLI']['cli_data_cad'] = $lista['cli_data_cad'];
            $_SESSION['CLI']['cli_pass'] = $lista['cli_pass'];

            // apos passar valores atualiza a página
            Rotas::Redirecionar(0, Rotas::pag_ClienteLogin());


        //    echo 'logado com sucesso ';    
        // caso o login seja incorreto 
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
                        Login incorreto!
                        </h3>    
                    </div>   
                </div>
            </div>
        </div>';
            Rotas::Redirecionar(1, Rotas::pag_ClienteLogin());
        endif;
    }

    /**
     * 
     * @return Bolean se esta logado ou não 
     */
    static function Logado() {

        if (isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])):

            return TRUE;
        else:
            return FALSE;

        endif;
    }

    /**
     * mostra aviso para fazer login e o botão
     */
    static function AcessoNegado() {

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
                        Acesso negado, faça login!
                        </h3>
                        <a href="' . Rotas::pag_ClienteLogin() . '" class="btn btn-danger" > Login </a>
                    </div>   
                </div>
            </div>
        </div>';
    }

    /**
     * faz logoff do usuario e volta para home
     */
    static function Logoff() {

        unset($_SESSION['CLI']);
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
                        Saindo...
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
        Rotas::Redirecionar(2, Rotas::get_SiteHOME());
    }

    /**
     * mostra  um bloco de menu para clientes logados
     */
    static function MenuCliente() {

        // verifo se não esta logado 
        if (!self::Logado()):

            self::AcessoNegado();
            Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());

            // caso nao redirecione  saiu  do bloco
            exit();

        // caso esteja mostra a tela minha conta 
        else:

            $smarty = new Template();
            
            //$cliente->GetClientesID($id);
            $cli_usuario = $_SESSION['CLI']['cli_usuario'];
            
            $smarty->assign('PAG_CONTA', Rotas::pag_ClienteConta());
            $smarty->assign('PAG_MATERIAL', Rotas::pag_MateriaDoDia());
            
           
            $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
            
            $smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_CLienteDados());
            $smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_CLienteSenha());
            $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
            $smarty->assign('CLI_USUARIO', $cli_usuario);
          
            $smarty->display('menu_cliente.tpl');

        endif;
    }

    /**
     *  LOGIn do ADM 
     * @param type $user
     * @param type $senha
     */
    function GetLoginADM($user, $senha) {

        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}user WHERE user_email = :email AND user_pw = :senha";

        $params = array(':email' => $this->getUser(),
            ':senha' => $this->getSenha());

        $this->ExecuteSQL($query, $params);

        // caso o login seja efetivado com exito 
        if ($this->TotalDados() > 0):

            $lista = $this->ListarDados();

            $_SESSION['ADM']['user_id'] = $lista['user_id'];
            $_SESSION['ADM']['user_nome'] = $lista['user_nome'];
            $_SESSION['ADM']['user_email'] = $lista['user_email'];
            $_SESSION['ADM']['user_pw'] = $lista['user_pw'];
            $_SESSION['ADM']['user_data'] = Sistema::DataAtualBR();
            $_SESSION['ADM']['user_hora'] = Sistema::HoraAtual();

            return TRUE;
        // caso o login seja incorreto 
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
                       Login incorreto!
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
            Rotas::Redirecionar(1,  Rotas::pag_ClienteLogin() );

            return FALSE;
        endif;
    }

    /**
     * 
     * @return boolean se o ADM está logado 
     */
    static function LogadoADM() {

        if (isset($_SESSION['ADM']['user_email']) && isset($_SESSION['ADM']['user_id'])):

            return TRUE;
        else:
            return FALSE;

        endif;
    }

    /**
     * LOGIN DO ADM
     */
    static function LogoffADM() {

        unset($_SESSION['ADM']);
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
                        Saindo...
                        </h3>
                    </div>   
                </div>
            </div>
        </div>';
        Rotas::Redirecionar(2, 'login.php');
    }

    /**
     * 
     * @param string $user
     */
    private function setUser($user) {
        $this->user = $user;
    }

    /**
     * 
     * @param senha $senha
     */
    private function setSenha($senha) {

        $this->senha = Sistema::Criptografia($senha);
    }

    /**
     * 
     * @return string user
     */
    function getUser() {
        return $this->user;
    }

    /**
     * 
     * @return string senha
     */
    function getSenha() {
        return $this->senha;
    }

}
