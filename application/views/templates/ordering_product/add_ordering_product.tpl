{extends file="header.tpl"}
{block name="title"}Dodanie rekordu zamówienia{/block}
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
    {form_open('ordering_product/save', 'accept-charset="utf-8", id="carpet_form"')}
    <fieldset>
      <legend>Dodaj pozycję zamówienia</legend>

      {form_input(['name'=>'id_ordering', 'class'=>'form-control', 'id'=>'id_ordering' , 'hidden'=>'hidden', 'value'=>$id_ordering])}

        <div class="form-group">
          <label for="customerName" class="control-label">Rodzaj Dywanu</label>
                <!-- {form_dropdown(['name'=>'product_id', 'id'=>'dywanySelect', 'class'=>'form-control', 'options' =>$data["priceLists"]])} -->
          <select class="form-control listener" name="id_product" id="dywanySelect">
          {foreach from=$data['priceLists'] key=$key item=$val}
          <option value="{$key}" data-price="{$val['price_for_meter']}">{$val['name_product']}</option>
          {/foreach}
          </select>
        </div>

        <div class="form-group">
          <label for="customerSurname" class="control-label">Wymiar [m<sup>2</sup>]</label>
          {form_input(['name'=>'size_ordering_product', 'class'=>'form-control listener', 'id'=>'size_ordering_product' , 'readonly'=>'readonly', 'value'=>set_value('size_ordering_product')])}
        </div>

        <div class="form-group">
          <label for="customerSurname" class="control-label">Cena [zł]</label>
          {form_input(['name'=>'price_ordering_product', 'class'=>'form-control listener', 'id'=>'price_ordering_product' , 'readonly'=>'readonly', 'value'=>set_value('price_ordering_product')])}
        </div>

          <input type="hidden" value="{$url}" id="url"/>

          <div class="form-group">
            <label for="Długość" id="Login" class="control-label">Długość</label>
            <input id="wysokosc" class="form-control" type="number" step="0.01">
          </div>
          <div class="form-group">
          <label for="customerSurname" class="control-label listener">Szerokość:</label>
            <input id="szerokosc" class="form-control listener" type="number" step="0.01"><br>
          </div>
            Dodatkowe opcje:<br>
            <input id="checkbox1" class="listener" type="checkbox">Usuwanie Zapachów
            <input id="checkbox2" class="listener" type="checkbox">Program Antyalergiczny<br>
            Frędzle:<br>
            <input type="radio" class="listener" value='Tak' name="frendzle">Tak
            <input type="radio" class="listener" value='Nie' checked="checked" name="frendzle">Nie<br>
            <div id="fredzle" class="fredzle">
              <div id="fredzle_name">
            Długość Frędzli:<br>
              </div>
              <input id="dlugoscFrendzli" class="listener" type="number"><br>
            </div>


            <div class="form-group">
              {form_submit(['value'=>'Submit', 'class'=>'btn btn-success btn-block'])}
              {form_reset(['value'=>'Reset', 'class'=>'btn btn-warning btn-block'])}

          </div>
</fieldset>
    {form_close()}
</form>
</div>
{include file="footer.tpl"}
{/block}
