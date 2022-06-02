<?php
/* Smarty version 3.1.33, created on 2018-12-29 14:57:15
  from 'C:\xampp\htdocs\eWasher\application\views\templates\mainPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c277d3b3a7ac8_67636940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd8bc1c57da7b8e4050d0be1157ad0b15e2f28d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\mainPage.tpl',
      1 => 1546091832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c277d3b3a7ac8_67636940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<div class="row">
  <div class="col-sm-3">
    <a href="<?php echo site_url('customer');?>
">
    <div class="card color2">
      <p class="cat"></p>
       <h4><strong>Klienci</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klienci">
    <div class="card color3">
      <p class="cat"><?php echo $_smarty_tpl->tpl_vars['translations']->value['_table'];?>
</p>
       <h4><strong><?php echo $_smarty_tpl->tpl_vars['translations']->value['_delkom40'];?>
</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
ebi">
    <div class="card color6">
      <p class="cat"><?php echo $_smarty_tpl->tpl_vars['translations']->value['_table'];?>
</p>
       <h4><strong><?php echo $_smarty_tpl->tpl_vars['translations']->value['_ebi'];?>
</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
historia">
    <div class="card color4">
      <p class="cat"><?php echo $_smarty_tpl->tpl_vars['translations']->value['_data'];?>
</p>
       <h4><strong><?php echo $_smarty_tpl->tpl_vars['translations']->value['_history'];?>
</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
driver">
    <div class="card color5">
      <p class="cat"><?php echo $_smarty_tpl->tpl_vars['translations']->value['_dictionaries'];?>
</p>
       <h4><strong><?php echo $_smarty_tpl->tpl_vars['translations']->value['_drivers'];?>
</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a id="reports">
    <div class="card color6">
      <p class="cat"><?php echo $_smarty_tpl->tpl_vars['translations']->value['reports'];?>
</p>
       <h4><strong><?php echo $_smarty_tpl->tpl_vars['translations']->value['generate_report'];?>
</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3" hidden>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
">
    <div class="card color7">
      <p class="cat">Xx</p>
       <h4><strong>Xx</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3" hidden>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
">
    <div class="card color8">
      <p class="cat">Xx</p>
       <h4><strong>Xx</strong></h4>
    </div>
  </a>
  </div>

</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
