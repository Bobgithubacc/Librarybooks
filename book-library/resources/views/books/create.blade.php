<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Welcome to Book Library</title>
</head>
<body>
    <form action="{{ url('/books') }}" method="post" class="book-form">
        @csrf
        <label for="title" class="form-label">Title:</label>
        <input type="text" name="title" class="form-input" required>

        <label for="author" class="form-label">Author:</label>
        <input type="text" name="author" class="form-input" required>

        <label for="genre" class="form-label">Genre:</label>
        <input type="text" name="genre" class="form-input" required>

        <label for="publication_year" class="form-label">Publication Year:</label>
        <input type="number" name="publication_year" class="form-input" required>

        <button type="submit" class="submit-button">Add Book</button>
    </form>
    <div class="fixed-button-container">
        <a href="{{ route('books.index') }}">
            <button class="action-button">See all Books</button>
        </a>
    </div>
    <div class="fixed-button-container-home">
        <a href="{{ route('home') }}">
            <button class="action-button">Go home</button>
        </a>
    </div>
</body>
</html>
