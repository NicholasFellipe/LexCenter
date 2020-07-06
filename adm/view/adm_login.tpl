<!DOCTYPE html>

<html>
    <head>
        <title>Área restrita </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- meu aquivo pessoal de CSS-->
        <link href="{$GET_TEMA}/tema/css/tema.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="{$GET_SITE_HOME}/media/images/ico/favicon.ico">
        <link rel="apple-touch-icon" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="{$GET_SITE_HOME}/media/images/ico/apple-touch-icon-180x180.png" />

     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head><br><br><br><br><br><br>
    <body style="background:url({$GET_SITE_HOME}/media/images/ico/LOGO-FACE.png);">
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
</html>