<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	
	<title>
		@yield('title', 'Default') | Panel de Administración
	</title>
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap/css/bootstrap.css') }} ">
	<link rel="stylesheet"  href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
</head>
<body>
	<div class="container col-md-10 col-md-offset-1">
		@include('admin.template.partials.nav')	
	</div>
	
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">@yield('title')</h3>
			  </div>
			  <div class="panel-body">
			  	@include('flash::message')
			  	@include('admin.template.partials.errors')
			    @yield('content')
			  </div>
			</div>			


		</div>
	</div>
	<script src="{{ asset('plugins/jquery/js/jquery-2.2.0.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script src="{{ asset('plugins/trumbowyg/langs/es_ar.min.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script src="{{ asset('plugins/dropzone/dropzone.js') }}" type="text/javascript" charset="utf-8" ></script>


	@yield('js')
</body>
</html>