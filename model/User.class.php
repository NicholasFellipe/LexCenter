<?php

/**
 * descricao User
 *
 * @author adrianosites.com.br
 */
class User extends Conexao{
    
    private $user, $senha, $email;
            
    function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @param string $email do USER
     * @return boolean caso exista 
     */
    function GetUserEmail($email){
        
        $this->setEmail($email);
        
        $query = " SELECT * FROM {$this->prefix}user WHERE user_email = :email ";
        
        $params = array(':email'=>  $this->getEmail());
        
        $this->ExecuteSQL($query, $params);
        
        return $this->TotalDados();
        
    }
    
    /**
     * alterar a senha  do USER
     */
    function AlterarSenha($senha,$email){
        
        // setando email e senha
        $this->setSenha($senha);
        $this->setEmail($email);
        // montando a SQL
        $query = "UPDATE {$this->prefix}user SET user_pw = :senha";
        $query.= " WHERE user_email = :email";
        // passando parametros
        $params = array(':senha' => $this->getSenha(), ':email' => $this->getEmail());
        // executando a SQL
        if ($this->ExecuteSQL($query, $params)):

            return TRUE;
        else:
            return FALSE;
        endif;
    }

    ///  SÃO OS GETTERS E SETTERS 
    function getUser() {
        return $this->user;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setSenha($senha) {
        $this->senha = Sistema::Criptografia($senha);
    }

    function setEmail($email) {
        $this->email = $email;
    }  
}