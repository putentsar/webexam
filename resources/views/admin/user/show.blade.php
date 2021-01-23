 @extends('admin.admin')
@section('view')
 <div class="card col-4">
  <div class="card-body">
  <h3>ID юзера: </h3>
  <p>{{$user->id}}</p>
  <h3>Имя: </h3>
  <p>{{$user->name}}</p>
  <h1>email: </h1>
  <p>{{$user->email}}</p>
  </div>
</div>
@endsection