 @extends('admin.admin')
@section('view')
  <div class="card col-4">
  <div class="card-body">
   <h3>ID: </h3>
   <p>{{$review->id}}</p>
   <h3>Комментарий: </h3>
  <p>{{$review->comment}}</p>
   <h3>USER_ID: </h3>
   <p>{{$review->user_id}}</p>
    <h3>DISH_ID: </h3>
    <p>{{$review->dish_id}}</p>
  </div>
</div>
@endsection