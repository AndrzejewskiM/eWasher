<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{block name="title"}eWasher{/block}</title>
		<link rel="stylesheet" href={base_url('/resources/css/external/bootstrap.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/external/datatables.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/external/jquery-ui.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/external/jquery-ui.structure.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/external/jquery-ui.theme.min.css')} />
		<link rel="stylesheet" href={base_url('/resources/css/external/bootstrap-datetimepicker.min.css')} />
		<link rel="stylesheet" href={base_url('resources/fullcalendar/fullcalendar.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/calendar.css')} />
  	<link rel="stylesheet" href={base_url('resources/css/footer.css')} />
		<!-- <link rel="stylesheet" href={base_url('resources/css/mainPage.css')} /> -->
		<link rel="stylesheet" href={base_url('resources/css/select2.min.css')} />
		<link rel="stylesheet" href={base_url('resources/fontawesome/css/fontawesome.css')} />
		<link rel="stylesheet" href={base_url('resources/fontawesome/css/solid.css')} />

			{if isset($customCSS)}
			{foreach $customCSS as $css}
		    <link rel="stylesheet" href="{base_url()}resources/css/{$css}.css"/>
			{/foreach}
		{/if}
</head>
<body>
{block name=navbar}
<div class="wrapper">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="{site_url('Start')}">eWasher</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item">
	<a class="nav-link" href="{site_url('klienci')}">Klienci</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{site_url('zamowienia')}">Zamówienia</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{site_url('kalendarz')}">Harmonogram</a>
</li>
{if $smarty.session.is_CEO != '0'}
<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Administrator
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		<a class="dropdown-item" href="{site_url('cennik')}">Cennik</a>
		<a class="dropdown-item" href="{site_url('statusy')}">Statusy Zlecenia</a>
		<a class="dropdown-item" href="{site_url('pracownicy')}">Pracownicy</a>
		<a class="dropdown-item" href="{site_url('role')}">Role</a>
		<a class="dropdown-item" href="{site_url('uprawnienia')}">Uprawnienia</a>
	</div>
</li>
{/if}
</ul>
</div>

<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle text-light" data-toggle="dropdown">
<span class="fa fa-bell"></span>
<span class="badge badge-warning">
	{if isset($count)}
		{$count}
	{/if}
</span>
</a>
<!-- <span class="label label-pill label-danger count" style="border-radius:10px;">
	{if isset($count)}
		{$count}
	{/if}
</span>  -->
<ul class="dropdown-menu" style="padding: 5px;">
{if isset($notifications)}
	{foreach $notifications as $notification}
		<li>
			<i class="fas fa-id-card"></i>
			{if isset($client_details, $client_details[$notification['client_id']])}
				{$client_details[$notification['client_id']]['name_customer']} {$client_details[$notification['client_id']]['surname_customer']},
				{$client_details[$notification['client_id']]['street_customer']} {$client_details[$notification['client_id']]['city_customer']}
			{else}
				{$notification['client_id']}
			{/if} </li>
	{/foreach}
{/if}
</ul>
</li>
</ul>
<ul class="nav justify-content-end">
<li>
<a class="nav-link" href="{site_url('Login/logout')}">Wyloguj</a>
</li>
</ul>

</nav>
	</header>
</div>
{/block}
{block name=body}
{/block}
