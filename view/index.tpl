<!DOCTYPE html>
<html lang="pt-br">
    <head>
        {*    CONTEUDO ANTIGO    *}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#ABC4FF">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ABC4FF">
        <meta name="msapplication-navbutton-color" content="#ABC4FF">
        <meta name="description" content="Preparatório para concursos públicos">
        <meta name="author" content="">
        <title>{$SITE_NOME}</title>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link href="{$GET_TEMA}/tema/style.min.css" rel="stylesheet" type="text/css"/>
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
             <!-- Stylesheet -->
        <link rel="stylesheet" href="{$GET_TEMA}/tema/style.css">
        <link href="{$GET_TEMA}/tema/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/css/classy-nav.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        {*CONTEUDO ANTIGO*}
    </head>

    <body>
        {* COMECO DO CABECALHO *}
        <header class="header-area">
            <!-- Top Header Area -->
            <div class="top-header-area d-flex justify-content-between align-items-center">
                <!-- Contact Info -->
                <div class="contact-info">
                    <a href="tel:01231256716"><span>Nosso Telefone:</span> 012 3125-6716</a>
                    <a href="https://api.whatsapp.com/send?phone=5512997265473"><span>Nosso WhatsApp:</span> 012 99726-5473</a>
                    <a href="mailto:contato@lexcenter.com"><span>Nosso Email:</span> contato@lexcenter.com</a>
                </div>
                <!-- Follow Us -->
                <div class="follow-us">
                    <span>Siga nos</span>
                    <a href="https://www.facebook.com/lexcenter/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- Navbar Area -->
            <div class="clever-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cleverNav">
                        <!-- Logo -->
                        <a href="{$GET_SITE_HOME}" class="nav-brand"><picture><img src="{$GET_SITE_HOME}/media/images/home/logo.png" alt="" style="width: 90px;" /></picture></a>
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
                                    <li><a href="{$GET_SITE_HOME}">Página Inicial</a></li>
                                        {foreach from=$CATEGORIAS item=C}
                                        <li><a href="{$C.cate_link}">{$C.cate_nome}</a></li>
                                        {/foreach}
                                    <li><a href="{$PAG_DEPOIMENTOS}">Depoimento de Aprovados</a></li>
                                    
                                </ul>
                                <!-- Search Button -->
                                <div class="search-area">
                                    <form method="POST" action="{$PAG_PESQUISA}">
                                        <input type="search" name="pesquisar" id="search" placeholder="Pesquisar"/>
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            {*<button class="btn btn-default check_out" type="submit" >  <i class="fa fa-search"></i> Pesquisar</button>*}
                                    </form>
                                </div>
                                <!-- Register / Login -->
                                <div class="register-login-area">
                                    {if $LOGADO == true}
                                        <a href="{$PAG_CLIENTE_CONTA}" class="btn"><i class="fa fa-user"></i>Portal do Aluno</a>
                                        <a href="{$PAG_LOGOFF}" class="btn" onclick="signOut();"><i class=" fa  fa-sign-out"></i> Sair </a> 
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
        </header>
        {* FINAL DO CABECALHO  *}
  
        {*INICIO CONTEUDO DA PAGINA*}
        {php}
        Rotas::get_Pagina();
//{*Imprime o local da pagina atual*}
//$protocolo = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=="on") ? "https" : "http");
//$url = '://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];
//echo $protocolo.$url; 
//{*Imprime o local da pagina atual*}
        {/php}
        {*FINAL DO CONTEUDO DA PAGINA*}

        {*COMECO DO RODAPE*}
        <footer class="footer-area">
            <!-- Top Footer Area -->
            <div class="top-footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="{$GET_SITE_HOME}"><picture><img src="{$GET_SITE_HOME}/media/images/home/logo.png" alt="" style="width: 90px;" /></picture></a>
                                        {* <a href="index.html"><img src="{$GET_SITE_HOME}/media/img/core-img/logo2.png" alt=""></a>*}
                            </div>
                            <!-- Copywrite -->
                            <p><a href="#"></a></p>
                        </div>
                        <div class="col-12  col-md-6 col-lg-6 col-xl-6">
                            <div class="">
                                <h2>Serviços</h2>
                                <ul>
                                    {* <li><a href="#">Ajuda Online</a></li>*}
                                    <li><a href="{$PAG_CONTATO}">Contato</a></li>
                                    <li><a href="{$PAG_LOGIN}">Portal do Aluno </a></li>
                                    <li><a href="{$PAG_DEPOIMENTOS}">Depoimento de Aprovados </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="">
                                <h2>Politicas</h2>
                                <ul>
                                    <li><a href="{$PAG_PROFESSORES}">Conheça Nossos Professores</a></li>
                                    <li><a href="{$PAG_TERMOS_SITE}">Termos e Condições</a></li>
                                    <li><a href="{$PAG_POLITICA_PRIVACIDADE}">Política de Privacidade</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer Area -->
            <div class="bottom-footer-area d-flex justify-content-between align-items-center">
                <!-- Contact Info -->
                <div class="contact-info">
                    <a href="tel:01231256716"><span>Nosso Telefone:</span> 012 3125-6716</a>
                    <a href="https://api.whatsapp.com/send?phone=5512997265473"><span>Nosso WhatsApp:</span> 012 99726-5473</a>
                    <a href="mailto:contato@lexcenter.com"><span>Nosso Email:</span> contato@lexcenter.com</a>
                </div>
                <!-- Follow Us -->
                <div class="follow-us">
                    <span>Siga nos</span>
                    <a href="https://www.facebook.com/lexcenter/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
        <!-- Google Maps -->
        {* <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
        <script src="{$GET_TEMA}/tema/js/google-map/map-active.js"></script>*}

        {* SCRIPT ANTIGO   *}
        <script src="{$GET_TEMA}/tema/js/chatFacebok.js"></script>
        <script src="{$GET_TEMA}/tema/js/forcaSenha.js"></script>

        <script src='https://www.google.com/recaptcha/api.js' async defer></script>

        <div id="fb-root"></div>
        {*CHAT DO FACEBOOK*}
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="964575073629835"
             theme_color="#99d6ff"
             logged_in_greeting="Olá, seja bem vindo! Como podemos te ajudar?"
             logged_out_greeting="Olá, seja bem vindo! Como podemos te ajudar?">
        </div>
        {*CHAT DO FACEBOOK*}   
        <div id = "fb-root" > </div> 
        <script assíncrona adiar crossorigin = "anonymous" src = "https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3&appId= 752364078516751 & autoLogAppEvents = 1 " ></script> 
    </body>
</html>