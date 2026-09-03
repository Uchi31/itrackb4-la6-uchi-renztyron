<!DOCTYPE html>
<html>
<head>
    <title>Book Filter</title>
</head>
<body>

    <h1>Book Filter</h1>

    <p>Prepared by: Renz Tyron Uchi</p>

    @if ($value !== null)
        <p>Showing category: {{ $value }}</p>
    @else
        <p>Showing all books</p>
    @endif

    <table border="1" cellpadding="8">

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Category</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{ $book['id'] }}</td>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
                <td>{{ $book['category'] }}</td>
            </tr>
        @endforeach

    </table>

    <p>
        <a href="{{ route('books.index') }}">
            Back to list
        </a>
    </p>

</body>
</html>
