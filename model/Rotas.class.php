<?php

/**
 * descricao esta classe trata de várias coisas sobre URL
 * @author adrianosites.com.br
 */
class Rotas {

    /**     * * @var string - define a pasta controller  */
    private static $pasta_controller = 'controller';

    /**     *  * @var string - define a pasta de view  */
    private static $pasta_view = 'view';
    private static $pasta_ADM = 'adm';

    /**
     * @var array : recebe os parametros da URL
     */
    public static $pag;

    /**
     * Trata paginas e parametros da URL
     */
    static function get_Pagina() {
        // verifico se passou parametro na URL
        if (isset($_GET['pag'])):

            $pagina = $_GET['pag'];

            // separa a URL pela barra e gera os parametros  
            self::$pag = explode('/', $pagina);

            $barra = DIRECTORY_SEPARATOR;

            $pagina = self::$pasta_controller . $barra . self::$pag[0] . '.php';
            // verifico se existe pagina com nome passado na URL
            if (file_exists($pagina)):
                
                include $pagina;
            // se nao existe o aquivo mostra erro
            else:
                echo 'Arquivo não encontrado :' . $pagina;
                include 'erro.php';

            endif;
        // se não passou nada pela URL
        else:
            include 'home.php';

        endif;
    }

    static function ImageLink($img, $largura, $altura) {

        // $imagem = self::get_ImageURL() .'thumb.php?src='
        //        .$img .'&w='.$largura.'&h='.$altura.'&zc=1'; 

        $imagem = self::get_ImageURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }

    /**
     * 
     * @return string: URL home do site 
     */
    static function get_SiteHOME() {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    /**
     * @return string : pasta raiz do meu sistema 
     */
    static function get_SiteRAIZ() {
        return  $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    /**
     * 
     * @return string - URL do template do site, css, js
     */
    static function get_SiteTEMA() {
        return Config::SITE_URL . '/' . Config::SITE_PASTA . '/' . self::$pasta_view;
    }

    /**
     * @return string - pagina carrinho
     */
    static function pag_Carrinho() {
        return self::get_SiteHOME() . '/carrinho';
    }

    /**
     * 
     * @return string - pagina manipulação do carrinho
     */
    static function pag_CarrinhoAlterar() {
        return self::get_SiteHOME() . '/carrinho_alterar';
    }

   

   

    

    /**
     * 
     * @return string tela de itens do cliente
     */
    static function pag_CLienteItens() {
        return self::get_SiteHOME() . '/clientes_itens';
    }

    /**
     * 
     * @return tela de clientes senha 
     */
    static function pag_CLienteSenha() {
        return self::get_SiteHOME() . '/clientes_senha';
    }

   


 
    

    /**
     * 
     * @return string tela de retorno apos pagamento ou não 
     */
    static function pag_PedidoRetorno() {
        return self::get_SiteHOME() . '/pedido_retorno';
    }

    
     

    



    /**
     * 
     * @return string com a URL da imagem
     */
    static function get_ImageURL() {
        return self::get_SiteHOME() . '/' . self::get_ImagePasta();
    }

   

    


    /**
     * 
     * @return string tela editar produtos 
     */
    static function pag_ProdutosEditarADM() {
        return self::get_SiteADM() . '/adm_produtos_editar';
    }

   

    /**
     * 
     * @return string tela deletar produto
     */
    static function pag_ProdutosDeletarADM() {
        return self::get_SiteADM() . '/adm_produtos_deletar';
    }

   

    /**
     * 
     * @return string editar clientes
     */
    static function pag_ClientesEditarADM() {
        return self::get_SiteADM() . '/adm_clientes_editar';
    }

    /**
     * 
     * @return string tela listar pedidos 
     */
    static function pag_PedidosADM() {
        return self::get_SiteADM() . '/adm_pedidos';
    }

   


    /**
     * 
     * @return string Termos e condicoes do Site
     */
    static function pag_Termos_e_condicoes() {
        return self::get_SiteHOME() . '/termos_e_condicoes';
    }

    


    /**
     * 
     * @return string Calculo de frete
     */
    static function pag_calc_frete() {
        return self::get_SiteHOME() . '/frete';
    }

    
    static function ArquivoLink($img) {

        $imagem = self::get_ImageURL() . "/{$img}";
        return $imagem;
    }
    
  
//    /**
//     * 
//     * @return string - URL do template do site, css, js
//     */
//    static function get_SiteTEMA() {
//        return Config::SITE_URL . '/' . Config::SITE_PASTA . '/' . self::$pasta_view;
//    }
   
 


    /**
     * 
     * @return string - pagina de produtos
     */
    static function pag_Produtos() {
        return self::get_SiteHOME() . '/produtos';
    }
    
    /**
     * 
     * @return string - pagina de produtos
     */
    static function pag_Categorias() {
        return self::get_SiteHOME() . '/categorias';
    }
    
    
    /**
     * 
     * @return string tela pedidos do cliente
     */
    static function pag_CLientePedidos() {
        return self::get_SiteHOME() . '/clientes_pedidos';
    }

  
    /**
     * 
     * @return string - pagina de confirmar pedido
     */
    static function pag_PedidoConfirmar() {
        return self::get_SiteHOME() . '/pedido_confirmar';
    }

    /**
     * 
     * @return string - pagina de finalizar pedido
     */
    static function pag_PedidoFinalizar() {
        return self::get_SiteHOME() . '/pedido_finalizar';
    }

    
    /**
     * 
     * @return string pagina de erro no pagamento
     */
    static function pag_PedidoRetornoERRO() {
        return self::get_SiteHOME() . '/pedido_retorno_erro';
    }
    

    /**
     * 
     * @return string  detalhe do produto
     */
    static function pag_ProdutosInfo() {
        return self::get_SiteHOME() . '/concursos_info';
    }
     /**
     * 
     * @return string  detalhe do produto
     */
    static function pag_BlogInfo() {
        return self::get_SiteHOME() . '/blog_info';
    }

    /**
     * 
     * @return string  - pagina de login
     */
    static function pag_ClienteLogin() {
        return self::get_SiteHOME() . '/login';
    }

    /**
     * 
     * @return string pagina de logoff
     */
    static function pag_Logoff() {
        return self::get_SiteHOME() . '/logoff';
    }

    /**
     * 
     * @return string tela de recuperação de senha
     */
    static function pag_ClienteRecovery() {
        return self::get_SiteHOME() . '/clientes_recovery';
    }

    /**
     * 
     * @return pagina dados do cliente
     */
    static function pag_CLienteDados() {
        return self::get_SiteHOME() . '/clientes_dados';
    }

 

    /**
     * 
     * @return string - pagina da conta do clientes
     */
    static function pag_ClienteConta() {
        return self::get_SiteHOME() . '/portaldoaluno';
    }

    /**
     * 
     * @return string tela de cadastro
     */
    static function pag_ClienteCadastro() {
        return self::get_SiteHOME() . '/cadastro';
    } 
    /**
     * 
     * @return string pagina de erro no pagamento
     */
    static function pag_Pesquisa() {
        return self::get_SiteHOME() . '/pesquisa';
    }
    /**
     * 
     * @return string pagina de contato
     */
    static function pag_Contato() {
        return self::get_SiteHOME() . '/contato';
    }
     /**
     * 
     * @return string pagina de contato
     */
    static function pag_Professores() {
        return self::get_SiteHOME() . '/professores';
    } 
    /**
     * 
     * @return string pagina sistema de Cobrança
     */
    static function pag_Sistema_Cobranca() {
        return self::get_SiteHOME() . '/sistema_cobranca';
    }
    /**
     * @return string pasta fisica da imagem
     */
    static function get_ImagePasta() {
        return '/media/images/';
    }
   
    /**
     * 
     * @return string com a pasta de controller
     */
    static function get_Pasta_Controller() {
        return self::$pasta_controller;
    }
     /**
     * MATERIA DO DIA
     */ 
    /**
     * 
     * @return string listar todas as Materias do Dia
     */
    static function pag_MateriaDoDia() {
        return self::get_SiteHOME() . '/materia_do_dia';
    }
    /**
     * 
     * @return string INSERIR todas as Materias do Dia
     */
    static function pag_MateriaDoDia_Info() {
        return self::get_SiteHOME() . '/materia_do_dia_info';
    }
    /**
     * MATERIA DO DIA
     */
    /**
     * 
     * @param int tempo em segundos
     * @param string $pagina que eu quero ir

     */
    static function Redirecionar($tempo, $pagina) {
        $url = '<meta http-equiv="refresh" content="' . $tempo . '; url=' . $pagina . '">';
        echo $url;
    }
    /// ****** REFERENTE AS TELAS DA PARTE ADMINISTRATIVA  DO SITE ************ /// 
    /**
     * 
     * @return string pasta adm do site
     */
    static function get_SiteADM() {
        return self::get_SiteHOME() . '/' . self::$pasta_ADM;
    }
    /**
     * 
     * @return string tela de produtos da adm
     */
    static function pag_ProdutosADM() {
        return self::get_SiteADM() . '/adm_produtos';
    } 
    /**
     * 
     * @return string tela de banner da adm
     */
    static function pag_BannerADM() {
        return self::get_SiteADM() . '/adm_banner';
    }
    /**
     * 
     * @return string tela de banner da adm
     */
    static function pag_DatasImportantesADM() {
        return self::get_SiteADM() . '/adm_inscricoes_abertas';
    }
    /**
     * 
     * @return STRING TELA de add novo produtos
     */
    static function pag_ProdutosNovoADM() {
        return self::get_SiteADM() . '/adm_curso_novo';
    } 
    /**
     * 
     * @return STRING TELA de add blog 
     */
    static function pag_BlogNovoADM() {
        return self::get_SiteADM() . '/adm_blog_novo';
    }
    /**
     * 
     * @return STRING TELA de add blog 
     */
    static function pag_BannerEditarADM() {
        return self::get_SiteADM() . '/adm_banner_editar';
    }
    /**
     * 
     * @return string - pagina de edicao de categoria
     */
    static function pag_CategoriasEditarADM() {
        return self::get_SiteADM() . '/adm_categoria_editar';
    }
    /**
     * 
     * @return string - pagina de edicao de categoria
     */
    static function pag_CategoriasNovoADM() {
        return self::get_SiteADM() . '/adm_categoria_novo';
    }
    /**
     * 
     * @return STRING TELA de add provas anteriores 
     */
    static function pag_Provas_AnterioresNovoADM() {
        return self::get_SiteADM() . '/adm_provas_anteriores_novo';
    }
    /**
     * 
     * @return STRING TELA de add provas anteriores 
     */
    static function pag_Alunos_AprovadosNovoADM() {
        return self::get_SiteADM() . '/adm_alunos_aprovados_novo';
    }
   
    /**
     * 
     * @return string tela imagens extras da ADM 
     */
    static function pag_ProdutosImgADM() {
        return self::get_SiteADM() . '/adm_produtos_img';
    }
  
    /**
     * 
     * @return string tela de clientes 
     */
    static function pag_ClientesADM() {
        return self::get_SiteADM() . '/adm_clientes';
    }
   
    /**
     * 
     * @return string listar itens de um pedido 
     */
    static function pag_ItensADM() {
        return self::get_SiteADM() . '/adm_itens';
    }
    /**
     * 
     * @return string listar itens de um pedido 
     */
    static function pag_DatasImportantesNovoADM() {
        return self::get_SiteADM() . '/adm_inscricoes_abertas_novo';
    }
    /**
     * 
     * @return string editar datas importantes
     */
    static function pag_DatasImportantesEditarADM() {
        return self::get_SiteADM() . '/adm_inscricoes_abertas_editar';
    }
    /**
     * 
     * @return string listar todos os Depoimentos
     */
    static function pag_DepoimentosADM() {
        return self::get_SiteADM() . '/adm_depoimentos';
    }
    /**
     * 
     * @return string INSERIR todos os Depoimentos
     */
    static function pag_DepoimentosNovoADM() {
        return self::get_SiteADM() . '/adm_depoimentos_novo';
    }
    /**
     * 
     * @return string INSERIR todos os Depoimentos
     */
    static function pag_DepoimentosEditarADM() {
        return self::get_SiteADM() . '/adm_depoimentos_editar';
    }
    /**
     * MATERIA DO DIA
     */
    /**
     * 
     * @return string listar todas as Materias do Dia
     */
    static function pag_MateriaDoDiaADM() {
        return self::get_SiteADM() . '/adm_materia_do_dia';
    }
    /**
     * 
     * @return string INSERIR todas as Materias do Dia
     */
    static function pag_MateriaDoDiaNovoADM() {
        return self::get_SiteADM() . '/adm_materia_do_dia_novo';
    }
    /**
     * 
     * @return string EDITAR todos os Materias do Dia
     */
    static function pag_MateriaDoDiaEditarADM() {
        return self::get_SiteADM() . '/adm_materia_do_dia_editar';
    }
    /**
     * MATERIA DO DIA
     */
    /**
     * 
     * @return string listar todos os Depoimentos
     */
    static function pag_ProfessoresADM() {
        return self::get_SiteADM() . '/adm_professores';
    }
    /**
     * 
     * @return string INSERIR todos os Depoimentos
     */
    static function pag_ProfessoresNovoADM() {
        return self::get_SiteADM() . '/adm_professores_novo';
    }
    /**
     * 
     * @return string INSERIR todos os Depoimentos
     */
    static function pag_ProfessoresEditarADM() {
        return self::get_SiteADM() . '/adm_professores_editar';
    }
    /**
     * 
     * @return string tela de categorias
     */
    static function pag_CategoriasADM() {
        return self::get_SiteADM() . '/adm_categorias';
    }
   
    /**
     * 
     * @return string Politica de Devolucao do Site
     */
    static function pag_Politica_de_Devolucao() {
        return self::get_SiteHOME() . '/politica_de_devolucao';
    }
    /**
     * 
     * @return string Politica de Privacidade do Site
     */
    static function pag_Politica_de_Privacidae() {
        return self::get_SiteHOME() . '/politica_de_privacidade';
    }
    /**
     * 
     * @return string Politica de Privacidade do Site
     */
    static function pag_Perguntas_Frequentes() {
        return self::get_SiteHOME() . '/perguntas_frequentes';
    }
	    /**
     * 
     * @return string - pagina de produtos
     */
    static function pag_Depoimentos() {
        return self::get_SiteHOME() . '/depoimento_de_aprovados';
    }
}
