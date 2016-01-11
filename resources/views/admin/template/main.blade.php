<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	
	<title>
		@yield('title', 'Default') | Panel de Administración
	</title>
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap/css/bootstrap.css') }} ">
</head>
<body>
	@include('admin.template.partials.nav')
	<section>
		@yield('content')	
	</section>
	<script src="{{ asset('plugins/jquery/js/jquery-2.2.0.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" ></script>
</body>
</html>