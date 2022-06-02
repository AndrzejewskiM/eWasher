<?php
/* Smarty version 3.1.33, created on 2019-02-14 13:46:34
  from 'C:\xampp\htdocs\eWasher\application\views\templates\customer\update_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c65632a1a30d1_58897228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c10720cbc24c57f424174d694e9af0e8b916c6ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\customer\\update_customer.tpl',
      1 => 1550148382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c65632a1a30d1_58897228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8330092995c65632a188c18_46822519', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20372738285c65632a189836_74278688', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_8330092995c65632a188c18_46822519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8330092995c65632a188c18_46822519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Aktualizacja klienta<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_20372738285c65632a189836_74278688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20372738285c65632a189836_74278688',
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
    <?php echo form_open("Customer/update/".((string)$_smarty_tpl->tpl_vars['customer']->value['id_customer']),'accept-charset="utf-8"');?>

    <h3 align="center">Aktualizacja danych klienta</h3>
    <fieldset>

      <div class="form-group">
        <label for="customerName" class="col-lg-4 control-label">Imie</label>
          <?php echo form_input(array('name'=>'name_customer','class'=>'form-control','placeholder'=>'Imie Klienta','value'=>set_value('name_customer',$_smarty_tpl->tpl_vars['customer']->value['name_customer'])));?>

      </div>

      <div class="form-group">
        <label for="customerSurname" id="customerSurname" class="control-label">Nazwisko</label>
          <?php echo form_input(array('name'=>'surname_customer','class'=>'form-control','placeholder'=>'Nazwisko Klienta','value'=>set_value('surname_customer',$_smarty_tpl->tpl_vars['customer']->value['surname_customer'])));?>

      </div>

      <div class="form-group">
        <label for="customerPhone" id="customerPhone" class="control-label">Telefon</label>
          <?php echo form_input(array('name'=>'phone_customer','class'=>'form-control','placeholder'=>'Numer Telefonu Klienta','value'=>set_value('phone_customer',$_smarty_tpl->tpl_vars['customer']->value['phone_customer'])));?>

      </div>

      <div class="form-group">
        <label for="customerStreet" id="customerPhone" class="control-label">Ulica</label>
          <?php echo form_input(array('name'=>'street_customer','class'=>'form-control','placeholder'=>'Ulica Klienta','value'=>set_value('street_customer',$_smarty_tpl->tpl_vars['customer']->value['street_customer'])));?>

      </div>

      <div class="form-group">
        <label for="city_customer" id="city_customer" class="control-label">Miasto</label>
          <?php echo form_input(array('name'=>'city_customer','class'=>'form-control','placeholder'=>'Miasto Klienta','value'=>set_value('city_customer',$_smarty_tpl->tpl_vars['customer']->value['city_customer'])));?>

      </div>

      <div class="form-group">
        <label for="post_code_customer" id="post_code_customer" class="control-label">Kod Pocztowy</label>
          <?php echo form_input(array('name'=>'post_code_customer','class'=>'form-control','placeholder'=>'Kod Pocztowy','value'=>set_value('post_code_customer',$_smarty_tpl->tpl_vars['customer']->value['post_code_customer'])));?>

      </div>

      <div class="form-group">
        <label for="customerDescription" id="customerDescription" class="control-label">Dodatkowy opis</label>
          <?php echo form_textarea(array('name'=>'description_customer','rows'=>'5','class'=>'form-control','placeholder'=>'Dodatkowy Opis','value'=>set_value('description_customer',$_smarty_tpl->tpl_vars['customer']->value['description_customer'])));?>

      </div>

  <div class="form-group">

      <?php echo form_submit(array('value'=>'Aktualizuj','class'=>'btn btn-success btn-block'));?>


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
