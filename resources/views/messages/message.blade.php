@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>{{ $message->subject }}</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

					<p>From: {{ $message->sender->name }}</p>
					<p>Sent at: {{ $message->created_at }}</p>
					<p>{{ $message->body }}</p>
					<button class="btn btn-primary">Mark as Starred</button>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection