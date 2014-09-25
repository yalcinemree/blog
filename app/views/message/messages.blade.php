@if(Session::get('message')) 
	<div class="alert alert-success">
		{{ Session::get('message') }}
	</div>
@endif

@if(Session::get('error'))
	<div class="alert alert-warning">
		{{ Session::get('error') }}
	</div>
@endif
