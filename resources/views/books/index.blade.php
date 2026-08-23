<!DOCTYPE html>
<html>
<head>
    <title>Books on Becoming Successful</title>
</head>
<body>
    <h1>Books on Becoming Successful</h1>
    <p>Prepared by: Renz Tyron Uchi</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>