<!DOCTYPE html>
<html>
<head>
<title>Looping</title>
</head>
<body>
	@foreach($mahluk as $data)
	{{$data}}<hr>
	@endforeach

	@foreach($buahn as $data)
	{{$data}}<hr>
	@endforeach

	@foreach($komputer as $data)
	{{$data}}<hr>
	@endforeach
</body>
</html>