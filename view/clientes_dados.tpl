<div class="container">
    <div class="row">
        <h3 class="text-center">Meus Dados</h3>
    </div>


    <form name="cadcliente" id="cadcliente" method="post" action="" > 
        <div class="row">
           {* <label>{$CLI_USUARIO}</label>*}
          
            <div class="col-md-4">
                <label>Nome:</label>
                <input type="text" value="{$CLI_NOME}" name="cli_nome" class="form-control" minlength="3" required>   
            </div> 

            <div class="col-md-4">
                <label>Sobrenome:</label>
                <input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome" class="form-control"  minlength="3" required>    
            </div>  

            <div class="col-md-4">
                <label>Data Nasc:</label>
                <input type="date" value="{$CLI_DATA_NASC}" name="cli_data_nasc" class="form-control" required>     
            </div> 
        </div>

        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Fone:</label>
                <input type="number" value="{$CLI_FONE}" name="cli_fone" class="form-control" required>
            </div> 

            <div class="col-md-4">
                <label>Celular:</label>
                <input type="number" value="{$CLI_CELULAR}" name="cli_celular" class="form-control" required> 
            </div>   

            <div class="col-md-4">
                <label>Email:</label>
                <input type="email" value="{$CLI_EMAIL}" name="cli_email" class="form-control" required>  
            </div>
        </div>
        {*Botão Para cadastro de novo Cliente*}
        <br>
        <hr>
        <section class="row" id="btngravar">   
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <label>Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
                <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-success btn-block "> <i class="fa fa-check"></i> Gravar </button>
            </div>
            <div class="col-md-4">
            </div>
        </section>
        <br>
        {*<button type="submit" class="btn btn-primary pull"><i class="glyphicon glyphicon-log-in"></i> Recuperar </button>*}

        {* <button  class="btn btn-default"><i class="glyphicon glyphicon-log-in"></i> Entrar</button>*}

    </form>

</div>
