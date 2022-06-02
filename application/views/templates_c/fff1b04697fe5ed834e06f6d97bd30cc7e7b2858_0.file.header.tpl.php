<?php
/* Smarty version 3.1.33, created on 2019-02-17 19:01:55
  from 'C:\xampp\htdocs\eWasher\application\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c69a193134f05_49851456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fff1b04697fe5ed834e06f6d97bd30cc7e7b2858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\header.tpl',
      1 => 1550426513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c69a193134f05_49851456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3566345455c69a19311b7b0_55101868', "title");
?>
</title>
		<link rel="stylesheet" href=<?php echo base_url('/resources/css/external/bootstrap.min.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('resources/css/external/datatables.min.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('resources/css/external/jquery-ui.min.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('resources/css/external/jquery-ui.structure.min.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('resources/css/external/jquery-ui.theme.min.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('/resources/css/external/bootstrap-datetimepicker.min.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('resources/fullcalendar/fullcalendar.min.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('resources/css/calendar.css');?>
 />
  	<link rel="stylesheet" href=<?php echo base_url('resources/css/footer.css');?>
 />
		<!-- <link rel="stylesheet" href=<?php echo base_url('resources/css/mainPage.css');?>
 /> -->
		<link rel="stylesheet" href=<?php echo base_url('resources/css/select2.min.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('resources/fontawesome/css/fontawesome.css');?>
 />
		<link rel="stylesheet" href=<?php echo base_url('resources/fontawesome/css/solid.css');?>
 />

			<?php if (isset($_smarty_tpl->tpl_vars['customCSS']->value)) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customCSS']->value, 'css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
?>
		    <link rel="stylesheet" href="<?php echo base_url();?>
resources/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
.css"/>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1927405725c69a19312b385_20530903', 'navbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7229845245c69a193134938_80127135', 'body');
?>

<?php }
/* {block "title"} */
class Block_3566345455c69a19311b7b0_55101868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3566345455c69a19311b7b0_55101868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
eWasher<?php
}
}
/* {/block "title"} */
/* {block 'navbar'} */
class Block_1927405725c69a19312b385_20530903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_1927405725c69a19312b385_20530903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="wrapper">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="<?php echo site_url('Start');?>
">eWasher</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item">
	<a class="nav-link" href="<?php echo site_url('klienci');?>
">Klienci</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="<?php echo site_url('zamowienia');?>
">Zamówienia</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="<?php echo site_url('kalendarz');?>
">Harmonogram</a>
</li>
<?php if ($_SESSION['is_CEO'] != '0') {?>
<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Administrator
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		<a class="dropdown-item" href="<?php echo site_url('cennik');?>
">Cennik</a>
		<a class="dropdown-item" href="<?php echo site_url('statusy');?>
">Statusy Zlecenia</a>
		<a class="dropdown-item" href="<?php echo site_url('pracownicy');?>
">Pracownicy</a>
		<a class="dropdown-item" href="<?php echo site_url('role');?>
">Role</a>
		<a class="dropdown-item" href="<?php echo site_url('uprawnienia');?>
">Uprawnienia</a>
	</div>
</li>
<?php }?>
</ul>
</div>

<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle text-light" data-toggle="dropdown">
<span class="fa fa-bell"></span>
<span class="badge badge-warning">
	<?php if (isset($_smarty_tpl->tpl_vars['count']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['count']->value;?>

	<?php }?>
</span>
</a>
<!-- <span class="label label-pill label-danger count" style="border-radius:10px;">
	<?php if (isset($_smarty_tpl->tpl_vars['count']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['count']->value;?>

	<?php }?>
</span>  -->
<ul class="dropdown-menu" style="padding: 5px;">
<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value, 'notification');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
?>
		<li>
			<i class="fas fa-id-card"></i>
			<?php if (isset($_smarty_tpl->tpl_vars['client_details']->value,$_smarty_tpl->tpl_vars['client_details']->value[$_smarty_tpl->tpl_vars['notification']->value['client_id']])) {?>
				<?php echo $_smarty_tpl->tpl_vars['client_details']->value[$_smarty_tpl->tpl_vars['notification']->value['client_id']]['name_customer'];?>
 <?php echo $_smarty_tpl->tpl_vars['client_details']->value[$_smarty_tpl->tpl_vars['notification']->value['client_id']]['surname_customer'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['client_details']->value[$_smarty_tpl->tpl_vars['notification']->value['client_id']]['street_customer'];?>
 <?php echo $_smarty_tpl->tpl_vars['client_details']->value[$_smarty_tpl->tpl_vars['notification']->value['client_id']]['city_customer'];?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['notification']->value['client_id'];?>

			<?php }?> </li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</ul>
</li>
</ul>
<ul class="nav justify-content-end">
<li>
<a class="nav-link" href="<?php echo site_url('Login/logout');?>
">Wyloguj</a>
</li>
</ul>

</nav>
	</header>
</div>
<?php
}
}
/* {/block 'navbar'} */
/* {block 'body'} */
class Block_7229845245c69a193134938_80127135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7229845245c69a193134938_80127135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'body'} */
}
