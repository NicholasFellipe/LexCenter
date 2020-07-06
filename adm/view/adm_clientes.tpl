
<h4 class="text-center">Gerenciar Clientes </h4>
<hr>
<!--- listando clientes ---->
<section id="cart_items">  
    <div class="table-responsive cart_info">
        <table class="table table-bordered">
            <thead> 
                <tr class="cart_menu"> 
                    <td class="description">Nome</td>
                    <td class="description">Email </td>
                    <td class="description">Fone </td>
                    <td class="description">Data Cad</td>
                    <td class="description"></td>
                </tr> 
            </thead>
            {foreach from=$CLIENTES item=C}
                <tr class="cart_info">
                    <td class="description">{$C.cli_nome} {$C.cli_sobrenome}</td>
                    <td class="description">{$C.cli_email}</td>
                    <td class="description">{$C.cli_fone}</td>
                    <td class="description">{$C.cli_data_cad}</td>
                    <td class="description">
                        <a href="{$PAG_EDITAR}/{$C.cli_id}" class="btn btn-primary"><i class="fa fa-eye"></i> Ver </a>
                    </td>
                </tr>
            {/foreach}
        </table>
</section>