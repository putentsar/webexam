
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('reviews.store') }}">
	 {{csrf_field()}}
  <div class="form-group">
    <label for="post-name">Название продукта</label>
    <input name="comment" type="name" class="form-control" id="post-name" required>
  </div>
     <div class="form-group">
  <label for="post-code">ID категории</label>
    <select name="dish_category" class="form-control" id="exampleFormControlSelect1">
	@foreach($dishes as $)
      <option value="{{$review->dish_id}}"> {{$review->dish_id}}</option>
	  @endforeach
    </select>
  </div>
   <div class="form-group">
  <label for="post-code">ID категории</label>
    <select name="user_id" class="form-control" id="exampleFormControlSelect1">
	@foreach($reviews as $review)
      <option value="{{$review->user_id}}"> {{$review->user_id}}</option>
	  @endforeach
    </select>
  </div>
<button type="submit" class="btn btn-success">Добавить</button>
</form>
@endsection