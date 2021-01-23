 
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('dishes.update', $dish->id) }}">
	 {{csrf_field()}}
	 {{method_field('PATCH')}}
 <div class="form-group">
      <label for="post-name">Название блюда</label>
    <input name="name" type="name" class="form-control" id="post-name" value="{{$dish->name}}" required>
  </div>
  <div class="form-group">
    <label for="post-code">Код блюда</label>
    <input name="code" type="code" class="form-control" id="post-code" value="{{$dish->code}}" required>
  </div>
   <div class="form-group">
    <label for="post-code">Калорийность</label>
    <input name="colories" type="code" class="form-control" id="post-code" value="{{$dish->colories}}" required>
  </div>
  <div class="form-group">
    <label for="post-code">Вес блюда</label>
    <input name="weight" type="code" class="form-control" id="post-code" value="{{$dish->weight}}" required>
  </div>
   <div class="form-group">
  <label for="post-code">ID категории</label>
    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
	@foreach($categories as $category)
      <option value="{{$category->id}}"
	  @if($dish->category_id == $category->id )
	  selected
	  @endif
	  > {{$category->name}}</option>
	  @endforeach
    </select>
  </div>
<button type="submit" class="btn btn-success">Отредактировать</button>
</form>
@endsection