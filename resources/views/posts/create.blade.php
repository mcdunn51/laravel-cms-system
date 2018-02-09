@extends('main')

@section('title', '| Create New Post')

@section('content')

<div class="row">

	<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
		<form method="post" action="/posts">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<label name="title">Title:</label>
				<input id="email" name="title" class="form-control">
			</div>

			{{ Form::label('slug', 'Slug:') }}
			{{ Form::text('slug', null, array('class' => 'form-control', 'required'=> '', 'minlength' => '5', 'maxlength' => '255'))}}

			<div class="form-group">
				<label name="body">Post body:</label>
				<textarea rows="5" id="message" name="body" class="form-control" placeholder="Type your message here..."></textarea>
			</div>

			<input type="submit" value="create post" class="btn btn-success">
		</form>
	</div>
</div>
@endsection



{{-- Another way to create the above form would be

<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
		{{!! Form::open(array('route' => 'posts.store')) !!}
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', null, array('class' => 'form-control')) }} 

		{{ Form::label('body', "Post Body:") }}
		{{ Form::textarea ('body', null, array('class' => 'form-control'))  }}
	{{ Form::submit('Create Post', array ('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px')) }}
	{!! Form::close() !!}
</div>	 --}}	


