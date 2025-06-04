<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($Books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="/books/{{ $book->id }}/show">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
            </div>
        </li>
    @endforeach
</ul>