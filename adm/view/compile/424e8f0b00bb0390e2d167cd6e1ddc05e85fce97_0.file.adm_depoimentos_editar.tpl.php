<?php
/* Smarty version 3.1.36, created on 2020-06-02 18:38:17
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_depoimentos_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6c6c9e90361_08889688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '424e8f0b00bb0390e2d167cd6e1ddc05e85fce97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_depoimentos_editar.tpl',
      1 => 1578858903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6c6c9e90361_08889688 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- plugin editor tinymce----------->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>      
<h4 class="text-center"> Editar Depoimento dos Alunos </h4>
<hr>
     

                <section class="row" id="camposproduto">
                        <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                                <div class="row">
                                        <div class="col-md-4">
                        <label>**EDITAR** Nome do Aluno Aprovado </label>
                        <input type="text" name="dep_nomealuno" id="dep_nomealuno" maxlength="80" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_nomealuno'];?>
">    
                    </div>
                    
                   
               
                                         <div class="col-md-4">
                        <label>**EDITAR** Concurso</label>
                        <input type="text" name="dep_concurso" id="dep_concurso" maxlength="150" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_concurso'];?>
">    
                    </div>
                                                          <div class="col-md-4">
                        <div class="col-md-12">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_img_p'];?>
" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">

                            <label>**EDITAR**Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="dep_img" class="form-control btn btn-primary" id="dep_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="dep_img_atual" id="dep_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_img_atual'];?>
">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="dep_img_arquivo" id="dep_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_img_arquivo'];?>
">
                        </div>
                    </div>
                                    </div>
                                <br>
                                 <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Depoimento do Aluno</label>
                        <textarea name="dep_depoimento" id="dep_depoimento" rows="5" class="form-control" ><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_depoimento'];?>
</textarea>

                        <?php echo '<script'; ?>
>
                            tinymce.init({ selector: 'textarea'});
                        <?php echo '</script'; ?>
> 
                    </div>
                </div>
                                <br>
                <hr>
                                <div class="row">
                    <div class="col-md-4">
                         <br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DEPOIMENTOS']->value;?>
" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Datas Importantes</a>
                    
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                 
                <input type="hidden" name="dep_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_id'];?>
">
            </form>
                    </section>
        
                <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar Depoimentos <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_concurso'];?>
</button> 

            </div>
            <div class="col-md-4"></div>
        </div>
        
                <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar este Depoimento Aprovados <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_concurso'];?>
?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="dep_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_id'];?>
">
                <input type="hidden" name="dep_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="dep_img_arquivo" id="dep_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['dep_img_arquivo'];?>
">
            </form>
        </div>
        
<?php }
}
