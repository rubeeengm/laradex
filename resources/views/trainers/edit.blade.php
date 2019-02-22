@extends('layouts.app')

@section('title', 'Trainers - Edit')

@section('content')
	<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control" value="{{$trainer->name}}">
		</div>

		<div class="form-group">
			<label>Avatar</label>
			<input type="file" name="avatar">
		</div>

		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
@endsection