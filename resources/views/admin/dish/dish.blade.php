@extends('admin.admin')
@section('view')
<a class="btn btn-danger" href="{{route('dishes.create')}}" role="button">Добавить</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($dishes as $dish)
    <tr>
      <td>{{$dish->id}}</td>
	  <td>{{$dish->name}}</td>
	<td class="table-buttons">
	 <form  class="d-inline p-2  text-white" method="POST" action="{{ route('dishes.destroy', $dish) }}">
	 {{csrf_field()}}
	 {{method_field('delete')}}
	 <button id="button3" class="btn btn-danger" href="" role="button">delete</button>
	 </form>
	 	 <a id="button2" class="btn btn-warning" href="{{ route('dishes.edit', $dish) }}" role="button">update</a>
	 <a id="button1" class="btn btn-success" href="{{ route('dishes.show', $dish) }}" role="button">view</a>
	  </td>
    </tr>
	 @endforeach
  </tbody>
</table>

@endsection