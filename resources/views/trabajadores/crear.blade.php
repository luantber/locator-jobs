@extends('layouts.app2')

@section('content')

<div class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p>Necesitamos que llenes algunos datos para que puedas publicar un trabajo:</p>
      <form class="" action="index.html" method="post">
        <div class="field">
          <label class="label">Label</label>
          <div class="control">
            <input class="input" type="text" placeholder="DNI">
          </div>
          <p class="help">Tu DNI no será publicado</p>
          </div>
      </form>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Save changes</button>
      <button class="button">Cancel</button>
    </footer>
  </div>
</div>

@endsection('content')
