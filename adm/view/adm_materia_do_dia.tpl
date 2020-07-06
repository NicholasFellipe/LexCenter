<h4 class="text-center">Gerenciar Materia do Dia </h4>
<hr>
<section class="row ">  
    <div class="col-md-4">  
    </div>
    <div class="col-md-4">
        <a href="{$PAG_NOVO_MATERIAL}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir Materia do Dia</a>
    </div>
    <div class="col-md-4">
    </div>
</section>
<hr>
<!--- listando clientes ---->
<section id="cart_items">  
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
            {foreach from=$DATAS item=C}
                <tr class="cart_info">
                    <td class="description">{$C.mat_nome} </td>
                    
                    <td class="description">{$C.mat_disciplina}</td>
                    <td class="description">{$C.mat_descricao}</td>
                   
                    <td class="description">
                        <iframe src="{$C.mat_arquivo}" width="450" height="100" class="thumbnail" alt=""></iframe>
                    </td>
                     <td class="description">{$C.mat_data}</td>
                    <td class="description">     
                        {*EDITAR *}
                        <form name="proeditar" method="post" action="{$PAG_EDITAR_MATERIAL}">
                            <input type="hidden" name="mat_id" id="mat_id" value="{$C.mat_id}">
                            <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar</button>
                        </form>  
                        {*EDITAR*}      
                    </td>
                </tr>
            {/foreach}
        </table>
</section>