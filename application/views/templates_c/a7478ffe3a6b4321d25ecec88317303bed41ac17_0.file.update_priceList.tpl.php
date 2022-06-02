<?php
/* Smarty version 3.1.33, created on 2019-02-15 10:30:54
  from 'C:\xampp\htdocs\eWasher\application\views\templates\priceList\update_priceList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6686cebd5645_44390678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7478ffe3a6b4321d25ecec88317303bed41ac17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\priceList\\update_priceList.tpl',
      1 => 1550058010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c6686cebd5645_44390678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8878811195c6686cebbf824_31974500', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10627400035c6686cebc0942_22615023', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_8878811195c6686cebbf824_31974500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8878811195c6686cebbf824_31974500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Aktualizacja oferty firmy<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_10627400035c6686cebc0942_22615023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10627400035c6686cebc0942_22615023',
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
    <?php echo form_open("PriceList/update/".((string)$_smarty_tpl->tpl_vars['pricelist']->value['id_product']),'accept-charset="utf-8"');?>

        <h3 align="center">Aktualizacja produktu w cenniku</h3>
        <fieldset>
        <div class="form-group">
              <label for="name_product" class="col-lg-4 control-label">Nazwa produktu</label>
                <?php echo form_input(array('name'=>'name_product','class'=>'form-control','placeholder'=>'Nazwa','value'=>set_value('name_product',$_smarty_tpl->tpl_vars['pricelist']->value['name_product'])));?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Typ produktu</label>
            <?php echo form_input(array('name'=>'type_product','class'=>'form-control','placeholder'=>'Typ','value'=>set_value('type_product',$_smarty_tpl->tpl_vars['pricelist']->value['type_product'])));?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Dodatkowy opis</label>
            <?php echo form_textarea(array('name'=>'description_product','class'=>'form-control','placeholder'=>'Dodatkowy Opis','value'=>set_value('description_product',$_smarty_tpl->tpl_vars['pricelist']->value['description_product'])));?>

        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Cena za m<sup>2</sup></label>
            <?php echo form_input(array('name'=>'price_for_meter','class'=>'form-control','placeholder'=>'Cena Metra Kwadratowego','value'=>set_value('price_for_meter',$_smarty_tpl->tpl_vars['pricelist']->value['price_for_meter'])));?>

        </div>


  <div class="form-group">


    <?php echo form_submit(array('value'=>'Aktualizuj','class'=>'btn btn-success btn-block'));?>

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
