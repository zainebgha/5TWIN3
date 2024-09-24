<form action="{{route('paniers.store')}}" method="POST">
    @csrf
name: <input type="text" name="name">
code: <input type="text" name="code">
total: <input type="number" name="total">
<button type="submit"> add panier</button>
</form>