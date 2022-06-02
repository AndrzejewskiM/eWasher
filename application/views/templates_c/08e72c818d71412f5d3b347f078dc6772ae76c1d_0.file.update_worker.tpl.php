<?php
/* Smarty version 3.1.33, created on 2019-02-14 08:03:47
  from 'C:\xampp\htdocs\eWasher\application\views\templates\worker\update_worker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6512d3cb1ab5_84479412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e72c818d71412f5d3b347f078dc6772ae76c1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\worker\\update_worker.tpl',
      1 => 1550087668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c6512d3cb1ab5_84479412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_839100565c6512d3c991c9_45942990', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_529554075c6512d3c9a324_70905945', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_839100565c6512d3c991c9_45942990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_839100565c6512d3c991c9_45942990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Aktualizacja klienta<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_529554075c6512d3c9a324_70905945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_529554075c6512d3c9a324_70905945',
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
    <?php echo form_open("Worker/update/".((string)$_smarty_tpl->tpl_vars['worker']->value['id_worker']),'accept-charset="utf-8"');?>

        <h3 align="center">Aktualizuj dane pracownika</h3>
        <fieldset>
        <div class="form-group">
          <label for="creation_date" class="control-label">Imię pracownika</label>
            <?php echo form_input(array('name'=>'name_worker','class'=>'form-control','id'=>'name_worker','value'=>set_value('name_worker',$_smarty_tpl->tpl_vars['worker']->value['name_worker'])));?>

            <?php echo form_error('name_worker');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Nazwisko pracownika</label>
            <?php echo form_input(array('name'=>'surname_worker','class'=>'form-control','id'=>'surname_worker','value'=>set_value('surname_worker',$_smarty_tpl->tpl_vars['worker']->value['surname_worker'])));?>

            <?php echo form_error('surname_worker');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Numer telefonu</label>
            <?php echo form_input(array('name'=>'phone_worker','class'=>'form-control','id'=>'phone_worker','value'=>set_value('phone_worker',$_smarty_tpl->tpl_vars['worker']->value['phone_worker'])));?>

            <?php echo form_error('phone_worker');?>

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
