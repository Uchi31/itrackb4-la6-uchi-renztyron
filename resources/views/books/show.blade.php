<!DOCTYPE html>
<html>
<head>
    <title>{{ $book['title'] }}</title>
</head>
<body>

    <h1>{{ $book['title'] }}</h1>


    <p><strong>ID:</strong> {{ $book['id'] }}</p>
    <p><strong>Title:</strong> {{ $book['title'] }}</p>
    <p><strong>Author:</strong> {{ $book['author'] }}</p>
    <p><strong>Year:</strong> {{ $book['year'] }}</p>
    <p><strong>Category:</strong> {{ $book['category'] }}</p>
    <p>Prepared by: Renz Tyron Uchi</p>

    <p>
        <a href="{{ route('books.index') }}">
            Back to list
        </a>
    </p>

</body>
</html>
