<?php
/* Smarty version 3.1.33, created on 2019-02-18 16:46:48
  from 'C:\xampp\htdocs\eWasher\application\views\templates\permision\update_permision.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6ad36817bff0_82370285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '540a04a7e43acbf31b2bac31e3a1f0143d2c67a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\permision\\update_permision.tpl',
      1 => 1550504790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c6ad36817bff0_82370285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18283577755c6ad36815be25_87787178', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2764006735c6ad36815cab1_08769281', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_18283577755c6ad36815be25_87787178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18283577755c6ad36815be25_87787178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Aktualizacja uprawnień<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_2764006735c6ad36815cab1_08769281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2764006735c6ad36815cab1_08769281',
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
    <?php echo form_open("/rbac/permision/update/".((string)$_smarty_tpl->tpl_vars['permision']->value['id_permisions']),'accept-charset="utf-8"');?>

    <h3 align="center">Aktualizacja Uprawnienia</h3>
    <fieldset>
      <div class="form-group">
        <label for="customerDate" class="col-lg-4 control-label">Nazwa Uprawnienia</label>
          <?php echo form_input(array('name'=>'name_permisions','class'=>'form-control','placeholder'=>'Nazwa statusu zlecenia','value'=>set_value('name_permisions',$_smarty_tpl->tpl_vars['permision']->value['name_permisions'])));?>

      </div>

      <div class="form-group">
        <label for="customerDate" class="control-label">Akcja z kontrolera</label>
          <?php echo form_input(array('name'=>'action_permissions','class'=>'form-control','placeholder'=>'Akcja kontrolera','value'=>set_value('action_permissions',$_smarty_tpl->tpl_vars['permision']->value['action_permissions'])));?>

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
