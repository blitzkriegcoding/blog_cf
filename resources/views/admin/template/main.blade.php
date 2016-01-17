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
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">@yield('title')</h3>
			  </div>
			  <div class="panel-body">
			    @yield('content')
			  </div>
			</div>			


		</div>
	</div>
	<script src="{{ asset('plugins/jquery/js/jquery-2.2.0.js') }}" type="text/javascript" charset="utf-8" ></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" ></script>
</body>
</html>