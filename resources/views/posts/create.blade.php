@extends('main')

@section('title', '| Create New Post')

@section('stylesheet')

{!! Html::style('css/select2.min.css') !!}

@endsection

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

			{{ Form::label('category_id', 'Category:') }}

			<select class="form-control" name="category_id">
				@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
			</select>


			{{ Form::label('tags', 'Tags:') }}
			<select class="form-control select2-multi" name="tags[]" multiple="multiple">
				
				@foreach($tags as $tag)

				<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				@endforeach

			</select>


			<div class="form-group">
				<label name="body">Post body:</label>
				<textarea rows="5" id="message" name="body" class="form-control" placeholder="Type your message here..."></textarea>
			</div>

			<input type="submit" value="create post" class="btn btn-success">
		</form>
	</div>
</div>
@endsection

@section('script')

{!! Html::script('js/select2.min.js') !!}

<script type="text/javascript">
	$('.select2-multi').select2();
</script>

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


