@extends('admin.template.main')

@section('title','Editar artículo '.$article->title)

@section('content')
	{!! Form::open(['route' => ['admin.articles.update', $article] ,'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Titulo del articulo') !!}
			{!! Form::text('title', $article->title, ['class' => 'form-control', 'required', 'placeholder' => 'Titulo del articulo']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('category_id', 'Categoría: ') !!}
			{!! Form::select('category_id', $categories, $article->category->id,['class' => 'form-control select-category', 'placeholder' => 'Seleccione una opción' ,'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('content', 'Contenido del artículo: ') !!}
			{!! Form::textarea('content', $article->content ,['class' => 'form-control textarea-content', 'required', 'placeholder' => 'Contenido del artículo...']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('tags', 'Tags: ') !!}
			{!! Form::select('tags[]', $tags, $my_tags,['class' => 'form-control select-tag', 'multiple' ,'required']) !!}
		</div>	
		<br>
		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>	
	{!! Form::close()  !!}	
@endsection

@section('js')
	<script type="text/javascript">
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione un máximo de 3 tags',			
			max_selected_options: 3,
			no_result_text: "Sin resultados de la búsqueda"
		});
		$(".select-category").chosen
			({
				placeholder_text_single: "Seleccione una categoría",
				no_result_text: "Sin resultados de la búsqueda"
			});
		$('.textarea-content').trumbowyg({ 
			lang:'es_ar',			
		});






		
		
	</script>

@endsection