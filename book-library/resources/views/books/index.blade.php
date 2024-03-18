<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Your Book Page</title>
</head>
<body>
    <div class="books-container">
        @foreach($books as $book)
            <div class="book-item">
                <div class="book-info">
                    <h2 class="book-title">{{ $book->title }}</h2>
                    <p class="book-info">Author: {{ $book->author }}</p>
                    <p class="book-info">Genre: {{ $book->genre }}</p>
                    <p class="book-info">Publication Year: {{ $book->publication_year }}</p>
                </div>
                <div>
                    <a href="{{ url('/books/'.$book->id.'/edit') }}" class="edit-button">Edit</a>
                    <form action="{{ url('/books/'.$book->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="delete-button" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="fixed-button-container">
        <a href="{{ route('books.create') }}">
            <button class="action-button">Add a Book</button>
        </a>
    </div>
</body>
</html>
