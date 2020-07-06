<h4 class="text-center">Detalhes do cliente</h4>

<section class="form" id="cadastro">
    <div class="container">
        <hr>
        <div class="login-form">
            <form name="cadcliente" id="cadcliente" method="post" action="">
                <div class="row">
                    <div class="col-md-4">
                        <label>Nome:</label>
                        <input type="text" value="{$CLI_NOME}" name="cli_nome" class="form-control" minlength="3" required>  
                    </div>


                    <div class="col-md-4">
                        <label>Sobrenome:</label>
                        <input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome" class="form-control"  minlength="3" required>            
                    </div>

                    <div class="col-md-4">
                        <label>Usuario:</label>
                       
                        <input type="text" value="{$CLI_USUARIO}" name="cli_usuario" class="form-control" required>  
                    </div>
                </div>
                <br>
                <div class="row">


                    <div class="col-md-4">
                        <label>Email:</label>
                        <input type="email" value="{$CLI_EMAIL}" name="cli_email" class="form-control" required>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <a href="{$PAG_CLIENTES}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Alunos</a>
                    </div> 
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success btn-block "> <i class="fa fa-check"></i> Atualizar Dados </button>
                        <input type="hidden" name="cli_id" value="{$CLI_ID}">    
                    </div>

                </div>
            </form>
        </div>

    </div>
</section>
<br><br>