<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Halo, {{ $nama }}!</h1>
    <h3>Daftar Kursus:</h3>
    <ul>
        @foreach ($courses as $c)
            <li>{{ $c }}</li>
        @endforeach
    </ul>
</body>
</html>