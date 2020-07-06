<?php
/* Smarty version 3.1.36, created on 2020-06-02 18:36:55
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6c67754f010_56877271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00881785fbdc6b586c879c1717392340f4337d28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_banner.tpl',
      1 => 1578858906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6c67754f010_56877271 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Banner da Página Inicial </h4>
<hr>

<!--- listando clientes ---->
<section id="cart_items">  
    <div class="table-responsive">
        <table class="table table-hover">
            <thead> 
                <tr class="cart_menu">
                    <td class="description">Nome Concurso</td>
                    <td class="description">Descrição </td>
                    <td class="description">Imagem </td>
                    <td class="description">Link do Curso</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BANNER']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                <tr class="cart_info">
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['ban_nomeconcurso'];?>
 </td>
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['ban_descricao'];?>
</td>
                    <td class="description">  <img src="<?php echo $_smarty_tpl->tpl_vars['C']->value['ban_img_p'];?>
" class="rounded mx-auto d-block" alt=""></td>
                    <td class="description"><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['ban_linkcurso'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['ban_linkcurso'];?>
</a></td>
                    <td class="description">     
                                                <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR_BANNER']->value;?>
">
                            <input type="hidden" name="ban_id" id="ban_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['ban_id'];?>
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
