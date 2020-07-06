<?php

/**
 * descricao Paginacao
 *
 * @author adrianosites.com.br
 */
class Paginacao extends Conexao{
    /**
     *
     * @var int passa  o limite de itens por pagina 
     */
    public $limite;
    /**
     *
     * @var int define onde começa a navegação pagina inicial
     */
    public $inicio;
    /**
     *
     * @var array numerico que pega as paginas para navegação
     */
    public $link =array();
    
    /**
     *
     * @var int numero total de paginas
     */
    public $totalpags;


    /**
      * 
      * @param string: campos da tabela
      * @param string: tabela do banco
      */       
    function GetPaginacao($campo,$tabela){
        
        // faço  uma consulta em um campo da tabela
        $query = "SELECT {$campo} FROM {$tabela}";
        $this->ExecuteSQL($query);
        
       // conto o resultado e pego o total 
        $total = $this->TotalDados();
        
        // defino limite de itens por página
        $this->limite = Config::BD_LIMITE_POR_PAG;
        
         //pego o numero total de paginas que eu vou obter // 21 / 3 = 7 / 10: 3 3 
        $paginas = ceil( $total  / $this->limite);
        
        $this->totalpags = $paginas;
        
        // pego o numero da pagina para navegação na URL
        $p =  (int)isset($_GET['p']) ? $_GET['p'] : 1;
        
        $p = filter_var($p,FILTER_SANITIZE_NUMBER_INT); 
        
        // verifico se não passei pagina na URL a mais do que eu tenho
        if($p > $paginas):
            $p = $paginas;
        endif;
        
        // defino onde começa a paginação
        $this->inicio = ($p * $this->limite) - $this->limite;
        
        // margem de tolerância pra cima ou pra baixo da pagina atual
        $tolerancia = 8;
        
        // quanto links mostrar na tela (atual + ou - tolerancia )
        $mostrar = $p + $tolerancia;
        
        // verifo se quantos mostrar não é maior do que eu tenho no total
        if($mostrar >  $paginas):
            $mostrar = $paginas;
        endif;
        
         
          // faço um laço passando os links das  paginas para um array 
          for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
              
              // verifo se o meu $i nao é negativo
              if($i < 1):
                  $i = 1;
              endif;
              
              array_push($this->link, $i);
                  
          endfor;
        
    }
}
