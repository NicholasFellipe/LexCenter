{foreach from=$PRO item=P}
    {*Breadcumb Area Start*}
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{$GET_SITE_HOME}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{$P.con_nome} {$SITE_NOME}</li>
            </ol>
        </nav>
    </div>
    {* Breadcumb Area End *}

    {* NOME DO CURSO E IMAGEM GRANDE *}
    <div class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url({$P.con_img_g});">
        <!-- Content -->
        <div class="single-course-intro-content text-center">
            <!-- Ratings -->
            {* <div class="ratings">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>*}          
            <h3>{$P.con_nome} {$SITE_NOME}</h3>
            <div class="meta d-flex align-items-center justify-content-center">
                {* <a href="#">Nome de quem postou o curso</a>*}
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#">{$P.cate_nome}</a>
            </div>

        </div>
    </div>
    {*NOME DO CURSO E IMAGEM GRANDE*} 

{*  CONTEUDO DO CONCURSO  *}
    <div class="single-course-content section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="course--content">

                        <div class="clever-tabs-content">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Descrição</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab--5" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="true">Comentarios</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                    <div class="clever-description">

                                        {* DESCRICAO DO CURSO *}
                                        <div class="about-course mb-30">
                                            <h4>Sobre o Curso</h4>
                                            <p>{$P.con_desc}</p>
                                        </div>
                                        {* DESCRICAO DO CURSO *}
                                   
                                    {*  NOSSOS PROFESSORES *}
                                    <div class="all-instructors mb-30">
                                        <h4>Nossos Professores</h4>
                                        <div class="clever-members">

                                            {* <!-- About Members -->
                                            <div class="about-members mb-30">

                                            <p> ultrices</p>
                                            </div>*}

                                            <!-- All Members -->
                                            <div class="all-instructors mb-30">
                                                <div class="row">
                                                    {foreach from=$PROF item=P}
                                                        <!-- Single Members -->
                                                        <div class="col-lg-6">
                                                            <div class="single-instructor d-flex align-items-center mb-30">
                                                                <div class="instructor-thumb">
                                                                    <picture> <img src="{$P.prof_img_p}" alt="{$P.prof_nome}" /></picture>
                                                                </div>
                                                                <div class="instructor-info">
                                                                    <h5>{$P.prof_nome}</h5>
                                                                    <span>{$P.prof_disciplina}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {/foreach}  
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {*  NOSSOS PROFESSORES *}
                                </div>
                            </div>

                            {*  Comentarios do Facebook *}
                            <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab--5">
                                <div class="clever-review">

                                    <!-- About Review -->
                                    <div class="about-review mb-30">
                                        <div class = "fb-comments" data-href = "http://lexcenter.com.br/{$P.con_id}/{$P.con_slug}" data-width = "" data-numposts = "5" > </div> 
                                        </div>
                                </div>
                            </div>
                            {*  Comentarios do Facebook *}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="course-sidebar">
                    <!-- Buy Course -->
                    {*<a href="#" class="btn clever-btn mb-30 w-100">Buy course</a>*}
                    {*TEMPO DE CURSO/DESCRICAO*}
                    <!-- Widget -->
                    <div class="sidebar-widget">
                        <h4>Recursos do Curso - {$P.con_nome} {$SITE_NOME}</h4>
                        <ul class="features-list">
                            <li>
                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Duração</h6>
                                <h6>{$P.con_tempocurso}</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-bell" aria-hidden="true"></i> Disciplinas</h6>
                                <h6>{$P.con_disciplinas}</h6>
                            </li>

                            <li>
                                <h6><i class="fa fa-thumbs-up" aria-hidden="true"></i> Vagas/Cad. de Reservas</h6>
                                <h6>{$P.con_aprovacaotaxa}</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-play" aria-hidden="true"></i> Inicio das Aulas </h6>
                                <h6>{$P.con_dataini}</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-stop" aria-hidden="true"></i> Final das Aulas (Previsão)</h6>
                                <h6>{$P.con_datafim}</h6>
                            </li>

                        </ul>
                    </div>
                    {*TEMPO DE CURSO *}

                    {*PRODUTOS RECOMENDADOS/DESCRICAO *}
                    <div class="sidebar-widget">
                        <h4>Você pode gostar!</h4>
                        {foreach from=$ALEATORIO item=A}
                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <picture> <img src="{$A.con_img_p}" alt="{$A.con_nome}" /></picture>                                       
                                </div>
                                <div class="content">
                                    <a href="{$PRO_INFO}/{$A.con_id}/{$A.con_slug}">  <h5>{$A.con_nome} {$SITE_NOME}</h5></a>
                                </div>
                            </div>
                        {/foreach}

                    </div>
                    {*PRODUTOS RECOMENDADOS *}   
                </div>
            </div>
        </div>
    </div>
</div>
{*CONTEUDO DO CONCURSO*}
 {/foreach}