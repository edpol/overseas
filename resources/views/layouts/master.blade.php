<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>OverSeas <?php if (isset($tab)) { echo " | {$tab}"; } ?></title>
	<!-- Custom fonts for this template -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" />
	<!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

</head>
<body>

    @yield('box1')

    @yield('box2')

    @yield('box3')

    @yield('box4')

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>