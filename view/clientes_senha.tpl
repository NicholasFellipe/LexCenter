
<section id="recovery">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               
                    <form name="alterarsenha" method="post" action="" > 
                        <h2>Alteração de senha de acesso</h2>
                        <div class="form-group">
                            <label>Digite sua senha atual</label>
                            <input type="password" name="cli_senha_atual" id="cli_senha_atual" placeholder="Sua senha atual" class="form-control" required>
                        </div> 
                        <div class="form-group">
                            <label>Digite sua nova senha</label>
                            <input type="password" name="cli_senha" id="cli_senha" class="form-control" placeholder="Sua nova senha" required>
                            <br>
                            <div id="senhaBarra" class="progress" style="display: none;">
                                <div id="senhaForca" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                </div>
                            </div>
                        </div>  
                        <div class="form-group"> 
                            <button type="submit" class="btn btn-success"><i class="fa fa-key"></i>  Alterar Senha </button>
                        </div>
                    </form>
              
            </div>
            <div class="col-sm-4"></div>
        </div>
</section>
