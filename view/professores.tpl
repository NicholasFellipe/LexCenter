{*Breadcumb *}
<div class="breadcumb-area">
    <!-- Breadcumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{$GET_SITE_HOME}">Página Inicial</a></li>
            <li class="breadcrumb-item active" aria-current="page">Professores</li>
        </ol>
    </nav>
</div>
{*Breadcumb *}
{*VIDEO*}
<div class="instructors-video d-flex align-items-center justify-content-center bg-img" style="background-image: url({$GET_SITE_HOME}/media/img/bg-img/bg4.jpg);">
    <h2>Os Melhores Professores!</h2>
    <!-- video btn -->
    <a href="https://www.youtube.com/watch?v=qC_T9ePzANg" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
</div>
{*VIDEO*}
{* CAROUSEL *}
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
                    {foreach from=$PRO item=P}
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
{* CAROUSEL *}
{* MINIATURA DOS PROFESSORES *}
<section class="top-teacher-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Os principais professores de cada área</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Teacher --> 
            {foreach from=$PRO item=P}
                <div class="col-12 col-md-6 col-lg-4">
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
</section>
{* MINIATURA DOS PROFESSORES *}