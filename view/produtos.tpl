<section class="container">
	{foreach from=$PRO item=P} 
	<div class="anuncio">
			<a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}"><img src="{$P.pro_img}"></a>
			<h3> {$P.pro_nome}</h3>
			<h5 class="qtd_disponivel">Disponivel: {$P.pro_estoque}</h5>
			<h2 class="price">R$ {$P.pro_valor}</h2>
			<hr>
		<a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="btn_anuncio btn_sucesso">Comprar <i class="fas fa-cart-plus"></i></a>
	</div>
	{/foreach}
	<div class="paginas">{$PAGINAS}</div>
</section>