{extends file="header.tpl"}
{block name="title"}Dodawanie statusu zamówienia{/block}
{block name="body"}
<div class="container-fluid bg">
  {if $smarty.session.flashdata.response }
  <div class="alert alert-dismissible alert-success">
    {$error}
  </div>
  {/if}
  <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12"></div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class ="form-container">
    {form_open('OrderStatus/save', 'accept-charset="utf-8"')}
    <h3 align="center">Dodanie statusu zamówienia</h3>
    <fieldset>
      <div class="form-group">
        <label for="name_order_status" class="control-label">Nazwa statusu zlecenia</label>
          {form_input(['name'=>'name_order_status', 'class'=>'form-control', 'placeholder'=>'Nazwa statusu zlecenia', 'value'=>set_value('name_order_status')])}
          {form_error('name_order_status')}
      </div>

      <div class="form-group">
        {form_submit(['value'=>'Submit', 'class'=>'btn btn-success btn-block'])}
        {form_reset(['value'=>'Reset', 'class'=>'btn btn-warning btn-block'])}

    </div>
  </div>
</fieldset>
    {form_close()}
    </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
    </div>
    </div>
{include file="footer.tpl"}
{/block}
