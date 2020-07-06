<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DatasImportantes
 * DATAS IMPORTANTES DAS PROXIMAS PROVAS DOS CONCURSOS
 * @author nicho
 */
class InscricoesAbertas extends Conexao {

    private $ins_nome, $ins_img, $ins_dataini, $ins_datafim, $ins_linkinscricao;

    function __construct() {
        parent::__construct();
    }

    /**
     * Busca  todas as DATAS IMPORTANTES filtrando com 3
     */
    function GetDatasMax3() {
        $query = "SELECT * FROM {$this->prefix}inscricoes limit 3;";
        $query .= " ORDER BY ins_dataini DESC";
// echo $query;  
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca  todos as DATAS Filtrando monstrando somente as 
     * datas que forem maiores que a data atual com limite de 3
     */
    function GetDatasALL() {
        $query = "SELECT * FROM {$this->prefix}inscricoes  WHERE ins_datafim > NOW() ORDER BY ins_dataini ASC LIMIT 6";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param string $nome da DATA para buscar
     */
    function GetDatasByNome($nome = null) {

        $nome = filter_var($nome, FILTER_SANITIZE_STRING);

        $query = "SELECT * FROM {$this->prefix}inscricoes";
        $query .= " AND ins_nome LIKE :nome";
        $params = array(':ins_nome' => '%' . $nome . '%');
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    /**
     * 
     * @param INT $id id de Datas Importantes
     */
    function GetDatasID($id) {
        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}inscricoes ";
        $query .= " WHERE ins_id = :id ";
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
                'ins_id' => $lista['ins_id'],
                'ins_nome' => $lista['ins_nome'],
                'ins_img_atual' => $lista['ins_img'],
                'ins_img' => Rotas::ImageLink($lista['ins_img'], 1000, 505),
                'ins_img_p' => Rotas::ImageLink($lista['ins_img'], 145, 90),
                'ins_img_g' => Rotas::ImageLink($lista['ins_img'], 1000, 500),
//                PEGANDO A HORA DO BANCO E A FORMATACAO DO BANCO TAMBEM
                'ins_dataini' => Sistema::Fdata($lista['ins_dataini']),
                'ins_dataini_us' => $lista['ins_dataini'],
                'ins_datafim' => Sistema::Fdata($lista['ins_datafim']),
                'ins_datafim_us' => $lista['ins_datafim'],
                'ins_linkinscricao' => $lista['ins_linkinscricao'],
                'ins_img_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['ins_img'],
            );
            $i++;
        endwhile;
    }

    /**
     * 
      Preparando todos os campos antes de gravar no banco
     */
    function Preparar($ins_nome, $ins_img, $ins_dataini, $ins_datafim, $ins_linkinscricao) {
        $this->setIns_nome($ins_nome);
        $this->setIns_img($ins_img);
        $this->setIns_dataini($ins_dataini);
        $this->setIns_datafim($ins_datafim);
        $this->setIns_linkinscricao($ins_linkinscricao);
    }

    /**
     * INSERE/CADASTRA AS DATAS NO BANCO
     *  insere os dados no banco apos terem sido preparados
     */
    function Inserir() {
        $query = "INSERT INTO {$this->prefix}inscricoes (ins_nome, ins_img, ins_dataini, ins_datafim, ins_linkinscricao )";
        $query .= " VALUES ";
        $query .= " ( :ins_nome, :ins_img, :ins_dataini, :ins_datafim, :ins_linkinscricao )";
        $params = array(
            ':ins_nome' => $this->getIns_nome(),
            ':ins_img' => $this->getIns_img(),
            ':ins_dataini' => $this->getIns_dataini(),
            ':ins_datafim' => $this->getIns_datafim(),
            ':ins_linkinscricao' => $this->getIns_linkinscricao(),
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
        $query = " UPDATE {$this->prefix}inscricoes SET ins_nome=:ins_nome, ins_img=:ins_img,  "
                . "ins_dataini=:ins_dataini, ins_datafim=:ins_datafim, ins_linkinscricao=:ins_linkinscricao ";
        $query .= " WHERE ins_id = :ins_id";
        $params = array(
            ':ins_nome' => $this->getIns_nome(),
            ':ins_img' => $this->getIns_img(),
            ':ins_dataini' => $this->getIns_dataini(),
            ':ins_datafim' => $this->getIns_datafim(),
            ':ins_linkinscricao' => $this->getIns_linkinscricao(),
            ':ins_id' => (int) $id,
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
        $query = "DELETE FROM {$this->prefix}inscricoes";
        $query .= " WHERE ins_id= :id";
        $params = array(':id' => (int) $id);
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    function getIns_nome() {
        return $this->ins_nome;
    }

    function getIns_img() {
        return $this->ins_img;
    }

    function getIns_dataini() {
        return $this->ins_dataini;
    }

    function getIns_datafim() {
        return $this->ins_datafim;
    }

    function getIns_linkinscricao() {
        return $this->ins_linkinscricao;
    }

    function setIns_nome($ins_nome) {
        $this->ins_nome = $ins_nome;
    }

    function setIns_img($ins_img) {
        $this->ins_img = $ins_img;
    }

    function setIns_dataini($ins_dataini) {
        $this->ins_dataini = $ins_dataini;
    }

    function setIns_datafim($ins_datafim) {
        $this->ins_datafim = $ins_datafim;
    }

    function setIns_linkinscricao($ins_linkinscricao) {
        $this->ins_linkinscricao = $ins_linkinscricao;
    }



}
