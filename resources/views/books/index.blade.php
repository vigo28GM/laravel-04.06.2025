<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($Books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="{{ route('books.show', $book->id)}}">Show</a>
                <a href="{{ route('books.edit', $book->id)}}">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" name="delete">Delete</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>