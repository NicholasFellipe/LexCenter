<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

<h4 class="text-center">Nova Página de Inscrições Abertas</h4>
<hr>
<!--  enctype="multipart/form-data"  --->
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
    {* NOME DO CONCURSO E IMAGEM*}
    <div class="row">
        {* NOME DO CURSO*}
        <div class="col-md-6">
            <label>Nome do Concurso</label>
            <input type="text" name="ins_nome" id="ins_nome" maxlength="40" class="form-control"  required >    
        </div>
        {* NOME DO CURSO*}
        {*IMAGEM DO CURSO*}
        <div class="col-md-6">
            <div class="col-md-12">
                <label>Imagem Principal</label>
                <input type="file" name="ins_img" class="form-control btn-primary " id="ins_img">

            </div>
        </div>
        {*IMAGEM DO CURSPO*}
    </div>
    {* NOME DO CONCURSO E IMAGEM*}
    <br>
    {* HORA E DATA DA PROVA *}
    <div class="row">      
        {* DATA DA PROVA*}
        <div class="col-md-4">
            <label>Data de Início das Inscrições</label>
            <input type="date" name="ins_dataini" id="ins_dataini" maxlength="40" class="form-control"  required >    
        </div>
        {* DATA DA PROVA*}

        {* HORA DA PROVA*}
        <div class="col-md-4">
            <label>Data de Final das Inscrições</label>
            <input type="date" name="ins_datafim" id="ins_datafim" maxlength="40" class="form-control"  required >   
        </div>
        {* HORA DA PROVA *}
        {* LINK DO SITE PARA CADASTRO*}
        <div class="col-md-4">
            <label>**EDITAR** Link para Cadastro do Candidato </label>
            <input type="text" name="ins_linkinscricao" id="ins_linkinscricao" maxlength="80" class="form-control"  required >    
        </div>
        {* LINK DO SITE PARA CADASTRO*}
    </div>
    {* HORA E DATA DA PROVA *}
    <br>
    {* BOTAO DE SALVAR       *}
    <div class="row">
        <div class="col-md-4">
            <br>
            <a href="{$PAG_DATAS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Datas Importantes</a>
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