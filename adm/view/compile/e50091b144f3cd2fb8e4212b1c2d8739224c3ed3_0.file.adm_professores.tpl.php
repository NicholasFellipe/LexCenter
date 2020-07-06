<?php
/* Smarty version 3.1.36, created on 2020-06-02 18:35:48
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_professores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6c6342d3fa2_33254794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e50091b144f3cd2fb8e4212b1c2d8739224c3ed3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_professores.tpl',
      1 => 1578858897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6c6342d3fa2_33254794 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Grade de Professores </h4>
<hr>
<section class="row ">  
    <div class="col-md-4">  
    </div>
    <div class="col-md-4">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOVO_PROFESSORES']->value;?>
" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir Professores</a>
    </div>
    <div class="col-md-4">
    </div>
</section>
    <hr>
<!--- listando clientes ---->
<section id="cart_items">  
    <div class="table-responsive">
        <table class="table table-hover">
            <thead> 
                <tr class="cart_menu">
                    <td class="description">Nome do Professor</td>
                    <td class="description">Imagem </td>
                    <td class="description">Disciplina </td>
                    <td class="description">Link Facebook</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROFESSORES']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                <tr class="cart_info">
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['prof_nome'];?>
 </td>

                    <td class="description">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['C']->value['prof_img_p'];?>
" class="rounded mx-auto d-block" alt="">
                    </td>
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['prof_disciplina'];?>
</td>
                    <td class="description"><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['prof_facebook'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['prof_facebook'];?>
</a></td>
                    <td class="description">     
                                                <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR_PROFESSORES']->value;?>
">
                            <input type="hidden" name="prof_id" id="prof_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['prof_id'];?>
">
                            <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar </button>
                        </form>  
                              
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
</section><?php }
}
