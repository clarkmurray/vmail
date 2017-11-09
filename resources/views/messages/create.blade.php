@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Message</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

							<form method="POST" action="/messages">
								{{ csrf_field() }}

								<div class="form-group">
									<label for="recipient">To:</label><input type="text" class="form-control" id="recipient" name="recipient" required>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label><input type="text" class="form-control" id="subject" name="subject" required>
								</div>
								<div class="form-group">
									<label for="messageContent">Message:</label>
									<textarea class="form-control" id="messageContent" name="messageContent" required></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Send</button>
								</div>

								@if (count($errors))
                    				<div class="alert alert-danger">
                    					<ul>
                    						@foreach ($errors->all() as $error)
                    							<li>{{ $error }}</li>
                    						@endforeach
                    					</ul>
                    				</div>
                    			@endif

							</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection