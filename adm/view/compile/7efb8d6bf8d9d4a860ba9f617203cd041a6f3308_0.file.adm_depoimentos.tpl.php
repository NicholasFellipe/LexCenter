<?php
/* Smarty version 3.1.36, created on 2020-06-02 18:36:47
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_depoimentos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6c66f801161_37402508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7efb8d6bf8d9d4a860ba9f617203cd041a6f3308' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_depoimentos.tpl',
      1 => 1578858903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6c66f801161_37402508 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Depoimento de Aprovados </h4>
<hr>
<section class="row ">  
    <div class="col-md-4">  
    </div>
    <div class="col-md-4">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOVO_DEPOIMENTOS']->value;?>
" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir Depoimento de Aprovados</a>
    </div>
    <div class="col-md-4">
    </div>
</section>
    <hr>
<!--- listando clientes ---->
<section id="cart_items">  
    <div class="table-responsive ">
        <table class="table table-hover">
            <thead> 
                <tr class="cart_menu">
                    <td class="description">Nome Concurso</td>
                    <td class="description">Imagem </td>
                    <td class="description">Concurso </td>
                    <td class="description">Depoimento do Aluno</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DEPOIMENTOS']->value, 'D');
$_smarty_tpl->tpl_vars['D']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['D']->value) {
$_smarty_tpl->tpl_vars['D']->do_else = false;
?>
                <tr class="cart_info">
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['D']->value['dep_nomealuno'];?>
 </td>

                    <td class="description">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['D']->value['dep_img_p'];?>
" class="rounded mx-auto d-block" alt="">
                    </td>
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['D']->value['dep_concurso'];?>
</td>
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['D']->value['dep_depoimento'];?>
</td>
                    <td class="description">     
                                                <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR_DEPOIMENTOS']->value;?>
">
                            <input type="hidden" name="dep_id" id="dep_id" value="<?php echo $_smarty_tpl->tpl_vars['D']->value['dep_id'];?>
">
                            <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar</button>
                        </form>  
                              
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
</section><?php }
}
