<?php
/* Smarty version 3.1.33, created on 2019-02-28 07:45:17
  from 'C:\xampp\htdocs\eWasher\application\views\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c77837d4bfca9_94087787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '345a1d1ab725b02208a177070c50db8ca2287fc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\footer.tpl',
      1 => 1551336315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c77837d4bfca9_94087787 (Smarty_Internal_Template $_smarty_tpl) {
?><!--footer starts from here-->
<div class="footer">
Aplikacja wykonana przez Michała Andrzejewskiego &copy; 2018-2019
</div>
<!--</footer>-->
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/external/jquery-3.3.1.min.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/external/jquery-ui.min.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/external/bootstrap.js');?>
> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/external/datatables.min.js');?>
> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/external/moment.min.js');?>
> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/external/bootstrap-datetimepicker.js');?>
> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/external/sweetalert2.all.min.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/header.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources//fullcalendar/fullcalendar.min.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/fullcalendar/locale/pl.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/calendar.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/fullcalendar/gcal.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/js/select2.min.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/fontawesome/js/brands.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/fontawesome/js/solid.js');?>
><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=<?php echo base_url('/resources/fontawesome/js/fontawesome.js');?>
><?php echo '</script'; ?>
>


<?php if (isset($_smarty_tpl->tpl_vars['customScripts']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customScripts']->value, 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
resources/js/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
.js"><?php echo '</script'; ?>
>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

</body>
</html>
<?php }
}
