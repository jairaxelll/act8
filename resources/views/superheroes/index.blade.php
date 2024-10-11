<!DOCTYPE html>
<html>
<head>
    <title>Superheroes List</title>
</head>
<body>
    <h1>Superheroes</h1>
    <ul>
        @foreach ($superheroes as $superhero)
            <li>{{ $superhero->name }}</li>
        @endforeach
    </ul>
</body>
</html>