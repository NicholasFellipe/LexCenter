<h4 class="text-center">Gerenciar Banner da Página Inicial </h4>
<hr>

<!--- listando clientes ---->
<section id="cart_items">  
    <div class="table-responsive">
        <table class="table table-hover">
            <thead> 
                <tr class="cart_menu">
                    <td class="description">Nome Concurso</td>
                    <td class="description">Descrição </td>
                    <td class="description">Imagem </td>
                    <td class="description">Link do Curso</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            {foreach from=$BANNER item=C}
                <tr class="cart_info">
                    <td class="description">{$C.ban_nomeconcurso} </td>
                    <td class="description">{$C.ban_descricao}</td>
                    <td class="description">  <img src="{$C.ban_img_p}" class="rounded mx-auto d-block" alt=""></td>
                    <td class="description"><a href="{$C.ban_linkcurso}">{$C.ban_linkcurso}</a></td>
                    <td class="description">     
                        {*EDITAR *}
                        <form name="proeditar" method="post" action="{$PAG_EDITAR_BANNER}">
                            <input type="hidden" name="ban_id" id="ban_id" value="{$C.ban_id}">
                            <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar</button>
                        </form>  
                        {*EDITAR*}      
                    </td>
                </tr>
            {/foreach}
        </table>
</section>