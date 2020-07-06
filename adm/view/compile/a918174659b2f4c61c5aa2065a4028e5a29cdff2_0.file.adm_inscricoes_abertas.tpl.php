<?php
/* Smarty version 3.1.36, created on 2020-06-02 18:36:44
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_inscricoes_abertas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6c66cc250c9_14937253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a918174659b2f4c61c5aa2065a4028e5a29cdff2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_inscricoes_abertas.tpl',
      1 => 1578858901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6c66cc250c9_14937253 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Inscrições Abertas </h4>
<hr>
<section class="row ">  
    <div class="col-md-4">  
    </div>
    <div class="col-md-4">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOVO_DATAS']->value;?>
" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir Inscrições Abertas</a>
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
                    <td class="description">Nome Concurso</td>
                    <td class="description">Imagem </td>
                    <td class="description">Prazo de Inscrição </td>
                    <td class="description">Link para Cadastro</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                <tr class="cart_info">
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['ins_nome'];?>
 </td>

                    <td class="description">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['C']->value['ins_img_p'];?>
" class="rounded mx-auto d-block" alt="">
                    </td>
                    <td class="description">De <?php echo $_smarty_tpl->tpl_vars['C']->value['ins_dataini'];?>
 até <?php echo $_smarty_tpl->tpl_vars['C']->value['ins_datafim'];?>
</td>
                    <td class="description"><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['ins_linkinscricao'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['ins_linkinscricao'];?>
</a></td>
                    <td class="description">     
                                                <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR_DATAS']->value;?>
">
                            <input type="hidden" name="ins_id" id="ins_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['ins_id'];?>
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
