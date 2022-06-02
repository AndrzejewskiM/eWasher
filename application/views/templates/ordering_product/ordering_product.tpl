{extends file="header.tpl"}
{block name="title"}Szczegóły zamówienia{/block}
{block name="body"}
<div class ="container">
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
	<br></br>

<div id="details">
	<br></br>
	<div class="row">
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4">Rachunek Nr: <b>{$customer['number_ordering']}</b></div>
	</div>
	<div class="row">
		<div>Firma (Nazwisko i Imię): <b>{$customer['surname_customer']} {$customer['name_customer']}</b></div>
	</div>
	<div class="row">
		<div>Adres: <b>{$customer['street_customer']} {$customer['post_code_customer']} {$customer['city_customer']}</b></div>
		<br></br>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">Suma Całkowita: <b>{$totalOrderingPrice} zł</b>
		</div>
	</div>
</div>

	<div class="col-lg-12">
		 {anchor("zamowienia/szczegoly/dodaj/{$ordering_id}" , 'Dodaj Pozycję',['class'=>'btn btn-dark addButton'])}
		 <br></br>
	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa Usługi</th>
					<th>Ilość</th>
          <th>Cena Jednostkowa</th>
					<th>Wartość</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						{foreach $details as $key}
						<tr>
							<td>{$key['name_product']}</td>
							<td>{$key['size_ordering_product']} m<sup>2</sup></td>
              <td>{$key['price_for_meter']} zł/m<sup>2</sup></td>
							<td>{$key['price_ordering_product']} zł</td>
							<td>
								<span class="btn-group">
								{anchor("zamowienia/szczegoly/aktualizuj/{$ordering_id}" , '<i class="fas fa-edit"></i>',['class'=>'btn btn-success','title'=>'Aktualizuj rekord'])}
								{anchor("zamowienia/szczegoly/usun/{$ordering_id}", '<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger btn-delete','title'=>'Usuń'])}
								</span>
						</tr>
						{/foreach}
			</tbody>
	</table>


</div>
{include file="footer.tpl"}
{/block}
