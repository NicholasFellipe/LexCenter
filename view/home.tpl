

{*BANNER COMECA AQUI*}
{foreach from=$BANNER item=B} 
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({$B.ban_img});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">

                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>{$B.ban_nomeconcurso}</h2>
                        <h2>{$B.ban_descricao}</h2>
                        <a href="{$B.ban_linkcurso}" class="btn clever-btn">VER AGORA </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
{/foreach}
{*BANNER TERMINA AQUI*}

{*
<section class="cool-facts-area section-padding-100-0">
<div class="container">
<div class="row">
<!-- Single Cool Facts Area -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
<div class="icon">
<img src="{$GET_SITE_HOME}/media/img/core-img/docs.png" alt="">
</div>
<h2><span class="counter">1912</span></h2>
<h5>Success Stories</h5>
</div>
</div>

<!-- Single Cool Facts Area -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
<div class="icon">
<img src="{$GET_SITE_HOME}/media/img/core-img/star.png" alt="">
</div>
<h2><span class="counter">123</span></h2>
<h5>Dedicated Tutors</h5>
</div>
</div>

<!-- Single Cool Facts Area -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
<div class="icon">
<img src="{$GET_SITE_HOME}/media/img/core-img/events.png" alt="">
</div>
<h2><span class="counter">89</span></h2>
<h5>Scheduled Events</h5>
</div>
</div>

<!-- Single Cool Facts Area -->
<div class="col-12 col-sm-6 col-lg-3">
<div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
<div class="icon">
<img src="{$GET_SITE_HOME}/media/img/core-img/earth.png" alt="">
</div>
<h2><span class="counter">56</span></h2>
<h5>Available Courses</h5>
</div>
</div>
</div>
</div>
</section>

*}

{*  CONCURSOS EM DESTAQUE *}
<section class="register-now section-padding-100-0 " style="background-image: url(img/core-img/texture.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Preparatório Lex Center</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Popular Course -->
            {foreach from=$PRO_REC item=P}           
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <picture>  <img src="{$P.con_img}" alt="{$P.con_nome}" /></picture>
                            {*  <img src="{$GET_SITE_HOME}/media/img/bg-img/c1.jpg" alt="">*}
                        <!-- Course Content -->
                        <div class="blog-content">
                            <a href="{$PRO_INFO}/{$P.con_id}/{$P.con_slug}" class="blog-headline">
                                {$P.con_nome}</a>
                            <h4></h4>
                            {* <h4>Detran SP 2019</h4>*}
                            <div class="meta d-flex align-items-center">
                                {*  AUTOR DA PUBLICACAO  *}
                                {*<a href="#">Sarah Parker</a>*}
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    {*   CATEGORIA DO CONCURSO *}
                                <a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a>
                            </div>
                            <p>Data de Postagem {$P.con_datapostagem}</p>
                            <p>{$P.con_desc_pequena}</p>
                             <p>Início do Preparatório {$P.con_dataini}</p>
                             <p>Previsão Final do Preparatório {$P.con_datafim}</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            {* COMENTARIOS DO FACEBOOK   *}
                            {* <div class="seat-rating h-100 d-flex align-items-center">
                            <div class="seat">
                            <i class="fa fa-user" aria-hidden="true"></i> 10
                            </div>
                            <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i> 4.5
                            </div>
                            </div>*}

                            <div class="course-fee h-100">
                                {* <a href="#" class="free">Free</a>*}

                            </div>

                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</section>     
{*  CONCURSOS EM DESTAQUE *}

{* CAROUSEL PROFESSORES*}
<section class="best-tutors-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Os Melhores professores da cidade!</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tutors-slide owl-carousel">
                    {foreach from=$PROF item=P}
                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <picture> <img src="{$P.prof_img_p}" alt="{$P.prof_nome}" /></picture>
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>{$P.prof_nome}</h5>
                                <span>{$P.prof_disciplina}</span>
                                {* <p>{$P.prof_descricao_g}</p>*}
                                <div class="social-info">
                                    <a href="{$P.prof_facebook}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</section>
{* CAROUSEL PROFESSORES *}

{* ##### PROVAS ANTERIOR #####*}
<section class="register-now section-padding-100-0 " style="background-image: url(img/core-img/texture.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Provas Anteriores</h3>
                </div>
            </div>
        </div>
        <div class="row">
            {foreach from=$PROVAS item=P}
                {*BLOG COMECA AQUI!!!!!*}
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
                                {* <a href="#">Nome de quem Postou</a>*}
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a>
                            </div>
                            <p>Data de Postagem {$P.con_datapostagem}</p>
                            <p>{$P.con_desc_pequena}</p>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</section>
{*#### PROVAS ANTERIORES #####*}

{* DATAS IMPORTANTES*}
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Inscrições Abertas</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Upcoming Events -->
            {foreach from=$INSCRICOES item=D}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms" style="visibility: visible; animation-delay: 250ms; animation-name: fadeInUp;">
                        <picture> <img src="{$D.ins_img_g}" alt="{$D.ins_nome}" /></picture>
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>{$D.ins_nome}</h4>
                            <div class="meta d-flex align-items-center">
                               {* <a href="#">Sarah Parker</a>*}
                               {* <span><i class="fa fa-circle" aria-hidden="true"></i></span>*}
                               {* <a href="#">Art &amp; Design</a>*}
                            </div>
                            <p>Inscrições de {$D.ins_dataini} Até {$D.ins_datafim}</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                
                            </div>
                            <div class="course-fee h-100">
                                <a href="{$D.ins_linkinscricao}" class="free">Link para inscrição</a>
                            </div>
                        </div>
                    </div>
                </div>
                {*<div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="{$GET_SITE_HOME}/media/img/bg-img/e1.jpg" alt="">
                            <picture> <img src="{$D.ins_img_g}" alt="{$D.ins_nome}" /></picture>
                            <h4 class="event-title">De {$D.ins_dataini} Até {$D.ins_datafim}</h4>
                            <h4 class="event-date">{$D.ins_nome}</h4>

                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                 <p> <i class="fa fa-clock">{$D.prv_data} {$D.prv_hora} Horário de Brasília</i> </p>
                                <div class="course-fee h-100">
                                    <a href="#" class="free">Free</a>
                                </div>
                                <h4 class="event-date"><a href="{$D.ins_linkinscricao}">Inscrição aqui</a></h4>
                            </div>
                        </div>
                    </div>
                </div>*}
            {/foreach}
        </div>
    </div>
</section>
{* DATAS IMPORTANTES*}

{* <!-- ##### BLOG DO CONCURSEIRO ##### -->*}
<section class="register-now section-padding-100-0 " style="background-image: url(img/core-img/texture.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Blog do Concurseiro</h3>
                </div>
            </div>
        </div>

        <div class="row">
            {foreach from=$BLOG item=P}
                {*BLOG COMECA AQUI!!!!!*}
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
                                {* <a href="#">Nome de quem Postou</a>*}
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="{$PAG_CATEGORIAS}/{$P.cate_id}/{$P.cate_slug}">{$P.cate_nome}</a>
                            </div>
                            <p>Data de Postagem {$P.con_datapostagem}</p>
                            <p>{$P.con_desc_pequena}</p>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</section>
{* <!-- ##### BLOG DO CONCURSEIRO ##### -->*}