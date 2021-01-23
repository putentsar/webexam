 @extends('admin.admin')
@section('view')
 <div class="card col-4">
  <div class="card-body">
  <h3>ID продукта :</h3>
  <p>{{$dish_product->product_id}}</p>
   <h3>ID Блюда:</h3>
  <p>{{$dish_product->dish_id}}</p>
    <h3>Количество продукта:</h3>
	 <p>{{$dish_product->amount}}</p>
  </div>
</div>
@endsection