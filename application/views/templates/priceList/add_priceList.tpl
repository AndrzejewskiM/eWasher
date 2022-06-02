{extends file="header.tpl"}
{block name="title"}Dodanie produktu do oferty{/block}
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
    {form_open('pricelist/save', 'accept-charset="utf-8"')}
        <h3 align="center">Dodaj produkt do cennika</h3>
        <fieldset>
        <div class="form-group">
              <label for="name_product" class="col-lg-4 control-label">Nazwa produktu</label>
                {form_input(['name'=>'name_product', 'class'=>'form-control', 'placeholder'=>'Nazwa', 'value'=>set_value('name_product')])}
                {form_error('name_product')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Typ produktu</label>
            {form_input(['name'=>'type_product', 'class'=>'form-control', 'placeholder'=>'Typ', 'value'=>set_value('type_product')])}
            {form_error('type_product')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Dodatkowy opis</label>
            {form_textarea(['name'=>'description_product', 'class'=>'form-control','rows'=>'5', 'placeholder'=>'Dodatkowy Opis', 'value'=>set_value('description_product')])}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Cena za m<sup>2</sup></label>
            {form_input(['name'=>'price_for_meter', 'class'=>'form-control', 'placeholder'=>'Cena Metra Kwadratowego', 'value'=>set_value('price_for_meter')])}
            {form_error('price_for_meter')}
        </div>


  <div class="form-group">


    {form_submit(['value'=>'Dodaj', 'class'=>'btn btn-success btn-block'])}
    {form_reset(['value'=>'Reset', 'class'=>'btn btn-warning btn-block'])}

    </div>
  </div>
</fieldset>
    {form_close()}
</form>
</div>
{include file="footer.tpl"}
{/block}
