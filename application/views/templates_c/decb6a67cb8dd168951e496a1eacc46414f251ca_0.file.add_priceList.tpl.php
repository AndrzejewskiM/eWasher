<?php
/* Smarty version 3.1.33, created on 2019-02-28 10:38:35
  from 'C:\xampp\htdocs\eWasher\application\views\templates\priceList\add_priceList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c77ac1bc90239_63136173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'decb6a67cb8dd168951e496a1eacc46414f251ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\priceList\\add_priceList.tpl',
      1 => 1551346713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c77ac1bc90239_63136173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17790713665c77ac1bc7fb48_86957692', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13151700755c77ac1bc804d5_00652832', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_17790713665c77ac1bc7fb48_86957692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17790713665c77ac1bc7fb48_86957692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodanie produktu do oferty<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_13151700755c77ac1bc804d5_00652832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13151700755c77ac1bc804d5_00652832',
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
    <?php echo form_open('pricelist/save','accept-charset="utf-8"');?>

        <h3 align="center">Dodaj produkt do cennika</h3>
        <fieldset>
        <div class="form-group">
              <label for="name_product" class="col-lg-4 control-label">Nazwa produktu</label>
                <?php echo form_input(array('name'=>'name_product','class'=>'form-control','placeholder'=>'Nazwa','value'=>set_value('name_product')));?>

                <?php echo form_error('name_product');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Typ produktu</label>
            <?php echo form_input(array('name'=>'type_product','class'=>'form-control','placeholder'=>'Typ','value'=>set_value('type_product')));?>

            <?php echo form_error('type_product');?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Dodatkowy opis</label>
            <?php echo form_textarea(array('name'=>'description_product','class'=>'form-control','rows'=>'5','placeholder'=>'Dodatkowy Opis','value'=>set_value('description_product')));?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Cena za m<sup>2</sup></label>
            <?php echo form_input(array('name'=>'price_for_meter','class'=>'form-control','placeholder'=>'Cena Metra Kwadratowego','value'=>set_value('price_for_meter')));?>

            <?php echo form_error('price_for_meter');?>

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
