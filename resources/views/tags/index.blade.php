@extends('main')

@section('title', '| All Categories')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				
				@foreach ($tags as $tag)
				<tbody>
					<tr>
						<th>{{ $tag->id }}</th>
						<td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }} </a></td>
					</tr>
				</tbody>
				@endforeach

			</table>
		</div> <!--end of col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
				<h2>New Tag</h2>

				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				<br>
				{{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block']) }}


				{!! Form::close() !!}					
			</div>
		</div>



	</div>

@endsection