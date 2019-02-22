@extends('layouts.app')

@section('title','Trainers Create')

@section('content')
	<form action="/trainers" method="POST" class="form-group" enctype="multipart/form-data">
		@csrf
		<div class="container">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label>Avatar</label>
				<input type="file" name="avatar">
			</div>

			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</form>
@endsection