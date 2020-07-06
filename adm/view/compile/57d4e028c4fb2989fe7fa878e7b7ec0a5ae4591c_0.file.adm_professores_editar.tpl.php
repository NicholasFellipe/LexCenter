<?php
/* Smarty version 3.1.36, created on 2020-06-02 18:35:54
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_professores_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6c63aab7bc7_17303272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57d4e028c4fb2989fe7fa878e7b7ec0a5ae4591c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_professores_editar.tpl',
      1 => 1578858897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6c63aab7bc7_17303272 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- plugin editor tinymce----------->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>      
<h4 class="text-center"> Editar Dados do Professor </h4>
<hr>


        <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                <div class="row">
                        <div class="col-md-6">
                <label>**EDITAR** Nome do Professor </label>
                <input type="text" name="prof_nome" id="prof_nome" maxlength="80" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_nome'];?>
">    
            </div>
            
                        <div class="col-md-6">
                <div class="col-md-12">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_img_p'];?>
" class="thumbnail" alt="">
                </div>
                <div class="col-md-12">

                    <label>**EDITAR**Imagem Do Professor</label>
                    <!--- campos para adicionar a imagem---->
                    <input type="file" name="prof_img" class="form-control btn btn-primary" id="prof_img">
                    <!----pega o nome da imagem atual --->
                    <input type="hidden" name="prof_img_atual" id="prof_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_img_atual'];?>
">
                    <!----pega o caminho completo da imagem atual --->
                    <input type="hidden" name="prof_img_arquivo" id="prof_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_img_arquivo'];?>
">
                </div>
            </div>
                    </div>
                <br>

                <div class="row">
                        <div class="col-md-6">
                <label>**EDITAR** Disciplina do Professor</label>
                <input type="text" name="prof_disciplina" id="prof_disciplina" maxlength="150" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_disciplina'];?>
">    
            </div>
                                    <div class="col-md-6">
                <label>**EDITAR** Facebook do Professor</label>
                <input type="text" name="prof_facebook" id="prof_facebook" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_facebook'];?>
">    
            </div>
            

        </div>
                <br>
        <hr>
                <div class="row">
            
            
            <div class="col-md-4">
                <br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PROFESSORES']->value;?>
" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Professores</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br>
                <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar </button>
            </div>
        </div>
         
        <input type="hidden" name="prof_id" value="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_id'];?>
">
    </form>
    

<div class="row">
    <div class="col-md-4"></div>
     <div class="col-md-4 text-center">
        <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
        <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar Professor: <?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_nome'];?>
</button> 

    </div>
    <div class="col-md-4"></div>
</div>

<div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
    <br>
    <form name="frm_apagar" method="post" action="">
        <label>Apagar este professor <?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_nome'];?>
?</label>

        <input type="radio" name="confirmar" value="SIM" required>
        <!---botao que apagar o produto de uma vez --->
        <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
        <input type="hidden" name="prof_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_id'];?>
">
        <input type="hidden" name="prof_apagar" value="SIM">
        <!----pega o caminho completo da imagem atual --->
        <input type="hidden" name="prof_img_arquivo" id="prof_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PROFESSORES']->value[1]['prof_img_arquivo'];?>
">
    </form>
</div>

<?php }
}
