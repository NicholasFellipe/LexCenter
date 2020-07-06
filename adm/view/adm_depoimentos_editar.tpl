<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      
<h4 class="text-center"> Editar Depoimento dos Alunos </h4>
<hr>
     

        {*SECTION*}
        <section class="row" id="camposproduto">
            {* FORMULARIO*}
            <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 

                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <div class="row">
                    {* NOME DO  CONCURSO:*}
                    <div class="col-md-4">
                        <label>**EDITAR** Nome do Aluno Aprovado </label>
                        <input type="text" name="dep_nomealuno" id="dep_nomealuno" maxlength="80" class="form-control"  required value="{$PRO.1.dep_nomealuno}">    
                    </div>
                    {* NOME DO  CONCURSO:*}

                   
               
                     {* **EDITAR** Concurso *}
                    <div class="col-md-4">
                        <label>**EDITAR** Concurso</label>
                        <input type="text" name="dep_concurso" id="dep_concurso" maxlength="150" class="form-control"  required value="{$PRO.1.dep_concurso}">    
                    </div>
                    {* **EDITAR** Concurso*}
                  {*IMAGEM DO CONCURSO:*}
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <img src="{$PRO.1.dep_img_p}" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">

                            <label>**EDITAR**Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="dep_img" class="form-control btn btn-primary" id="dep_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="dep_img_atual" id="dep_img_atual" value="{$PRO.1.dep_img_atual}">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="dep_img_arquivo" id="dep_img_arquivo" value="{$PRO.1.dep_img_arquivo}">
                        </div>
                    </div>
                    {*IMAGEM DO CONCURSO:*}
                </div>
                {***EDITAR** Concurso*}
                <br>
                 {*DESCRICAO DO CURSO*}
                <div class="row">
                    <div class="col-md-12">
                        <label>**EDITAR** Depoimento do Aluno</label>
                        <textarea name="dep_depoimento" id="dep_depoimento" rows="5" class="form-control" >{$PRO.1.dep_depoimento}</textarea>

                        <script>
                            tinymce.init({ selector: 'textarea'});
                        </script> 
                    </div>
                </div>
                {*DESCRICAO DO CURSO*}
                <br>
                <hr>
                {*  BOTAO PARA SALVAR *}
                <div class="row">
                    <div class="col-md-4">
                         <br>
                        <a href="{$PAG_DEPOIMENTOS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Datas Importantes</a>
                    
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                {*  BOTAO PARA SALVAR *} 
                <input type="hidden" name="dep_id" value="{$PRO.1.dep_id}">
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
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar Depoimentos {$PRO.1.dep_concurso}</button> 

            </div>
            <div class="col-md-4"></div>
        </div>
        {* APAGAR O PRODUTO*}

        {* APAGAR O PRODUTO CONFIRMACAO*}
        <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar este Depoimento Aprovados {$PRO.1.dep_concurso}?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="dep_id_apagar" value="{$PRO.1.dep_id}">
                <input type="hidden" name="dep_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="dep_img_arquivo" id="dep_img_arquivo" value="{$PRO.1.dep_img_arquivo}">
            </form>
        </div>
        {* APAGAR O PRODUTO CONFIRMACAO*}

