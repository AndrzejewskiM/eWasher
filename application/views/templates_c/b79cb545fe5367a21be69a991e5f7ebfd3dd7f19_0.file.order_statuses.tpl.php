<?php
/* Smarty version 3.1.33, created on 2019-02-28 07:23:37
  from 'C:\xampp\htdocs\eWasher\application\views\templates\orderStatus\order_statuses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c777e690b3281_08426604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b79cb545fe5367a21be69a991e5f7ebfd3dd7f19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\orderStatus\\order_statuses.tpl',
      1 => 1551335015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c777e690b3281_08426604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19921582325c777e6909f8b7_01378980', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18381647465c777e690a0486_03455346', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_19921582325c777e6909f8b7_01378980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19921582325c777e6909f8b7_01378980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Statusy zamówienia<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_18381647465c777e690a0486_03455346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18381647465c777e690a0486_03455346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
	<div class="page-header">
		<h1> Statusy zamówień </h1>
	</div>
	<div class="col-lg-12">
		 <?php echo anchor("statusy/dodaj",'Dodaj Status Zlecenia',array('class'=>'btn btn-dark addButton'));?>

	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderstatus']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_order_status'];?>
</td>
							<td>
								<span class="btn-group">
								<?php echo anchor("statusy/aktualizuj/".((string)$_smarty_tpl->tpl_vars['key']->value['id_order_status']),'<i class="fas fa-edit"></i>',array('class'=>'btn btn-success','title'=>'Aktualizacja'));?>

								<?php echo anchor("statusy/usun/".((string)$_smarty_tpl->tpl_vars['key']->value['id_order_status']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger btn-delete','title'=>'Usuń'));?>

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
