<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{{ $pageTitle }}}</title>

	@foreach (\SleepingOwl\Admin\AssetManager\AssetManager::styles() as $style)
		<link media="all" type="text/css" rel="stylesheet" href="{{ $style }}" >
		<!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">
	@endforeach

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	@foreach (\SleepingOwl\Admin\AssetManager\AssetManager::scripts() as $script)
		<script src="{{ $script }}"></script>
	@endforeach
</head>
<body>
	@yield('content')

		<!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('data/morris-data.js') }}"></script><!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>

</body>
</html>
