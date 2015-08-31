@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
        <div class="panel-heading">Inventory</div>
				<div class="panel-body home-cards" align="center">
          <div class="row">
            <div class="col-md-12" >
              <a class="btn btn-primary" href="/products/">Products</a>
              <span>3</span>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-primary" href="/products/">Brands</a>
              <span>3</span>
            </div>
            <div class="col-md-6">
              <a class="btn btn-primary" href="/products/">Manufacturers</a>
              <span>3</span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-primary" href="/products/">Accessories</a>
              <span>3</span>
            </div>
            <div class="col-md-6">
              <a class="btn btn-primary" href="/products/">Locations</a>
              <span>3</span>
            </div>
          </div>
    
    
				</div>
			</div>
		</div>
	</div>
</div>
<style>
.home-cards > .row {
  margin: 20px;
}
</style>
@endsection
