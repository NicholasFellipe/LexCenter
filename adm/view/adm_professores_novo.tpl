<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

<h4 class="text-center">Novo Professor</h4>
<hr>
<!--  enctype="multipart/form-data"  --->
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
    {* NOME DO PROFESSOR E IMAGEM*}
    <div class="row">
        {* NOME DO CURSO*}
        <div class="col-md-6">
            <label>Nome do Professor</label>
            <input type="text" name="prof_nome" id="prof_nome" maxlength="40" class="form-control"  required >    
        </div>
        {* NOME DO PROFESSOR E IMAGEM*}
        {*IMAGEM DO PROFESSOR*}
        <div class="col-md-6">
            <div class="col-md-12">
                <label>Imagem Do Professor</label>
                <input type="file" name="prof_img" class="form-control btn btn-primary " id="prof_img">

            </div>
        </div>
        {*IMAGEM DO PROFESSOR*}
    </div>
    {* NOME DO PROFESSOR E IMAGEM*}
    <br>
    {* Disciplina do Professor e Facebook do Professor*}
    <div class="row">      
        {*Disciplina do Professor*}
        <div class="col-md-5">
            <label>Disciplina do Professor</label>
            <input type="text" name="prof_disciplina" id="prof_disciplina" maxlength="40" class="form-control"  required >    
        </div>
        {*Disciplina do Professor *}

        {* Facebook do Professor*}
        <div class="col-md-7">
            <label>Facebook do Professor</label>
            <input type="text" name="prof_facebook" id="prof_facebook" maxlength="40" class="form-control"  required >    
        </div>
        {* Facebook do Professor *}
    </div>
    {* Disciplina do Professor e Facebook do Professor*}
    <br>
    {* BOTAO DE SALVAR       *}
    <div class="row">
            <div class="col-md-4">
                <br>
                <a href="{$PAG_PROFESSORES}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Professores</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            <br>
            <button class="btn btn-success btn-block " name="btn_gravar"><i class="fa fa-check"></i> Gravar </button>
        </div>
    </div>
    {* BOTAO DE SALVAR       *}
    <br>
</form> 