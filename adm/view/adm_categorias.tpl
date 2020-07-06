<h4 class="text-center"> Gerenciar Categorias </h4>
<hr>

<section class="row ">  
    <div class="col-md-4">  
    </div>
    <div class="col-md-4">
        <a href="{$PAG_NOVO_CATE}" class="btn btn-primary btn-block"> <i class="fa fa-plus"></i> Inserir Categoria</a>
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
                    <td class="description">Nome da Categoria</td>
                    <td class="description">Imagem</td>
                    <td class="description">Slug </td>
                   
                    <td class="description"></td>
                </tr> 
            </thead>
            {foreach from=$CATEGORIAS item=C}
                <tr class="cart_info">
                    <td class="description">{$C.cate_nome} </td>

                    <td class="description">
                        <img src="{$C.cate_img_p}" class="rounded mx-auto d-block" alt="">
                    </td>
                    <td class="description">{$C.cate_slug}</td>
                   
                    <td class="description">     
                        {*EDITAR *}
                        <form name="proeditar" method="post" action="{$PAG_CATEGORIAS_EDITAR}">
                            <input type="hidden" name="cate_id" id="cate_id" value="{$C.cate_id}">
                            <button class="btn btn-warning"> <i class="fa fa-refresh"></i> Atualizar</button>
                        </form>  
                        {*EDITAR*}      
                    </td>
                </tr>
            {/foreach}
        </table>
</section>