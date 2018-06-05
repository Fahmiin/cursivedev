<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>The Cursive Developer</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

		@yield('css')

	</head>
	<body id="body">
		
		@yield('content')

	</body>

	<script src="{{asset('js/materialize.min.js')}}"></script>
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>

	@yield('js')
</html>