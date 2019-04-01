@extends('layouts.app')

@section('title', 'Trainers - Edit')

@section('content')
	@include('common.errors')
	
	{!! Form::model($trainer,[	
			'route' => ['trainers.update', $trainer],
			'method' =>'PUT',
			'files' => true
		])
	!!}
		
		@include('trainers.form')

		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection