<x-app>
<h1>Books</h1>
<a href="/books/create">Create a book</a>
@if (session("success"))
        {{session("success")}}
@endif
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
        @if(session('success'))
    <div class="alert alert-success" style="margin: 10px 0; padding: 10px; background-color: #d4edda; border-left: 5px solid #28a745; color: #155724;">
        {{ session('success') }}
    </div>
@endif
    @endforeach
    
</ul>
</x-app>