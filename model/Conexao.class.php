<?php

/**
 * descricao  - gerencia a conexao com o BD
 *
 * @author adrianosites.com.br
 */
class Conexao extends Config {

    private $host,
            $user,
            $senha,
            $banco;
    protected $obj,
            $itens = array(),
            $prefix;
    public $paginacaolinks;

    /**
     *
     * @var int numero total de paginas
     */
    public $totalpags;

    function __construct() {

        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->senha = self::BD_SENHA;
        $this->banco = self::BD_BANCO;

        $this->prefix = self::BD_PREFIX;

        try {

            if ($this->Conectar() == null):

                $this->Conectar();

            endif;
        } catch (Exception $e) {

            exit($e->getMessage() . ' <div class="container"><h2 class="alert alert-danger text-center">OPS... Erro no banco de dados, tente novamente mais tarde</h2></div>');
        }
    }

    /**
     * 
     * @return \PDO link  com dados da conexao
     */
    private function Conectar() {

        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );

        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->user, $this->senha, $options);



        return $link;
    }

    /**
     * 
     * @param type string é a SQL passada
     * @param array são parametros da sql
     * @return PDO uma consulta
     */
    function ExecuteSQL($query, array $params = NULL) {

        $this->obj = $this->Conectar()->prepare($query);

        // contagem dos elementos do array params
        if (@count($params) > 0):
            // varrendo o array e pagendo os dados
            foreach ($params as $key => $value):

                $this->obj->bindValue($key, $value);

            endforeach;

        endif;

        return $this->obj->execute();
    }

    /**
     * 
     * @return array com dados da SQL
     */
    function ListarDados() {

        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * 
     * @return int com total de resgistros
     */
    function TotalDados() {

        return $this->obj->rowCount();
    }

    /**
     * 
     * @return array com itens  recebidos do banco
     */
    function GetItens() {
        return $this->itens;
    }

    /**
     * 
     * @param string campos da tabela
     * @param string nome da tabela
     * @return string com complemento da SQL para limitar 
     */
    function PaginacaoLinks($campo, $tabela) {

        // instancia o objeto de paginação
        $pag = new Paginacao();

        //executo a base da paginação
        $pag->GetPaginacao($campo, $tabela);

        // recebo os links das paginas pelo numero de paginas
        $this->paginacaolinks = $pag->link;

        //recebo o total de paginas
        $this->totalpags = $pag->totalpags;

        // definino o inicio e o fim para limitar a sqç
        $inicio = $pag->inicio;
        $limite = $pag->limite; //  1 2 4 -  6 8 9  - 15 20 23 -  25
        //
        // retorno a SQL de complemento

        if ($this->totalpags > 0):

            return " limit {$inicio},{$limite}";
        else:
            return " ";
        endif;
    }

    /*
     * retorna uma lista  com as paginas para escolher
     */

    protected function Paginacao($paginas = array()) {

        // monto a UL (LISTA)  com os itens da pagianção
        $pag = '<ul class="pagination">';

        $pag .= '<li> <a href="?p=1"> Início</a></li>';

        foreach ($paginas as $p):
            $pag .= '<li><a class="active" href="?p=' . $p . '">' . $p. '</a></li>';

        endforeach;

        $pag .= '<li><a  href="?p=' . $this->totalpags . '"> Final</a></li>';

        $pag .='</ul>';
        // retorna a paginação somente se tiver + de uma página de itens
        if ($this->totalpags > 1):
            return $pag;
        endif;
    }

    /**
     * 
     * @return array com a paginaçao em links
     */
    function ShowPaginacao() {
        //  retorno a paginação para o controller
        return $this->Paginacao($this->paginacaolinks);
    }
}