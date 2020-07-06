<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

<h4 class="text-center">Novo Material do Dia</h4>
<hr>
<!--  enctype="multipart/form-data"  --->
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
    {* NOME DO CONCURSO E IMAGEM*}
    <div class="row">
        {* NOME DO CURSO*}
        <div class="col-md-6">
            <label>Nome do Material</label>
            <input type="text" name="mat_nome" id="mat_nome" maxlength="40" class="form-control"  required >    
        </div>
        {* NOME DO CURSO*}
        {*ARQUIVO DO CURSO*}
        <div class="col-md-6">
            <div class="col-md-12">
                <label>Arquivo Material do Dia <h3 class="text-danger">Max. 2MB</h3></label>
                <!--- campos para adicionar a imagem---->
                <input type="file" name="mat_arquivo" class="form-control btn btn-primary" id="mat_arquivo">
              
            </div>
        </div>
        {*ARQUIVO DO CURSPO*}
    </div>
    {* NOME DO CONCURSO E IMAGEM*}
    <br>
    {* DISCIPLINA E DATA DA MATERIA *}
    <div class="row">  
        {* DISCIPLINA*}
        <div class="col-md-4">
            <label>Disciplina</label>
            <input type="text" name="mat_disciplina" id="mat_disciplina" maxlength="40" class="form-control"  required >    
        </div>
        {* DISCIPLINA *}
        
        {* DATA DA MATERIA*}
        <div class="col-md-4">
            <label>Data do Material</label>
            <input type="date" name="mat_data" id="mat_data" maxlength="40" class="form-control"  required >    
        </div>
        {* DATA DA MATERIA*}    
    </div>
  {* DISCIPLINA E DATA DA MATERIA *}
    <br>
    {*DESCRICAO DO CURSO*}
    <div class="row">
        <div class="col-md-12">
            <label>Descrição do Blog</label>
            <textarea name="mat_descricao" id="mat_descricao" rows="5" class="form-control" ></textarea>
            <script>
                tinymce.init({ selector: 'textarea'});
            </script> 
        </div>
    </div>
    {*DESCRICAO DO CURSO*}
    <br>
    {* BOTAO DE SALVAR       *}
    <div class="row">
        <div class="col-md-4">
              <br>
                        <a href="{$PAG_DATAS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Material do Dia</a>
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