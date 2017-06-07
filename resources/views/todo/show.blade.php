<div class="modal fade" id="show" role="dialog">
  <div class="modal-dialog"
    <div class="modal-content">
      {!! Form::open{['method' => 'post', 'action' => 'TodoController@show', 'class' => 'form-horizontal']} !!}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Show title</h4>
      </div>

      <div class="modal-body">

          @include('todo.show')

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      {!! form::close() !!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
