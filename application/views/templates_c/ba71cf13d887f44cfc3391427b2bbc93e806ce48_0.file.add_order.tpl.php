<?php
/* Smarty version 3.1.33, created on 2019-02-14 11:44:52
  from 'C:\xampp\htdocs\eWasher\application\views\templates\order\add_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6546a4321d18_03791720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba71cf13d887f44cfc3391427b2bbc93e806ce48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\order\\add_order.tpl',
      1 => 1550058114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c6546a4321d18_03791720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15873086755c6546a42ee773_00831636', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20693999475c6546a42ef475_46280605', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_15873086755c6546a42ee773_00831636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15873086755c6546a42ee773_00831636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie zamówienia<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_20693999475c6546a42ef475_46280605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20693999475c6546a42ef475_46280605',
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
    <?php echo form_open('Order/save','accept-charset="utf-8"');?>

    <h3 align="center">Utworzenie zlecenia</h3>
    <fieldset>
      <div class="form-group">
        <label for="customerDate" class="col-lg-4 control-label">Dane klienta</label>
          <?php echo form_dropdown(array('name'=>'client_id','id'=>'customerDate','class'=>'js-example-basic-single form-control','options'=>$_smarty_tpl->tpl_vars['data']->value["customers"]));?>

      </div>

      <div class="form-group">
        <label for="creation_date" class="control-label">Data przyjecia zlecenia</label>
            <?php echo form_input(array('name'=>'creation_date','class'=>'form-control','id'=>'creation_date','readonly'=>'readonly','value'=>set_value('creation_date')));?>

      </div>

      <div class="form-group">
        <label for="date_of_receipt" class="control-label">Data odbioru dywanu od klienta</label>
        <?php echo form_input(array('name'=>'date_of_receipt','class'=>'form-control','id'=>'date_of_receipt','readonly'=>'readonly','value'=>set_value('date_of_receipt')));?>

      </div>

      <div class="form-group">
        <label for="date_of_receipt" class="control-label">Data dostarczenia dywanu do klienta</label>
        <?php echo form_input(array('name'=>'delivery_date','class'=>'form-control','id'=>'delivery_date','readonly'=>'readonly','value'=>set_value('delivery_date')));?>

      </div>

      <div class="form-group">
        <label for="orderStatuses" class="control-label">Aktualny Status Zlecenia</label>
        <?php echo form_dropdown(array('name'=>'status_id','class'=>'form-control','id'=>'orderStatuses','options'=>$_smarty_tpl->tpl_vars['data']->value["orderStatuses"]));?>

      </div>

      <div class="form-group">
        <label for="date_of_receipt" class="control-label">Opis</label>
        <?php echo form_textarea(array('name'=>'description_ordering','rows'=>'5','class'=>'form-control','placeholder'=>'Opis Zlecenia','value'=>set_value('description_ordering')));?>

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
