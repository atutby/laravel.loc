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
		{{-- method_field('PUT') --}}
		@method('PUT')
		@csrf
		<input type="text" name="name">
		<input type="emial" name="email">
		<button type="submit">Submit</button>
	</form>

	{{ route('post', ['id' => 3, 'cat' => 'Test-2']) }} <br>
	{{ route('admin.post', ['id' => 3, 'cat' => 'Test-2']) }}
</body>
</html>