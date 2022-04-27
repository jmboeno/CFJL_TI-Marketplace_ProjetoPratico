<section class="container">
    <div class="area_direita">
        <h2>Pedidos</h2>

        {if $PEDIDOS_QUANTIDADE > 0}
        <table>
            <tr>
                <th>Data</th>
                <th>Hora</th>
                <th>Ref</th>
                <th>Status</th>
                <th></th>
            </tr>
            {foreach from=$PEDIDOS item=P}
                <tr>
                    <td>{$P.ped_data}</td>
                    <td>{$P.ped_hora}</td>
                    <td>{$P.ped_ref}</td>

                    {if $P.ped_pag_status == 'Pago'}
                    <td>{$P.ped_pag_status}</td>
                    {elseif $P.ped_pag_status != 'Pago'}
                    <td>Aberto</td>
                    {/if}

                    <form name="itens" method="post" action="{$PAG_ITENS}">
                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                        <td><button> Detalhes</button></td>
                    </form> 
                </tr>
            {/foreach}
        </table>
        {/if}
        {if $PEDIDOS_QUANTIDADE <= 0}
        <strong class="alerta pulse">Você não tem nenhum pedido ainda!</strong>
        {/if}
    </div>
</section>