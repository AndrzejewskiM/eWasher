<?php
/* Smarty version 3.1.33, created on 2019-02-18 19:04:55
  from 'C:\xampp\htdocs\eWasher\application\views\templates\orderStatus\update_order_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6af3c768aa77_41191426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ba22c5272db0d053ccb836fb806d9dde2b8ac6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\orderStatus\\update_order_status.tpl',
      1 => 1550513048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c6af3c768aa77_41191426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15721800415c6af3c767b988_53512699', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3538947265c6af3c767c3e8_30123229', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_15721800415c6af3c767b988_53512699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15721800415c6af3c767b988_53512699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Aktualizacja statusów zamówienia<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_3538947265c6af3c767c3e8_30123229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3538947265c6af3c767c3e8_30123229',
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
    <?php echo form_open("orderStatus/update/".((string)$_smarty_tpl->tpl_vars['orderStatus']->value['id_order_status']),'accept-charset="utf-8"');?>

    <h3 align="center">Aktualizacja statusu zamówienia</h3>
    <fieldset>
      <div class="form-group">
        <label for="customerDate" class="control-label">Nazwa statusu zlecenia</label>
          <?php echo form_input(array('name'=>'name_order_status','class'=>'form-control','placeholder'=>'Nazwa statusu zlecenia','value'=>set_value('name_order_status',$_smarty_tpl->tpl_vars['orderStatus']->value['name_order_status'])));?>

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
