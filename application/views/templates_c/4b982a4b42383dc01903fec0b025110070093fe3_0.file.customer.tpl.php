<?php
/* Smarty version 3.1.33, created on 2019-02-28 07:03:45
  from 'C:\xampp\htdocs\eWasher\application\views\templates\customer\customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7779c1821758_31045790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b982a4b42383dc01903fec0b025110070093fe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\customer\\customer.tpl',
      1 => 1551333812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c7779c1821758_31045790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4047771595c7779c1649574_10860399', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16787747125c7779c164a4e1_04390893', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_4047771595c7779c1649574_10860399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4047771595c7779c1649574_10860399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Klienci<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_16787747125c7779c164a4e1_04390893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16787747125c7779c164a4e1_04390893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container-fluid bg">
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
	<div class="page-header">
		<h1> Lista Klientów </h1>
	</div>
	<div class="col-lg-12">
		 <?php echo anchor("klienci/dodaj",'Dodaj Klienta',array('class'=>'btn btn-dark addButton'));?>

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
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_customer'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['surname_customer'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['phone_customer'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['street_customer'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['city_customer'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['post_code_customer'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['description_customer'];?>
</td>
							<td>
								<span class="btn-group">
								<?php echo anchor("klienci/aktualizuj/".((string)$_smarty_tpl->tpl_vars['key']->value['id_customer']),'<i class="fas fa-edit"></i>',array('class'=>'btn btn-success','title'=>'Aktualizuj'));?>

								<?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value['ilosc'] > 0;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
									<?php echo anchor("klienci/usuń/".((string)$_smarty_tpl->tpl_vars['key']->value['id_customer']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger disabled','title'=>'Usuń'));?>

								<?php } else { ?>
								<?php echo anchor("klienci/usun/".((string)$_smarty_tpl->tpl_vars['key']->value['id_customer']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger btn-delete','title'=>'Usuń'));?>

								<?php }?>
								</span>
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
/* {/block "body"} */
}
