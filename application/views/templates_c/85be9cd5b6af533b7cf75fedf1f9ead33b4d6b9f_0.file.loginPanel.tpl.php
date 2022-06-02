<?php
/* Smarty version 3.1.33, created on 2019-02-13 08:29:48
  from 'C:\xampp\htdocs\eWasher\application\views\templates\loginPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c63c76cd18ed2_42144767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85be9cd5b6af533b7cf75fedf1f9ead33b4d6b9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\loginPanel.tpl',
      1 => 1550042985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c63c76cd18ed2_42144767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2669522115c63c76cd09218_52028169', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15521406025c63c76cd0a434_54103440', "navbar");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12010404205c63c76cd0aee9_87038239', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_2669522115c63c76cd09218_52028169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2669522115c63c76cd09218_52028169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Logowanie<?php
}
}
/* {/block "title"} */
/* {block "navbar"} */
class Block_15521406025c63c76cd0a434_54103440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_15521406025c63c76cd0a434_54103440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "navbar"} */
/* {block "body"} */
class Block_12010404205c63c76cd0aee9_87038239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12010404205c63c76cd0aee9_87038239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="container-fluid bg">
    <?php if ($_SESSION['false']) {?>
    <div class="alert alert-dismissible alert-warning">
      <?php echo $_SESSION['false'];?>

    </div>
    <?php }?>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <!--Początek Formularza-->
        <div class ="form-container">
        <?php echo form_open('Login/tryToLogin','accept-charset="utf-8"');?>

        <h1 align="center">eWasher</h1>
          <fieldset>
            <div class="form-group">
              <label for="Login" id="Login" class="control-label">Login</label>
                <?php echo form_input(array('name'=>'Login','class'=>'form-control','placeholder'=>'Login','value'=>set_value('Login')));?>

            </div>

            <div class="form-group">
              <label for="Password" class="control-label">Hasło</label>
                <?php echo form_input(array('name'=>'Password','id'=>'Password','type'=>'Password','class'=>'form-control','placeholder'=>'Hasło','value'=>set_value('Password')));?>

            </div>

                <?php echo form_submit(array('value'=>'Zaloguj się','class'=>'btn btn-success btn-block'));?>


              </fieldset>
  <?php echo form_close();?>

        <!--Koniec Formularza-->
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
