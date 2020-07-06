<!-- plugin editor tinymce----------->
<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      
<h4 class="text-center">  Material do Dia </h4>
<hr>
{if {$USUARIO} == 'DESATIVADO'}
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Aviso!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-warning">
                        Material do Aluno DESATIVADO
                    </h3>
                </div>   
            </div>
        </div>
    </div>
{else}  
        <div class="container">
            {* NOME DO MATERIAL E ARQUIVO DO CURSO*}
            <div class="row">
                {* NOME DO  CONCURSO:*}
                <div class="col-md-2">
                    <label>Nome: {$PRO.1.mat_nome}</label>
                </div>
                {* DISCIPLINA *}
                <div class="col-md-2">
                    <label>Disciplina {$PRO.1.mat_disciplina}</label>     
                </div>
                {* DISCIPLINA*}
                {* DATA*}
                <div class="col-md-2">
                    <label>Data {$PRO.1.mat_data}</label>
                </div>
                {* DATA*}
                {*arquivo DO CURSO*}
                <div class="col-md-6">
                    <div class="col-md-12">
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Ver em tela cheia</button>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <iframe src="{$PRO.1.mat_arquivo}" width="1000" height="700" class="thumbnail" alt=""></iframe>
                                </div>
                            </div>
                        </div>
                                <br><br>
                        <iframe src="{$PRO.1.mat_arquivo}" width="550" height="290" class="thumbnail" alt=""></iframe>
                    </div>

                </div>
            </div>
            <div class="row">
                {*arquivo DO CURSPO*}
                <div class="col-md-12">
                    <label>Descrição</label>
                    {$PRO.1.mat_descricao}

                </div>
            </div>

            {*DESCRICAO DO CURSO*}
            <br>
            <hr>
            {*  BOTAO PARA SALVAR *}
            <div class="row">
                <div class="col-md-4">
                    <a href="{$PAG_DATAS}" class="btn btn-secondary btn-block"> <i class="fa fa-arrow-left"></i> Voltar Para Material do Dia</a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                </div>
            </div>
            <br>
        </div> 
{/if}

