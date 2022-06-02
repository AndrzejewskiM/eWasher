{extends file="header.tpl"}
{block name="title"}Aktualizacja klienta{/block}
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
    {form_open("Customer/update/{$customer['id_customer']}", 'accept-charset="utf-8"')}
    <h3 align="center">Aktualizacja danych klienta</h3>
    <fieldset>

      <div class="form-group">
        <label for="customerName" class="col-lg-4 control-label">Imie</label>
          {form_input(['name'=>'name_customer', 'class'=>'form-control', 'placeholder'=>'Imie Klienta', 'value'=>set_value('name_customer',$customer['name_customer'])])}
      </div>

      <div class="form-group">
        <label for="customerSurname" id="customerSurname" class="control-label">Nazwisko</label>
          {form_input(['name'=>'surname_customer', 'class'=>'form-control', 'placeholder'=>'Nazwisko Klienta', 'value'=>set_value('surname_customer',$customer['surname_customer'])])}
      </div>

      <div class="form-group">
        <label for="customerPhone" id="customerPhone" class="control-label">Telefon</label>
          {form_input(['name'=>'phone_customer', 'class'=>'form-control', 'placeholder'=>'Numer Telefonu Klienta', 'value'=>set_value('phone_customer',$customer['phone_customer'])])}
      </div>

      <div class="form-group">
        <label for="customerStreet" id="customerPhone" class="control-label">Ulica</label>
          {form_input(['name'=>'street_customer', 'class'=>'form-control', 'placeholder'=>'Ulica Klienta', 'value'=>set_value('street_customer',$customer['street_customer'])])}
      </div>

      <div class="form-group">
        <label for="city_customer" id="city_customer" class="control-label">Miasto</label>
          {form_input(['name'=>'city_customer', 'class'=>'form-control', 'placeholder'=>'Miasto Klienta', 'value'=>set_value('city_customer',$customer['city_customer'])])}
      </div>

      <div class="form-group">
        <label for="post_code_customer" id="post_code_customer" class="control-label">Kod Pocztowy</label>
          {form_input(['name'=>'post_code_customer', 'class'=>'form-control', 'placeholder'=>'Kod Pocztowy', 'value'=>set_value('post_code_customer',$customer['post_code_customer'])])}
      </div>

      <div class="form-group">
        <label for="customerDescription" id="customerDescription" class="control-label">Dodatkowy opis</label>
          {form_textarea(['name'=>'description_customer', 'rows'=>'5', 'class'=>'form-control', 'placeholder'=>'Dodatkowy Opis', 'value'=>set_value('description_customer',$customer['description_customer'])])}
      </div>

  <div class="form-group">

      {form_submit(['value'=>'Aktualizuj', 'class'=>'btn btn-success btn-block'])}

    </div>
  </div>
</fieldset>
    {form_close()}
</form>
</div>
{include file="footer.tpl"}
{/block}
