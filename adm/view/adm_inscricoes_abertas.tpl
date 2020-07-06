<h4 class="text-center">Gerenciar Inscrições Abertas </h4>
<hr>
<section class="row ">  
    <div class="col-md-4">  
    </div>
    <div class="col-md-4">
        <a href="{$PAG_NOVO_DATAS}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir Inscrições Abertas</a>
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
                    <td class="description">Nome Concurso</td>
                    <td class="description">Imagem </td>
                    <td class="description">Prazo de Inscrição </td>
                    <td class="description">Link para Cadastro</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            {foreach from=$DATAS item=C}
                <tr class="cart_info">
                    <td class="description">{$C.ins_nome} </td>

                    <td class="description">
                        <img src="{$C.ins_img_p}" class="rounded mx-auto d-block" alt="">
                    </td>
                    <td class="description">De {$C.ins_dataini} até {$C.ins_datafim}</td>
                    <td class="description"><a href="{$C.ins_linkinscricao}">{$C.ins_linkinscricao}</a></td>
                    <td class="description">     
                        {*EDITAR *}
                        <form name="proeditar" method="post" action="{$PAG_EDITAR_DATAS}">
                            <input type="hidden" name="ins_id" id="ins_id" value="{$C.ins_id}">
                            <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar</button>
                        </form>  
                        {*EDITAR*}      
                    </td>
                </tr>
            {/foreach}
        </table>
</section>