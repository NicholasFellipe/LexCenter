<?php

/**
 * Description of Banner
 *
 * @author nicho
 */
class Banner extends Conexao {

    private $ban_nomeconcurso, $ban_descricao, $ban_img, $ban_linkcurso;

    function __construct() {
        parent::__construct();
    }

    /**
     * Busca  todos os Banners
     */
    function GetBanner() {
        $query = "SELECT * FROM {$this->prefix}banner";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param INT $id id do Banner 
     */
    function GetBannerID($id) {
        // monto a SQL
        $query = " SELECT * FROM {$this->prefix}banner ";
        $query .= " WHERE ban_id = :id ";
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
                'ban_id' => $lista['ban_id'],
                'ban_nomeconcurso' => $lista['ban_nomeconcurso'],
                'ban_descricao' => $lista['ban_descricao'],
                'ban_img_atual' => $lista['ban_img'],
                'ban_img' => Rotas::ImageLink($lista['ban_img'], 1280, 720),
                'ban_img_p' => Rotas::ImageLink($lista['ban_img'], 140, 80),
                'ban_img_g' => Rotas::ImageLink($lista['ban_img'], 1920, 1280),
                'ban_linkcurso' => $lista['ban_linkcurso'],
                'ban_img_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['ban_img'],
            );
            $i++;
        endwhile;
    }

    /**
     * 
      Preparando todos os campos antes de gravar no banco
     */
    function Preparar($ban_nomeconcurso, $ban_descricao, $ban_img, $ban_linkcurso) {
        $this->setBan_nomeconcurso($ban_nomeconcurso);
        $this->setBan_descricao($ban_descricao);
        $this->setBan_img($ban_img);
        $this->setBan_linkcurso($ban_linkcurso);
    }

    /**
     * INSERE UM BANNER PARA A PAGINA INICIAL
     *  insere os dados no banco apos terem sido preparados
     */
    function Inserir() {
        $query = "INSERT INTO {$this->prefix}banner (ban_nomeconcurso, ban_descricao , ban_img, ban_linkcurso )";
        $query .= " VALUES ";
        $query .= " ( :ban_nomeconcurso, :ban_descricao , :ban_img, :ban_linkcurso)";
        $params = array(
            ':ban_nomeconcurso' => $this->getBan_nomeconcurso(),
            ':ban_descricao' => $this->getBan_descricao(),
            ':ban_img' => $this->getBan_img(),
            ':ban_linkcurso' => $this->getBan_linkcurso(),
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * ALTERA O BANNER DA PAGINA INICIAL
     *  metodo que altera  um produto existente 
     */
    function Alterar($id) {

        //con_categoria, con_nome , con_desc, con_img, con_slug
        $query = " UPDATE {$this->prefix}banner SET ban_nomeconcurso=:ban_nomeconcurso, ban_descricao=:ban_descricao,";
        $query .= " ban_img=:ban_img, ban_linkcurso=:ban_linkcurso";
        $query .= " WHERE ban_id = :ban_id";
        $params = array(
            ':ban_nomeconcurso' => $this->getBan_nomeconcurso(),
            ':ban_descricao' => $this->getBan_descricao(),
            ':ban_img' => $this->getBan_img(),
            ':ban_linkcurso' => $this->getBan_linkcurso(),
            ':ban_id' => (int) $id,
        );
// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * APAGAR BANNER DA PAGINA INICIAL
     * @param int $id do produto que vai apagar 
     */
    function Apagar($id) {
        $query = "DELETE FROM {$this->prefix}banner";
        $query .= " WHERE ban_id= :id";
        $params = array(':id' => (int) $id);
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    function getBan_nomeconcurso() {
        return $this->ban_nomeconcurso;
    }

    function getBan_descricao() {
        return $this->ban_descricao;
    }

    function getBan_img() {
        return $this->ban_img;
    }

    function getBan_linkcurso() {
        return $this->ban_linkcurso;
    }

    function setBan_nomeconcurso($ban_nomeconcurso) {
        $this->ban_nomeconcurso = $ban_nomeconcurso;
    }

    function setBan_descricao($ban_descricao) {
        $this->ban_descricao = $ban_descricao;
    }

    function setBan_img($ban_img) {
        $this->ban_img = $ban_img;
    }

    function setBan_linkcurso($ban_linkcurso) {
        $this->ban_linkcurso = $ban_linkcurso;
    }

}