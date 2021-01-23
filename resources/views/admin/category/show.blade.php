 @extends('admin.admin')
@section('view')
  <div class="card col-4">
  <div class="card-body">
    <h1>ID: </h1>
	<p>{{$category->name}}</p>
  <h1>Название категории: </h1>
  <p>{{$category->name}}</p>
  <h1>Код категории: </h1>
  <p>{{$category->code}}</p>
  </div>
</div>
@endsection