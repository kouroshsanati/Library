@if( session('success'))
    {{ session('success')}}
@endif

@foreach($books as $book)
    {{ $book->name }}
    <form action="{{route('books.destroy',$book->id)}}" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete">
    </form>
    <br>

@endforeach
