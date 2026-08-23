<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
        ['title' => 'Think and Grow Rich',                    'author' => 'Napoleon Hill',      'year' => 1937],
        ['title' => 'The 7 Habits of Highly Effective People', 'author' => 'Stephen R. Covey',   'year' => 1989],
        ['title' => 'Atomic Habits',                           'author' => 'James Clear',         'year' => 2018],
        ['title' => 'How to Win Friends and Influence People','author' => 'Dale Carnegie',       'year' => 1936],
        ['title' => 'Mindset: The New Psychology of Success',  'author' => 'Carol S. Dweck',      'year' => 2006],
        ];
        return view('books.index', ['books' => $books]);
    }
}
