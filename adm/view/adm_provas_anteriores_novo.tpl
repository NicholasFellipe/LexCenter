<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

<h4 class="text-center">Nova postagem de Provas Anteriores </h4>
<hr>
<!--  enctype="multipart/form-data"  --->
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
    {* NOME DO CURSO E DESCRICAO PEQUENA*}
    <div class="row">
        {* NOME DO CURSO*}
        <div class="col-md-6">
            <label>Nome do Link de Provas Anteriores</label>
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
    {* CATEGORIA E IMAGEM *}
    <div class="row">
        {* CATEGORIA*}
        <div class="col-md-6">
            <label>Categoria</label>
            <select name="con_categoria" id="con_categoria" class="form-control" required>                          
                <option value=""> Escolha</option>                           
                {*  {foreach from=$CATEGORIAS item=C}  *}                  
                <option value="{$CATEGORIAS.4.cate_id}">{$CATEGORIAS.4.cate_nome}</option>                                        
                {*  {/foreach}  *}              
            </select>
        </div>
        {*CATEGORIA *}

        {*IMAGEM DO CURSO*}
        <div class="col-md-3">
            <div class="col-md-12">
                <label>Imagem Principal</label>
                <!--- campos para adicionar a imagem---->
                <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                
            </div>
        </div>
        {*IMAGEM DO CURSPO*}
        {*IMAGEM DO CURSO*}
        <div class="col-md-3">
            <div class="col-md-12">
                <label>Arquivo Prova Anterior <h3 class="text-danger">Max. 2MB</h3></label>
                <!--- campos para adicionar a imagem---->
                <input type="file" name="con_arquivo" class="form-control btn btn-primary" id="con_arquivo">
              
            </div>
        </div>
        {*IMAGEM DO CURSPO*}
    </div>
    {* CATEGORIA E IMAGEM *}
    <br>
    {*DESCRICAO DO CURSO*}
    <div class="row">
        <div class="col-md-12">
            <label>Descrição de Provas Anteriores</label>
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
    <div class="row">
        <div class="col-md-4">
            <br>
             <a href="{$PAG_PROVAS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Provas Anteriores</a>
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