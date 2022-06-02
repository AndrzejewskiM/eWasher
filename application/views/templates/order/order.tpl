{extends file="header.tpl"}
{block name="title"}Zamówienia{/block}
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
		<h1> Lista Zamówień </h1>
	</div>
	<div class="col-lg-12">
		 {anchor("zamowienia/dodaj" , 'Dodaj zamówienie',['class'=>'btn btn-dark addButton'])}
	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Numer Zlecenia</th>
					<th>Dane Klienta</th>
          <th>Data Utworzenia Zlecenia</th>
					<th>Data Odbioru </th>
					<th>Data Dostarczenia Do Klienta</th>
					<th>Status Zlecenia</th>
					<th>Opis</th>
          <th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						{foreach $orders as $key}
						<tr>
							<td>{$key['number_ordering']}</td>
							<td>{$key['name_customer']} {$key['surname_customer']}</td>
              <td>{$key['creation_date']}</td>
							<td>{$key['date_of_receipt']}</td>
							<td>{$key['delivery_date']}</td>
							<td>{$key['name_order_status']}</td>
              <td>{$key['description_ordering']}</td>
							<td>
								<span class="btn-group">
								{anchor("zamowienia/szczegoly/{$key['id_ordering']}" , '<i class="fas fa-search-plus"></i>',['class'=>'btn btn-info','title'=>'Szczegóły zamówienia'])}
								{anchor("zamowienia/aktualizuj/{$key['id_ordering']}" , '<i class="fas fa-edit"></i>',['class'=>'btn btn-success','title'=>'Aktualizuj zamówienie'])}
								{if {$key['ilosc'] > 0}}
								{anchor("zamowienia/usun/{$key['id_ordering']}" ,'<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger btn-delete disabled','title'=>'Usuń'])}
								{else}
								{anchor("zamowienia/usun/{$key['id_ordering']}" , '<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger btn-delete','title'=>'Usuń'])}
								{/if}
							</span>
							</td>
						</tr>
						{/foreach}
			</tbody>
	</table>
</div>
{include file="footer.tpl"}
{/block}
