<?php
/* Smarty version 3.1.33, created on 2019-02-28 00:32:55
  from 'C:\xampp\htdocs\eWasher\application\views\templates\role\update_role.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c771e272563d2_70262356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '462ebef91dd9fd8feaeef7f17388b7fbe24f3e2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\role\\update_role.tpl',
      1 => 1551310373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c771e272563d2_70262356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12500054555c771e272436a0_90342415', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14409685665c771e27244138_37837947', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_12500054555c771e272436a0_90342415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12500054555c771e272436a0_90342415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Aktualizacja roli<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_14409685665c771e27244138_37837947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14409685665c771e27244138_37837947',
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
    <?php echo form_open("/rbac/role/update/".((string)$_smarty_tpl->tpl_vars['role']->value['id_roles']),'accept-charset="utf-8"');?>

    <h3 align="center">Aktualizacja Ról</h3>
    <fieldset>
      <div class="form-group">
        <label for="customerDate" class="col-lg-4 control-label">Nazwa Uprawnienia</label>
          <?php echo form_input(array('name'=>'name_roles','class'=>'form-control','placeholder'=>'Nazwa statusu zlecenia','value'=>set_value('name_roles',$_smarty_tpl->tpl_vars['role']->value['name_roles'])));?>

      </div>
      <div class="form-group">
        <label for="creation_date" class="control-label">Nadane uprawnienia</label>
          <?php echo form_dropdown(array('name'=>'permissions[]','id'=>'customerDate','multiple'=>'multiple','class'=>'selectBox form-control','options'=>$_smarty_tpl->tpl_vars['permissions']->value,'selected'=>$_smarty_tpl->tpl_vars['rolePermissions']->value));?>

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
