@extends('main')

@section('title', '| View Post' )

@section('stylesheet')

{!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')

<div class="row">
	{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
	

	<div class="col-md-8" >

		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

		<br>
		{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
		{{ Form::text('slug', null, ["class" => 'form-control']) }}

		<br>
		{{ Form::label('category_id', "Category:") }}
		{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

		<br>
		{{ Form::label('tags', "Tags:") }}
		{{ Form::select('tags[]', $tags, null, ['class' =>'select2-multi form-control', 'multiple' => 'multiple']) }}


		<br>
		{{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
		{{ Form::textarea('body', null, ['class' => 'form-control']) }}
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>created at:</dt>
				<dd>time</dt>
				</dl>

				<dl class="dl-horizontal">
					<dt>last updated:</dt>
					<dd>time</dt>
					</dl>
					<hr>

					<div class="row">

						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block'))!!}
						</div>

						<div class="col-sm-6">
							{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) }}
						</div>


					</div>



				</div>
			</div>
			{!! Form::close() !!}
		</div> <!-- end of row-->

		@endsection

		@section('script')

		{!! Html::script('js/select2.min.js') !!}
		
		<script type="text/javascript">
			$('.select2-multi').select2();
		</script>

		@endsection