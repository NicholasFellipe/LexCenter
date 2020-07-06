<h4 class="text-center">Gerenciar Grade de Professores </h4>
<hr>
<section class="row ">  
    <div class="col-md-4">  
    </div>
    <div class="col-md-4">
        <a href="{$PAG_NOVO_PROFESSORES}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir Professores</a>
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
                    <td class="description">Nome do Professor</td>
                    <td class="description">Imagem </td>
                    <td class="description">Disciplina </td>
                    <td class="description">Link Facebook</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            {foreach from=$PROFESSORES item=C}
                <tr class="cart_info">
                    <td class="description">{$C.prof_nome} </td>

                    <td class="description">
                        <img src="{$C.prof_img_p}" class="rounded mx-auto d-block" alt="">
                    </td>
                    <td class="description">{$C.prof_disciplina}</td>
                    <td class="description"><a href="{$C.prof_facebook}">{$C.prof_facebook}</a></td>
                    <td class="description">     
                        {*EDITAR *}
                        <form name="proeditar" method="post" action="{$PAG_EDITAR_PROFESSORES}">
                            <input type="hidden" name="prof_id" id="prof_id" value="{$C.prof_id}">
                            <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar </button>
                        </form>  
                        {*EDITAR*}      
                    </td>
                </tr>
            {/foreach}
        </table>
</section>