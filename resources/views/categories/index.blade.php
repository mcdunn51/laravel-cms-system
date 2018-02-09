@extends('main')

@section('title', '| All Categories')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				
				@foreach ($categories as $category)
				<tbody>
					<tr>
						<th>Id Number</th>
						<td>Name</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

@endsection