<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

<h4 class="text-center"> Adicionar Preparatório Lex Center </h4>
<hr>

<!--  enctype="multipart/form-data"  --->
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
    {* NOME DO CURSO E DESCRICAO PEQUENA*}
    <div class="row">
        {* NOME DO CURSO*}
        <div class="col-md-6">
            <label>Nome do Curso</label>
            <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required >    
        </div>
        {* NOME DO CURSO*}

        {* DESCRICAO PEQUENA*}
        <div class="col-md-6">
            <label>Descrição Pequena</label>
            <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required>    
        </div>
        {* DESCRICAO PEQUENA*}
    </div>
    {* NOME DO CURSO E DESCRICAO PEQUENA*}
    <br>
    {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
    <div class="row">      
        {* TEMPO DO CURSO *}
        <div class="col-md-4">
            <label>Tempo de Curso/Duração do Curso</label>
            <input type="text" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required >    
        </div>
        {* TEMPO DO CURSO*}

        {* QUANTIDADE DE DISCIPLINAS*}
        <div class="col-md-4">
            <label>Quantidade(Nº) de Disciplinas do Curso</label>
            <input type="number" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required >    
        </div>
        {* QUANTIDADE DE DISCIPLINAS*}

        {* QUANTIDADE DE VAGAS*}
        <div class="col-md-4">
            <label>Quantidade(Nº) de vagas/Cad. de Reserva</label>
            <input type="text" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required >    
        </div>
        {* QUANTIDADE DE VAGAS*}
    </div>
    {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
    <br>
    {* DATA DO COMECO E DO FINAL DO CURSO*}
    <div class="row">
        {* DATA DO COMECO DO CURSO*}
        <div class="col-md-6">
            <label>Data de Início do Curso</label>
            <input type="date" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required >    
        </div>
        {* DATA DO COMECO DO CURSO*}

        {* DATA DO FIM DO CURSO*}
        <div class="col-md-6">
            <label>Data do Final do Curso</label>
            <input type="date" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required >    
        </div>
        {* DATA DO FIM DO CURSO*}
    </div>
    {* DATA DO COMECO E DO FINAL DO CURSO*}
    <br>
    {* CATEGIRIA E IMAGEM *}
    <div class="row">
        {* CATEGORIA*}
        <div class="col-md-6">
            <label>Categoria</label>
            <select name="con_categoria" id="con_categoria" class="form-control" required>                          
                <option value=""> Escolha</option>                           
                {*{foreach from=$CATEGORIAS item=C} *}                   
                    <option value="{$CATEGORIAS.3.cate_id}">{$CATEGORIAS.3.cate_nome}</option>                                        
               {* {/foreach} *}               
            </select>
        </div>
        {*CATEGORIA *}

        {*IMAGEM DO CURSO*}
        <div class="col-md-6">
            <div class="col-md-12">
                <label>Imagem Principal</label>
                <input type="file" name="con_img" class="form-control btn-primary " id="con_img">

            </div>
            {*IMAGEM DO CURSPO*}
        </div>
    </div>
    {* CATEGIRIA E IMAGEM *}
    <br>
    {*DESCRICAO DO CURSO*}
    <div class="row">
        <div class="col-md-12">
            <label>Descrição</label>
            <textarea name="con_desc" id="con_desc" rows="5" class="form-control" ></textarea>
            <script>
                tinymce.init({ selector: 'textarea'});
            </script> 
        </div>
    </div>
    {*DESCRICAO DO CURSO*}
    <br>
    {*SLUG*}
    <div class="row">
        <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="con_slug" id="con_slug"   class="form-control">
        </div>
    </div>
    {*SLUG*}
    <br>
    {* BOTAO DE SALVAR       *}
    <!-- botÃ£o gravar --->
    <div class="row">
        <div class="col-md-4">
            <br>
             <a href="{$PAG_CURSOS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Concursos Publicos</a>
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

