
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('categories.store') }}">
	 {{csrf_field()}}
  <div class="form-group">
    <label for="post-name">Категория блюда</label>
    <input name="name" type="name" class="form-control" id="post-name" required>
  </div>
  <div class="form-group">
    <label for="post-code">Код блюда</label>
    <input name="code" type="code" class="form-control" id="post-code" required>
  </div>
<button type="submit" class="btn btn-success">Добавить</button>
</form>
@endsection