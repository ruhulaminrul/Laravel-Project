@extends("layout.app")
@section("content")
<div class="container">

		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Oh snap!</strong>{{ $error }}
				</div>
			@endforeach
		@endif




	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panei-title"> Add new </h3>
			
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('store') }}" method="POST">
					{{ csrf_field() }}
					<fieldset>
						<div class="form-group">
							<label for="problemName" class="col-md-2 control-label">Problem Name</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="problemName" placeholder="Problem Name">
							</div>
						</div>
						<div class="form-group">
							<label for="onlineJudge" class="col-md-2 control-label">Online judge</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="onlineJudge" placeholder="Online Judge">
							</div>
						</div>
						
						<div class="form-group">
							<label for="link" class="col-md-2 control-label">Problem link</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="link" placeholder="Problem link">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-2">
								<button type="button" class="btn btn-default">Cancel</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			
		</div>
	</div>
</div>
@endsection