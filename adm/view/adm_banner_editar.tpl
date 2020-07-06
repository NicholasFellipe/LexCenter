<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      
<h4 class="text-center"> Editar Banner </h4>
<hr>
       {*SECTION*}
        <section class="row" id="camposproduto">
            {* FORMULARIO*}
            <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <div class="row">
                    {* NOME DO CURSO*}
                    <div class="col-md-6">
                        <label>Título da Imagem </label>
                        <input type="text" name="ban_nomeconcurso" id="ban_nomeconcurso" maxlength="80" class="form-control"  required value="{$PRO.1.ban_nomeconcurso}">    
                    </div>
                    {* NOME DO CURSO*}

                    {* DESCRICAO PEQUENA*}
                    <div class="col-md-6">
                        <label>Descrição</label>
                        <input type="text" name="ban_descricao" id="ban_descricao" maxlength="100" class="form-control"  required value="{$PRO.1.ban_descricao}">    
                    </div>
                    {* DESCRICAO PEQUENA*}
                </div>
                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <br>
               
                {* CATEGIRIA E IMAGEM *}
                <div class="row">
                     {* DESCRICAO PEQUENA*}
                    <div class="col-md-6">
                        <label>Link do Curso</label>
                        <input type="text" name="ban_linkcurso" id="ban_linkcurso" maxlength="150" class="form-control"  required value="{$PRO.1.ban_linkcurso}">    
                    </div>
                    {* DESCRICAO PEQUENA*}
                    
                    {*IMAGEM DO CURSO*}
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <hr> 
                            <img src="{$PRO.1.ban_img}" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">

                            <label>**EDITAR**Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="ban_img" class="form-control btn btn-primary" id="ban_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="ban_img_atual" id="ban_img_atual" value="{$PRO.1.ban_img_atual}">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="ban_img_arquivo" id="ban_img_arquivo" value="{$PRO.1.ban_img_arquivo}">
                        </div>
                    </div>
                    {*IMAGEM DO CURSPO*}
                </div>
                {* CATEGIRIA E IMAGEM *}
                <br>
                <hr>
                {*  BOTAO PARA SALVAR *}
                <div class="row">
                  <div class="col-md-4">
                        <br>
                        <a href="{$PAG_BANNER}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Banner</a>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                    
                </div>
                {*  BOTAO PARA SALVAR *} 
                <input type="hidden" name="ban_id" value="{$PRO.1.ban_id}">
            </form>
            {* FORMULARIO*}
        </section>
        {*SECTION*}

     

