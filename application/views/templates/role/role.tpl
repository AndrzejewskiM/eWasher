{extends file="header.tpl"}
{block name="title"}Role{/block}
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
		<h1> Lista Ról </h1>
	</div>
	<div class="col-lg-12">
		 {anchor("/rbac/role/create" , 'Dodaj Role',['class'=>'btn btn-dark addButton'])}
	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						{foreach $roles as $key}
						<tr>
							<td>{$key['name_roles']}</td>
							<td>
								<span class="btn-group">
								{anchor("/rbac/role/edit/{$key['id_roles']}" , '<i class="fas fa-edit"></i>',['class'=>'btn btn-success','title'=>'Aktualizuj'])}
								{anchor("/rbac/role/delete/{$key['id_roles']}" , '<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger btn-delete','title'=>'Usuń'])}
								</span>
							</td>
						</tr>
						{/foreach}
			</tbody>
	</table>
</div>
{include file="footer.tpl"}
{/block}
