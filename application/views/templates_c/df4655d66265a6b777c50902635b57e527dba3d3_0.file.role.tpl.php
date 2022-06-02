<?php
/* Smarty version 3.1.33, created on 2019-02-15 07:55:43
  from 'C:\xampp\htdocs\eWasher\application\views\templates\role\role.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c66626fd1d883_87358622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4655d66265a6b777c50902635b57e527dba3d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\role\\role.tpl',
      1 => 1550213740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c66626fd1d883_87358622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6241766975c66626fcf8927_20400997', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7307590445c66626fcf9410_22544802', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_6241766975c66626fcf8927_20400997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6241766975c66626fcf8927_20400997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Role<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_7307590445c66626fcf9410_22544802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7307590445c66626fcf9410_22544802',
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
		<h1> Lista Ról </h1>
	</div>
	<div class="col-lg-12">
		 <?php echo anchor("/rbac/role/create",'Dodaj Role',array('class'=>'btn btn-dark addButton'));?>

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_roles'];?>
</td>
							<td>
								<span class="btn-group">
								<?php echo anchor("/rbac/role/edit/".((string)$_smarty_tpl->tpl_vars['key']->value['id_roles']),'<i class="fas fa-edit"></i>',array('class'=>'btn btn-success','title'=>'Aktualizuj'));?>

								<?php echo anchor("/rbac/role/delete/".((string)$_smarty_tpl->tpl_vars['key']->value['id_roles']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger btn-delete','title'=>'Usuń'));?>

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
