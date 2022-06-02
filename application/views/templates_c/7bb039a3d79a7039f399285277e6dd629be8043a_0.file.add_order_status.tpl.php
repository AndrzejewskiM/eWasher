<?php
/* Smarty version 3.1.33, created on 2019-02-28 07:19:43
  from 'C:\xampp\htdocs\eWasher\application\views\templates\orderStatus\add_order_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c777d7f2de667_67982603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb039a3d79a7039f399285277e6dd629be8043a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\orderStatus\\add_order_status.tpl',
      1 => 1551334780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c777d7f2de667_67982603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17985564155c777d7f2d0c09_73386149', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5435694875c777d7f2d1816_03695858', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_17985564155c777d7f2d0c09_73386149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17985564155c777d7f2d0c09_73386149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie statusu zamówienia<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_5435694875c777d7f2d1816_03695858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5435694875c777d7f2d1816_03695858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid bg">
  <?php if ($_SESSION['flashdata']['response']) {?>
  <div class="alert alert-dismissible alert-success">
    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

  </div>
  <?php }?>
  <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12"></div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class ="form-container">
    <?php echo form_open('OrderStatus/save','accept-charset="utf-8"');?>

    <h3 align="center">Dodanie statusu zamówienia</h3>
    <fieldset>
      <div class="form-group">
        <label for="name_order_status" class="control-label">Nazwa statusu zlecenia</label>
          <?php echo form_input(array('name'=>'name_order_status','class'=>'form-control','placeholder'=>'Nazwa statusu zlecenia','value'=>set_value('name_order_status')));?>

          <?php echo form_error('name_order_status');?>

      </div>

      <div class="form-group">
        <?php echo form_submit(array('value'=>'Submit','class'=>'btn btn-success btn-block'));?>

        <?php echo form_reset(array('value'=>'Reset','class'=>'btn btn-warning btn-block'));?>


    </div>
  </div>
</fieldset>
    <?php echo form_close();?>

    </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
    </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "body"} */
}
