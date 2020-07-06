<?php
/* Smarty version 3.1.36, created on 2020-04-20 12:19:29
  from 'C:\xampp\htdocs\lexcenter\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5e9dbd810a5455_12564771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff14468c7c5dac15f0fbe8758605b2baf9641adc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\view\\home.tpl',
      1 => 1578859199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9dbd810a5455_12564771 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BANNER']->value, 'B');
$_smarty_tpl->tpl_vars['B']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
$_smarty_tpl->tpl_vars['B']->do_else = false;
?> 
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['B']->value['ban_img'];?>
);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">

                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2><?php echo $_smarty_tpl->tpl_vars['B']->value['ban_nomeconcurso'];?>
</h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['B']->value['ban_descricao'];?>
</h2>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['B']->value['ban_linkcurso'];?>
" class="btn clever-btn">VER AGORA </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO_REC']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>           
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <picture>  <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
" /></picture>
                                                    <!-- Course Content -->
                        <div class="blog-content">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_slug'];?>
" class="blog-headline">
                                <?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
</a>
                            <h4></h4>
                                                        <div class="meta d-flex align-items-center">
                                                                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</a>
                            </div>
                            <p>Data de Postagem <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_desc_pequena'];?>
</p>
                             <p>Início do Preparatório <?php echo $_smarty_tpl->tpl_vars['P']->value['con_dataini'];?>
</p>
                             <p>Previsão Final do Preparatório <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datafim'];?>
</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                                                        
                            <div class="course-fee h-100">
                                
                            </div>

                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>     

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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROF']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['prof_img_p'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['prof_nome'];?>
" /></picture>
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5><?php echo $_smarty_tpl->tpl_vars['P']->value['prof_nome'];?>
</h5>
                                <span><?php echo $_smarty_tpl->tpl_vars['P']->value['prof_disciplina'];?>
</span>
                                                                <div class="social-info">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['P']->value['prof_facebook'];?>
"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</section>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROVAS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                                                <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
" /></picture>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BLOG_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_slug'];?>
" class="blog-headline">
                                <h4><?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
</h4>
                            </a>

                            <div class="meta d-flex align-items-center">
                                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</a>
                            </div>
                            <p>Data de Postagem <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_desc_pequena'];?>
</p>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INSCRICOES']->value, 'D');
$_smarty_tpl->tpl_vars['D']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['D']->value) {
$_smarty_tpl->tpl_vars['D']->do_else = false;
?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms" style="visibility: visible; animation-delay: 250ms; animation-name: fadeInUp;">
                        <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['D']->value['ins_img_g'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['D']->value['ins_nome'];?>
" /></picture>
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4><?php echo $_smarty_tpl->tpl_vars['D']->value['ins_nome'];?>
</h4>
                            <div class="meta d-flex align-items-center">
                                                                                                                         </div>
                            <p>Inscrições de <?php echo $_smarty_tpl->tpl_vars['D']->value['ins_dataini'];?>
 Até <?php echo $_smarty_tpl->tpl_vars['D']->value['ins_datafim'];?>
</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                
                            </div>
                            <div class="course-fee h-100">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['D']->value['ins_linkinscricao'];?>
" class="free">Link para inscrição</a>
                            </div>
                        </div>
                    </div>
                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOG']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                                                <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
" /></picture>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BLOG_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_slug'];?>
" class="blog-headline">
                                <h4><?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
</h4>
                            </a>

                            <div class="meta d-flex align-items-center">
                                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</a>
                            </div>
                            <p>Data de Postagem <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_desc_pequena'];?>
</p>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }
}
