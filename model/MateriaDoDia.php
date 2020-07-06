<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MateriaDoDia
 *
 * @author nicho
 */
class MateriaDoDia extends Conexao {

    private $mat_nome, $mat_disciplina, $mat_descricao, $mat_arquivo, $mat_data;

    function __construct() {
        parent::__construct();
    }

    /**
     * Busca  todas as DATAS IMPORTANTES filtrando com 3
     */
    function GetDatasMax3() {
        $query = "SELECT * FROM {$this->prefix}provadata limit 3;";
        $query .= " ORDER BY prv_data DESC";
// echo $query;  
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca  todos as DATAS Filtrando monstrando somente as 
     * datas que forem maiores que a data atual com limite de 3
     */
    function GetMateriaDoDiaALL() {
        $query = "SELECT * FROM {$this->prefix}materiadodia ";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param string $nome da DATA para buscar
     */
    function GetDatasByNome($nome = null) {

        $nome = filter_var($nome, FILTER_SANITIZE_STRING);

        $query = "SELECT * FROM {$this->prefix}provadata";
        $query .= " AND prv_nome LIKE :nome";
        $params = array(':prv_nome' => '%' . $nome . '%');
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    /**
     * 
     * @param INT $id id de Datas Importantes
     */
    function GetMateriaID($id) {
        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}materiadodia ";
        $query .= " WHERE mat_id = :id ";
        // passo parametros
        $params = array(':id' => (int) $id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
    }

    /**
     * ARRAY DAS DATAS CADASTRADAS DO SISTEMA
     * retorna o array com os itens da tabela
     */
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):

            $this->itens[$i] = array(
                'mat_id' => $lista['mat_id'],
                'mat_nome' => $lista['mat_nome'],
                'mat_disciplina' => $lista["mat_disciplina"],
                'mat_descricao' => $lista["mat_descricao"],
                'mat_arquivo_atual' => $lista['mat_arquivo'],
                'mat_arquivo' => Rotas::ArquivoLink($lista['mat_arquivo']),
                'mat_data' => Sistema::Fdata($lista['mat_data']),
                'mat_data_us' => $lista['mat_data'],
                'mat_arquivo_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['mat_arquivo'],
            );
            $i++;
        endwhile;
    }

    /**
     * 
      Preparando todos os campos antes de gravar no banco
     */
    function Preparar($mat_nome, $mat_disciplina, $mat_descricao, $mat_arquivo, $mat_data) {
        $this->setMat_nome($mat_nome);
        $this->setMat_disciplina($mat_disciplina);
        $this->setMat_descricao($mat_descricao);
        $this->setMat_arquivo($mat_arquivo);
        $this->setMat_data($mat_data);
    }

    /**
     * INSERE/CADASTRA AS DATAS NO BANCO
     *  insere os dados no banco apos terem sido preparados
     */
    function Inserir() {
        $query = "INSERT INTO {$this->prefix}materiadodia ( mat_nome, mat_disciplina, mat_descricao, mat_arquivo, mat_data )";
        $query .= " VALUES ";
        $query .= " ( :mat_nome, :mat_disciplina, :mat_descricao, :mat_arquivo, :mat_data)";
        $params = array(
            ':mat_nome' => $this->getMat_nome(),
            ':mat_disciplina' => $this->getMat_disciplina(),
            ':mat_descricao' => $this->getMat_descricao(),
            ':mat_arquivo' => $this->getMat_arquivo(),
            ':mat_data' => $this->getMat_data(),
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * ALTERA AS DATAS DA TABELA 
     *  metodo que altera  um produto existente 
     */
    function Alterar($id) {
        //con_categoria, con_nome , con_desc, con_img, con_slug
        $query = " UPDATE {$this->prefix}materiadodia SET mat_nome=:mat_nome, mat_disciplina=:mat_disciplina, mat_descricao=:mat_descricao, mat_arquivo=:mat_arquivo, mat_data=:mat_data ";
        $query .= " WHERE mat_id = :mat_id";
        $params = array(
            ':mat_nome' => $this->getMat_nome(),
            ':mat_disciplina' => $this->getMat_disciplina(),
            ':mat_descricao' => $this->getMat_descricao(),
            ':mat_arquivo' => $this->getMat_arquivo(),
            ':mat_data' => $this->getMat_data(),
            ':mat_id' => (int) $id,
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * DELETA UMA DATA DA PROVA DE ACORDO COM SU ID
     * @param int $id do produto que vai apagar 
     */
    function Apagar($id) {
        $query = "DELETE FROM {$this->prefix}materiadodia";
        $query .= " WHERE mat_id= :id";
        $params = array(':id' => (int) $id);
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }
    
    function ApagarTudo() {
        $query = "DELETE FROM {$this->prefix}materiadodia";

        if ($this->ExecuteSQL($query)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    function getMat_nome() {
        return $this->mat_nome;
    }

    function getMat_disciplina() {
        return $this->mat_disciplina;
    }

    function getMat_descricao() {
        return $this->mat_descricao;
    }

    function getMat_arquivo() {
        return $this->mat_arquivo;
    }

    function getMat_data() {
        return $this->mat_data;
    }

    function setMat_nome($mat_nome) {
        $this->mat_nome = $mat_nome;
    }

    function setMat_disciplina($mat_disciplina) {
        $this->mat_disciplina = $mat_disciplina;
    }

    function setMat_descricao($mat_descricao) {
        $this->mat_descricao = $mat_descricao;
    }

    function setMat_arquivo($mat_arquivo) {
        $this->mat_arquivo = $mat_arquivo;
    }

    function setMat_data($mat_data) {
        $this->mat_data = $mat_data;
    }

}
