{extends file="header.tpl"}
{block name="title"}Uprawnienia{/block}
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
		<h1> Lista Uprawnień </h1>
	</div>
	<div class="col-lg-12">
		 {anchor("uprawnienia/dodaj" , 'Dodaj Uprawnienie',['class'=>'btn btn-dark addButton'])}
	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa</th>
					<th>Funkcje kontrolera</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						{foreach $permisions as $key}
						<tr>
							<td>{$key['name_permisions']}</td>
							<td>{$key['action_permissions']}</td>
							<td>
								<span class="btn-group">
								{anchor("uprawnienia/aktualizuj/{$key['id_permisions']}" ,'<i class="fas fa-edit"></i>',['class'=>'btn btn-success','title'=>'Aktualizacja'])}
								{anchor("uprawnienia/usun/{$key['id_permisions']}" ,'<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger','title'=>'Usuń'])}
							</td>
						</tr>
						{/foreach}
			</tbody>
	</table>
</div>
{include file="footer.tpl"}
{/block}
