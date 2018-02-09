@extends('main')

@section('title', '| View Post' )

@section('content')

<div class="row">
	<div class="col-md-8" >
		<h1>{{ $post->title }}</h1>

		<p class="lead">{{ $post->body }}</p>
	</div>
	
	<div class="col-md-4">
		<div class="well">

			<dl class="dl-horizontal">
				<label>Url:</label>
				<p><a href="{{ url('/'.$post->slug) }}">{{ url('/'.$post->slug) }}</a></p>
			</dl>

			<dl class="dl-horizontal">
				<label>created at:</label>
				<p>time</p>
			</dl>

			<dl class="dl-horizontal">
				<label>last updated:</label>
				<p>time</p>
			</dl>
			<hr>

			<div class="row">

				<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block'))!!}
				</div>

				<div class="col-sm-6">
					{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

					{!!Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

					{!! Form::close() !!}
				</div>

			</div>

			<div class="row">
				<div class="col-sm-12">
					{{ Html::linkRoute('posts.index', '<< see all posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
				</div>
			</div>
					

		</div>
	</div>
</div>


@endsection