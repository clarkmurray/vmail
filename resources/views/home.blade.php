@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inbox</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                    <tr>
                        <th></th>
                        <th>From</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th></th>
                    </tr>

                    @foreach ($messages as $message)
                    <tr class="@if (!$message->is_read) read @endif">
                        <td>
                            @if ($message->is_starred) 
                                <strong>&#9734;</strong>
                            @endif
                        </td>
                        <td>{{ $message->sender->name }}</td>
                        <td><a href="/message/{{ $message->id }}">{{ $message->subject }}</a></td>
                        <td>{{ $message->created_at->toDayDateTimeString() }}</td>
                        <td>
                            <form method="post" action="/star/{{ $message->id }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            <button type="submit"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addMessage')

<div class="container">
  <div class="row">
        <div class="col-m8-8">
            <button class="btn btn-primary">New Message</button>
        </div>
    </div>
</div>

@endsection
