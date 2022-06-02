{extends file="header.tpl"}
{block name="title"}Aktualizacja uprawnień{/block}
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
    {form_open("/rbac/permision/update/{$permision['id_permisions']}", 'accept-charset="utf-8"')}
    <h3 align="center">Aktualizacja Uprawnienia</h3>
    <fieldset>
      <div class="form-group">
        <label for="customerDate" class="col-lg-4 control-label">Nazwa Uprawnienia</label>
          {form_input(['name'=>'name_permisions', 'class'=>'form-control', 'placeholder'=>'Nazwa statusu zlecenia', 'value'=>set_value('name_permisions',$permision['name_permisions'])])}
      </div>

      <div class="form-group">
        <label for="customerDate" class="control-label">Akcja z kontrolera</label>
          {form_input(['name'=>'action_permissions', 'class'=>'form-control', 'placeholder'=>'Akcja kontrolera', 'value'=>set_value('action_permissions',$permision['action_permissions'])])}
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
