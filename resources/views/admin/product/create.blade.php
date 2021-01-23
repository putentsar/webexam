
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('products.store') }}">
	 {{csrf_field()}}
  <div class="form-group">
    <label for="post-name">Название продукта</label>
    <input name="name" type="name" class="form-control" id="post-name" required>
  </div>
<button type="submit" class="btn btn-success">Добавить</button>
</form>
@endsection