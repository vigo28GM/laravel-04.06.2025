<h1>Edit book</h1>

<form action="{{ route('books.update', $Book->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" placeholder="title goes here" value="{{ $Book->title }}">
    <input type="text" name="author" placeholder="author goes here" value="{{ $Book->author }}">
    <input type="date" name="released_at" placeholder="date goes here" value="{{ $Book->released_at }}">
    <input type="submit" value="Update">
</form>