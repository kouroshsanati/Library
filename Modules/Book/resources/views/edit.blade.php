<form action="{{route('books.update',$book->id)}}" method="post">
    @csrf
    @method('PUT')
    <label>Name </label>
    <input type="text" name="name" value="{{$book->name}}">
    <br>
    <label>Isbn </label>
    <input type="text" name="isbn" value="{{$book->isbn}}">
    <br>
    <label>Price </label>
    <input type="text" name="price" value="{{$book->price}}">
    <br>
    <input type="submit" name="submit">
</form>
