{extends file="header.tpl"}
{block name="title"}Kalendarz{/block}
{block name="body"}
<input type="hidden" value="{$base_url}" id="base_url"/>
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="page-header">
    		<h1> Kalendarz </h1>
    	</div>

    <div id="calendar">
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Dodaj wydarzenie</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        {form_open('Calendar/add_event', 'accept-charset="utf-8" class="form-horizontal"')}
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Nazwa</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Opis</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data rozpoczęcia</label>
                <div class="col-md-8">
                    <input type="text" readonly="readonly" class="form-control" name="start_date" id="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data zakończenia</label>
                <div class="col-md-8">
                    <input type="text" readonly="readonly" class="form-control" id="end_date" name="end_date">
                </div>
        </div>
        <div class="form-group">
        <label for="p-in" class="col-md-4 label-heading">Kolor wydarzenia</label>
        <div class="col-md-8">
          <select class="color" name="color">
            <option value="#008000"></option>
            <option value="#FF0000"></option>
            <option value="#000000"></option>
            <option value="#00FFFF"></option>
            <option value="#0000FF"></option>
            <option value="#FF00FF"></option>
          </select>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add Event">
        {form_close()}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Aktualizacja/Usuwanie Wydarzenia</h4>
      </div>
      <div class="modal-body">
      {form_open('Calendar/edit_event', 'accept-charset="utf-8" class="form-horizontal"')}
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Nazwa</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="name">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Opis</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data rozpoczęcia</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="start_date_edit">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data zakończenia</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date_edit">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Usunąć wydarzenie?</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
        <input type="submit" class="btn btn-primary" value="Wykonaj">
        {form_close()}
      </div>
    </div>
  </div>
</div>
    </div>

    </div>
    </div>
    </div>
{include file="footer.tpl"}
{/block}
