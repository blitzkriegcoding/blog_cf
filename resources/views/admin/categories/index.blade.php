@extends('admin.template.main')

@section('title', 'Listado de categorias')

@section('content')
	<a class="btn btn-success" href="{{ route('admin.categories.create') }}">Registrar nueva categoría</a><hr>
	<table class="table table-striped">		
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }} </td>
					<td>{{ $category->name }} </td>
					<td><a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-wrench"></i> </a>	<a href="{{ route('admin.categories.destroy', $category->id) }} " class="btn btn-danger"><i class="glyphicon glyphicon-remove-circle"></i></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $categories->render() !!}
@endsection