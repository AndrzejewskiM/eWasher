{extends file="header.tpl"}
{block name="title"}Statusy zamówienia{/block}
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
	<div class="page-header">
		<h1> Statusy zamówień </h1>
	</div>
	<div class="col-lg-12">
		 {anchor("statusy/dodaj" , 'Dodaj Status Zlecenia',['class'=>'btn btn-dark addButton'])}
	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						{foreach $orderstatus as $key}
						<tr>
							<td>{$key['name_order_status']}</td>
							<td>
								<span class="btn-group">
								{anchor("statusy/aktualizuj/{$key['id_order_status']}" ,'<i class="fas fa-edit"></i>',['class'=>'btn btn-success','title'=>'Aktualizacja'])}
								{anchor("statusy/usun/{$key['id_order_status']}" ,'<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger btn-delete','title'=>'Usuń'])}
								</span>
							</td>
						</tr>
						{/foreach}
			</tbody>
	</table>
</div>
{include file="footer.tpl"}
{/block}
