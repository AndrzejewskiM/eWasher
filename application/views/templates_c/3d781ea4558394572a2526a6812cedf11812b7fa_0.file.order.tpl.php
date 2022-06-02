<?php
/* Smarty version 3.1.33, created on 2019-02-17 19:01:55
  from 'C:\xampp\htdocs\eWasher\application\views\templates\order\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c69a193a8a289_58845785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d781ea4558394572a2526a6812cedf11812b7fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\order\\order.tpl',
      1 => 1550426474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c69a193a8a289_58845785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18005908075c69a193a500d7_50151211', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15528757895c69a193a50d22_15700615', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_18005908075c69a193a500d7_50151211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18005908075c69a193a500d7_50151211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Zamówienia<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_15528757895c69a193a50d22_15700615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15528757895c69a193a50d22_15700615',
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
		<h1> Lista Zamówień </h1>
	</div>
	<div class="col-lg-12">
		 <?php echo anchor("zamowienia/dodaj",'Dodaj zamówienie',array('class'=>'btn btn-dark addButton'));?>

	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Numer Zlecenia</th>
					<th>Dane Klienta</th>
          <th>Data Utworzenia Zlecenia</th>
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
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['number_ordering'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_customer'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['surname_customer'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['key']->value['creation_date'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['date_of_receipt'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['delivery_date'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_order_status'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['key']->value['description_ordering'];?>
</td>
							<td>
								<span class="btn-group">
								<?php echo anchor("zamowienia/szczegoly/".((string)$_smarty_tpl->tpl_vars['key']->value['id_ordering']),'<i class="fas fa-search-plus"></i>',array('class'=>'btn btn-info','title'=>'Szczegóły zamówienia'));?>

								<?php echo anchor("zamowienia/aktualizuj/".((string)$_smarty_tpl->tpl_vars['key']->value['id_ordering']),'<i class="fas fa-edit"></i>',array('class'=>'btn btn-success','title'=>'Aktualizuj zamówienie'));?>

								<?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value['ilosc'] > 0;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
								<?php echo anchor("zamowienia/usun/".((string)$_smarty_tpl->tpl_vars['key']->value['id_ordering']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger btn-delete disabled','title'=>'Usuń'));?>

								<?php } else { ?>
								<?php echo anchor("zamowienia/usun/".((string)$_smarty_tpl->tpl_vars['key']->value['id_ordering']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger btn-delete','title'=>'Usuń'));?>

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
