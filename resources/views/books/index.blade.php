@extends('layouts.app')

@section('title', 'All Books')

@section('content')
    @forelse ($books as $book)
        @if ($loop->first)
            <table class="table table-striped table-bordered">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                </tr>
        @endif

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><a href="{{ route('books.show', $book['id']) }}">{{ $book['title'] }}</a></td>
            <td>{{ $book['author'] }}</td>
            <td>
                {{ $book['year'] }}
                @if ($book['year'] < 1950)
                    <span>(Classic)</span>
                @endif
            </td>
        </tr>

        @if ($loop->last)
            </table>
        @endif
    @empty
        <p>No books are available right now. Please check back later.</p>
    @endforelse
@endsection