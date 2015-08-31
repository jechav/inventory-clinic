@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
        <div class="panel-heading">Inventory</div>
				<div class="panel-body home-cards">

          <div class="row">

            <table class="table table-striped">
            <thead>
              <th>id</th>
              <th>Name</th>
              <th>Logo</th>
              <th>Actions</th>
            </thead>
            <tbody>
              @foreach($manufactures as $item)
              <tr>
                <td>{{ $item->id }} </td>
                <td>{{ $item->Name}} </td>
                <td><img src="http://placehold.it/350x350" alt="" class="img-rounded img-responsive"></td>
                <td>
                  <button class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                  <button class="btn btn-sm btn-info"><i class="glyphicon glyphicon-pencil"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>

          </div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<style>
</style>
@endsection
