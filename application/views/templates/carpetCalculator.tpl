{extends file="header.tpl"}
{block name="title"}Strona Główna{/block}
{block name="body"}
<div class="container-fluid bg">
  {if $smarty.session.success}
  <div class="alert alert-dismissible alert-success">
    {$smarty.session.success}
  </div>
  {/if}
  {if $smarty.session.false}
  <div class="alert alert-dismissible alert-warning">
    {$smarty.session.false}
  </div>
  {/if}
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class ="form-container">
        <h3>Kalkulator</h3>
        <fieldset>
          <input type="hidden" value="{$url}" id="url"/>
          <div class="form-group">
            <label id="Login" class="control-label">Rodzaj Dywanu</label>
              {html_options name='dywany' class='form-control' options=$dywany id="dywanySelect"}
          </div>
  <div class="form-group">
    <label class="control-label">Długość</label>
        <input id="wysokosc" type="number" min="0" max="10" class="form-control" name="firstname">
  </div>
  <div class="form-group">
    <label class="control-label">Szerokość</label>
        <input id="szerokosc" type="text" class="form-control" name="firstname">
  </div>

  <div class="form-group">
    <label class="control-label">Dodatkowe opcje:</label><br>
    <input id="checkbox1" type="checkbox">Usuwanie Zapachów
    <input id="checkbox2" type="checkbox">Program Antyalergiczny<br>
  </div>
  <div class="form-group">
    <label class="control-label">Frędzle:</label><br>
    <input type="radio" value='Tak' name="frendzle">Tak
    <input type="radio" value='Nie' name="frendzle">Nie<br>
  </div>

  <div class="form-group">
    <label class="control-label">Długość Frędzli:</label>
      <input id="dlugoscFrendzli" class="form-control" type="text" name="firstname"><br>
  </div>
      <input id="calculateButton" class="btn btn-success btn-block" type="button" value="Oblicz Koszt">
      </fieldset>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
</div>
</div>
</div>
</div>
{include file="footer.tpl"}
{/block}
