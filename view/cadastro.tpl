
<section  class="container-fluid">
    <div class="container">
        <br>
        <div class="row">
            <form name="cadcliente" id="cadcliente" method="post" action="" > 
                <form method="get" action=".">
                    <div class="accordion" id="accordion2"> 
                        <div class="row">

                            <div class="accordion-group ">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle btn btn-primary" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        <span class="fa fa-envelope-o"></span> Insira seu e-mail aqui <span class="fa fa-hand-o-down"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <br>  
                        <div class="row">
                            <div id="collapseOne" class="accordion-body collapse in show">
                                <div class="accordion-inner">
                                    {*Email - col-4*}
                                     <div class="row">
                                    <div class="col-md-4">
                                        <input type="hidden" name="cli_usuario" class="form-control" placeholder="Seu Email"  maxlength="55" value="DESATIVADO">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email:</label>
                                        <input type="email" name="cli_email" class="form-control" placeholder="Seu Email"  maxlength="55"required>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                </div>

                                {*Email - col-4*}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="accordion-group ">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle btn btn-primary" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        <span class="fa fa-th-list"></span> Complete seu cadastro <span class="fa fa-hand-o-down"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div id="collapseTwo" class="accordion-body collapse show">
                                <div class="accordion-inner">
                                    <div class="row">
                                        {*Nome - col-4*}
                                        <div class="col-md-4">
                                            <label>Nome:</label>
                                            <input type="text" name="cli_nome" class="form-control" placeholder="Seu Nome" minlength="3"  maxlength="20"required>
                                        </div> 
                                        <div class="col-md-4">
                                            <label>Sobrenome:</label>
                                            <input type="text" name="cli_sobrenome" class="form-control" placeholder="Seu Sobrenome"  minlength="3"  maxlength="20"required> 
                                        </div>  
                                        <div class="col-md-4">
                                            <label>Data Nasc:</label>
                                            <input type="date" name="cli_data_nasc" class="form-control" required>  
                                        </div>  
                                        {*Nascimento - col-4*}

                                        {*CPF - col-2*}
                                        <div class="col-md-4">
                                            <label>Fone:</label>
                                            <input type="text"  name="cli_fone" id="telefone" class="form-control"  placeholder="Seu Fone" maxlength="10" required>   
                                        </div>  
                                        <div class="col-md-4">     
                                            <label>Celular:</label>
                                            <input type="text" name="cli_celular" id="celular" class="form-control" maxlength="11" placeholder="Seu Celular"required> 

                                        </div>
                                        {*Celular - col-3*}
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    <br>
                    {*Botão Para cadastro de novo Cliente*}
                    
                   
                   
                        <div class="col-md-11"></div>
                        <div class="col-md-1 pull-right">
                            <button type="submit" class="btn btn-primary pull-right"><i class=" fa fa-check"></i> Me Cadastrar </button>
                        </div>
                    </div>
                
                    {*Botão Para cadastro de novo Cliente*}
                </form>
            </form>
        </div>{*--/login form--*}
    </div>
</section>
<br>

