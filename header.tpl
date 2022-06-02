<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Klienci</title>
		<link rel="stylesheet" href={base_url('/resources/css/external/bootstrap.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/external/datatables.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/external/jquery-ui.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/external/jquery-ui.structure.min.css')} />
		<link rel="stylesheet" href={base_url('resources/css/external/jquery-ui.theme.min.css')} />
		<!-- <link rel="stylesheet" href={base_url('resources/css/header.css')} /> -->
  	<link rel="stylesheet" href={base_url('resources/css/footer.css')} />
		<link rel="stylesheet" href={base_url('resources/css/mainPage.css')} />
		{if isset($customCSS)}
			{foreach $customCSS as $css}
		    <link rel="stylesheet" href="{base_url()}resources/css/{$css}.css"/>
			{/foreach}
		{/if}
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>

      <div class="wrapper">
        <header>
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">eWasher</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{site_url('customer')}">Klienci</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{site_url('order')}">Zlecenia</a>
      </li>
			{if $smarty.session.is_CEO != '0'}
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrator
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{site_url('priceList')}">Cennik</a>
          <a class="dropdown-item" href="{site_url('OrderStatus')}">Statusy Zlecenia</a>
          <a class="dropdown-item" href="{site_url('Worker')}">Pracownicy</a>
        </div>
      </li>
			{/if}
    </ul>
		<a class="nav-link" href="{site_url('Login/logout')}">Wyloguj</a>
  </div>
</nav>
        </header>
      </div>
