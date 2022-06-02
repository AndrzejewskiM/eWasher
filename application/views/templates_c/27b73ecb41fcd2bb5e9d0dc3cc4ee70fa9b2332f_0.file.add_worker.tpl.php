<?php
/* Smarty version 3.1.33, created on 2019-02-14 16:48:37
  from 'C:\xampp\htdocs\eWasher\application\views\templates\worker\add_worker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c658dd5d83ec6_24986301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27b73ecb41fcd2bb5e9d0dc3cc4ee70fa9b2332f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\worker\\add_worker.tpl',
      1 => 1550087314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c658dd5d83ec6_24986301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8847207805c658dd5c604d8_83448259', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15911916465c658dd5c614a8_15100619', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_8847207805c658dd5c604d8_83448259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8847207805c658dd5c604d8_83448259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodanie pracownika<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_15911916465c658dd5c614a8_15100619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15911916465c658dd5c614a8_15100619',
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

        <h3 align="center">Dodaj pracownika</h3>
        <fieldset>
        <div class="form-group">
              <label for="name_product" class="control-label">Login pracownika</label>
                <?php echo form_input(array('name'=>'login','class'=>'form-control','id'=>'login','value'=>set_value('login')));?>

                <?php echo form_error('login');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Hasło</label>
            <?php echo form_input(array('name'=>'password','type'=>'password','class'=>'form-control','id'=>'password','value'=>set_value('password')));?>

            <?php echo form_error('password');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Potwierdzenie Hasła</label>
            <?php echo form_input(array('name'=>'password_confirm','type'=>'password','class'=>'form-control','id'=>'password_confirm','value'=>set_value('password_confirm')));?>

            <?php echo form_error('password_confirm');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Imię pracownika</label>
            <?php echo form_input(array('name'=>'name_worker','class'=>'form-control','id'=>'name_worker','value'=>set_value('name_worker')));?>

            <?php echo form_error('name_worker');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Nazwisko pracownika</label>
            <?php echo form_input(array('name'=>'surname_worker','class'=>'form-control','id'=>'surname_worker','value'=>set_value('surname_worker')));?>

            <?php echo form_error('surname_worker');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Numer telefonu</label>
            <?php echo form_input(array('name'=>'phone_worker','class'=>'form-control','id'=>'phone_worker','value'=>set_value('phone_worker')));?>

            <?php echo form_error('phone_worker');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Rola</label>
            <?php echo form_dropdown(array('name'=>'role_id','class'=>'js-example-basic-single form-control','options'=>$_smarty_tpl->tpl_vars['roles']->value));?>

        </div>

  <div class="form-group">


    <?php echo form_submit(array('value'=>'Submit','class'=>'btn btn-success btn-block'));?>

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
