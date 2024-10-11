<!DOCTYPE html>
<html>
<head>
    <title>Edit Superhero</title>
</head>
<body>
    <h1>Edit Superhero</h1>
    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="real_name">Real Name:</label>
            <input type="text" id="real_name" name="real_name" value="{{ $superhero->real_name }}" required>
        </div>
        
        <div>
            <label for="hero_name">Hero Name:</label>
            <input type="text" id="hero_name" name="hero_name" value="{{ $superhero->hero_name }}" required>
        </div>
        
        <div>
            <label for="photo_url">Photo URL:</label>
            <input type="text" id="photo_url" name="photo_url" value="{{ $superhero->photo_url }}" required>
        </div>
        
        <div>
            <label for="additional_information">Additional Information:</label>
            <textarea id="additional_information" name="additional_information" required>{{ $superhero->additional_information }}</textarea>
        </div>
        
        <div>
            <button type="submit">Update Superhero</button>
        </div>
    </form>
</body>
</html>