<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
</head>
<body>
	<ul>
		@foeach ($products as $product)
			<li style="background:blue;color:white">{!! $product->name !!} - {!! $product->price !!}</li>
		@endforeach
	</ul>
</body>
</html>