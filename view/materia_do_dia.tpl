<h4 class="text-center">Visualizar Material do Dia</h4>
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
<!--- listando clientes ---->
<section id="cart_items" class="container">  
    <div class="table-responsive">
        <table class="table table-hover">
            <thead> 
                <tr class="cart_menu">
                    <td class="description">Nome</td>
                    <td class="description">Disciplina</td>
                    <td class="description">Descrição</td>
                    <td class="description">Arquivo</td>
                    <td class="description">Data</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            {foreach from=$MATERIA item=C}
                <tr class="cart_info">
                    <td class="description">{$C.mat_nome} </td>

                    <td class="description">{$C.mat_disciplina}</td>
                    <td class="description">{$C.mat_descricao}</td>

                    <td class="description">
                        {*arquivo DO CURSO*}
                       
                        {*arquivo DO CURSPO*}
                        <iframe src="{$C.mat_arquivo}" width="250" height="100" class="thumbnail" alt=""></iframe>
                    </td>
                    <td class="description">{$C.mat_data}</td>
                      <td class="description">     
                        {*EDITAR *}
                        <form name="proeditar" method="post" action="{$PAG_MATERIA_DO_DIA_INFO}">
                            <input type="hidden" name="mat_id" id="mat_id" value="{$C.mat_id}">
                            <button class="btn btn-info"> <i class="fa fa-file-o"></i> Visualizar Arquivo</button>
                        </form>  
                        {*EDITAR*}      
                    </td>
                </tr>
            {/foreach}
        </table>
</section>
         {/if}