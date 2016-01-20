@extends('admin.template.main')

@section('title','Editar usuario '.$user->name)

@section('content')
	{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre: ') !!}
			{!! Form::text('name',$user->name,['class' => 'form-control', 'placeholder' => 'Nombre del usuario', 'required']) !!}
		</div>		

		<div class="form-group">
			{!! Form::label('email', 'Correo electrónico: ') !!}
			{!! Form::text('email',$user->email,['class' => 'form-control', 'placeholder' => 'ejemplo@mail.com', 'required']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('type', 'Tipo de usuario: ') !!}
			{!! Form::select('type',['' => 'SELECCIONE UN NIVEL','member' => 'MIEMBRO', 'admin' => 'ADMINISTRADOR'],$user->type,['class' => 'form-control']) !!}
		</div><br>
		<div class="form-group">
			
			{!! Form::submit('Editar usuario', ['class' => 'btn btn-success']) !!}
		</div>



	{!! Form::close() !!}
@endsection