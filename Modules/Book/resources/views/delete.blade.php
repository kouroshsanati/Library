@foreach($books as $book)
    {{ $book->name }}
    <form action="{{route('book.force.delete',$book->id)}}" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete">
    </form>
    <br>
@endforeach
