{extends file="header.tpl"}
{block name="title"}Klienci{/block}
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
		<h1> Lista Klientów </h1>
	</div>
	<div class="col-lg-12">
		 {anchor("klienci/dodaj" , 'Dodaj Klienta',['class'=>'btn btn-dark addButton'])}
	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Imie Nazwisko</th>
					<th>Telefon</th>
					<th>Ulica</th>
					<th>Miasto</th>
					<th>Kod Pocztowy</th>
					<th>Opis</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						{foreach $records as $key}
						<tr>
							<td>{$key['name_customer']} {$key['surname_customer']}</td>
							<td>{$key['phone_customer']}</td>
							<td>{$key['street_customer']}</td>
							<td>{$key['city_customer']}</td>
							<td>{$key['post_code_customer']}</td>
							<td>{$key['description_customer']}</td>
							<td>
								<span class="btn-group">
								{anchor("klienci/aktualizuj/{$key['id_customer']}" , '<i class="fas fa-edit"></i>',['class'=>'btn btn-success','title'=>'Aktualizuj'])}
								{if {$key['ilosc'] > 0}}
									{anchor("klienci/usuń/{$key['id_customer']}" , '<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger disabled','title'=>'Usuń'])}
								{else}
								{anchor("klienci/usun/{$key['id_customer']}" , '<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger btn-delete','title'=>'Usuń'])}
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
