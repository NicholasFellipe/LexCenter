<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

<h4 class="text-center">Nova Categoria</h4>
<hr>
<!--  enctype="multipart/form-data"  --->
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
    {* NOME DO CONCURSO E IMAGEM*}
    <div class="row">
        {* NOME DO CURSO*}
        <div class="col-md-6">
            <label>Nome da Categoria</label>
            <input type="text" name="cate_nome" id="cate_nome" maxlength="40" class="form-control"  required >    
        </div>
        {* NOME DO CURSO*}
        {*IMAGEM DO CURSO*}
        <div class="col-md-6">
            <div class="col-md-12">
                <label>Imagem Principal</label>
                <input type="file" name="cate_img" class="form-control btn-primary " id="cate_img">

            </div>
        </div>
        {*IMAGEM DO CURSPO*}
    </div>
    {* NOME DO CONCURSO E IMAGEM*}
    <br>
    {*SLUG*}
    <div class="row">
        <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="cate_slug" id="cate_slug"   class="form-control">
        </div>
    </div>
    {*SLUG*}
    <br>
    {* BOTAO DE SALVAR       *}
    <div class="row">
        <div class="col-md-4">
            <br>
            <a href="{$PAG_CATE}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Categorias</a>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br>
            <button class="btn btn-success btn-block " name="btn_gravar"><i class="fa fa-check"></i> Gravar </button>
        </div>
    </div>
    {* BOTAO DE SALVAR       *}
    <br>
</form> 