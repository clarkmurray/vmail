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

             <div class="panel panel-default">
                <div class="panel-heading"><h2>Reply</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/messages">
                        {{ csrf_field() }}
                        
                        <input name="recipient" type="hidden" value="{{ $message->sender->name }}">
                        <input name="subject" type="hidden" value="{{ $message->subject }}">
                        <div class="form-group">
                            <label for="messageContent">Message:</label>
                            <textarea class="form-control" id="messageContent" name="messageContent" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>

                </div>
            </div>

		</div>
	</div>
</div>

@endsection