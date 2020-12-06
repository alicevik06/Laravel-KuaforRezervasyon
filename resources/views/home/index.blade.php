<!DOCTYPE html>
<html>
<head>
    <title>İlk Laravel Sayfası</title>
</head>
<body>

<h1>Laravel'e hoşgeldiniz </h1>
<p>This is a paragraph.</p>
<br>
<a href="{{route('test', ['id' => 12,  'name' => 'Ali'])}}">Test Sayfası</a>
</body>
</html>
