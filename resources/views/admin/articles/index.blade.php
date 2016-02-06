@extends('admin.template.main')

@section('title','Articulos')

@section('content')
<a class="btn btn-success" href="{{ route('admin.articles.create') }}">Registrar nuevo artículo</a>
		<!-- BUSCADOR DE ARTICULOS -->
			{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}				
				<div class="input-group">					
					{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo...', 'aria-describedby' => 'search']) !!}
					<span class="input-group-addon" id="search">
						<span class="glyphicon glyphicon-search" aria-hidden="true">							
						</span>
					</span>
				</div>				
			{!! Form::close() !!}
		<!-- FIN BUSCADOR DE ARTICULOS -->
<hr>

	<table class="table table-striped">		
		<thead>
			<tr>
				<th>ID</th>
				<th>Título</th>
				<th>Categoría</th>
				<th>Usuario</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td class="col-md-1" > {{ $article->id }} </td>
					<td class="col-md-5"> {{ $article->title }} </td>
					<td> {{ $article->category->name }} </td>
					<td> {{ $article->user->name }} </td>
					<td><a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-wrench"></i> </a>	<a href="{{ route('admin.articles.destroy', $article->id) }} " class="btn btn-danger"><i class="glyphicon glyphicon-remove-circle"></i></a></td>					
				</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	<div class="text-center">
		{!! $articles->render() !!}
	</div>
@endsection