<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
</head>
<body>
	
	<form action="{{ route('contact') }}" method='post'>
		{{-- csrf_field() --}}
		@csrf
		<input type="text" name="name">
		<input type="emial" name="email">
		<button type="submit">Submit</button>
	</form>
</body>
</html>