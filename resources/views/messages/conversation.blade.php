@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Conversation</div>

	@foreach ($conversation as $message)
	<div class="panel panel-default">
        <div class="panel-heading">{{ $message->sender->name }}</div>
        <div class="panel-body">
			{{ $message->body }}
		</div>
	</div>
	@endforeach

</div>
</div>
</div>
</div>
	

@endsection