<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DepoimentosAprovados
 *
 * @author nicholas
 */
class DepoimentosAprovados extends Conexao{
     private $dep_nomealuno, $dep_concurso, $dep_img, $dep_depoimento;
     
//     dep_nomealuno
//  dep_concurso 
//   dep_img
//   dep_depoimento
       function __construct() {
        parent::__construct();
    }

   

    /**
     * Busca  todos os DEPOIMENTOS SEM FILTRO
     */
    function GetDepoimentosALL() {
        $query = "SELECT * FROM {$this->prefix}depoimentoaprovados ";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param string $nome da DATA para buscar
     */
    function GetDatasByNome($nome = null) {

        $nome = filter_var($nome, FILTER_SANITIZE_STRING);

        $query = "SELECT * FROM {$this->prefix}depoimentoaprovados";
        $query .= " AND dep_nomealuno LIKE :nome";
        $params = array(':dep_nomealuno' => '%' . $nome . '%');
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }
    
     /**
     * 
     * @param INT $id id de DEPOIMENTO DOS APROVADOS
     */
    function GetDepoimentosID($id) {
        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}depoimentoaprovados ";
        $query .= " WHERE dep_id = :id ";
        // passo parametros
        $params = array(':id' => (int) $id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
    }

    /**
     * ARRAY DOD DEPOIMENTOS CADASTRADAS DO SISTEMA
     * retorna o array com os itens da tabela
     */
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):

            $this->itens[$i] = array(
                'dep_id' => $lista['dep_id'],
                'dep_nomealuno' => $lista['dep_nomealuno'],
                'dep_concurso' => $lista['dep_concurso'],
                  'dep_img_atual' => $lista['dep_img'],
                'dep_img' => Rotas::ImageLink($lista['dep_img'], 1000, 505),
                'dep_img_p' => Rotas::ImageLink($lista['dep_img'],200, 190),
                'dep_img_g' => Rotas::ImageLink($lista['dep_img'], 1000, 500),
                'dep_depoimento' => $lista['dep_depoimento'],
                'dep_img_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['dep_img'],
            );
            $i++;
        endwhile;
    }

    /**
     * 
      Preparando todos os campos antes de gravar no banco
     */
    function Preparar($dep_nomealuno,  $dep_concurso, $dep_img, $dep_depoimento) {     
        $this->setDep_nomealuno($dep_nomealuno);
        $this->setDep_concurso($dep_concurso);
        $this->setDep_img($dep_img);
        $this->setDep_depoimento($dep_depoimento);    
    }

    /**
     * INSERE/CADASTRA OS DEPOIMENTOS NO BANCO
     *  insere os dados no banco apos terem sido preparados
     */
    function Inserir() {
        $query = "INSERT INTO {$this->prefix}depoimentoaprovados ( dep_nomealuno, dep_concurso, dep_img, dep_depoimento )";
        $query .= " VALUES ";
        $query .= " ( :dep_nomealuno, :dep_concurso, :dep_img, :dep_depoimento)";
        $params = array(
            ':dep_nomealuno' => $this->getDep_nomealuno(),
            ':dep_concurso' => $this->getDep_concurso(),
            ':dep_img' => $this->getDep_img(),
            ':dep_depoimento' => $this->getDep_depoimento(),
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * ALTERA OS DEPOIMENTOS DA TABELA 
     *  metodo que altera  um produto existente 
     */
    function Alterar($id) {
        //con_categoria, con_nome , con_desc, con_img, con_slug
        $query = " UPDATE {$this->prefix}depoimentoaprovados SET dep_nomealuno=:dep_nomealuno, dep_concurso=:dep_concurso, "
        . "dep_img=:dep_img, dep_depoimento=:dep_depoimento ";
        $query .= " WHERE dep_id = :dep_id";
        $params = array(
            ':dep_nomealuno' => $this->getDep_nomealuno(),
            ':dep_concurso' => $this->getDep_concurso(),
            ':dep_img' => $this->getDep_img(),
            ':dep_depoimento' => $this->getDep_depoimento(),
            ':dep_id' => (int) $id,
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * DELETA UM depoimento DE ACORDO COM SU ID
     * @param int $id do produto que vai apagar 
     */
    function Apagar($id) {
        $query = "DELETE FROM {$this->prefix}depoimentoaprovados";
        $query .= " WHERE dep_id= :id";
        $params = array(':id' => (int) $id);
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }
    ////  GETERS E SETERS
    
    function getDep_nomealuno() {
        return $this->dep_nomealuno;
    }

    function getDep_img() {
        return $this->dep_img;
    }

    function getDep_concurso() {
        return $this->dep_concurso;
    }

    function getDep_depoimento() {
        return $this->dep_depoimento;
    }

    function setDep_nomealuno($dep_nomealuno) {
        $this->dep_nomealuno = $dep_nomealuno;
    }

    function setDep_img($dep_img) {
        $this->dep_img = $dep_img;
    }

    function setDep_concurso($dep_concurso) {
        $this->dep_concurso = $dep_concurso;
    }

    function setDep_depoimento($dep_depoimento) {
        $this->dep_depoimento = $dep_depoimento;
    }


    
}
