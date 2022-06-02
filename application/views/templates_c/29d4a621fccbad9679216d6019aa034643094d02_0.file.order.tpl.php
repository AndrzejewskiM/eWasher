<?php
/* Smarty version 3.1.33, created on 2019-01-03 21:57:13
  from 'C:\xampp\htdocs\eWasher\application\views\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e77291df897_89743319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29d4a621fccbad9679216d6019aa034643094d02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\order.tpl',
      1 => 1546548897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c2e77291df897_89743319 (Smarty_Internal_Template $_smarty_tpl) {
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
		 <?php echo anchor("order/create",'Dodaj Zlecenie',array('class'=>'btn btn-primary'));?>

	</div>
  <?php echo var_dump($_smarty_tpl->tpl_vars['orders']->value);?>

	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Dane Klienta</th>
					<th>Data Odbioru </th>
					<th>Data Dostarczenia Do Klienta</th>
					<th>Status Zlecenia</th>
					<th>Opis</th>
          <th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['surname'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['date_of_receipt'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['delivery_date'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_order_status'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['key']->value['description'];?>
</td>
							<td><?php echo anchor("priceList/edit/".((string)$_smarty_tpl->tpl_vars['key']->value['id_ordering']),'Aktualizuj',array('class'=>'btn btn-success'));?>

									<?php echo anchor("priceList/delete/".((string)$_smarty_tpl->tpl_vars['key']->value['id_ordering']),'Usuń',array('class'=>'btn btn-danger'));?>

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
