<section class="container">
    <div class="area_direita">
        <h2>Dados do pedido</h2>
            <table>
            <tr>
                <td><b>Data:</b> {$ITENS.1.ped_data}</td>
            	<td><b>Hora:</b> {$ITENS.1.ped_hora}</td>
            	<td><b>Ref:</b> {$ITENS.1.ped_ref}</td>
            	<td><b>Status:</b> {$ITENS.1.ped_pag_status}</td>
            </tr>
            </table>

            <table>
        
		        <tr>
		            <td></td>
		            <td>Item</td>
		            <td>Valor Uni</td>
		            <td>Quantidade</td>
		            <td>Sub</td>
		        </tr>
        
		        {foreach from=$ITENS item=P}
		        <tr>
		            
		            <td><img src="{$P.item_img}" alt=""> </td>
		            <td> {$P.item_nome}</td>
		            <td class="text-right"> {$P.item_valor}</td>
		            <td class="text-center"> {$P.item_qtd}</td>
		            <td class="text-right"> {$P.item_sub}</td>
		            
		        </tr>
		        
		        {/foreach}
            
    		</table>
    </div>
</section>