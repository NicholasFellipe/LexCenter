<h4 class="text-center">Gerenciar Depoimento de Aprovados </h4>
<hr>
<section class="row ">  
    <div class="col-md-4">  
    </div>
    <div class="col-md-4">
        <a href="{$PAG_NOVO_DEPOIMENTOS}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir Depoimento de Aprovados</a>
    </div>
    <div class="col-md-4">
    </div>
</section>
    <hr>
<!--- listando clientes ---->
<section id="cart_items">  
    <div class="table-responsive ">
        <table class="table table-hover">
            <thead> 
                <tr class="cart_menu">
                    <td class="description">Nome Concurso</td>
                    <td class="description">Imagem </td>
                    <td class="description">Concurso </td>
                    <td class="description">Depoimento do Aluno</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            {foreach from=$DEPOIMENTOS item=D}
                <tr class="cart_info">
                    <td class="description">{$D.dep_nomealuno} </td>

                    <td class="description">
                        <img src="{$D.dep_img_p}" class="rounded mx-auto d-block" alt="">
                    </td>
                    <td class="description">{$D.dep_concurso}</td>
                    <td class="description">{$D.dep_depoimento}</td>
                    <td class="description">     
                        {*EDITAR *}
                        <form name="proeditar" method="post" action="{$PAG_EDITAR_DEPOIMENTOS}">
                            <input type="hidden" name="dep_id" id="dep_id" value="{$D.dep_id}">
                            <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar</button>
                        </form>  
                        {*EDITAR*}      
                    </td>
                </tr>
            {/foreach}
        </table>
</section>