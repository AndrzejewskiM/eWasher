<?php
/* Smarty version 3.1.33, created on 2019-02-18 00:20:55
  from 'C:\xampp\htdocs\eWasher\application\views\templates\calendar\calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c69ec570cf576_16062939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '387fa8e93a1666586b7c45aa9aca170c5463352b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eWasher\\application\\views\\templates\\calendar\\calendar.tpl',
      1 => 1550445652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c69ec570cf576_16062939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9397026705c69ec570c7ba9_82272809', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12418129415c69ec570c84f6_63018748', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "header.tpl");
}
/* {block "title"} */
class Block_9397026705c69ec570c7ba9_82272809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9397026705c69ec570c7ba9_82272809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalendarz<?php
}
}
/* {/block "title"} */
/* {block "body"} */
class Block_12418129415c69ec570c84f6_63018748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12418129415c69ec570c84f6_63018748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" id="base_url"/>
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="page-header">
    		<h1> Kalendarz </h1>
    	</div>

    <div id="calendar">
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Dodaj wydarzenie</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <?php echo form_open('Calendar/add_event','accept-charset="utf-8" class="form-horizontal"');?>

      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Nazwa</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Opis</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data rozpoczęcia</label>
                <div class="col-md-8">
                    <input type="text" readonly="readonly" class="form-control" name="start_date" id="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data zakończenia</label>
                <div class="col-md-8">
                    <input type="text" readonly="readonly" class="form-control" id="end_date" name="end_date">
                </div>
        </div>
        <div class="form-group">
        <label for="p-in" class="col-md-4 label-heading">Kolor wydarzenia</label>
        <div class="col-md-8">
          <select class="color" name="color">
            <option value="#008000"></option>
            <option value="#FF0000"></option>
            <option value="#000000"></option>
            <option value="#00FFFF"></option>
            <option value="#0000FF"></option>
            <option value="#FF00FF"></option>
          </select>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add Event">
        <?php echo form_close();?>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Aktualizacja/Usuwanie Wydarzenia</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open('Calendar/edit_event','accept-charset="utf-8" class="form-horizontal"');?>

      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Nazwa</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="name">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Opis</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data rozpoczęcia</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="start_date_edit">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data zakończenia</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date_edit">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Usunąć wydarzenie?</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
        <input type="submit" class="btn btn-primary" value="Wykonaj">
        <?php echo form_close();?>

      </div>
    </div>
  </div>
</div>
    </div>

    </div>
    </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "body"} */
}
