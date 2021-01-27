@extends('admin.admin')
@section('view')
<a class="btn btn-danger" href="{{route('products.create')}}" role="button">Добавить</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Название продукта</th>
	  <th scope="col"></th>
    </tr>
  </thead>
   <tbody>
   @foreach($products as $product)
    <tr>
      <td>{{$product->id}}</td>
	  <td>{{$product->name}}</td>
	<td class="table-buttons">
	 <form  class="d-inline p-2  text-white" method="POST" action="{{ route('products.destroy', $product) }}">
	 {{csrf_field()}}
	 {{method_field('delete')}}
	 <button id="button3" class="btn btn-danger" href="" role="button">delete</button>
	 </form>
	 	 <a id="button2" class="btn btn-warning" href="{{ route('products.edit', $product) }}" role="button">update</a>
	 <a id="button1" class="btn btn-success" href="{{ route('products.show', $product) }}" role="button">view</a>
	  </td>
    </tr>
	 @endforeach
  </tbody>
</table>

@endsection