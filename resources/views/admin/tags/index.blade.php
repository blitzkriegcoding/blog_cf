@extends('admin.template.main')

@section('title','Listado de tags')

@section('content')
	
		<a class="btn btn-success" href="{{ route('admin.tags.create') }}">Registrar nuevo tag</a>	
		<!-- BUSCADOR DE TAGS -->
			{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}				
				<div class="input-group">					
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag..', 'aria-describedby' => 'search']) !!}
					<span class="input-group-addon" id="search">
						<span class="glyphicon glyphicon-search" aria-hidden="true">							
						</span>
					</span>
				</div>				
			{!! Form::close() !!}
		<!-- FIN BUSCADOR DE TAGS -->	
	
	<hr>
	<table class="table table-striped">		
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->id }} </td>
					<td>{{ $tag->name }} </td>
					<td><a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-wrench"></i> </a>	<a href="{{ route('admin.tags.destroy', $tag->id) }} " class="btn btn-danger"><i class="glyphicon glyphicon-remove-circle"></i></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $tags->render() !!}	
@endsection