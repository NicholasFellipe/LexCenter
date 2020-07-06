<?php
/* Smarty version 3.1.36, created on 2020-06-02 20:38:48
  from 'C:\xampp\htdocs\lexcenter\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed6e308dc4473_35900513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bea430fc4a22565544c4d166b95f70fa3cd54467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\view\\menu_cliente.tpl',
      1 => 1578859197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6e308dc4473_35900513 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">

    <div class="text-center">
        <h4 class="text-center text-primary"> Olá <b class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
"  role="button" class="btn btn-primary check_out"><i class="fa fa-home"></i> Portal do Aluno</a>
            </div>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['CLI_USUARIO']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'DESATIVADO') {?>
                <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MATERIAL']->value;?>
" role="button" class="btn btn-primary disabled"><i class="fa fa-file-o"></i> Materiais de Apoio </a>
                </div>
            <?php } else { ?>
                <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MATERIAL']->value;?>
" role="button" class="btn btn-primary"><i class="fa fa-file-o    "></i> Materiais de Apoio </a>
                </div>
            <?php }?>   
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
             <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
        </div>
        <br>
        <div class="row"> 
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" role="button" class="btn btn-warning check_out "><i class="fa fa-pencil-square-o"></i> Meus Dados </a>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
"role="button" class="btn btn-warning check_out"><i class="fa fa-key"></i> Alterar Senha </a>
            </div> 
             <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col-6 col-sm-3   col-md-3 col-lg-3 col-xl-3"></div>
        </div> 
    </div>
</div>
</section>
<hr>
<?php }
}
