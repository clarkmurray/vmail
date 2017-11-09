@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Outbox</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

				<table class="table">
					<tr>
						<th></th>
			            <th>To</th>
			            <th>Subject</th>
			            <th>Date</th>
			            <th></th>
			        </tr>

			    @foreach ($messages as $message)

			        <tr>
			        	<td></td>
			            <td>{{ $message->recipient->name }}</td>
			            <td><a href="/message/{{ $message->id }}">{{ $message->subject }}</a></td>
			            <td>{{ $message->created_at->toDayDateTimeString() }}</td>
			            <td> 
			            	<form method="post" action="/messages/{{ $message->id }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            <button type="submit"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                            </form>
                        </td>
			        </tr>

			    @endforeach

			    </table>


				</div>
			</div>
		</div>
	</div>
</div>


@endsection