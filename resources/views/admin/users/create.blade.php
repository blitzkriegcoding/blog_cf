@extends('admin.template.main')

@section('title','Crear usuario')

@section('content')

	
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre: ') !!}
			{!! Form::text('name',NULL,['class' => 'form-control', 'placeholder' => 'Nombre del usuario', 'required']) !!}
		</div>		

		<div class="form-group">
			{!! Form::label('email', 'Correo electrónico: ') !!}
			{!! Form::text('email',NULL,['class' => 'form-control', 'placeholder' => 'ejemplo@mail.com', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Contraseña: ') !!}
			{!! Form::password('password',['class' => 'form-control', 'placeholder' => '***************', 'required']) !!}
		</div>		

		<div class="form-group">
			{!! Form::label('type', 'Tipo de usuario: ') !!}
			{!! Form::select('type',['' => 'SELECCIONE UN NIVEL','member' => 'MIEMBRO', 'admin' => 'ADMINISTRADOR'],null,['class' => 'form-control']) !!}
		</div><br>
		<div class="form-group">
			
			{!! Form::submit('Registrar usuario', ['class' => 'btn btn-success']) !!}
		</div>



	{!! Form::close() !!}
@endsection