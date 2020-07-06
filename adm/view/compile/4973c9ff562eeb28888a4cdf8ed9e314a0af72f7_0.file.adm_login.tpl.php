<?php
/* Smarty version 3.1.36, created on 2020-04-23 18:01:36
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ea202305dff44_27523161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4973c9ff562eeb28888a4cdf8ed9e314a0af72f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_login.tpl',
      1 => 1578858899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea202305dff44_27523161 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title>Área restrita </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- meu aquivo pessoal de CSS-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon-180x180.png" />

     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    </head><br><br><br><br><br><br>
    <body style="background:url(<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/LOGO-FACE.png);">
        <section class="container" > 
            <section class="row">  
                <div class="col-md-4"></div>    
                <div class="col-md-4 thumbnail" id="bloco_login_adm"> 
                    <h4 class="text-center"> Área restrita </h4>
                    <form name="login" method="post" action="">
                        <label>Email:</label>
                        <input type="email" name="txt_email" class="form-control" required autocomplete="off">
                        <label>Senha:</label>
                        <input type="password" name="txt_senha" class="form-control" required>
                        <br>
                        <br>
                        <button class="btn btn-geral btn-block btn-lg" name="txt_logar" value="txt_logar"> Entrar </button>
                        <br>   
                    </form>
                    <!-- botão senha recovery --->
                    <br>
                    <center><button class="btn " data-toggle="collapse" data-target="#recovery"> Esqueci a senha </button></center> 
                    <div class="alert alert-danger collapse" id="recovery"> 
                        <form name="recovery" method="post" action="">
                            <label>Digite o email do administrador </label>
                            <input type="email" name="txt_email" class="form-control" required>
                            <button class="btn btn-success" name="recovery" value="recovery">Solicitar senha</button>
                            
                        </form> 
                    </div>
                </div>     
                <div class="col-md-4"></div>      
            </section>  
        </section>
    </body>
</html><?php }
}
