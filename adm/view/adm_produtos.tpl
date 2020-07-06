{if {$PRO.1.cate_id}==11}{*SE FOR BLOG DO CONCURSEIRO*}
        <h4 class="text-center">Gerenciar {$PRO.1.cate_nome}</h4>      
    {elseif {$PRO.1.cate_id}==10}{*SE FOR CONCURSOS PUBLICOS*}
        <h4 class="text-center">Gerenciar {$PRO.1.cate_nome}</h4>
    {elseif {$PRO.1.cate_id}==6}{*SE FOR PROVAS ANTERIORES   *}  
        <h4 class="text-center">Gerenciar {$PRO.1.cate_nome}</h4>
    {elseif {$PRO.1.cate_id}==7}{*SE FOR ALUNOS APROVADOS   *}  
        <h4 class="text-center">Gerenciar {$PRO.1.cate_nome}</h4>
    {/if}

    <hr>
    <section class="row "> 
        {if {$PRO.1.cate_id}==11}{*SE FOR BLOG DO CONCURSEIRO*}
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="{$PAG_BLOG_NOVO}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Nova Postagem  {$PRO.1.cate_nome} </a>
                </div>
                <div class="col-md-4">
                </div>
            {elseif {$PRO.1.cate_id}==10}{*SE FOR CONCURSOS PUBLICOS*}
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="{$PAG_PRODUTO_NOVO}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Novo  {$PRO.1.cate_nome}</a>
                </div>
                <div class="col-md-4">
                </div>
            {elseif {$PRO.1.cate_id}==6}{*SE FOR PROVAS ANTERIORES   *}  
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="{$PAG_PROVAS_ANTERIORES_NOVO}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir  {$PRO.1.cate_nome}</a>
                </div>
                <div class="col-md-4">
                </div>
            {elseif {$PRO.1.cate_id}==7}{*SE FOR ALUNOS APROVADOS   *}  
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="{$PAG_ALUNOS_APROVADOS_NOVO}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir  {$PRO.1.cate_nome}</a>
                </div>
                <div class="col-md-4">
                </div>
            {/if}
        </section>
        <hr>
        <!--     exibe mensagem caso nao encontre produtos --->
        {if $PRO_TOTAL < 1}
            <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
        {/if}   
        <!--  começa lista de produtos  ---->   
        <section id="cart_items">  
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead> 
                        <tr class="cart_menu">     
                            <td class="description">Imagem</td> 
                            {* RELACIONADOS AOS NOMES DAS CATEGORIAS*}
                            {if {$PRO.1.cate_id}==11}{*SE FOR BLOG DO CONCURSEIRO*}
                                    <td class="description"> {$PRO.1.cate_nome}</td>
                                {elseif {$PRO.1.cate_id}==10}{*SE FOR CONCURSOS PUBLICOS*}
                                    <td class="description"> {$PRO.1.cate_nome}</td>
                                {elseif {$PRO.1.cate_id}==6}{*SE FOR PROVAS ANTERIORES   *}  
                                    <td class="description"> {$PRO.1.cate_nome}</td>
                                {elseif {$PRO.1.cate_id}==7}{*SE FOR ALUNOS APROVADOS   *}  
                                    <td class="description"> {$PRO.1.cate_nome}</td>
                                {/if}
                                {* RELACIONADOS AOS NOMES DAS CATEGORIAS*}
                                <td class="description">Categoria</td>
                                <td class="description">Data Postagem</td> 
                                {if {$PRO.1.cate_id}==10}{*SE FOR CONCURSOS PUBLICOS*}
                                        <td class="description">Data do Início do Curso</td> 
                                        <td class="description">Data do Final do Curso</td> 
                                    {/if}

                                    <td class="description">Editar</td> 

                                </tr>  
                            </thead>
                            {foreach from=$PRO item=P}
                                <tr class="cart_info">
                                    {*IMAGEM*}
                                    <td class="description">  <img src="{$P.con_img_p}" class="rounded mx-auto d-block" alt="" > </td>
                                        {*IMAGEM*}

                                    {*NOME DO CURSO / ALUNOS APROVADOS*}
                                    <td class="description"> {$P.con_nome}</td>
                                    {*NOME DO CURSO / ALUNOS APROVADOS*}

                                    {*NOME DA CATEGORIA*}
                                    <td class="description">{$P.cate_nome}</td>
                                    {*NOME DA CATEGORIA*}

                                    {*Data Postagem*}
                                    <td class="description">{$P.con_datapostagem}</td>
                                    {*Data Postagem*}

                                    {*DATA DE INICIO E DATA DE FIM DO CURSO NO LEX CENTER *}
                                    {if {$PRO.1.cate_id}==10}{*SE FOR CONCURSOS PUBLICOS*}
                                            <td class="description">{$P.con_dataini}</td>
                                            <td class="description">{$P.con_datafim}</td>
                                        {/if}
                                        {*DATA DE INICIO E DATA DE FIM DO CURSO NO LEX CENTER *}


                                        {*EDITAR *}
                                        <td class="description">
                                            <form name="proeditar" method="post" action="{$PAG_PRODUTO_EDITAR}">
                                                <input type="hidden" name="con_id" id="con_id" value="{$P.con_id}">
                                                <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar</button>
                                            </form>  
                                        </td>
                                        {*EDITAR*}

                                    </tr>  
                                    {/foreach}
                                    </table> 
                                </div>
                            </section> 
                            <!--  paginação inferior   -->  
                            <section id="pagincao" class="row">
                                <center>
                                    {$PAGINAS}
                                </center>
                            </section>
