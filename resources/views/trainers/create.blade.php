@extends('layouts.app')

@section('title','Trainers Create')

@section('content')
	<form action="/trainers" method="POST" class="form-group">
		@csrf
		<div class="container">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="name" class="form-control">
			</div>

			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</form>
@endsection