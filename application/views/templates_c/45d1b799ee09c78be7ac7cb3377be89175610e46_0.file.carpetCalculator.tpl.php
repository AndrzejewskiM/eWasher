<?php
/* Smarty version 3.1.33, created on 2019-02-18 17:19:16
  from 'C:\xampp\htdocs\eWasher\application\views\templates\carpetCalculator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6adb049ce398_90011904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45d1b799ee09c78be7ac7cb3377be89175610e46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\carpetCalculator.tpl',
      1 => 1550506753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c6adb049ce398_90011904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2779621655c6adb049bdf52_98054164', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12447581405c6adb049bec02_53019560', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_2779621655c6adb049bdf52_98054164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2779621655c6adb049bdf52_98054164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Strona Główna<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_12447581405c6adb049bec02_53019560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12447581405c6adb049bec02_53019560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\eWasher\\application\\third_party\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<div class="container-fluid bg">
  <?php if ($_SESSION['success']) {?>
  <div class="alert alert-dismissible alert-success">
    <?php echo $_SESSION['success'];?>

  </div>
  <?php }?>
  <?php if ($_SESSION['false']) {?>
  <div class="alert alert-dismissible alert-warning">
    <?php echo $_SESSION['false'];?>

  </div>
  <?php }?>
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class ="form-container">
        <h3>Kalkulator</h3>
        <fieldset>
          <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" id="url"/>
          <div class="form-group">
            <label id="Login" class="control-label">Rodzaj Dywanu</label>
              <?php echo smarty_function_html_options(array('name'=>'dywany','class'=>'form-control','options'=>$_smarty_tpl->tpl_vars['dywany']->value,'id'=>"dywanySelect"),$_smarty_tpl);?>

          </div>
  <div class="form-group">
    <label class="control-label">Długość</label>
        <input id="wysokosc" type="number" min="0" max="10" class="form-control" name="firstname">
  </div>
  <div class="form-group">
    <label class="control-label">Szerokość</label>
        <input id="szerokosc" type="text" class="form-control" name="firstname">
  </div>

  <div class="form-group">
    <label class="control-label">Dodatkowe opcje:</label><br>
    <input id="checkbox1" type="checkbox">Usuwanie Zapachów
    <input id="checkbox2" type="checkbox">Program Antyalergiczny<br>
  </div>
  <div class="form-group">
    <label class="control-label">Frędzle:</label><br>
    <input type="radio" value='Tak' name="frendzle">Tak
    <input type="radio" value='Nie' name="frendzle">Nie<br>
  </div>

  <div class="form-group">
    <label class="control-label">Długość Frędzli:</label>
      <input id="dlugoscFrendzli" class="form-control" type="text" name="firstname"><br>
  </div>
      <input id="calculateButton" class="btn btn-success btn-block" type="button" value="Oblicz Koszt">
      </fieldset>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
</div>
</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "body"} */
}
