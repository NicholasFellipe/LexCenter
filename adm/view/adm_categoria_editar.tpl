<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      
<h4 class="text-center"> Editar Categoria </h4>
<hr>
{* FORMULARIO*}
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

    {* NOME DO CURSO E DESCRICAO PEQUENA*}
    <div class="row">
        {* NOME DO  CONCURSO:*}
        <div class="col-md-6">
            <label>**EDITAR** Nome da Categoria </label>
            <input type="text" name="cate_nome" id="cate_nome" maxlength="80" class="form-control"  required value="{$PRO.1.cate_nome}">    
        </div>
        {* NOME DO  CONCURSO:*}

        {*IMAGEM DO CONCURSO:*}
        <div class="col-md-6">
            <div class="col-md-12">
                <img src="{$PRO.1.cate_img_p}" class="thumbnail" alt="">
            </div>
            <div class="col-md-12">

                <label>**EDITAR**Imagem Principal</label>
                <!--- campos para adicionar a imagem---->
                <input type="file" name="cate_img" class="form-control btn btn-primary" id="cate_img">
                <!----pega o nome da imagem atual --->
                <input type="hidden" name="cate_img_atual" id="cate_img_atual" value="{$PRO.1.cate_img_atual}">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="cate_img_arquivo" id="cate_img_arquivo" value="{$PRO.1.cate_img_arquivo}">
            </div>
        </div>
        {*IMAGEM DO CONCURSO:*}
    </div>
    {* NOME DO CURSO E DESCRICAO PEQUENA*}
    <br>
    {*SLUG*}
    <div class="row">
        <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="cate_slug" id="cate_slug"   class="form-control" value="{$PRO.1.cate_slug}">
        </div>
    </div>
    {*SLUG*}
    <br>
    <hr>
    {*  BOTAO PARA SALVAR *}
    <div class="row">

        <div class="col-md-4">
            <br>
            <a href="{$PAG_CATE}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Categorias</a>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br>
            <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
        </div>
    </div>
    {*  BOTAO PARA SALVAR *} 
    <input type="hidden" name="cate_id" value="{$PRO.1.cate_id}">
</form>
{* FORMULARIO*}


{* APAGAR O PRODUTO*}
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 text-center">
        <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
        <br>
        <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar Categoria</button> 

    </div>
    <div class="col-md-4"></div>
</div>
{* APAGAR O PRODUTO*}

{* APAGAR O PRODUTO CONFIRMACAO*}
<div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
    <br>
    <form name="frm_apagar" method="post" action="">
        <label>Apagar a categoria {$PRO.1.cate_nome}?</label>

        <input type="radio" name="confirmar" value="SIM" required>
        <!---botao que apagar o produto de uma vez --->
        <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
        <input type="hidden" name="cate_id_apagar" value="{$PRO.1.cate_id}">
        <input type="hidden" name="cate_apagar" value="SIM">
        <!----pega o caminho completo da imagem atual --->
        <input type="hidden" name="cate_img_arquivo" id="cate_img_arquivo" value="{$PRO.1.cate_img_arquivo}">
    </form>
</div>
{* APAGAR O PRODUTO CONFIRMACAO*}

