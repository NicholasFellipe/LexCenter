{if $LOGADO == true} 
    <?php
    session_start();
    ?>
    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
        }
    </script>
{else}

 <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <section  id="fazerlogin"><!--form-->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Cadastre-se</h2>
                        <form action="{$PAG_CADASTRO}">
                            <button type="submit" class="btn btn-default"><i class="fa fa-user-plus"></i> Me cadastrar </button>
                        </form>
                    </div><!--/sign up form-->
                </div>
                <div class="col-sm-4">
                    <div class="search-area"><!--login form-->
                        <form name="cliente_login" method="post" action="" > 
                            <h2>Entre com a sua conta</h2>
                            <div class="form-group">
                                <input type="email" name="txt_email" class="form-control" placeholder="Seu Email" />
                            </div> 
                            <div class="form-group">
                                <input type="password" name="txt_senha" class="form-control" placeholder="Sua Senha" />
                            </div>
                            <div class="form-group ">
                                
                              <div class="g-recaptcha"  data-sitekey="6LcRl68UAAAAACPveT3hk18_Ncm6W9-VdZa_8C-o"></div>
                            
                            </div>
                         
                            
                            <div class="form-group"> 
                                <button  class="btn btn-default"><i class="fa fa-sign-in"></i> Entrar</button>
                            </div>
                        </form>
                         

                    </div><!--/login form-->
                </div>
                
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Recupere sua Senha</h2>
                        <form action="{$PAG_RECOVERY}">
                            <button type="submit" class="btn btn-default"><i class="fa fa-key"></i> Recuperar senha </button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
    <br>
{/if}