 
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('dish_product.update', $dish_product->id) }}">
	 {{csrf_field()}}
	 {{method_field('PATCH')}}
 <div class="form-group">
  <label for="post-code">Блюдо</label>
    <select name="dish_id" class="form-control" id="exampleFormControlSelect1">
	@foreach($dishes as $dish)
      <option value="{{$dish->id}}"
	    @if($dish_product->dish_id == $dish->id )
	  selected
	  @endif
	  > {{$dish->name}}</option>
	  @endforeach
    </select>
  </div>
  <div class="form-group">
  <label for="post-code">Продукт</label>
    <select name="product_id" class="form-control" id="exampleFormControlSelect1">
	@foreach($products as $product)
      <option value="{{$product->id}}"
	    @if($dish_product->product_id == $product->id )
	  selected
	  @endif
	  > {{$product->name}}</option>
	  @endforeach
    </select>
  </div>
   <div class="form-group">
    <label for="post-name">Количество продукта</label>
    <input name="amount" type="name"  value="{{$dish_product->amount}}" class="form-control" id="post-name" required>
  </div>
<button type="submit" class="btn btn-success">Отредактировать</button>
</form>
@endsection