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

{* CAROUSEL *}
<section class="best-tutors-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Alguns depoimentos de alunos aprovados!</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tutors-slide owl-carousel">
                    {foreach from=$DEPOIMENTOS item=P}
                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <picture> <img src="{$P.dep_img_p}" alt="{$P.dep_nomealuno}" /></picture>
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>{$P.dep_nomealuno}</h5>
                                <span>{$P.dep_concurso}</span>
                                <p>{$P.dep_depoimento}</p>

                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</section>
{* CAROUSEL *}
