<?php
/* Smarty version 3.1.36, created on 2020-06-02 20:34:55
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_produtos_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6e21fce10d8_94347175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db49b02d09366e63fbf2b85b418e655e047444c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_produtos_editar.tpl',
      1 => 1591140889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6e21fce10d8_94347175 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- plugin editor tinymce----------->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>      

<?php ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 11) {?>
        <h2 class="text-center">EDITAR <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h2>   
                <section class="row" id="camposproduto">
                        <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 
                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Nome do Link da Postagem</label>
                        <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
">    
                    </div>
                    
                                        <div class="col-md-6">
                        <label>**EDITAR** Descrição Pequena</label>
                        <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_desc_pequena'];?>
">    
                    </div>
                                    </div>
                                <br>
                                <div class="row">      
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_tempocurso'];?>
">    
                    </div>
                    
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_disciplinas'];?>
">    
                    </div>
                    
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_aprovacaotaxa'];?>
">    
                    </div>
                                    </div>
                                                <div class="row">
                                        <div class="col-md-6">
                                                <input type="hidden" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_dataini_us'];?>
">    
                    </div>
                    
                                        <div class="col-md-6">
                                                <input type="hidden" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_datafim_us'];?>
">    
                    </div>
                                    </div>
                
                <br>
                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Categoria</label>
                        <select name="con_categoria" id="con_categoria" class="form-control" required>    
                            <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
 </option>                           
                            <option value=""> Escolha</option>                           
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>                    
                                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>                                        
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
                        </select>
                    </div>
                    
                                        <div class="col-md-6">
                        <div class="col-md-12">
                            <hr> 
                            <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img'];?>
" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <label>**EDITAR** Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_img_atual" id="con_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_atual'];?>
">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
">
                        </div>
                    </div>
                                    </div>
                                <br>
                                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="con_desc" id="con_desc" rows="5" class="form-control" ><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_desc'];?>
</textarea>

                        <?php echo '<script'; ?>
>
                            tinymce.init({ selector: 'textarea'});
                        <?php echo '</script'; ?>
> 
                    </div>
                </div>
                                <br>
                                <div class="row">
                    <div class="col-md-12">
                        <label>Slug</label>
                        <input type="text" readonly name="con_slug" id="con_slug"   class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_slug'];?>
">
                    </div>
                </div>
                                <br>
                <hr>
                                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Blog do Concurseiro</a>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atulizar Dados </button>
                    </div>
                </div>
                 
                <input type="hidden" name="con_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_id'];?>
">
            </form>
                    </section>
        
                <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
</button> 
            </div>
            <div class="col-md-4"></div>
        </div>
        
                <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar a página <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="con_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_id'];?>
">
                <input type="hidden" name="con_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
">
            </form>
        </div>
        
   <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 10) {?>
        <h2 class="text-center">EDITAR <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h2>
        <br>
                <section class="row" id="camposproduto">
                        <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Nome do Curso</label>
                        <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
">    
                    </div>
                    
                                        <div class="col-md-6">
                        <label>**EDITAR** Descrição Pequena</label>
                        <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_desc_pequena'];?>
">    
                    </div>
                                    </div>
                                <br>
                                <div class="row">      
                                        <div class="col-md-4">
                        <label>**EDITAR** Tempo de Curso/Duração do Curso</label>
                        <input type="text" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_tempocurso'];?>
">    
                    </div>
                    
                                        <div class="col-md-4">
                        <label>**EDITAR** Qtd de Disciplinas do Curso</label>
                        <input type="number" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_disciplinas'];?>
">    
                    </div>
                    
                                        <div class="col-md-4">
                        <label>**EDITAR** Qtd(Nº) de vagas/Cad. de Reservas</label>

                        <input type="text" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_aprovacaotaxa'];?>
">    
                    </div>
                                    </div>
                                <br>
                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Data de Início do Curso = <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_dataini'];?>
</label>
                        <input type="date" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_dataini_us'];?>
">    
                    </div>
                    
                                        <div class="col-md-6">
                        <label>**EDITAR** Data do Final do Curso = <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_datafim'];?>
</label>
                        <input type="date" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_datafim_us'];?>
">    
                    </div>
                                    </div>
                                <br>
                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Categoria</label>
                        <select name="con_categoria" id="con_categoria" class="form-control" required>    
                            <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
 </option>                           
                            <option value=""> Escolha</option>                           
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>                    
                                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>                                        
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
                        </select>
                    </div>
                    
                                        <div class="col-md-6">
                        <div class="col-md-12">
                            <hr> 
                            <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img'];?>
" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">

                            <label>**EDITAR**Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_img_atual" id="con_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_atual'];?>
">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
">
                        </div>
                    </div>
                                    </div>
                                <br>
                                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="con_desc" id="con_desc" rows="5" class="form-control" ><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_desc'];?>
</textarea>

                        <?php echo '<script'; ?>
>
                            tinymce.init({ selector: 'textarea'});
                        <?php echo '</script'; ?>
> 
                    </div>
                </div>
                                <br>
                                <div class="row">
                    <div class="col-md-12">
                        <label>Slug</label>
                        <input type="text" readonly name="con_slug" id="con_slug"   class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_slug'];?>
">
                    </div>
                </div>
                                <br>
                <hr>
                                <div class="row">
                     <div class="col-md-4">
                        <br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONCURSOS']->value;?>
" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Concursos Públicos</a>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                 
                <input type="hidden" name="con_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_id'];?>
">
            </form>
                    </section>
        
                <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
</button> 
            </div>
            <div class="col-md-4"></div>
        </div>
        
                <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar a página <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="con_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_id'];?>
">
                <input type="hidden" name="con_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
">
            </form>
        </div>
        
    <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 6) {?> 

        <h2 class="text-center">EDITAR <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h2>
        <br>
                <section class="row" id="camposproduto">
                        <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Nome do Link de Provas Anteriores</label>
                        <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
">    
                    </div>
                    
                                        <div class="col-md-6">
                        <label>**EDITAR** Descrição Pequena</label>
                        <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_desc_pequena'];?>
">    
                    </div>
                                    </div>
                                <br>
                                <div class="row">      
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_tempocurso'];?>
">    
                    </div>
                    
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_disciplinas'];?>
">    
                    </div>
                    
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_aprovacaotaxa'];?>
">    
                    </div>
                                    </div>

                                <div class="row">
                                        <div class="col-md-6">
                                                <input type="hidden" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_dataini_us'];?>
">    
                    </div>
                    
                                        <div class="col-md-6">
                                                <input type="hidden" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_datafim_us'];?>
">    
                    </div>
                                    </div>
                                <br>
                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Categoria</label>
                        <select name="con_categoria" id="con_categoria" class="form-control" required>    
                            <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
 </option>                           
                            <option value=""> Escolha</option>                           
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>                    
                                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>                                        
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
                        </select>
                    </div>
                    
                                        <div class="col-md-3">
                        <div class="col-md-12">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img'];?>
" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <label>**EDITAR** Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_img_atual" id="con_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_atual'];?>
">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
">
                        </div>
                    </div>
                                                            <div class="col-md-3">
                        <div class="col-md-12">
<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Ver o arquivo</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <iframe src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
" width="900" height="500" class="thumbnail" alt=""></iframe>
    </div>
  </div>
</div>
                            <iframe src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
" width="240" height="110" class="thumbnail" alt=""></iframe>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <label>**EDITAR** Provas Anteriores <h3 class="text-danger">Max. 2MB</h3></label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_arquivo" class="form-control btn btn-primary" id="con_arquivo">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_arquivo_atual" id="con_arquivo_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_arquivo_atual'];?>
">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_arquivo_arquivo" id="con_arquivo_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_arquivo_arquivo'];?>
">
                        </div>
                    </div>
                                    </div>
                                <br>
                                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="con_desc" id="con_desc" rows="5" class="form-control" ><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_desc'];?>
</textarea>

                        <?php echo '<script'; ?>
>
                            tinymce.init({ selector: 'textarea'});
                        <?php echo '</script'; ?>
> 
                    </div>
                </div>
                                <br>
                                <div class="row">
                    <div class="col-md-12">
                        <label>Slug</label>
                        <input type="text" readonly name="con_slug" id="con_slug"   class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_slug'];?>
">
                    </div>
                </div>
                                <br>
                <hr>
                                <div class="row">
                     <div class="col-md-4">
                        <br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PROVAS']->value;?>
" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Provas Anteriores</a>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                 
                <input type="hidden" name="con_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_id'];?>
">
            </form>
                    </section>
        
                <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
</button> 

            </div>
            <div class="col-md-4"></div>
        </div>
        
                <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar a página <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="con_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_id'];?>
">
                <input type="hidden" name="con_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
">
            </form>
        </div>
                 <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 7) {?>   
        
        <h2 class="text-center">EDITAR <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
</h2>
        <br>
                <section class="row" id="camposproduto">
                        <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Nome do Edital/Ano/Concurso </label>
                        <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
">    
                    </div>
                    
                                        <div class="col-md-6">
                        <label>**EDITAR** Descrição Pequena</label>
                        <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_desc_pequena'];?>
">    
                    </div>
                                    </div>
                                <br>

                                <div class="row">      
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_tempocurso'];?>
">    
                    </div>
                    
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_disciplinas'];?>
">    
                    </div>
                    
                                        <div class="col-md-4">
                                                <input type="hidden" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_aprovacaotaxa'];?>
">    
                    </div>
                                    </div>
                                                <div class="row">
                                        <div class="col-md-6">
                                                <input type="hidden" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_dataini_us'];?>
">    
                    </div>
                    
                                        <div class="col-md-6">
                                                <input type="hidden" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_datafim_us'];?>
">    
                    </div>
                                    </div>
                                <br>
                                <div class="row">
                                        <div class="col-md-6">
                        <label>**EDITAR** Categoria</label>
                        <select name="con_categoria" id="con_categoria" class="form-control" required>    
                            <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
 </option>                           
                            <option value=""> Escolha</option>                           
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>                    
                                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>                                        
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
                        </select>
                    </div>
                    
                                        <div class="col-md-6">
                        <br>
                        <div class="col-md-12">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img'];?>
" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <label>**EDITAR** Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_img_atual" id="con_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_atual'];?>
">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
">
                        </div>
                    </div>
                                    </div>
                                <br>
                                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="con_desc" id="con_desc" rows="5" class="form-control" ><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_desc'];?>
</textarea>

                        <?php echo '<script'; ?>
>
                            tinymce.init({ selector: 'textarea'});
                        <?php echo '</script'; ?>
> 
                    </div>
                </div>
                                <br>
                                <div class="row">
                    <div class="col-md-12">
                        <label>Slug</label>
                        <input type="text" readonly name="con_slug" id="con_slug"   class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_slug'];?>
">
                    </div>
                </div>
                                <br>
                <hr>
                                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ALUNOS']->value;?>
" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Alunos Aprovados</a>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                 
                <input type="hidden" name="con_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_id'];?>
">
            </form>
                    </section>
        
                <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
</button> 
            </div>
            <div class="col-md-4"></div>
        </div>
        
                <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar a página <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_nome'];?>
?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="con_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_id'];?>
">
                <input type="hidden" name="con_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['con_img_arquivo'];?>
">
            </form>
        </div>
            <?php }}}}?>  <?php }
}
