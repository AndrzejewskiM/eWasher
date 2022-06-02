{extends file="header.tpl"}
{block name="title"}Pracownicy{/block}
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
		<h1> Lista Pracowników </h1>
	</div>
	<div class="col-lg-12">
		 {anchor("pracownicy/dodaj" , 'Dodaj Pracownika',['class'=>'btn btn-dark addButton'])}
	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Imie Nazwisko</th>
					<th>Login</th>
					<th>Numer Telefonu</th>
					<th>Stanowisko</th>
					<th>Konto</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						{foreach $workers as $key}
						<tr>
							<td>{$key['name_worker']} {$key['surname_worker']}</td>
							<td>{$key['login']}</td>
							<td>{$key['phone_worker']}</td>
							<td>{$key['name_roles']}</td>
								<td>
										{if $key['is_Active']==0}
										Nie aktywne
										{else}
										Aktywne
										{/if}
								</td>
							<td>
								<span class="btn-group">
								{anchor("pracownicy/aktualizuj/{$key['id_worker']}" , '<i class="fas fa-edit"></i>',['class'=>'btn btn-success','title'=>'Aktualizuj'])}
									{anchor("pracownicy/haslo/{$key['id_worker']}" , '<i class="fas fa-key"></i>',['class'=>'btn btn-warning'])}
									{if $key['is_Active']==0}
									{anchor("pracownicy/aktywuj/{$key['id_worker']}" , '<i class="fas fa-unlock-alt"></i>',['class'=>'btn btn-dark'])}
									{else}
									{anchor("pracownicy/dezaktywuj/{$key['id_worker']}" , '<i class="fa fa-lock"></i>',['class'=>'btn btn-dark'])}
									{/if}
									{anchor("pracownicy/usun/{$key['id_worker']}" , '<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger btn-delete'])}
								</span>
							</td>
						</tr>
						{/foreach}
			</tbody>
	</table>
{include file="footer.tpl"}
{/block}
