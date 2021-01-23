 
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('categories.update', $category->id) }}">
	 {{csrf_field()}}
	 {{method_field('PATCH')}}
  <div class="form-group">
    <label for="post-name">Категория блюда</label>
    <input name="name" type="name"  value="{{$category->name}}" class="form-control" id="post-name" required>
  </div>
  <div class="form-group">
    <label for="post-code">Код блюда</label>
    <input name="code" type="code"  value="{{$category->code}}" class="form-control" id="post-code" required>
  </div>
<button type="submit" class="btn btn-success">Отредактировать</button>
</form>
@endsection