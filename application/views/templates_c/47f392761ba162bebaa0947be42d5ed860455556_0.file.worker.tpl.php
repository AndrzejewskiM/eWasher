<?php
/* Smarty version 3.1.33, created on 2019-02-28 07:35:47
  from 'C:\xampp\htdocs\eWasher\application\views\templates\worker\worker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c778143a611f6_13555297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f392761ba162bebaa0947be42d5ed860455556' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\worker\\worker.tpl',
      1 => 1551335745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c778143a611f6_13555297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145298995c778143a49585_83504852', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6154965755c778143a49e26_58278846', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_145298995c778143a49585_83504852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_145298995c778143a49585_83504852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pracownicy<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_6154965755c778143a49e26_58278846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6154965755c778143a49e26_58278846',
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
		<h1> Lista Pracowników </h1>
	</div>
	<div class="col-lg-12">
		 <?php echo anchor("pracownicy/dodaj",'Dodaj Pracownika',array('class'=>'btn btn-dark addButton'));?>

	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Imie Nazwisko</th>
					<th>Login</th>
					<th>Numer Telefonu</th>
					<th>Stanowisko</th>
					<th>Konto</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['workers']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_worker'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['surname_worker'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['login'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['phone_worker'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_roles'];?>
</td>
								<td>
										<?php if ($_smarty_tpl->tpl_vars['key']->value['is_Active'] == 0) {?>
										Nie aktywne
										<?php } else { ?>
										Aktywne
										<?php }?>
								</td>
							<td>
								<span class="btn-group">
								<?php echo anchor("pracownicy/aktualizuj/".((string)$_smarty_tpl->tpl_vars['key']->value['id_worker']),'<i class="fas fa-edit"></i>',array('class'=>'btn btn-success','title'=>'Aktualizuj'));?>

									<?php echo anchor("pracownicy/haslo/".((string)$_smarty_tpl->tpl_vars['key']->value['id_worker']),'<i class="fas fa-key"></i>',array('class'=>'btn btn-warning'));?>

									<?php if ($_smarty_tpl->tpl_vars['key']->value['is_Active'] == 0) {?>
									<?php echo anchor("pracownicy/aktywuj/".((string)$_smarty_tpl->tpl_vars['key']->value['id_worker']),'<i class="fas fa-unlock-alt"></i>',array('class'=>'btn btn-dark'));?>

									<?php } else { ?>
									<?php echo anchor("pracownicy/dezaktywuj/".((string)$_smarty_tpl->tpl_vars['key']->value['id_worker']),'<i class="fa fa-lock"></i>',array('class'=>'btn btn-dark'));?>

									<?php }?>
									<?php echo anchor("pracownicy/usun/".((string)$_smarty_tpl->tpl_vars['key']->value['id_worker']),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger btn-delete'));?>

								</span>
							</td>
						</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
	</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "body"} */
}
