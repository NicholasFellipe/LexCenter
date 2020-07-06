<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

{if {$PRO.1.cate_id}==11}{*SE FOR BLOG DO CONCURSEIRO*}

        <h2 class="text-center">EDITAR {$PRO.1.cate_nome}</h2>   
        {*SECTION*}
        <section class="row" id="camposproduto">
            {* FORMULARIO*}
            <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 
                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <div class="row">
                    {* NOME DO CURSO*}
                    <div class="col-md-6">
                        <label>**EDITAR** Nome do Link da Postagem</label>
                        <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required value="{$PRO.1.con_nome}">    
                    </div>
                    {* NOME DO CURSO*}

                    {* DESCRICAO PEQUENA*}
                    <div class="col-md-6">
                        <label>**EDITAR** Descrição Pequena</label>
                        <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required value="{$PRO.1.con_desc_pequena}">    
                    </div>
                    {* DESCRICAO PEQUENA*}
                </div>
                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <br>
                {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
                <div class="row">      
                    {* TEMPO DO CURSO *}
                    <div class="col-md-4">
                        {*<label>Tempo de Curso/Duração do Curso</label>*}
                        <input type="hidden" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required value="{$PRO.1.con_tempocurso}">    
                    </div>
                    {* TEMPO DO CURSO*}

                    {* QUANTIDADE DE DISCIPLINAS*}
                    <div class="col-md-4">
                        {*  <label>Quantidade de Disciplinas do Curso</label>*}
                        <input type="hidden" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required value="{$PRO.1.con_disciplinas}">    
                    </div>
                    {* QUANTIDADE DE DISCIPLINAS*}

                    {* QUANTIDADE DE VAGAS*}
                    <div class="col-md-4">
                        {* <label>Quantidade de vagas</label>*}
                        <input type="hidden" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required value="{$PRO.1.con_aprovacaotaxa}">    
                    </div>
                    {* QUANTIDADE DE VAGAS*}
                </div>
                {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
                {* DATA DO COMECO E DO FINAL DO CURSO*}
                <div class="row">
                    {* DATA DO COMECO DO CURSO*}
                    <div class="col-md-6">
                        {*  <label>Data de Inicio do Curso</label>*}
                        <input type="hidden" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required value="{$PRO.1.con_dataini_us}">    
                    </div>
                    {* DATA DO COMECO DO CURSO*}

                    {* DATA DO FIM DO CURSO*}
                    <div class="col-md-6">
                        {* <label>Data do Final do Curso</label>*}
                        <input type="hidden" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required value="{$PRO.1.con_datafim_us}">    
                    </div>
                    {* DATA DO FIM DO CURSO*}
                </div>
                {* DATA DO COMECO E DO FINAL DO CURSO*}

                <br>
                {* CATEGORIA E IMAGEM *}
                <div class="row">
                    {* CATEGORIA*}
                    <div class="col-md-6">
                        <label>**EDITAR** Categoria</label>
                        <select name="con_categoria" id="con_categoria" class="form-control" required>    
                            <option value="{$PRO.1.cate_id}"> {$PRO.1.cate_nome} </option>                           
                            <option value=""> Escolha</option>                           
                            {foreach from=$CATEGORIAS item=C}                    
                                <option value="{$C.cate_id}">{$C.cate_nome}</option>                                        
                            {/foreach}                
                        </select>
                    </div>
                    {*CATEGORIA *}

                    {*IMAGEM DO CURSO*}
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <hr> 
                            <img src="{$PRO.1.con_img}" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <label>**EDITAR** Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_img_atual" id="con_img_atual" value="{$PRO.1.con_img_atual}">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="{$PRO.1.con_img_arquivo}">
                        </div>
                    </div>
                    {*IMAGEM DO CURSPO*}
                </div>
                {* CATEGORIA E IMAGEM *}
                <br>
                {*DESCRICAO DO CURSO*}
                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="con_desc" id="con_desc" rows="5" class="form-control" >{$PRO.1.con_desc}</textarea>

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
                        <input type="text" readonly name="con_slug" id="con_slug"   class="form-control" value="{$PRO.1.con_slug}">
                    </div>
                </div>
                {*SLUG*}
                <br>
                <hr>
                {*  BOTAO PARA SALVAR *}
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <a href="{$PAG_BLOG}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Blog do Concurseiro</a>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atulizar Dados </button>
                    </div>
                </div>
                {*  BOTAO PARA SALVAR *} 
                <input type="hidden" name="con_id" value="{$PRO.1.con_id}">
            </form>
            {* FORMULARIO*}
        </section>
        {*SECTION*}

        {* APAGAR O PRODUTO*}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar {$PRO.1.con_nome}</button> 
            </div>
            <div class="col-md-4"></div>
        </div>
        {* APAGAR O PRODUTO*}

        {* APAGAR O PRODUTO CONFIRMACAO*}
        <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar a página {$PRO.1.con_nome}?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="con_id_apagar" value="{$PRO.1.con_id}">
                <input type="hidden" name="con_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="{$PRO.1.con_img_arquivo}">
            </form>
        </div>
        {* APAGAR O PRODUTO CONFIRMACAO*}

   {elseif {$PRO.1.cate_id}==10}{*SE FOR CONCURSOS PUBLICOS*}

        <h2 class="text-center">EDITAR {$PRO.1.cate_nome}</h2>
        <br>
        {*SECTION*}
        <section class="row" id="camposproduto">
            {* FORMULARIO*}
            <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <div class="row">
                    {* NOME DO CURSO*}
                    <div class="col-md-6">
                        <label>**EDITAR** Nome do Curso</label>
                        <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required value="{$PRO.1.con_nome}">    
                    </div>
                    {* NOME DO CURSO*}

                    {* DESCRICAO PEQUENA*}
                    <div class="col-md-6">
                        <label>**EDITAR** Descrição Pequena</label>
                        <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required value="{$PRO.1.con_desc_pequena}">    
                    </div>
                    {* DESCRICAO PEQUENA*}
                </div>
                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <br>
                {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
                <div class="row">      
                    {* TEMPO DO CURSO *}
                    <div class="col-md-4">
                        <label>**EDITAR** Tempo de Curso/Duração do Curso</label>
                        <input type="text" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required value="{$PRO.1.con_tempocurso}">    
                    </div>
                    {* TEMPO DO CURSO*}

                    {* QUANTIDADE DE DISCIPLINAS*}
                    <div class="col-md-4">
                        <label>**EDITAR** Qtd de Disciplinas do Curso</label>
                        <input type="number" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required value="{$PRO.1.con_disciplinas}">    
                    </div>
                    {* QUANTIDADE DE DISCIPLINAS*}

                    {* QUANTIDADE DE VAGAS*}
                    <div class="col-md-4">
                        <label>**EDITAR** Qtd(Nº) de vagas/Cad. de Reservas</label>

                        <input type="text" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required value="{$PRO.1.con_aprovacaotaxa}">    
                    </div>
                    {* QUANTIDADE DE VAGAS*}
                </div>
                {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
                <br>
                {* DATA DO COMECO E DO FINAL DO CURSO*}
                <div class="row">
                    {* DATA DO COMECO DO CURSO*}
                    <div class="col-md-6">
                        <label>**EDITAR** Data de Início do Curso = {$PRO.1.con_dataini}</label>
                        <input type="date" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required value="{$PRO.1.con_dataini_us}">    
                    </div>
                    {* DATA DO COMECO DO CURSO*}

                    {* DATA DO FIM DO CURSO*}
                    <div class="col-md-6">
                        <label>**EDITAR** Data do Final do Curso = {$PRO.1.con_datafim}</label>
                        <input type="date" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required value="{$PRO.1.con_datafim_us}">    
                    </div>
                    {* DATA DO FIM DO CURSO*}
                </div>
                {* DATA DO COMECO E DO FINAL DO CURSO*}
                <br>
                {* CATEGIRIA E IMAGEM *}
                <div class="row">
                    {* CATEGORIA*}
                    <div class="col-md-6">
                        <label>**EDITAR** Categoria</label>
                        <select name="con_categoria" id="con_categoria" class="form-control" required>    
                            <option value="{$PRO.1.cate_id}"> {$PRO.1.cate_nome} </option>                           
                            <option value=""> Escolha</option>                           
                            {foreach from=$CATEGORIAS item=C}                    
                                <option value="{$C.cate_id}">{$C.cate_nome}</option>                                        
                            {/foreach}                
                        </select>
                    </div>
                    {*CATEGORIA *}

                    {*IMAGEM DO CURSO*}
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <hr> 
                            <img src="{$PRO.1.con_img}" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">

                            <label>**EDITAR**Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_img_atual" id="con_img_atual" value="{$PRO.1.con_img_atual}">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="{$PRO.1.con_img_arquivo}">
                        </div>
                    </div>
                    {*IMAGEM DO CURSPO*}
                </div>
                {* CATEGIRIA E IMAGEM *}
                <br>
                {*DESCRICAO DO CURSO*}
                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="con_desc" id="con_desc" rows="5" class="form-control" >{$PRO.1.con_desc}</textarea>

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
                        <input type="text" readonly name="con_slug" id="con_slug"   class="form-control" value="{$PRO.1.con_slug}">
                    </div>
                </div>
                {*SLUG*}
                <br>
                <hr>
                {*  BOTAO PARA SALVAR *}
                <div class="row">
                     <div class="col-md-4">
                        <br>
                        <a href="{$PAG_CONCURSOS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Concursos Públicos</a>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                {*  BOTAO PARA SALVAR *} 
                <input type="hidden" name="con_id" value="{$PRO.1.con_id}">
            </form>
            {* FORMULARIO*}
        </section>
        {*SECTION*}

        {* APAGAR O PRODUTO*}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar {$PRO.1.con_nome}</button> 
            </div>
            <div class="col-md-4"></div>
        </div>
        {* APAGAR O PRODUTO*}

        {* APAGAR O PRODUTO CONFIRMACAO*}
        <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar a página {$PRO.1.con_nome}?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="con_id_apagar" value="{$PRO.1.con_id}">
                <input type="hidden" name="con_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="{$PRO.1.con_img_arquivo}">
            </form>
        </div>
        {* APAGAR O PRODUTO CONFIRMACAO*}

    {elseif {$PRO.1.cate_id}==6}{*SE FOR PROVAS ANTERIORES   *} 

        <h2 class="text-center">EDITAR {$PRO.1.cate_nome}</h2>
        <br>
        {*SECTION*}
        <section class="row" id="camposproduto">
            {* FORMULARIO*}
            <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <div class="row">
                    {* NOME DO CURSO*}
                    <div class="col-md-6">
                        <label>**EDITAR** Nome do Link de Provas Anteriores</label>
                        <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required value="{$PRO.1.con_nome}">    
                    </div>
                    {* NOME DO CURSO*}

                    {* DESCRICAO PEQUENA*}
                    <div class="col-md-6">
                        <label>**EDITAR** Descrição Pequena</label>
                        <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required value="{$PRO.1.con_desc_pequena}">    
                    </div>
                    {* DESCRICAO PEQUENA*}
                </div>
                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <br>
                {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
                <div class="row">      
                    {* TEMPO DO CURSO *}
                    <div class="col-md-4">
                        {*<label>Tempo de Curso/Duração do Curso</label>*}
                        <input type="hidden" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required value="{$PRO.1.con_tempocurso}">    
                    </div>
                    {* TEMPO DO CURSO*}

                    {* QUANTIDADE DE DISCIPLINAS*}
                    <div class="col-md-4">
                        {*  <label>Quantidade de Disciplinas do Curso</label>*}
                        <input type="hidden" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required value="{$PRO.1.con_disciplinas}">    
                    </div>
                    {* QUANTIDADE DE DISCIPLINAS*}

                    {* QUANTIDADE DE VAGAS*}
                    <div class="col-md-4">
                        {* <label>Quantidade de vagas</label>*}
                        <input type="hidden" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required value="{$PRO.1.con_aprovacaotaxa}">    
                    </div>
                    {* QUANTIDADE DE VAGAS*}
                </div>

                {* DATA DO COMECO E DO FINAL DO CURSO*}
                <div class="row">
                    {* DATA DO COMECO DO CURSO*}
                    <div class="col-md-6">
                        {*  <label>Data de Inicio do Curso</label>*}
                        <input type="hidden" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required value="{$PRO.1.con_dataini_us}">    
                    </div>
                    {* DATA DO COMECO DO CURSO*}

                    {* DATA DO FIM DO CURSO*}
                    <div class="col-md-6">
                        {* <label>Data do Final do Curso</label>*}
                        <input type="hidden" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required value="{$PRO.1.con_datafim_us}">    
                    </div>
                    {* DATA DO FIM DO CURSO*}
                </div>
                {* DATA DO COMECO E DO FINAL DO CURSO*}
                <br>
                {* CATEGORIA E IMAGEM *}
                <div class="row">
                    {* CATEGORIA*}
                    <div class="col-md-6">
                        <label>**EDITAR** Categoria</label>
                        <select name="con_categoria" id="con_categoria" class="form-control" required>    
                            <option value="{$PRO.1.cate_id}"> {$PRO.1.cate_nome} </option>                           
                            <option value=""> Escolha</option>                           
                            {foreach from=$CATEGORIAS item=C}                    
                                <option value="{$C.cate_id}">{$C.cate_nome}</option>                                        
                            {/foreach}                
                        </select>
                    </div>
                    {*CATEGORIA *}

                    {*IMAGEM DO CURSO*}
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <img src="{$PRO.1.con_img}" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <label>**EDITAR** Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_img_atual" id="con_img_atual" value="{$PRO.1.con_img_atual}">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="{$PRO.1.con_img_arquivo}">
                        </div>
                    </div>
                    {*IMAGEM DO CURSPO*}
                    {*arquivo DO CURSO*}
                    <div class="col-md-3">
                        <div class="col-md-12">
<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Ver o arquivo</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <iframe src="{$PRO.1.con_img_arquivo}" width="900" height="500" class="thumbnail" alt=""></iframe>
    </div>
  </div>
</div>
                            <iframe src="{$PRO.1.con_img_arquivo}" width="240" height="110" class="thumbnail" alt=""></iframe>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <label>**EDITAR** Provas Anteriores <h3 class="text-danger">Max. 2MB</h3></label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_arquivo" class="form-control btn btn-primary" id="con_arquivo">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_arquivo_atual" id="con_arquivo_atual" value="{$PRO.1.con_arquivo_atual}">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_arquivo_arquivo" id="con_arquivo_arquivo" value="{$PRO.1.con_arquivo_arquivo}">
                        </div>
                    </div>
                    {*arquivo DO CURSPO*}
                </div>
                {* CATEGORIA E IMAGEM *}
                <br>
                {*DESCRICAO DO CURSO*}
                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="con_desc" id="con_desc" rows="5" class="form-control" >{$PRO.1.con_desc}</textarea>

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
                        <input type="text" readonly name="con_slug" id="con_slug"   class="form-control" value="{$PRO.1.con_slug}">
                    </div>
                </div>
                {*SLUG*}
                <br>
                <hr>
                {*  BOTAO PARA SALVAR *}
                <div class="row">
                     <div class="col-md-4">
                        <br>
                        <a href="{$PAG_PROVAS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Provas Anteriores</a>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                {*  BOTAO PARA SALVAR *} 
                <input type="hidden" name="con_id" value="{$PRO.1.con_id}">
            </form>
            {* FORMULARIO*}
        </section>
        {*SECTION*}

        {* APAGAR O PRODUTO*}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar {$PRO.1.con_nome}</button> 

            </div>
            <div class="col-md-4"></div>
        </div>
        {* APAGAR O PRODUTO*}

        {* APAGAR O PRODUTO CONFIRMACAO*}
        <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar a página {$PRO.1.con_nome}?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="con_id_apagar" value="{$PRO.1.con_id}">
                <input type="hidden" name="con_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="{$PRO.1.con_img_arquivo}">
            </form>
        </div>
        {* APAGAR O PRODUTO CONFIRMACAO*}
         {elseif {$PRO.1.cate_id}==7}{*SE FOR ALUNOS APROVADOS   *}   
        
        <h2 class="text-center">EDITAR {$PRO.1.cate_nome}</h2>
        <br>
        {*SECTION*}
        <section class="row" id="camposproduto">
            {* FORMULARIO*}
            <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <div class="row">
                    {* NOME DO CURSO*}
                    <div class="col-md-6">
                        <label>**EDITAR** Nome do Edital/Ano/Concurso </label>
                        <input type="text" name="con_nome" id="con_nome" maxlength="50" class="form-control"  required value="{$PRO.1.con_nome}">    
                    </div>
                    {* NOME DO CURSO*}

                    {* DESCRICAO PEQUENA*}
                    <div class="col-md-6">
                        <label>**EDITAR** Descrição Pequena</label>
                        <input type="text" name="con_desc_pequena" id="con_desc_pequena" maxlength="50" class="form-control"  required value="{$PRO.1.con_desc_pequena}">    
                    </div>
                    {* DESCRICAO PEQUENA*}
                </div>
                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <br>

                {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
                <div class="row">      
                    {* TEMPO DO CURSO *}
                    <div class="col-md-4">
                        {*<label>Tempo de Curso/Duração do Curso</label>*}
                        <input type="hidden" name="con_tempocurso" id="con_tempocurso" maxlength="40" class="form-control"  required value="{$PRO.1.con_tempocurso}">    
                    </div>
                    {* TEMPO DO CURSO*}

                    {* QUANTIDADE DE DISCIPLINAS*}
                    <div class="col-md-4">
                        {*  <label>Quantidade de Disciplinas do Curso</label>*}
                        <input type="hidden" name="con_disciplinas" id="con_disciplinas" maxlength="40" class="form-control"  required value="{$PRO.1.con_disciplinas}">    
                    </div>
                    {* QUANTIDADE DE DISCIPLINAS*}

                    {* QUANTIDADE DE VAGAS*}
                    <div class="col-md-4">
                        {* <label>Quantidade de vagas</label>*}
                        <input type="hidden" name="con_aprovacaotaxa" id="con_aprovacaotaxa" maxlength="40" class="form-control"  required value="{$PRO.1.con_aprovacaotaxa}">    
                    </div>
                    {* QUANTIDADE DE VAGAS*}
                </div>
                {* TEMPO DE CURSO, QUANTIDADE DE DISCIPLINAS, QUANTIDADE DE VAGAS *}
                {* DATA DO COMECO E DO FINAL DO CURSO*}
                <div class="row">
                    {* DATA DO COMECO DO CURSO*}
                    <div class="col-md-6">
                        {*  <label>Data de Inicio do Curso</label>*}
                        <input type="hidden" name="con_dataini" id="con_dataini" maxlength="40" class="form-control"  required value="{$PRO.1.con_dataini_us}">    
                    </div>
                    {* DATA DO COMECO DO CURSO*}

                    {* DATA DO FIM DO CURSO*}
                    <div class="col-md-6">
                        {* <label>Data do Final do Curso</label>*}
                        <input type="hidden" name="con_datafim" id="con_datafim" maxlength="40" class="form-control"  required value="{$PRO.1.con_datafim_us}">    
                    </div>
                    {* DATA DO FIM DO CURSO*}
                </div>
                {* DATA DO COMECO E DO FINAL DO CURSO*}
                <br>
                {* CATEGORIA E IMAGEM *}
                <div class="row">
                    {* CATEGORIA*}
                    <div class="col-md-6">
                        <label>**EDITAR** Categoria</label>
                        <select name="con_categoria" id="con_categoria" class="form-control" required>    
                            <option value="{$PRO.1.cate_id}"> {$PRO.1.cate_nome} </option>                           
                            <option value=""> Escolha</option>                           
                            {foreach from=$CATEGORIAS item=C}                    
                                <option value="{$C.cate_id}">{$C.cate_nome}</option>                                        
                            {/foreach}                
                        </select>
                    </div>
                    {*CATEGORIA *}

                    {*IMAGEM DO CURSO*}
                    <div class="col-md-6">
                        <br>
                        <div class="col-md-12">
                            <img src="{$PRO.1.con_img}" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <label>**EDITAR** Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="con_img" class="form-control btn btn-primary" id="con_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="con_img_atual" id="con_img_atual" value="{$PRO.1.con_img_atual}">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="{$PRO.1.con_img_arquivo}">
                        </div>
                    </div>
                    {*IMAGEM DO CURSPO*}
                </div>
                {* CATEGORIA E IMAGEM *}
                <br>
                {*DESCRICAO DO CURSO*}
                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Descrição</label>
                        <textarea name="con_desc" id="con_desc" rows="5" class="form-control" >{$PRO.1.con_desc}</textarea>

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
                        <input type="text" readonly name="con_slug" id="con_slug"   class="form-control" value="{$PRO.1.con_slug}">
                    </div>
                </div>
                {*SLUG*}
                <br>
                <hr>
                {*  BOTAO PARA SALVAR *}
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <a href="{$PAG_ALUNOS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Alunos Aprovados</a>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                {*  BOTAO PARA SALVAR *} 
                <input type="hidden" name="con_id" value="{$PRO.1.con_id}">
            </form>
            {* FORMULARIO*}
        </section>
        {*SECTION*}

        {* APAGAR O PRODUTO*}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar {$PRO.1.con_nome}</button> 
            </div>
            <div class="col-md-4"></div>
        </div>
        {* APAGAR O PRODUTO*}

        {* APAGAR O PRODUTO CONFIRMACAO*}
        <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar a página {$PRO.1.con_nome}?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="con_id_apagar" value="{$PRO.1.con_id}">
                <input type="hidden" name="con_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="con_img_arquivo" id="con_img_arquivo" value="{$PRO.1.con_img_arquivo}">
            </form>
        </div>
        {* APAGAR O PRODUTO CONFIRMACAO*}
    {/if}  