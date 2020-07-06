<?php

/**
 * descricao Produtos
 *
 * @author adrianosites.com.br
 */
class Produtos extends Conexao {

    private $con_categoria, $con_nome, $con_desc_pequena, $con_desc,
            $con_img, $con_tempocurso, $con_disciplinas, $con_aprovacaotaxa,
            $con_dataini, $con_datafim, $con_datapostagem, $con_arquivo, $con_slug, $cate_nome, $cate_id;

    function __construct() {
        parent::__construct();
    }

    /**
     * Busca  todos os CONCURSOS sem filtrar
     */
    function GetProdutos() {
        $query = "SELECT * FROM {$this->prefix}concursos p INNER JOIN {$this->prefix}categorias c ON p.con_categoria = c.cate_id";
        $query .= " ORDER BY con_id DESC";
        $query .= $this->PaginacaoLinks("con_id", $this->prefix . "concursos");
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca 3 produtos da CATEGORIA CONCURSOS PUBLICOS ORDER BY - PAGINA HOME 
     */
    function GetProdutosRecomendados() {
        $query = "SELECT * FROM {$this->prefix}concursos INNER JOIN {$this->prefix}categorias  WHERE con_categoria=cate_id AND con_categoria=10 ORDER BY con_datapostagem DESC limit 3 ;";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca  3 produtos da CATEGORIA CONCURSOS PUBLICOS  RAND()
     */
    function GetProdutosAleatorio() {
        $query = "SELECT DISTINCT * FROM {$this->prefix}concursos INNER JOIN {$this->prefix}categorias  WHERE con_categoria=cate_id AND cate_id=10 ORDER BY RAND() limit 3;";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca  2 produtos da categoria BLOG DO CONCURSEIRO ORDER BY - PAGINA HOME
     */
    function GetBlogDoConcurseiro() {
        $query = "SELECT * FROM {$this->prefix}concursos INNER JOIN {$this->prefix}categorias  WHERE con_categoria=cate_id AND con_categoria=11 ORDER BY con_datapostagem DESC limit 2;";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca  2 produtos da categoria PROVAS ANTERIORES ORDER BY - PAGINA HOME
     */
    function GetProvasAnteriores() {
        $query = "SELECT * FROM {$this->prefix}concursos INNER JOIN {$this->prefix}categorias  WHERE con_categoria=cate_id AND con_categoria=6 ORDER BY con_datapostagem DESC limit 2;";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * Busca  4 produtos da categoria BLOG DO CONCURSEIRO RAND()
     */
    function GetBlogDoConcurseiroRECOMENDADO() {
        $query = "SELECT DISTINCT * FROM {$this->prefix}concursos INNER JOIN {$this->prefix}categorias  WHERE con_categoria=cate_id AND cate_id=11 ORDER BY RAND() limit 4;";
        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    /**
     * 
     * @param INT id do produto
     */
    function GetProdutosID($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM {$this->prefix}concursos p INNER JOIN {$this->prefix}categorias c ON p.con_categoria = c.cate_id";
        $query .= " AND con_id = :id";
        $params = array(':id' => (int) $id);
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    /**
     * PESQUISA OS ITENS PELA CATEGORIA ORDENADAS DE ACORDO COM A DATA DE CADASTRO!!
     * @param INT  id da categoria 
     */
    function GetProdutosCate($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM {$this->prefix}concursos  INNER JOIN {$this->prefix}categorias  ON con_categoria = cate_id";
        $query .= " AND con_categoria = :id ORDER BY con_datapostagem DESC ";
        $query .= $this->PaginacaoLinks("con_id", $this->prefix . "concursos WHERE con_categoria=" . (int) $id);
        $params = array(':id' => (int) $id);
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    /**
     * 
     * @param string $nome do produto para buscar
     */
    function GetProdutosNome($nome = null) {

        $nome = filter_var($nome, FILTER_SANITIZE_STRING);

        $query = "SELECT * FROM {$this->prefix}concursos p INNER JOIN {$this->prefix}categorias c ON p.con_categoria = c.cate_id";
        $query .= " AND con_nome LIKE :nome";
        $params = array(':nome' => '%' . $nome . '%');
        $this->ExecuteSQL($query, $params);
        $this->GetLista();
    }

    /**
     * 
     * @param string Resultado de pesquisa na pagina pesquisa
     */
    function GetPesquisa($pesquisa) {
        if (isset($_REQUEST['pesquisar']) && ($_REQUEST['pesquisar'] != NULL )):
            $BD_HOST = Config::BD_HOST;
            $BD_USER = Config::BD_USER;
            $BD_SENHA = Config::BD_SENHA;
            $BD_BANCO = Config::BD_BANCO;
            //Criar a conexao
            $conn = mysqli_connect($BD_HOST, $BD_USER, $BD_SENHA, $BD_BANCO);
            $pesquisar = $_POST['pesquisar'];
            $sql = "SELECT * FROM {$this->prefix}concursos INNER JOIN as_categorias WHERE con_nome LIKE '%$pesquisar%' LIMIT 10";
            $sql = mysqli_query($conn, $sql);
            echo '<section class="blog-area blog-page section-padding-100">
                        <div class="container-fluid">
                        <div class="row">
                        ';
            while ($rows_cursos = mysqli_fetch_array($sql)) {
                echo '  
                    
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                            <picture><img src="' . Rotas::ImageLink($rows_cursos['con_img'], 1000, 505) . '" alt="' . $rows_cursos['con_nome'] . '" /></picture>
                                <div class="blog-content">
                                    <a href="' . Rotas::pag_ProdutosInfo() . '/' . $rows_cursos['con_id'] . '/' . $rows_cursos['con_slug'] . '>
                                        <h4>' . $rows_cursos['con_nome'] . '</h4>
                                    </a>
                                        <div class="meta d-flex align-items-center">
                                               <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                <a href="' . Rotas::pag_Categorias() . '/' . $rows_cursos['cate_id'] . '/' . $rows_cursos['cate_slug'] . '">' . $rows_cursos['cate_nome'] . '</a>
                                        </div>   
                                        <p>Postado em: ' . Sistema::Fdata($rows_cursos['con_datapostagem']) . '</p>
                                        <p>' . $rows_cursos['con_desc_pequena'] . '</p>               
                                </div>
                        </div> 
                    </div>
                    ';
            }
            echo '  
               </div> 
               </div>
                </section>';
        else:
            echo '
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <p class="text-danger"> Nada encontrado, pesquise novamente!</p>
                    </div>
                    
                </div>
            </div>
        </div>';
            Rotas::Redirecionar(1, Rotas::pag_Categorias());
        endif;

        
    }

    /**
     * retorna o array com os itens da tabela
     */
    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'con_id' => $lista['con_id'],
                'con_nome' => $lista['con_nome'],
                'con_desc_pequena' => $lista['con_desc_pequena'],
                'con_desc' => $lista['con_desc'],
                'con_img_atual' => $lista['con_img'],
                'con_arquivo_atual' => $lista['con_arquivo'],
                'con_img' => Rotas::ImageLink($lista['con_img'], 1000, 505),
                'con_img_p' => Rotas::ImageLink($lista['con_img'], 175, 90),
                'con_img_g' => Rotas::ImageLink($lista['con_img'], 1920, 1280),
                //RELACIONADO AS CATEGORIAS
                'cate_img' => Rotas::ImageLink($lista['cate_img'], 1920, 500),
                'cate_img_p' => Rotas::ImageLink($lista['cate_img'], 70, 70),
                'cate_img_g' => Rotas::ImageLink($lista['cate_img'], 1920, 1280),
                //TEMPO DE CURDSO EM MESES
                'con_tempocurso' => $lista['con_tempocurso'],
                //DISCIPLINAS EM QUANTIDADE DE NUMEROS
                'con_disciplinas' => $lista['con_disciplinas'],
                //TAXA DE APROVACAO EM PORCENTAGEM
                'con_aprovacaotaxa' => $lista['con_aprovacaotaxa'],
                //AS DATAS FORAM FORMATADAS PARA O FORMAOT BRASILEIRO
                'con_dataini' => Sistema::Fdata($lista['con_dataini']),
                'con_datafim' => Sistema::Fdata($lista['con_datafim']),
                //datas com o formato AMERICADO DO BANCO DE DADOS
                'con_dataini_us' => $lista['con_dataini'],
                'con_datafim_us' => $lista['con_datafim'],
                'con_datapostagem' => Sistema::Fdata($lista['con_datapostagem']),
                //FALTA ARRUMAR UPLOAD DE ARQUIVO E AS ROTAS TAMBÉM
                //'con_arquivo' => $lista['con_arquivo'],
                
                'con_slug' => $lista['con_slug'],
                'cate_nome' => $lista['cate_nome'],
                'cate_id' => $lista['cate_id'],
                'cate_slug' => $lista['cate_slug'],
                'con_img_arquivo' => Rotas::get_SiteHOME() . Rotas::get_ImagePasta() . $lista['con_arquivo'],
                //LINK DO ARQUIVO DA CATEGORIAS
                'cate_img_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['cate_img'],
                'con_arquivo_arquivo' => Rotas::get_SiteRAIZ() . '/' . Rotas::get_ImagePasta() . $lista['con_arquivo'],
            );
            $i++;
        endwhile;
    }

    /**
     * PRAPARA OS CONCURSOS PARA CADASTRAR
      Preparando todos os campos antes de gravar no banco
     */
    function Preparar($con_categoria, $con_nome, $con_desc_pequena, $con_desc, $con_img, $con_tempocurso, $con_disciplinas, $con_aprovacaotaxa, $con_dataini, $con_datafim, $con_datapostagem, $con_arquivo, $con_slug = null) {
        $this->setCon_categoria($con_categoria);
        $this->setCon_nome($con_nome);
        $this->setCon_desc_pequena($con_desc_pequena);
        $this->setCon_desc($con_desc);
        $this->setCon_img($con_img);
        $this->setCon_tempocurso($con_tempocurso);
        $this->setCon_disciplinas($con_disciplinas);
        $this->setCon_aprovacaotaxa($con_aprovacaotaxa);
        $this->setCon_dataini($con_dataini);
        $this->setCon_datafim($con_datafim);
        $this->setCon_datapostagem($con_datapostagem);
        $this->setCon_arquivo($con_arquivo);

        $this->setCon_slug($con_nome);
    }

    /**
     * INSERE/CADASTRA OS CONCURSOS NO BANCO DE DADOS
     *  insere os dados no banco apos terem sido preparados
     */
    function Inserir() {
        $query = "INSERT INTO {$this->prefix}concursos (con_categoria, con_nome , con_desc_pequena, con_desc, con_img, con_tempocurso, con_disciplinas, con_aprovacaotaxa, con_dataini, con_datafim, con_datapostagem, con_arquivo, con_slug )";
        $query .= " VALUES ";
        $query .= " ( :con_categoria, :con_nome, :con_desc_pequena, :con_desc, :con_img, :con_tempocurso, :con_disciplinas, :con_aprovacaotaxa, :con_dataini, :con_datafim, :con_datapostagem, :con_arquivo, :con_slug)";
        $params = array(
            ':con_categoria' => $this->getCon_categoria(),
            ':con_nome' => $this->getCon_nome(),
            ':con_desc_pequena' => $this->getCon_desc_pequena(),
            ':con_desc' => $this->getCon_desc(),
            ':con_img' => $this->getCon_img(),
            ':con_tempocurso' => $this->getCon_tempocurso(),
            ':con_disciplinas' => $this->getCon_disciplinas(),
            ':con_aprovacaotaxa' => $this->getCon_aprovacaotaxa(),
            ':con_dataini' => $this->getCon_dataini(),
            ':con_datafim' => $this->getCon_datafim(),
            ':con_datapostagem' => $this->getCon_datapostagem(),
            ':con_arquivo' => $this->getCon_arquivo(),
            ':con_slug' => $this->getCon_slug(),
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * ALTERA O CONCURSO JA CADASTRADOS NO BANCO DE DADOS PELO SEU ID
     *  metodo que altera  um produto existente 
     */
    function Alterar($id) {

        //con_categoria, con_nome , con_desc, con_img, con_slug
        $query = " UPDATE {$this->prefix}concursos SET con_categoria=:con_categoria, con_nome=:con_nome,";
        $query .= " con_desc_pequena=:con_desc_pequena, con_desc=:con_desc, con_img=:con_img, con_tempocurso=:con_tempocurso, con_disciplinas=:con_disciplinas,con_aprovacaotaxa=:con_aprovacaotaxa,con_dataini=:con_dataini, con_datafim=:con_datafim, con_datapostagem=:con_datapostagem, con_arquivo=:con_arquivo, con_slug=:con_slug";
        $query .= " WHERE con_id = :con_id";
        $params = array(
            ':con_categoria' => $this->getCon_categoria(),
            ':con_nome' => $this->getCon_nome(),
            ':con_desc_pequena' => $this->getCon_desc_pequena(),
            ':con_desc' => $this->getCon_desc(),
            ':con_img' => $this->getCon_img(),
            ':con_tempocurso' => $this->getCon_tempocurso(),
            ':con_disciplinas' => $this->getCon_disciplinas(),
            ':con_aprovacaotaxa' => $this->getCon_aprovacaotaxa(),
            ':con_dataini' => $this->getCon_dataini(),
            ':con_datafim' => $this->getCon_datafim(),
            ':con_datapostagem' => $this->getCon_datapostagem(),
            ':con_arquivo' => $this->getCon_arquivo(),
            ':con_slug' => $this->getCon_slug(),
            ':con_id' => (int) $id,
        );

// executo a SQL
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * EXCLUI O CONCURSO PELO ID DO CONCURSO
     * @param int $id do produto que vai apagar 
     */
    function Apagar($id) {
        $query = "DELETE FROM {$this->prefix}concursos";
        $query .= " WHERE con_id= :id";
        $params = array(':id' => (int) $id);
        if ($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    /**
     * ***************** CRIANDO GETTERS E SETTERS ***********
     */function getCon_arquivo() {
        return $this->con_arquivo;
    }

    function setCon_arquivo($con_arquivo) {
        $this->con_arquivo = $con_arquivo;
    }

    function getCon_datapostagem() {
        return $this->con_datapostagem;
    }

    function setCon_datapostagem($con_datapostagem) {
        $this->con_datapostagem = $con_datapostagem;
    }

    function getCon_dataini() {
        return $this->con_dataini;
    }

    function getCon_datafim() {
        return $this->con_datafim;
    }

    function setCon_dataini($con_dataini) {
        $this->con_dataini = $con_dataini;
    }

    function setCon_datafim($con_datafim) {
        $this->con_datafim = $con_datafim;
    }

    function getCon_tempocurso() {
        return $this->con_tempocurso;
    }

    function getCon_disciplinas() {
        return $this->con_disciplinas;
    }

    function getCon_aprovacaotaxa() {
        return $this->con_aprovacaotaxa;
    }

    function setCon_tempocurso($con_tempocurso) {
        $this->con_tempocurso = $con_tempocurso;
    }

    function setCon_disciplinas($con_disciplinas) {
        $this->con_disciplinas = $con_disciplinas;
    }

    function setCon_aprovacaotaxa($con_aprovacaotaxa) {
        $this->con_aprovacaotaxa = $con_aprovacaotaxa;
    }

    function getCon_categoria() {
        return $this->con_categoria;
    }

    function getCon_nome() {
        return $this->con_nome;
    }

    function getCon_desc_pequena() {
        return $this->con_desc_pequena;
    }

    function getCon_desc() {
        return $this->con_desc;
    }

    function getCon_img() {
        return $this->con_img;
    }

    function getCon_slug() {
        return $this->con_slug;
    }

    function getCate_nome() {
        return $this->cate_nome;
    }

    function getCate_id() {
        return $this->cate_id;
    }

    function setCon_categoria($con_categoria) {
        $this->con_categoria = $con_categoria;
    }

    function setCon_nome($con_nome) {
        $this->con_nome = $con_nome;
    }

    function setCon_desc_pequena($con_desc_pequena) {
        $this->con_desc_pequena = $con_desc_pequena;
    }

    function setCon_desc($con_desc) {
        $this->con_desc = $con_desc;
    }

    function setCon_img($con_img) {
        $this->con_img = $con_img;
    }

    function setCon_slug($con_slug) {
        $this->con_slug = Sistema::GetSlug($con_slug);
    }

    function setCate_nome($cate_nome) {
        $this->cate_nome = $cate_nome;
    }

    function setCate_id($cate_id) {
        $this->cate_id = $cate_id;
    }

}
