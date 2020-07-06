<section class="container">

    <div class="text-center">
        <h4 class="text-center text-primary"> Olá <b class="text-uppercase">{$USER}</b>, seja bem vindo! O que deseja fazer agora?</h4> 
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                <a href="{$PAG_CONTA}"  role="button" class="btn btn-primary check_out"><i class="fa fa-home"></i> Portal do Aluno</a>
            </div>
            {if {$CLI_USUARIO} == 'DESATIVADO'}
                <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <a href="{$PAG_MATERIAL}" role="button" class="btn btn-primary disabled"><i class="fa fa-file-o"></i> Materiais de Apoio </a>
                </div>
            {else}
                <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <a href="{$PAG_MATERIAL}" role="button" class="btn btn-primary"><i class="fa fa-file-o    "></i> Materiais de Apoio </a>
                </div>
            {/if}   
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
             <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
        </div>
        <br>
        <div class="row"> 
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <a href="{$PAG_CLIENTE_DADOS}" role="button" class="btn btn-warning check_out "><i class="fa fa-pencil-square-o"></i> Meus Dados </a>
            </div>
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <a href="{$PAG_CLIENTE_SENHA}"role="button" class="btn btn-warning check_out"><i class="fa fa-key"></i> Alterar Senha </a>
            </div> 
             <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col-6 col-sm-3   col-md-3 col-lg-3 col-xl-3"></div>
        </div> 
    </div>
</div>
</section>
<hr>
