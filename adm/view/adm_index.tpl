<!DOCTYPE html>
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
        <link rel="stylesheet" href="{$GET_TEMA}/tema/style.css">

        {*    CONTEUDO ANTIGO    *}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#ABC4FF">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ABC4FF">
        <meta name="msapplication-navbutton-color" content="#ABC4FF">
        <meta name="description" content="Lex Center Administrador">
        <meta name="author" content="">
        <title>{$SITE_NOME}</title>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link href="{$GET_TEMA}/tema/style.css" rel="stylesheet" >
        {*Inicio Imagens*}
        <link rel="shortcut icon" href="{$GET_SITE_HOME}/media/images/ico/favicon.ico">
        <link rel="apple-touch-icon" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="{$GET_SITE_HOME}/media/images/ico/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="{$GET_SITE_HOME}/media/images/ico/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="{$GET_SITE_HOME}/media/images/ico/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="{$GET_SITE_HOME}/media/images/ico/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="{$GET_SITE_HOME}/media/images/ico/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="{$GET_SITE_HOME}/media/images/ico/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="{$GET_SITE_HOME}/media/images/ico/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="{$GET_SITE_HOME}/media/images/ico/apple-icon-180x180.png" />
        {*CONTEUDO ANTIGO*}

    </head>
    <body>
        {* COMECO DO CABECALHO *}
        <header class="header-area">
            <!-- Navbar Area -->
            <div class="clever-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cleverNav">
                        <!-- Logo -->
                        <a href="{$GET_SITE_ADM}" class="nav-brand"><picture><img src="{$GET_SITE_HOME}/media/images/home/logo.png" alt="" style="width: 90px;" /></picture></a>
                        <p>ADM</p>
                        {* <a class="nav-brand" href="index.html"><img src="{$GET_SITE_HOME}/media/img/core-img/logo.png" alt=""></a>*}
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
                                    <li><a href="{$PAG_ADM_BANNER}">Banner Página Inicial</a></li>
                                        {foreach from=$CATEGORIAS item=C}
                                        <li><a href="{$C.cate_link_adm}">{$C.cate_nome}</a></li>
                                        {/foreach}
                                    <li><a href="{$PAG_ADM_DEPOIMENTOS}">Depoimento de Aprovados</a></li>
                                    <li><a href="{$PAG_ADM_DATAS_IMPORTANTES}">Inscrições Abertas</a></li>
                                    <li><a href="{$PAG_ADM_PROFESSORES}">Professores</a></li>
                                    <li>
                                        <a href="{$PAG_CATEGORIAS}"><i class=""></i> Categorias </a> 
                                    </li>
                                </ul>
                                <!-- Search Button -->
                                <!-- Register / Login -->
                                <div class="register-login-area">
                                    {if $LOGADO == true}
                                        <a href="{$PAG_SENHA}" class="btn"><i class="fa fa-key"></i> Alterar Senha </a>
                                        <a href="{$PAG_LOGOFF}" class="btn"><i class="fa fa-sign-out"></i> Sair </a> 
                                        <h5 > Olá: {$USER}, Último Login: {$DATA} às {$HORA} </h5>  
                                    {else}
                                        {* <a href="#" class="btn">Registre-se</a>
                                        <a href="index-login.html" class="btn active">Portal do Aluno</a>*}
                                        <a href="{$PAG_LOGIN}" class="btn"><i class="fa fa-sign-in" data-onsuccess="onSignIn"></i> Portal do Aluno</a>
                                    {/if}
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
                    <a class="nav-link active" href="{$GET_SITE_ADM}"><i class=""></i> Home </a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{$PAG_ADM_CLIENTE}"><i class=""></i> Alunos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{$PAG_ADM_MATERIA_DO_DIA}"><i class=""></i> Arquivos da Matéria do Dia </a>
                </li>
            </ul>                  
        </header>
        {* FINAL DO CABECALHO  *}

        {*INICIO CONTEUDO DA PAGINA*}
        {* <!--CONTEUDO DA PAGINA-->*}
        <div class="col-12 padding-right">
            {*Breadcumb *}
            <div class="breadcumb-area">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{$GET_SITE_ADM}">Página Inicial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hoje é {$DATA}</li>
                    </ol>
                </nav>
            </div>
            {* Breadcumb *}

            {*CONTEUDO DA PAGINA*}
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    {php}
                    Rotas::get_Pagina();
                    /////  var_dump(Rotas::$pag);
                    {/php} 

                </div>
            </div>
            {*CONTEUDO DA PAGINA*}
        </div>
        {* <!--CONTEUDO DA PAGINA-->*}
        {*FINAL DO CONTEUDO DA PAGINA*}

        {*COMECO DO RODAPE*}
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
        {*FINAL DO RODAPE*}

        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="{$GET_TEMA}/tema/js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="{$GET_TEMA}/tema/js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="{$GET_TEMA}/tema/js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="{$GET_TEMA}/tema/js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="{$GET_TEMA}/tema/js/active.js"></script>

        <script type="text/javascript">
            $('#exampleModalLong').modal('toggle');
        </script>
        {* SCRIPT ANTIGO   *}

        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    </body>
</html>