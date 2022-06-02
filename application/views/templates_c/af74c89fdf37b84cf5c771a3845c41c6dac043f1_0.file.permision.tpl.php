<?php
/* Smarty version 3.1.33, created on 2019-02-18 16:46:31
  from 'C:\xampp\htdocs\eWasher\application\views\templates\permision\permision.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6ad357a697e4_54754904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af74c89fdf37b84cf5c771a3845c41c6dac043f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\permision\\permision.tpl',
      1 => 1550504788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c6ad357a697e4_54754904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14668665185c6ad357a54492_81103943', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13173737585c6ad357a55249_79153437', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_14668665185c6ad357a54492_81103943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14668665185c6ad357a54492_81103943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Uprawnienia<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_13173737585c6ad357a55249_79153437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13173737585c6ad357a55249_79153437',
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
		<h1> Lista Uprawnień </h1>
	</div>
	<div class="col-lg-12">
		 <?php echo anchor("uprawnienia/dodaj",'Dodaj Uprawnienie',array('class'=>'btn btn-dark addButton'));?>

	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa</th>
					<th>Funkcje kontrolera</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permisions']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_permisions'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['action_permissions'];?>
</td>
							<td>
								<span class="btn-group">
								<?php echo anchor("uprawnienia/aktualizuj/".((string)$_smarty_tpl->tpl_vars['key']->value['id_permisions']),'<i class="fas fa-edit"></i>',array('class'=>'btn btn-success','title'=>'Aktualizacja'));?>

								<?php echo anchor("uprawnienia/usun/".((string)$_smarty_tpl->tpl_vars['key']->value['id_permisions']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger','title'=>'Usuń'));?>

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
