<?php
/* Smarty version 3.1.36, created on 2020-04-23 18:01:53
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ea20241116d58_60774826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7405ab7abee0b2e38970c8cdcc5a33076d03279' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_produtos.tpl',
      1 => 1578858898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea20241116d58_60774826 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 11) {?>        <h4 class="text-center">Gerenciar <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h4>      
    <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 10) {?>        <h4 class="text-center">Gerenciar <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h4>
    <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 6) {?>  
        <h4 class="text-center">Gerenciar <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h4>
    <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 7) {?>  
        <h4 class="text-center">Gerenciar <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h4>
    <?php }}}}?>

    <hr>
    <section class="row "> 
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 11) {?>                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG_NOVO']->value;?>
" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Nova Postagem  <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
 </a>
                </div>
                <div class="col-md-4">
                </div>
            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == 10) {?>                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Novo  <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</a>
                </div>
                <div class="col-md-4">
                </div>
            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == 6) {?>  
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PROVAS_ANTERIORES_NOVO']->value;?>
" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir  <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</a>
                </div>
                <div class="col-md-4">
                </div>
            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == 7) {?>  
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ALUNOS_APROVADOS_NOVO']->value;?>
" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir  <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</a>
                </div>
                <div class="col-md-4">
                </div>
            <?php }}}}?>
        </section>
        <hr>
        <!--     exibe mensagem caso nao encontre produtos --->
        <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
            <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
        <?php }?>   
        <!--  começa lista de produtos  ---->   
        <section id="cart_items">  
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead> 
                        <tr class="cart_menu">     
                            <td class="description">Imagem</td> 
                                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9 == 11) {?>                                    <td class="description"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</td>
                                <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 == 10) {?>                                    <td class="description"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</td>
                                <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 == 6) {?>  
                                    <td class="description"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</td>
                                <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 == 7) {?>  
                                    <td class="description"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</td>
                                <?php }}}}?>
                                                                <td class="description">Categoria</td>
                                <td class="description">Data Postagem</td> 
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable13 == 10) {?>                                        <td class="description">Data do Início do Curso</td> 
                                        <td class="description">Data do Final do Curso</td> 
                                    <?php }?>

                                    <td class="description">Editar</td> 

                                </tr>  
                            </thead>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                <tr class="cart_info">
                                                                        <td class="description">  <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_img_p'];?>
" class="rounded mx-auto d-block" alt="" > </td>
                                        
                                                                        <td class="description"> <?php echo $_smarty_tpl->tpl_vars['P']->value['con_nome'];?>
</td>
                                    
                                                                        <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
                                    
                                                                        <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['con_datapostagem'];?>
</td>
                                    
                                                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14 == 10) {?>                                            <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['con_dataini'];?>
</td>
                                            <td class="description"><?php echo $_smarty_tpl->tpl_vars['P']->value['con_datafim'];?>
</td>
                                        <?php }?>
                                        

                                                                                <td class="description">
                                            <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
                                                <input type="hidden" name="con_id" id="con_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['con_id'];?>
">
                                                <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar</button>
                                            </form>  
                                        </td>
                                        
                                    </tr>  
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table> 
                                </div>
                            </section> 
                            <!--  paginação inferior   -->  
                            <section id="pagincao" class="row">
                                <center>
                                    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

                                </center>
                            </section>
<?php }
}
