<!DOCTYPE html>
<html>
<head>
    <title>Add New Superhero</title>
</head>
<body>
    <h1>Add New Superhero</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <div>
            <label for="real_name">Real Name:</label>
            <input type="text" id="real_name" name="real_name" required>
        </div>
        <div>
            <label for="hero_name">Hero Name:</label>
            <input type="text" id="hero_name" name="hero_name" required>
        </div>
        <div>
            <label for="photo_url">Photo URL:</label>
            <input type="url" id="photo_url" name="photo_url" required>
        </div>
        <div>
            <label for="additional_information">Additional Information:</label>
            <textarea id="additional_information" name="additional_information"></textarea>
        </div>
        <div>
            <button type="submit">Add Superhero</button>
        </div>
    </form>
</body>
</html>