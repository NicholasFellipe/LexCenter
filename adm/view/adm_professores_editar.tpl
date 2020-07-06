<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      
<h4 class="text-center"> Editar Dados do Professor </h4>
<hr>


    {* FORMULARIO*}
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

        {* NOME DO CURSO E DESCRICAO PEQUENA*}
        <div class="row">
            {* NOME DO  CONCURSO:*}
            <div class="col-md-6">
                <label>**EDITAR** Nome do Professor </label>
                <input type="text" name="prof_nome" id="prof_nome" maxlength="80" class="form-control"  required value="{$PROFESSORES.1.prof_nome}">    
            </div>
            {* NOME DO  CONCURSO:*}

            {*IMAGEM DO CONCURSO:*}
            <div class="col-md-6">
                <div class="col-md-12">
                    <img src="{$PROFESSORES.1.prof_img_p}" class="thumbnail" alt="">
                </div>
                <div class="col-md-12">

                    <label>**EDITAR**Imagem Do Professor</label>
                    <!--- campos para adicionar a imagem---->
                    <input type="file" name="prof_img" class="form-control btn btn-primary" id="prof_img">
                    <!----pega o nome da imagem atual --->
                    <input type="hidden" name="prof_img_atual" id="prof_img_atual" value="{$PROFESSORES.1.prof_img_atual}">
                    <!----pega o caminho completo da imagem atual --->
                    <input type="hidden" name="prof_img_arquivo" id="prof_img_arquivo" value="{$PROFESSORES.1.prof_img_arquivo}">
                </div>
            </div>
            {*IMAGEM DO CONCURSO:*}
        </div>
        {* NOME DO CURSO E DESCRICAO PEQUENA*}
        <br>

        {* HORA E DATA *}
        <div class="row">
            {* HORA *}
            <div class="col-md-6">
                <label>**EDITAR** Disciplina do Professor</label>
                <input type="text" name="prof_disciplina" id="prof_disciplina" maxlength="150" class="form-control"  required value="{$PROFESSORES.1.prof_disciplina}">    
            </div>
            {* HORA*}
            {* DATA*}
            <div class="col-md-6">
                <label>**EDITAR** Facebook do Professor</label>
                <input type="text" name="prof_facebook" id="prof_facebook" maxlength="40" class="form-control"  required value="{$PROFESSORES.1.prof_facebook}">    
            </div>
            {* DATA*}


        </div>
        {* HORA E DATA*}
        <br>
        <hr>
        {*  BOTAO PARA SALVAR *}
        <div class="row">
            
            
            <div class="col-md-4">
                <br>
                <a href="{$PAG_PROFESSORES}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Professores</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br>
                <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar </button>
            </div>
        </div>
        {*  BOTAO PARA SALVAR *} 
        <input type="hidden" name="prof_id" value="{$PROFESSORES.1.prof_id}">
    </form>
    {* FORMULARIO*}


{* APAGAR O PRODUTO*}
<div class="row">
    <div class="col-md-4"></div>
     <div class="col-md-4 text-center">
        <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
        <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar Professor: {$PROFESSORES.1.prof_nome}</button> 

    </div>
    <div class="col-md-4"></div>
</div>
{* APAGAR O PRODUTO*}

{* APAGAR O PRODUTO CONFIRMACAO*}
<div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
    <br>
    <form name="frm_apagar" method="post" action="">
        <label>Apagar este professor {$PROFESSORES.1.prof_nome}?</label>

        <input type="radio" name="confirmar" value="SIM" required>
        <!---botao que apagar o produto de uma vez --->
        <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
        <input type="hidden" name="prof_id_apagar" value="{$PROFESSORES.1.prof_id}">
        <input type="hidden" name="prof_apagar" value="SIM">
        <!----pega o caminho completo da imagem atual --->
        <input type="hidden" name="prof_img_arquivo" id="prof_img_arquivo" value="{$PROFESSORES.1.prof_img_arquivo}">
    </form>
</div>
{* APAGAR O PRODUTO CONFIRMACAO*}

