<form action="{{route('books.store')}}" method="post">
    @csrf
    <label>Name </label>
    <input type="text" name="name">
    <br>
    <label>Isbn </label>
    <input type="text" name="isbn">
    <br>
    <label>Price </label>
    <input type="text" name="price">
    <br>
    <input type="submit" name="submit">

</form>
