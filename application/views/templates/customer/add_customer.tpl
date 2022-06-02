{extends file="header.tpl"}
{block name="title"}Dodawanie klienta{/block}
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
    {form_open('Customer/save', 'accept-charset="utf-8"')}
    <h3 align="center">Dodawanie klienta</h3>
    <fieldset>
      <div class="form-group">
        <label for="customerName" class="col-lg-4 control-label">Imie</label>
          {form_input(['name'=>'name_customer','id'=>'customerName', 'class'=>'form-control', 'placeholder'=>'Imie Klienta', 'value'=>set_value('name_customer')])}
          {form_error('name_customer')}
      </div>

      <div class="form-group">
        <label for="customerSurname" class="control-label">Nazwisko</label>
          {form_input(['name'=>'surname_customer','id'=>'customerSurname', 'class'=>'form-control', 'placeholder'=>'Nazwisko Klienta', 'value'=>set_value('surname_customer')])}
          {form_error('surname_customer')}
      </div>

      <div class="form-group">
        <label for="customerPhone" class="control-label">Telefon</label>
          {form_input(['name'=>'phone_customer','id'=>'customerPhone', 'class'=>'form-control', 'placeholder'=>'Numer Telefonu Klienta', 'value'=>set_value('phone_customer')])}
          {form_error('phone_customer')}
      </div>

      <div class="form-group">
        <label for="customerStreet" class="control-label">Ulica</label>
          {form_input(['name'=>'street_customer','id'=>'customerStreet', 'class'=>'form-control', 'placeholder'=>'Ulica Klienta', 'value'=>set_value('street_customer')])}
          {form_error('street_customer')}
      </div>

      <div class="form-group">
        <label for="city_customer" class="control-label">Miasto</label>
          {form_input(['name'=>'city_customer','id'=>'city_customer', 'class'=>'form-control', 'placeholder'=>'Miasto Klienta', 'value'=>set_value('city_customer')])}
          {form_error('city_customer')}
      </div>

      <div class="form-group">
        <label for="post_code_customer" class="control-label">Kod Pocztowy</label>
          {form_input(['name'=>'post_code_customer','id'=>'post_code_customer', 'class'=>'form-control', 'placeholder'=>'Kod Pocztowy', 'value'=>set_value('post_code_customer')])}
          {form_error('post_code_customer')}
      </div>

      <div class="form-group">
        <label for="customerDescription" class="control-label">Dodatkowy opis</label>
          {form_textarea(['name'=>'description_customer', 'rows'=>'2','id'=>'customerDescription', 'class'=>'form-control', 'placeholder'=>'Dodatkowy Opis', 'value'=>set_value('description_customer')])}
          {form_error('description_customer')}
      </div>


  <div class="form-group">

      <!--<input type="reset" value="Reset">-->

      {form_submit(['value'=>'Dodaj', 'class'=>'btn btn-success btn-block'])}
      {form_reset(['value'=>'Wyczyść', 'class'=>'btn btn-warning btn-block'])}

  </div>
</fieldset>
    {form_close()}
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
</div>
</div>
</div>
{include file="footer.tpl"}
{/block}
