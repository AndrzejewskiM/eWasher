{extends file="header.tpl"}
{block name="title"}Logowanie{/block}
{block name="navbar"}{/block}
{block name="body"}  <div class="container-fluid bg">
    {if $smarty.session.false}
    <div class="alert alert-dismissible alert-warning">
      {$smarty.session.false}
    </div>
    {/if}
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <!--Początek Formularza-->
        <div class ="form-container">
        {form_open('Login/tryToLogin', 'accept-charset="utf-8"')}
        <h1 align="center">eWasher</h1>
          <fieldset>
            <div class="form-group">
              <label for="Login" id="Login" class="control-label">Login</label>
                {form_input(['name'=>'Login', 'class'=>'form-control', 'placeholder'=>'Login', 'value'=>set_value('Login')])}
            </div>

            <div class="form-group">
              <label for="Password" class="control-label">Hasło</label>
                {form_input(['name'=>'Password','id'=>'Password','type'=>'Password', 'class'=>'form-control', 'placeholder'=>'Hasło', 'value'=>set_value('Password')])}
            </div>

                {form_submit(['value'=>'Zaloguj się', 'class'=>'btn btn-success btn-block'])}

              </fieldset>
  {form_close()}
        <!--Koniec Formularza-->
      </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
    </div>
  </div>
</div>
{include file="footer.tpl"}{/block}
