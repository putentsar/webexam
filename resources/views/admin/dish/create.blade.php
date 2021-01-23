
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('dishes.store') }}">
	 {{csrf_field()}}
  <div class="form-group">
      <label for="post-name">Название блюда</label>
    <input name="name" type="name" class="form-control" id="post-name" required>
  </div>
  <div class="form-group">
    <label for="post-code">Код блюда</label>
    <input name="code" type="code" class="form-control" id="post-code" required>
  </div>
   <div class="form-group">
    <label for="post-code">Калорийность</label>
    <input name="colories" type="code" class="form-control" id="post-code" required>
  </div>
  <div class="form-group">
    <label for="post-code">Вес блюда</label>
    <input name="weight" type="code" class="form-control" id="post-code" required>
  </div>
   <div class="form-group">
  <label for="post-code">ID категории</label>
    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
	@foreach($categories as $category)
      <option value="{{$category->id}}"> {{$category->name}}</option>
	  @endforeach
    </select>
    
  </div>
<button type="submit" class="btn btn-success">Добавить</button>
</form>
@endsection