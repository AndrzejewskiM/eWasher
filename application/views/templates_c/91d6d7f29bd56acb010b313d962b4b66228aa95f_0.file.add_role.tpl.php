<?php
/* Smarty version 3.1.33, created on 2019-02-28 10:43:38
  from 'C:\xampp\htdocs\eWasher\application\views\templates\role\add_role.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c77ad4a2fe645_41863107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91d6d7f29bd56acb010b313d962b4b66228aa95f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\role\\add_role.tpl',
      1 => 1551347017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c77ad4a2fe645_41863107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11478386115c77ad4a2f0406_63570858', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9025747245c77ad4a2f0d27_97226982', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_11478386115c77ad4a2f0406_63570858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11478386115c77ad4a2f0406_63570858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodanie roli<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_9025747245c77ad4a2f0d27_97226982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9025747245c77ad4a2f0d27_97226982',
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
    <?php echo form_open('/rbac/Role/save','accept-charset="utf-8"');?>

        <h3 align="center">Dodaj Role</h3>
        <fieldset>
        <div class="form-group">
              <label for="name_product" class="col-lg-4 control-label">Nazwa roli</label>
                <?php echo form_input(array('name'=>'name_roles','class'=>'form-control','placeholder'=>'Nazwa statusu zlecenia','value'=>set_value('name_roles')));?>

                <?php echo form_error('name_roles');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Nadane uprawnienia</label>
            <?php echo form_dropdown(array('name'=>'permissions[]','id'=>'customerDate','multiple'=>'multiple','class'=>'selectBox form-control','options'=>$_smarty_tpl->tpl_vars['permissions']->value));?>

            <?php echo form_error('permissions[]');?>

        </div>

  <div class="form-group">


    <?php echo form_submit(array('value'=>'Dodaj','class'=>'btn btn-success btn-block'));?>

    <?php echo form_reset(array('value'=>'Reset','class'=>'btn btn-warning btn-block'));?>


    </div>
  </div>
</fieldset>
    <?php echo form_close();?>

</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "body"} */
}
