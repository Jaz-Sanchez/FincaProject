<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"	>
<head>
	<meta charset="UTF-8">
	<title>Gestion Agroem</title>
	<link rel="stylesheet" href="/css/app.css">


</head>
<body>
	<div class="container">
		<hr>
		@if (session()->has('flash'))
			<div class="alert alert-info">{{ session('flash') }}</div>
		@endif

		@yield('content')
			
	</div>
</body>
</html>