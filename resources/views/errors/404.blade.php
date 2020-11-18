<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>404 - Not Found</title>
</head>
<body>
<h2>
	<a href="{{ route('home') }}">На HOME</a> || <a href="{{ route('rootPage') }}">На главную</a>
</h2>


<h1>{{ $exception->getMessage() }}</h1>

</body>
</html>