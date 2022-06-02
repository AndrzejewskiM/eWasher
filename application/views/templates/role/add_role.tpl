{extends file="header.tpl"}
{block name="title"}Dodanie roli{/block}
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
    {form_open('/rbac/Role/save', 'accept-charset="utf-8"')}
        <h3 align="center">Dodaj Role</h3>
        <fieldset>
        <div class="form-group">
              <label for="name_product" class="col-lg-4 control-label">Nazwa roli</label>
                {form_input(['name'=>'name_roles', 'class'=>'form-control', 'placeholder'=>'Nazwa statusu zlecenia', 'value'=>set_value('name_roles')])}
                {form_error('name_roles')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Nadane uprawnienia</label>
            {form_dropdown(['name'=>'permissions[]', 'id'=>'customerDate','multiple'=>'multiple','class'=>'selectBox form-control', 'options' =>$permissions])}
            {form_error('permissions[]')}
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
