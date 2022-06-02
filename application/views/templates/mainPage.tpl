{include file="header.tpl"}
<div class="container">
<div class="row">
  <div class="col-sm-3">
    <a href="{site_url('customer')}">
    <div class="card color2">
      <p class="cat"></p>
       <h4><strong>Klienci</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}Klienci">
    <div class="card color3">
      <p class="cat">{$translations['_table']}</p>
       <h4><strong>{$translations['_delkom40']}</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ebi">
    <div class="card color6">
      <p class="cat">{$translations['_table']}</p>
       <h4><strong>{$translations['_ebi']}</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}historia">
    <div class="card color4">
      <p class="cat">{$translations['_data']}</p>
       <h4><strong>{$translations['_history']}</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}driver">
    <div class="card color5">
      <p class="cat">{$translations['_dictionaries']}</p>
       <h4><strong>{$translations['_drivers']}</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3">
  <a id="reports">
    <div class="card color6">
      <p class="cat">{$translations['reports']}</p>
       <h4><strong>{$translations['generate_report']}</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3" hidden>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}">
    <div class="card color7">
      <p class="cat">Xx</p>
       <h4><strong>Xx</strong></h4>
    </div>
  </a>
  </div>
  <div class="col-sm-3" hidden>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}">
    <div class="card color8">
      <p class="cat">Xx</p>
       <h4><strong>Xx</strong></h4>
    </div>
  </a>
  </div>

</div>
</div>
{include file="footer.tpl"}
