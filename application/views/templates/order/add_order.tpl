{extends file="header.tpl"}
{block name="title"}Dodawanie zamówienia{/block}
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
    {form_open('Order/save', 'accept-charset="utf-8"')}
    <h3 align="center">Utworzenie zlecenia</h3>
    <fieldset>
      <div class="form-group">
        <label for="customerDate" class="col-lg-4 control-label">Dane klienta</label>
          {form_dropdown(['name'=>'client_id', 'id'=>'customerDate','class'=>'js-example-basic-single form-control', 'options' =>$data["customers"]])}
      </div>

      <div class="form-group">
        <label for="creation_date" class="control-label">Data przyjecia zlecenia</label>
            {form_input(['name'=>'creation_date', 'class'=>'form-control', 'id'=>'creation_date' , 'readonly'=>'readonly', 'value'=>set_value('creation_date')])}
      </div>

      <div class="form-group">
        <label for="date_of_receipt" class="control-label">Data odbioru dywanu od klienta</label>
        {form_input(['name'=>'date_of_receipt', 'class'=>'form-control', 'id'=>'date_of_receipt' , 'readonly'=>'readonly', 'value'=>set_value('date_of_receipt')])}
      </div>

      <div class="form-group">
        <label for="date_of_receipt" class="control-label">Data dostarczenia dywanu do klienta</label>
        {form_input(['name'=>'delivery_date', 'class'=>'form-control', 'id'=>'delivery_date' , 'readonly'=>'readonly', 'value'=>set_value('delivery_date')])}
      </div>

      <div class="form-group">
        <label for="orderStatuses" class="control-label">Aktualny Status Zlecenia</label>
        {form_dropdown(['name'=>'status_id', 'class'=>'form-control','id'=>'orderStatuses', 'options' =>$data["orderStatuses"]])}
      </div>

      <div class="form-group">
        <label for="date_of_receipt" class="control-label">Opis</label>
        {form_textarea(['name'=>'description_ordering','rows'=>'5' ,'class'=>'form-control', 'placeholder'=>'Opis Zlecenia', 'value'=>set_value('description_ordering')])}
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
