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
		<link rel="stylesheet" href={base_url('resources/css/header.css')} />
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
          <nav>
            <div class="menu-icon">
              <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
              <li><a href="{site_url('carpetCalculator')}">eWasher</a></li>
            </div>
            <div class="menu">
              <ul>
                <li><a href="{site_url('order')}">Zlecenia</a></li>
                <li><a href="{site_url('customer')}">Klienci</a></li>
								<li><a href="{site_url('priceList')}">Cennik</a></li>
								<li><a href="{site_url('OrderStatus')}">Statusy Zlecenia</a></li>
								<li><a href="{site_url('Pracownicy')}">Administrator</a></li>
              </ul>
            </div>
          </nav>
        </header>
      </div>
