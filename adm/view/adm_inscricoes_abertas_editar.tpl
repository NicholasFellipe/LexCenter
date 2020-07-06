<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      
<h4 class="text-center"> Editar Inscrições Abertas </h4>
<hr>
            {* FORMULARIO*}
            <form name="frm_produto" method="post" action=""  enctype="multipart/form-data"> 
                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <div class="row">
                    {* NOME DO  CONCURSO:*}
                    <div class="col-md-6">
                        <label>**EDITAR** Nome do Concurso </label>
                        <input type="text" name="ins_nome" id="ins_nome" maxlength="80" class="form-control"  required value="{$PRO.1.ins_nome}">    
                    </div>
                    {* NOME DO  CONCURSO:*}

                    {*IMAGEM DO CONCURSO:*}
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <img src="{$PRO.1.ins_img}" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-12">
                            <label>**EDITAR**Imagem Principal</label>
                            <!--- campos para adicionar a imagem---->
                            <input type="file" name="ins_img" class="form-control btn btn-primary" id="ins_img">
                            <!----pega o nome da imagem atual --->
                            <input type="hidden" name="ins_img_atual" id="ins_img_atual" value="{$PRO.1.ins_img_atual}">
                            <!----pega o caminho completo da imagem atual --->
                            <input type="hidden" name="ins_img_arquivo" id="ins_img_arquivo" value="{$PRO.1.ins_img_arquivo}">
                        </div>
                    </div>
                    {*IMAGEM DO CONCURSO:*}
                </div>
                {* NOME DO CURSO E DESCRICAO PEQUENA*}
                <br>
               
                {* HORA E DATA *}
                <div class="row">
                     {* HORA *}
                    <div class="col-md-4">
                      <label>**EDITAR** Data do Início das Inscrições {$PRO.1.ins_dataini}</label>
                        <input type="date" name="ins_dataini" id="ins_dataini" maxlength="40" class="form-control"  required value="{$PRO.1.ins_dataini_us}">    
                    </div>
                    {* HORA*}
                     {* DATA*}
                    <div class="col-md-4">
                        <label>**EDITAR** Data do Final das Inscrições {$PRO.1.ins_datafim}</label>
                        <input type="date" name="ins_datafim" id="ins_datafim" maxlength="40" class="form-control"  required value="{$PRO.1.ins_datafim_us}">    
                    </div>
                    {* DATA*}
                    {* LINK DO SITE PARA CADASTRO*}
                    <div class="col-md-4">
                        <label>**EDITAR** Link para Cadastro do Candidato </label>
                        <input type="text" name="ins_linkinscricao" id="ins_linkinscricao" maxlength="80" class="form-control"  required value="{$PRO.1.ins_linkinscricao}">    
                    </div>
                    {* LINK DO SITE PARA CADASTRO*}
                </div>
                {* HORA E DATA*}
                <br>
                <hr>
                {*  BOTAO PARA SALVAR *}
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <a href="{$PAG_DATAS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Datas Importantes</a>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <br>
                        <button class="btn btn-success btn-block" name="btn_gravar"><i class="fa fa-check"></i> Atualizar Dados </button>
                    </div>
                </div>
                {*  BOTAO PARA SALVAR *} 
                <input type="hidden" name="ins_id" value="{$PRO.1.ins_id}">
            </form>
            {* FORMULARIO*}
     

        {* APAGAR O PRODUTO*}
        <div class="row">
             <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <!--- botÃ£o que abre a opÃ§Ã£o de apagar ---->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="fa fa-trash-o"></i> Apagar Inscrições Abertas {$PRO.1.ins_nome}</button> 

            </div>
              <div class="col-md-4"></div>
        </div>
        {* APAGAR O PRODUTO*}

        {* APAGAR O PRODUTO CONFIRMACAO*}
        <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">
            <br>
            <form name="frm_apagar" method="post" action="">
                <label>Apagar esta Data {$PRO.1.ins_nome}?</label>

                <input type="radio" name="confirmar" value="SIM" required>
                <!---botao que apagar o produto de uma vez --->
                <button class="btn btn-danger check_out " name="btn_apagar"><i class="fa fa-trash-o"></i> OK </button> 
                <input type="hidden" name="ins_id_apagar" value="{$PRO.1.ins_id}">
                <input type="hidden" name="ins_apagar" value="SIM">
                <!----pega o caminho completo da imagem atual --->
                <input type="hidden" name="ins_img_arquivo" id="ins_img_arquivo" value="{$PRO.1.ins_img_arquivo}">
            </form>
        </div>
        {* APAGAR O PRODUTO CONFIRMACAO*}

