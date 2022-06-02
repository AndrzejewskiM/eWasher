{extends file="header.tpl"}
{block name="title"}Zmiana hasła{/block}
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
    {form_open('Worker/save', 'accept-charset="utf-8"')}
        <h3 align="center">Zmień hasło</h3>
        <fieldset>
<div class="form-group">
  <label for="creation_date" class="control-label">Hasło</label>
    {form_input(['name'=>'password', 'type'=>'password' ,'class'=>'form-control','id'=>'password' , 'value'=>set_value('password',$pricelist['name_product'])])}
</div>

<div class="form-group">
  <label for="creation_date" class="control-label">Potwierdzenie Hasła</label>
    {form_input(['name'=>'password_confirm','type'=>'password', 'class'=>'form-control','id'=>'password_confirm' , 'value'=>set_value('password_confirm')])}
</div>

<div class="form-group">

  {form_submit(['value'=>'Submit', 'class'=>'btn btn-success btn-block'])}

  </div>
</div>
</fieldset>
  {form_close()}
</form>
</div>
{include file="footer.tpl"}
{/block}
