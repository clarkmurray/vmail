@extends('layouts.app')

@section('content')

	@foreach ($conversation as $message)
		<div>
			<li>{{ $message->sender->name }}</li>
			<li>{{ $message->created_at }}</li>
			<li>{{ $message->body }}</li>
		</div>
	@endforeach
	

@endsection