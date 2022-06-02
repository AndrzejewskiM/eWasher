<?php
/* Smarty version 3.1.33, created on 2018-12-29 19:22:21
  from 'C:\xampp\htdocs\eWasher\application\views\templates\priceList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c27bb5d96ecf5_39135984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f5ba3a24e6d089581cd90fe2b0b47c0d0b64a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\priceList.tpl',
      1 => 1546107740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c27bb5d96ecf5_39135984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class ="container">
	<?php if ($_SESSION['success']) {?>
	<div class="alert alert-dismissible alert-success">
		<?php echo $_SESSION['success'];?>

	</div>
	<?php }?>
	<?php if ($_SESSION['false']) {?>
	<div class="alert alert-dismissible alert-warning">
		<?php echo $_SESSION['false'];?>

	</div>
	<?php }?>
	<div class="col-lg-12">
		 <?php echo anchor("pricelist/create",'Dodaj Produkt Do Cennika',array('class'=>'btn btn-primary'));?>

	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa</th>
					<th>Typ </th>
					<th>Opis</th>
					<th>Cena Za Metr</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['priceLists']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['type'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['description'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['price_for_meter'];?>
 zł</td>
							<td><?php echo anchor("priceList/edit/".((string)$_smarty_tpl->tpl_vars['key']->value['id_product']),'Aktualizuj',array('class'=>'btn btn-success'));?>

									<?php echo anchor("priceList/delete/".((string)$_smarty_tpl->tpl_vars['key']->value['id_product']),'Usuń',array('class'=>'btn btn-danger'));?>

							</td>
						</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
	</table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
