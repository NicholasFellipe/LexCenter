<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      
<h4 class="text-center">Novo Depoimento de Aprovado</h4>
<hr>
<!--  enctype="multipart/form-data"  --->
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
    {* NOME DO ALUNO E IMAGEM*}
    <div class="row">
        {* NOME DO ALUNO*}
        <div class="col-md-6">
            <label>Nome do Aluno Aprovado</label>
            <input type="text" name="dep_nomealuno" id="dep_nomealuno" maxlength="40" class="form-control"  required >    
        </div>
        {* NOME DO ALUNO*}
        {*IMAGEM DO ALUNO*}
        <div class="col-md-6">
            <div class="col-md-12">
                <label>Imagem Do Aluno - Se Disponivel</label>
                <input type="file" name="dep_img" class="form-control btn-primary" id="dep_img">

            </div>
        </div>
        {*IMAGEM DO ALUNO*}
    </div>
    {* NOME DO ALUNO E IMAGEM*}
    <br>
    {* Concurso do Aprovado/Edital *}
    <div class="row">      
        {* Concurso do Aprovado/Edital*}
        <div class="col-md-6">
            <label>Concurso do Aprovado/Edital</label>
            <input type="text" name="dep_concurso" id="dep_concurso" maxlength="50" class="form-control"  required >    
        </div>
        {* Concurso do Aprovado/Edital*}

    </div>
    {* Concurso do Aprovado/Edital*}
    <br>
    {*DEPOIMENTO DO APROVADO*}
    <div class="row">
        <div class="col-md-12">
            <label>Depoimento do Aprovado</label>
            <textarea name="dep_depoimento" id="dep_depoimento" rows="5" class="form-control" ></textarea>
            <script>
                tinymce.init({ selector: 'textarea'});
            </script> 
        </div>
    </div>
    {*DEPOIMENTO DO APROVADO*}
    <br>
    {* BOTAO DE SALVAR       *}
    <div class="row">
        <div class="col-md-4">
                         <br>
                        <a href="{$PAG_DEPOIMENTOS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Datas Importantes</a>
                    
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Gravar </button>
                    </div>
    </div>
    {* BOTAO DE SALVAR       *}
    <br>
</form> 