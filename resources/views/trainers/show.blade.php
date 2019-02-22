@extends('layouts.app')

@section('title','Trainer')

@section('content')
	<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" src='/images/{{$trainer->avatar}}' alt="" class="card-img-top rounded-circle mx-auto d-block">
	<div class="text-center">
		<h5 class="card-title">{{$trainer->name}}</h5>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
		</p>

		<a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>

		{!! Form::open([	
			'route' => ['trainers.destroy', $trainer->slug],
			'method' => 'DELETE'
		]) !!}

			{!! Form::submit(
				'Eliminar',
				['class' => 'btn btn-danger']
			) !!}

		{!! Form::close() !!}
	</div>
@endsection