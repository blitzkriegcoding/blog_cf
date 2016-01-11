<!DOCTYPE html>
<html>
<head lang="es">
	<title>
		{{ $article->title }}
	</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="">
</head>
<body>
	CODIGO FACILITO
	<br>
	<br>
	<h1>
		{{ $article->title }}
	</h1>
	<hr>
	{{ $article->content }}
	<hr>
	{{ $article->user->name }} | {{ $article->category->name }} | 
	@foreach($article->tags as $tag)
		{{ $tag->name }}
	@endforeach

</body>
</html>