<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>Welcome to Book Library</title>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-heading">Welcome to Book Library</h1>

        <a href="{{ route('books.create') }}">
            <button class="action-button">Add a Book</button>
        </a>

        <a href="{{ route('books.index') }}">
            <button class="action-button">View All Books</button>
        </a>
    </div>
</body>
</html>
