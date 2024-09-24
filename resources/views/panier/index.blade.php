<a href="{{route('paniers.create')}}">create panier</a> <br>
@foreach($paniers as $pa)
<tr>
   <td> {{$pa->id}} </td>
   <td> {{$pa->name}} </td>
   <td> {{$pa->code}} </td>
   <td> {{$pa->total}} </td>
   <form action="{{route('paniers.destroy',$pa->id)}}" method="POST">
      <a href="{{route('paniers.edit',$pa->id)}}">edit panier</a> <br>
      @csrf
    @method('DELETE')
    <button type='submit'> delete panier </button>
   </form>
</tr><br>
@endforeach
