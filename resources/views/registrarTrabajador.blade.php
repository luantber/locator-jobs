<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Necesitamos algunos datos para continuar:</h5>

        <a href="{{asset('/')}}">
        <button type="button" class="close">
          <span aria-hidden="true"><i class="material-icons">navigate_before</i></span>
        </button>
        </a>

      </div>
      <div class="modal-body">
      Esta información no será publicada:
        <form method="post" action="/trabajadores">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">DNI</label>
            <input type="number" class="form-control" id="recipient-name" name="dni">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Escriba una breve descripción sobre usted</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descr"></textarea>
          </div>
         
          <div class="col-md-2 offset-md-4">
            <button type="submit" class="btn btn-primary">Continuar</button>
          </div>
      </form>
    </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#myModal').modal({
    keyboard: false,
    backdrop: 'static'
  });

  $('#myModal').modal('show');

</script>