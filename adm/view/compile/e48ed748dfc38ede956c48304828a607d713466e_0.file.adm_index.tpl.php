<?php
/* Smarty version 3.1.36, created on 2020-04-23 18:01:44
  from 'C:\xampp\htdocs\lexcenter\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ea2023890afd0_00616764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e48ed748dfc38ede956c48304828a607d713466e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lexcenter\\adm\\view\\adm_index.tpl',
      1 => 1578858901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea2023890afd0_00616764 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->
        <!-- Title -->
        <title>Lex Center Administrador</title>
        <!-- Favicon -->

        <!-- Stylesheet -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/style.css">

                <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#ABC4FF">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ABC4FF">
        <meta name="msapplication-navbutton-color" content="#ABC4FF">
        <meta name="description" content="Lex Center Administrador">
        <meta name="author" content="">
        <title><?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
</title>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/style.css" rel="stylesheet" >
                <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/ico/apple-icon-180x180.png" />
        
    </head>
    <body>
                <header class="header-area">
            <!-- Navbar Area -->
            <div class="clever-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cleverNav">
                        <!-- Logo -->
                        <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
" class="nav-brand"><picture><img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/images/home/logo.png" alt="" style="width: 90px;" /></picture></a>
                        <p>ADM</p>
                                                <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_BANNER']->value;?>
">Banner Página Inicial</a></li>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link_adm'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_DEPOIMENTOS']->value;?>
">Depoimento de Aprovados</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_DATAS_IMPORTANTES']->value;?>
">Inscrições Abertas</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PROFESSORES']->value;?>
">Professores</a></li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
"><i class=""></i> Categorias </a> 
                                    </li>
                                </ul>
                                <!-- Search Button -->
                                <!-- Register / Login -->
                                <div class="register-login-area">
                                    <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SENHA']->value;?>
" class="btn"><i class="fa fa-key"></i> Alterar Senha </a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn"><i class="fa fa-sign-out"></i> Sair </a> 
                                        <h5 > Olá: <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
, Último Login: <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 às <?php echo $_smarty_tpl->tpl_vars['HORA']->value;?>
 </h5>  
                                    <?php } else { ?>
                                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" class="btn"><i class="fa fa-sign-in" data-onsuccess="onSignIn"></i> Portal do Aluno</a>
                                    <?php }?>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>

                                <br>
                                <br>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
"><i class=""></i> Home </a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
"><i class=""></i> Alunos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_MATERIA_DO_DIA']->value;?>
"><i class=""></i> Arquivos da Matéria do Dia </a>
                </li>
            </ul>                  
        </header>
        
                        <div class="col-12 padding-right">
                        <div class="breadcumb-area">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
">Página Inicial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hoje é <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
</li>
                    </ol>
                </nav>
            </div>
            
                        <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <?php 
                    Rotas::get_Pagina();
                    /////  var_dump(Rotas::$pag);
                    ?> 

                </div>
            </div>
                    </div>
                
                <footer class="footer-area">
            <!-- Top Footer Area -->
            <div class="top-footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Logo -->
                            <!-- Copywrite -->
                            <p>Página do Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
        <!-- Popper js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!-- All Plugins js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/plugins/plugins.js"><?php echo '</script'; ?>
>
        <!-- Active js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/active.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            $('#exampleModalLong').modal('toggle');
        <?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
