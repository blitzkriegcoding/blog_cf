@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
<br>
	<a href="{{ route('admin.users.create') }}" class="btn btn-success">Registrar nuevo usuario</a>
<br><br>
	<table class="table table-stripped">
		<thead>		
				<th>ID</th>			
				<th>Nombre</th>			
				<th>Correo electrónico</th>			
				<th>Tipo</th>			
				<th>Acción</th>							
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td> {{$user->id}}  </td>
					<td> {{$user->name}}  </td>
					<td> {{$user->email}}  </td>
					<td> 
					 @if($user->type=='admin')
					 	<span class="label label-danger">
					 		{{$user->type}}  	
					 	</span>				 
					@else
						<span class="label label-primary">
					 		{{$user->type}}  	
					 	</span>				 						
					@endif
					</td>
					<td> <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-wrench"></i> </a>	<a href="{{ route('admin.users.destroy', $user->id) }} " class="btn btn-danger"><i class="glyphicon glyphicon-remove-circle"></i></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
@endsection