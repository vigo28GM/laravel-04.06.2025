<x-app>
<h1>New book</h1>
@if (session("success"))
        {{session("success")}}
@endif
<form action="{{ route('books.store') }}" method="post">
    @csrf
    <input type="text" placeholder="title goes here" name='title'>
    <input type="text" placeholder="author goes here" name='author'>
    <input type="date" placeholder="date goes here" name='released_at'>
    <input type="submit" value="Create">

    @if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

</form>
</x-app>