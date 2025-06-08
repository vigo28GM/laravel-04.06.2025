<x-app>
<h2>{{ $Book->title }}</h2>
<h3>{{ $Book->author }}</h3>
<p>{{ $Book->released_at }}</p>
<a href="/books">All books</a>
@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
</x-app>