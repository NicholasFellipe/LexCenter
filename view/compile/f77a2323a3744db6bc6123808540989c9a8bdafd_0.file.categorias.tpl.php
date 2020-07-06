<?php
/* Smarty version 3.1.36, created on 2020-04-20 12:19:39
  from 'C:\xampp\htdocs\lexcenter\view\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5e9dbd8b004329_71927315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77a2323a3744db6bc6123808540989c9a8bdafd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\view\\categorias.tpl',
      1 => 1578859202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9dbd8b004329_71927315 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
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
<?php }?>  

<?php ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 11) {?>
                        <div class="breadcumb-area">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</li>
                </ol>
            </nav>
        </div>
                                <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_img'];?>
);">
            <h3><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h3>
        </div>
                        <section class="blog-area blog-page section-padding-100">
            <div class="container-fluid">
                <!-- ##### Popular Course Area Start ##### -->
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                        
                        <!-- Single Blog Area -->
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
                                    <p>Postado em: <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
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

                                <div class="row">
                    <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['PAGINAS_BLOG']->value;?>
</p> 
                </div>
            </div>
        </section>
         
        
    <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 10) {?>
                        <div class="breadcumb-area">
            <!-- Breadcumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</li>
                </ol>
            </nav>
        </div>
                                <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_img'];?>
});">
            <h3><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h3>
        </div>
                                <section class="popular-courses-area section-padding-100">
            <div class="container">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                                                <!-- Single Popular Course -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                                <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
" /></picture>
                                <!-- Course Content -->
                                <div class="course-content">
                                    <h4><p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
</p></h4>
                                    <div class="meta d-flex align-items-center">
                                                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</a>
                                    </div>
                                    <p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_desc_pequena'];?>
</p>
                                    
                                    <p>Início do Preparatório <?php echo $_smarty_tpl->tpl_vars['P']->value['con_dataini'];?>
</p>
                                    <p>Previsão Final do Preparatório <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datafim'];?>
</p>
                                    <p>Data da Postagem <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
</p>
                                                                    
                                </div>
                                <!-- Seat Rating Fee -->
                                <div class="seat-rating-fee d-flex justify-content-between">
                                                                        <div class="course-fee h-100">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_slug'];?>
" class="free">Visualizar</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                                                
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div> 
                <div class="container row">
                    <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>
</p> 
                </div>
            </div>

        </section>
                
    <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 6) {?>  

                        <div class="breadcumb-area">
            <!-- Breadcumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</li>
                </ol>
            </nav>
        </div>
                                <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_img'];?>
});">
            <h3><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h3>
        </div>
                   
                <section class="popular-courses-area section-padding-100">
            <div class="container">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                                                <!-- Single Popular Course -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                                <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
" /></picture>
                                <!-- Course Content -->
                                <div class="course-content">
                                    <h3><p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
</p></h3>
                                    <div class="meta d-flex align-items-center">
                                                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</a>
                                    </div>
                                     <p>Postado em: <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
 </p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_desc_pequena'];?>
</p>
                                </div>
                                <!-- Seat Rating Fee -->
                                <div class="seat-rating-fee d-flex justify-content-between">
                                                                        <div class="course-fee h-100">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['BLOG_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_slug'];?>
" class="free">Visualizar</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                                                
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div> 
                <div class="container row">
                    <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>
</p> 
                </div>
            </div>

        </section>
                  
                
          <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 7) {?>  

                        <div class="breadcumb-area">
            <!-- Breadcumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</li>
                </ol>
            </nav>
        </div>
                                <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_img'];?>
);">
            <h3><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h3>
        </div>
                   
                <section class="popular-courses-area section-padding-100">
            <div class="container">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                                                <!-- Single Popular Course -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                                <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
" /></picture>
                                <!-- Course Content -->
                                <div class="course-content">
                                    <h3><p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
</p></h3>
                                    <div class="meta d-flex align-items-center">
                                                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</a>
                                    </div>
                                     <p>Postado em: <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
 </p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_desc_pequena'];?>
</p>
                                </div>
                                <!-- Seat Rating Fee -->
                                <div class="seat-rating-fee d-flex justify-content-between">
                                    <div class="course-fee h-100">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['BLOG_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_slug'];?>
" class="free">Visualizar</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                                                
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div> 
                <div class="container row">
                    <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>
</p> 
                </div>
            </div>

        </section>
                  
            <?php }}}}
}
}
