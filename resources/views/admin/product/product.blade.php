@extends('admin.admin')
@section('view')
<a class="btn btn-danger" href="{{route('products.create')}}" role="button">Добавить</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($products as $product)
    <tr>
      <td>{{$product->id}}</td>
	  <td>{{$product->name}}</td>
	 <td class="table-buttons">
	 <a class="btn btn-success" href="{{ route('products.show', $product->id) }}" role="button">view</a>
	 <a class="btn btn-warning" href="{{ route('products.edit', $product) }}" role="button">update</a>
	 <form class="d-inline p-2  text-white" method="POST" action="{{ route('products.destroy', $product->id) }}">
	 {{csrf_field()}}
	 {{method_field('delete')}}
	 <button class="btn btn-danger" href="" role="button">delete</button>
	 </form>
	  </td>
    </tr>
	 @endforeach
  </tbody>
</table>

@endsection