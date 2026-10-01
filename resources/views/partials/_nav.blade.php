<nav>
    <a href="{{ route('books.index') }}" class="{{ request()->is('books*') ? 'active' : '' }}">All Books</a>
    |
    <a href="{{ route('books.featured') }}">Featured</a>
</nav>