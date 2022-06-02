{extends file="header.tpl"}
{block name="title"}Dodanie pracownika{/block}
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
        <h3 align="center">Dodaj pracownika</h3>
        <fieldset>
        <div class="form-group">
              <label for="name_product" class="control-label">Login pracownika</label>
                {form_input(['name'=>'login', 'class'=>'form-control','id'=>'login' , 'value'=>set_value('login')])}
                {form_error('login')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Hasło</label>
            {form_input(['name'=>'password', 'type'=>'password' ,'class'=>'form-control','id'=>'password' , 'value'=>set_value('password')])}
            {form_error('password')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Potwierdzenie Hasła</label>
            {form_input(['name'=>'password_confirm','type'=>'password', 'class'=>'form-control','id'=>'password_confirm' , 'value'=>set_value('password_confirm')])}
            {form_error('password_confirm')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Imię pracownika</label>
            {form_input(['name'=>'name_worker', 'class'=>'form-control', 'id'=>'name_worker' , 'value'=>set_value('name_worker')])}
            {form_error('name_worker')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Nazwisko pracownika</label>
            {form_input(['name'=>'surname_worker', 'class'=>'form-control', 'id'=>'surname_worker' , 'value'=>set_value('surname_worker')])}
            {form_error('surname_worker')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Numer telefonu</label>
            {form_input(['name'=>'phone_worker', 'class'=>'form-control', 'id'=>'phone_worker' , 'value'=>set_value('phone_worker')])}
            {form_error('phone_worker')}
        </div>

        <div class="form-group">
          <label for="creation_date" class="control-label">Rola</label>
            {form_dropdown(['name'=>'role_id', 'class'=>'js-example-basic-single form-control', 'options' =>$roles])}
        </div>

  <div class="form-group">


    {form_submit(['value'=>'Submit', 'class'=>'btn btn-success btn-block'])}
    {form_reset(['value'=>'Reset', 'class'=>'btn btn-warning btn-block'])}

    </div>
  </div>
</fieldset>
    {form_close()}
</form>
</div>
{include file="footer.tpl"}
{/block}
