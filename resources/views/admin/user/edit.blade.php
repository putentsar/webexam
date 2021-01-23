 
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('products.update', $product->id) }}">
	 {{csrf_field()}}
	 {{method_field('PATCH')}}
  <div class="form-group">
    <label for="post-name">Название продукта</label>
    <input name="name" type="name"  value="{{$product->name}}" class="form-control" id="post-name" required>
  </div>
<button type="submit" class="btn btn-success">Отредактировать</button>
</form>
@endsection