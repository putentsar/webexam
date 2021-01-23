@extends('admin.admin')
@section('view')
<a class="btn btn-danger" href="{{route('dish_product.create')}}" role="button">Добавить</a>
<table class="table table-striped">
  <thead>
    <tr>
	<th scope="col">id</th>
      <th scope="col">product_id</th>
      <th scope="col">dish_id</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
 @foreach($dish_products as $dish_product)
    <tr>
      <td>{{$dish_product->id}}</td>
	   <td>{{$dish_product->product_id}}</td>
	   <td>{{$dish_product->dish_id}}</td>
	 <td>
	 <a class="btn btn-success" href="{{ route('dish_product.show', $dish_product) }}" role="button">view</a>
	 <a class="btn btn-warning" href="{{ route('dish_product.edit', $dish_product) }}" role="button">update</a>
	  <form class="d-inline p-2  text-white" method="POST" action="{{ route('dish_product.destroy', $dish_product->id) }}">
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