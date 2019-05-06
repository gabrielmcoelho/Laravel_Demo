@extends('layout')

@section('content')

	<h1 class="title" style="margin-top: 30px;">Create a New Project</h1>

	<form action="/projects" method="POST">
		{{ csrf_field() }}

		<div class="field">
			<label class="label" for="title">Title</label>
			<div class="control">
				<input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Title" value="{{ old('title')}}">
			</div>
		</div>

		<div class="field">
			<label class="label" for="description">Description</label>
			<div class="control">
				<textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" >{{ old('description')}}</textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button class="button is-link" type="submit">Create Project</button>
			</div>
		</div>

	</form>

	@if ($errors->any())
		<div class="notification is-danger" style="margin-top: 20px;">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

@endsection