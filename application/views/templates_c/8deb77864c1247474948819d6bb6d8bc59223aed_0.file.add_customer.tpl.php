<?php
/* Smarty version 3.1.33, created on 2018-12-29 11:52:31
  from 'C:\xampp\htdocs\eWasher\application\views\templates\add_customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2751ef35c9b5_08308743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8deb77864c1247474948819d6bb6d8bc59223aed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\add_customer.tpl',
      1 => 1546080514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c2751ef35c9b5_08308743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <?php if ($_SESSION['flashdata']['response']) {?>
  <div class="alert alert-dismissible alert-success">
    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

  </div>
  <?php }?>
    <?php echo form_open('Customer/save','accept-charset="utf-8"');?>

    <fieldset>
      <legend>Dodaj Klienta</legend>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerName" class="col-lg-4 control-label">Imie</label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'name','class'=>'form-control','placeholder'=>'Imie Klienta','value'=>set_value('name')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('name');?>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerSurname" class="col-lg-2 control-label">Nazwisko</label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'surname','class'=>'form-control','placeholder'=>'Nazwisko Klienta','value'=>set_value('surname')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('surname');?>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerPhone" class="col-lg-2 control-label">Telefon</label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'phone','class'=>'form-control','placeholder'=>'Numer Telefonu Klienta','value'=>set_value('phone')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('phone');?>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerStreet" class="col-lg-2 control-label">Ulica</label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'street','class'=>'form-control','placeholder'=>'Ulica Klienta','value'=>set_value('street')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('street');?>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerCity" class="col-lg-2 control-label">Miasto</label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'city','class'=>'form-control','placeholder'=>'Miasto Klienta','value'=>set_value('city')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('city');?>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerPostCode" class="col-lg-2 control-label">Kod Pocztowy</label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'post_code','class'=>'form-control','placeholder'=>'Kod Pocztowy','value'=>set_value('post_code')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('post_code');?>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerDescription" class="col-lg-2 control-label">Dodatkowy Opis</label>
              <div class="col-lg-8">
                <?php echo form_textarea(array('name'=>'description','class'=>'form-control','placeholder'=>'Dodatkowy Opis','value'=>set_value('description')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('description');?>

          </div>
        </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

      <!--<input type="reset" value="Reset">-->

      <?php echo form_submit(array('value'=>'Submit','class'=>'btn-btn success'));?>

      <?php echo form_reset(array('value'=>'Reset','class'=>'btn-btn primary'));?>


    </div>
  </div>
</fieldset>
    <?php echo form_close();?>

</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
