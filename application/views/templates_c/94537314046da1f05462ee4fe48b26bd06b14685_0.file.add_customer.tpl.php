<?php
/* Smarty version 3.1.33, created on 2019-02-28 07:44:18
  from 'C:\xampp\htdocs\eWasher\application\views\templates\customer\add_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c77834284af52_35657290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94537314046da1f05462ee4fe48b26bd06b14685' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\customer\\add_customer.tpl',
      1 => 1551336255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c77834284af52_35657290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2902791385c778342836c59_57689926', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4876465965c778342837566_76128952', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_2902791385c778342836c59_57689926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2902791385c778342836c59_57689926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodawanie klienta<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_4876465965c778342837566_76128952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4876465965c778342837566_76128952',
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
    <?php echo form_open('Customer/save','accept-charset="utf-8"');?>

    <h3 align="center">Dodawanie klienta</h3>
    <fieldset>
      <div class="form-group">
        <label for="customerName" class="col-lg-4 control-label">Imie</label>
          <?php echo form_input(array('name'=>'name_customer','id'=>'customerName','class'=>'form-control','placeholder'=>'Imie Klienta','value'=>set_value('name_customer')));?>

          <?php echo form_error('name_customer');?>

      </div>

      <div class="form-group">
        <label for="customerSurname" class="control-label">Nazwisko</label>
          <?php echo form_input(array('name'=>'surname_customer','id'=>'customerSurname','class'=>'form-control','placeholder'=>'Nazwisko Klienta','value'=>set_value('surname_customer')));?>

          <?php echo form_error('surname_customer');?>

      </div>

      <div class="form-group">
        <label for="customerPhone" class="control-label">Telefon</label>
          <?php echo form_input(array('name'=>'phone_customer','id'=>'customerPhone','class'=>'form-control','placeholder'=>'Numer Telefonu Klienta','value'=>set_value('phone_customer')));?>

          <?php echo form_error('phone_customer');?>

      </div>

      <div class="form-group">
        <label for="customerStreet" class="control-label">Ulica</label>
          <?php echo form_input(array('name'=>'street_customer','id'=>'customerStreet','class'=>'form-control','placeholder'=>'Ulica Klienta','value'=>set_value('street_customer')));?>

          <?php echo form_error('street_customer');?>

      </div>

      <div class="form-group">
        <label for="city_customer" class="control-label">Miasto</label>
          <?php echo form_input(array('name'=>'city_customer','id'=>'city_customer','class'=>'form-control','placeholder'=>'Miasto Klienta','value'=>set_value('city_customer')));?>

          <?php echo form_error('city_customer');?>

      </div>

      <div class="form-group">
        <label for="post_code_customer" class="control-label">Kod Pocztowy</label>
          <?php echo form_input(array('name'=>'post_code_customer','id'=>'post_code_customer','class'=>'form-control','placeholder'=>'Kod Pocztowy','value'=>set_value('post_code_customer')));?>

          <?php echo form_error('post_code_customer');?>

      </div>

      <div class="form-group">
        <label for="customerDescription" class="control-label">Dodatkowy opis</label>
          <?php echo form_textarea(array('name'=>'description_customer','rows'=>'2','id'=>'customerDescription','class'=>'form-control','placeholder'=>'Dodatkowy Opis','value'=>set_value('description_customer')));?>

          <?php echo form_error('description_customer');?>

      </div>


  <div class="form-group">

      <!--<input type="reset" value="Reset">-->

      <?php echo form_submit(array('value'=>'Dodaj','class'=>'btn btn-success btn-block'));?>

      <?php echo form_reset(array('value'=>'Wyczyść','class'=>'btn btn-warning btn-block'));?>


  </div>
</fieldset>
    <?php echo form_close();?>

</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "body"} */
}
