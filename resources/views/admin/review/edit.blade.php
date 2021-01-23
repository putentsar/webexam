 
@extends('admin.admin')
@section('view')
 <form method="POST" action="{{ route('reviews.update', $review->id) }}">
	 {{csrf_field()}}
	 {{method_field('PATCH')}}
  <div class="form-group">
    <label for="post-name">Комментарий</label>
    <input name="comment" type="name"  value="{{$review->comment}}" class="form-control" id="post-name" required>
  </div>
<button type="submit" class="btn btn-success">Отредактировать</button>
</form>
@endsection