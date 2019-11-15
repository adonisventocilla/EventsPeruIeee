<div class="form-group">
        <form action="{{ route('hostdetails.store') }}" method="POST">
                @csrf
            <!--
                'event_id',
                'contactEmail',
                'cosponsor',
                'extraContactInformation',
                'surveyUrl',
                'institute_id',
            -->
            <div class="form-group">
                <label class="sr-only" for="event_id">Event_id</label>
                <input type="text" class="form-control" name="event_id" id="event_id" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Email de contacto:</label>
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
              <label for="">Co-sponsor:</label>
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
              <label for="">Información de contacto extra:</label>
              <textarea class="form-control" name="" id="" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label for="">Survey Url:</label>
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="form-group">
              <label for="institute_id">Institución a la que pertenece:</label>
              <select class="form-control form-control-sm" name="institute_id" id="institute_id">
                <option></option>
                <option></option>
                <option></option>
              </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Continuar</button>
        </form>
    </div>             
            