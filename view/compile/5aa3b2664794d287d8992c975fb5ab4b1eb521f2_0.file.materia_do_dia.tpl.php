<?php
/* Smarty version 3.1.36, created on 2020-06-02 20:39:06
  from 'C:\xampp\htdocs\lexcenter\view\materia_do_dia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6e31aa998a9_20624795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aa3b2664794d287d8992c975fb5ab4b1eb521f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\view\\materia_do_dia.tpl',
      1 => 1578859198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6e31aa998a9_20624795 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Visualizar Material do Dia</h4>
<hr>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['USUARIO']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'DESATIVADO') {?>
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
                        <h3 class="text-warning">
                       Material do Aluno DESATIVADO
                        </h3>
                    </div>   
                </div>
            </div>
        </div>
           <?php } else { ?>        
<!--- listando clientes ---->
<section id="cart_items" class="container">  
    <div class="table-responsive">
        <table class="table table-hover">
            <thead> 
                <tr class="cart_menu">
                    <td class="description">Nome</td>
                    <td class="description">Disciplina</td>
                    <td class="description">Descrição</td>
                    <td class="description">Arquivo</td>
                    <td class="description">Data</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MATERIA']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                <tr class="cart_info">
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['mat_nome'];?>
 </td>

                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['mat_disciplina'];?>
</td>
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['mat_descricao'];?>
</td>

                    <td class="description">
                                               
                                                <iframe src="<?php echo $_smarty_tpl->tpl_vars['C']->value['mat_arquivo'];?>
" width="250" height="100" class="thumbnail" alt=""></iframe>
                    </td>
                    <td class="description"><?php echo $_smarty_tpl->tpl_vars['C']->value['mat_data'];?>
</td>
                      <td class="description">     
                                                <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_MATERIA_DO_DIA_INFO']->value;?>
">
                            <input type="hidden" name="mat_id" id="mat_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['mat_id'];?>
">
                            <button class="btn btn-info"> <i class="fa fa-file-o"></i> Visualizar Arquivo</button>
                        </form>  
                              
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
</section>
         <?php }
}
}
