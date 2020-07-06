<?php

/**
 * descricao Clientes
 *
 * @author adrianosites.com.br
 */
class Clientes extends Conexao {

    private $cli_usuario, $cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_fone,
            $cli_celular, 
            $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha;

    /**
     * chamando o construtor da classe pai
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * busca todos os clientes 
     */
    function GetClientes() {
        $query = " SELECT * FROM {$this->prefix}clientes ";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param INT $id id do cliente 
     */
    function GetClientesID($id) {
        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_id = :id ";
        // passo parametros
        $params = array(':id' => (int) $id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
    }

    /**
     * fazendo a listagem dos dados retornados 
     */
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cli_id' => $lista['cli_id'],
                'cli_usuario' => $lista['cli_usuario'],
                'cli_nome' => $lista['cli_nome'],
                'cli_sobrenome' => $lista['cli_sobrenome'],
                'cli_fone' => $lista['cli_fone'],
                'cli_celular' => $lista['cli_celular'],
                'cli_email' => $lista['cli_email'],
                'cli_pass' => $lista['cli_pass'],
                'cli_data_nasc' => $lista['cli_data_nasc'],
                'cli_hora_cad' => $lista['cli_hora_cad'],
                'cli_data_cad' => Sistema::Fdata($lista['cli_data_cad']),
            );
            $i++;
        endwhile;
    }

    /**
     * prepara os campos para iserir ou atualizar
     */
    function Preparar($cli_usuario,$cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_fone, $cli_celular, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha) {
        $this->setCli_usuario($cli_usuario);
        $this->setCli_nome($cli_nome);
        $this->setCli_sobrenome($cli_sobrenome);
        $this->setCli_data_nasc($cli_data_nasc);
        $this->setCli_fone($cli_fone);
        $this->setCli_celular($cli_celular);
        $this->setCli_email($cli_email);
        $this->setCli_data_cad($cli_data_cad);
        $this->setCli_hora_cad($cli_hora_cad);
        $this->setCli_senha($cli_senha);
    }
    /**
     * prepara os campos para iserir ou atualizar
     */
    function PrepararADM($cli_usuario,$cli_nome, $cli_sobrenome, $cli_email) {
        $this->setCli_usuario($cli_usuario);
        $this->setCli_nome($cli_nome);
        $this->setCli_sobrenome($cli_sobrenome);
        $this->setCli_email($cli_email);
      
    }

    /**
     * insere o novo cliente no banco 
     */
    function Inserir() {
        // verifica se o email já esta cadstrado 
        if ($this->GetClienteEmail($this->getCli_email()) > 0):
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
                         Este Email já esta cadastrado!
                         '. Sistema::VoltarPagina().'
                        </h3>    
                    </div>   
                </div>
            </div>
        </div>';
         

            exit();
        endif;
        // caso passou na verificação grava no banco
        $query = " INSERT INTO {$this->prefix}clientes (cli_usuario,cli_nome, cli_sobrenome,cli_data_nasc, ";
        $query .= " cli_fone,cli_celular, cli_email ,cli_data_cad, cli_hora_cad, cli_pass)";
        $query .= " VALUES ";
        $query .= " (:cli_usuario,:cli_nome, :cli_sobrenome,:cli_data_nasc,";
        $query .= " :cli_fone,:cli_celular ,:cli_email ,:cli_data_cad, :cli_hora_cad, :cli_senha)";
        $params = array(
            ':cli_usuario' => $this->getCli_usuario(),
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_data_nasc' => $this->getCli_data_nasc(),
            ':cli_fone' => $this->getCli_fone(),
            ':cli_celular' => $this->getCli_celular(),
            ':cli_email' => $this->getCli_email(),
            ':cli_data_cad' => $this->getCli_data_cad(),
            ':cli_hora_cad' => $this->getCli_hora_cad(),
            ':cli_senha' => $this->getCli_senha()
        );
        //  echo $query;                
        $this->ExecuteSQL($query, $params);
    }

    /**
     * ALTERAR cliente no banco 
     */
    function Alterar($id) {

        // verifica se o email já esta cadstrado 
        if ($this->GetClienteEmail($this->getCli_email()) > 0 && $this->getCli_email() != $_SESSION['CLI']['cli_email']):
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
                         Este Email já esta cadastrado!
                         '. Sistema::VoltarPagina().'
                        </h3>    
                    </div>   
                </div>
            </div>
        </div>';
            exit();
        endif;
        // caso passou na verificação grava no banco
        $query = " UPDATE {$this->prefix}clientes SET cli_nome=:cli_nome, cli_sobrenome=:cli_sobrenome,";
        $query .= " cli_fone=:cli_fone, cli_celular=:cli_celular, cli_email=:cli_email, cli_pass=:cli_senha,";
        $query .= "  cli_data_nasc=:cli_data_nasc";
        $query .= " WHERE  cli_id = :cli_id";
        $params = array(
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_fone' => $this->getCli_fone(),
            ':cli_celular' => $this->getCli_celular(),
            ':cli_email' => $this->getCli_email(),
            ':cli_senha' => $this->getCli_senha(),
             ':cli_data_nasc' => $this->getCli_data_nasc(),
            ':cli_id' => (int) $id
        );
        //  echo $query;
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    /**
     * ALTERAR cliente no banco na ADM
     */
    function AlterarADM($id) {
    
        // verifica se o email já esta cadstrado 
        if ($this->GetClienteEmail($this->getCli_email()) > 0 && $this->getCli_email() != $_REQUEST['cli_email']):
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
                         Este Email já esta cadastrado!
                         '. Sistema::VoltarPagina().'
                        </h3>    
                    </div>   
                </div>
            </div>
        </div>';
            exit();
        endif;
        // caso passou na verificação grava no banco
        $query = " UPDATE {$this->prefix}clientes SET cli_usuario=:cli_usuario, cli_nome=:cli_nome,";
        $query .= "  cli_sobrenome=:cli_sobrenome, cli_email=:cli_email  ";
        $query .= " WHERE  cli_id = :cli_id";
        $params = array(
            ':cli_usuario' => $this->getCli_usuario(),
            ':cli_nome' => $this->getCli_nome(),
            ':cli_sobrenome' => $this->getCli_sobrenome(),
            ':cli_email' => $this->getCli_email(),
            ':cli_id' => (int) $id
        );
        //  echo $query;
        if ($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
    }

    /**
     * 
     * @param string $email
     * @return int total de dados
     */
    function GetClienteEmail($email) {
        $query = "SELECT * FROM {$this->prefix}clientes ";
        $query .= " WHERE cli_email= :email ";
        $params = array(':email' => $email);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }

    /**
     * 
     * @param string $senha
     * @param string $email
     */
    function SenhaUpdate($senha, $email) {
        $query = "UPDATE {$this->prefix}clientes SET cli_pass = :senha";
        $query .= " WHERE cli_email = :email ";
        $this->setCli_senha($senha);
        $this->setCli_email($email);
        $params = array(':senha' => $this->getCli_senha(), ':email' => $this->getCli_email());
        $this->ExecuteSQL($query, $params);
    }

// GETTERS retornando os dados do cliente 
    function getCli_usuario() {
        return $this->cli_usuario;
    }

    function setCli_usuario($cli_usuario) {
        $this->cli_usuario = $cli_usuario;
    }

    function getCli_nome() {
        return $this->cli_nome;
    }

    function getCli_sobrenome() {
        return $this->cli_sobrenome;
    }

    function getCli_data_nasc() {
        return $this->cli_data_nasc;
    }

    function getCli_fone() {
        return $this->cli_fone;
    }

    function getCli_celular() {
        return $this->cli_celular;
    }

    function getCli_email() {
        return $this->cli_email;
    }

    function getCli_data_cad() {
        return $this->cli_data_cad;
    }

    function getCli_hora_cad() {
        return $this->cli_hora_cad;
    }

    function getCli_senha() {
        return $this->cli_senha;
    }

    //  Começa os SETTERS dos dados do cliente 

    function setCli_nome($cli_nome) {
        if (strlen($cli_nome) < 3):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Digite seu nome ';
            Sistema::VoltarPagina();
            echo '</div></div>';
        else:

            $this->cli_nome = $cli_nome;
        endif;
    }

    function setCli_sobrenome($cli_sobrenome) {
        if (strlen($cli_sobrenome) < 3):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Digite seu sobrenome ';
            Sistema::VoltarPagina();
            echo '</div></div>';
        else:
            $this->cli_sobrenome = $cli_sobrenome;
        endif;
    }

    function setCli_data_nasc($cli_data_nasc) {
        $this->cli_data_nasc = $cli_data_nasc;
    }

    function setCli_fone($cli_fone) {
        $this->cli_fone = $cli_fone;
    }

    function setCli_celular($cli_celular) {
        $this->cli_celular = $cli_celular;
    }

    function setCli_email($cli_email) {
        if (!filter_var($cli_email, FILTER_VALIDATE_EMAIL)):
            echo '<div class="container"><div class="alert alert-danger text-center" id="erro_mostrar"> Email incorreto ';
            Sistema::VoltarPagina();
            echo '</div></div>';
            exit();
        else:
            $this->cli_email = $cli_email;
        endif;
    }

    function setCli_data_cad($cli_data_cad) {
        $this->cli_data_cad = $cli_data_cad;
    }

    function setCli_hora_cad($cli_hora_cad) {
        $this->cli_hora_cad = $cli_hora_cad;
    }

    function setCli_senha($cli_senha) {
        $this->cli_senha = Sistema::Criptografia($cli_senha);
        // 123 => md5 = 18513ba35987a447b98f075bd226a1fc
    }

}
