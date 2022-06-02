<?php
/* Smarty version 3.1.33, created on 2019-02-18 00:24:06
  from 'C:\xampp\htdocs\eWasher\application\views\templates\priceList\priceList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c69ed1631dce3_05791424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3da688201e1a7550e5604fc8d20732f6e4b25b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\priceList\\priceList.tpl',
      1 => 1550445841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c69ed1631dce3_05791424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7482110075c69ed16307ca4_05766435', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13214806125c69ed16308611_56207776', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_7482110075c69ed16307ca4_05766435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7482110075c69ed16307ca4_05766435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Oferta firmy<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_13214806125c69ed16308611_56207776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13214806125c69ed16308611_56207776',
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
		<h1> Cennik </h1>
	</div>
	<div class="col-lg-12">
		 <?php echo anchor("cennik/dodaj",'Dodaj Produkt',array('class'=>'btn btn-dark addButton'));?>

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
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_product'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['type_product'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['description_product'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['price_for_meter'];?>
 zł</td>
							<td>
								<span class="btn-group">
								<?php echo anchor("cennik/aktualizuj/".((string)$_smarty_tpl->tpl_vars['key']->value['id_product']),'<i class="fas fa-edit"></i>',array('class'=>'btn btn-success','title'=>'Aktualizuj'));?>

								<?php echo anchor("cennik/usun/".((string)$_smarty_tpl->tpl_vars['key']->value['id_product']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger btn-delete','title'=>'Usuń'));?>

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
