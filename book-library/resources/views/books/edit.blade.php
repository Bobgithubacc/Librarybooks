<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <title>Edit Book - Book Library</title>
</head>
<body>
    <form action="{{ url('/books/'.$book->id) }}" method="post" class="book-form">
        <h2>Edit Book</h2>
        @csrf
        @method('put')

        <label for="title" class="form-label">Title:</label>
        <input type="text" name="title" class="form-input" value="{{ $book->title }}" required>

        <label for="author" class="form-label">Author:</label>
        <input type="text" name="author" class="form-input" value="{{ $book->author }}" required>

        <label for="genre" class="form-label">Genre:</label>
        <input type="text" name="genre" class="form-input" value="{{ $book->genre }}" required>

        <label for="publication_year" class="form-label">Publication Year:</label>
        <input type="number" name="publication_year" class="form-input" value="{{ $book->publication_year }}" required>

        <button type="submit" class="submit-button">Update Book</button>
    </form>
</body>
</html>
