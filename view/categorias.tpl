{*<!--     exibe mensagem caso nao encontre produtos --->*}
{if $PRO_TOTAL < 1}
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Aviso!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="text-danger">
                        Nada foi encontrado!
                        </h3>
                    </div>   
                </div>
            </div>
        </div> 
{/if}  

{if {$PRO.1.cate_id}==11}{*SE FOR BLOG DO CONCURSEIRO*}

        {* AQUI TERMINA A CATEGORIA DE BLOG DO CONCURSEIRO  *}
        {*Breadcumb *}
        <div class="breadcumb-area">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{$GET_SITE_HOME}">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{$PRO.1.cate_nome}</li>
                </ol>
            </nav>
        </div>
        {* Breadcumb *}
        {*CRIAR UMA FOTO PARA CADA CATEGORIA AQUI*}
        {* NA TABELA DA CATEGORIA COLOCAR UM CAMPO COM A IMAGEM DA CATEGORIA*}
        <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url({$PRO.1.cate_img});">
            <h3>{$PRO.1.cate_nome}</h3>
        </div>
        {*CRIAR UMA FOTO PARA CADA CATEGORIA AQUI*}
        {* NA TABELA DA CATEGORIA COLOCAR UM CAMPO COM A IMAGEM DA CATEGORIA*}
        <section class="blog-area blog-page section-padding-100">
            <div class="container-fluid">
                <!-- ##### Popular Course Area Start ##### -->
                <div class="row">
                    {foreach from=$PRO item=P}
                        {*BLOG COMECA AQUI!!!!!*}

                        <!-- Single Blog Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                                {*  <img src="{$GET_SITE_HOME}/media/img/blog-img/1.jpg" alt="">*}
                                <picture> <img src="{$P.con_img}" alt="{$P.con_nome}" /></picture>
                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <a href="{$BLOG_INFO}/{$P.con_id}/{$P.con_slug}" class="blog-headline">
                                        <h4>{$P.con_nome}</h4>
                                    </a>
                                    <div class="meta d-flex align-items-center">
                                        {*<a href="#">Nome de quem Postou</a>*}
                                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a>
                                    </div>
                                    <p>Postado em: {$P.con_datapostagem} </p>
                                    <p>{$P.con_desc_pequena} </p>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                </div>

                {* PAGINACAO  *}
                <div class="row">
                    <p class="text-center">{$PAGINAS_BLOG}</p> 
                </div>
            </div>
        </section>
        {*SE FOR BLOG DO CONCURSEIRO*} 
        {* AQUI TERMINA A CATEGORIA DE BLOG DO CONCURSEIRO  *}

    {elseif {$PRO.1.cate_id}==10}{*SE FOR CONCURSOS PUBLICOS*}

        {* AQUI COMECA A CATEGORIA DE CONCURSOS PUBLICOS  *}
        {*Breadcumb *}
        <div class="breadcumb-area">
            <!-- Breadcumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{$GET_SITE_HOME}">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{$PRO.1.cate_nome}</li>
                </ol>
            </nav>
        </div>
        {* Breadcumb *}
        {*CRIAR UMA FOTO PARA CADA CATEGORIA AQUI*}
        {* NA TABELA DA CATEGORIA COLOCAR UM CAMPO COM A IMAGEM DA CATEGORIA*}
        <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url({$PRO.1.cate_img}});">
            <h3>{$PRO.1.cate_nome}</h3>
        </div>
        {*CRIAR UMA FOTO PARA CADA CATEGORIA AQUI*}
        {* NA TABELA DA CATEGORIA COLOCAR UM CAMPO COM A IMAGEM DA CATEGORIA*}
        {* CATEGORIA DE CONCURSOS PUBLICOS  *}
        <section class="popular-courses-area section-padding-100">
            <div class="container">
                <div class="row">
                    {foreach from=$PRO item=P}

                        {* <!--Produto aqui-->*}
                        <!-- Single Popular Course -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                                <picture> <img src="{$P.con_img}" alt="{$P.con_nome}" /></picture>
                                <!-- Course Content -->
                                <div class="course-content">
                                    <h4><p>{$P.con_nome}</p></h4>
                                    <div class="meta d-flex align-items-center">
                                        {* <a href="#">Nome de quem postou o curso</a>*}
                                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a>
                                    </div>
                                    <p>{$P.con_desc_pequena}</p>
                                    
                                    <p>Início do Preparatório {$P.con_dataini}</p>
                                    <p>Previsão Final do Preparatório {$P.con_datafim}</p>
                                    <p>Data da Postagem {$P.con_datapostagem}</p>
                                                                    
                                </div>
                                <!-- Seat Rating Fee -->
                                <div class="seat-rating-fee d-flex justify-content-between">
                                    {* <div class="seat-rating h-100 d-flex align-items-center">
                                    <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                    </div>
                                    <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                    </div>
                                    </div>*}
                                    <div class="course-fee h-100">
                                        <a href="{$PRO_INFO}/{$P.con_id}/{$P.con_slug}" class="free">Visualizar</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        {*  <!--Produto aqui-->*}
                        {*  verifico se o valor de i dividido por 3 retorna 0 se retornar fecho a div row e seto i como 0 *}

                    {/foreach}
                </div> 
                <div class="container row">
                    <p class="text-center">{$PAGINAS}</p> 
                </div>
            </div>

        </section>
        {* CATEGORIA DE CONCURSOS PUBLICOS  *}
        {* AQUI TERMINA A CATEGORIA DE CONCURSOS PUBLICOS  *}

    {elseif {$PRO.1.cate_id}==6}{*SE FOR PROVAS ANTERIORES   *}  

        {* AQUI COMECA A CATEGORIA DE PROVAS ANTERIORES  *}
        {*Breadcumb *}
        <div class="breadcumb-area">
            <!-- Breadcumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{$GET_SITE_HOME}">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{$PRO.1.cate_nome}</li>
                </ol>
            </nav>
        </div>
        {* Breadcumb *}
        {*CRIAR UMA FOTO PARA CADA CATEGORIA AQUI*}
        {* NA TABELA DA CATEGORIA COLOCAR UM CAMPO COM A IMAGEM DA CATEGORIA*}
        <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url({$PRO.1.cate_img}});">
            <h3>{$PRO.1.cate_nome}</h3>
        </div>
        {*CRIAR UMA FOTO PARA CADA CATEGORIA AQUI*}
        {* NA TABELA DA CATEGORIA COLOCAR UM CAMPO COM A IMAGEM DA CATEGORIA*}   
        {* CATEGORIA DE PROVAS ANTERIORES   *}
        <section class="popular-courses-area section-padding-100">
            <div class="container">
                <div class="row">
                    {foreach from=$PRO item=P}

                        {* <!--Produto aqui-->*}
                        <!-- Single Popular Course -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                                <picture> <img src="{$P.con_img}" alt="{$P.con_nome}" /></picture>
                                <!-- Course Content -->
                                <div class="course-content">
                                    <h3><p>{$P.con_nome}</p></h3>
                                    <div class="meta d-flex align-items-center">
                                        {* <a href="#">Nome de quem postou o curso</a>*}
                                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a>
                                    </div>
                                     <p>Postado em: {$P.con_datapostagem} </p>
                                    <p>{$P.con_desc_pequena}</p>
                                </div>
                                <!-- Seat Rating Fee -->
                                <div class="seat-rating-fee d-flex justify-content-between">
                                    {* <div class="seat-rating h-100 d-flex align-items-center">
                                    <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                    </div>
                                    <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                    </div>
                                    </div>*}
                                    <div class="course-fee h-100">
                                        <a href="{$BLOG_INFO}/{$P.con_id}/{$P.con_slug}" class="free">Visualizar</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        {*  <!--Produto aqui-->*}
                        {*  verifico se o valor de i dividido por 3 retorna 0 se retornar fecho a div row e seto i como 0 *}

                    {/foreach}
                </div> 
                <div class="container row">
                    <p class="text-center">{$PAGINAS}</p> 
                </div>
            </div>

        </section>
        {* CATEGORIA DE PROVAS ANTERIORES *}          
        {* AQUI TERMINA A CATEGORIA DE PROVAS ANTERIORES  *}
        
          {elseif {$PRO.1.cate_id}==7}{*SE FOR ALUNOS APROVADOS   *}  

        {* AQUI COMECA A CATEGORIA DE ALUNOS APROVADOS  *}
        {*Breadcumb *}
        <div class="breadcumb-area">
            <!-- Breadcumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{$GET_SITE_HOME}">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{$PRO.1.cate_nome}</li>
                </ol>
            </nav>
        </div>
        {* Breadcumb *}
        {*CRIAR UMA FOTO PARA CADA CATEGORIA AQUI*}
        {* NA TABELA DA CATEGORIA COLOCAR UM CAMPO COM A IMAGEM DA CATEGORIA*}
        <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url({$PRO.1.cate_img});">
            <h3>{$PRO.1.cate_nome}</h3>
        </div>
        {*CRIAR UMA FOTO PARA CADA CATEGORIA AQUI*}
        {* NA TABELA DA CATEGORIA COLOCAR UM CAMPO COM A IMAGEM DA CATEGORIA*}   
        {* CATEGORIA DE ALUNOS APROVADOS *}
        <section class="popular-courses-area section-padding-100">
            <div class="container">
                <div class="row">
                    {foreach from=$PRO item=P}

                        {* <!--Produto aqui-->*}
                        <!-- Single Popular Course -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                                <picture> <img src="{$P.con_img}" alt="{$P.con_nome}" /></picture>
                                <!-- Course Content -->
                                <div class="course-content">
                                    <h3><p>{$P.con_nome}</p></h3>
                                    <div class="meta d-flex align-items-center">
                                        {* <a href="#">Nome de quem postou o curso</a>*}
                                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a>
                                    </div>
                                     <p>Postado em: {$P.con_datapostagem} </p>
                                    <p>{$P.con_desc_pequena}</p>
                                </div>
                                <!-- Seat Rating Fee -->
                                <div class="seat-rating-fee d-flex justify-content-between">
                                    <div class="course-fee h-100">
                                        <a href="{$BLOG_INFO}/{$P.con_id}/{$P.con_slug}" class="free">Visualizar</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        {*  <!--Produto aqui-->*}
                        {*  verifico se o valor de i dividido por 3 retorna 0 se retornar fecho a div row e seto i como 0 *}

                    {/foreach}
                </div> 
                <div class="container row">
                    <p class="text-center">{$PAGINAS}</p> 
                </div>
            </div>

        </section>
        {* CATEGORIA DE ALUNOS APROVAODOS  *}          
        {* AQUI TERMINA A CATEGORIA DE ALUNOS APROVADOS*}
    {/if}