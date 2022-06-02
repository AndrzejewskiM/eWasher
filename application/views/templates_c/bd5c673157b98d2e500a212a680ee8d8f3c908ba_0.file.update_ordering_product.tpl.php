<?php
/* Smarty version 3.1.33, created on 2019-02-17 19:16:36
  from 'C:\xampp\htdocs\eWasher\application\views\templates\ordering_product\update_ordering_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c69a5046be7d9_89159670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd5c673157b98d2e500a212a680ee8d8f3c908ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\ordering_product\\update_ordering_product.tpl',
      1 => 1550427394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c69a5046be7d9_89159670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14096713075c69a5046a8ed0_50398484', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8497410125c69a5046a9b07_07701237', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_14096713075c69a5046a8ed0_50398484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14096713075c69a5046a8ed0_50398484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Aktualizacja rekordu zamówienia<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_8497410125c69a5046a9b07_07701237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8497410125c69a5046a9b07_07701237',
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
    <?php echo form_open('ordering_product/update/{$ordering_id}','accept-charset="utf-8", id="carpet_form"');?>

    <fieldset>

      <legend>Aktualizuj pozycję zamówienia</legend>

      <?php echo form_input(array('name'=>'id_ordering','class'=>'form-control','id'=>'id_ordering','hidden'=>'hidden','value'=>$_smarty_tpl->tpl_vars['id_ordering']->value));?>


        <div class="form-group">
          <label for="customerName" class="control-label">Rodzaj Dywanu</label>
                <!-- <?php echo form_dropdown(array('name'=>'product_id','id'=>'dywanySelect','class'=>'form-control','options'=>$_smarty_tpl->tpl_vars['data']->value["priceLists"]));?>
 -->
          <select class="form-control listener" name="id_product" id="dywanySelect">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['priceLists'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['val']->value['price_for_meter'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name_product'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>

        <div class="form-group">
          <label for="customerSurname" class="control-label">Wymiar [m<sup>2</sup>]</label>
          <?php echo form_input(array('name'=>'size_ordering_product','class'=>'form-control listener','id'=>'size_ordering_product','readonly'=>'readonly','value'=>set_value('size_ordering_product')));?>

        </div>

        <div class="form-group">
          <label for="customerSurname" class="control-label">Cena [zł]</label>
          <?php echo form_input(array('name'=>'price_ordering_product','class'=>'form-control listener','id'=>'price_ordering_product','readonly'=>'readonly','value'=>set_value('price_ordering_product')));?>

        </div>

          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" id="url"/>

          <div class="form-group">
            <label for="Długość" id="Login" class="control-label">Długość</label>
            <input id="wysokosc" class="form-control" type="number" step="0.01">
          </div>
          <div class="form-group">
          <label for="customerSurname" class="control-label listener">Szerokość:</label>
            <input id="szerokosc" class="form-control listener" type="number" step="0.01"><br>
          </div>
            Dodatkowe opcje:<br>
            <input id="checkbox1" class="listener" type="checkbox">Usuwanie Zapachów
            <input id="checkbox2" class="listener" type="checkbox">Program Antyalergiczny<br>
            Frędzle:<br>
            <input type="radio" class="listener" value='Tak' name="frendzle">Tak
            <input type="radio" class="listener" value='Nie' checked="checked" name="frendzle">Nie<br>
            <div id="fredzle" class="fredzle">
              <div id="fredzle_name">
            Długość Frędzli:<br>
              </div>
              <input id="dlugoscFrendzli" class="listener" type="number"><br>
            </div>


            <div class="form-group">
              <?php echo form_submit(array('value'=>'Submit','class'=>'btn btn-success btn-block'));?>

              <?php echo form_reset(array('value'=>'Reset','class'=>'btn btn-warning btn-block'));?>


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
