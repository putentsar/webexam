@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('dish_product.store') }}">
	 {{csrf_field()}}
 <div class="form-group">
  <label for="post-code">Блюдо</label>
    <select name="dish_id" class="form-control" id="exampleFormControlSelect1">
	@foreach($dishes as $dish)
      <option value="{{$dish->id}}"> {{$dish->name}}</option>
	  @endforeach
    </select>
  </div>
  <div class="form-group">
  <label for="post-code">Продукт</label>
    <select name="product_id" class="form-control" id="exampleFormControlSelect1">
	@foreach($products as $product)
      <option value="{{$product->id}}"> {{$product->name}}</option>
	  @endforeach
    </select>
  </div>
    <div class="form-group">
    <label for="post-name">Количество продукта</label>
    <input name="amount" type="name"  value="" class="form-control" id="post-name" required>
  </div>
<button type="submit" class="btn btn-success">Добавить</button>
</form>
@endsection