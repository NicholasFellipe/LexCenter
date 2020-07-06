<section id="recovery">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="login-form"><!--login form-->
                    <form name="recuperar_senha" method="post" action="" > 
                        <h2>Entre com a seu email cadastrado para uma nova senha!</h2>
                        <div class="form-group">
                            <input type="email" name="cli_email" id="cli_email" class="form-control" placeholder="Seu Email" required>
                            {*<input type="email" name="txt_email" placeholder="Seu Email" />*}
                        </div> 

                        <div class="form-group">

                            {* <div class="g-recaptcha" data-sitekey="6Lf1CJUUAAAAABM5rfLSUz9TH1n_4Cyzz6o-wSlO"></div>
                            <div class="g-recaptcha" data-sitekey="6Lf1CJUUAAAAAHSj608UqBadxr7P6UFX2pldKuMP"></div>*}

                        </div>  
                            <br>
                        <div class="form-group"> 
                            <button type="submit" class="btn btn-success"><i class="fa fa-key"></i> Recuperar </button>

                            {* <button  class="btn btn-default"><i class="glyphicon glyphicon-log-in"></i> Entrar</button>*}
                        </div>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-4"></div>
        </div>
</section>