{extends file="header.tpl"}
{block name="title"}Oferta firmy{/block}
{block name="body"}
<div class="container-fluid bg">
	{if $smarty.session.success}
	<div class="alert alert-dismissible alert-success">
		{$smarty.session.success}
	</div>
	{/if}
	{if $smarty.session.false}
	<div class="alert alert-dismissible alert-warning">
		{$smarty.session.false}
	</div>
	{/if}
	<div class="page-header">
		<h1> Cennik </h1>
	</div>
	<div class="col-lg-12">
		 {anchor("cennik/dodaj" , 'Dodaj Produkt',['class'=>'btn btn-dark addButton'])}
	</div>
		<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa</th>
					<th>Typ </th>
					<th>Opis</th>
					<th>Cena Za Metr</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						{foreach $priceLists as $key}
						<tr>
							<td>{$key['name_product']}</td>
							<td>{$key['type_product']}</td>
							<td>{$key['description_product']}</td>
							<td>{$key['price_for_meter']} zł</td>
							<td>
								<span class="btn-group">
								{anchor("cennik/aktualizuj/{$key['id_product']}" , '<i class="fas fa-edit"></i>',['class'=>'btn btn-success','title'=>'Aktualizuj'])}
								{anchor("cennik/usun/{$key['id_product']}" , '<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger btn-delete','title'=>'Usuń'])}
								</span>
							</td>
						</tr>
						{/foreach}
			</tbody>
	</table>
</div>
{include file="footer.tpl"}
{/block}
