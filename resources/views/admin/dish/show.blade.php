 @extends('admin.admin')
@section('view')
 <div class="card col-4">
  <div class="card-body">
  <h1>Название блюда:</h1>
  <p>{{$dish->name}}</p>
  <h1>Калорийность:</h1>
  <p>{{$dish->id}}</p>
  <h1>Вес:</h1>
  <p>{{$dish->weight}}</p>
  </div>
</div>
@endsection