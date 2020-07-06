<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professores
 *
 * @author nicho
 */
class Professores extends Conexao {

    private $prof_nome, $prof_img, $prof_disciplina, $prof_descricao_p, $prof_descricao_g, $prof_facebook;

    function __construct() {
        parent::__construct();
    }

    /**
     * Busca  todos os professores sem filtrar
     */
    function GetProfessores() {
        $query = "SELECT * FROM {$this->prefix}professores";
        $query .= " ORDER BY prof_id DESC";
 
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca  todos os professores das categorias
     */
    function GetProfessoresCarousel() {
        $query = "SELECT * FROM {$this->prefix}professores";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param INT $id id de Datas Importantes
     */
    function GetProfessoresID($id) {
        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}professores ";
        $query .= " WHERE prof_id = :id ";
        // passo parametros
        $params = array(':id' => (int) $id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
    }

    /**
     * 
     * @param string $nome do produto para buscar
     */
    function GetProfessoresByNome($nome = null) {
        $nome = filter_var($nome, FILTER_SANITIZE_STRING);
        $query = "SELECT * FROM {$this->prefix}professores p";
        $query .= " AND prof_nome LIKE :nome";
        $params = array(':prof_nome' => '%' . $nome . '%');
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    /**
     * retorna o array com os itens da tabela
     */
    private function GetLista() {

        $i = 1;
        while ($lista = $this->ListarDados()):

            $this->itens[$i] = array(
                'prof_id' => $lista['prof_id'],
                'prof_nome' => $lista['prof_nome'],
                'prof_img_atual' => $lista['prof_img'],
                'prof_img' => Rotas::ImageLink($lista['prof_img'], 1000, 505),
                'prof_img_p' => Rotas::ImageLink($lista['prof_img'], 135, 135),
                'prof_img_g' => Rotas::ImageLink($lista['prof_img'], 1920, 1280),
                'prof_disciplina' => $lista['prof_disciplina'],
                'prof_facebook' => $lista['prof_facebook'],
                'prof_img_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['prof_img'],
            );
            $i++;
        endwhile;
    }

    /**
     * PREPARA TODOS OS PROFESSORES ANTES DE CADASTRAR NO BANCO DE DADOS 
      Preparando todos os campos antes de gravar no banco
     */
    function Preparar($prof_nome, $prof_img, $prof_disciplina, $prof_facebook) {
        $this->setProf_nome($prof_nome);
        $this->setProf_img($prof_img);
        $this->setProf_disciplina($prof_disciplina);
        $this->setProf_facebook($prof_facebook);
    }

    /**
     * INSERE / CADASTRA OS PROFESSORES NO BANCO DE DADOS
     *  insere os dados no banco apos terem sido preparados
     */
    function Inserir() {

        $query = "INSERT INTO {$this->prefix}professores ( prof_nome, prof_img, prof_disciplina, prof_facebook )";
        $query .= " VALUES ";
        $query .= " ( :prof_nome, :prof_img, :prof_disciplina, :prof_facebook)";

        $params = array(
            ':prof_nome' => $this->getProf_nome(),
            ':prof_img' => $this->getProf_img(),
            ':prof_disciplina' => $this->getProf_disciplina(),
            ':prof_facebook' => $this->getProf_facebook(),
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * ALTERA O CADASTRO DOS PROFESSORES NO BANCO DE DADOS PELO ID 
     *  metodo que altera  um produto existente 
     */
    function Alterar($id) {

        //con_categoria, con_nome , con_desc, con_img, con_slug
        $query = " UPDATE {$this->prefix}professores SET prof_nome=:prof_nome, prof_img=:prof_img, prof_disciplina=:prof_disciplina, prof_facebook=:prof_facebook";
        $query .= " WHERE prof_id = :prof_id";
        $params = array(
            ':prof_nome' => $this->getProf_nome(),
            ':prof_img' => $this->getProf_img(),
            ':prof_disciplina' => $this->getProf_disciplina(),
            ':prof_facebook' => $this->getProf_facebook(),
            ':prof_id' => (int) $id,
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * DELETA O CADASTRO DOS PROFESOSRES DE ACORDO COM O  ID CADASTRADO
     * @param int $id do produto que vai apagar 
     */
    function Apagar($id) {
        $query = "DELETE FROM {$this->prefix}professores";
        $query .= " WHERE prof_id= :id";
        $params = array(':id' => (int) $id);
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    function getProf_nome() {
        return $this->prof_nome;
    }

    function getProf_img() {
        return $this->prof_img;
    }

    function getProf_disciplina() {
        return $this->prof_disciplina;
    }

    function getProf_descricao_p() {
        return $this->prof_descricao_p;
    }

    function getProf_descricao_g() {
        return $this->prof_descricao_g;
    }

    function getProf_facebook() {
        return $this->prof_facebook;
    }

    function setProf_nome($prof_nome) {
        $this->prof_nome = $prof_nome;
    }

    function setProf_img($prof_img) {
        $this->prof_img = $prof_img;
    }

    function setProf_disciplina($prof_disciplina) {
        $this->prof_disciplina = $prof_disciplina;
    }

    function setProf_descricao_p($prof_descricao_p) {
        $this->prof_descricao_p = $prof_descricao_p;
    }

    function setProf_descricao_g($prof_descricao_g) {
        $this->prof_descricao_g = $prof_descricao_g;
    }

    function setProf_facebook($prof_facebook) {
        $this->prof_facebook = $prof_facebook;
    }

}
