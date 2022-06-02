<?php
/* Smarty version 3.1.33, created on 2018-12-29 20:01:53
  from 'C:\xampp\htdocs\eWasher\application\views\templates\add_priceList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c27c4a1d56ed9_90578783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302ce613cbb06de5afb1b245f24a3559ade6998f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\add_priceList.tpl',
      1 => 1546110085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c27c4a1d56ed9_90578783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <?php if ($_SESSION['flashdata']['response']) {?>
  <div class="alert alert-dismissible alert-success">
    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

  </div>
  <?php }?>
    <?php echo form_open('pricelist/save','accept-charset="utf-8"');?>

    <fieldset>
      <legend>Dodaj Produkt</legend>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerName" class="col-lg-4 control-label">Nazwa</label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'name','class'=>'form-control','placeholder'=>'Nazwa','value'=>set_value('name')));?>

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
              <label for="productType" class="col-lg-2 control-label">Typ</label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'type','class'=>'form-control','placeholder'=>'Typ','value'=>set_value('type')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('type');?>

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

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="customerStreet" class="col-lg-2 control-label">Cena m<sup>2</sup></label>
              <div class="col-lg-8">
                <?php echo form_input(array('name'=>'price_for_meter','class'=>'form-control','placeholder'=>'Cena Metra Kwadratowego','value'=>set_value('price_for_meter')));?>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <?php echo form_error('street');?>

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
