<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      
<h4 class="text-center"> Editar Matéria do Dia </h4>
<hr>



{* FORMULARIO*}
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

    {* NOME DO MATERIAL E ARQUIVO DO CURSO*}
    <div class="row">
        {* NOME DO  CONCURSO:*}
        <div class="col-md-6">
            <label>**EDITAR** Nome do Material </label>
            <input type="text" name="mat_nome" id="mat_nome" maxlength="80" class="form-control"  required value="{$PRO.1.mat_nome}">    
        </div>
        {* NOME DO  CONCURSO:*}

        {*arquivo DO CURSO*}
        <div class="col-md-6">
            <div class="col-md-12">
                <!-- Large modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Ver o arquivo</button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <iframe src="{$PRO.1.mat_arquivo}" width="900" height="500" class="thumbnail" alt=""></iframe>
                        </div>
                    </div>
                </div>
                <iframe src="{$PRO.1.mat_arquivo}" width="360" height="110" class="thumbnail" alt=""></iframe>
            </div>
            <div class="col-md-12">
                <hr>
                <label>**EDITAR** Matéria do dia <h3 class="text-danger">Max. 2MB</h3></label>
                <!--- campos para adicionar a imagem---->
                <input type="file" name="mat_arquivo" class="form-control btn btn-primary" id="mat_arquivo">
                <!----pega o nome da imagem atual --->
                <input type="hidden" name="mat_arquivo_atual" id="mat_arquivo_atual" value="{$PRO.1.mat_arquivo_atual}">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="mat_arquivo_arquivo" id="mat_arquivo_arquivo" value="{$PRO.1.mat_arquivo_arquivo}">
            </div>
        </div>
        {*arquivo DO CURSPO*}
    </div>
   {* NOME DO MATERIAL E ARQUIVO DO CURSO*}
    <br>

    {* DISCIPLINA E DATA *}
    <div class="row">
        {* DISCIPLINA *}
        <div class="col-md-6">
            <label>**EDITAR** Disciplina</label>
            <input type="text" name="mat_disciplina" id="mat_disciplina" maxlength="150" class="form-control"  required value="{$PRO.1.mat_disciplina}">    
        </div>
        {* DISCIPLINA*}
        {* DATA*}
        <div class="col-md-6">
            <label>**EDITAR** Data {$PRO.1.mat_data}</label>
            <input type="date" name="mat_data" id="mat_data" maxlength="40" class="form-control"  required value="{$PRO.1.mat_data_us}">    
        </div>
        {* DATA*}


    </div>
    {* DISCIPLINA E DATA*}
    <br>
    {*DESCRICAO DO CURSO*}
                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="mat_descricao" id="mat_descricao" rows="5" class="form-control" >{$PRO.1.mat_descricao}</textarea>

                        <script>
                            tinymce.init({ selector: 'textarea'});
                        </script> 
                    </div>
                </div>
                {*DESCRICAO DO CURSO*}
                <br>
    <hr>
    {*  BOTAO PARA SALVAR *}
    <div class="row">

        <div class="col-md-4">
            <br>
            <a href="{$PAG_DATAS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Materia do Dia</a>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br>
            <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
        </div>
    </div>
    {*  BOTAO PARA SALVAR *} 
    <input type="hidden" name="mat_id" value="{$PRO.1.mat_id}">
</form>
{* FORMULARIO*}


{* APAGAR O PRODUTO*}
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 text-center">
        <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
        <br>
        <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar Materia {$PRO.1.mat_nome} {$PRO.1.mat_disciplina}</button> 

    </div>
    <div class="col-md-4"></div>
</div>
{* APAGAR O PRODUTO*}

{* APAGAR O PRODUTO CONFIRMACAO*}
<div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
    <br>
    <form name="frm_apagar" method="post" action="">
        <label>Apagar esta Materia {$PRO.1.mat_nome} {$PRO.1.mat_disciplina}?</label>

        <input type="radio" name="confirmar" value="SIM" required>
        <!---botao que apagar o produto de uma vez --->
        <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
        <input type="hidden" name="mat_id_apagar" value="{$PRO.1.mat_id}">
        <input type="hidden" name="mat_apagar" value="SIM">
        <!----pega o caminho completo da imagem atual --->
        <input type="hidden" name="mat_img_arquivo" id="mat_img_arquivo" value="{$PRO.1.mat_img_arquivo}">
    </form>
</div>
{* APAGAR O PRODUTO CONFIRMACAO*}

