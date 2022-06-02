<?php
/* Smarty version 3.1.33, created on 2019-02-17 19:04:40
  from 'C:\xampp\htdocs\eWasher\application\views\templates\ordering_product\ordering_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c69a2380ff8e6_16307181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bbf01a734c076140a356f7fe5b8ba1e9f8ad95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\ordering_product\\ordering_product.tpl',
      1 => 1550426677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c69a2380ff8e6_16307181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14835649075c69a2380e98d9_81580093', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2122771525c69a2380ea387_43339303', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_14835649075c69a2380e98d9_81580093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14835649075c69a2380e98d9_81580093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Szczegóły zamówienia<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_2122771525c69a2380ea387_43339303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2122771525c69a2380ea387_43339303',
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
	<br></br>

<div id="details">
	<br></br>
	<div class="row">
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4">Rachunek Nr: <b><?php echo $_smarty_tpl->tpl_vars['customer']->value['number_ordering'];?>
</b></div>
	</div>
	<div class="row">
		<div>Firma (Nazwisko i Imię): <b><?php echo $_smarty_tpl->tpl_vars['customer']->value['surname_customer'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['name_customer'];?>
</b></div>
	</div>
	<div class="row">
		<div>Adres: <b><?php echo $_smarty_tpl->tpl_vars['customer']->value['street_customer'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['post_code_customer'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['city_customer'];?>
</b></div>
		<br></br>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">Suma Całkowita: <b><?php echo $_smarty_tpl->tpl_vars['totalOrderingPrice']->value;?>
 zł</b>
		</div>
	</div>
</div>

	<div class="col-lg-12">
		 <?php echo anchor("zamowienia/szczegoly/dodaj/".((string)$_smarty_tpl->tpl_vars['ordering_id']->value),'Dodaj Pozycję',array('class'=>'btn btn-dark addButton'));?>

		 <br></br>
	</div>
	<table class="table table-striped table hover" id="table">
		<thead>
			<tr>
					<th>Nazwa Usługi</th>
					<th>Ilość</th>
          <th>Cena Jednostkowa</th>
					<th>Wartość</th>
					<th>Operacje</th>
			</tr>
		</thead>
		<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['name_product'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['size_ordering_product'];?>
 m<sup>2</sup></td>
              <td><?php echo $_smarty_tpl->tpl_vars['key']->value['price_for_meter'];?>
 zł/m<sup>2</sup></td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value['price_ordering_product'];?>
 zł</td>
							<td>
								<span class="btn-group">
								<?php echo anchor("zamowienia/szczegoly/aktualizuj/".((string)$_smarty_tpl->tpl_vars['ordering_id']->value),'<i class="fas fa-edit"></i>',array('class'=>'btn btn-success','title'=>'Aktualizuj rekord'));?>

								<?php echo anchor("zamowienia/szczegoly/usun/".((string)$_smarty_tpl->tpl_vars['ordering_id']->value),'<i class="fas fa-trash-alt"></i>',array('class'=>'btn btn-danger btn-delete','title'=>'Usuń'));?>

								</span>
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
