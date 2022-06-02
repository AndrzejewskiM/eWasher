<?php
/* Smarty version 3.1.33, created on 2019-02-15 11:12:25
  from 'C:\xampp\htdocs\eWasher\application\views\templates\worker\change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c669089d74d40_99606374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '178e9166f5b73e2e61ea06036889698c23d8e092' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\worker\\change_password.tpl',
      1 => 1550087612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c669089d74d40_99606374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16129155255c669089d64a00_40618488', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21052925005c669089d655e4_67901256', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_16129155255c669089d64a00_40618488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16129155255c669089d64a00_40618488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Zmiana hasła<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_21052925005c669089d655e4_67901256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21052925005c669089d655e4_67901256',
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
    <?php echo form_open('Worker/save','accept-charset="utf-8"');?>

        <h3 align="center">Zmień hasło</h3>
        <fieldset>
<div class="form-group">
  <label for="creation_date" class="control-label">Hasło</label>
    <?php echo form_input(array('name'=>'password','type'=>'password','class'=>'form-control','id'=>'password','value'=>set_value('password',$_smarty_tpl->tpl_vars['pricelist']->value['name_product'])));?>

</div>

<div class="form-group">
  <label for="creation_date" class="control-label">Potwierdzenie Hasła</label>
    <?php echo form_input(array('name'=>'password_confirm','type'=>'password','class'=>'form-control','id'=>'password_confirm','value'=>set_value('password_confirm')));?>

</div>

<div class="form-group">

  <?php echo form_submit(array('value'=>'Submit','class'=>'btn btn-success btn-block'));?>


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
