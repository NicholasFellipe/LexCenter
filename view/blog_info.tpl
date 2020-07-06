{foreach from=$PRO item=P}

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{$GET_SITE_HOME}">Pagina Inicial</a></li>
                <li class="breadcrumb-item"><a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{$P.con_nome}</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({$P.con_img_g});">
        <div class="blog-details-headline">
            <h3>{$P.con_nome} </h3>
            <div class="meta d-flex align-items-center justify-content-center">
                {*  <a href="#">Nome de quem postou</a>*}
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#">{$P.cate_nome}</a>
            </div>
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Blog Details Content ##### -->
    <div class="blog-details-content section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">

                        <p>Postado em: {$P.con_datapostagem}</p>
                        <p>{$P.con_desc}</p>
                        {if {$PRO.1.cate_id}==6} {*SE FOR PROVAS ANTERIORES*}

                                <iframe src="{$PRO.1.con_img_arquivo}" width="650" height="500" class="thumbnail" alt=""></iframe>

                            {/if}
                            <!-- Tags -->

                        </div>
                    </div>
                </div>
            </div>
            {/foreach}
                {* Blogs Relacionados/ Links Relacionados *}
                <div class="related-posts section-padding-100-0">
                    <div class="container-fluid">
                        <div class="row">
                            {*AQUI VAI OS PRODUTOS RECOMENDADOS*}
                            {foreach from=$ALEATORIO_BLOG item=A}
                                <!-- Single Blog Area -->
                                <div class="col-12 col-lg-6">
                                    <div class="single-blog-area mb-100">
                                        <picture> <img src="{$A.con_img}" alt="{$A.con_nome}" /></picture>   
                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <a href="{$BLOG_INFO}/{$A.con_id}/{$A.con_slug}" class="blog-headline">
                                                <h4>{$A.con_nome}</h4>
                                            </a>
                                            <div class="meta d-flex align-items-center">

                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                <a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">  <h5>{$A.cate_nome}</h5></a>
                                            </div>

                                            <p>{$A.con_desc_pequena}</p>


                                        </div>
                                    </div>
                                </div>
                            {/foreach}

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class = "fb-comments" data-href = "http://lexcenter.com.br/{$P.con_id}/{$P.con_slug}" data-width = "" data-numposts = "5" > </div> 
                    </div>

                </div>
            </div>
            <!-- ##### Blog Details Content ##### -->

