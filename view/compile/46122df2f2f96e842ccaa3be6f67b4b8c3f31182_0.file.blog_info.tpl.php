<?php
/* Smarty version 3.1.36, created on 2020-06-02 20:17:34
  from 'C:\xampp\htdocs\lexcenter\view\blog_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6de0eda67f1_98767397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46122df2f2f96e842ccaa3be6f67b4b8c3f31182' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\view\\blog_info.tpl',
      1 => 1591139852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6de0eda67f1_98767397 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Pagina Inicial</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['P']->value['con_img_g'];?>
);">
        <div class="blog-details-headline">
            <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
 </h3>
            <div class="meta d-flex align-items-center justify-content-center">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</a>
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

                        <p>Postado em: <?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['P']->value['con_desc'];?>
</p>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 6) {?> 
                                <iframe src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
" width="650" height="500" class="thumbnail" alt=""></iframe>

                            <?php }?>
                            <!-- Tags -->

                        </div>
                    </div>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <div class="related-posts section-padding-100-0">
                    <div class="container-fluid">
                        <div class="row">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALEATORIO_BLOG']->value, 'A');
$_smarty_tpl->tpl_vars['A']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['A']->value) {
$_smarty_tpl->tpl_vars['A']->do_else = false;
?>
                                <!-- Single Blog Area -->
                                <div class="col-12 col-lg-6">
                                    <div class="single-blog-area mb-100">
                                        <picture> <img src="<?php echo $_smarty_tpl->tpl_vars['A']->value['con_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['A']->value['con_nome'];?>
" /></picture>   
                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['BLOG_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['A']->value['con_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['A']->value['con_slug'];?>
" class="blog-headline">
                                                <h4><?php echo $_smarty_tpl->tpl_vars['A']->value['con_nome'];?>
</h4>
                                            </a>
                                            <div class="meta d-flex align-items-center">

                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_slug'];?>
">  <h5><?php echo $_smarty_tpl->tpl_vars['A']->value['cate_nome'];?>
</h5></a>
                                            </div>

                                            <p><?php echo $_smarty_tpl->tpl_vars['A']->value['con_desc_pequena'];?>
</p>


                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class = "fb-comments" data-href = "http://lexcenter.com.br/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['con_slug'];?>
" data-width = "" data-numposts = "5" > </div> 
                    </div>

                </div>
            </div>
            <!-- ##### Blog Details Content ##### -->

<?php }
}
