 @extends('admin.admin')
@section('view')
  <div class="card col-4">
  <div class="card-body">
  <h3>ID продукта: </h3>
  <p>{{$product->id}}</p>
  <h3>Название продукта: </h3>
  <p>{{$product->name}}</p>
  </div>
</div>
@endsection