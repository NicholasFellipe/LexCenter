<?php

/**
 * descricao Categorias
 *
 * @author adrianosites.com.br
 */
class Categorias extends Conexao {

    protected $cate_id,
            $cate_nome,
            $cate_img,
            $cate_slug;

    function __construct() {
        parent::__construct();
    }

    /**
     * retorna a sql da consulta de categorias 
     */
    function GetCategorias() {
        $query = "SELECT * FROM {$this->prefix}categorias ORDER BY cate_nome";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

     /**
     * 
     * @param INT $id id de CATEGORIAS
     */
    function GetCeteID($id) {
        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}categorias ";
        $query .= " WHERE cate_id = :id ";
        // passo parametros
        $params = array(':id' => (int) $id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
    }
    /**
     * retorna o array com os itens da tabela
     */
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cate_id' => $lista['cate_id'],
                'cate_nome' => $lista['cate_nome'],
                'cate_img_atual' => $lista['cate_img'],
                'cate_img' => Rotas::ImageLink($lista['cate_img'], 1000, 505),
                'cate_img_p' => Rotas::ImageLink($lista['cate_img'], 150, 70),
                'cate_img_g' => Rotas::ImageLink($lista['cate_img'], 1920, 1280),
                'cate_slug' => $lista['cate_slug'],
                'cate_link' => Rotas::pag_Categorias() . '/' . $lista['cate_id'] . '/' . $lista['cate_slug'],
                'cate_link_adm' => Rotas::pag_ProdutosADM() . '/' . $lista['cate_id'] . '/' . $lista['cate_slug'],
                'cate_img_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['cate_img'],
            );
            $i++;
        endwhile;
    }
/**
     * 
      Preparando todos os campos antes de gravar no banco
     */
    function Preparar($cate_nome,$cate_img, $cate_slug=null) {     
      $this->setCate_nome($cate_nome);
        $this->setCate_img($cate_img);
        $this->setCate_slug($cate_nome);   
    }
    /**
     * INSERE/CRIA UMA NOVA CATEGORIA
     * @param STRING $cate_nome nome da categoria 
     * @return boolean
     */
    function Inserir() {
        // monto a SQL
        $query = " INSERT INTO {$this->prefix}categorias (cate_nome, cate_img,cate_slug )";
        $query .= " VALUES (:cate_nome, :cate_img,:cate_slug )";
        // passo so parametros
        $params = array(
            ':cate_nome' => $this->getCate_nome(),
            ':cate_img' => $this->getCate_img(),
            ':cate_slug' => $this->getCate_slug(),
        );
        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * EDITAR OU ALTERAR A CATEGORIA
     * @param INT $id da categoria
     * @param string $nome categoria
     */
    function Alterar($id) {
        // monto a SQL
        $query = " UPDATE {$this->prefix}categorias ";
        $query .= " SET cate_nome = :cate_nome, cate_img = :cate_img,cate_slug = :cate_slug ";
        $query .= " WHERE cate_id = :cate_id ";
        // passo so parametros
        $params = array(
            ':cate_nome' => $this->getCate_nome(),
            ':cate_img' => $this->getCate_img(),
            ':cate_slug' => $this->getCate_slug(),
            ':cate_id' => (int) $id,
        );
        // executo a minha SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;

        else:
            return FALSE;

        endif;
    }

    /**
     * 
     * @param INT $cate_id id da categoria
     */
    function Apagar($cate_id) {
        // verifico se  tenho itens antes de apagar a categoria
        $pro = new Produtos();
        $pro->GetProdutosCate($cate_id);
        if ($pro->TotalDados() > 0):
            echo '<div class="container"><div class="alert alert-danger text-center" > Esta categoria tem: ';
            echo $pro->TotalDados();
            echo ' produtos. Não pode ser apagada, para apagar precisa primeiro apagar os produtos dela </div></div>';
        // se nao tiver produtos nela  eu apago 
        else:
            // monto a SQL
            $query = " DELETE FROM {$this->prefix}categorias";
            $query .= " WHERE cate_id = :id";

            // passo os parametros
            $params = array(':id' => (int) $cate_id);
            // executo a SQL
            $this->ExecuteSQL($query, $params);
        endif;
    }

    function getCate_id() {
        return $this->cate_id;
    }

    function getCate_nome() {
        return $this->cate_nome;
    }

    function getCate_img() {
        return $this->cate_img;
    }

    function getCate_slug() {
        return $this->cate_slug;
    }

    function setCate_id($cate_id) {
        $this->cate_id = $cate_id;
    }

    function setCate_nome($cate_nome) {
        $this->cate_nome = $cate_nome;
    }

    function setCate_img($cate_img) {
        $this->cate_img = $cate_img;
    }

    function setCate_slug($cate_slug) {
        $this->cate_slug = Sistema::GetSlug($cate_slug);
    }


}
