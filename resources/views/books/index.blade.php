<!DOCTYPE html>
<html>
<head>
    <title>My Books</title>
</head>
<body>

    <h1>My Book List</h1>

    <p>Prepared by: Renz Tyron Uchi</p>

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
                <td>
                    <a href="{{ route('books.show', $book['id']) }}">
                        {{ $book['id'] }}
                    </a>
                </td>

                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
                <td>{{ $book['category'] }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>
