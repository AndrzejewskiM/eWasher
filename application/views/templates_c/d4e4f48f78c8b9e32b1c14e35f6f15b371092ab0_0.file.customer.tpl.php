<?php
/* Smarty version 3.1.33, created on 2019-01-03 21:49:17
  from 'C:\xampp\htdocs\eWasher\application\views\templates\customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2e754d20ced3_55443405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e4f48f78c8b9e32b1c14e35f6f15b371092ab0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\customer.tpl',
      1 => 1546548555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c2e754d20ced3_55443405 (Smarty_Internal_Template $_smarty_tpl) {
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
		 <?php echo anchor("customer/create",'Dodaj Klienta',array('class'=>'btn btn-primary'));?>

	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Imie Nazwisko</th>
					<th>Telefon</th>
					<th>Ulica</th>
					<th>Miasto</th>
					<th>Kod Pocztowy</th>
					<th>Opis</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['surname'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['phone'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['street'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['city'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['post_code'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['description'];?>
</td>
							<td><?php echo anchor("customer/edit/".((string)$_smarty_tpl->tpl_vars['key']->value['id_customer']),'Aktualizuj',array('class'=>'btn btn-success'));?>

									<?php echo anchor("customer/delete/".((string)$_smarty_tpl->tpl_vars['key']->value['id_customer']),'Usuń',array('class'=>'btn btn-danger'));?>

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
