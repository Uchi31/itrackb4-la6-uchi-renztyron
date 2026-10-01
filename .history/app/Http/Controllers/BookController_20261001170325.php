<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private function getBooks()
    {
        return [
            1 => ['id' => 1, 'title' => 'Think and Grow Rich', 'author' => 'Napoleon Hill', 'year' => 1937, 'category' => 'Motivation'],
            2 => ['id' => 2, 'title' => 'The 7 Habits of Highly Effective People', 'author' => 'Stephen R. Covey', 'year' => 1989, 'category' => 'Self-Help'],
            3 => ['id' => 3, 'title' => 'Atomic Habits', 'author' => 'James Clear', 'year' => 2018, 'category' => 'Self-Help'],
            4 => ['id' => 4, 'title' => 'How to Win Friends and Influence People', 'author' => 'Dale Carnegie', 'year' => 1936, 'category' => 'Motivation'],
            5 => ['id' => 5, 'title' => 'Mindset: The New Psychology of Success', 'author' => 'Carol S. Dweck', 'year' => 2006, 'category' => 'Psychology'],
            6 => ['id' => 6, 'title' => 'The Power of Now', 'author' => 'Eckhart Tolle', 'year' => 1997, 'category' => 'Psychology'],
        ];
    }

    public function index(Request $request)
{
    $books = $this->getBooks();

    $category = $request->query('category', '');
    $year = $request->query('year', '');

    if ($category !== '') {
        foreach ($books as $key => $book) {
            if ($book['category'] !== $category) {
                unset($books[$key]);
            }
        }
    }

    if ($year !== '') {
        foreach ($books as $key => $book) {
            if ($book['year'] != $year) {
                unset($books[$key]);
            }
        }
    }

    return view('books.index', [
        'books' => $books,
        'category' => $category,
        'year' => $year,
    ]);
}

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $books = $this->getBooks();

        if (!isset($books[$id])) {
            abort(404);
        }

        return view('books.show', ['book' => $books[$id]]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $books = $this->getBooks();
        $featured = $books[3];

        return view('books.show', ['book' => $featured]);
    }

    
}